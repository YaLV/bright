<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\VerificationController.php-1610728173,C:\\wamp64\\www\\vendor\\laravel\\ui\\auth-backend\\VerifiesEmails.php-1610492485,C:\\wamp64\\www\\vendor\\laravel\\ui\\auth-backend\\RedirectsUsers.php-1610492485',
   'data' => 
  array (
    '89dde8159bb6ebcd0ff8c13864e4ce22' => 
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
         'className' => 'App\\Http\\Controllers\\Auth\\VerificationController',
         'functionName' => 'redirectPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b474bcae5f3066ff0282ce781e61562c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Show the email verification notice.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Illuminate\\Http\\RedirectResponse|\\Illuminate\\View\\View
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'verified' => 'Illuminate\\Auth\\Events\\Verified',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\VerificationController',
         'functionName' => 'show',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5dad7a203e4e6909da4055abe7f7bd2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Mark the authenticated user\'s email address as verified.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Illuminate\\Http\\JsonResponse|\\Illuminate\\Http\\RedirectResponse
     *
     * @throws \\Illuminate\\Auth\\Access\\AuthorizationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'verified' => 'Illuminate\\Auth\\Events\\Verified',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\VerificationController',
         'functionName' => 'verify',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '72c0122bcedd098655debf0ae7ecf885' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The user has been verified.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'verified' => 'Illuminate\\Auth\\Events\\Verified',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\VerificationController',
         'functionName' => 'verified',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69201690bc91dfb54d6a930e3798ff90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resend the email verification notification.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Illuminate\\Http\\JsonResponse|\\Illuminate\\Http\\RedirectResponse
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'verified' => 'Illuminate\\Auth\\Events\\Verified',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\VerificationController',
         'functionName' => 'resend',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd0ef663bc454593cea28de50f77df3f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Where to redirect users after verification.
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
          'verifiesemails' => 'Illuminate\\Foundation\\Auth\\VerifiesEmails',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\VerificationController',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d509815b43669e4c75213280fdbc2a7' => 
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
          'verifiesemails' => 'Illuminate\\Foundation\\Auth\\VerifiesEmails',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\VerificationController',
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