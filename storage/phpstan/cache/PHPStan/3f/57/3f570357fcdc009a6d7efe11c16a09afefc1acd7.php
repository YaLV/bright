<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Cache\\RateLimiting\\Limit.php-1610491700',
   'data' => 
  array (
    '6f35bc46e16365e84ed9bfa4bb07cde6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The rate limit signature key.
     *
     * @var mixed|string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache\\RateLimiting',
         'uses' => 
        array (
        ),
         'className' => 'Illuminate\\Cache\\RateLimiting\\Limit',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28d6f823d56a8b81ebf529c219944f84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The maximum number of attempts allowed within the given number of minutes.
     *
     * @var int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache\\RateLimiting',
         'uses' => 
        array (
        ),
         'className' => 'Illuminate\\Cache\\RateLimiting\\Limit',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c0653a9b0c4610bd92f7d670d8beb81a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The number of minutes until the rate limit is reset.
     *
     * @var int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache\\RateLimiting',
         'uses' => 
        array (
        ),
         'className' => 'Illuminate\\Cache\\RateLimiting\\Limit',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b79f2df4f964a2dec3faf3ed417ac8e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The response generator callback.
     *
     * @var callable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache\\RateLimiting',
         'uses' => 
        array (
        ),
         'className' => 'Illuminate\\Cache\\RateLimiting\\Limit',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'da4b68e7b9386e9dfe9b15d4435bcc5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new limit instance.
     *
     * @param  mixed|string  $key
     * @param  int  $maxAttempts
     * @param  int  $decayMinutes
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache\\RateLimiting',
         'uses' => 
        array (
        ),
         'className' => 'Illuminate\\Cache\\RateLimiting\\Limit',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '27321fbf7efee0454369bc944bca64e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new rate limit.
     *
     * @param  int  $maxAttempts
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache\\RateLimiting',
         'uses' => 
        array (
        ),
         'className' => 'Illuminate\\Cache\\RateLimiting\\Limit',
         'functionName' => 'perMinute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb6095cdc0b83fa0ffbc7fb537df0a8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new rate limit using hours as decay time.
     *
     * @param  int  $maxAttempts
     * @param  int  $decayHours
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache\\RateLimiting',
         'uses' => 
        array (
        ),
         'className' => 'Illuminate\\Cache\\RateLimiting\\Limit',
         'functionName' => 'perHour',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fb1fa1fcdda42729f24b18efb9f45978' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new rate limit using days as decay time.
     *
     * @param  int  $maxAttempts
     * @param  int  $decayDays
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache\\RateLimiting',
         'uses' => 
        array (
        ),
         'className' => 'Illuminate\\Cache\\RateLimiting\\Limit',
         'functionName' => 'perDay',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed90c69722e3c75f129b2c2c9b1f7ce0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new unlimited rate limit.
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache\\RateLimiting',
         'uses' => 
        array (
        ),
         'className' => 'Illuminate\\Cache\\RateLimiting\\Limit',
         'functionName' => 'none',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5805b74a0fa6f31a69e7e293d21a6b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Set the key of the rate limit.
     *
     * @param  string  $key
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache\\RateLimiting',
         'uses' => 
        array (
        ),
         'className' => 'Illuminate\\Cache\\RateLimiting\\Limit',
         'functionName' => 'by',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '070603b69b861a6416d48316aea66c00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Set the callback that should generate the response when the limit is exceeded.
     *
     * @param  callable  $callback
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Cache\\RateLimiting',
         'uses' => 
        array (
        ),
         'className' => 'Illuminate\\Cache\\RateLimiting\\Limit',
         'functionName' => 'response',
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