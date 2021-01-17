<?php

declare(strict_types=1);

return PHPStan\Cache\CacheItem::__set_state([
   'variableKey' => 'C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Request.php-1610491706,C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Concerns\\InteractsWithContentTypes.php-1610491706,C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Concerns\\InteractsWithFlashData.php-1610491706,C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Concerns\\InteractsWithInput.php-1610491706,C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Macroable\\Traits\\Macroable.php-1610491706',
   'data' => [
    '1cc644f2aa6f64e26072f8233676f72a' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
 * @method array validate(array $rules, ...$params)
 * @method array validateWithBag(string $errorBag, array $rules, ...$params)
 * @method bool hasValidSignature(bool $absolute = true)
 */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '43136adc9de6e59461f94c9a9c1ebe75' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the request is sending JSON.
     *
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'str' => 'Illuminate\\Support\\Str',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'isJson',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '186f337cf9f18828bbacd0c7a0f49b62' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the current request probably expects a JSON response.
     *
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'str' => 'Illuminate\\Support\\Str',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'expectsJson',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '80b39c35d73dea21df197315576861b8' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the current request is asking for JSON.
     *
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'str' => 'Illuminate\\Support\\Str',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'wantsJson',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '4ff2f3ae8cf70a4bce6d09aa9c1486e6' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determines whether the current requests accepts a given content type.
     *
     * @param  string|array  $contentTypes
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'str' => 'Illuminate\\Support\\Str',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'accepts',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '042051c98340e64b792f0053e92fa2da' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Return the most suitable content type from the given array based on content negotiation.
     *
     * @param  string|array  $contentTypes
     * @return string|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'str' => 'Illuminate\\Support\\Str',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'prefers',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'c840f853a52d562468c9bf3e54accf06' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the current request accepts any content type.
     *
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'str' => 'Illuminate\\Support\\Str',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'acceptsAnyContentType',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '21269dca4a428d1a5641b34871834873' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determines whether a request accepts JSON.
     *
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'str' => 'Illuminate\\Support\\Str',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'acceptsJson',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '6f7e1545177eed2d6081352a6d007bee' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determines whether a request accepts HTML.
     *
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'str' => 'Illuminate\\Support\\Str',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'acceptsHtml',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '41943b10c38df083ab6bad4e6e5ec444' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the given content types match.
     *
     * @param  string  $actual
     * @param  string  $type
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'str' => 'Illuminate\\Support\\Str',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'matchesType',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'ebe24743ea1369ecba346893ca8ddbb2' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the data format expected in the response.
     *
     * @param  string  $default
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'str' => 'Illuminate\\Support\\Str',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'format',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'ef192df08c5dff0921c5a2fc857cd371' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Retrieve an old input item.
     *
     * @param  string|null  $key
     * @param  string|array|null  $default
     * @return string|array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'old',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'd1b13349194135fdff1bb8ad993910bf' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Flash the input for the current request to the session.
     *
     * @return void
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'flash',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '45757a258d92f1ed098fb92bbc378a7e' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Flash only some of the input to the session.
     *
     * @param  array|mixed  $keys
     * @return void
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'flashOnly',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '69ce08df4d62bc0340f7edb52e30a4ea' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Flash only some of the input to the session.
     *
     * @param  array|mixed  $keys
     * @return void
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'flashExcept',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '6c91e5ef3abccc4ac8b9380e432ca4f0' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Flush all of the old input from the session.
     *
     * @return void
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'flush',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'f8809c87b977020f0571078114911a21' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Retrieve a server variable from the request.
     *
     * @param  string|null  $key
     * @param  string|array|null  $default
     * @return string|array|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'server',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '8d5afd35159a9438c5d1f1ab0690d086' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if a header is set on the request.
     *
     * @param  string  $key
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'hasHeader',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '5d332720ee3f7765c9990ac26fbd523f' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Retrieve a header from the request.
     *
     * @param  string|null  $key
     * @param  string|array|null  $default
     * @return string|array|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'header',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'be09187f619aa44d727c26148ca13b82' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the bearer token from the request headers.
     *
     * @return string|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'bearerToken',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '65a35de2eb47f08f93f447cc0fba85c1' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the request contains a given input item key.
     *
     * @param  string|array  $key
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'exists',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'dc1721ddbc90bb94edd08bc3f12d572c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the request contains a given input item key.
     *
     * @param  string|array  $key
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'has',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'f6dcd64130f849932b4bb4bb780a4f9b' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the request contains any of the given inputs.
     *
     * @param  string|array  $keys
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'hasAny',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '1cde7ebdc49ad4f246e8444a8da922a1' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Apply the callback if the request contains the given input item key.
     *
     * @param  string  $key
     * @param  callable  $callback
     * @return $this|mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'whenHas',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '8452d2670b97c94e19579f8ba59709b5' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the request contains a non-empty value for an input item.
     *
     * @param  string|array  $key
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'filled',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'bd231fefacd27cc86d8ef037fd82d895' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the request contains an empty value for an input item.
     *
     * @param  string|array  $key
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'isNotFilled',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'a38510fff49bcfac921fb2ca1107d9b6' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the request contains a non-empty value for any of the given inputs.
     *
     * @param  string|array  $keys
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'anyFilled',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '5d28969083be308e14ce88ad8435e9a0' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Apply the callback if the request contains a non-empty value for the given input item key.
     *
     * @param  string  $key
     * @param  callable  $callback
     * @return $this|mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'whenFilled',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '72beb239a37d812497cacc2b92883146' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the request is missing a given input item key.
     *
     * @param  string|array  $key
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'missing',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '330270cec143ebb504ecd22d0ffb04da' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the given input key is an empty string for "has".
     *
     * @param  string  $key
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'isEmptyString',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'f754ec53c9aa6caa1614b36f89022a24' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the keys for all of the input and files.
     *
     * @return array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'keys',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '8ebe3c10349925b95a2c7ca89785e63c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get all of the input and files for the request.
     *
     * @param  array|mixed|null  $keys
     * @return array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'all',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '87674faae87012d3adcc73ad691d4d3b' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Retrieve an input item from the request.
     *
     * @param  string|null  $key
     * @param  mixed  $default
     * @return mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'input',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '8a199efd78bd44cc69cb2c608f239acf' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Retrieve input as a boolean value.
     *
     * Returns true when value is "1", "true", "on", and "yes". Otherwise, returns false.
     *
     * @param  string|null  $key
     * @param  bool  $default
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'boolean',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '68ed415add19711518d268b8b7f6594c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get a subset containing the provided keys with values from the input data.
     *
     * @param  array|mixed  $keys
     * @return array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'only',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '7b3b582fef04ac7d3dcf4c18a841b4a6' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get all of the input except for a specified array of items.
     *
     * @param  array|mixed  $keys
     * @return array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'except',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e432c95b74e9814288d522ef5ce47fbe' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Retrieve a query string item from the request.
     *
     * @param  string|null  $key
     * @param  string|array|null  $default
     * @return string|array|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'query',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '7a2ffa569d914869a3ce8f41d754c04c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Retrieve a request payload item from the request.
     *
     * @param  string|null  $key
     * @param  string|array|null  $default
     * @return string|array|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'post',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'd93195f8cc48a2a17c20de72c55d02cc' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if a cookie is set on the request.
     *
     * @param  string  $key
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'hasCookie',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '51ba1f190858bec016d60b6e2f30cd6d' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Retrieve a cookie from the request.
     *
     * @param  string|null  $key
     * @param  string|array|null  $default
     * @return string|array|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'cookie',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '91c677e2dff105d0356ec5a3098cfed9' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get an array of all of the files on the request.
     *
     * @return array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'allFiles',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '8734ec9a605047ed33fff29d12a7018e' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Convert the given array of Symfony UploadedFiles to custom Laravel UploadedFiles.
     *
     * @param  array  $files
     * @return array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'convertUploadedFiles',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'bb148075fd7fe99477037fc8d59aea77' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the uploaded data contains a file.
     *
     * @param  string  $key
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'hasFile',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '5e072b8c73d36dc7c0810afc4ebdbe8e' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Check that the given file is a valid file instance.
     *
     * @param  mixed  $file
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'isValidFile',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'aede0847b982c6b32e5f2d8ac43d60cf' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Retrieve a file from the request.
     *
     * @param  string|null  $key
     * @param  mixed  $default
     * @return \\Illuminate\\Http\\UploadedFile|\\Illuminate\\Http\\UploadedFile[]|array|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'file',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '64c6b7a8a83a55e4fdb8a7e137f6dc66' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Retrieve a parameter item from a given source.
     *
     * @param  string  $source
     * @param  string  $key
     * @param  string|array|null  $default
     * @return string|array|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'retrieveItem',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e9bb80716ef240b90161e5f078bc3b16' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Dump the request items and end the script.
     *
     * @param  array|mixed  $keys
     * @return void
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'dd',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '86222132a0f5b7fef5f34d949bf71c8e' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Dump the items.
     *
     * @param  array  $keys
     * @return $this
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http\\Concerns',
         'uses' => [
          'uploadedfile' => 'Illuminate\\Http\\UploadedFile',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'splfileinfo' => 'SplFileInfo',
          'stdclass' => 'stdClass',
          'vardumper' => 'Symfony\\Component\\VarDumper\\VarDumper',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'dump',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'a24f221eaeb664162b8b7f15d64fb79b' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * The registered string macros.
     *
     * @var array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Support\\Traits',
         'uses' => [
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '49218ea1bbd748bd787eb26c038c7bed' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Register a custom macro.
     *
     * @param  string  $name
     * @param  object|callable  $macro
     * @return void
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Support\\Traits',
         'uses' => [
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'macro',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '1e8358c8875d0b94f6618edd309202e2' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Mix another object into the class.
     *
     * @param  object  $mixin
     * @param  bool  $replace
     * @return void
     *
     * @throws \\ReflectionException
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Support\\Traits',
         'uses' => [
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'mixin',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '62e9896dc0f10a77d8618a765ed65275' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Checks if macro is registered.
     *
     * @param  string  $name
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Support\\Traits',
         'uses' => [
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'hasMacro',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '955ed2ba3a5fc9261aabb4bd033d8519' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Dynamically handle calls to the class.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     *
     * @throws \\BadMethodCallException
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Support\\Traits',
         'uses' => [
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => '__callStatic',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'be28a245fe414596431329488442fdaa' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Dynamically handle calls to the class.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     *
     * @throws \\BadMethodCallException
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Support\\Traits',
         'uses' => [
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => '__call',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '0d6a38cb5d3db0245c1724fee7242372' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * The decoded JSON content for the request.
     *
     * @var \\Symfony\\Component\\HttpFoundation\\ParameterBag|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '3debcf211cbc03e6d7f8c133704c41ec' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * All of the converted files for the request.
     *
     * @var array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'affe3c68f84a5964d1b7edca641912e9' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * The user resolver callback.
     *
     * @var \\Closure
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'd431709c1d3ecac3bcb56ad9fa567802' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * The route resolver callback.
     *
     * @var \\Closure
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '3c7e9f3e3f17ec1a242a7d2ae8becb50' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Create a new Illuminate HTTP request from server variables.
     *
     * @return static
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'capture',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '53c77ccc1ab12a217464d9a9fd36f9eb' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Return the Request instance.
     *
     * @return $this
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'instance',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'abe286377ddfa8b5eb2b245de4e919ec' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the request method.
     *
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'method',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'd891121bd9540f773f29ccde414bafb2' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the root URL for the application.
     *
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'root',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '69773efdc718369ee6343194c7f3daaf' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the URL (no query string) for the request.
     *
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'url',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '0870108d242b050d9f4305f6f4b0f3bf' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the full URL for the request.
     *
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'fullUrl',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '0bff8c556b905702356dac81b5db2a60' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the full URL for the request with the added query string parameters.
     *
     * @param  array  $query
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'fullUrlWithQuery',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '5db36b82a6c2805b8db247cdad542645' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the current path info for the request.
     *
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'path',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e33e5d0c8d465e9ad6c9b343297fdbf8' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the current decoded path info for the request.
     *
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'decodedPath',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '5883da9abbcfdbd3e3b545d26e5f89b8' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get a segment from the URI (1 based index).
     *
     * @param  int  $index
     * @param  string|null  $default
     * @return string|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'segment',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '7277d4077975da84cd45fc68ab4e48ed' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get all of the segments for the request path.
     *
     * @return array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'segments',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '49dfb32f951812e6b67fef1c565968fa' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the current request URI matches a pattern.
     *
     * @param  mixed  ...$patterns
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'is',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '901a62395821851c652c3f47377650e1' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the route name matches a given pattern.
     *
     * @param  mixed  ...$patterns
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'routeIs',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'db4cd3aba8bd027a0fbefe06e863be01' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the current request URL and query string matches a pattern.
     *
     * @param  mixed  ...$patterns
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'fullUrlIs',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '58575b0ee61b49bbdcd6a3f08ca65bc0' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the request is the result of an AJAX call.
     *
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'ajax',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '6f223f68cb3cf576da4e16b112ed73ed' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the request is the result of an PJAX call.
     *
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'pjax',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '37dd2288543cb93e66c6e6bfcb1024b9' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the request is the result of an prefetch call.
     *
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'prefetch',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'ce8ff97b17c0a37e10606e54de2da47b' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the request is over HTTPS.
     *
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'secure',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'aec2e2f3e3cdca702e7c281dfee8b469' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the client IP address.
     *
     * @return string|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'ip',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'd513f61caf9953ea8b9f041e799403fa' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the client IP addresses.
     *
     * @return array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'ips',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'a6867e9f7d0a9a0e61f5f3f3cb957b2d' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the client user agent.
     *
     * @return string|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'userAgent',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'd4c0def66b1dbb6f4f86e9b900a77e4b' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Merge new input into the current request\'s input array.
     *
     * @param  array  $input
     * @return $this
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'merge',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '98ce0bf0d059aff7d5df2c0e37ac34cd' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Replace the input for the current request.
     *
     * @param  array  $input
     * @return $this
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'replace',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '14c45afccf3ba85d895126466a307e53' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * This method belongs to Symfony HttpFoundation and is not usually needed when using Laravel.
     *
     * Instead, you may use the "input" method.
     *
     * @param  string  $key
     * @param  mixed  $default
     * @return mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'get',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'a6ead86daa2dadb02e3de8cabe6d6408' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the JSON payload for the request.
     *
     * @param  string|null  $key
     * @param  mixed  $default
     * @return \\Symfony\\Component\\HttpFoundation\\ParameterBag|mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'json',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '74c92b3e4ef29f753ee43eb86d0159c4' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the input source for the request.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\ParameterBag
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'getInputSource',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '64cc8d0bc52e4f7ce9888cf7f1d68a2c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Create a new request instance from the given Laravel request.
     *
     * @param  \\Illuminate\\Http\\Request  $from
     * @param  \\Illuminate\\Http\\Request|null  $to
     * @return static
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'createFrom',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '3276ea9a5803c283f712c8c103d4706a' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Create an Illuminate request from a Symfony instance.
     *
     * @param  \\Symfony\\Component\\HttpFoundation\\Request  $request
     * @return static
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'createFromBase',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '1e146b1680bec9066d872c38135d05a4' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'duplicate',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '420cc8f5929e4ed1eaaf167f789a0c60' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Filter the given array of files, removing any empty values.
     *
     * @param  mixed  $files
     * @return mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'filterFiles',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '20cf99cfbdb733a0fd9fd5900be82d9f' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the session associated with the request.
     *
     * @return \\Illuminate\\Session\\Store
     *
     * @throws \\RuntimeException
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'session',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'adc31edeb7133dcc904c8795396fa8ae' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the session associated with the request.
     *
     * @return \\Illuminate\\Session\\Store|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'getSession',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'a3ebf390e8bc41400492ffa92980c3b0' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Set the session instance on the request.
     *
     * @param  \\Illuminate\\Contracts\\Session\\Session  $session
     * @return void
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'setLaravelSession',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'ad31abfd7664b1601eb1c383beab58dc' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the user making the request.
     *
     * @param  string|null  $guard
     * @return mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'user',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '6a5b17fc46ab9702468441704d3a49d0' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the route handling the request.
     *
     * @param  string|null  $param
     * @param  mixed  $default
     * @return \\Illuminate\\Routing\\Route|object|string|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'route',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e92cf4fb5ed924ddfec355e152f14b60' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get a unique fingerprint for the request / route / IP address.
     *
     * @return string
     *
     * @throws \\RuntimeException
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'fingerprint',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '3beb69d203738e9b991ad4a70a61bdee' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Set the JSON payload for the request.
     *
     * @param  \\Symfony\\Component\\HttpFoundation\\ParameterBag  $json
     * @return $this
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'setJson',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '59de309a89b244e913735f87b7a59d80' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the user resolver callback.
     *
     * @return \\Closure
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'getUserResolver',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '899e4d2bed8c6094657b2b58cca003f4' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Set the user resolver callback.
     *
     * @param  \\Closure  $callback
     * @return $this
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'setUserResolver',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'd9a0d72f451bba0ce9b86bec4370a988' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the route resolver callback.
     *
     * @return \\Closure
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'getRouteResolver',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '6c128376f0035b883b3158f65bd0828f' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Set the route resolver callback.
     *
     * @param  \\Closure  $callback
     * @return $this
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'setRouteResolver',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '5405998d84cd52ed5b30b81329496ba0' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get all of the input and files for the request.
     *
     * @return array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'toArray',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'c54bf30ffd690d897496be66422cadf6' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the given offset exists.
     *
     * @param  string  $offset
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'offsetExists',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'f6a16b2cc7382a27d317d502ad381f2b' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the value at the given offset.
     *
     * @param  string  $offset
     * @return mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'offsetGet',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '12e88e4d1475c7cc6d218cd7b0600b72' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Set the value at the given offset.
     *
     * @param  string  $offset
     * @param  mixed  $value
     * @return void
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'offsetSet',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '6650f7afbf7e45bc262b39af751ccd52' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Remove the value at the given offset.
     *
     * @param  string  $offset
     * @return void
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => 'offsetUnset',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'd8bf6dbf30340673faff069db4c44c87' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Check if an input element is set on the request.
     *
     * @param  string  $key
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => '__isset',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '1e5a03ae2e3d84e00302005d5c7b9e27' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get an input element from the request.
     *
     * @param  string  $key
     * @return mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Http',
         'uses' => [
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'macroable' => 'Illuminate\\Support\\Traits\\Macroable',
          'runtimeexception' => 'RuntimeException',
          'parameterbag' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
          'symfonyrequest' => 'Symfony\\Component\\HttpFoundation\\Request',
        ],
         'className' => 'Illuminate\\Http\\Request',
         'functionName' => '__get',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
  ],
]);
