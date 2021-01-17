<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\nesbot\\carbon\\src\\Carbon\\Traits\\Mixin.php-1610491694',
   'data' => 
  array (
    'b0b4344081533efd03d83da1f4dcfb65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '43baf45fc773d64169034243d4c4a176' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait Mixin.
 *
 * Allows mixing in entire classes with multiple macros.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'closure' => 'Closure',
          'generator' => 'Generator',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionmethod' => 'ReflectionMethod',
          'throwable' => 'Throwable',
        ),
         'className' => 'Carbon\\Traits\\Mixin',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b1ffb05ec9dc5b904ff3ed2a6721c0bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Stack of macro instance contexts.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'closure' => 'Closure',
          'generator' => 'Generator',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionmethod' => 'ReflectionMethod',
          'throwable' => 'Throwable',
        ),
         'className' => 'Carbon\\Traits\\Mixin',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee1db3f06a81ce87a2b31132ca85f1f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Mix another object into the class.
     *
     * @example
     * ```
     * Carbon::mixin(new class {
     *   public function addMoon() {
     *     return function () {
     *       return $this->addDays(30);
     *     };
     *   }
     *   public function subMoon() {
     *     return function () {
     *       return $this->subDays(30);
     *     };
     *   }
     * });
     * $fullMoon = Carbon::create(\'2018-12-22\');
     * $nextFullMoon = $fullMoon->addMoon();
     * $blackMoon = Carbon::create(\'2019-01-06\');
     * $previousBlackMoon = $blackMoon->subMoon();
     * echo "$nextFullMoon\\n";
     * echo "$previousBlackMoon\\n";
     * ```
     *
     * @param object|string $mixin
     *
     * @throws ReflectionException
     *
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'closure' => 'Closure',
          'generator' => 'Generator',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionmethod' => 'ReflectionMethod',
          'throwable' => 'Throwable',
        ),
         'className' => 'Carbon\\Traits\\Mixin',
         'functionName' => 'mixin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b74f2bcb9d693da582292f9872d4ce6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param object|string $mixin
     *
     * @throws ReflectionException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'closure' => 'Closure',
          'generator' => 'Generator',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionmethod' => 'ReflectionMethod',
          'throwable' => 'Throwable',
        ),
         'className' => 'Carbon\\Traits\\Mixin',
         'functionName' => 'loadMixinClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '462f263d886d5ed3d6a1020cb7666552' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param string $trait
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'closure' => 'Closure',
          'generator' => 'Generator',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionmethod' => 'ReflectionMethod',
          'throwable' => 'Throwable',
        ),
         'className' => 'Carbon\\Traits\\Mixin',
         'functionName' => 'loadMixinTrait',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd27172fc605f6d7b77d3780b05be1c2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @phpstan-ignore-next-line */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'closure' => 'Closure',
          'generator' => 'Generator',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionmethod' => 'ReflectionMethod',
          'throwable' => 'Throwable',
        ),
         'className' => 'Carbon\\Traits\\Mixin',
         'functionName' => 'loadMixinTrait',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bf34d7a3500b8c92706567c37ca9493e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Stack a Carbon context from inside calls of self::this() and execute a given action.
     *
     * @param static|null $context
     * @param callable    $callable
     *
     * @throws Throwable
     *
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'closure' => 'Closure',
          'generator' => 'Generator',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionmethod' => 'ReflectionMethod',
          'throwable' => 'Throwable',
        ),
         'className' => 'Carbon\\Traits\\Mixin',
         'functionName' => 'bindMacroContext',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2bc48ba1acd26acee5d174e701a05331' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the current context from inside a macro callee or a null if static.
     *
     * @return static|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'closure' => 'Closure',
          'generator' => 'Generator',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionmethod' => 'ReflectionMethod',
          'throwable' => 'Throwable',
        ),
         'className' => 'Carbon\\Traits\\Mixin',
         'functionName' => 'context',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6ee2aa0c868e0d39124c991486afad93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the current context from inside a macro callee or a new one if static.
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'closure' => 'Closure',
          'generator' => 'Generator',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionmethod' => 'ReflectionMethod',
          'throwable' => 'Throwable',
        ),
         'className' => 'Carbon\\Traits\\Mixin',
         'functionName' => 'this',
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