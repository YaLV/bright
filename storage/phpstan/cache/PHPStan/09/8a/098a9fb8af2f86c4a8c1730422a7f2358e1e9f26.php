<?php

declare(strict_types=1);

return PHPStan\Cache\CacheItem::__set_state([
   'variableKey' => 'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\HasMany.stub-1610727945',
   'data' => [
    '4952aeff06158837f3b608d46dcbfd16' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
 * @template TRelatedModel of \\Illuminate\\Database\\Eloquent\\Model
 * @extends HasOneOrMany<TRelatedModel>
 */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'efaee5bc05c014478750082c44628f43' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param array<string, mixed> $attributes
     *
     * @phpstan-return TRelatedModel
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
         'functionName' => 'create',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TRelatedModel' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
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
    '674f7a8ef0b3daf3bdd934a4b176fb7e' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the results of the relationship.
     *
     * @phpstan-return \\Illuminate\\Database\\Eloquent\\Collection<TRelatedModel>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
         'functionName' => 'getResults',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TRelatedModel' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
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
