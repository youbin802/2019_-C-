<?php
namespace src\Controller;

use src\App\DB;

class MenuController extends Controller {
    public function create() {
        extract($_POST);
        DB::execute("INSERT INTO `menu`(`name`, `user_idx`) VALUES (?,?)", [$name, user()->idx]);
        back('메뉴 등록 완료');
    }

    public function add() {
        extract($_POST);
        DB::execute("update menu set board_idx =? where idx=?",[$board_idx, $menu_idx]);
        back('메뉴에 게시판 등록 완료');
    }

    public function delete($menu_idx = 0) {
        DB::execute('delete from menu where idx=?',[$menu_idx]);
        go('/blog/admin', '삭제 완료');
    }
}