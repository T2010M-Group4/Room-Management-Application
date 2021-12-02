<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class District extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('/admin')->send();
        }
    }
    public function add_district(){
        $this -> AuthLogin();
        return view('admin.add_district');
    }
    public function all_district(){
        $this -> AuthLogin();
        $all_district = DB::table('tbl_district')->get();
        $manager_district = view('admin.all_district')->with('all_district', $all_district);
        return view('admin_layout')->with('admin.all_district', $manager_district);
    }
    public function save_district(Request $request){
        $this -> AuthLogin();
        $data = array();
        $data['district_name'] = $request->district_name;
        $data['district_desc'] = $request->district_desc;
        $data['district_status'] = $request->district_status;

        DB::table('tbl_district')->insert($data);
        Session::put('message','Thêm quận thành công');
        return Redirect::to('add-district');
    }

    public function unactive_district($district_id){
        $this -> AuthLogin();
        DB::table('tbl_district')->where('district_id', $district_id)->update(['district_status' => 1]);
        Session::put('message','Không kích hoạt danh mục phòng thành công');
        return Redirect::to('all-district');
    }
    public function active_district($district_id){
        $this -> AuthLogin();
        DB::table('tbl_district')->where('district_id', $district_id)->update(['district_status' => 0]);
        Session::put('message','Kích hoạt danh mục phòng thành công');
        return Redirect::to('all-district');
    }

    public function edit_district($district_id){
        $this -> AuthLogin();
        $edit_district = DB::table('tbl_district')->where('district_id', $district_id)->get();
        $manager_district = view('admin.edit_district')->with('edit_district', $edit_district);
        return view('admin_layout')->with('admin.edit_district', $manager_district);
  
    }
    public function update_district(Request $request, $district_id){
        $this -> AuthLogin();
        $data = array();
        $data['district_name'] = $request->district_name;
        $data['district_desc'] = $request->district_desc;

        DB::table('tbl_district')->where('district_id', $district_id)->update($data);
        Session::put('message','Cập nhật danh mục phòng thành công');
        return Redirect::to('all-district');
    }
    public function delete_district($district_id){
        $this -> AuthLogin();
        DB::table('tbl_district')->where('district_id', $district_id)->delete();
        Session::put('message','Xóa danh mục phòng thành công');
        return Redirect::to('all-district');
    }
}
