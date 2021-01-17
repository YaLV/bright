<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\RateLimiter.php-1610491709',
   'data' => 
  array (
    '5685466cd12df88c1d0c3a364684f647' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @method static \\Illuminate\\Cache\\RateLimiter for(string $name, \\Closure $callback)
 * @method static \\Closure limiter(string $name)
 * @method static bool tooManyAttempts($key, $maxAttempts)
 * @method static int hit($key, $decaySeconds = 60)
 * @method static mixed attempts($key)
 * @method static mixed resetAttempts($key)
 * @method static int retriesLeft($key, $maxAttempts)
 * @method static void clear($key)
 * @method static int availableIn($key)
 *
 * @see \\Illuminate\\Cache\\RateLimiter
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support\\Facades',
         'uses' => 
        array (
        ),
         'className' => 'Illuminate\\Support\\Facades\\RateLimiter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4b857ce5f9df04aae6dd41b6d937ace6' => 
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
        ),
         'className' => 'Illuminate\\Support\\Facades\\RateLimiter',
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