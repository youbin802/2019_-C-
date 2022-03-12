<?php
namespace src\Controller;

use src\App\DB;

class UserController extends Controller {
    public function join() {
        extract($_POST);

        DB::execute("INSERT INTO `user`(`email`, `pw`, `name`, `nick`) 
        VALUES (?,?,?,?)", [$id, $pw, $name, $nick]);

        go('/','회원가입 완료');
    }

    public function login() {
        extract($_POST);

        $user = DB::fetch('select * from user where email=? and pw=?',[$id, $pw]);
        if($user) {
            $_SESSION['user'] = $user;
            go('/','로그인 완료');
        }
    }
    public function logout() {
        unset($_SESSION['user']);
        go('/','로그아웃 완료');
    }
    public function delete($user_idx = 0) {
        DB::execute('delete from user where idx=?',[$user_idx]);
        go('/','유저 삭제 완료');

    }


}