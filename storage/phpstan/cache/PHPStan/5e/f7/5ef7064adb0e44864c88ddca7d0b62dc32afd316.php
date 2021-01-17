<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\symfony\\http-foundation\\JsonResponse.php-1610491669',
   'data' => 
  array (
    '8e101579198c68c8cc07013b33794181' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Response represents an HTTP response in JSON format.
 *
 * Note that this class does not force the returned JSON content to be an
 * object. It is however recommended that you do return an object as it
 * protects yourself against XSSI and JSON-JavaScript Hijacking.
 *
 * @see https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/AJAX_Security_Cheat_Sheet.md#always-return-json-with-an-object-on-the-outside
 *
 * @author Igor Wiedler <igor@wiedler.ch>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ce0a73c9975a7b99d9288fb8de192400' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param mixed $data    The response data
     * @param int   $status  The response status code
     * @param array $headers An array of response headers
     * @param bool  $json    If the data is already a JSON string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dbd52bf297f5ab7b383701cf957e94d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Factory method for chainability.
     *
     * Example:
     *
     *     return JsonResponse::create([\'key\' => \'value\'])
     *         ->setSharedMaxAge(300);
     *
     * @param mixed $data    The JSON response data
     * @param int   $status  The response status code
     * @param array $headers An array of response headers
     *
     * @return static
     *
     * @deprecated since Symfony 5.1, use __construct() instead.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eab31de0074e4e13f46ce95cbbf36f34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Factory method for chainability.
     *
     * Example:
     *
     *     return JsonResponse::fromJsonString(\'{"key": "value"}\')
     *         ->setSharedMaxAge(300);
     *
     * @param string $data    The JSON response string
     * @param int    $status  The response status code
     * @param array  $headers An array of response headers
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
         'functionName' => 'fromJsonString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f787046ca468b577306e728775ff75b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the JSONP callback.
     *
     * @param string|null $callback The JSONP callback or null to use none
     *
     * @return $this
     *
     * @throws \\InvalidArgumentException When the callback name is not valid
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
         'functionName' => 'setCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ec63a6c300e071cfeddfeade62180263' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets a raw string containing a JSON document to be sent.
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
         'functionName' => 'setJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '17f2f67a926d48e7938db51f5aaa25bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the data to be sent as JSON.
     *
     * @param mixed $data
     *
     * @return $this
     *
     * @throws \\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
         'functionName' => 'setData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c370f8bb0e8237c5e85a377008d0be22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns options used while encoding data to JSON.
     *
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
         'functionName' => 'getEncodingOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6b5035661c245e5ab6162754573c591c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets options used while encoding data to JSON.
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
         'functionName' => 'setEncodingOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f43ea682f6d322a4388629527e54686e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Updates the content and headers according to the JSON data and callback.
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
         'functionName' => 'update',
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