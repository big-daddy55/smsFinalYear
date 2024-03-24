<?php
namespace Core;

class Container{
    protected $bindings = [];

    public function bind($key, $resolver){
        $this->bindings[$key] = $resolver;
    }

    /**
     * Resolve the binding for the given key.
     *
     * @param string $key
     * @throws \Exception
     */
    public function resolve($key){
        if(!array_key_exists($key, $this->bindings)){
            throw new \Exception("No matching binding found in {$key}");
        }

        $resolver = $this->bindings[$key];

        return call_user_func($resolver);
    }
}
?>