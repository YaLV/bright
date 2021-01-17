<?php

declare(strict_types=1);

return PHPStan\Cache\CacheItem::__set_state([
   'variableKey' => 'C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\FormRequest.php-1610491705,C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\ValidatesWhenResolvedTrait.php-1610491710',
   'data' => [
    'ecbfb857e6996d0ea6a80a058087c57e' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
 * Provides default implementation of ValidatesWhenResolved contract.
 */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Validation',
         'uses' => [
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '2fb3ca2030a09dd1faf70d1486ddec11' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Validate the class instance.
     *
     * @return void
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Validation',
         'uses' => [
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'validateResolved',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e9d4e715fcb4ad9ea5eeee5c05e7d4bb' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Prepare the data for validation.
     *
     * @return void
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Validation',
         'uses' => [
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'prepareForValidation',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '3cc15d95a9852a35bdfe6e6fa0fdb920' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the validator instance for the request.
     *
     * @return \\Illuminate\\Validation\\Validator
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Validation',
         'uses' => [
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'getValidatorInstance',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '1e6d1a069c09d8e4c0c7bd7a219deabc' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Handle a passed validation attempt.
     *
     * @return void
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Validation',
         'uses' => [
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'passedValidation',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'f3aff47eabdfda4e8676855d63fd7127' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Handle a failed validation attempt.
     *
     * @param  \\Illuminate\\Validation\\Validator  $validator
     * @return void
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Validation',
         'uses' => [
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'failedValidation',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'c29b1756558517fb09e4e656dc49bc74' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the request passes the authorization check.
     *
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Validation',
         'uses' => [
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'passesAuthorization',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '459a80d53dc5f3addac463c6c4ff42f6' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Handle a failed authorization attempt.
     *
     * @return void
     *
     * @throws \\Illuminate\\Validation\\UnauthorizedException
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Validation',
         'uses' => [
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'failedAuthorization',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '0472f296790c9ef0f314ea551890ebf4' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * The container instance.
     *
     * @var \\Illuminate\\Contracts\\Container\\Container
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'b74882d562df3531768b5663ec9c5f68' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * The redirector instance.
     *
     * @var \\Illuminate\\Routing\\Redirector
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '1ae62aeeb5c4138c1161ded9ea667d8e' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * The URI to redirect to if validation fails.
     *
     * @var string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'aa6dfcefed6f4873ee0d6360076d2651' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * The route to redirect to if validation fails.
     *
     * @var string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '710ee3f273419634564cc5150e4d4387' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * The controller action to redirect to if validation fails.
     *
     * @var string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '89a1b53f5519bec6b567bd0867730a67' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * The key to be used for the view error bag.
     *
     * @var string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '7a1b1b38b9acbb878a0a13a1f87ea5f3' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * The validator instance.
     *
     * @var \\Illuminate\\Contracts\\Validation\\Validator
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '0f3b93d0047cbb570e30dca68232b586' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the validator instance for the request.
     *
     * @return \\Illuminate\\Contracts\\Validation\\Validator
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'getValidatorInstance',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'af34441908a8d5133c666a8270889224' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Create the default validator instance.
     *
     * @param  \\Illuminate\\Contracts\\Validation\\Factory  $factory
     * @return \\Illuminate\\Contracts\\Validation\\Validator
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'createDefaultValidator',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'e35112b0d6aa11febd892119091106df' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get data to be validated from the request.
     *
     * @return array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'validationData',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '0c91a1299bd0d4a4f896e7ba6f2817bf' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Handle a failed validation attempt.
     *
     * @param  \\Illuminate\\Contracts\\Validation\\Validator  $validator
     * @return void
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'failedValidation',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'aa1beaaf3bb3eb40c44e33aba5cc1fdf' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the URL to redirect to on a validation error.
     *
     * @return string
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'getRedirectUrl',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '0b82c47b8e57cbfb28125c27e188be9a' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Determine if the request passes the authorization check.
     *
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'passesAuthorization',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '3495165639af9b43ab8f0bd2c5fcdcac' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Handle a failed authorization attempt.
     *
     * @return void
     *
     * @throws \\Illuminate\\Auth\\Access\\AuthorizationException
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'failedAuthorization',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'bfcd18256b8b13336d5d0c8ea6efc31e' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the validated data from the request.
     *
     * @return array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'validated',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '12c61bc51b1eafd9517e420a987de978' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get custom messages for validator errors.
     *
     * @return array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'messages',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'a2e7c5bbc44b4c444f1512d9302e5290' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get custom attributes for validator errors.
     *
     * @return array
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'attributes',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '40cc45415e90f2bcf896781105db0b83' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Set the Validator instance.
     *
     * @param  \\Illuminate\\Contracts\\Validation\\Validator  $validator
     * @return $this
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'setValidator',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '2ca0ca72d22dd6f51b3df623e302d902' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Set the Redirector instance.
     *
     * @param  \\Illuminate\\Routing\\Redirector  $redirector
     * @return $this
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'setRedirector',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'd365b68c4b25ab3004d79ba394efa3ba' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Set the container implementation.
     *
     * @param  \\Illuminate\\Contracts\\Container\\Container  $container
     * @return $this
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Foundation\\Http',
         'uses' => [
          'authorizationexception' => 'Illuminate\\Auth\\Access\\AuthorizationException',
          'container' => 'Illuminate\\Contracts\\Container\\Container',
          'validationfactory' => 'Illuminate\\Contracts\\Validation\\Factory',
          'validateswhenresolved' => 'Illuminate\\Contracts\\Validation\\ValidatesWhenResolved',
          'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
          'request' => 'Illuminate\\Http\\Request',
          'redirector' => 'Illuminate\\Routing\\Redirector',
          'validateswhenresolvedtrait' => 'Illuminate\\Validation\\ValidatesWhenResolvedTrait',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
        ],
         'className' => 'Illuminate\\Foundation\\Http\\FormRequest',
         'functionName' => 'setContainer',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
  ],
]);
