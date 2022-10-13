<?php



namespace shop;


class Router
{
protected static $routes = [];
protected static $route = [];

public static function add($regExp, $route = []){
    static::$routes[$regExp] = $route;
}

public static function getRoutes(){
    return static::$routes;
}

public static function getRoute(){
    return static::$route;
}

public static function dispatch($url){
    if (static::matchRoute($url)){
        $controller = 'app\controllers\\' . self::$route["prefix"] . static::upperCamelCase(self::$route["controller"]) . 'Controller';
        if(class_exists($controller)){
            $controllerObject = new $controller(self::$route);
            $action = static::lowerCamelCase(self::$route["action"]) . 'Action';
            if (method_exists($controllerObject, $action)){
                $controllerObject->$action();
                $controllerObject->getView();
            }
        }else{
            debug($controller);
            throw new \Exception("Page not found", 404);
        }
    }else{
        throw new \Exception("Page not found", 404);
    }
}

public static function matchRoute($url){
    foreach (self::$routes as $pattern => $route){
        if (preg_match("#{$pattern}#", $url,$matches)){
            foreach ($matches as $k => $v){
                if(is_string($k)){
                    $route[$k]=$v;
                }
            }
            if(!isset($route['action'])){
                $route["action"] = "index";
            }
            if(!isset($route['prefix'])){
                $route["prefix"] = "";
            }else{
                $route["prefix"] .= '\\';
            }
            self::$route = $route;
            return true;
        }
    }
    return false;
}
protected static function upperCamelCase($tring){
    str_replace('-', ' ', $tring);
    $tring = ucfirst($tring);
    str_replace(' ', '', $tring);
    return $tring;
}


protected static function lowerCamelCase($tring){
    self::upperCamelCase($tring);
    $tring = lcfirst($tring);
    return $tring;
}


}