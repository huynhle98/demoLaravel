<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(){
        $users = DB::table('users')->get();
        return view('backend.user.index', compact('users'));
    }

    public function viewadduser(){
        return view('backend.user.viewadduser');
    }

    public function adduser(Request $request){
        $arr = array();

        $arr['name'] = $request->name;
        $arr['email'] = $request->email;

        DB::table('users')->insert($arr);
        return Redirect::to('/users');
    }

    public function deleteuser($id){
        DB::table('users')->where('id','=',$id)->delete();
        return Redirect::to('/users')->with('success','Đã xóa user');
    }

    public function viewupdateuser($id)
    {
        $user = DB::table('users')->find($id);
        return view('backend.user.viewupdateuser')->with(compact('user'));
    }
    public function updateuser(Request $request, $id)
    {
        $updated = DB::table('users')
            ->where('id', '=', $id)
            ->update([
                'name'       => $request->input('name'),
                'email'      => $request->input('email'),
                ]);
        return Redirect::to('/users')
            ->with('message', 'Cập nhật sản phẩm thành công');
    }
}
