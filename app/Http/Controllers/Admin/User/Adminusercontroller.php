<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\checket;

use App\Model\Admin\User;
use Hash;
class Adminusercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取数据
        $rs = User::paginate(10);
        //显示列表页
        return view('admin.user.list',[
            'title'=>'用户列表页面',
            'rs'=>$rs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.user.create');        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(checket $request)
    {
        //表单验证
        
        //  $this->validate($request, [
        // 'uname' => 'required|unique:admin|regex:/^\w{6,12}$/',
        // 'password' => 'required|unique:admin|regex:/^\w{8,16}$/',
        // 'password1' => 'same:password'
        //  ],[
        // 'uname.required' => '用户名不能为空',
        // 'uname.regex' => '用户名格式不正确',
        // 'uname.unique' => '用户名已经存在',
        // 'password.regex'=> '密码名格式不正确',
        // 'password.required' => '密码不能为空',
        // 'password1.same' => '两次密码不一致',
     // ]);

        $rs = $request->except('_token','password1');
        //加密密码
        $rs['password'] =Hash::make($request->password);
        $rs['cdate'] = date('Y-m-d H:i:s',time());
        $data = User::create($rs);

        if($data){

            return redirect('admin/user');
            echo "<script>alert('666')</script>";

        } else {

            return back();

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
