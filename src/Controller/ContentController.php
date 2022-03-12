<?php
namespace src\Controller;

use src\App\DB;


class ContentController extends Controller {
    public function create() {
        extract($_POST);
        DB::execute("INSERT INTO `content`(`title`, `description`, `user_idx`, `board_idx`,`writer_idx`) 
        VALUES (?,?,?,?,?)",[$title, $content, user()->idx, $board_idx,user()->idx]);
        go("/blog/menu/" .$menu_idx , '게시글 작성 완료');
    }
    public function reply() {
        extract($_POST);
        DB::execute("INSERT INTO `content`(`title`, `description`, `user_idx`, `board_idx`,`writer_idx`) 
        VALUES (?,?,?,?,?)",[$title, $content, $user_idx, $board_idx,user()->idx]);
        go("/blog/menu/" .$menu_idx , '게시글 작성 완료');
    }
    public function delete($content_idx = 0) {
        $content = DB::fetch('select * from content where idx=?',[$content_idx]);
        $menu = DB::fetch('select * from menu where board_idx = ?',[$content->board_idx]);
        DB::execute('delete from content where idx=?',[$content_idx]);
        go('/blog/menu/'.$menu->idx, '게시글 삭제 완료');
    }
    public function update() {
        extract($_POST);
        DB::execute("UPDATE `content` SET `title`=?,`description`=? WHERE idx=?",[$title, $content, $content_idx]);
        go("/blog/menu/" .$menu_idx , '게시글 수정 완료');
    }
}