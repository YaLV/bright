<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php-1610491705',
   'data' => 
  array (
    '04a444fb3342c35361bc3f3255ea6083' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The application implementation.
     *
     * @var \\Illuminate\\Contracts\\Foundation\\Application
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Http\\Middleware',
         'uses' => 
        array (
          'closure' => 'Closure',
          'application' => 'Illuminate\\Contracts\\Foundation\\Application',
          'maintenancemodebypasscookie' => 'Illuminate\\Foundation\\Http\\MaintenanceModeBypassCookie',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
        ),
         'className' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '215bb482c4f7e079fd4b6255449ae03e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The URIs that should be accessible while maintenance mode is enabled.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Http\\Middleware',
         'uses' => 
        array (
          'closure' => 'Closure',
          'application' => 'Illuminate\\Contracts\\Foundation\\Application',
          'maintenancemodebypasscookie' => 'Illuminate\\Foundation\\Http\\MaintenanceModeBypassCookie',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
        ),
         'className' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8bb752593c8e73b616bc0926e754ccf3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new middleware instance.
     *
     * @param  \\Illuminate\\Contracts\\Foundation\\Application  $app
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Http\\Middleware',
         'uses' => 
        array (
          'closure' => 'Closure',
          'application' => 'Illuminate\\Contracts\\Foundation\\Application',
          'maintenancemodebypasscookie' => 'Illuminate\\Foundation\\Http\\MaintenanceModeBypassCookie',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
        ),
         'className' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1bfa31b54db8814ef01ff116d8c54824' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Handle an incoming request.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  \\Closure  $next
     * @return mixed
     *
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\HttpException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Http\\Middleware',
         'uses' => 
        array (
          'closure' => 'Closure',
          'application' => 'Illuminate\\Contracts\\Foundation\\Application',
          'maintenancemodebypasscookie' => 'Illuminate\\Foundation\\Http\\MaintenanceModeBypassCookie',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
        ),
         'className' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
         'functionName' => 'handle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '649daecdd3b05ae0699007929ac9d65d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determine if the incoming request has a maintenance mode bypass cookie.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  array  $data
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Http\\Middleware',
         'uses' => 
        array (
          'closure' => 'Closure',
          'application' => 'Illuminate\\Contracts\\Foundation\\Application',
          'maintenancemodebypasscookie' => 'Illuminate\\Foundation\\Http\\MaintenanceModeBypassCookie',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
        ),
         'className' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
         'functionName' => 'hasValidBypassCookie',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e90185eee407d16ef87263598537556a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determine if the request has a URI that should be accessible in maintenance mode.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Http\\Middleware',
         'uses' => 
        array (
          'closure' => 'Closure',
          'application' => 'Illuminate\\Contracts\\Foundation\\Application',
          'maintenancemodebypasscookie' => 'Illuminate\\Foundation\\Http\\MaintenanceModeBypassCookie',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
        ),
         'className' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
         'functionName' => 'inExceptArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '51ed17aacbb1a79be4a35fb35125d012' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Redirect the user back to the root of the application with a maintenance mode bypass cookie.
     *
     * @param  string  $secret
     * @return \\Illuminate\\Http\\RedirectResponse
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Foundation\\Http\\Middleware',
         'uses' => 
        array (
          'closure' => 'Closure',
          'application' => 'Illuminate\\Contracts\\Foundation\\Application',
          'maintenancemodebypasscookie' => 'Illuminate\\Foundation\\Http\\MaintenanceModeBypassCookie',
          'httpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
        ),
         'className' => 'Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance',
         'functionName' => 'bypassResponse',
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