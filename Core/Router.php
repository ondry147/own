<?php

namespace Core;

class Router
{
    private $routes;
    private $params;

    public function add($route, $params = [])
    {
        // {controller}/{action}
        $route = preg_replace('/\//', '\/', $route);
        $route = preg_replace('/\{([a-z-]+)\}/', '(?P<\1>[a-z-]+)', $route);
        $route = preg_replace('/\{([a-z-]+):([^\}]+)\}/', '(?P<\1>\2)', $route);
        $route = '/^' . $route . '$/i';
        $this->routes[$route] = $params;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function match($url)
    {
        $par = [];
        foreach($this->routes as $route => $params)
        {
            if(preg_match($route, $url, $matches))
            {
                $par = $params;
                foreach($matches as $key => $match)
                {
                    $par[$key] = $match;
                }
                $this->params = $par;
                return true;
            }
        }
        return false;
    }

    public function dispatch($url)
    {
        $url = trim($url, "/");
        $url = $this->removeQueryString($url);
        $url = $this->transformDashes($url);
        if($this->match($url))
        {
            $controller = $this->getNamespace() . $this->params['controller'];
            //$controller = new $controller();
            //var_dump($controller);
            if(class_exists($controller))
            {
                $action = isset($this->params['action']) ? $this->params['action'] : 'index';
                $controller = new $controller($this->params);
                if(method_exists($controller, $action)) {
                    call_user_func_array([$controller, $action], $this->params);
                    return true;
                } else {
                    echo "Method $action in controller '".get_class($controller)."' does not exist.";
                }
            } else {
                header('Location: /error/not-found');
            }
        } else {
            header('Location: /error/not-found');
            //echo "Route not found";
        }
        return false;
    }

    public function transformDashes($url)
    {
        $url = str_replace('-', ' ', $url);
        $url = ucwords($url);
        $url = str_replace(' ', '', $url);
        return lcfirst($url);
    }

    public function removeQueryString($url)
    {
        //todo: improve this function
        if(strpos($url, '=') !== false)
        {
            $url = substr($url, 0, strpos($url, '&'));
        }
        return $url;
    }

    public function getNamespace()
    {
        if(isset($this->params['namespace']))
        {
            $namespace = '\\' .$this->params['namespace'] . '\\';
        } else {
            $namespace = '\\App\\Controllers\\';
        }
        return $namespace;
    }

    public function getParams()
    {
        return $this->params;
    }
}