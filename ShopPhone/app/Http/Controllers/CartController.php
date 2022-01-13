<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cart\CartRequest;
use App\Http\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService){
        $this->cartService=$cartService;
    }

    public function index(Request $request){
        $result=$this->cartService->create($request);
//        dd(Session::get('carts'));
        if ($result==false){
            return redirect()->back();
        }
//        return redirect('/carts');
        return redirect()->back();
    }

    public function show(){
        $products=$this->cartService->getProduct();
        return view('carts.list', [
            'title'=>'Giỏ hàng',
            'products'=>$products,
            'carts'=>Session::get('carts')
        ]);
    }

    public function update(Request $request){
        $this->cartService->update($request);

        return redirect('/carts');
    }

    public function remove($id=0){
        $this->cartService->remove($id);

        return redirect('carts');
    }

    public function addCart(CartRequest $request){
//        dd($request->input());
        $this->cartService->addCart($request);

        return redirect()->back();
    }
}
