<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\RegisterController.php-1610728173,C:\\wamp64\\www\\vendor\\laravel\\ui\\auth-backend\\RegistersUsers.php-1610492485,C:\\wamp64\\www\\vendor\\laravel\\ui\\auth-backend\\RedirectsUsers.php-1610492485',
   'data' => 
  array (
    'd2eeeef8ee218c6d5b608a640e67fcb8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the post register / login redirect path.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\RegisterController',
         'functionName' => 'redirectPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64c0095aa286672f9aa4bf7d3b00bb17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Show the application registration form.
     *
     * @return \\Illuminate\\View\\View
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'registered' => 'Illuminate\\Auth\\Events\\Registered',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\RegisterController',
         'functionName' => 'showRegistrationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '763f2b0c0c5a6eb7ae794fad22f993be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Handle a registration request for the application.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Illuminate\\Http\\RedirectResponse|\\Illuminate\\Http\\JsonResponse
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'registered' => 'Illuminate\\Auth\\Events\\Registered',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\RegisterController',
         'functionName' => 'register',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2a9c2d329f3c4016a5fefc16ca101bd5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the guard to be used during registration.
     *
     * @return \\Illuminate\\Contracts\\Auth\\StatefulGuard
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'registered' => 'Illuminate\\Auth\\Events\\Registered',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\RegisterController',
         'functionName' => 'guard',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77f643e52248e22f4454097aa06d8cac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The user has been registered.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  mixed  $user
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'registered' => 'Illuminate\\Auth\\Events\\Registered',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\RegisterController',
         'functionName' => 'registered',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5d12a0261ee51b26d91fcdbf0c4d0062' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Where to redirect users after registration.
     *
     * @var string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'user' => 'App\\Models\\User',
          'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
          'registersusers' => 'Illuminate\\Foundation\\Auth\\RegistersUsers',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\RegisterController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a829ec7aedfd48d9233011dd0cdf8b7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new controller instance.
     *
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'user' => 'App\\Models\\User',
          'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
          'registersusers' => 'Illuminate\\Foundation\\Auth\\RegistersUsers',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\RegisterController',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '756d5b00e9688f436b4e3b0776da07d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get a validator for an incoming registration request.
     *
     * @return \\Illuminate\\Contracts\\Validation\\Validator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'user' => 'App\\Models\\User',
          'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
          'registersusers' => 'Illuminate\\Foundation\\Auth\\RegistersUsers',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\RegisterController',
         'functionName' => 'validator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f3cd24d15514b0baff7f5cd7c05c5ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new user instance after a valid registration.
     *
     * @return \\App\\Models\\User
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'user' => 'App\\Models\\User',
          'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
          'registersusers' => 'Illuminate\\Foundation\\Auth\\RegistersUsers',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\RegisterController',
         'functionName' => 'create',
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