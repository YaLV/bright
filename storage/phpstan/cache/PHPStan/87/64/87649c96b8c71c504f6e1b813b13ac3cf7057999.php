<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php-1610491699',
   'data' => 
  array (
    '093078f6751b49c1db5a4c9891f8a195' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The authentication factory instance.
     *
     * @var \\Illuminate\\Contracts\\Auth\\Factory
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Auth\\Middleware',
         'uses' => 
        array (
          'closure' => 'Closure',
          'authenticationexception' => 'Illuminate\\Auth\\AuthenticationException',
          'auth' => 'Illuminate\\Contracts\\Auth\\Factory',
          'authenticatesrequests' => 'Illuminate\\Contracts\\Auth\\Middleware\\AuthenticatesRequests',
        ),
         'className' => 'Illuminate\\Auth\\Middleware\\Authenticate',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3a25a8bdf737b046ea380d0b8bd16bf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new middleware instance.
     *
     * @param  \\Illuminate\\Contracts\\Auth\\Factory  $auth
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Auth\\Middleware',
         'uses' => 
        array (
          'closure' => 'Closure',
          'authenticationexception' => 'Illuminate\\Auth\\AuthenticationException',
          'auth' => 'Illuminate\\Contracts\\Auth\\Factory',
          'authenticatesrequests' => 'Illuminate\\Contracts\\Auth\\Middleware\\AuthenticatesRequests',
        ),
         'className' => 'Illuminate\\Auth\\Middleware\\Authenticate',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1a0acfe41dab797fd375cf47ce064bf2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Handle an incoming request.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  \\Closure  $next
     * @param  string[]  ...$guards
     * @return mixed
     *
     * @throws \\Illuminate\\Auth\\AuthenticationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Auth\\Middleware',
         'uses' => 
        array (
          'closure' => 'Closure',
          'authenticationexception' => 'Illuminate\\Auth\\AuthenticationException',
          'auth' => 'Illuminate\\Contracts\\Auth\\Factory',
          'authenticatesrequests' => 'Illuminate\\Contracts\\Auth\\Middleware\\AuthenticatesRequests',
        ),
         'className' => 'Illuminate\\Auth\\Middleware\\Authenticate',
         'functionName' => 'handle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0eecd229d9e2e23a0ec761d193b2df1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determine if the user is logged in to any of the given guards.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  array  $guards
     * @return void
     *
     * @throws \\Illuminate\\Auth\\AuthenticationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Auth\\Middleware',
         'uses' => 
        array (
          'closure' => 'Closure',
          'authenticationexception' => 'Illuminate\\Auth\\AuthenticationException',
          'auth' => 'Illuminate\\Contracts\\Auth\\Factory',
          'authenticatesrequests' => 'Illuminate\\Contracts\\Auth\\Middleware\\AuthenticatesRequests',
        ),
         'className' => 'Illuminate\\Auth\\Middleware\\Authenticate',
         'functionName' => 'authenticate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '890fdfc76ad2653a0b1a92166c1b5bfd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Handle an unauthenticated user.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  array  $guards
     * @return void
     *
     * @throws \\Illuminate\\Auth\\AuthenticationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Auth\\Middleware',
         'uses' => 
        array (
          'closure' => 'Closure',
          'authenticationexception' => 'Illuminate\\Auth\\AuthenticationException',
          'auth' => 'Illuminate\\Contracts\\Auth\\Factory',
          'authenticatesrequests' => 'Illuminate\\Contracts\\Auth\\Middleware\\AuthenticatesRequests',
        ),
         'className' => 'Illuminate\\Auth\\Middleware\\Authenticate',
         'functionName' => 'unauthenticated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3417c52fbcb33dd54a2ce10fa76c1be0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return string|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Auth\\Middleware',
         'uses' => 
        array (
          'closure' => 'Closure',
          'authenticationexception' => 'Illuminate\\Auth\\AuthenticationException',
          'auth' => 'Illuminate\\Contracts\\Auth\\Factory',
          'authenticatesrequests' => 'Illuminate\\Contracts\\Auth\\Middleware\\AuthenticatesRequests',
        ),
         'className' => 'Illuminate\\Auth\\Middleware\\Authenticate',
         'functionName' => 'redirectTo',
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