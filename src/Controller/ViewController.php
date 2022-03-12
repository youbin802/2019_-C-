<?php
namespace src\Controller;
use src\App\DB;
class ViewController extends Controller {
    public function index() {
        return $this->view('index');
    }
    public function login() {
        return $this->view('login');
    }
    public function join() {
        return $this->view('join');
    }
    public function admin() {
        if(!user()) {
            error('user');
        }
        $user_idx  = user()->idx;
        $menus = DB::fetchAll('select * from menu where user_idx =?', [$user_idx]);
        $boards = DB::fetchAll('select * from board where user_idx =?', [$user_idx]);
        $user = DB::fetchAll('select * from user');

        return $this->view('admin',['users'=>$user, 'boards'=>$boards, 'menus'=>$menus]);
    }
    public function myblog() {
        if(!user()) {
            error('user');
        } 
        
        if(user()->email == 'admin') {
            go('/','관리자 게시판 X');
        } else {
            header('location: /'. user()->email);
        }
    }
    public function blog($email = "") {
        $user = DB::fetch('select * from user where email = ?',[$email]);
        return $this->view('blog',['title'=>'blog', 'user'=>$user, 'menus'=>$this->getMenus($user->idx)]);
    }

    public function menu($menu_idx = 0) {
        $menu = DB::fetch('select * from menu where idx=?',[$menu_idx]);
        $board_idx = $menu->board_idx ? $menu->board_idx :0;
        $user = DB::fetch('select * from user where idx = ?',[$menu->user_idx]);
        return $this->view('blog',['title'=>'blog', 'user'=>$user,'menu'=>$menu, 'menus'=>$this->getMenus($user->idx),'contents'=>$this->getContents($board_idx)]);
    }

    public function write($menu_idx = 0) {
        $menu = DB::fetch('select * from menu where idx=?',[$menu_idx]);
        $user = DB::fetch('select * from user where idx = ?',[$menu->user_idx]);
        return $this->view('write',['title'=>'blog', 'menu'=>$menu, 'menus'=>$this->getMenus($user->idx),'board_idx'=>$menu->board_idx]);
    }

    public function content($content_idx = 0) {
        if(!$content = DB::fetch('select * from content where idx=?',[$content_idx])) {
            back('게시글 존재 안함');
        }
        if(!$menu = DB::fetch('select * from menu where board_idx=?',[$content->board_idx])) {
            back('메뉴 존재 안함');
        }
        $user = DB::fetch('select * from user where idx = ?',[$menu->user_idx]);
        $content->user = DB::fetch('select * from user where idx = ?',[$content->writer_idx]);
        $comments = DB::fetchAll('select * from comment where content_idx=?',[$content_idx]);

        foreach($comments as $c) {
            $c->user = DB::fetch('select * from user where idx = ?',[$c->user_idx]);
        }
        return $this->view('view',['title'=>'blog', 'menu'=>$menu, 'menus'=>$this->getMenus($user->idx),
        'user'=>$user, 'comments'=>$comments, 'content'=>$content]);
    }
    public function reply($content_idx =0) {
        $content = DB::fetch('select * from content where idx=?',[$content_idx]);
        $menu = DB::fetch('select * from menu where board_idx=?',[$content->board_idx]);
        return $this->view('reply',['title'=>'blog','content'=>$content, 'menu'=>$menu, 'menus'=>$this->getMenus($menu->user_idx)]);
    }
    public function update($content_idx = 0 ) {
        $content = DB::fetch('select * from content where idx=?',[$content_idx]);
        $menu = DB::fetch('select * from menu where board_idx=?',[$content->board_idx]);
        return $this->view('update',['title'=>'blog','content'=>$content, 'menu'=>$menu, 'menus'=>$this->getMenus($menu->user_idx)]);
    }

}