<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\fideloper\\proxy\\src\\TrustProxies.php-1610491723',
   'data' => 
  array (
    'bd8038112420a19a68e880623ceabaa0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The config repository instance.
     *
     * @var \\Illuminate\\Contracts\\Config\\Repository
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Fideloper\\Proxy',
         'uses' => 
        array (
          'closure' => 'Closure',
          'request' => 'Illuminate\\Http\\Request',
          'repository' => 'Illuminate\\Contracts\\Config\\Repository',
        ),
         'className' => 'Fideloper\\Proxy\\TrustProxies',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '653443c5e8cb5754e04d4f5bb5c73d77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The trusted proxies for the application.
     *
     * @var null|string|array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Fideloper\\Proxy',
         'uses' => 
        array (
          'closure' => 'Closure',
          'request' => 'Illuminate\\Http\\Request',
          'repository' => 'Illuminate\\Contracts\\Config\\Repository',
        ),
         'className' => 'Fideloper\\Proxy\\TrustProxies',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e99c26f943b036bbd98ad306b2732a24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The proxy header mappings.
     *
     * @var null|string|int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Fideloper\\Proxy',
         'uses' => 
        array (
          'closure' => 'Closure',
          'request' => 'Illuminate\\Http\\Request',
          'repository' => 'Illuminate\\Contracts\\Config\\Repository',
        ),
         'className' => 'Fideloper\\Proxy\\TrustProxies',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '256d97d0b8a374da3883e508916fc1b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new trusted proxies middleware instance.
     *
     * @param \\Illuminate\\Contracts\\Config\\Repository $config
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Fideloper\\Proxy',
         'uses' => 
        array (
          'closure' => 'Closure',
          'request' => 'Illuminate\\Http\\Request',
          'repository' => 'Illuminate\\Contracts\\Config\\Repository',
        ),
         'className' => 'Fideloper\\Proxy\\TrustProxies',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e9e71f0b0e3a1ac16cea8e495b47e9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Handle an incoming request.
     *
     * @param \\Illuminate\\Http\\Request $request
     * @param \\Closure                 $next
     *
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\HttpException
     *
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Fideloper\\Proxy',
         'uses' => 
        array (
          'closure' => 'Closure',
          'request' => 'Illuminate\\Http\\Request',
          'repository' => 'Illuminate\\Contracts\\Config\\Repository',
        ),
         'className' => 'Fideloper\\Proxy\\TrustProxies',
         'functionName' => 'handle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '335c2a51a416693c8c078615d8bc79c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the trusted proxies on the request to the value of trustedproxy.proxies
     *
     * @param \\Illuminate\\Http\\Request $request
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Fideloper\\Proxy',
         'uses' => 
        array (
          'closure' => 'Closure',
          'request' => 'Illuminate\\Http\\Request',
          'repository' => 'Illuminate\\Contracts\\Config\\Repository',
        ),
         'className' => 'Fideloper\\Proxy\\TrustProxies',
         'functionName' => 'setTrustedProxyIpAddresses',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a81de3f16c7654898b34bd60d5d48d8b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Specify the IP addresses to trust explicitly.
     *
     * @param \\Illuminate\\Http\\Request $request
     * @param array                    $trustedIps
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Fideloper\\Proxy',
         'uses' => 
        array (
          'closure' => 'Closure',
          'request' => 'Illuminate\\Http\\Request',
          'repository' => 'Illuminate\\Contracts\\Config\\Repository',
        ),
         'className' => 'Fideloper\\Proxy\\TrustProxies',
         'functionName' => 'setTrustedProxyIpAddressesToSpecificIps',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4444bf9458f4364ac5c1f1fbb0ddf1b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Set the trusted proxy to be the IP address calling this servers
     *
     * @param \\Illuminate\\Http\\Request $request
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Fideloper\\Proxy',
         'uses' => 
        array (
          'closure' => 'Closure',
          'request' => 'Illuminate\\Http\\Request',
          'repository' => 'Illuminate\\Contracts\\Config\\Repository',
        ),
         'className' => 'Fideloper\\Proxy\\TrustProxies',
         'functionName' => 'setTrustedProxyIpAddressesToTheCallingIp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '74300969faad1a91442af5e51814d3b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Retrieve trusted header name(s), falling back to defaults if config not set.
     *
     * @return int A bit field of Request::HEADER_*, to set which headers to trust from your proxies.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Fideloper\\Proxy',
         'uses' => 
        array (
          'closure' => 'Closure',
          'request' => 'Illuminate\\Http\\Request',
          'repository' => 'Illuminate\\Contracts\\Config\\Repository',
        ),
         'className' => 'Fideloper\\Proxy\\TrustProxies',
         'functionName' => 'getTrustedHeaderNames',
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