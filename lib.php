<?php

function user() {
    return isset($_SESSION['user']) ? $_SESSION['user'] : 0;
}

function go($url, $msg) {
    echo "<script>";
    echo "alert('$msg');";
    echo "location.replace('$url')";
    echo "</script>";
}

function back($msg) {
    echo "<script>";
    echo "alert('$msg');";
    echo "history.back()";
    echo "</script>";
}

function error($type = null) {
    if($type=="user") {
        go('/user/login','로그인 후  사용 가능');
    } else {
        go('/','접근 권한 없음');
    }
}