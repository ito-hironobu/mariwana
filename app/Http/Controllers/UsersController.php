<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userinfo;

class UsersController extends Controller
{
    public function index() {
      return view('users.index');
    }

    public function login() {
      return view('users.login');
    }

    public function login_error() {
      return view('users.login_error');
    }

    public function login_complete(Request $request) {
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:4|max:8'
      ]);
      $f_user_exist = $this->checkUserExist($request->email);
      if($f_user_exist) {
        $f_correct_pw = $this->checkUserPassword($request->email, $request->password);
        if($f_correct_pw) {
          return view('users.login_complete')->with('email', $request->email)->with('password', $request->password);
        }
      }
      return redirect('/login_error');
    }

    public function register() {
      return view('users.register');
    }

    public function register_error() {
      return view('users.register_error');
    }

    public function register_complete(Request $request) {
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:4|max:8'
      ]);
      // 登録済みならDBに追加しない
      $f_user_exist = $this->checkUserExist($request->email); // このcheck関数を別ファイルに分割したい。ただどこにどう分割するべき？
      if($f_user_exist) {
        return redirect('/register_error');
      }else{
        $userinfo = new Userinfo();
        $userinfo->email = $request->email;
        $userinfo->password = $request->password;
        $userinfo->save();
        return view('users.register_complete')->with('email', $request->email)->with('password', $request->password);
      }
    }

    public function game(Request $request) {
      // ログインなら登録済み＆パスokチェック || 新規ならポスト情報でゲームスタート
      /////
      return view('users.game');
    }

    public function checkUserExist($email) {
      $userinfos = Userinfo::all();
      $flag = false;
      foreach($userinfos as $userinfo) {
        if($userinfo->email == $email) {
          $flag = true;
          break;
        }
      }
      return $flag;
    }

    public function checkUserPassword($email, $password) {
      $userinfos = Userinfo::all();
      $flag = false;
      foreach($userinfos as $userinfo) {
        if($userinfo->email == $email) {
          if($userinfo->password == $password) {
            $flag = true;
          }
          break;
        }
      }
      return $flag;
    }
}
