<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Hashing\\HashManager.php-1610491706',
   'data' => 
  array (
    'b293ea38477b2bc3b19b8bd4789ce6c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create an instance of the Bcrypt hash Driver.
     *
     * @return \\Illuminate\\Hashing\\BcryptHasher
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Hashing',
         'uses' => 
        array (
          'hasher' => 'Illuminate\\Contracts\\Hashing\\Hasher',
          'manager' => 'Illuminate\\Support\\Manager',
        ),
         'className' => 'Illuminate\\Hashing\\HashManager',
         'functionName' => 'createBcryptDriver',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15fdd787540d70dd817d91abdc792942' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create an instance of the Argon2i hash Driver.
     *
     * @return \\Illuminate\\Hashing\\ArgonHasher
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Hashing',
         'uses' => 
        array (
          'hasher' => 'Illuminate\\Contracts\\Hashing\\Hasher',
          'manager' => 'Illuminate\\Support\\Manager',
        ),
         'className' => 'Illuminate\\Hashing\\HashManager',
         'functionName' => 'createArgonDriver',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e01b3e8d30b81e78fc9516e607641ce4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create an instance of the Argon2id hash Driver.
     *
     * @return \\Illuminate\\Hashing\\Argon2IdHasher
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Hashing',
         'uses' => 
        array (
          'hasher' => 'Illuminate\\Contracts\\Hashing\\Hasher',
          'manager' => 'Illuminate\\Support\\Manager',
        ),
         'className' => 'Illuminate\\Hashing\\HashManager',
         'functionName' => 'createArgon2idDriver',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f47b40bf519f62231743f4466638b0f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get information about the given hashed value.
     *
     * @param  string  $hashedValue
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Hashing',
         'uses' => 
        array (
          'hasher' => 'Illuminate\\Contracts\\Hashing\\Hasher',
          'manager' => 'Illuminate\\Support\\Manager',
        ),
         'className' => 'Illuminate\\Hashing\\HashManager',
         'functionName' => 'info',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '85a97b31080b294995bada3ae084bd5e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Hash the given value.
     *
     * @param  string  $value
     * @param  array  $options
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Hashing',
         'uses' => 
        array (
          'hasher' => 'Illuminate\\Contracts\\Hashing\\Hasher',
          'manager' => 'Illuminate\\Support\\Manager',
        ),
         'className' => 'Illuminate\\Hashing\\HashManager',
         'functionName' => 'make',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eed32e477a2c03f784e3a41414c58b5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Check the given plain value against a hash.
     *
     * @param  string  $value
     * @param  string  $hashedValue
     * @param  array  $options
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Hashing',
         'uses' => 
        array (
          'hasher' => 'Illuminate\\Contracts\\Hashing\\Hasher',
          'manager' => 'Illuminate\\Support\\Manager',
        ),
         'className' => 'Illuminate\\Hashing\\HashManager',
         'functionName' => 'check',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3fefa7455ba428fce1d3b828fe8f290f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Check if the given hash has been hashed using the given options.
     *
     * @param  string  $hashedValue
     * @param  array  $options
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Hashing',
         'uses' => 
        array (
          'hasher' => 'Illuminate\\Contracts\\Hashing\\Hasher',
          'manager' => 'Illuminate\\Support\\Manager',
        ),
         'className' => 'Illuminate\\Hashing\\HashManager',
         'functionName' => 'needsRehash',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b4c59003f2ef716f79ba9fce3f04aeee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the default driver name.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Hashing',
         'uses' => 
        array (
          'hasher' => 'Illuminate\\Contracts\\Hashing\\Hasher',
          'manager' => 'Illuminate\\Support\\Manager',
        ),
         'className' => 'Illuminate\\Hashing\\HashManager',
         'functionName' => 'getDefaultDriver',
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