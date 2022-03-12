<?php

namespace src\Controller;
use src\App\DB;
class Controller {
    public function view($url, $data=[]) {
        extract($data);
        require_once(__VIEW . "/template/header.php");
        require_once(__VIEW . "/page/$url.php");
        require_once(__VIEW . "/template/footer.php");
    }

    public function getMenus($user_idx) {
        $menus = DB::fetchAll('select * from menu where user_idx=?',[$user_idx]);
        foreach($menus as $m) {
            $m->contents = DB::fetch('select count(*) as cnt from content where board_idx=?',[$m->board_idx])->cnt;
        }
        return $menus;
    }

    public function getContents($board_idx) {
        $contents = DB::fetchAll('select * from content where board_idx=?',[$board_idx]);
        foreach($contents as $c) {
            $c->user = DB::fetch('select * from user where idx=?',[$c->writer_idx]);
        }
        return $contents;
    }
}