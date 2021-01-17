<?php

declare(strict_types=1);

return PHPStan\Cache\CacheItem::__set_state([
   'variableKey' => 'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\MorphOneOrMany.stub-1610727945',
   'data' => [
    '565cfe4b3f244f28a0b546b428a853d5' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
 * @template TRelatedModel of \\Illuminate\\Database\\Eloquent\\Model
 * @extends HasOneOrMany<TRelatedModel>
 */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    '02b986789a7ec4c76d5f1b26ed591b73' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * @param array<string, mixed> $attributes
     *
     * @phpstan-return TRelatedModel
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
         'functionName' => 'create',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TRelatedModel' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOneOrMany',
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
