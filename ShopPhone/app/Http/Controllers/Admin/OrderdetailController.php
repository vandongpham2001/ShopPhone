<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Http\Requests\Order\OrderdetailRequest;
use App\Http\Services\Order\OrderService;
use App\Http\Services\Order\OrderdetailService;
use App\Models\image;

use App\Models\ordersdetail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderdetailController extends Controller
{
    protected $orderdetail;

    public function __construct(OrderdetailService $imageService)
    {
        $this->orderdetail = $imageService;
    }

    public function index()
    {
        return view('admin.orderdetail.list', [
            'title' => 'Chi tiết đơn hàng',
            'orderdetails'=>$this->orderdetail->getAll()
        ]);
    }
    public function show(ordersdetail $orderdetail)
    {
        return view('admin.order.editdetail', [
            'title' => 'Chỉnh sửa chi tiết đơn hàng - Sản Phẩm: ' . $orderdetail->productdetail->product->name,
            'orderdetail' => $orderdetail,
  
        ]);
    }
    public function update(ordersdetail $orderdetail, OrderdetailRequest $request)
    {
        $result = $this->orderdetail->update($request, $orderdetail);
        if ($result) {
            return redirect('/admin/order/view/'.$orderdetail->order->id);
        }
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $result = $this->orderdetail->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xoá thành công sản phẩm'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }
}