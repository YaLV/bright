<?php

declare(strict_types=1);

return PHPStan\Cache\CacheItem::__set_state([
   'variableKey' => 'C:\\wamp64\\www\\vendor\\symfony\\http-foundation\\RedirectResponse.php-1610491669',
   'data' => [
    'd1d529c005d34b1405c07a4844796afe' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
 * RedirectResponse represents an HTTP response doing a redirect.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '8f04fc69ff262a9df3b427d1a3d6b7f5' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Creates a redirect response so that it conforms to the rules defined for a redirect status code.
     *
     * @param string $url     The URL to redirect to. The URL should be a full URL, with schema etc.,
     *                        but practically every browser redirects on paths only as well
     * @param int    $status  The status code (302 by default)
     * @param array  $headers The headers (Location is always set to the given URL)
     *
     * @throws \\InvalidArgumentException
     *
     * @see https://tools.ietf.org/html/rfc2616#section-10.3
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
         'functionName' => '__construct',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'c0cd08e69411767a5b3173ec7c9753d5' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Factory method for chainability.
     *
     * @param string $url The URL to redirect to
     *
     * @return static
     *
     * @deprecated since Symfony 5.1, use __construct() instead.
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
         'functionName' => 'create',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '7cb94a8099c7f56136906e5bc1ad15b5' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the target URL.
     *
     * @return string target URL
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
         'functionName' => 'getTargetUrl',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'f61e1b4ca804af17c74ae516a39b71f8' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Sets the redirect target of this response.
     *
     * @return $this
     *
     * @throws \\InvalidArgumentException
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
         'functionName' => 'setTargetUrl',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
  ],
]);
