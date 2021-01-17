<?php

declare(strict_types=1);

return PHPStan\Cache\CacheItem::__set_state([
   'variableKey' => 'C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\helpers.php-1610491706',
   'data' => [
    '83d3cc26668f136fb90e69362ff315bb' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Throw an HttpException with the given data.
     *
     * @param  \\Symfony\\Component\\HttpFoundation\\Response|\\Illuminate\\Contracts\\Support\\Responsable|int  $code
     * @param  string  $message
     * @param  array  $headers
     * @return void
     *
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\HttpException
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'abort',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'ca3425b772f14506e3760e4d5cce4a65' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Throw an HttpException with the given data if the given condition is true.
     *
     * @param  bool  $boolean
     * @param  \\Symfony\\Component\\HttpFoundation\\Response|\\Illuminate\\Contracts\\Support\\Responsable|int  $code
     * @param  string  $message
     * @param  array  $headers
     * @return void
     *
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\HttpException
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'abort_if',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'f3c8d5a55ebbd9e7c88d47049e8ee4f5' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Throw an HttpException with the given data unless the given condition is true.
     *
     * @param  bool  $boolean
     * @param  \\Symfony\\Component\\HttpFoundation\\Response|\\Illuminate\\Contracts\\Support\\Responsable|int  $code
     * @param  string  $message
     * @param  array  $headers
     * @return void
     *
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\HttpException
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'abort_unless',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'fd17ce99484bd5b8b6177cfa23263e33' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Generate the URL to a controller action.
     *
     * @param  string|array  $name
     * @param  mixed  $parameters
     * @param  bool  $absolute
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'action',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '73602631188459ffa51d2eb6f440023a' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the available container instance.
     *
     * @param  string|null  $abstract
     * @param  array  $parameters
     * @return mixed|\\Illuminate\\Contracts\\Foundation\\Application
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'app',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '2075e779e282269ed62ae817dd89d33d' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the path to the application folder.
     *
     * @param  string  $path
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'app_path',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '831aa87eb43034b7d1fb6b7fa94d4e9c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Generate an asset path for the application.
     *
     * @param  string  $path
     * @param  bool|null  $secure
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'asset',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '6feaa2f5d4351e9b5f94a14ad51a98bf' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the available auth instance.
     *
     * @param  string|null  $guard
     * @return \\Illuminate\\Contracts\\Auth\\Factory|\\Illuminate\\Contracts\\Auth\\Guard|\\Illuminate\\Contracts\\Auth\\StatefulGuard
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'auth',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'ed770e40b31b9a1749db02da3bb3560b' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Create a new redirect response to the previous location.
     *
     * @param  int  $status
     * @param  array  $headers
     * @param  mixed  $fallback
     * @return \\Illuminate\\Http\\RedirectResponse
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'back',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'f5a77b49d62c56722b46787a0d88351c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the path to the base of the install.
     *
     * @param  string  $path
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'base_path',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '9aa8b862fa1eaa84b0b87ddccf446b41' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Hash the given value against the bcrypt algorithm.
     *
     * @param  string  $value
     * @param  array  $options
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'bcrypt',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '5db0ece4122434bad36ed94aa3c3660a' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Begin broadcasting an event.
     *
     * @param  mixed|null  $event
     * @return \\Illuminate\\Broadcasting\\PendingBroadcast
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'broadcast',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'c0d21eeaf32642d0f2fe724c50ecbe28' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get / set the specified cache value.
     *
     * If an array is passed, we\'ll assume you want to put to the cache.
     *
     * @param  dynamic  key|key,default|data,expiration|null
     * @return mixed|\\Illuminate\\Cache\\CacheManager
     *
     * @throws \\Exception
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'cache',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'ca041b52c92e445afcf551458c359f65' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get / set the specified configuration value.
     *
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param  array|string|null  $key
     * @param  mixed  $default
     * @return mixed|\\Illuminate\\Config\\Repository
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'config',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '13136a15918026b4050aa37aa6e5375a' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the configuration path.
     *
     * @param  string  $path
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'config_path',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'caefeecb92f10381e68221f3b0e50a50' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Create a new cookie instance.
     *
     * @param  string|null  $name
     * @param  string|null  $value
     * @param  int  $minutes
     * @param  string|null  $path
     * @param  string|null  $domain
     * @param  bool|null  $secure
     * @param  bool  $httpOnly
     * @param  bool  $raw
     * @param  string|null  $sameSite
     * @return \\Illuminate\\Cookie\\CookieJar|\\Symfony\\Component\\HttpFoundation\\Cookie
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'cookie',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '6333efd730237d1651240ef1d8a7e26f' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Generate a CSRF token form field.
     *
     * @return \\Illuminate\\Support\\HtmlString
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'csrf_field',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '72563bd14493cb92e2b7d4764040ce75' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the CSRF token value.
     *
     * @return string
     *
     * @throws \\RuntimeException
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'csrf_token',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '742784ec4bef8d1dec763bc22359a205' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the database path.
     *
     * @param  string  $path
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'database_path',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e41eb7073bd199a07a8eaee7d77230c2' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Decrypt the given value.
     *
     * @param  string  $value
     * @param  bool  $unserialize
     * @return mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'decrypt',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '66fbf424eff76b4745c7d57305564e2c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Dispatch a job to its appropriate handler.
     *
     * @param  mixed  $job
     * @return \\Illuminate\\Foundation\\Bus\\PendingDispatch
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'dispatch',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '7f6e1d4c361192bf52533948beb0848c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Dispatch a command to its appropriate handler in the current process.
     *
     * @param  mixed  $job
     * @param  mixed  $handler
     * @return mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'dispatch_now',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '2bd4501653a8ea37b50a6a5c93018a59' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Encrypt the given value.
     *
     * @param  mixed  $value
     * @param  bool  $serialize
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'encrypt',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '01fa2447c57b97bb4b9c000d452540b1' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Dispatch an event and call the listeners.
     *
     * @param  string|object  $event
     * @param  mixed  $payload
     * @param  bool  $halt
     * @return array|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'event',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'ca1c180ed849193794e44dd77e1c0de0' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Write some information to the log.
     *
     * @param  string  $message
     * @param  array  $context
     * @return void
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'info',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'bd9d83fe5c9668af1391200fd22cf355' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Log a debug message to the logs.
     *
     * @param  string|null  $message
     * @param  array  $context
     * @return \\Illuminate\\Log\\LogManager|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'logger',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '7d4cee6c11f83a4416354b68f44a1daa' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get a log driver instance.
     *
     * @param  string|null  $driver
     * @return \\Illuminate\\Log\\LogManager|\\Psr\\Log\\LoggerInterface
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'logs',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'b0f3fbab6e0a8164b1227d7bceb07bc0' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Generate a form field to spoof the HTTP verb used by forms.
     *
     * @param  string  $method
     * @return \\Illuminate\\Support\\HtmlString
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'method_field',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '2f2d15d8f9daf1706a0819625725c8e0' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the path to a versioned Mix file.
     *
     * @param  string  $path
     * @param  string  $manifestDirectory
     * @return \\Illuminate\\Support\\HtmlString|string
     *
     * @throws \\Exception
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'mix',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '04eb0c8b0c6416cfc23c122ae32751dd' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Create a new Carbon instance for the current time.
     *
     * @param  \\DateTimeZone|string|null  $tz
     * @return \\Illuminate\\Support\\Carbon
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'now',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '47758a0c7955865f70c17e04e33810a9' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Retrieve an old input item.
     *
     * @param  string|null  $key
     * @param  mixed  $default
     * @return mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'old',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '367e1f436e295eb79cbfec245bce1b64' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get a policy instance for a given class.
     *
     * @param  object|string  $class
     * @return mixed
     *
     * @throws \\InvalidArgumentException
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'policy',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'ed5412ee9a7c5d3c25da9e0b425f917d' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the path to the public folder.
     *
     * @param  string  $path
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'public_path',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '4f7eb41eb9d76747e95e07aefcce126d' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get an instance of the redirector.
     *
     * @param  string|null  $to
     * @param  int  $status
     * @param  array  $headers
     * @param  bool|null  $secure
     * @return \\Illuminate\\Routing\\Redirector|\\Illuminate\\Http\\RedirectResponse
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'redirect',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '0918bb7ffe839d52481b4bc479f179d5' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Report an exception.
     *
     * @param  \\Throwable|string  $exception
     * @return void
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'report',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '5d1cf1c35b61b846008bae8900ee5a07' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get an instance of the current request or an input item from the request.
     *
     * @param  array|string|null  $key
     * @param  mixed  $default
     * @return \\Illuminate\\Http\\Request|string|array|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'request',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '41487a9657ad236a443f9e9af2ffe139' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Catch a potential exception and return a default value.
     *
     * @param  callable  $callback
     * @param  mixed  $rescue
     * @param  bool  $report
     * @return mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'rescue',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'c27e2141f624f023375d882d3640f14a' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Resolve a service from the container.
     *
     * @param  string  $name
     * @param  array  $parameters
     * @return mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'resolve',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '5e2f009a39b4c9302ece9ac1cf33a7f3' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the path to the resources folder.
     *
     * @param  string  $path
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'resource_path',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '74346fad9409c8e1b5014df0fd380e29' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Return a new response from the application.
     *
     * @param  \\Illuminate\\Contracts\\View\\View|string|array|null  $content
     * @param  int  $status
     * @param  array  $headers
     * @return \\Illuminate\\Http\\Response|\\Illuminate\\Contracts\\Routing\\ResponseFactory
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'response',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'ca56a08c0aaa4e437c9bb603fc14915b' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Generate the URL to a named route.
     *
     * @param  array|string  $name
     * @param  mixed  $parameters
     * @param  bool  $absolute
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'route',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '649ac359472b0ec48cf7332f2179c178' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Generate an asset path for the application.
     *
     * @param  string  $path
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'secure_asset',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '0b6dae75b740bee9430425a5aadf8f28' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Generate a HTTPS url for the application.
     *
     * @param  string  $path
     * @param  mixed  $parameters
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'secure_url',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'dfbd9ae7f6ee7ab050f18830607e7e28' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get / set the specified session value.
     *
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param  array|string|null  $key
     * @param  mixed  $default
     * @return mixed|\\Illuminate\\Session\\Store|\\Illuminate\\Session\\SessionManager
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'session',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'c0d8b0b8ca52d9dc01dbc10486b38451' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the path to the storage folder.
     *
     * @param  string  $path
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'storage_path',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '95f4e27d251055b2c3164a37b10d8b14' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Create a new Carbon instance for the current date.
     *
     * @param  \\DateTimeZone|string|null  $tz
     * @return \\Illuminate\\Support\\Carbon
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'today',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '7ea1dfc3f6a0db489d91d6e172b7529e' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Translate the given message.
     *
     * @param  string|null  $key
     * @param  array  $replace
     * @param  string|null  $locale
     * @return \\Illuminate\\Contracts\\Translation\\Translator|string|array|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'trans',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '46fb6f5b92819fe1539c35f47eb0cd92' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Translates the given message based on a count.
     *
     * @param  string  $key
     * @param  \\Countable|int|array  $number
     * @param  array  $replace
     * @param  string|null  $locale
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'trans_choice',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e6cd6e12cc84bbc634f493418a350ddb' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Translate the given message.
     *
     * @param  string|null  $key
     * @param  array  $replace
     * @param  string|null  $locale
     * @return string|array|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => '__',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '54bfd9360e114fea7500bf247b08fb82' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Generate a url for the application.
     *
     * @param  string|null  $path
     * @param  mixed  $parameters
     * @param  bool|null  $secure
     * @return \\Illuminate\\Contracts\\Routing\\UrlGenerator|string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'url',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '4e0162a7346604658316fb0b5fb56f1b' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Create a new Validator instance.
     *
     * @param  array  $data
     * @param  array  $rules
     * @param  array  $messages
     * @param  array  $customAttributes
     * @return \\Illuminate\\Contracts\\Validation\\Validator|\\Illuminate\\Contracts\\Validation\\Factory
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'validator',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'f6262a5c181a4e4f74c2ce9b02c32454' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the evaluated view contents for the given view.
     *
     * @param  string|null  $view
     * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $data
     * @param  array  $mergeData
     * @return \\Illuminate\\Contracts\\View\\View|\\Illuminate\\Contracts\\View\\Factory
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => null,
         'uses' => [
          'container' => 'Illuminate\\Container\\Container',
          'gate' => 'Illuminate\\Contracts\\Auth\\Access\\Gate',
          'authfactory' => 'Illuminate\\Contracts\\Auth\\Factory',
          'broadcastfactory' => 'Illuminate\\Contracts\\Broadcasting\\Factory',
          'dispatcher' => 'Illuminate\\Contracts\\Bus\\Dispatcher',
          'cookiefactory' => 'Illuminate\\Contracts\\Cookie\\Factory',
          'exceptionhandler' => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
          'responsefactory' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
          'urlgenerator' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
          'responsable' => 'Illuminate\\Contracts\\Support\\Responsable',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'viewfactory' => 'Illuminate\\Contracts\\View\\Factory',
          'pendingclosuredispatch' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
          'pendingdispatch' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
          'mix' => 'Illuminate\\Foundation\\Mix',
          'httpresponseexception' => 'Illuminate\\Http\\Exceptions\\HttpResponseException',
          'callqueuedclosure' => 'Illuminate\\Queue\\CallQueuedClosure',
          'date' => 'Illuminate\\Support\\Facades\\Date',
          'htmlstring' => 'Illuminate\\Support\\HtmlString',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ],
         'className' => null,
         'functionName' => 'view',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
  ],
]);
