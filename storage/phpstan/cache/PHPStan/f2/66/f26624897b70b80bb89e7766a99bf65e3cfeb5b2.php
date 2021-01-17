<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Event.php-1610491709',
   'data' => 
  array (
    '56ac4d68aba9cec51a9a0aa27cbda3f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @method static \\Closure createClassListener(string $listener, bool $wildcard = false)
 * @method static \\Closure makeListener(\\Closure|string $listener, bool $wildcard = false)
 * @method static \\Illuminate\\Events\\Dispatcher setQueueResolver(callable $resolver)
 * @method static array getListeners(string $eventName)
 * @method static array|null dispatch(string|object $event, mixed $payload = [], bool $halt = false)
 * @method static array|null until(string|object $event, mixed $payload = [])
 * @method static bool hasListeners(string $eventName)
 * @method static void assertDispatched(string $event, callable|int $callback = null)
 * @method static void assertDispatchedTimes(string $event, int $times = 1)
 * @method static void assertNotDispatched(string $event, callable|int $callback = null)
 * @method static void flush(string $event)
 * @method static void forget(string $event)
 * @method static void forgetPushed()
 * @method static void listen(string|array $events, \\Closure|string $listener = null)
 * @method static void push(string $event, array $payload = [])
 * @method static void subscribe(object|string $subscriber)
 *
 * @see \\Illuminate\\Events\\Dispatcher
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support\\Facades',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'eventfake' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
        ),
         'className' => 'Illuminate\\Support\\Facades\\Event',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd492b1798f83ea7a61e3b5e9cef46aa7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Replace the bound instance with a fake.
     *
     * @param  array|string  $eventsToFake
     * @return \\Illuminate\\Support\\Testing\\Fakes\\EventFake
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support\\Facades',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'eventfake' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
        ),
         'className' => 'Illuminate\\Support\\Facades\\Event',
         'functionName' => 'fake',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5f432fd94d4ec97f53a287372a11461' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Replace the bound instance with a fake during the given callable\'s execution.
     *
     * @param  callable  $callable
     * @param  array  $eventsToFake
     * @return callable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support\\Facades',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'eventfake' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
        ),
         'className' => 'Illuminate\\Support\\Facades\\Event',
         'functionName' => 'fakeFor',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff6486a473bfe5c67af1d5c760a9cb8a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the registered name of the component.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support\\Facades',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'eventfake' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
        ),
         'className' => 'Illuminate\\Support\\Facades\\Event',
         'functionName' => 'getFacadeAccessor',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
  ),
));