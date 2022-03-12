<?php
namespace src\Controller;

use src\App\DB;

class CommentController extends Controller {
    public function create()  {
        extract($_POST);

        DB::execute("INSERT INTO `comment`( `description`, `user_idx`, `content_idx`) 
        VALUES (?,?,?)", [$content, user()->idx, $content_idx]);
        back('댓글 완료');
    }

    public function update($comment_idx = 0)  {
        extract($_POST);

        DB::execute('update comment set description=? where idx =?', [$content, $comment_idx]);
        back('댓글수정 완료');
    }

    public function delete($comment_idx = 0) {
        
        DB::execute('delete from comment where idx =?',[$comment_idx]);
        back('삭제 완료');
    }
}