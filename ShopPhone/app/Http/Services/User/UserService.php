<?php

namespace App\Http\Services\User;

use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserService
{

    public function show(){
        return User::orderBy('id')->get();
    }

    public  function getAll(){
        return User::orderBy('id')->paginate(10);
    }
    public function update($request, $user) : bool
    {
        try{
            $user->fill($request->input());
            $user->save();
            Session::flash('success', 'Cập nhật người dùng thành công');
        }
        catch (\Exception $err){
            Session::flash('error', 'Cập nhật người dùng lỗi');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }
    public function destroy($request){
        $id=(int) $request->input('id');
        $product=User::where('id', $id)->first();
        if ($product){
            return User::where('id', $id)->delete();
        }
        return false;
    }
}