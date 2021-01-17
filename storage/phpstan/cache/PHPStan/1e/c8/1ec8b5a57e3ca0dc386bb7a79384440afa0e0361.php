<?php

declare(strict_types=1);

return PHPStan\Cache\CacheItem::__set_state([
   'variableKey' => 'C:\\wamp64\\www\\vendor\\symfony\\http-foundation\\Request.php-1610491669',
   'data' => [
    '25897fe2d81421f288bc9e0d5a5ff3d3' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
 * Request represents an HTTP request.
 *
 * The methods dealing with URL accept / return a raw path (% encoded):
 *   * getBasePath
 *   * getBaseUrl
 *   * getPathInfo
 *   * getRequestUri
 *   * getUri
 *   * getUriForPath
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'd19f82612ce25d59ef1ec02aca9acdae' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/** @deprecated since Symfony 5.2, use either "HEADER_X_FORWARDED_FOR | HEADER_X_FORWARDED_HOST | HEADER_X_FORWARDED_PORT | HEADER_X_FORWARDED_PROTO" or "HEADER_X_FORWARDED_AWS_ELB" or "HEADER_X_FORWARDED_TRAEFIK" constants instead. */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'dcf71df7654d0103e6e66677c140528d' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @var string[]
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'ffc8f96ea7081b981b68bbabf4a6016c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Custom parameters.
     *
     * @var ParameterBag
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'c4f1dad50baaf07444f597d7c4fb8546' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Request body parameters ($_POST).
     *
     * @var InputBag|ParameterBag
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'a821efab250715471916b736f5ab6d5a' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Query string parameters ($_GET).
     *
     * @var InputBag
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '7f03d55e16d644b2037951270e94c148' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Server and execution environment parameters ($_SERVER).
     *
     * @var ServerBag
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'ef39ad8618c208a65ac19b39315a30b4' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Uploaded files ($_FILES).
     *
     * @var FileBag
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '464455404bbdd19876bdc197c4410ed5' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Cookies ($_COOKIE).
     *
     * @var InputBag
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'cb4564e4f77eed805c39791b3d7d21f1' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Headers (taken from the $_SERVER).
     *
     * @var HeaderBag
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e80ebf1fa02c14936f37394244720ae9' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @var string|resource|false|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '503bd92f16141b18e542588d4b0323d2' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @var array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '365466349b72d258454ef13a844ea863' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @var string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '9235850b51a889023415537f9eb4ed54' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @var SessionInterface|callable
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '3b89b400023f593b7f4f9927b7d13750' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @var string|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'd2eee660b6e09b5b2bb36bdfb3afd461' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @var bool|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '31e27a5bdcb6910c893173a24d243ef1' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Names for headers that can be trusted when
     * using trusted proxies.
     *
     * The FORWARDED header is the standard as of rfc7239.
     *
     * The other headers are non-standard, but widely used
     * by popular reverse proxies (like Apache mod_proxy or Amazon EC2).
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'eeaef683ea22e7be2326d13ca2f5be54' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param array                $query      The GET parameters
     * @param array                $request    The POST parameters
     * @param array                $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
     * @param array                $cookies    The COOKIE parameters
     * @param array                $files      The FILES parameters
     * @param array                $server     The SERVER parameters
     * @param string|resource|null $content    The raw body data
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => '__construct',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '20803759a4e7fa7b0f060da30c587d9c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Sets the parameters for this request.
     *
     * This method also re-initializes all properties.
     *
     * @param array                $query      The GET parameters
     * @param array                $request    The POST parameters
     * @param array                $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
     * @param array                $cookies    The COOKIE parameters
     * @param array                $files      The FILES parameters
     * @param array                $server     The SERVER parameters
     * @param string|resource|null $content    The raw body data
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'initialize',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'd378896cb7c80665c37551439a73fde5' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Creates a new request with values from PHP\'s super globals.
     *
     * @return static
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'createFromGlobals',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'c9eb7fc5cc65ee6163a7e59a438429b9' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Creates a Request based on a given URI and configuration.
     *
     * The information contained in the URI always take precedence
     * over the other information (server and parameters).
     *
     * @param string               $uri        The URI
     * @param string               $method     The HTTP method
     * @param array                $parameters The query (GET) or request (POST) parameters
     * @param array                $cookies    The request cookies ($_COOKIE)
     * @param array                $files      The request files ($_FILES)
     * @param array                $server     The server parameters ($_SERVER)
     * @param string|resource|null $content    The raw body data
     *
     * @return static
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'create',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'eb4838ccc760d401c491440220f03845' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Sets a callable able to create a Request instance.
     *
     * This is mainly useful when you need to override the Request class
     * to keep BC with an existing system. It should not be used for any
     * other purpose.
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'setFactory',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '74dcbaf4e28b703ee0cf3c4dcbec4a52' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Clones a request and overrides some of its parameters.
     *
     * @param array $query      The GET parameters
     * @param array $request    The POST parameters
     * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
     * @param array $cookies    The COOKIE parameters
     * @param array $files      The FILES parameters
     * @param array $server     The SERVER parameters
     *
     * @return static
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'duplicate',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '9ad956e4138c56953d03ca80549671ed' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Clones the current request.
     *
     * Note that the session is not cloned as duplicated requests
     * are most of the time sub-requests of the main one.
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => '__clone',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '0f499d7ecd38106820831a09c66410b0' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the request as a string.
     *
     * @return string The request
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => '__toString',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '8c5bd62372c62a948d889b88fd95043d' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Overrides the PHP global variables according to this request instance.
     *
     * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
     * $_FILES is never overridden, see rfc1867
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'overrideGlobals',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'fca62e0d50a1c5f6210c8fa92cf79f03' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Sets a list of trusted proxies.
     *
     * You should only list the reverse proxies that you manage directly.
     *
     * @param array $proxies          A list of trusted proxies, the string \'REMOTE_ADDR\' will be replaced with $_SERVER[\'REMOTE_ADDR\']
     * @param int   $trustedHeaderSet A bit field of Request::HEADER_*, to set which headers to trust from your proxies
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'setTrustedProxies',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '4ea2edf45dc859881d75c73e041ad49f' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets the list of trusted proxies.
     *
     * @return array An array of trusted proxies
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getTrustedProxies',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '2b99aa11a21bcdc2f2091d8c315f8d02' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets the set of trusted headers from trusted proxies.
     *
     * @return int A bit field of Request::HEADER_* that defines which headers are trusted from your proxies
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getTrustedHeaderSet',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '66cabf0a3f251c3dc3100148475d1f41' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Sets a list of trusted host patterns.
     *
     * You should only list the hosts you manage using regexs.
     *
     * @param array $hostPatterns A list of trusted host patterns
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'setTrustedHosts',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'fc330523b995e0b9385ae0df338a2d0a' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets the list of trusted host patterns.
     *
     * @return array An array of trusted host patterns
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getTrustedHosts',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'fbab083aeddfe6416dc7e7ee56121ec4' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Normalizes a query string.
     *
     * It builds a normalized query string, where keys/value pairs are alphabetized,
     * have consistent escaping and unneeded delimiters are removed.
     *
     * @return string A normalized query string for the Request
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'normalizeQueryString',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '2c6e41b9500554a4752b1ba3ff08f114' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Enables support for the _method request parameter to determine the intended HTTP method.
     *
     * Be warned that enabling this feature might lead to CSRF issues in your code.
     * Check that you are using CSRF tokens when required.
     * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
     * and used to send a "PUT" or "DELETE" request via the _method request parameter.
     * If these methods are not protected against CSRF, this presents a possible vulnerability.
     *
     * The HTTP method can only be overridden when the real HTTP method is POST.
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'enableHttpMethodParameterOverride',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'dea577e125b00ba23d55c8a109f02205' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Checks whether support for the _method request parameter is enabled.
     *
     * @return bool True when the _method request parameter is enabled, false otherwise
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getHttpMethodParameterOverride',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'c7b3411aa2e86036dc13eaa23c0d2e90' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets a "parameter" value from any bag.
     *
     * This method is mainly useful for libraries that want to provide some flexibility. If you don\'t need the
     * flexibility in controllers, it is better to explicitly get request parameters from the appropriate
     * public property instead (attributes, query, request).
     *
     * Order of precedence: PATH (routing placeholders or custom attributes), GET, BODY
     *
     * @param mixed $default The default value if the parameter key does not exist
     *
     * @return mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'get',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'fa2aac9b69436c34a37924d9c13235bd' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets the Session.
     *
     * @return SessionInterface The session
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getSession',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '5b49c42be18b4e96d51348f5ce899868' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Whether the request contains a Session which was started in one of the
     * previous requests.
     *
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'hasPreviousSession',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '4bf7479200c55a3595b277b503cfcecb' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Whether the request contains a Session object.
     *
     * This method does not give any information about the state of the session object,
     * like whether the session is started or not. It is just a way to check if this Request
     * is associated with a Session instance.
     *
     * @return bool true when the Request contains a Session object, false otherwise
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'hasSession',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '30b50bea0157c4d3b0162679ad292841' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @internal
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'setSessionFactory',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '565c87c1ed58b054b6f97f8dd7772199' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the client IP addresses.
     *
     * In the returned array the most trusted IP address is first, and the
     * least trusted one last. The "real" client IP address is the last one,
     * but this is also the least trusted one. Trusted proxies are stripped.
     *
     * Use this method carefully; you should use getClientIp() instead.
     *
     * @return array The client IP addresses
     *
     * @see getClientIp()
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getClientIps',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '2269d09e06d26a3d7523b1c25c2efb1d' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the client IP address.
     *
     * This method can read the client IP address from the "X-Forwarded-For" header
     * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
     * header value is a comma+space separated list of IP addresses, the left-most
     * being the original client, and each successive proxy that passed the request
     * adding the IP address where it received the request from.
     *
     * If your reverse proxy uses a different header name than "X-Forwarded-For",
     * ("Client-Ip" for instance), configure it via the $trustedHeaderSet
     * argument of the Request::setTrustedProxies() method instead.
     *
     * @return string|null The client IP address
     *
     * @see getClientIps()
     * @see https://wikipedia.org/wiki/X-Forwarded-For
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getClientIp',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'f0113f416058e59e6618406cbbd5b478' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns current script name.
     *
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getScriptName',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '4f1338f6051e2e9d84109152f26765e5' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the path being requested relative to the executed script.
     *
     * The path info always starts with a /.
     *
     * Suppose this request is instantiated from /mysite on localhost:
     *
     *  * http://localhost/mysite              returns an empty string
     *  * http://localhost/mysite/about        returns \'/about\'
     *  * http://localhost/mysite/enco%20ded   returns \'/enco%20ded\'
     *  * http://localhost/mysite/about?var=1  returns \'/about\'
     *
     * @return string The raw path (i.e. not urldecoded)
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getPathInfo',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'c74b5cd92d8cf05013ff66c5ddeef1f5' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the root path from which this request is executed.
     *
     * Suppose that an index.php file instantiates this request object:
     *
     *  * http://localhost/index.php         returns an empty string
     *  * http://localhost/index.php/page    returns an empty string
     *  * http://localhost/web/index.php     returns \'/web\'
     *  * http://localhost/we%20b/index.php  returns \'/we%20b\'
     *
     * @return string The raw path (i.e. not urldecoded)
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getBasePath',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e4b15bf321830236b3f860809ac8cbe1' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the root URL from which this request is executed.
     *
     * The base URL never ends with a /.
     *
     * This is similar to getBasePath(), except that it also includes the
     * script filename (e.g. index.php) if one exists.
     *
     * @return string The raw URL (i.e. not urldecoded)
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getBaseUrl',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '5083b7615a92d72e45b4bfca3d8e3e11' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the real base URL received by the webserver from which this request is executed.
     * The URL does not include trusted reverse proxy prefix.
     *
     * @return string The raw URL (i.e. not urldecoded)
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getBaseUrlReal',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'd8e21c277bc7e4a045c02a85cea7791c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets the request\'s scheme.
     *
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getScheme',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '79d1e8bf634360d64ccf02d0cd57dd51' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the port on which the request is made.
     *
     * This method can read the client port from the "X-Forwarded-Port" header
     * when trusted proxies were set via "setTrustedProxies()".
     *
     * The "X-Forwarded-Port" header must contain the client port.
     *
     * @return int|string can be a string if fetched from the server bag
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getPort',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'dc160f9f0f402fa8e4ba7daf1c431faf' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the user.
     *
     * @return string|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getUser',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'b2d2e31b59bf9e1fb1b2b7953d1ccb24' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the password.
     *
     * @return string|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getPassword',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '231a2545bc701d9b7a22a5d8a5c02464' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets the user info.
     *
     * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getUserInfo',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '9859171a4f3d179b2a082e038d510f0d' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the HTTP host being requested.
     *
     * The port name will be appended to the host if it\'s non-standard.
     *
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getHttpHost',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e11ea305f46d02af051417061b66daf2' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the requested URI (path and query string).
     *
     * @return string The raw URI (i.e. not URI decoded)
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getRequestUri',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '527386879c62cde519019ca2f1d6e814' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets the scheme and HTTP host.
     *
     * If the URL was called with basic authentication, the user
     * and the password are not added to the generated string.
     *
     * @return string The scheme and HTTP host
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getSchemeAndHttpHost',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'd71b7a71b92f1cccbadde1cd39657808' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Generates a normalized URI (URL) for the Request.
     *
     * @return string A normalized URI (URL) for the Request
     *
     * @see getQueryString()
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getUri',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'b1e3720fbfdb0cfd7a76dd3735cc33b3' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Generates a normalized URI for the given path.
     *
     * @param string $path A path to use instead of the current one
     *
     * @return string The normalized URI for the path
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getUriForPath',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '93fa14e279254d158f21129f062508db' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the path as relative reference from the current Request path.
     *
     * Only the URIs path component (no schema, host etc.) is relevant and must be given.
     * Both paths must be absolute and not contain relative parts.
     * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
     * Furthermore, they can be used to reduce the link size in documents.
     *
     * Example target paths, given a base path of "/a/b/c/d":
     * - "/a/b/c/d"     -> ""
     * - "/a/b/c/"      -> "./"
     * - "/a/b/"        -> "../"
     * - "/a/b/c/other" -> "other"
     * - "/a/x/y"       -> "../../x/y"
     *
     * @return string The relative target path
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getRelativeUriForPath',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'fb188a5a53931a3374b1ffae41b6ceb9' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Generates the normalized query string for the Request.
     *
     * It builds a normalized query string, where keys/value pairs are alphabetized
     * and have consistent escaping.
     *
     * @return string|null A normalized query string for the Request
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getQueryString',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '31fab7bdbc128143c2de9129166171ad' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Checks whether the request is secure or not.
     *
     * This method can read the client protocol from the "X-Forwarded-Proto" header
     * when trusted proxies were set via "setTrustedProxies()".
     *
     * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
     *
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'isSecure',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '5654841321e7515ccb4c23eed4edaab6' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the host name.
     *
     * This method can read the client host name from the "X-Forwarded-Host" header
     * when trusted proxies were set via "setTrustedProxies()".
     *
     * The "X-Forwarded-Host" header must contain the client host name.
     *
     * @return string
     *
     * @throws SuspiciousOperationException when the host name is invalid or not trusted
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getHost',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '5a6f56165aaae576ee0ee4957b2404fb' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Sets the request method.
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'setMethod',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'fbcfb62d006244ebee18e5543efd855a' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets the request "intended" method.
     *
     * If the X-HTTP-Method-Override header is set, and if the method is a POST,
     * then it is used to determine the "real" intended HTTP method.
     *
     * The _method request parameter can also be used to determine the HTTP method,
     * but only if enableHttpMethodParameterOverride() has been called.
     *
     * The method is always an uppercased string.
     *
     * @return string The request method
     *
     * @see getRealMethod()
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getMethod',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e1775c0530d5c13e779571e43a61e63c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets the "real" request method.
     *
     * @return string The request method
     *
     * @see getMethod()
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getRealMethod',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e5506dadfd5a95f05f219f95d4055ed6' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets the mime type associated with the format.
     *
     * @return string|null The associated mime type (null if not found)
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getMimeType',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'c6891ee05f8b0add85851ad1dda29252' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets the mime types associated with the format.
     *
     * @return array The associated mime types
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getMimeTypes',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e92edcd2caffcf02b0b1cf9828d5e491' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets the format associated with the mime type.
     *
     * @return string|null The format (null if not found)
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getFormat',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '26b1fd04e55223a68149c243b343e7f5' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Associates a format with mime types.
     *
     * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'setFormat',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'af32e225a0b6a1d3c49e3754c6dd1d0c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets the request format.
     *
     * Here is the process to determine the format:
     *
     *  * format defined by the user (with setRequestFormat())
     *  * _format request attribute
     *  * $default
     *
     * @see getPreferredFormat
     *
     * @return string|null The request format
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getRequestFormat',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '89c3eb555f89389f861122dcfbcc9a78' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Sets the request format.
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'setRequestFormat',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'c129e2098f300a9ab380133f8b890873' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets the format associated with the request.
     *
     * @return string|null The format (null if no content type is present)
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getContentType',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '54eaf17bc881ce05b0f23c6e8495d712' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Sets the default locale.
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'setDefaultLocale',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'ad3226051897884c9d84d5a4431bd0a5' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the default locale.
     *
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getDefaultLocale',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '37265b19fd3b8f5aae9a327190ce11c8' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Sets the locale.
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'setLocale',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'd1d388db4f863564814b37e8309bb1cb' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the locale.
     *
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getLocale',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e34efb5501befec69851417ef9d842e8' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Checks if the request method is of specified type.
     *
     * @param string $method Uppercase request method (GET, POST etc)
     *
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'isMethod',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '6bc6bab3dd9a2f608fefa1dc513ac963' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Checks whether or not the method is safe.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-4.2.1
     *
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'isMethodSafe',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '5f39b44c99d5355470e4545da4702424' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Checks whether or not the method is idempotent.
     *
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'isMethodIdempotent',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e3e7d02b3df8e230f32d4f8ff0dfddf8' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Checks whether the method is cacheable or not.
     *
     * @see https://tools.ietf.org/html/rfc7231#section-4.2.3
     *
     * @return bool True for GET and HEAD, false otherwise
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'isMethodCacheable',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '36cfcc2e6b6ee284da7094f790a74493' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the protocol version.
     *
     * If the application is behind a proxy, the protocol version used in the
     * requests between the client and the proxy and between the proxy and the
     * server might be different. This returns the former (from the "Via" header)
     * if the proxy is trusted (see "setTrustedProxies()"), otherwise it returns
     * the latter (from the "SERVER_PROTOCOL" server parameter).
     *
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getProtocolVersion',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'd144223c9a530f44680fb39c0b9ef16a' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the request body content.
     *
     * @param bool $asResource If true, a resource will be returned
     *
     * @return string|resource The request body content or a resource to read the body stream
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getContent',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '9390440469a6ca0cda3045db0c06186f' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets the request body decoded as array, typically from a JSON payload.
     *
     * @throws JsonException When the body cannot be decoded to an array
     *
     * @return array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'toArray',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '7d33b9fbc977bb5c8b170446ce13e5a9' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets the Etags.
     *
     * @return array The entity tags
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getETags',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '8cbc9f763e52d10ca335661b64428483' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'isNoCache',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '7723efe1f69642c859d2dee0dc82fbf0' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets the preferred format for the response by inspecting, in the following order:
     *   * the request format set using setRequestFormat;
     *   * the values of the Accept HTTP header.
     *
     * Note that if you use this method, you should send the "Vary: Accept" header
     * in the response to prevent any issues with intermediary HTTP caches.
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getPreferredFormat',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '2faa0b718c6ab44d4f9efeedee2f11ca' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the preferred language.
     *
     * @param string[] $locales An array of ordered available locales
     *
     * @return string|null The preferred locale
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getPreferredLanguage',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e66f638d3583db57bd855b1377d09d15' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets a list of languages acceptable by the client browser.
     *
     * @return array Languages ordered in the user browser preferences
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getLanguages',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'b9117e7299a4ca609c240c464f170df4' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets a list of charsets acceptable by the client browser.
     *
     * @return array List of charsets in preferable order
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getCharsets',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'd2d3c604da37a5d36b221dacd3f37436' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets a list of encodings acceptable by the client browser.
     *
     * @return array List of encodings in preferable order
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getEncodings',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'bc9ca78d4d09e9d36cd8413e755725e3' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Gets a list of content types acceptable by the client browser.
     *
     * @return array List of content types in preferable order
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getAcceptableContentTypes',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'fa62fef95934b2cde78eee2a9690eddf' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns true if the request is a XMLHttpRequest.
     *
     * It works if your JavaScript library sets an X-Requested-With HTTP header.
     * It is known to work with common JavaScript frameworks:
     *
     * @see https://wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
     *
     * @return bool true if the request is an XMLHttpRequest, false otherwise
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'isXmlHttpRequest',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '6d66d30f56f42ac832d0a52ad80ce0db' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Checks whether the client browser prefers safe content or not according to RFC8674.
     *
     * @see https://tools.ietf.org/html/rfc8674
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'preferSafeContent',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e5cb66c70fbbc2bb567982b66c7e7a66' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Prepares the base URL.
     *
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'prepareBaseUrl',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '74418c3229d363a0f6f2e5d8767503a2' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Prepares the base path.
     *
     * @return string base path
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'prepareBasePath',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '59b94fdb4308fe22f321af26ab3715f9' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Prepares the path info.
     *
     * @return string path info
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'preparePathInfo',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'dd52bff0d364c185ebf066fffd416374' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Initializes HTTP request formats.
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'initializeFormats',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '4f6dee2645325da757901875f80fe71e' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Returns the prefix as encoded in the string when the string starts with
     * the given prefix, null otherwise.
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'getUrlencodedPrefix',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '8a72d2f989d014ea88f4eab1c7a59b07' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Indicates whether this request originated from a trusted proxy.
     *
     * This can be useful to determine whether or not to trust the
     * contents of a proxy-specific header.
     *
     * @return bool true if the request came from a trusted proxy, false otherwise
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => [
          'conflictingheadersexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException',
          'jsonexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\JsonException',
          'suspiciousoperationexception' => 'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException',
          'sessioninterface' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
        ],
         'className' => 'Symfony\\Component\\HttpFoundation\\Request',
         'functionName' => 'isFromTrustedProxy',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
  ],
]);
