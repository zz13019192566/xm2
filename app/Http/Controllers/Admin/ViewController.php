<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    //
    public function create(){
    	
    	$str = 'jklafsdkjlasdf';

    	$arr = ['ipone','yali'];

    	$html = '<a href="">上一页</a>';
    	
    	// return view('admin/tpl/create');
    	return view('admin.tpl.create',['str'=>$str,'arr'=>$arr,'hrs'=>$html]);
    }

    public function list(){
        // return view('admin.tpl.index');
        
        return view('admin/.tpl.list');
    }
}
