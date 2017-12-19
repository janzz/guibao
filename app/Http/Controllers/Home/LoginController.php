<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Login;

class LoginController extends Controller
{

    public function main(){
        if(empty(session('userInfo'))){

            return view('home.logins.login');

        }elseif(session('role') == 'admin'){

            return view('home.logins.main',[ 'userInfo' => Login::getListUser(), 'page' => 1]);

        }else{

            return view('home.logins.main',[ 'userInfo' => session('userInfo'),  'page' => 0]);
        }

    }


    public function login(){

        return view('home.logins.login');
    }

    public function register(Request $request){

        $data = $this->checkPost(json_decode($request->formdata, true));

        if($data['status']){

            return Login::create($data['userInfo'])
            ? response()->json(['status' => 1, 'msg' => '注册成功'])
            : response()->json(['status' => 0, 'msg' => '注册失败'])
            ;

        }else{

            return response()->json(['status' => 0, 'msg' => $data['msg']]);
        }
    }

    public function checkPost($postData){
        if(trim($postData['name']) == '') return ['status' => 0, 'msg' => '请输入姓名'];
        if(trim($postData['sex']) == 2) return ['status' => 0, 'msg' => '请选择性别'];
        if(trim($postData['phone']) == '' ) return ['status' => 0, 'msg' => '请输入手机号码'];
        if(trim($postData['money']) == '' ) return ['status' => 0, 'msg' => '请输入保单金额'];
        if(trim($postData['idnumber']) == '') return ['status' => 0, 'msg' => '请输入身份证号'];
        if(trim($postData['address']) == '') return ['status' => 0, 'msg' => '请输入详细地址'];
        if(trim($postData['password']) == '' ) return ['status' => 0, 'msg' => '请输入密码'];
        if(trim($postData['repassword']) == '') return ['status' => 0, 'msg' => '请重复输入密码'];

        if(trim($postData['password']) != trim($postData['repassword']) )return ['status' => 0, 'msg' => '两次输入密码不一致'];

        return [
                'status' => 1,
                'userInfo' => [
                    'name' => $postData['name'],
                    'sex' => $postData['sex'],
                    'phone' => $postData['phone'],
                    'money' => $postData['money'],
                    'idnumber' => $postData['idnumber'],
                    'province' => $postData['provinceName'],
                    'city' => $postData['cityName'],
                    'district' => $postData['districtName'],
                    'address' => $postData['address'],
                    'password' => password_hash($postData['password'], PASSWORD_BCRYPT),
                    'oname' => $postData['oname']?:'',
                    'ophone' => $postData['ophone']?:'',
                    'create_time' => time(),
                    'ip' => $_SERVER["REMOTE_ADDR"]
                ],
              ];
    }
    public function verifyLogin(Request $request){
        // 获取没有查询字符串的当前的 URL ...
        $postData = json_decode($request->logindata, true);
        if(trim($postData['uname']) == '') return ['status' => 0, 'msg' => '请输入手机号'];
        if(trim($postData['password']) == 2) return ['status' => 0, 'msg' => '请输入密码'];

        $userInfo = Login::verifyUser($postData['uname']);

        if($userInfo && password_verify($postData['password'], $userInfo[0]->password)) {

            //用户信息
            session([ 'userInfo' => $userInfo]);

            session([ 'role' => $userInfo[0]-> phone ]);

            //用户菜单
            //session([ 'menuInfo' => $this->admin->isAdmin()
              //  ? $this->menu->getAllMenu() : $this->admin->getUserMenu($this->admin->getSessionAdminVal('id'))]);

            //用户角色
            //session(['adminRole' => $this->admin->getUserRole($this->admin->getSessionAdminVal('id'))]);

            return response()->json(['status' => 1, 'msg' => '登录成功']);

        }else{

            return response()->json(['status' => 0, 'msg' => '用户名或密码错误']);

        }

    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');

    }
}
