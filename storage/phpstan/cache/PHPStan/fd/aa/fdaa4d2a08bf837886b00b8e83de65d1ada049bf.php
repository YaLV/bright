<?php

declare(strict_types=1);

return PHPStan\Cache\CacheItem::__set_state([
   'variableKey' => 'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Enumerable.stub-1610727945',
   'data' => [
    '8566dccad6ce1acad34c8f1c2ec9326a' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
 * @template TKey
 * @template TValue
 *
 * @extends \\IteratorAggregate<TKey, TValue>
 */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Support',
         'uses' => [
        ],
         'className' => 'Illuminate\\Support\\Enumerable',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '4f1e187527343530414819ce2f667e4d' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param string|callable(TValue, TKey): bool $key
     * @param mixed $operator
     * @param mixed $value
     * @return static<static>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Support',
         'uses' => [
        ],
         'className' => 'Illuminate\\Support\\Enumerable',
         'functionName' => 'partition',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TKey' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TKey',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
            'TValue' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TValue',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
          ],
        ]),
      ]),
    ]),
    'f904e0df79f7cd16996979f9bd08738c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param array<mixed>|string|callable(TValue, TKey): mixed $groupBy
     * @param bool $preserveKeys
     * @return static<static<mixed>>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Support',
         'uses' => [
        ],
         'className' => 'Illuminate\\Support\\Enumerable',
         'functionName' => 'groupBy',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TKey' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TKey',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
            'TValue' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TValue',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
          ],
        ]),
      ]),
    ]),
    'fc6c2ae7f8533882871fa64a8b6d0d44' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param string|callable(TValue, TKey): mixed $keyBy
     * @return static<TValue>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Support',
         'uses' => [
        ],
         'className' => 'Illuminate\\Support\\Enumerable',
         'functionName' => 'keyBy',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TKey' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TKey',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
            'TValue' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TValue',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
          ],
        ]),
      ]),
    ]),
    '69a5c57ca7a470aca771b270dcb0bb75' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param callable(TValue, TKey): array<mixed> $callback
     * @return static<mixed>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Support',
         'uses' => [
        ],
         'className' => 'Illuminate\\Support\\Enumerable',
         'functionName' => 'mapWithKeys',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TKey' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TKey',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
            'TValue' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TValue',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
          ],
        ]),
      ]),
    ]),
    '76aceec40696a515a06b256ecb10f702' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param callable(TValue, TKey): array<mixed> $callback
     * @return static<array<mixed>>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Support',
         'uses' => [
        ],
         'className' => 'Illuminate\\Support\\Enumerable',
         'functionName' => 'mapToDictionary',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TKey' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TKey',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
            'TValue' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TValue',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
          ],
        ]),
      ]),
    ]),
    'd47c2e8a62b28cb37dd39ee92b108b3e' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param string|callable(TValue, TKey): bool $key
     * @param mixed $operator
     * @param mixed $value
     * @return bool
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Support',
         'uses' => [
        ],
         'className' => 'Illuminate\\Support\\Enumerable',
         'functionName' => 'every',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TKey' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TKey',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
            'TValue' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TValue',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
          ],
        ]),
      ]),
    ]),
    '2aec682686bed18358f360c57d1bd980' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @template TClass
     * @param class-string<TClass> $class
     * @return static<TClass>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Support',
         'uses' => [
        ],
         'className' => 'Illuminate\\Support\\Enumerable',
         'functionName' => 'mapInto',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TKey' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TKey',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
            'TValue' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TValue',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
          ],
        ]),
      ]),
    ]),
    'fac17227c492f0ac82c7608f519f4b54' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param  int  $size
     * @return static<static>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Support',
         'uses' => [
        ],
         'className' => 'Illuminate\\Support\\Enumerable',
         'functionName' => 'chunk',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TKey' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TKey',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
            'TValue' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TValue',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
          ],
        ]),
      ]),
    ]),
    'c9bb29275521002cf20b49042be397cf' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param callable(static): void $callable
     * @return static
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Support',
         'uses' => [
        ],
         'className' => 'Illuminate\\Support\\Enumerable',
         'functionName' => 'tap',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TKey' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TKey',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
            'TValue' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Support\\Enumerable',
                 'functionName' => null,
              ]),
               'name' => 'TValue',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'bound' => null,
               'isExplicitMixed' => true,
               'subtractedType' => null,
            ]),
          ],
        ]),
      ]),
    ]),
  ],
]);
