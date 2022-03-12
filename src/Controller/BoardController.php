<?php
namespace src\Controller;

use src\App\DB;

class BoardController extends Controller {
    public function create() {
        extract($_POST);
        DB::execute("INSERT INTO `board`(`name`, `user_idx`) VALUES (?,?)", [$name,  user()->idx]);
        back('게시판 아이디 등록 완료');
    }

    public function delete($board_idx = 0) {
        DB::execute('delete from board where idx=?',[$board_idx]);
        go('/blog/admin','게시판 아이디 삭제 완료');
    }

    
}