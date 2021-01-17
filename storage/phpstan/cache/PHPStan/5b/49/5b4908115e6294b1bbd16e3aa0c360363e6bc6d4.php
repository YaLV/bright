<?php

declare(strict_types=1);

return PHPStan\Cache\CacheItem::__set_state([
   'variableKey' => 'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\HasManyThrough.stub-1610727945',
   'data' => [
    '4405691c959dc4df1d204ab689c4c923' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
 * @template TRelatedModel of \\Illuminate\\Database\\Eloquent\\Model
 * @extends Relation<TRelatedModel>
 */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasManyThrough',
         'functionName' => null,
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
          ],
        ]),
      ]),
    ]),
    'b41b847f49d0777577de371d8455f34c' => PHPStan\PhpDoc\NameScopedPhpDocString::__set_state([
       'phpDocString' => '/**
     * Get the results of the relationship.
     *
     * @phpstan-return \\Illuminate\\Database\\Eloquent\\Collection<TRelatedModel>
     */',
       'nameScope' => PHPStan\Analyser\NameScope::__set_state([
         'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
         'uses' => [
        ],
         'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasManyThrough',
         'functionName' => 'getResults',
         'templateTypeMap' => PHPStan\Type\Generic\TemplateTypeMap::__set_state([
           'types' => [
            'TRelatedModel' => PHPStan\Type\Generic\TemplateObjectType::__set_state([
               'scope' => PHPStan\Type\Generic\TemplateTypeScope::__set_state([
                 'className' => 'Illuminate\\Database\\Eloquent\\Relations\\HasManyThrough',
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
