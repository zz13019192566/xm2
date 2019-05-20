<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class DatabsController extends Controller
{
    //
    //
    public function tables(){
    	//原始查询
    	// $rs = DB::select('select * from user');

    	//添加
    	// $rs = '没数据';
    	// $rs = DB::insert('insert into user(uname,password,age,class)value("王八",123456,20,"214")');
    	
    	// $rs = DB::update();

    	// $rs = DB::delete();

    	// DB::statement('drop table user');
    	

    	//PDO 命名占位符

    	// $results = DB::select('select * from user where id= :id',['id'=>1]);
    	// 问号占位符
    	// $results = DB::select('select * from user where id= ?',[1]);
    	// dump($results);
    	// 
    	// DB::beginTransaction();

    	// DB::rollback();

    	// DB::commit();
    	// 
    	// 查询
    	// $rs = DB::table('user')->where('id','=',1)->get();
    	//添加数据
    	// $arr =['uname'=>'王八','password'=>'123456','age'=>20,'class'=>'222'];
    	// 
    	// 插入单条数据
    	// $rs = DB::table('user')->insert($arr);
    	//插入多条数据
    	
    	// $arr =[
    	// 	['uname'=>'王八1','password'=>'123456','age'=>20,'class'=>'222'],
    	// 	['uname'=>'王八2','password'=>'123456','age'=>20,'class'=>'222'],
    	// 	['uname'=>'王八3','password'=>'123456','age'=>20,'class'=>'222']
    	// ];

    	// $rs = DB::table('user')->insert($arr);
		// $arr =['uname'=>'兲1','password'=>'123456','age'=>20,'class'=>'222'];
  //   	$rs = DB::table('user')->insertGetId($arr);
  //   	 dump($rs);
  	
    		// $arr =['uname'=>'兲1','password'=>'123456','age'=>20,'class'=>'222'];

    		// $rs = DB::table('user')->where('id','=','2')->update($arr);

    		// $rs = DB::table('user')->where('id','5')->first();

    		// $rs = DB::table('user')->where('id',3)->delete();
    		// $rs = DB::table('user')->get();

	   		// $rs = DB::table('user')->value('uname');

    		// $rs = DB::table('user')->pluck('uname');

    		// $rs = DB::table('user')->select('uname','age')->get();

    		// $rs = DB::table('user')->where('uname','like','王%')->get();	

    		// $rs = DB::table('user')->where([
    		// 	['class','=','214'],
    		// 	['age','>','10'],
    		// ])->get();

	    	// $rs = DB::table('user')->orderBy('id','desc')->get();

    		// $rs = DB::table('user')->paginate(4);

    		// $rs = DB::table('user')
      //       ->join('contacts', 'users.id', '=', 'contacts.user_id')
      //       ->join('orders', 'users.id', '=', 'orders.user_id')
      //       ->select('users.*', 'contacts.phone', 'orders.price')
      //       ->get();
    		// $rs = DB::table('user')->count();
    		// var_dump($rs);
    		foo();

    		// return view('admin.user.db',['arr'=>$rs]);
    }
}
