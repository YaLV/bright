<?php

declare(strict_types=1);

return PHPStan\Cache\CacheItem::__set_state([
   'variableKey' => 'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\EloquentBuilder.stub-1610727945',
   'data' => [
    '0818c6ecb73d71f49414aac7f61e2db2' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
 * @template TModelClass of Model
 */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '0c101bce646b384b7c34a5d4f506b6ae' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/** @phpstan-return TModelClass */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getModel',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    'b4e8867345602cff13c24ac3de8f4065' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @phpstan-param array<model-property<TModelClass>, mixed> $attributes
     * @phpstan-return TModelClass
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'create',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    'a9ea1d895f22398afd7d2219c0cc4cdc' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Create a collection of models from plain arrays.
     *
     * @param  array<mixed>  $items
     * @phpstan-return \\Illuminate\\Database\\Eloquent\\Collection<TModelClass>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'hydrate',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    'e91bba38a150228b31a9d4f533e8fdc7' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Create a collection of models from a raw query.
     *
     * @param  string  $query
     * @param  array<mixed>  $bindings
     * @phpstan-return \\Illuminate\\Database\\Eloquent\\Collection<TModelClass>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'fromQuery',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    '9866c622bd7054b3c7191f5f03186b0f' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Find a model by its primary key.
     *
     * @param  mixed  $id
     * @param  array<int, (model-property<TModelClass>|\'*\')>|model-property<TModelClass>|\'*\'  $columns
     * @phpstan-return TModelClass|\\Illuminate\\Database\\Eloquent\\Collection<TModelClass>|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'find',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    '3f78411740e9da0ae4f3adf82a0a2968' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Find multiple models by their primary keys.
     *
     * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array<mixed>  $ids
     * @param  array<int, (model-property<TModelClass>|\'*\')>|model-property<TModelClass>|\'*\'  $columns
     * @phpstan-return \\Illuminate\\Database\\Eloquent\\Collection<TModelClass>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'findMany',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    '00c43647f02c7bae6ed8b2820bc58ac3' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Find a model by its primary key or throw an exception.
     *
     * @param  mixed  $id
     * @param  array<int, (model-property<TModelClass>|\'*\')>|model-property<TModelClass>|\'*\'  $columns
     * @phpstan-return TModelClass|\\Illuminate\\Database\\Eloquent\\Collection<TModelClass>
     *
     * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'findOrFail',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    '270624662d5cd95898a12f69c85500e3' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Find a model by its primary key or return fresh model instance.
     *
     * @param  mixed  $id
     * @param  array<int, (model-property<TModelClass>|\'*\')>|model-property<TModelClass>|\'*\'  $columns
     * @phpstan-return TModelClass
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'findOrNew',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    'd0b7e595cab662a074dcea7932092a64' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the first record matching the attributes or instantiate it.
     *
     * @param  array<model-property<TModelClass>, mixed>  $attributes
     * @param  array<model-property<TModelClass>, mixed>  $values
     * @phpstan-return TModelClass
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'firstOrNew',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    '5055a30382afc55fa4f208940c665384' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the first record matching the attributes or create it.
     *
     * @param  array<model-property<TModelClass>, mixed>  $attributes
     * @param  array<model-property<TModelClass>, mixed>  $values
     * @phpstan-return TModelClass
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'firstOrCreate',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    '875e23f69ea12a9223e3fc00ed634a17' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Create or update a record matching the attributes, and fill it with values.
     *
     * @param  array<model-property<TModelClass>, mixed>  $attributes
     * @param  array<model-property<TModelClass>, mixed>  $values
     * @phpstan-return TModelClass
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'updateOrCreate',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    '6e9cac5ccd17b426ee72d941d919818c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param  array<model-property<TModelClass>, mixed>  $attributes
     * @return \\Illuminate\\Database\\Eloquent\\Model|$this
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'forceCreate',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    '0fd4a383f80c7b0ac91393d1b492117c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param  array<model-property<TModelClass>, mixed>  $values
     * @return int
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'update',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    'a57f3f16fa80077dd5dc916139da1199' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Execute the query and get the first result or throw an exception.
     *
     * @param  array<int, (model-property<TModelClass>|\'*\')>|model-property<TModelClass>|\'*\'  $columns
     * @phpstan-return TModelClass
     *
     * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'firstOrFail',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    '33049d0252729492b858f18266058cb1' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Execute the query and get the first result or call a callback.
     *
     * @param  \\Closure|array<int, (model-property<TModelClass>|\'*\')>  $columns
     * @param  \\Closure|null  $callback
     * @phpstan-return TModelClass|mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'firstOr',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    'd5d3c574b44a744a5d7003fcea072a23' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Add a basic where clause to the query.
     *
     * @param  \\Closure|model-property<TModelClass>|array<model-property<TModelClass>|int, mixed>  $column
     * @param  mixed  $operator
     * @param  mixed  $value
     * @param  string  $boolean
     * @return $this
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'where',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    '054769aa6373983958116baaf1e18945' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Add an "or where" clause to the query.
     *
     * @param  \\Closure|model-property<TModelClass>|array<model-property<TModelClass>|int, mixed>  $column
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return $this
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhere',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    '79737baa7e9b375315601b56387c8657' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Add a basic where clause to the query, and return the first result.
     *
     * @param  \\Closure|model-property<TModelClass>|array<model-property<TModelClass>|int, mixed>  $column
     * @param  mixed  $operator
     * @param  mixed  $value
     * @param  string  $boolean
     * @phpstan-return TModelClass|null
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'firstWhere',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    '47dc08e3a784f6f59767d4911f6947e2' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Execute the query as a "select" statement.
     *
     * @param  array<int, (model-property<TModelClass>|\'*\')>|model-property<TModelClass>|\'*\'  $columns
     * @phpstan-return \\Illuminate\\Database\\Eloquent\\Collection<TModelClass>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'get',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    'f3aae3e1280e5fff578578d69a45b88e' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the hydrated models without eager loading.
     *
     * @param  array<int, (model-property<TModelClass>|\'*\')>|model-property<TModelClass>|\'*\'  $columns
     * @phpstan-return TModelClass[]
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getModels',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
    '58519ffbf8366b1154bb234558e8b055' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get a single column\'s value from the first result of a query.
     *
     * @param  model-property<TModelClass>  $column
     * @return mixed
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'value',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TModelClass' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Builder',
                 'functionName' => null,
              ]),
               'name' => 'TModelClass',
               'strategy' => PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state([
              ]),
               'bound' => PHPStan\Type\ObjectType::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Model',
                 'subtractedType' => null,
                 'classReflection' => null,
                 'genericObjectType' => null,
                 'superTypes' => [
                ],
              ]),
               'variance' => PHPStan\Type\Generic\TemplateTypeVariance::__set_state([
                 'value' => 1,
              ]),
               'className' => 'Illuminate\\Database\\Eloquent\\Model',
               'subtractedType' => null,
               'classReflection' => null,
               'genericObjectType' => null,
               'superTypes' => [
              ],
            ]),
          ],
        ]),
      ]),
    ]),
  ],
]);
