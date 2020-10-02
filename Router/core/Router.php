<?php

class Router

{
    protected $routes = [];

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function diriect($uri)
    {
        //given the current URI that the user has requested
        //if we have a route that matches it then we want to load the controller associated with it
        
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes['aobut/culture'];
        }
        //array_key_exists is going to look through our array of routes, and see if anything matches $uri 

        throw new Exception('no routes for this URI');
        
        //an exception is our way of saying something happened here and we don't know what to do
    }
}