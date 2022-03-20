<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banner\BannerRequest;
use App\Http\Services\Banner\BannerService;
use App\Http\Services\Order\OrderdetailService;
use App\Models\order;
use App\Models\ordersdetail;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ThongKeController extends Controller
{
    protected $orderdetailservice;

    public function __construct(OrderdetailService $orderservice)
    {
        $this->orderdetailservice=$orderservice;
    }
   public function index()
   {
       $donhang= order::count();
       $user_count=User::count()-1;
       $total=0;
       $sanpham=0;
       foreach($this->orderdetailservice->getAlldetail() as $key=>$detail)
       {
            $sanpham+=$detail->soLuong;
            $total+=$detail->soLuong*$detail->giaMua;
       }

    return view('admin.thongke.index', [
        'title' => 'Thống kê',
        'order_count'=>$donhang,
        'product_count'=>$sanpham,
        'user_count'=>$user_count,
        'totalcash'=>$total
    ]);
    }
    public function detail_list()
    {
        return view('admin.thongke.detail_list', [
            'title' => 'Chi tiết đơn hàng',
            'orderdetails'=>$this->orderdetailservice->getAlldetail(),
//            'orderdetails'=>$this->orderdetailservice->getAllProductByDetail(),
            'doanhthus'=>$this->orderdetailservice->getAlldetailNoPaginate()
        ]);
    }
}
