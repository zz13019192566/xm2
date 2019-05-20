<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cookie;
class RequestController extends Controller
{

	public function create(){

		return view('admin/user/request');
	}
    //
    public function request(Request $request){
    	// echo $request->method();
    	
    	// var_dump($request->isMethod('post'));
    	
    	// if($request->isMethod('get')){
    		
    	// } else {
    	// 	echo '请求错误';
    	// }
    	
    	// var_dump($request->path());
    	// var_dump($request->url());
    	// 
    	// dump($request->path());

    	// dd($request->url());
   			
   		// dd($request->ip());
   		
   		// dd($request->getport()); 
   		// 
   		// dump($_GET['id']);
   		
   		// dump($request->input('name'));
   		
   		// dump($request->only('name','age'));

   		// dump($request->except('age'));

   		// dump($request->all());
   		
   		// dump($request->except('_token'));
   		
   		// dump($request->input('p','1'));
   		
   		// dump($request->has('name'));
   		
   		// dump($request->header('host'));
   		// 

    }
    	public function upload(Request $request){
    		if($request->hasFile('imgs')){
   			$file = $request->file('imgs');
   			// dump($request->imgs);
   			// $extension = $request->imgs->extension();

   			// dump($extension);
   			
   			// $rs = $file->getClientOriginalName();

   			// dump($rs);
   			// 
   			// $rs = $file->getClientOriginalExtension();
   			
   			$name = 'img_'.rand(1111,9999).time();
   			//获取上传文件的后缀
   			$suffix = $file->getClientOriginalExtension();

   			$rs = $name.'.'.$suffix;

   			$file->move('./uploads',$rs);
   		} 
   			// dump($rs);
   		}
   	public function cookie(Request $request){
   		// Cookie::queue('uname','www',20);
   		// echo \Cookie::get('uname');

   		// echo $request->cookie('uname');
   	}

   	public function flash(Request $request){
   		$request->flash();  
   	}
   	public function old(Request $request){
   		dump($request->old());

   		// return redirect('/admin/create')->withInput();
   		return back()->withInput();
   	}

   	public function jsons(Request $request){
   		// $arr = ['apple','pear','lemon','orange'];
   		// $arr = ['name'=>'www','age'=>20,'class'=>'214'];
   		$arr = [
   			['name'=>'www','age'=>20,'class'=>'214'],
   			['name'=>'www','age'=>20,'class'=>'214'],
   			['name'=>'www','age'=>20,'class'=>'214']
   		];
   		return response()->json($arr);
   	}
   	public function redirects(){
   		// if(true){
   		// 	return redirect('/admin/create');

   		// 	return redirect()->route('/login');


   		// }
   		return redirect('/admin/create')->width('success','ok');
   		
   	}
}
