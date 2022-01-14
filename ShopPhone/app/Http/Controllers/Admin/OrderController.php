<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\OrderRequest;
use App\Http\Services\Order\OrderService;
use App\Models\order;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderservice;

    public function __construct(OrderService $orderservice)
    {
        $this->orderservice=$orderservice;
    }
    public function index()
    {
        return view('admin.order.list', [
            'title' => 'Danh sách đơn hàng',
            'orders'=> $this->orderservice->getAll()
        ]);
    }
    public function show(order $order)
    {
        return view('admin.order.edit', [
            'title' => 'Chỉnh sửa đơn hàng - khách hàng: ' . $order->user->name,
            'order' => $order,
            'user' => $this->orderservice->getAllUser()
        ]);
    }
    public function update(order $order, OrderRequest $request)
    {
        $result = $this->orderservice->update($request, $order);
        if ($result) {
            return redirect('/admin/order/list');
        }
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $result = $this->orderservice->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xoá thành công đơn hàng'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }
    public function view(order $order)
    {
     
        return view('admin.order.detail',[
            'title' => 'Chi tiết đơn hàng: Đơn hàng ' . $order->id,
            'order' => $order,
            'user' => $this->orderservice->getAllUser(),
            'orderdetails'=>$order->ordersdetails()->get()
        ]);
    }
}