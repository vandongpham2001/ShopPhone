<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UserRequest;
use App\Http\Services\User\UserService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function show(User $user)
    {
        return view('admin.users.edit', [
            'title' => 'Chỉnh sửa người dùng: ' . $user->name,
            'users' => $user
        ]);
    }

    public function update(User $user, UserRequest $request)
    {
        $result = $this->userService->update($request, $user);
        if ($result) {
            return redirect('/admin/users/list');
        }
        return redirect()->back();
    }

    //
    public function index()
    {
        return view('admin/users/login', [
            'title' => 'Đăng nhập hệ thống'
        ]);
    }

    public function store(Request $request)
    {
//        dd($request->input());
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $request->input('remember'))) {
            $role = $this->getUser($request);
            if ($role == 1)
                return redirect()->route('admin');
            else {
                Session::flash('error', 'Vui lòng đăng nhập với tài khoản admin');
                return redirect()->back();
            }
        }
        Session::flash('error', 'Email hoặc mật khẩu không chính xác');
        return redirect()->back();
    }

    public function create()
    {
        return view('admin.Users.add', [
            'title' => 'Thêm người dùng mới'
        ]);
    }

    public function list()
    {
        return view('admin.Users.list', [
            'title' => 'Danh sách người dùng',
            'users' => $this->userService->getAll()
        ]);
    }

    public function destroy(Request $request)
    {
        $result = $this->userService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xoá thành công người dùng'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }

    public function getUser(Request $request)
    {
        $id = (string)$request->input('email');
        $user = User::where('email', $id)->first();
        return $user->role_id;
    }

    public function logout(){
        Auth::logout();
        return view('admin/users/login', [
            'title' => 'Đăng nhập hệ thống'
        ]);
    }
}
