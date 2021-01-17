<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\nesbot\\carbon\\src\\Carbon\\Traits\\Macro.php-1610491694,C:\\wamp64\\www\\vendor\\nesbot\\carbon\\src\\Carbon\\Traits\\Mixin.php-1610491694',
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
    '06bf2d4f944926c39e290dcb47706fc8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait Macros.
 *
 * Allows users to register macros within the Carbon class.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4afedbbe4c97a411d6046e458cbf817a' => 
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
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c520d24e50fb3d25d20172b297ae1f5' => 
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
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'cc4b3503e728d45c89c5ed88649813dd' => 
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
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e1abbe07cb92735fe4178cb72b4d6e0d' => 
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
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => 'mixin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c485abeca5b379cff5bee6dd30e90903' => 
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
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => 'loadMixinClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75b8f54ad6293f5c5eab551b9369733a' => 
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
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => 'loadMixinTrait',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3d7826e8adda2303ac6b95f3e857ffca' => 
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
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => 'loadMixinTrait',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c115d8c1ca8883c5dd584f71cfadb242' => 
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
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => 'bindMacroContext',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '99efc20b202690d677699e1b11307372' => 
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
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => 'context',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ee1769ed03cb7fb5e8a7d0814e49ed93' => 
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
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => 'this',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3cd378e00ff38de573b0f612015bf5a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The registered macros.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffa1198ebae6ada95d8320801b429d5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The registered generic macros.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '42023f0ab42a05c003299e19861883ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Register a custom macro.
     *
     * @example
     * ```
     * $userSettings = [
     *   \'locale\' => \'pt\',
     *   \'timezone\' => \'America/Sao_Paulo\',
     * ];
     * Carbon::macro(\'userFormat\', function () use ($userSettings) {
     *   return $this->copy()->locale($userSettings[\'locale\'])->tz($userSettings[\'timezone\'])->calendar();
     * });
     * echo Carbon::yesterday()->hours(11)->userFormat();
     * ```
     *
     * @param string          $name
     * @param object|callable $macro
     *
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => 'macro',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1f11516ca3794aeb8c386ea448525bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Remove all macros and generic macros.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => 'resetMacros',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '512dddcfbc7ac1ecc22c60bda23bced6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Register a custom macro.
     *
     * @param object|callable $macro
     * @param int             $priority marco with higher priority is tried first
     *
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => 'genericMacro',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd3dc8a1b429eddd8913d84c1dae40871' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if macro is registered globally.
     *
     * @param string $name
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => 'hasMacro',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '03ee0b7cee6a4299defd67916b68319e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the raw callable macro registered globally for a given name.
     *
     * @param string $name
     *
     * @return callable|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => 'getMacro',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '49f677e108ec38de4a61940cc6a0095c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if macro is registered globally or locally.
     *
     * @param string $name
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => 'hasLocalMacro',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '378eab122c23041c7e52431368d71f30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the raw callable macro registered globally or locally for a given name.
     *
     * @param string $name
     *
     * @return callable|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Carbon\\Traits\\Macro',
         'functionName' => 'getLocalMacro',
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