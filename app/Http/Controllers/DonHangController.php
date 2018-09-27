<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\User;

class DonHangController extends Controller
{
	
	public function index_admin()
    {
        // for admin page
		$donhangs = DonHang::all();
		return view('admin/donhang/index',['donhangs' => $donhangs]);
    }
	public function create_admin()
    {
     	 //
		 return view('admin/mathang/create');
    }
	public function store_admin(Request $request)
    {
        $user = new User;
		$validator = Validator::make($request->all(), $user->rules, $user->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$request['Role']=2;
			$request['Active']=0;
			$user = User::create(request([
				'username',
				'email', 
				'password',
				'HoVaTen', 
				'NgaySinh', 
				'SoDienThoai', 
				'GioiTinh', 
				'DiaChi', 
				'ThanhPho',
				'Quan',
				'Role',
				'Active'
			]));
			return redirect('/admin/nguoidung');
		}
    }
	public function show_admin($id)
    {
        //
		$donhang = DonHang::where('id','=',$id)->first();
		return view('admin/donhang/show',['donhang' => $donhang]);
    }
	public function edit_admin($id)
    {
        //
		$donhang = DonHang::where('id','=',$id)->first();
		return view('admin/donhang/edit',['donhang' => $donhang]);
    }
	
	
	
	public function create()
    {
        //
		return view('user/create');
    }
	public function store(Request $request)
    {
        //
		$user = new User;
		$validator = Validator::make($request->all(), $user->rules, $user->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$request['Role']=2;
			$request['Active']=0;
			$user = User::create(request([
				'username',
				'email', 
				'password',
				'HoVaTen', 
				'NgaySinh', 
				'SoDienThoai', 
				'GioiTinh', 
				'DiaChi', 
				'ThanhPho',
				'Quan',
				'Role',
				'Active'
			]));
			
			auth()->login($user);
			return redirect('/');
		}
    }
	public function show($id)
    {
        $loaimathang = LoaiMatHang::where('id','=',$id)->first();
		return view('/loaimathang/show',['mathang' => $loaimathang]);

    }
	public function edit($id)
    {
        //
    }
	public function update(Request $request, $id)
    {
        //
		$loaimathang = LoaiMatHang::where('id','=',$id)->first();
		
		
		$validator = Validator::make($request->all(), $loaimathang->rules, $loaimathang->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$loaimathang->TenLoaiMatHang = $request['TenLoaiMatHang'];
			$loaimathang->save();
			return redirect()->back();
		}
    }
	public function destroy($id)
    {
        //
		$loaimathang = LoaiMatHang::where('id','=',$id)->first();
		$loaimathang->delete();
		return redirect()->back();
    }
}