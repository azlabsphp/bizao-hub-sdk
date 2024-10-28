<?php

namespace Drewlabs\Bizao;

final class Middleware
{
    /** @var callable|\Closure(mixed $result):mixed */
    private $callback;

    /** @var callable */
    private $then;

    /** @var callable */
    private $catch;

    /**
     * Creates new middleware class instance
     * 
     * @param callable $callback 
     * @return void 
     */
    public function __construct(callable $callback)
    {
        $this->callback  = $callback;
    }

    /**
     * Class factory contructor
     * 
     * @param callable $callback 
     * @return static 
     */
    public static function New(callable $callback)
    {
        return new static($callback);
    }

    /**
     * Register a function to execute when the middleware complete successfully
     * 
     * @param callable $callback 
     * @return static 
     */
    public function then(callable $callback)
    {
        $this->then = $callback;
        return $this;
    }

    /**
     * Register a function to execute when the middleware fails
     * 
     * @param callable|\Closure(\Throwable $e):void $callback 
     * @return static 
     */
    public function catch(callable $callback)
    {
        $this->catch = $callback;
        return $this;
    }

    /**
     * Run the middleware and resolve the result of the middleware and then function if provided
     * 
     * @return mixed 
     */
    public function resolve()
    {
        try {
            $result = call_user_func($this->callback);
            return $this->then ? call_user_func_array($this->then, [$result]) : $result;
        } catch (\Throwable $e) {
            if ($this->catch) {
                call_user_func_array($this->catch, [$e]);
            }
        }
    }
}
