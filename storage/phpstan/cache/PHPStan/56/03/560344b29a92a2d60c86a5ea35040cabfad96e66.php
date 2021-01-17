<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\LoginController.php-1610728173,C:\\wamp64\\www\\vendor\\laravel\\ui\\auth-backend\\AuthenticatesUsers.php-1610492485,C:\\wamp64\\www\\vendor\\laravel\\ui\\auth-backend\\RedirectsUsers.php-1610492485,C:\\wamp64\\www\\vendor\\laravel\\ui\\auth-backend\\ThrottlesLogins.php-1610492485',
   'data' => 
  array (
    '25d2c5529d5955a8f6f9410a7405e993' => 
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
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'redirectPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6db6cd5de3a78cc6e4d8414e31077b65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determine if the user has too many failed login attempts.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
          'ratelimiter' => 'Illuminate\\Cache\\RateLimiter',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Illuminate\\Http\\Response',
          'lang' => 'Illuminate\\Support\\Facades\\Lang',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'hasTooManyLoginAttempts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eee4c43498d0f832d9807ade1e3ee1f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Increment the login attempts for the user.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
          'ratelimiter' => 'Illuminate\\Cache\\RateLimiter',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Illuminate\\Http\\Response',
          'lang' => 'Illuminate\\Support\\Facades\\Lang',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'incrementLoginAttempts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6cf12c5fccdfaa582026be97b17f5496' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Redirect the user after determining they are locked out.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return void
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
          'ratelimiter' => 'Illuminate\\Cache\\RateLimiter',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Illuminate\\Http\\Response',
          'lang' => 'Illuminate\\Support\\Facades\\Lang',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'sendLockoutResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b13bf0ead48bffdd91c3a9c2f7205eac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Clear the login locks for the given user credentials.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
          'ratelimiter' => 'Illuminate\\Cache\\RateLimiter',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Illuminate\\Http\\Response',
          'lang' => 'Illuminate\\Support\\Facades\\Lang',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'clearLoginAttempts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0fabed27911e9a6a556e5753c1a663dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Fire an event when a lockout occurs.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
          'ratelimiter' => 'Illuminate\\Cache\\RateLimiter',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Illuminate\\Http\\Response',
          'lang' => 'Illuminate\\Support\\Facades\\Lang',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'fireLockoutEvent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '697f56b417c974a0e4ecb8f1d9570d0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the throttle key for the given request.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
          'ratelimiter' => 'Illuminate\\Cache\\RateLimiter',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Illuminate\\Http\\Response',
          'lang' => 'Illuminate\\Support\\Facades\\Lang',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'throttleKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '26f68762b593b7760a1354fb94d6c926' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the rate limiter instance.
     *
     * @return \\Illuminate\\Cache\\RateLimiter
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
          'ratelimiter' => 'Illuminate\\Cache\\RateLimiter',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Illuminate\\Http\\Response',
          'lang' => 'Illuminate\\Support\\Facades\\Lang',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'limiter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea37c3d6fde5fddcc0b3d8ca5b8834fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the maximum number of attempts to allow.
     *
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
          'ratelimiter' => 'Illuminate\\Cache\\RateLimiter',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Illuminate\\Http\\Response',
          'lang' => 'Illuminate\\Support\\Facades\\Lang',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'maxAttempts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85c20faff11026883b4a9681cfa2c39f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the number of minutes to throttle for.
     *
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
          'ratelimiter' => 'Illuminate\\Cache\\RateLimiter',
          'request' => 'Illuminate\\Http\\Request',
          'response' => 'Illuminate\\Http\\Response',
          'lang' => 'Illuminate\\Support\\Facades\\Lang',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'decayMinutes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0af4cd7cb66c4eb7fbb70b838fef80c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Show the application\'s login form.
     *
     * @return \\Illuminate\\View\\View
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'showLoginForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6f8522b8902e5c3ee099ad0d99bb14f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Handle a login request to the application.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Illuminate\\Http\\RedirectResponse|\\Illuminate\\Http\\Response|\\Illuminate\\Http\\JsonResponse
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'login',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b6517c7554d32ac6149be0477b4a039' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Validate the user login request.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return void
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'validateLogin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '200e30cb38db623c92175423500010b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Attempt to log the user into the application.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'attemptLogin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd03fb092472157175effb15e4ac6156c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the needed authorization credentials from the request.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'credentials',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a272bbe8c1093356b2e3d4179447ebb0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Send the response after the user was authenticated.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Illuminate\\Http\\RedirectResponse|\\Illuminate\\Http\\JsonResponse
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'sendLoginResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9df37e426effc6eaf3ab81dee3f37cd4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The user has been authenticated.
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
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'authenticated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'af86e5fb28501d5694da46fd194ded80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the failed login response instance.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'sendFailedLoginResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f577fbd967872ad67e00cd158751930a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the login username to be used by the controller.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'username',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6c2ab8849b28dcb11dbfdd90a459027' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Log the user out of the application.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Illuminate\\Http\\RedirectResponse|\\Illuminate\\Http\\JsonResponse
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'logout',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '702994e554ac0b1fad12cdfaa19bb7ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The user has logged out of the application.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'loggedOut',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf1e27a5a34ada951fca2e5883341eb8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the guard to be used during authentication.
     *
     * @return \\Illuminate\\Contracts\\Auth\\StatefulGuard
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => 'guard',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '19135633ae5717dcfbaf27ff6fe992c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Where to redirect users after login.
     *
     * @var string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
          'authenticatesusers' => 'Illuminate\\Foundation\\Auth\\AuthenticatesUsers',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ebf147e2921d8202f36af1c42e8cf555' => 
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
          'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
          'authenticatesusers' => 'Illuminate\\Foundation\\Auth\\AuthenticatesUsers',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\LoginController',
         'functionName' => '__construct',
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