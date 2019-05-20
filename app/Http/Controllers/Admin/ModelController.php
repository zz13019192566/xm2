<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\User;
use App\Model\Admin\Userinfo;
use DB;
class ModelController extends Controller
{
    //
    public function store(Request $request){
    	//模型的增删改查
    	

    	//查询
    	// $rs = User::all();
    	
    	// $rs = User::get();

    	// $rs = DB::table('user')->get();

    	// $rs = User::where('id',5)->first();
    	// 
    	
    	// $rs = User::find(5);
    	
    	//分页
    	// $rs = User::paginate(3);

    	 //添加数据
    	 
    	 // $us = new User;

    	 // $us->uname ='老王';

    	 // $us->password = '123456';
    	 // $us->age = 20;
    	 // $us->class = '222';

    	 // $rs=$us->save();
    	  
    	 //create 批量的赋值
    	 //
    	 // $arr = ['uname'=>'rrffr','password'=>'123456','age'=>30,'class'=>'212'];

    	 // // $rs = User::create($arr);
    	 
    	 // $rs = User::insert($arr);

    	//删除
    	//返回受影响函数
    	// $rs= User::destroy(14);
    	// 
    	// $rs = User::where('id',15)->delete();
    	//修改
    	
    	// $rs = User::find(1);

    	// $rs->uname = 

    	// $rs->save();
    	
    	//  $arr = ['uname'=>'rrffr','password'=>'123456','age'=>30,'class'=>'212'];

    	// $rs = User::where('id',1)->update($arr);

    	 // dump($rs);
    	// 
    	// foreach($rs as $k=>$v){
    	// 	dump($v->uname);
    	// }
    	// $rs = User::find(5)->uinfo;

    	// $rs = User::with('uinfo')->where('id',5)->first();
		


    	// dump($rs->uname);
    	
    	// dump($rs['uinfo']->email);

    	$arr = ['uname'=>'2223','password'=>'123456','age'=>30,'class'=>'212'];

    	$rs = User::create($arr);

    	//查找suer id
    	
    	$id = $rs->id;

    	$res = User::find($id);

    	$data = $res->uinfo()->create(['email'=>'123456@qq.com','phone'=>'1234567']);

    	dump($data);

    	// return view('admin.user.model',['rs'=>$rs]);
    }
}
