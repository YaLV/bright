<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Auth.php-1610491709',
   'data' => 
  array (
    '0c97cf43515e87758b6368783cdbd07c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @method static \\Illuminate\\Auth\\AuthManager extend(string $driver, \\Closure $callback)
 * @method static \\Illuminate\\Auth\\AuthManager provider(string $name, \\Closure $callback)
 * @method static \\Illuminate\\Contracts\\Auth\\Authenticatable loginUsingId(mixed $id, bool $remember = false)
 * @method static \\Illuminate\\Contracts\\Auth\\Authenticatable|null user()
 * @method static \\Illuminate\\Contracts\\Auth\\Guard|\\Illuminate\\Contracts\\Auth\\StatefulGuard guard(string|null $name = null)
 * @method static \\Illuminate\\Contracts\\Auth\\UserProvider|null createUserProvider(string $provider = null)
 * @method static \\Symfony\\Component\\HttpFoundation\\Response|null onceBasic(string $field = \'email\',array $extraConditions = [])
 * @method static bool attempt(array $credentials = [], bool $remember = false)
 * @method static bool check()
 * @method static bool guest()
 * @method static bool once(array $credentials = [])
 * @method static bool onceUsingId(mixed $id)
 * @method static bool validate(array $credentials = [])
 * @method static bool viaRemember()
 * @method static bool|null logoutOtherDevices(string $password, string $attribute = \'password\')
 * @method static int|string|null id()
 * @method static void login(\\Illuminate\\Contracts\\Auth\\Authenticatable $user, bool $remember = false)
 * @method static void logout()
 * @method static void setUser(\\Illuminate\\Contracts\\Auth\\Authenticatable $user)
 * @method static void shouldUse(string $name);
 *
 * @see \\Illuminate\\Auth\\AuthManager
 * @see \\Illuminate\\Contracts\\Auth\\Factory
 * @see \\Illuminate\\Contracts\\Auth\\Guard
 * @see \\Illuminate\\Contracts\\Auth\\StatefulGuard
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support\\Facades',
         'uses' => 
        array (
          'uiserviceprovider' => 'Laravel\\Ui\\UiServiceProvider',
          'runtimeexception' => 'RuntimeException',
        ),
         'className' => 'Illuminate\\Support\\Facades\\Auth',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46a084d0456857a3a01f2d2b8abaf106' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the registered name of the component.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support\\Facades',
         'uses' => 
        array (
          'uiserviceprovider' => 'Laravel\\Ui\\UiServiceProvider',
          'runtimeexception' => 'RuntimeException',
        ),
         'className' => 'Illuminate\\Support\\Facades\\Auth',
         'functionName' => 'getFacadeAccessor',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a09ea31810f82ace9aaf8094bd0007c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Register the typical authentication routes for an application.
     *
     * @param  array  $options
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support\\Facades',
         'uses' => 
        array (
          'uiserviceprovider' => 'Laravel\\Ui\\UiServiceProvider',
          'runtimeexception' => 'RuntimeException',
        ),
         'className' => 'Illuminate\\Support\\Facades\\Auth',
         'functionName' => 'routes',
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