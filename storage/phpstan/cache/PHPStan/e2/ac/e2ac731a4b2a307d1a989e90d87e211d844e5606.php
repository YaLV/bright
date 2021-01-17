<?php

declare(strict_types=1);

return PHPStan\Cache\CacheItem::__set_state([
   'variableKey' => 'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\HasOneOrMany.stub-1610727945',
   'data' => [
    '01c62769a4f89a2ddc48c71de4ff92f3' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
 * @template TRelatedModel of \\Illuminate\\Database\\Eloquent\\Model
 * @extends Relation<TRelatedModel>
 */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '0679a6264cd28b6742a0032f498e7393' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param array<model-property<TRelatedModel>, mixed> $attributes
     * @phpstan-return TRelatedModel
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
         'functionName' => 'make',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TRelatedModel' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                 'functionName' => null,
              ]),
               'name' => 'TRelatedModel',
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
    '750cf761953c1b4b32817d46f20af723' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Find a model by its primary key or return new instance of the related model.
     *
     * @param  mixed  $id
     * @param  array<int, mixed>  $columns
     * @return \\Illuminate\\Support\\Collection<int, TRelatedModel>|TRelatedModel
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
         'functionName' => 'findOrNew',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TRelatedModel' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                 'functionName' => null,
              ]),
               'name' => 'TRelatedModel',
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
    'a77fe636f3ab31b49cc3ee0d6744d5c9' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the first related model record matching the attributes or instantiate it.
     *
     * @param  array<model-property<TRelatedModel>, mixed>  $attributes
     * @param  array<mixed, mixed>  $values
     * @return TRelatedModel
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
         'functionName' => 'firstOrNew',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TRelatedModel' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                 'functionName' => null,
              ]),
               'name' => 'TRelatedModel',
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
    '79f249859d8d066178f8c3f361521804' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the first related record matching the attributes or create it.
     *
     * @param  array<model-property<TRelatedModel>, mixed>  $attributes
     * @param  array<mixed, mixed>  $values
     * @return TRelatedModel
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
         'functionName' => 'firstOrCreate',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TRelatedModel' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                 'functionName' => null,
              ]),
               'name' => 'TRelatedModel',
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
    'd2c0861cef70635e71b6e4526537fe73' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Create or update a related record matching the attributes, and fill it with values.
     *
     * @param  array<model-property<TRelatedModel>, mixed>  $attributes
     * @param  array<mixed, mixed>  $values
     * @return TRelatedModel
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
         'functionName' => 'updateOrCreate',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TRelatedModel' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                 'functionName' => null,
              ]),
               'name' => 'TRelatedModel',
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
    '65f3ae63e476817581d3587ffc26373b' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Attach a model instance to the parent model.
     *
     * @param  \\Illuminate\\Database\\Eloquent\\Model  $model
     * @return TRelatedModel|false
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
         'functionName' => 'save',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TRelatedModel' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                 'functionName' => null,
              ]),
               'name' => 'TRelatedModel',
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
    '5ecd29e352b0091ec17e370cc29db96e' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param array<model-property<TRelatedModel>, mixed> $attributes
     *
     * @phpstan-return TRelatedModel
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
         'functionName' => 'create',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TRelatedModel' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                 'functionName' => null,
              ]),
               'name' => 'TRelatedModel',
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
    '2c39fce519f2814ec6b65526583fa624' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Create a Collection of new instances of the related model.
     *
     * @param  iterable<mixed>  $records
     * @return \\Illuminate\\Database\\Eloquent\\Collection<TRelatedModel>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
         'functionName' => 'createMany',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TRelatedModel' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOneOrMany',
                 'functionName' => null,
              ]),
               'name' => 'TRelatedModel',
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
