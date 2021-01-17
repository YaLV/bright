<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Cache\\RateLimiter.php-1610491700,C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\InteractsWithTime.php-1610491709',
   'data' => 
  array (
    '223b0396b6609fd84b55cb88423703b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the number of seconds until the given DateTime.
     *
     * @param  \\DateTimeInterface|\\DateInterval|int  $delay
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support',
         'uses' => 
        array (
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Illuminate\\Cache\\RateLimiter',
         'functionName' => 'secondsUntil',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a6ec89ac2d088ac9f8809e842603e1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the "available at" UNIX timestamp.
     *
     * @param  \\DateTimeInterface|\\DateInterval|int  $delay
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support',
         'uses' => 
        array (
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Illuminate\\Cache\\RateLimiter',
         'functionName' => 'availableAt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ffa52f131af4f395576b17642954d30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * If the given value is an interval, convert it to a DateTime instance.
     *
     * @param  \\DateTimeInterface|\\DateInterval|int  $delay
     * @return \\DateTimeInterface|int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support',
         'uses' => 
        array (
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Illuminate\\Cache\\RateLimiter',
         'functionName' => 'parseDateInterval',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24f0dee9348fbf587de3f1cb658cee56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the current system time as a UNIX timestamp.
     *
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support',
         'uses' => 
        array (
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Illuminate\\Cache\\RateLimiter',
         'functionName' => 'currentTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c43efa7767c5ef55a3eea96f2ba695a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The cache store implementation.
     *
     * @var \\Illuminate\\Contracts\\Cache\\Repository
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache',
         'uses' => 
        array (
          'closure' => 'Closure',
          'cache' => 'Illuminate\\Contracts\\Cache\\Repository',
          'interactswithtime' => 'Illuminate\\Support\\InteractsWithTime',
        ),
         'className' => 'Illuminate\\Cache\\RateLimiter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cb90e4b3afaf77d9ba86ca602c5057a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The configured limit object resolvers.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache',
         'uses' => 
        array (
          'closure' => 'Closure',
          'cache' => 'Illuminate\\Contracts\\Cache\\Repository',
          'interactswithtime' => 'Illuminate\\Support\\InteractsWithTime',
        ),
         'className' => 'Illuminate\\Cache\\RateLimiter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b9181eaf8a28927d84144acb4f31ac4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new rate limiter instance.
     *
     * @param  \\Illuminate\\Contracts\\Cache\\Repository  $cache
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache',
         'uses' => 
        array (
          'closure' => 'Closure',
          'cache' => 'Illuminate\\Contracts\\Cache\\Repository',
          'interactswithtime' => 'Illuminate\\Support\\InteractsWithTime',
        ),
         'className' => 'Illuminate\\Cache\\RateLimiter',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1bef16498adcac4c2f388cb862e2b89a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Register a named limiter configuration.
     *
     * @param  string  $name
     * @param  \\Closure  $callback
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache',
         'uses' => 
        array (
          'closure' => 'Closure',
          'cache' => 'Illuminate\\Contracts\\Cache\\Repository',
          'interactswithtime' => 'Illuminate\\Support\\InteractsWithTime',
        ),
         'className' => 'Illuminate\\Cache\\RateLimiter',
         'functionName' => 'for',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1e518d87d6fc32549116444877655d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the given named rate limiter.
     *
     * @param  string  $name
     * @return \\Closure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache',
         'uses' => 
        array (
          'closure' => 'Closure',
          'cache' => 'Illuminate\\Contracts\\Cache\\Repository',
          'interactswithtime' => 'Illuminate\\Support\\InteractsWithTime',
        ),
         'className' => 'Illuminate\\Cache\\RateLimiter',
         'functionName' => 'limiter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a12e485f654010dd057a005fc5a87a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determine if the given key has been "accessed" too many times.
     *
     * @param  string  $key
     * @param  int  $maxAttempts
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache',
         'uses' => 
        array (
          'closure' => 'Closure',
          'cache' => 'Illuminate\\Contracts\\Cache\\Repository',
          'interactswithtime' => 'Illuminate\\Support\\InteractsWithTime',
        ),
         'className' => 'Illuminate\\Cache\\RateLimiter',
         'functionName' => 'tooManyAttempts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4fd1c2b0762877017c5ae8a146c91174' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Increment the counter for a given key for a given decay time.
     *
     * @param  string  $key
     * @param  int  $decaySeconds
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache',
         'uses' => 
        array (
          'closure' => 'Closure',
          'cache' => 'Illuminate\\Contracts\\Cache\\Repository',
          'interactswithtime' => 'Illuminate\\Support\\InteractsWithTime',
        ),
         'className' => 'Illuminate\\Cache\\RateLimiter',
         'functionName' => 'hit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6542b74b6c08926491fb2b79d331086' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the number of attempts for the given key.
     *
     * @param  string  $key
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache',
         'uses' => 
        array (
          'closure' => 'Closure',
          'cache' => 'Illuminate\\Contracts\\Cache\\Repository',
          'interactswithtime' => 'Illuminate\\Support\\InteractsWithTime',
        ),
         'className' => 'Illuminate\\Cache\\RateLimiter',
         'functionName' => 'attempts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3849815ce8ecabf7548da6d3883890ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Reset the number of attempts for the given key.
     *
     * @param  string  $key
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache',
         'uses' => 
        array (
          'closure' => 'Closure',
          'cache' => 'Illuminate\\Contracts\\Cache\\Repository',
          'interactswithtime' => 'Illuminate\\Support\\InteractsWithTime',
        ),
         'className' => 'Illuminate\\Cache\\RateLimiter',
         'functionName' => 'resetAttempts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3234fd061ed2f34fb0974e3b17fe269a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the number of retries left for the given key.
     *
     * @param  string  $key
     * @param  int  $maxAttempts
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache',
         'uses' => 
        array (
          'closure' => 'Closure',
          'cache' => 'Illuminate\\Contracts\\Cache\\Repository',
          'interactswithtime' => 'Illuminate\\Support\\InteractsWithTime',
        ),
         'className' => 'Illuminate\\Cache\\RateLimiter',
         'functionName' => 'retriesLeft',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '49551bdda181ff5152e78977d3637d19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Clear the hits and lockout timer for the given key.
     *
     * @param  string  $key
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache',
         'uses' => 
        array (
          'closure' => 'Closure',
          'cache' => 'Illuminate\\Contracts\\Cache\\Repository',
          'interactswithtime' => 'Illuminate\\Support\\InteractsWithTime',
        ),
         'className' => 'Illuminate\\Cache\\RateLimiter',
         'functionName' => 'clear',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3f28cc869e56f99e0632e1fede3312b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the number of seconds until the "key" is accessible again.
     *
     * @param  string  $key
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache',
         'uses' => 
        array (
          'closure' => 'Closure',
          'cache' => 'Illuminate\\Contracts\\Cache\\Repository',
          'interactswithtime' => 'Illuminate\\Support\\InteractsWithTime',
        ),
         'className' => 'Illuminate\\Cache\\RateLimiter',
         'functionName' => 'availableIn',
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