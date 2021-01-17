<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\ForgotPasswordController.php-1610728173,C:\\wamp64\\www\\vendor\\laravel\\ui\\auth-backend\\SendsPasswordResetEmails.php-1610492485',
   'data' => 
  array (
    '47b58f6339769740844d6e293248b807' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Display the form to request a password reset link.
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
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController',
         'functionName' => 'showLinkRequestForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd93a7c84ea94ec5a71e1f1490d4ee39a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Send a reset link to the given user.
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
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController',
         'functionName' => 'sendResetLinkEmail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c811a493deb009dca2d131e650fb8a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Validate the email for the given request.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController',
         'functionName' => 'validateEmail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6216bff2558899581f8924b812067ede' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the needed authentication credentials from the request.
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
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController',
         'functionName' => 'credentials',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cd021be8452abf84fa405c62dea97520' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the response for a successful password reset link.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  string  $response
     * @return \\Illuminate\\Http\\RedirectResponse|\\Illuminate\\Http\\JsonResponse
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController',
         'functionName' => 'sendResetLinkResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0123e12adcd5525122c12569ee4e6ee5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the response for a failed password reset link.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  string  $response
     * @return \\Illuminate\\Http\\RedirectResponse
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
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController',
         'functionName' => 'sendResetLinkFailedResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c796cea4ca431567dfd0dc26f95f289b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the broker to be used during password reset.
     *
     * @return \\Illuminate\\Contracts\\Auth\\PasswordBroker
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController',
         'functionName' => 'broker',
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