<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1610733610,
	'meta' => array (
  'cacheVersion' => 'v5-exportedNodes',
  'phpstanVersion' => '0.12.67',
  'phpVersion' => 70409,
  'projectConfig' => '{parameters: {stubFiles: [C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Enumerable.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\EloquentBuilder.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Collection.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\EloquentCollection.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Model.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\JsonResource.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Gate.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Relation.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\BelongsTo.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\BelongstoMany.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\HasOneOrMany.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\HasMany.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\HasOne.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\HasOneThrough.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\HasManyThrough.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Mailable.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\MorphOne.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\MorphOneOrMany.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\MorphTo.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\MorphToMany.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\MorphMany.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Helpers.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\HigherOrderTapProxy.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\QueryBuilder.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Facades.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Pagination.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Contracts\\Pagination.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Contracts\\Support.stub, C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Redis\\Connection.stub], scopeClass: NunoMaduro\\Larastan\\Analyser\\Scope, universalObjectCratesClasses: [Illuminate\\Http\\Request], earlyTerminatingFunctionCalls: [abort, dd], excludes_analyse: [*.blade.php, C:\\wamp64\\www\\app\\Providers, C:\\wamp64\\www\\app\\Http\\Middleware], mixinExcludeClasses: [Eloquent], bootstrapFiles: [C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\bootstrap.php], checkGenericClassInNonGenericObjectType: false, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], databaseMigrationsPath: null, checkModelProperties: false, polluteScopeWithLoopInitialAssignments: false, polluteScopeWithAlwaysIterableForeach: false, checkAlwaysTrueCheckTypeFunctionCall: true, checkAlwaysTrueInstanceof: true, checkAlwaysTrueStrictComparison: true, checkExplicitMixedMissingReturn: true, checkFunctionNameCase: true, checkMissingClosureNativeReturnTypehintRule: true, reportMaybesInMethodSignatures: true, reportStaticMethodSignatures: true, level: max, paths: [C:\\wamp64\\www\\app], tmpDir: %currentWorkingDirectory%/storage/phpstan, checkMissingIterableValueType: false}, conditionalTags: {NunoMaduro\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule: {phpstan.rules.rule: %checkModelProperties%}, NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule: {phpstan.rules.rule: %checkModelProperties%}, PHPStan\\Rules\\ForLoop\\OverwriteVariablesWithForLoopInitRule: {phpstan.rules.rule: %featureToggles.bleedingEdge%}}, services: [{class: NunoMaduro\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Properties\\Extension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\Types\\RelationDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\ModelRelationsDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RequestExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RelationFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\CookieExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\RequestExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\RedirectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\UrlExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ViewExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\TransExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: NunoMaduro\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: NunoMaduro\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyRule, tags: [phpstan.rules.rule]}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertyStaticCallRule, tags: [phpstan.rules.rule]}, {class: NunoMaduro\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: NunoMaduro\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: NunoMaduro\\Larastan\\Types\\RelationParserHelper}, {class: NunoMaduro\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, currentWorkingDirectory: %currentWorkingDirectory%}}, {class: NunoMaduro\\Larastan\\Rules\\ModelProperties\\ModelPropertiesRuleHelper}, {class: NunoMaduro\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanAndRule, arguments: {checkLogicalAndConstantCondition: %featureToggles.checkLogicalAndConstantCondition%}, tags: [phpstan.rules.rule]}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanOrRule, arguments: {checkLogicalOrConstantCondition: %featureToggles.checkLogicalOrConstantCondition%}, tags: [phpstan.rules.rule]}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanRuleHelper}, {class: PHPStan\\Rules\\Cast\\UselessCastRule, arguments: {treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%}, tags: [phpstan.rules.rule]}, {class: PHPStan\\Rules\\Operators\\OperatorRuleHelper}, {class: PHPStan\\Rules\\VariableVariables\\VariablePropertyFetchRule, arguments: {universalObjectCratesClasses: %universalObjectCratesClasses%}, tags: [phpstan.rules.rule]}, {class: PHPStan\\Rules\\ForLoop\\OverwriteVariablesWithForLoopInitRule}], rules: [PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanNotRule, PHPStan\\Rules\\BooleansInConditions\\BooleanInElseIfConditionRule, PHPStan\\Rules\\BooleansInConditions\\BooleanInIfConditionRule, PHPStan\\Rules\\BooleansInConditions\\BooleanInTernaryOperatorRule, PHPStan\\Rules\\Classes\\RequireParentConstructCallRule, PHPStan\\Rules\\DisallowedConstructs\\DisallowedEmptyRule, PHPStan\\Rules\\DisallowedConstructs\\DisallowedImplicitArrayCreationRule, PHPStan\\Rules\\DisallowedConstructs\\DisallowedShortTernaryRule, PHPStan\\Rules\\ForeachLoop\\OverwriteVariablesWithForeachRule, PHPStan\\Rules\\Methods\\WrongCaseOfInheritedMethodRule, PHPStan\\Rules\\Operators\\OperandInArithmeticPostDecrementRule, PHPStan\\Rules\\Operators\\OperandInArithmeticPostIncrementRule, PHPStan\\Rules\\Operators\\OperandInArithmeticPreDecrementRule, PHPStan\\Rules\\Operators\\OperandInArithmeticPreIncrementRule, PHPStan\\Rules\\Operators\\OperandsInArithmeticAdditionRule, PHPStan\\Rules\\Operators\\OperandsInArithmeticDivisionRule, PHPStan\\Rules\\Operators\\OperandsInArithmeticExponentiationRule, PHPStan\\Rules\\Operators\\OperandsInArithmeticModuloRule, PHPStan\\Rules\\Operators\\OperandsInArithmeticMultiplicationRule, PHPStan\\Rules\\Operators\\OperandsInArithmeticSubtractionRule, PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsRule, PHPStan\\Rules\\StrictCalls\\StrictFunctionCallsRule, PHPStan\\Rules\\SwitchConditions\\MatchingTypeInSwitchCaseConditionRule, PHPStan\\Rules\\VariableVariables\\VariableMethodCallRule, PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallRule, PHPStan\\Rules\\VariableVariables\\VariableStaticPropertyFetchRule, PHPStan\\Rules\\VariableVariables\\VariableVariablesRule]}',
  'analysedPaths' => 
  array (
    0 => 'C:\\wamp64\\www\\app',
  ),
  'composerLocks' => 
  array (
    'C:\\wamp64\\www/composer.lock' => 'dd23866a039c9e933c101461b4cd21ab93986fbd',
  ),
  'cliAutoloadFile' => NULL,
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'bcmath',
    7 => 'bz2',
    8 => 'calendar',
    9 => 'ctype',
    10 => 'curl',
    11 => 'date',
    12 => 'dom',
    13 => 'exif',
    14 => 'fileinfo',
    15 => 'filter',
    16 => 'gd',
    17 => 'gettext',
    18 => 'gmp',
    19 => 'hash',
    20 => 'iconv',
    21 => 'imap',
    22 => 'intl',
    23 => 'json',
    24 => 'ldap',
    25 => 'libxml',
    26 => 'mbstring',
    27 => 'mysqli',
    28 => 'mysqlnd',
    29 => 'openssl',
    30 => 'pcre',
    31 => 'pdo_mysql',
    32 => 'pdo_sqlite',
    33 => 'readline',
    34 => 'session',
    35 => 'soap',
    36 => 'sockets',
    37 => 'standard',
    38 => 'tokenizer',
    39 => 'xml',
    40 => 'xmlreader',
    41 => 'xmlrpc',
    42 => 'xmlwriter',
    43 => 'xsl',
    44 => 'zip',
    45 => 'zlib',
  ),
  'stubFiles' => 
  array (
    'phar://C:\\wamp64\\www\\vendor\\phpstan\\phpstan\\phpstan\\stubs\\ReflectionClass.stub' => 'ffb6f57879bcd7c9320b7c860d7facd1846e1163',
    'phar://C:\\wamp64\\www\\vendor\\phpstan\\phpstan\\phpstan\\stubs\\iterable.stub' => '41eddc9fba20a88573d9018bdc636b2ffb097dbd',
    'phar://C:\\wamp64\\www\\vendor\\phpstan\\phpstan\\phpstan\\stubs\\ArrayObject.stub' => 'e8b4d1501bc7e090ed47d9835862df50f77996cb',
    'phar://C:\\wamp64\\www\\vendor\\phpstan\\phpstan\\phpstan\\stubs\\WeakReference.stub' => '2a6220f72171aa65d979f4f8ee06a707ecb96ff4',
    'phar://C:\\wamp64\\www\\vendor\\phpstan\\phpstan\\phpstan\\stubs\\ext-ds.stub' => 'd6ee3aa03606b7a32ba2da3fcaa9bd725b28a868',
    'phar://C:\\wamp64\\www\\vendor\\phpstan\\phpstan\\phpstan\\stubs\\PDOStatement.stub' => 'e8ef2c0c9c8d09136525ee1a9123d958cfe45f3f',
    'phar://C:\\wamp64\\www\\vendor\\phpstan\\phpstan\\phpstan\\stubs\\ReflectionFunctionAbstract.stub' => '1b23e432797a716191e792d673667ebc001643fc',
    'phar://C:\\wamp64\\www\\vendor\\phpstan\\phpstan\\phpstan\\stubs\\date.stub' => '8d63f9636060e7efdfced52e29873f51c7cab46e',
    'phar://C:\\wamp64\\www\\vendor\\phpstan\\phpstan\\phpstan\\stubs\\zip.stub' => 'aff61beeb3e9dfaed0eede432921df5eee2d3b40',
    'phar://C:\\wamp64\\www\\vendor\\phpstan\\phpstan\\phpstan\\stubs\\dom.stub' => '850c98e54136d3dbbd46c1042a9286f7ca4d36f0',
    'phar://C:\\wamp64\\www\\vendor\\phpstan\\phpstan\\phpstan\\stubs\\spl.stub' => '6a8ce07b7dc82139ffd4ab1e84414e984801b065',
    'phar://C:\\wamp64\\www\\vendor\\phpstan\\phpstan\\phpstan\\stubs\\SplObjectStorage.stub' => '5246256dcf955c880da94ef509efd6f4e4cf9122',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Enumerable.stub' => 'e8e20f3f81eed2617a9f658db32781e40b4c754c',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\EloquentBuilder.stub' => 'e97cc65882ef651df9ad03ba42022a1c3a437445',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Collection.stub' => 'a7821db10a42c1afbce77b320cd4e70dff47eeec',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\EloquentCollection.stub' => '775aba4a98f444551643838fa11bb0c3338d06ef',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Model.stub' => 'eb0bbd43075afd67756b1bdf07bd5231bf35fcd1',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\JsonResource.stub' => '50231f8f070b015121f7eb9ff73c8e3240f4f09c',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Gate.stub' => '54fe6beb129f421af9f212972c7dc387e94ee714',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Relation.stub' => '61a1f19cb4a27f0da56efd7637dbdec54be8be19',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\BelongsTo.stub' => '1a843cfba603ff8abb4ba8daccad30e543d311a3',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\BelongstoMany.stub' => 'd604b079898ce235c840e455b63f08c939aa4611',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\HasOneOrMany.stub' => '67111825cf7a473a5569d2d5df9a5c5430b97efb',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\HasMany.stub' => 'c797d041e368b3a6ba0caa6770dff91ec0135303',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\HasOne.stub' => '28f14c1b29b7110fd6837432e9d94ee3ad09b4c2',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\HasOneThrough.stub' => '2465994f48eab3fc1e130ab64c1e61785079f9ff',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\HasManyThrough.stub' => '5663582d20485fe8ccfce9b27e0f768e1e2dae42',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Mailable.stub' => '46eaf57e6b7eacd28ece582bb25ecccf7c1faf54',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\MorphOne.stub' => '695ed13bf23b334292bc9ead7cd8a18e31cfa03d',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\MorphOneOrMany.stub' => '144f8f9406c1171485247fb125742f4f5ec5f366',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\MorphTo.stub' => '539a5a05c4bc332fbb997260d17807cc0014282f',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\MorphToMany.stub' => '0f451a6df1ea4c2d70c70cd9fe99cb7ead901ec7',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\MorphMany.stub' => 'f3c5362a3e3fc38153d6ce77800f1cc0ad5f8541',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Helpers.stub' => 'f664fcf4a1b1c1e89bb412f865dd8f400c16d5ba',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\HigherOrderTapProxy.stub' => '747ab587da1ba2bb5ee92ad70abbe101d4ab2308',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\QueryBuilder.stub' => '504cea4667e8698133e708e010960ad466390455',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Facades.stub' => '2a292e744446a88c0acc65e724430ff9df697c54',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Pagination.stub' => '7eea77b8326f8e60c5c0999f5e62f22efe584059',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Contracts\\Pagination.stub' => '320d4b9c1b88833c38ff5497a0f18a41037ec95d',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Contracts\\Support.stub' => '47013855c7808ece0bcae1f4c5e093622c60ded1',
    'C:\\wamp64\\www\\vendor\\nunomaduro\\larastan\\stubs\\Redis\\Connection.stub' => '594198d0412613f8e8ef487a77e3f63e270ba5a5',
  ),
  'level' => 'max',
),
	'errorsCallback' => static function (): array { return array (
  'C:\\wamp64\\www\\app\\Models\\Activity.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Dynamic call to static method Illuminate\\Database\\Eloquent\\Builder<Illuminate\\Database\\Eloquent\\Model>::limit().',
       'file' => 'C:\\wamp64\\www\\app\\Models\\Activity.php',
       'line' => 37,
       'canBeIgnored' => true,
       'filePath' => 'C:\\wamp64\\www\\app\\Models\\Activity.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 37,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Dynamic call to static method Illuminate\\Database\\Eloquent\\Builder<Illuminate\\Database\\Eloquent\\Model>::orderBy().',
       'file' => 'C:\\wamp64\\www\\app\\Models\\Activity.php',
       'line' => 37,
       'canBeIgnored' => true,
       'filePath' => 'C:\\wamp64\\www\\app\\Models\\Activity.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 37,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Models\\Calendar.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Dynamic call to static method Illuminate\\Database\\Eloquent\\Builder<Illuminate\\Database\\Eloquent\\Model>::orderBy().',
       'file' => 'C:\\wamp64\\www\\app\\Models\\Calendar.php',
       'line' => 56,
       'canBeIgnored' => true,
       'filePath' => 'C:\\wamp64\\www\\app\\Models\\Calendar.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 56,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Scopes\\AmountSumScope.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Dynamic call to static method Illuminate\\Database\\Eloquent\\Builder<Illuminate\\Database\\Eloquent\\Model>::addSelect().',
       'file' => 'C:\\wamp64\\www\\app\\Scopes\\AmountSumScope.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => 'C:\\wamp64\\www\\app\\Scopes\\AmountSumScope.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 21,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Dynamic call to static method Illuminate\\Database\\Eloquent\\Builder<Illuminate\\Database\\Eloquent\\Model>::select().',
       'file' => 'C:\\wamp64\\www\\app\\Scopes\\AmountSumScope.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => 'C:\\wamp64\\www\\app\\Scopes\\AmountSumScope.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 21,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
); },
	'dependencies' => array (
  'C:\\wamp64\\www\\app\\Console\\Kernel.php' => 
  array (
    'fileHash' => '1c9e2d31f5a35c6f1949c4d2aed982283b28b491',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Exceptions\\Handler.php' => 
  array (
    'fileHash' => '95b46ae3ce0ef61ac34ee87f599f0c03b29fa205',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Facades\\TwitterConnect.php' => 
  array (
    'fileHash' => 'c690745a21dfe6e4535bde7f5726a2a5749bc9c8',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Rules\\TwitterValidator.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\CalendarCommon.php' => 
  array (
    'fileHash' => '1801517a1e3dda355c95ca414eabac222a5bccde',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\CreateController.php',
      1 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\EditController.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\CreateController.php' => 
  array (
    'fileHash' => '16690d7612c74bb4e6bc21ec6ce2c6345957f561',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\EditController.php' => 
  array (
    'fileHash' => '56923a03c53a3c82b6b0e50aec64d55a93ace1d2',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\ListController.php' => 
  array (
    'fileHash' => 'a74aa086da4edb231222f76f7b673abf2e4895fc',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\RemoveController.php' => 
  array (
    'fileHash' => '9a4f2354d0a1b8dc80cf476f3892fbb50fd69611',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\ActivityCommon.php' => 
  array (
    'fileHash' => '7abf4142880cff054faed14625374eb6a49db6b3',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\CreateController.php',
      1 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\EditController.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\CreateController.php' => 
  array (
    'fileHash' => '2f2b22c83726c00b74f86743dbc631b9d719c743',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\EditController.php' => 
  array (
    'fileHash' => 'c91d07e24e2ee0f48b3c2632c05e0ce32522c27c',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\ListController.php' => 
  array (
    'fileHash' => 'b6549cc50c943374ad85205d0fcae29a7cf0daba',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\RemoveController.php' => 
  array (
    'fileHash' => '3965aee0a345bf5728918c2ab934f6f076b6b003',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\ConfirmPasswordController.php' => 
  array (
    'fileHash' => '45dff6b645b7b6de58a45ee06d87f9685311a813',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\ForgotPasswordController.php' => 
  array (
    'fileHash' => '81c1321e8b26baa03a1e9a7ae00b4350aa6c7f14',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\LoginController.php' => 
  array (
    'fileHash' => '9cddf55bc282921821800b4aa5424fe090064386',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\RegisterController.php' => 
  array (
    'fileHash' => 'f938e614eb043175f28918d639053d4a6d7f91d0',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\ResetPasswordController.php' => 
  array (
    'fileHash' => '1edef14cd9fa6df3a0cdeea1083540877171b36a',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\VerificationController.php' => 
  array (
    'fileHash' => '6a734a836f13e7c57a18d3d6e73e320ce05ce603',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Controller.php' => 
  array (
    'fileHash' => '947ca2fbe0486b9c59c9274c2dee022e7629d5fc',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\CreateController.php',
      1 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\EditController.php',
      2 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\ListController.php',
      3 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\RemoveController.php',
      4 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\CreateController.php',
      5 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\EditController.php',
      6 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\ListController.php',
      7 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\RemoveController.php',
      8 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\ConfirmPasswordController.php',
      9 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\ForgotPasswordController.php',
      10 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\LoginController.php',
      11 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\RegisterController.php',
      12 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\ResetPasswordController.php',
      13 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\VerificationController.php',
      14 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\DashboardController.php',
      15 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\CreateController.php',
      16 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\EditController.php',
      17 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\ListController.php',
      18 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\RemoveController.php',
      19 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\CreateController.php',
      20 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\EditController.php',
      21 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\ListController.php',
      22 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\RemoveController.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\DashboardController.php' => 
  array (
    'fileHash' => '8917dc502027a89826ceb229446327132334504b',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\CreateController.php' => 
  array (
    'fileHash' => 'e519711346ef9408b2c861ad874035cbd0fc1f85',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\EditController.php' => 
  array (
    'fileHash' => '58092e494d0c1162e93535292809e77d72775a6d',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\ListController.php' => 
  array (
    'fileHash' => '58486e022ab0cab2fcb5267308587c9a97c08064',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\RemoveController.php' => 
  array (
    'fileHash' => 'f65580e701a7fefa145783dabc93a567a6af7e43',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\TwitterCommon.php' => 
  array (
    'fileHash' => 'aa833d3862ec4d757fa00d6cd158a65fb0306388',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\CreateController.php',
      1 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\EditController.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\CreateController.php' => 
  array (
    'fileHash' => 'e9b10e97fea93ec0065e8f97c2a6d1798178ca58',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\EditController.php' => 
  array (
    'fileHash' => '56ce160aeb79d83479831a258def2a9c5d9847f7',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\ListController.php' => 
  array (
    'fileHash' => 'b1e2357927bf0ef8d312c461411826003a6ff6f4',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\RemoveController.php' => 
  array (
    'fileHash' => '8a1c086f9060553f9b05990f846ad2ddce223152',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\WorkDataCommon.php' => 
  array (
    'fileHash' => '0ea30b51f2ea94c72565a8e260b9cbc7308347a6',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\CreateController.php',
      1 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\EditController.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Kernel.php' => 
  array (
    'fileHash' => '59996d7c016b34eb77d1986286e61a75f9c28b51',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Requests\\Activity.php' => 
  array (
    'fileHash' => 'e9028b2f5e40b9a6db8af2562cd6d1e0fe8581c2',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\CreateController.php',
      1 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\EditController.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Requests\\Calendar.php' => 
  array (
    'fileHash' => '13ea5b2a4635ea905e026749156200667f2737cd',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\CreateController.php',
      1 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\EditController.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Requests\\Twitter.php' => 
  array (
    'fileHash' => '35d6e153d4ec43ee66abddd50ec5c0cf5b076469',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\CreateController.php',
      1 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\EditController.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Http\\Requests\\WorkData.php' => 
  array (
    'fileHash' => '8e656a57ce0f3b6997be123777befd46f475620a',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\CreateController.php',
      1 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\EditController.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Models\\Activity.php' => 
  array (
    'fileHash' => '13b1a521126815672ad4739b0b1793bbb0c2973c',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\CreateController.php',
      1 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\EditController.php',
      2 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\ListController.php',
      3 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\RemoveController.php',
      4 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\DashboardController.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Models\\BaseModel.php' => 
  array (
    'fileHash' => '12f7ad5f62da4cdcb528a43b466174a4def303dc',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\CreateController.php',
      1 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\EditController.php',
      2 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\ListController.php',
      3 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\RemoveController.php',
      4 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\CreateController.php',
      5 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\EditController.php',
      6 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\ListController.php',
      7 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\RemoveController.php',
      8 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\DashboardController.php',
      9 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\CreateController.php',
      10 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\EditController.php',
      11 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\ListController.php',
      12 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\RemoveController.php',
      13 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\CreateController.php',
      14 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\EditController.php',
      15 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\ListController.php',
      16 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\RemoveController.php',
      17 => 'C:\\wamp64\\www\\app\\Models\\Activity.php',
      18 => 'C:\\wamp64\\www\\app\\Models\\Calendar.php',
      19 => 'C:\\wamp64\\www\\app\\Models\\Twitter.php',
      20 => 'C:\\wamp64\\www\\app\\Models\\WorkData.php',
      21 => 'C:\\wamp64\\www\\app\\Services\\TwitterConnect.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Models\\Calendar.php' => 
  array (
    'fileHash' => 'b5145234c51546660a25dc10450a4aeaf93822f3',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\CreateController.php',
      1 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\EditController.php',
      2 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\ListController.php',
      3 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\RemoveController.php',
      4 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\DashboardController.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Models\\Twitter.php' => 
  array (
    'fileHash' => '3f46d4312ad952473b6c6224ae379b4506772ad9',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\CreateController.php',
      1 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\EditController.php',
      2 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\ListController.php',
      3 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\RemoveController.php',
      4 => 'C:\\wamp64\\www\\app\\Services\\TwitterConnect.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Models\\User.php' => 
  array (
    'fileHash' => 'dcd8cc9f7c2a9409c33dae4e013198774f2add03',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\RegisterController.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Models\\WorkData.php' => 
  array (
    'fileHash' => 'a472a86e78f2bba3ff97107e0f27c872e7390aca',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\DashboardController.php',
      1 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\CreateController.php',
      2 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\EditController.php',
      3 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\ListController.php',
      4 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\RemoveController.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Rules\\TwitterValidator.php' => 
  array (
    'fileHash' => '61c2d011d4d2148c95dcd05e49a486307a366392',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Requests\\Twitter.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Scopes\\AmountSumScope.php' => 
  array (
    'fileHash' => '56beb459792668a3bd661bf67dda87b375eb63a7',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Models\\WorkData.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Services\\NameDays.php' => 
  array (
    'fileHash' => '79badbd5c097222b0effec83edeb6c7bff2c98fe',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\DashboardController.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Services\\NetworkGather.php' => 
  array (
    'fileHash' => 'dfcf6a69db045d2847506c607424377c0632e2fd',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Services\\RSSFeed.php',
      1 => 'C:\\wamp64\\www\\app\\Services\\TwitterConnect.php',
      2 => 'C:\\wamp64\\www\\app\\Services\\Weather.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Services\\RSSFeed.php' => 
  array (
    'fileHash' => 'e02654c97d29563e2a451a66af5bbca20016cb44',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\DashboardController.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Services\\TwitterConnect.php' => 
  array (
    'fileHash' => 'c73052c237aa0522d7a7113fcff3448357b5a42d',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Facades\\TwitterConnect.php',
      1 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\DashboardController.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Services\\Weather.php' => 
  array (
    'fileHash' => '68bdf3e7a218ef48cfbd0d8c8c484f9ee0082ade',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\DashboardController.php',
    ),
  ),
  'C:\\wamp64\\www\\app\\Traits\\CacheTrait.php' => 
  array (
    'fileHash' => '626aa9be2d19d32a1ed925366235ae30711c3a25',
    'dependentFiles' => 
    array (
      0 => 'C:\\wamp64\\www\\app\\Facades\\TwitterConnect.php',
      1 => 'C:\\wamp64\\www\\app\\Http\\Controllers\\DashboardController.php',
      2 => 'C:\\wamp64\\www\\app\\Services\\RSSFeed.php',
      3 => 'C:\\wamp64\\www\\app\\Services\\TwitterConnect.php',
      4 => 'C:\\wamp64\\www\\app\\Services\\Weather.php',
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'C:\\wamp64\\www\\app\\Console\\Kernel.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Kernel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Console\\Kernel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'commands',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * The Artisan commands provided by your application.
     *
     * @var array
     */',
         'namespace' => 'App\\Console',
         'uses' => 
        array (
          'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
          'consolekernel' => 'Illuminate\\Foundation\\Console\\Kernel',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'schedule',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Define the application\'s command schedule.
     *
     * @return void
     */',
         'namespace' => 'App\\Console',
         'uses' => 
        array (
          'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
          'consolekernel' => 'Illuminate\\Foundation\\Console\\Kernel',
        ),
      )),
       'byRef' => false,
       'public' => false,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'schedule',
           'type' => 'Illuminate\\Console\\Scheduling\\Schedule',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'commands',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Register the commands for the application.
     *
     * @return void
     */',
         'namespace' => 'App\\Console',
         'uses' => 
        array (
          'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
          'consolekernel' => 'Illuminate\\Foundation\\Console\\Kernel',
        ),
      )),
       'byRef' => false,
       'public' => false,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Exceptions\\Handler.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Handler',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Exceptions\\Handler',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'dontReport',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * A list of the exception types that are not reported.
     *
     * @var array
     */',
         'namespace' => 'App\\Exceptions',
         'uses' => 
        array (
          'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
          'throwable' => 'Throwable',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'dontFlash',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */',
         'namespace' => 'App\\Exceptions',
         'uses' => 
        array (
          'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
          'throwable' => 'Throwable',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'register',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Register the exception handling callbacks for the application.
     */',
         'namespace' => 'App\\Exceptions',
         'uses' => 
        array (
          'exceptionhandler' => 'Illuminate\\Foundation\\Exceptions\\Handler',
          'throwable' => 'Throwable',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'void',
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Facades\\TwitterConnect.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Facades\\TwitterConnect',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\Facades\\Facade',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'getFacadeAccessor',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\CalendarCommon.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'App\\Http\\Controllers\\Absence\\CalendarCommon',
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\CreateController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Absence\\CreateController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Http\\Controllers\\Absence\\CalendarCommon',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'index',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Shows empty form, for calendar event creation.
     *
     * @return \\Illuminate\\Contracts\\Foundation\\Application|\\Illuminate\\Contracts\\View\\Factory|\\Illuminate\\Contracts\\View\\View
     */',
         'namespace' => 'App\\Http\\Controllers\\Absence',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'calendar' => 'App\\Models\\Calendar',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\EditController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Absence\\EditController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Http\\Controllers\\Absence\\CalendarCommon',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'index',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Shows Form with filled Calendar Event.
     *
     * @return \\Illuminate\\Contracts\\Foundation\\Application|\\Illuminate\\Contracts\\View\\Factory|\\Illuminate\\Contracts\\View\\View
     */',
         'namespace' => 'App\\Http\\Controllers\\Absence',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'calendar' => 'App\\Models\\Calendar',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => 'App\\Models\\Calendar',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\ListController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Absence\\ListController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'index',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'Illuminate\\Contracts\\View\\View',
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Absence\\RemoveController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Absence\\RemoveController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'index',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'Illuminate\\Http\\RedirectResponse',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => 'App\\Models\\Calendar',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\ActivityCommon.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'App\\Http\\Controllers\\Activity\\ActivityCommon',
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\CreateController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Activity\\CreateController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Http\\Controllers\\Activity\\ActivityCommon',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'index',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Shows empty form, for Twitter event creation.
     *
     * @return \\Illuminate\\Contracts\\Foundation\\Application|\\Illuminate\\Contracts\\View\\Factory|\\Illuminate\\Contracts\\View\\View
     */',
         'namespace' => 'App\\Http\\Controllers\\Activity',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'activity' => 'App\\Models\\Activity',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\EditController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Activity\\EditController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Http\\Controllers\\Activity\\ActivityCommon',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'index',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Shows Form with filled Calendar Event.
     *
     * @return \\Illuminate\\Contracts\\Foundation\\Application|\\Illuminate\\Contracts\\View\\Factory|\\Illuminate\\Contracts\\View\\View
     */',
         'namespace' => 'App\\Http\\Controllers\\Activity',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'activity' => 'App\\Models\\Activity',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => 'App\\Models\\Activity',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\ListController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Activity\\ListController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'index',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'Illuminate\\Contracts\\View\\View',
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Activity\\RemoveController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Activity\\RemoveController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'index',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'Illuminate\\Http\\RedirectResponse',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => 'App\\Models\\Activity',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\ConfirmPasswordController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Auth\\ConfirmsPasswords',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'redirectTo',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */',
         'namespace' => 'App\\Http\\Controllers\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
          'confirmspasswords' => 'Illuminate\\Foundation\\Auth\\ConfirmsPasswords',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => '__construct',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Create a new controller instance.
     *
     * @return void
     */',
         'namespace' => 'App\\Http\\Controllers\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
          'confirmspasswords' => 'Illuminate\\Foundation\\Auth\\ConfirmsPasswords',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\ForgotPasswordController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Auth\\SendsPasswordResetEmails',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\LoginController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\LoginController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Auth\\AuthenticatesUsers',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'redirectTo',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Where to redirect users after login.
     *
     * @var string
     */',
         'namespace' => 'App\\Http\\Controllers\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
          'authenticatesusers' => 'Illuminate\\Foundation\\Auth\\AuthenticatesUsers',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => '__construct',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Create a new controller instance.
     *
     * @return void
     */',
         'namespace' => 'App\\Http\\Controllers\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
          'authenticatesusers' => 'Illuminate\\Foundation\\Auth\\AuthenticatesUsers',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\RegisterController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\RegisterController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Auth\\RegistersUsers',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'redirectTo',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Where to redirect users after registration.
     *
     * @var string
     */',
         'namespace' => 'App\\Http\\Controllers\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'user' => 'App\\Models\\User',
          'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
          'registersusers' => 'Illuminate\\Foundation\\Auth\\RegistersUsers',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => '__construct',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Create a new controller instance.
     *
     * @return void
     */',
         'namespace' => 'App\\Http\\Controllers\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'user' => 'App\\Models\\User',
          'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
          'registersusers' => 'Illuminate\\Foundation\\Auth\\RegistersUsers',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'validator',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Get a validator for an incoming registration request.
     *
     * @return \\Illuminate\\Contracts\\Validation\\Validator
     */',
         'namespace' => 'App\\Http\\Controllers\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'user' => 'App\\Models\\User',
          'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
          'registersusers' => 'Illuminate\\Foundation\\Auth\\RegistersUsers',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
        ),
      )),
       'byRef' => false,
       'public' => false,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'data',
           'type' => 'array',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'create',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Create a new user instance after a valid registration.
     *
     * @return \\App\\Models\\User
     */',
         'namespace' => 'App\\Http\\Controllers\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'user' => 'App\\Models\\User',
          'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
          'registersusers' => 'Illuminate\\Foundation\\Auth\\RegistersUsers',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'validator' => 'Illuminate\\Support\\Facades\\Validator',
        ),
      )),
       'byRef' => false,
       'public' => false,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'data',
           'type' => 'array',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\ResetPasswordController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Auth\\ResetsPasswords',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'redirectTo',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */',
         'namespace' => 'App\\Http\\Controllers\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
          'resetspasswords' => 'Illuminate\\Foundation\\Auth\\ResetsPasswords',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Auth\\VerificationController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\VerificationController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Auth\\VerifiesEmails',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'redirectTo',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Where to redirect users after verification.
     *
     * @var string
     */',
         'namespace' => 'App\\Http\\Controllers\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
          'verifiesemails' => 'Illuminate\\Foundation\\Auth\\VerifiesEmails',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => '__construct',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Create a new controller instance.
     *
     * @return void
     */',
         'namespace' => 'App\\Http\\Controllers\\Auth',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'routeserviceprovider' => 'App\\Providers\\RouteServiceProvider',
          'verifiesemails' => 'Illuminate\\Foundation\\Auth\\VerifiesEmails',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Controller.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
        1 => 'Illuminate\\Foundation\\Bus\\DispatchesJobs',
        2 => 'Illuminate\\Foundation\\Validation\\ValidatesRequests',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\DashboardController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\DashboardController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => '__construct',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'weather',
           'type' => 'App\\Services\\Weather',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'twitter',
           'type' => 'App\\Services\\TwitterConnect',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'news',
           'type' => 'App\\Services\\RSSFeed',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        3 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'nameDays',
           'type' => 'App\\Services\\NameDays',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'index',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Show the application dashboard.
     *
     * @return \\Illuminate\\Contracts\\Support\\Renderable
     */',
         'namespace' => 'App\\Http\\Controllers',
         'uses' => 
        array (
          'activity' => 'App\\Models\\Activity',
          'calendar' => 'App\\Models\\Calendar',
          'workdata' => 'App\\Models\\WorkData',
          'namedays' => 'App\\Services\\NameDays',
          'rssfeed' => 'App\\Services\\RSSFeed',
          'twitterconnect' => 'App\\Services\\TwitterConnect',
          'weather' => 'App\\Services\\Weather',
          'carbon' => 'Carbon\\Carbon',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'countTotalWorkItems',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'array',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'items',
           'type' => 'array',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\CreateController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Twitter\\CreateController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Http\\Controllers\\Twitter\\TwitterCommon',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'index',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Shows empty form, for Twitter event creation.
     *
     * @return \\Illuminate\\Contracts\\Foundation\\Application|\\Illuminate\\Contracts\\View\\Factory|\\Illuminate\\Contracts\\View\\View
     */',
         'namespace' => 'App\\Http\\Controllers\\Twitter',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'twitter' => 'App\\Models\\Twitter',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\EditController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Twitter\\EditController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Http\\Controllers\\Twitter\\TwitterCommon',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'index',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Shows Form with filled Twitter Event.
     *
     * @return \\Illuminate\\Contracts\\Foundation\\Application|\\Illuminate\\Contracts\\View\\Factory|\\Illuminate\\Contracts\\View\\View
     */',
         'namespace' => 'App\\Http\\Controllers\\Twitter',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'twitter' => 'App\\Http\\Requests\\Twitter',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => 'App\\Http\\Requests\\Twitter',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\ListController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Twitter\\ListController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'index',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'Illuminate\\Contracts\\View\\View',
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\RemoveController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Twitter\\RemoveController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'index',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'Illuminate\\Http\\RedirectResponse',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => 'App\\Models\\Twitter',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\Twitter\\TwitterCommon.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'App\\Http\\Controllers\\Twitter\\TwitterCommon',
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\CreateController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\WorkData\\CreateController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Http\\Controllers\\WorkData\\WorkDataCommon',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'index',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Shows empty form, for WorkData event creation.
     *
     * @return \\Illuminate\\Contracts\\Foundation\\Application|\\Illuminate\\Contracts\\View\\Factory|\\Illuminate\\Contracts\\View\\View
     */',
         'namespace' => 'App\\Http\\Controllers\\WorkData',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'workdata' => 'App\\Models\\WorkData',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\EditController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\WorkData\\EditController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Http\\Controllers\\WorkData\\WorkDataCommon',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'index',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Shows empty form, for WorkData event creation.
     *
     * @return \\Illuminate\\Contracts\\Foundation\\Application|\\Illuminate\\Contracts\\View\\Factory|\\Illuminate\\Contracts\\View\\View
     */',
         'namespace' => 'App\\Http\\Controllers\\WorkData',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'workdata' => 'App\\Models\\WorkData',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => 'App\\Models\\WorkData',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\ListController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\WorkData\\ListController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'index',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'Illuminate\\Contracts\\View\\View',
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\RemoveController.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\WorkData\\RemoveController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'index',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'Illuminate\\Http\\RedirectResponse',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => 'App\\Models\\WorkData',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Controllers\\WorkData\\WorkDataCommon.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'App\\Http\\Controllers\\WorkData\\WorkDataCommon',
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Kernel.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Kernel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\Kernel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'middleware',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * The application\'s global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */',
         'namespace' => 'App\\Http',
         'uses' => 
        array (
          'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'middlewareGroups',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * The application\'s route middleware groups.
     *
     * @var array
     */',
         'namespace' => 'App\\Http',
         'uses' => 
        array (
          'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'routeMiddleware',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * The application\'s route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */',
         'namespace' => 'App\\Http',
         'uses' => 
        array (
          'httpkernel' => 'Illuminate\\Foundation\\Http\\Kernel',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Requests\\Activity.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Activity',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'authorize',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */',
         'namespace' => 'App\\Http\\Requests',
         'uses' => 
        array (
          'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'rules',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */',
         'namespace' => 'App\\Http\\Requests',
         'uses' => 
        array (
          'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Requests\\Calendar.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Calendar',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'authorize',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */',
         'namespace' => 'App\\Http\\Requests',
         'uses' => 
        array (
          'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'rules',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */',
         'namespace' => 'App\\Http\\Requests',
         'uses' => 
        array (
          'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Requests\\Twitter.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Twitter',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'authorize',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */',
         'namespace' => 'App\\Http\\Requests',
         'uses' => 
        array (
          'twittervalidator' => 'App\\Rules\\TwitterValidator',
          'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'rules',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */',
         'namespace' => 'App\\Http\\Requests',
         'uses' => 
        array (
          'twittervalidator' => 'App\\Rules\\TwitterValidator',
          'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Http\\Requests\\WorkData.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\WorkData',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'authorize',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */',
         'namespace' => 'App\\Http\\Requests',
         'uses' => 
        array (
          'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'rules',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */',
         'namespace' => 'App\\Http\\Requests',
         'uses' => 
        array (
          'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Models\\Activity.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Activity',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\BaseModel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
       'name' => 'FORM_FIELDS',
       'value' => '[[\'type\' => \'datetime\', \'required\', \'title\' => \'Date\', \'name\' => \'date\', \'classes\' => \'datepicker\'], [\'type\' => \'string\', \'required\', \'title\' => \'Description\', \'name\' => \'activity\']]',
       'public' => true,
       'private' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
       'name' => 'LIST',
       'value' => '[[\'type\' => \'integer\', \'title\' => \'ID\', \'name\' => \'id\'], [\'type\' => \'datetime\', \'title\' => \'Date\', \'name\' => \'date\', \'classes\' => \'datepicker\'], [\'type\' => \'string\', \'title\' => \'Description\', \'name\' => \'activity\'], [\'type\' => \'buttons\']]',
       'public' => true,
       'private' => false,
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'table',
       'phpDoc' => NULL,
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => false,
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'fillable',
       'phpDoc' => NULL,
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => false,
    )),
    5 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'dates',
       'phpDoc' => NULL,
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
    )),
    6 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'scopeFuture',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'query',
           'type' => 'Illuminate\\Database\\Eloquent\\Builder',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Models\\BaseModel.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\BaseModel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
       'name' => 'BOOLEAN',
       'value' => '[\'boolean\' => [0 => \'No\', 1 => \'Yes\']]',
       'public' => true,
       'private' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'getFieldValue',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @return mixed|string
     */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'fieldName',
           'type' => 'string',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'type',
           'type' => 'string',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Models\\Calendar.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Calendar',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\BaseModel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
       'name' => 'FORM_FIELDS',
       'value' => '[[\'type\' => \'string\', \'required\', \'title\' => \'Person\', \'name\' => \'title\'], [\'type\' => \'text\', \'title\' => \'Description\', \'name\' => \'description\'], [\'type\' => \'datetime\', \'required\', \'title\' => \'Absence Date\', \'name\' => \'date\', \'classes\' => \'datepicker\'], [\'type\' => \'string\', \'required\', \'title\' => \'Absence From\', \'name\' => \'timeFrom\', \'classes\' => \'timeMask\'], [\'type\' => \'string\', \'required\', \'title\' => \'Absence To\', \'name\' => \'timeTo\', \'classes\' => \'timeMask\']]',
       'public' => true,
       'private' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
       'name' => 'LIST',
       'value' => '[[\'type\' => \'integer\', \'title\' => \'ID\', \'name\' => \'id\'], [\'type\' => \'string\', \'title\' => \'Person\', \'name\' => \'title\'], [\'type\' => \'text\', \'title\' => \'Description\', \'name\' => \'description\'], [\'type\' => \'datetime\', \'title\' => \'Absence Date\', \'name\' => \'date\'], [\'type\' => \'string\', \'title\' => \'Absence From\', \'name\' => \'timeFrom\'], [\'type\' => \'string\', \'title\' => \'Absence To\', \'name\' => \'timeTo\'], [\'type\' => \'buttons\']]',
       'public' => true,
       'private' => false,
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'table',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @var string
     */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        ),
      )),
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => false,
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'fillable',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @var array
     */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        ),
      )),
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => false,
    )),
    5 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'dates',
       'phpDoc' => NULL,
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
    )),
    6 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'scopeToday',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'Illuminate\\Database\\Eloquent\\Builder',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'query',
           'type' => 'Illuminate\\Database\\Eloquent\\Builder',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    7 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'getMissingFor',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Models\\Twitter.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Twitter',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\BaseModel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
       'name' => 'FORM_FIELDS',
       'value' => '[[\'type\' => \'string\', \'required\', \'title\' => \'Handle\', \'name\' => \'handle\']]',
       'public' => true,
       'private' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
       'name' => 'LIST',
       'value' => '[[\'type\' => \'integer\', \'title\' => \'ID\', \'name\' => \'id\'], [\'type\' => \'string\', \'title\' => \'Handle\', \'name\' => \'handle\'], [\'type\' => \'buttons\']]',
       'public' => true,
       'private' => false,
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'table',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @var string
     */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        ),
      )),
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => false,
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'fillable',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @var array
     */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        ),
      )),
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => false,
    )),
  ),
  'C:\\wamp64\\www\\app\\Models\\User.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'fillable',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var array
     */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
          'notifiable' => 'Illuminate\\Notifications\\Notifiable',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'hidden',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
          'notifiable' => 'Illuminate\\Notifications\\Notifiable',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'casts',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * The attributes that should be cast to native types.
     *
     * @var array
     */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
          'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
          'notifiable' => 'Illuminate\\Notifications\\Notifiable',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
    )),
  ),
  'C:\\wamp64\\www\\app\\Models\\WorkData.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\WorkData',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Models\\BaseModel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
       'name' => 'FORM_FIELDS',
       'value' => '[[\'type\' => \'string\', \'required\', \'title\' => \'Item\', \'name\' => \'title\'], [\'type\' => \'number\', \'required\', \'title\' => \'Item amount 1\', \'name\' => \'amount_1\'], [\'type\' => \'number\', \'required\', \'title\' => \'Item amount 2\', \'name\' => \'amount_2\'], [\'type\' => \'number\', \'required\', \'title\' => \'Item amount 3\', \'name\' => \'amount_3\']]',
       'public' => true,
       'private' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
       'name' => 'LIST',
       'value' => '[[\'type\' => \'integer\', \'title\' => \'ID\', \'name\' => \'id\'], [\'type\' => \'string\', \'title\' => \'Item\', \'name\' => \'title\'], [\'type\' => \'integer\', \'title\' => \'Item amount 1\', \'name\' => \'amount_1\'], [\'type\' => \'integer\', \'title\' => \'Item amount 2\', \'name\' => \'amount_2\'], [\'type\' => \'integer\', \'title\' => \'Item amount 3\', \'name\' => \'amount_3\'], [\'type\' => \'buttons\']]',
       'public' => true,
       'private' => false,
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'table',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @var string
     */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'amountsumscope' => 'App\\Scopes\\AmountSumScope',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        ),
      )),
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => false,
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'fillable',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @var array
     */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'amountsumscope' => 'App\\Scopes\\AmountSumScope',
          'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        ),
      )),
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => false,
    )),
    5 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'booted',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Rules\\TwitterValidator.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Rules\\TwitterValidator',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Validation\\Rule',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => '__construct',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Create a new rule instance.
     *
     * @return void
     */',
         'namespace' => 'App\\Rules',
         'uses' => 
        array (
          'twitterconnect' => 'App\\Facades\\TwitterConnect',
          'rule' => 'Illuminate\\Contracts\\Validation\\Rule',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'passes',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
     */',
         'namespace' => 'App\\Rules',
         'uses' => 
        array (
          'twitterconnect' => 'App\\Facades\\TwitterConnect',
          'rule' => 'Illuminate\\Contracts\\Validation\\Rule',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'bool',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attribute',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'value',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'message',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Get the validation error message.
     */',
         'namespace' => 'App\\Rules',
         'uses' => 
        array (
          'twitterconnect' => 'App\\Facades\\TwitterConnect',
          'rule' => 'Illuminate\\Contracts\\Validation\\Rule',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Scopes\\AmountSumScope.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Scopes\\AmountSumScope',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Scope',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'apply',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Apply the scope to a given Eloquent query builder.
     *
     * @return void
     */',
         'namespace' => 'App\\Scopes',
         'uses' => 
        array (
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'scope' => 'Illuminate\\Database\\Eloquent\\Scope',
          'db' => 'Illuminate\\Support\\Facades\\DB',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'builder',
           'type' => 'Illuminate\\Database\\Eloquent\\Builder',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'model',
           'type' => 'Illuminate\\Database\\Eloquent\\Model',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Services\\NameDays.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\NameDays',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
       'name' => 'NAMES',
       'value' => '[\'{"0":["Laimnesis","Solvija","Solvita"],"1":["Indulis","Iva","Ivis","Ivo"],"2":["Miervalda","Miervaldis","Ringolds"],"3":["Ilva","Ilvita","Spodra"],"4":["S\\\\u012bmanis","Zintis"],"5":["Arnita","Spulga"],"6":["Digm\\\\u0101rs","Juli\\\\u0101ns","Rota","Zigm\\\\u0101rs"],"7":["Gatis","Ivanda"],"8":["Aksels","Alta","Kaspars"],"9":["Dorisa","Tatjana"],"10":["Franciska","Smaida"],"11":["Reina","Reinholds","Reinis","Ren\\\\u0101ts"],"12":["Aira","\\\\u0100rijs","\\\\u0100ris","Harijs"],"13":["Raitis","Raits","Roberta","Roberts"],"14":["Felicita","F\\\\u0113likss"],"15":["Lida","Lidija"],"16":["Dravis","Tenis"],"17":["Antis","Antonijs","Antons"],"18":["Alnis","Andulis"],"19":["Al\\\\u0123is","A\\\\u013c\\\\u0123irds","O\\\\u013c\\\\u0123erts","Orests"],"20":["Agne","Agnese","Agnija"],"21":["Austris"],"22":["Grieta","Strauta","Rebeka"],"23":["Eglons","Kri\\\\u0161s","Ksenija"],"24":["Sigurds","Sigvards","Zigurds"],"25":["Agneta","Agnis","Ansis"],"26":["Ildze","Ilze","Izolde"],"27":["K\\\\u0101rlis","Spodris"],"28":["Aivars","Val\\\\u0113rijs"],"29":["P\\\\u0101rsla","T\\\\u012bna","Valent\\\\u012bna"],"30":["Tekla","Violeta"]}\', \'{"0":["Brigita","Indars","Indra","Indris"],"1":["Sonora","Sp\\\\u012bdola"],"2":["A\\\\u012bda","Ida","Vida"],"3":["Daila","Dominiks","Veronika"],"4":["Agate","Selga","Silga","Sinilga"],"5":["Dace","D\\\\u0101rta","Dora"],"6":["Nelda","Ri\\\\u010dards","Rihards","Ri\\\\u0161ards"],"7":["Aldona","\\\\u010ceslavs"],"8":["Apolonija","Simona"],"9":["Paula","Paul\\\\u012bne","Jasm\\\\u012bna"],"10":["Laima","Laimdota"],"11":["Karl\\\\u012bna","L\\\\u012bna"],"12":["Malda","Melita"],"13":["Valent\\\\u012bns"],"14":["Aloizs","Alvils","Olafs","Olavs"],"15":["D\\\\u017euljeta","J\\\\u016blija"],"16":["Donats","Konstance"],"17":["Kintija","Kora"],"18":["Zane","Zuzanna"],"19":["Smuidra","Smuidris","Vitauts"],"20":["Ariadne","Eleonora"],"21":["Adrians","Adri\\\\u0101na","Adrija","\\\\u0100rija","Rigonda"],"22":["Almants","Haralds"],"23":["Di\\\\u0101na","Dina","Dins"],"24":["Alma","Annemarija"],"25":["Aur\\\\u0113lija","Evel\\\\u012bna","M\\\\u0113tra"],"26":["Andra","L\\\\u012bva","L\\\\u012bvija"],"27":["Justs","Skaidra","Skaidr\\\\u012bte"]}\', \'{"0":["Ilgvars","Ivars"],"1":["Laila","Lav\\\\u012bze","Lu\\\\u012bze"],"2":["Marts","T\\\\u0101lavs","T\\\\u0101lis"],"3":["Alise","Auce","Enija"],"4":["Aurora","Austra"],"5":["Centis","Gotfr\\\\u012bds","Vents"],"6":["Ella","Elm\\\\u012bra"],"7":["Dagm\\\\u0101ra","Marga","Margita"],"8":["\\\\u0112valds"],"9":["Laimrota","Lili\\\\u0101na","Silvija"],"10":["Agita","Konstant\\\\u012bns"],"11":["Aija","Aiva","Aivis"],"12":["Balvis","Ernests"],"13":["Matilde","Ulrika"],"14":["Amalda","Amilda","Imalda"],"15":["Guntars","Guntis","Guntris"],"16":["Gerda","Gertr\\\\u016bde","\\\\u0122ertr\\\\u016bde"],"17":["Adel\\\\u012bna","Ilona"],"18":["J\\\\u0101zeps","Juzefa"],"19":["Irbe","Made"],"20":["Benedikts","Dzelme","Una","Unigunde","Benedikta"],"21":["Dziedra","Gabriela","Gabriels","Tam\\\\u0101ra"],"22":["Mirdza","\\\\u017danete","\\\\u017danna"],"23":["Izidors","Kazimirs"],"24":["Marita","M\\\\u0101ra","M\\\\u0101r\\\\u012bte"],"25":["Ei\\\\u017eenija","\\\\u017denija"],"26":["Gustavs","Gusts","T\\\\u0101lr\\\\u012bts"],"27":["Ginta","Gunda","Gunta"],"28":["Agija","Aldonis"],"29":["Ilgm\\\\u0101rs","Nanija"],"30":["Atvars","Gvido"]}\', \'{"0":["Dagne","Dagnis"],"1":["Irmgarde"],"2":["Daira","Dairis"],"3":["\\\\u0100rvaldis","\\\\u0100rvalds","Herta","Valda"],"4":["Aivija","Vidaga","Vija"],"5":["Dzinta","Filips","V\\\\u012blips","Zinta"],"6":["Helmuts","Zina","Zina\\\\u012bda"],"7":["Dana","Dans","Danute","Edgars"],"8":["Alla","Val\\\\u0113rija","\\\\u017dub\\\\u012bte"],"9":["Anita","Anitra","Z\\\\u012ble","Annika"],"10":["Hermanis","Vilm\\\\u0101rs"],"11":["Ainis","J\\\\u016blijs"],"12":["Egils","Eg\\\\u012bls","Nauris"],"13":["Gudr\\\\u012bte","Strauja"],"14":["Aelita","Gastons"],"15":["Alfs","Bernadeta","Mintauts"],"16":["R\\\\u016bdis","R\\\\u016bdolfs","Vivi\\\\u0101na"],"17":["Jadviga","Laura"],"18":["Fanija","V\\\\u0113sma"],"19":["Mirta","Zied\\\\u012bte"],"20":["Anastasija","Mar\\\\u0123ers"],"21":["Armanda","Armands"],"22":["Georgs","Jur\\\\u0123is","Juris"],"23":["Nameda","Ritvaldis","Visvaldis"],"24":["B\\\\u0101rbala","L\\\\u012bksma"],"25":["Al\\\\u012bna","R\\\\u016bsi\\\\u0146\\\\u0161","Sandris"],"26":["Klement\\\\u012bne","Raimonda","Raina","T\\\\u0101le"],"27":["Gundega","Ter\\\\u0113ze"],"28":["Laine","Raimonds","Vilnis"],"29":["Li\\\\u0101na","Lilija"]}\', \'{"0":["Ziedonis"],"1":["Sigmunds","Zigismunds","Zigmunds"],"2":["Gints","Uvis"],"3":["Vijol\\\\u012bte","Viola","Vizbul\\\\u012bte"],"4":["\\\\u0122ederts","\\\\u0122irts"],"5":["Didzis","Gaidis"],"6":["Henriete","Henrijs","Jete"],"7":["Sta\\\\u0146islava","Sta\\\\u0146islavs","Stef\\\\u0101nija"],"8":["Ein\\\\u0101rs","Erv\\\\u012bns","Kl\\\\u0101vs"],"9":["Maija","Paija"],"10":["Karmena","Manfreds","Milda"],"11":["Ina","In\\\\u0101ra","In\\\\u0101rs","Valija"],"12":["Ira","Ira\\\\u012bda","Ir\\\\u0113na","Irina"],"13":["Aivita","Elfa","Elvita","Kri\\\\u0161j\\\\u0101nis"],"14":["Airita","Arita","Sofija","Taiga"],"15":["Edijs","Edv\\\\u012bns"],"16":["Dailis","Herberts","Umberts"],"17":["\\\\u0112riks","Inese","Inesis"],"18":["Lita","Sibilla","Teika"],"19":["Salvis","Selva","Venta"],"20":["Akvel\\\\u012bna","Ernest\\\\u012bne","Ingm\\\\u0101rs"],"21":["Em\\\\u012blija"],"22":["Leok\\\\u0101dija","Leont\\\\u012bne","Ligija","Lonija"],"23":["Ilvija","Marl\\\\u0113na","Ziedone"],"24":["An\\\\u0161lavs","Junora"],"25":["Eduards","Edvards","Varis","Edvarts"],"26":["Dzidra","Dzidris","Gunita","Loreta"],"27":["Vilhelms","Vilis"],"28":["Maksis","Raivis","Raivo","Maksims"],"29":["Lolita","Vitolds"],"30":["Al\\\\u012bda","J\\\\u016bsma"]}\', \'{"0":["Berned\\\\u012bne","Biruta","Mairita"],"1":["Emma","L\\\\u012bba"],"2":["Ineta","Inta","Intra"],"3":["Elfr\\\\u012bda","Sindija","Sintija"],"4":["Igors","Ingvars","Margots"],"5":["Ardis","Ingr\\\\u012bda"],"6":["Arnis","Gaida"],"7":["Fr\\\\u012bda","Fr\\\\u012bdis","Mundra"],"8":["Gita","Ligita"],"9":["Anatolijs","Anatols","Malva"],"10":["Ingus","Mairis","Vidvuds"],"11":["Ija","Lenora","Nora"],"12":["Ain\\\\u0101rs","Uva","Zigfr\\\\u012bds"],"13":["Saiva","Saivis","Santis","Sentis","Tija"],"14":["Ba\\\\u0146uta","Vilija","Vits","\\\\u017derm\\\\u0113na"],"15":["Just\\\\u012bne","Juta"],"16":["Artis","Art\\\\u016brs"],"17":["Alberts","Madis"],"18":["Nils","Viktors"],"19":["Maira","Rasa","Rasma"],"20":["Egita","Em\\\\u012bls","Monv\\\\u012bds"],"21":["Laimdots","Laimi\\\\u0146\\\\u0161","Ludmila"],"22":["L\\\\u012bga"],"23":["J\\\\u0101nis"],"24":["Maiga","Milija"],"25":["Ausma","Ausmis","Inguna","Inguns","Ing\\\\u016bna"],"26":["Malvis","Malv\\\\u012bne"],"27":["Kitija","Viestards","Viesturs"],"28":["Paulis","Pauls","P\\\\u0101vils","P\\\\u0113teris"],"29":["Mareks","T\\\\u0101livaldis"]}\', \'{"0":["Imants","Ingars","Intars","Rimants"],"1":["Halina","Ilvars","Lauma"],"2":["Benita","Everita","Verita","Emerita"],"3":["Sandijs","Sandis","Uldis","Ulvis"],"4":["And\\\\u017eejs","And\\\\u017es","Ed\\\\u012bte","Esmeralda"],"5":["Anrijs","Ark\\\\u0101dijs"],"6":["Alda","Maruta"],"7":["Ada","Adele","Antra"],"8":["Asna","Asne","Zaiga"],"9":["Lija","Olivers","Ol\\\\u012bvija","Odrija"],"10":["Leonora","Svens"],"11":["Indri\\\\u0137is","Ints","Namejs"],"12":["Margarita","Margrieta"],"13":["Anvars","Oskars","Ritvars"],"14":["Egija","Egmonts","Egons","Henrihs","Henriks"],"15":["Estere","Herm\\\\u012bne"],"16":["Aleksejs","Aleksis","Alekss"],"17":["Roz\\\\u0101lija","Roze"],"18":["Digna","Jautr\\\\u012bte","Kamila","S\\\\u0101ra"],"19":["Ramona","Ritma"],"20":["Meldra","Meldris","Melisa"],"21":["Marija","Marika","Marina"],"22":["Magda","Magdal\\\\u0113na","Magone","M\\\\u0113rija"],"23":["Krista","Kristi\\\\u0101na","Kristi\\\\u0101ns","Krist\\\\u012bne","Krist\\\\u012bna"],"24":["\\\\u017dakl\\\\u012bna","J\\\\u0113kabs"],"25":["Ance","Anna","Annija"],"26":["Dita","Marta","Dite"],"27":["Cec\\\\u012blija","Cilda"],"28":["Edmunds","Ed\\\\u017eus","Vidmants"],"29":["Ren\\\\u0101rs","Valters","Regn\\\\u0101rs"],"30":["Angelika","Ruta","R\\\\u016bta","Sigita"]}\', \'{"0":["Alb\\\\u012bna","Alb\\\\u012bns"],"1":["Normunds","Stefans"],"2":["Augusts"],"3":["Rom\\\\u0101ns","Romualda","Romualds"],"4":["Arvils","Osvalds"],"5":["Aisma","Askolds"],"6":["Alfr\\\\u0113ds","Fredis","Madars"],"7":["Mud\\\\u012bte","Vladislava","Vladislavs"],"8":["Genoveva","Madara","Genovefa"],"9":["Audris","Brencis","Inuta"],"10":["Liega","Olga","Zigita","Zita"],"11":["Kl\\\\u0101ra","Vizma"],"12":["Elv\\\\u012bra","R\\\\u0113zija","Velga"],"13":["Virma","Zelma","Zemgus"],"14":["Dzelde","Zelda","Zenta"],"15":["Astra","Astr\\\\u012bda"],"16":["O\\\\u013cegs","Vineta"],"17":["Elena","Ellena","Hel\\\\u0113na","Liena","Liene"],"18":["Imanta","Mel\\\\u0101nija"],"19":["Bernhards","Boriss","Rojs"],"20":["Jan\\\\u012bna","Linda"],"21":["Everts","Rud\\\\u012bte"],"22":["Ralfs","Valgudis","Vit\\\\u0101lijs"],"23":["B\\\\u0113rtulis","Bo\\\\u013ceslavs"],"24":["Ivonna","Ludis","Ludvigs","Patr\\\\u012bcija","Patriks"],"25":["Bro\\\\u0146islava","Bro\\\\u0146islavs","Nat\\\\u0101lija","T\\\\u0101lija"],"26":["Alens","Jorens","\\\\u017danis"],"27":["Auguste","Guste"],"28":["Aiga","Arm\\\\u012bns","Vismants"],"29":["Alvis","Jolanta","Samanta"],"30":["Aigars","Vilma"]}\', \'{"0":["Austrums","Ilm\\\\u0101rs","Iluta"],"1":["El\\\\u012bza","Lizete","Zete"],"2":["Bella","Berta"],"3":["Dzintara","Dzintars","Dzintra"],"4":["Klaudija","Persijs","Vaida"],"5":["Magnuss","Maigonis","Mariuss"],"6":["Erm\\\\u012bns","Reg\\\\u012bna"],"7":["Ilga"],"8":["Bruno","Telma"],"9":["Albert\\\\u012bne","Jausma"],"10":["Signe","Signija"],"11":["Erna","Eva","Evita"],"12":["Iza","Izabella"],"13":["Sanda","Sandija","Sanija","Sanita","Santa"],"14":["Gunvaldis","Gunvaris","Sandra","Sondra"],"15":["Asja","Asnate","D\\\\u0101gs"],"16":["Vaira","Vairis","Vera"],"17":["Alita","Elita","Liesma"],"18":["Muntis","Verners"],"19":["Ginters","Guntra","Marianna"],"20":["Mariss","Mat\\\\u012bss","Modris"],"21":["Maigurs","M\\\\u0101rica","M\\\\u0101ris"],"22":["Vanda","Veneranda","Venija"],"23":["Agris","Agrita"],"24":["Rauls","Rodrigo"],"25":["Gundars","Knuts","Kurts"],"26":["\\\\u0100dolfs","Ilgonis"],"27":["Lana","Sergejs","Svetlana"],"28":["Mihails","Miks","Mikus","Mi\\\\u0137elis"],"29":["Elma","Elna","Menarda"]}\', \'{"0":["L\\\\u0101sma","Zanda","Zandis"],"1":["Ilma","Skaidris"],"2":["Elza","Ilizana"],"3":["Dmitrijs","Francis","Modra"],"4":["Am\\\\u0101lija","Am\\\\u0113lija"],"5":["Monika","Zilga","Zilgma"],"6":["Daumants","Druvvaldis"],"7":["Aina","Anete"],"8":["Elga","Elgars","Helga"],"9":["Arvis","Arv\\\\u012bds","Druvis"],"10":["Monta","Silva","Tince"],"11":["Kira","Valfr\\\\u012bds"],"12":["Irma","Mirga"],"13":["Minna","Vilhelm\\\\u012bne"],"14":["Eda","Hedviga","Helvijs"],"15":["Daiga","Dinija","Din\\\\u0101rs"],"16":["Gaitis","Gaits","Kar\\\\u012bna"],"17":["Erlends","Rolanda","Rolands","Ronalds"],"18":["Drosma","Drosmis","El\\\\u012bna"],"19":["Leon\\\\u012bda","Leon\\\\u012bds"],"20":["Sever\\\\u012bns","Urzula"],"21":["Airisa","Ir\\\\u012bda","\\\\u012arisa"],"22":["Daina","Dainida","Dainis"],"23":["Modr\\\\u012bte","Mudr\\\\u012bte","Ren\\\\u0101te"],"24":["Beatrise","Be\\\\u0101te"],"25":["Amanda","Amanta","Kaiva"],"26":["Irita","Ita","Lilita"],"27":["Anto\\\\u0146ina","Ninona","\\\\u0145ina","Oksana"],"28":["Elva","Elvijs","Elvis","Laimis","Laimonis"],"29":["Ad\\\\u012bna","Nad\\\\u012bna","Ulla"],"30":["Rinalda","Rinalds","Valts"]}\', \'{"0":["Ikars"],"1":["Dz\\\\u012ble","Viva","Vivita"],"2":["Dagnija","\\\\u0112rika"],"3":["Atis","Oto","Otom\\\\u0101rs"],"4":["Lote","\\\\u0160arlote"],"5":["Leo","Leonarda","Leonards","Leons","Linards"],"6":["Helma","Lot\\\\u0101rs"],"7":["Agra","Aleksandra"],"8":["Teodors"],"9":["Markuss","M\\\\u0101rcis","M\\\\u0101rti\\\\u0146\\\\u0161","Marks"],"10":["Nellija","Oj\\\\u0101rs","Rainers"],"11":["Kaija","Korn\\\\u0113lija"],"12":["Ei\\\\u017eens","Jevg\\\\u0113\\\\u0146ija","Jevg\\\\u0113\\\\u0146ijs"],"13":["Fricis","Vikentijs","Vincents"],"14":["Leopolds","Unda","Und\\\\u012bne"],"15":["Banga","Glorija"],"16":["Hugo","Uga","U\\\\u0123is"],"17":["Aleksandrs","Doloresa"],"18":["Betija","Elizabete","Liza","L\\\\u012bze"],"19":["Anda","And\\\\u012bna"],"20":["Andis","Zelt\\\\u012bte"],"21":["Aldis","Aldris","Alfons"],"22":["Zigfr\\\\u012bda","Zigr\\\\u012bda","Zigr\\\\u012bds"],"23":["Velda","Velta"],"24":["Kadrija","Kate","Katr\\\\u012bna","Katr\\\\u012bne","Tr\\\\u012bne"],"25":["Konr\\\\u0101ds","Sebastians","Sebastijans"],"26":["Lauris","Norberts"],"27":["Olita","Rita","Vita"],"28":["Ignats","Virg\\\\u012bnija"],"29":["Andrejs","Andrievs","Andris"]}\', \'{"0":["Arnolds","Emanuels"],"1":["Meta","Sniedze"],"2":["Evija","Jogita","Raita"],"3":["Baiba","Barba","Barbara"],"4":["Klaudijs","Sab\\\\u012bne","Sarma"],"5":["Nikl\\\\u0101vs","Nikolajs","Niks","Nikola"],"6":["Anta","Antonija","Dzirkst\\\\u012bte"],"7":["Gun\\\\u0101rs","Gunis","Vladimirs"],"8":["Tabita","Sarm\\\\u012bte"],"9":["Guna","Jud\\\\u012bte"],"10":["Valdem\\\\u0101rs","Valdis","Voldem\\\\u0101rs"],"11":["Iveta","Ot\\\\u012blija"],"12":["L\\\\u016bcija","Veldze"],"13":["Auseklis","Gaisma"],"14":["Hanna","Jana","Johanna"],"15":["Alv\\\\u012bne"],"16":["Hilda","Teiksma"],"17":["Klinta","Kristaps","Kristers","Kristofers","Krists"],"18":["Lelde","Sarmis"],"19":["Arta","Minjona"],"20":["Saulcer\\\\u012bte","Tomass","Toms"],"21":["Saulvedis"],"22":["Balva","Viktorija"],"23":["\\\\u0100dams","Ieva"],"24":["Larisa","Stella"],"25":["Dainuv\\\\u012bte","Gija","Megija"],"26":["Elm\\\\u0101rs","Helm\\\\u0101rs","Inita"],"27":["Inga","Ingeborga","Irvita","Ivita"],"28":["Ilgona","Solveiga"],"29":["Daniela","Daniels","D\\\\u0101niels","D\\\\u0101vids","D\\\\u0101vis"],"30":["Kalvis","Silvestrs","Silvis"]}\']',
       'public' => true,
       'private' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'today',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @var string
     */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
        ),
      )),
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => false,
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => '__construct',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Services\\NetworkGather.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\NetworkGather',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'curl',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @var resource
     */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
        ),
      )),
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'init',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'self',
       'parameters' => 
      array (
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'setUrl',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'self',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'url',
           'type' => 'string',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'setHeaders',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @return $this
     */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'self',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'headers',
           'type' => 'array',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    5 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'getData',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
      ),
    )),
    6 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'withTransfer',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'self',
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Services\\RSSFeed.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\RSSFeed',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Traits\\CacheTrait',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'news',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @var array<int>|null
     */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
          'cachetrait' => 'App\\Traits\\CacheTrait',
        ),
      )),
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'network',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @var NetworkGather
     */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
          'cachetrait' => 'App\\Traits\\CacheTrait',
        ),
      )),
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => false,
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => '__construct',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'network',
           'type' => 'App\\Services\\NetworkGather',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'getNewsItems',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
      ),
    )),
    5 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'getNews',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'void',
       'parameters' => 
      array (
      ),
    )),
    6 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'createReadableData',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'source',
           'type' => 'SimpleXMLElement',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Services\\TwitterConnect.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\TwitterConnect',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Traits\\CacheTrait',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'tweets',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @var array<int>|null
     */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
          'twitter' => 'App\\Models\\Twitter',
          'cachetrait' => 'App\\Traits\\CacheTrait',
        ),
      )),
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'network',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @var NetworkGather
     */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
          'twitter' => 'App\\Models\\Twitter',
          'cachetrait' => 'App\\Traits\\CacheTrait',
        ),
      )),
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => false,
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => '__construct',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'network',
           'type' => 'App\\Services\\NetworkGather',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'getTweetHtml',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'string',
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'user',
           'type' => 'string',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    5 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'getTweets',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @return mixed
     */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
          'twitter' => 'App\\Models\\Twitter',
          'cachetrait' => 'App\\Traits\\CacheTrait',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'user',
           'type' => 'string',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    6 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'getItems',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => 'array',
       'parameters' => 
      array (
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Services\\Weather.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Weather',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'App\\Traits\\CacheTrait',
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'weatherData',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @var object|null
     */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
          'cachetrait' => 'App\\Traits\\CacheTrait',
        ),
      )),
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'network',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @var NetworkGather
     */',
         'namespace' => 'App\\Services',
         'uses' => 
        array (
          'cachetrait' => 'App\\Traits\\CacheTrait',
        ),
      )),
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => false,
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => '__construct',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'network',
           'type' => 'App\\Services\\NetworkGather',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  'C:\\wamp64\\www\\app\\Traits\\CacheTrait.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'traitName' => 'App\\Traits\\CacheTrait',
    )),
  ),
); },
];