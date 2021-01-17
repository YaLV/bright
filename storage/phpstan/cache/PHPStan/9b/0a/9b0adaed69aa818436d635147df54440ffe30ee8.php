<?php

declare(strict_types=1);

return PHPStan\Cache\CacheItem::__set_state([
   'variableKey' => 'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\EloquentCollection.stub-1610727945',
   'data' => [
    'b08260918fd195f3d9035bc1e3fbb039' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
 * @template TModel
 * @extends \\Illuminate\\Support\\Collection<int, TModel>
 */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Collection',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '312d5ef8495a68efd7f3e248fbbc268b' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param  mixed  $key
     * @param  mixed  $default
     * @phpstan-return TModel|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Collection',
         'functionName' => 'find',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModel' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Collection',
                 'functionName' => null,
              ]),
               'name' => 'TModel',
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
    'dc21f6d4bf8d87692eef1e87cff66805' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @template TReturn
     * @param callable(TModel, int): TReturn $callable
     * @return static<TReturn>|\\Illuminate\\Support\\Collection<int, TReturn>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Collection',
         'functionName' => 'map',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModel' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Collection',
                 'functionName' => null,
              ]),
               'name' => 'TModel',
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
    '1f1380e0bba900f133355d87695d9b41' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param callable(TModel, int): array<mixed> $callback
     * @return \\Illuminate\\Support\\Collection<mixed, static<mixed>>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Collection',
         'functionName' => 'mapToGroups',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModel' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Collection',
                 'functionName' => null,
              ]),
               'name' => 'TModel',
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
    '1b93a702066b0df1f81f4340d6f682f2' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param callable(TModel, int): mixed $callback
     * @return \\Illuminate\\Support\\Collection<mixed, mixed>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Collection',
         'functionName' => 'flatMap',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModel' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Collection',
                 'functionName' => null,
              ]),
               'name' => 'TModel',
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
    '218c4b2559a7ec87e93e3e5456f75b5c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param callable $callback
     * @return static<mixed>|\\Illuminate\\Support\\Collection<int, mixed>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Collection',
         'functionName' => 'mapSpread',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModel' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Collection',
                 'functionName' => null,
              ]),
               'name' => 'TModel',
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
    'd4942085993dbe5b7afba4674e7baf57' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param int $number
     * @param null|callable(int, int): mixed $callback
     * @return mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Collection',
         'functionName' => 'times',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModel' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Collection',
                 'functionName' => null,
              ]),
               'name' => 'TModel',
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
    '3f58644647d67dfe42a9f755e274fc3e' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param string|array<mixed> $value
     * @param string|null $key
     * @return \\Illuminate\\Support\\Collection<int, mixed>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Collection',
         'functionName' => 'pluck',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModel' => PHPStan\Type\Generic\TemplateMixedType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Collection',
                 'functionName' => null,
              ]),
               'name' => 'TModel',
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
