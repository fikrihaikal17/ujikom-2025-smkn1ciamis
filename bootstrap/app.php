<?php

// Minimal Laravel Bootstrap untuk Ujikom 2025
// Dibuat karena masalah SSL/Composer pada Laragon

// Basic Container class
class Container
{
  protected $bindings = [];
  protected $instances = [];

  public function bind($abstract, $concrete = null, $shared = false)
  {
    $this->bindings[$abstract] = compact('concrete', 'shared');
  }

  public function singleton($abstract, $concrete = null)
  {
    $this->bind($abstract, $concrete, true);
  }

  public function instance($abstract, $instance)
  {
    $this->instances[$abstract] = $instance;
  }

  public function make($abstract, $parameters = [])
  {
    if (isset($this->instances[$abstract])) {
      return $this->instances[$abstract];
    }

    if (isset($this->bindings[$abstract])) {
      $concrete = $this->bindings[$abstract]['concrete'];
      $shared = $this->bindings[$abstract]['shared'];

      $object = $this->build($concrete);

      if ($shared) {
        $this->instances[$abstract] = $object;
      }

      return $object;
    }

    return $this->build($abstract);
  }

  protected function build($concrete)
  {
    if (is_callable($concrete)) {
      return $concrete($this);
    }

    return new $concrete;
  }

  public function alias($abstract, $alias)
  {
    $this->bindings[$alias] = ['concrete' => $abstract, 'shared' => false];
  }
}

// Minimal Application class
class Application extends Container
{
  protected $basePath;
  protected static $instance;

  public function __construct($basePath = null)
  {
    $this->basePath = $basePath ?: dirname(__DIR__);
    static::$instance = $this;
    $this->registerBaseBindings();
  }

  public static function getInstance()
  {
    return static::$instance;
  }

  public static function setInstance($app)
  {
    static::$instance = $app;
  }

  protected function registerBaseBindings()
  {
    $this->instance('app', $this);
    $this->instance(Container::class, $this);
    $this->instance(Application::class, $this);
  }

  public function basePath($path = '')
  {
    return $this->basePath . ($path ? DIRECTORY_SEPARATOR . $path : $path);
  }

  public function bootstrapWith(array $bootstrappers)
  {
    return $this;
  }

  public function withRouting(...$args)
  {
    return $this;
  }

  public function withMiddleware(...$args)
  {
    return $this;
  }

  public function withExceptions(...$args)
  {
    return $this;
  }

  public static function configure($basePath)
  {
    return new static($basePath);
  }

  public function create()
  {
    return $this;
  }
}

return (new Application(dirname(__DIR__)))->create();
