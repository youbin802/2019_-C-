<?php
namespace src\App;

class Route {
    private static $actions =[];

    public static function __callStatic($method, $args) {
        $req = strtolower($_SERVER['REQUEST_METHOD']);
        
        if($req == $method) {
            array_push(self::$actions, $args);
        }
    }

    public static function init() {
        $path =  explode('?', $_SERVER['REQUEST_URI']);
        if(count($path)>1) {
            header('location:' . $path[0]);
        }
        $path = $path[0];

        foreach(self::$actions as $req) {
            $url = preg_replace('/\//', '\\/', $req[0]);
            $url = preg_replace('/\{([^{}]+)\}/','([^\/]+)', $url);
            $url = '/^'. $url . '$/';

            if(preg_match($url, $path, $res)) {
                unset($res[0]);
                $action = explode('@', $req[1]);
                $c = 'src\\Controller\\' .  $action[0];
                $c= new $c();
                $c->{$action[1]}(...$res);
                return;
            }
        }
        echo "404";
    }
}