<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Controller.php-1610728173,C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests.php-1610491704,C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bus\\DispatchesJobs.php-1610491704,C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Validation\\ValidatesRequests.php-1610491706',
   'data' => 
  array (
    '0c3e2ac7398cab6d65d2b7941cf96365' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Authorize a given action for the current user.
     *
     * @param  mixed  $ability
     * @param  mixed|array  $arguments
     * @return \\Illuminate\\Auth\\Access\\Response
     *
     * @throws \\Illuminate\\Auth\\Access\\AuthorizationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth\\Access',
         'uses' => 
        array (
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Http\\Controllers\\Controller',
         'functionName' => 'authorize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a853b85604d360c324b08888bf5306dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Authorize a given action for a user.
     *
     * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable|mixed  $user
     * @param  mixed  $ability
     * @param  mixed|array  $arguments
     * @return \\Illuminate\\Auth\\Access\\Response
     *
     * @throws \\Illuminate\\Auth\\Access\\AuthorizationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth\\Access',
         'uses' => 
        array (
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Http\\Controllers\\Controller',
         'functionName' => 'authorizeForUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0f78b0dcf97205a97aedfa2329e404dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Guesses the ability\'s name if it wasn\'t provided.
     *
     * @param  mixed  $ability
     * @param  mixed|array  $arguments
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth\\Access',
         'uses' => 
        array (
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Http\\Controllers\\Controller',
         'functionName' => 'parseAbilityAndArguments',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a82cfc66b0c58c1d719ced3155a4632' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Normalize the ability name that has been guessed from the method name.
     *
     * @param  string  $ability
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth\\Access',
         'uses' => 
        array (
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Http\\Controllers\\Controller',
         'functionName' => 'normalizeGuessedAbilityName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd66d3b13a277595e81423d6ad7012f0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Authorize a resource action based on the incoming request.
     *
     * @param  string  $model
     * @param  string|null  $parameter
     * @param  array  $options
     * @param  \\Illuminate\\Http\\Request|null  $request
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth\\Access',
         'uses' => 
        array (
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Http\\Controllers\\Controller',
         'functionName' => 'authorizeResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '23782c0be3a72587d903c94586e9ce78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the map of resource methods to ability names.
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth\\Access',
         'uses' => 
        array (
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Http\\Controllers\\Controller',
         'functionName' => 'resourceAbilityMap',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a8d4464db478ee09dc336ad2a31c64f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the list of resource methods which do not have model parameters.
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Auth\\Access',
         'uses' => 
        array (
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'App\\Http\\Controllers\\Controller',
         'functionName' => 'resourceMethodsWithoutModels',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '47cd4969ec9a8af15297117efa742826' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Dispatch a job to its appropriate handler.
     *
     * @param  mixed  $job
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Bus',
         'uses' => 
        array (
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
        ),
         'className' => 'App\\Http\\Controllers\\Controller',
         'functionName' => 'dispatch',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '52ebb56f408e9c7fbe4b280bf0b60eb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Dispatch a job to its appropriate handler in the current process.
     *
     * @param  mixed  $job
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Bus',
         'uses' => 
        array (
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
        ),
         'className' => 'App\\Http\\Controllers\\Controller',
         'functionName' => 'dispatchNow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7d50f291f3ac17e26b4f0b81410a5a37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Run the validation routine against the given validator.
     *
     * @param  \\Illuminate\\Contracts\\Validation\\Validator|array  $validator
     * @param  \\Illuminate\\Http\\Request|null  $request
     * @return array
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Validation',
         'uses' => 
        array (
          'factory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'request' => 'Illuminate\\Http\\Request',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Controller',
         'functionName' => 'validateWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '01bbe368453171fad2fa4c0b635dda67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Validate the given request with the given rules.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  array  $rules
     * @param  array  $messages
     * @param  array  $customAttributes
     * @return array
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Validation',
         'uses' => 
        array (
          'factory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'request' => 'Illuminate\\Http\\Request',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Controller',
         'functionName' => 'validate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94a16fb4036fb550f647c6be529659af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Validate the given request with the given rules.
     *
     * @param  string  $errorBag
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  array  $rules
     * @param  array  $messages
     * @param  array  $customAttributes
     * @return array
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Validation',
         'uses' => 
        array (
          'factory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'request' => 'Illuminate\\Http\\Request',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Controller',
         'functionName' => 'validateWithBag',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '30c43cedb54f7021a641470304bbed7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get a validation factory instance.
     *
     * @return \\Illuminate\\Contracts\\Validation\\Factory
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Validation',
         'uses' => 
        array (
          'factory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'request' => 'Illuminate\\Http\\Request',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ),
         'className' => 'App\\Http\\Controllers\\Controller',
         'functionName' => 'getValidationFactory',
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