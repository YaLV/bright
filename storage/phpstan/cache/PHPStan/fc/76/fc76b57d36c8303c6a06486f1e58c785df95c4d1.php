<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\ResetPasswordController.php-1610728173,C:\\wamp64\\www\\vendor\\laravel\\ui\\auth-backend\\ResetsPasswords.php-1610492485,C:\\wamp64\\www\\vendor\\laravel\\ui\\auth-backend\\RedirectsUsers.php-1610492485',
   'data' => 
  array (
    '34a3187640c8e60da24fbb9a0b3674e9' => 
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
         'className' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController',
         'functionName' => 'redirectPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d9f83279e83ded136673cdfcf53e4ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Illuminate\\Contracts\\View\\Factory|\\Illuminate\\View\\View
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController',
         'functionName' => 'showResetForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f771d70fb54aba2108d2c8f7b80a717d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Reset the given user\'s password.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Illuminate\\Http\\RedirectResponse|\\Illuminate\\Http\\JsonResponse
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController',
         'functionName' => 'reset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c02c01dff1215ff52aafa669952af36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the password reset validation rules.
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController',
         'functionName' => 'rules',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b3c069620602d80e4791fe61dc2e894' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the password reset validation error messages.
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController',
         'functionName' => 'validationErrorMessages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e59b9dc8cefe7efdab6d13d3826e600' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the password reset credentials from the request.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController',
         'functionName' => 'credentials',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '392c871f16ca1b3e032d1e6f40eec7b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Reset the given user\'s password.
     *
     * @param  \\Illuminate\\Contracts\\Auth\\CanResetPassword  $user
     * @param  string  $password
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController',
         'functionName' => 'resetPassword',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bd745b75e449fbd95f5769e3296279a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Set the user\'s password.
     *
     * @param  \\Illuminate\\Contracts\\Auth\\CanResetPassword  $user
     * @param  string  $password
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController',
         'functionName' => 'setUserPassword',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '183a600c0d35ffafc4d1d13f48abd57d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the response for a successful password reset.
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
          'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController',
         'functionName' => 'sendResetResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0c0debc3898fefd05f29946f5a6163db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the response for a failed password reset.
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
          'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController',
         'functionName' => 'sendResetFailedResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '90bec315586f93505d4faf40e7602fdb' => 
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
          'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController',
         'functionName' => 'broker',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4805acd26bdbf555945b0db823ed531' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the guard to be used during password reset.
     *
     * @return \\Illuminate\\Contracts\\Auth\\StatefulGuard
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth',
         'uses' => 
        array (
          'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'password' => 'Illuminate\\Support\\Facades\\Password',
          'str' => 'Illuminate\\Support\\Str',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController',
         'functionName' => 'guard',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5ef896cf4f278240138ebeb64be4d3a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Where to redirect users after resetting their password.
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
          'resetspasswords' => 'Illuminate\\Foundation\\Auth\\ResetsPasswords',
        ),
         'className' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController',
         'functionName' => NULL,
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