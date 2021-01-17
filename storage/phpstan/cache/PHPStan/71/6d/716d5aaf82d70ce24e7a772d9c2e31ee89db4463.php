<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php-1610491703,C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Concerns\\BuildsQueries.php-1610491702,C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships.php-1610491703,C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Concerns\\ExplainsQueries.php-1610491702,C:\\wamp64\\www\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\ForwardsCalls.php-1610491710',
   'data' => 
  array (
    '409121c0aab57fe23d344d4e289cae37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @property-read HigherOrderBuilderProxy $orWhere
 *
 * @mixin \\Illuminate\\Database\\Query\\Builder
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa2609488af2ad16805b6068f36f7a53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Chunk the results of the query.
     *
     * @param  int  $count
     * @param  callable  $callback
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'chunk',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '476a911a52c87aa1ce900daefa383d9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Execute a callback over each item while chunking.
     *
     * @param  callable  $callback
     * @param  int  $count
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'each',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d4c2d6fce03452a539532f361293402' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Chunk the results of a query by comparing IDs.
     *
     * @param  int  $count
     * @param  callable  $callback
     * @param  string|null  $column
     * @param  string|null  $alias
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'chunkById',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd42cf0226faa5f282dcf52453f281084' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Execute a callback over each item while chunking by ID.
     *
     * @param  callable  $callback
     * @param  int  $count
     * @param  string|null  $column
     * @param  string|null  $alias
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'eachById',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1b94a3ed93564fee822cd2a2b495b7cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Execute the query and get the first result.
     *
     * @param  array|string  $columns
     * @return \\Illuminate\\Database\\Eloquent\\Model|object|static|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'first',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e570e3cb9520963084080ebe26c7f36f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Apply the callback\'s query changes if the given "value" is true.
     *
     * @param  mixed  $value
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return mixed|$this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'when',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ad5ef73e87390eb64d7cb6e78c08ba68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Pass the query to a given callback.
     *
     * @param  callable  $callback
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'tap',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '619d300f7b8abe21688aa2dd7b6d2799' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Apply the callback\'s query changes if the given "value" is false.
     *
     * @param  mixed  $value
     * @param  callable  $callback
     * @param  callable|null  $default
     * @return mixed|$this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'unless',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6960c5da82e5ec418b837a1f11e32c77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new length-aware paginator instance.
     *
     * @param  \\Illuminate\\Support\\Collection  $items
     * @param  int  $total
     * @param  int  $perPage
     * @param  int  $currentPage
     * @param  array  $options
     * @return \\Illuminate\\Pagination\\LengthAwarePaginator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'paginator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6881cd6ae57c6260a985c45e12f2d301' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new simple paginator instance.
     *
     * @param  \\Illuminate\\Support\\Collection  $items
     * @param  int  $perPage
     * @param  int  $currentPage
     * @param  array  $options
     * @return \\Illuminate\\Pagination\\Paginator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'simplePaginator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '43ef9a4a75c5f250ac362a066fae971d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a relationship count / exists condition to the query.
     *
     * @param  \\Illuminate\\Database\\Eloquent\\Relations\\Relation|string  $relation
     * @param  string  $operator
     * @param  int  $count
     * @param  string  $boolean
     * @param  \\Closure|null  $callback
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     *
     * @throws \\RuntimeException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'has',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b5af149b7dcedd0bab9b80b1ae104565' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add nested relationship count / exists conditions to the query.
     *
     * Sets up recursive call to whereHas until we finish the nested relation.
     *
     * @param  string  $relations
     * @param  string  $operator
     * @param  int  $count
     * @param  string  $boolean
     * @param  \\Closure|null  $callback
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'hasNested',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9b819108d09f5629cef2fcb7b9dbf8cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a relationship count / exists condition to the query with an "or".
     *
     * @param  string  $relation
     * @param  string  $operator
     * @param  int  $count
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orHas',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a047ea44f7e5570a0f5cd31d3d9b311e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a relationship count / exists condition to the query.
     *
     * @param  string  $relation
     * @param  string  $boolean
     * @param  \\Closure|null  $callback
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'doesntHave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e1cc1acf02111b734c8f85ca9d9ebf43' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a relationship count / exists condition to the query with an "or".
     *
     * @param  string  $relation
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orDoesntHave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b25bb37bd17f3c367bad02d18e6af4ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a relationship count / exists condition to the query with where clauses.
     *
     * @param  string  $relation
     * @param  \\Closure|null  $callback
     * @param  string  $operator
     * @param  int  $count
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereHas',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7a28c20e1f400885d82af206faa4b78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a relationship count / exists condition to the query with where clauses and an "or".
     *
     * @param  string  $relation
     * @param  \\Closure|null  $callback
     * @param  string  $operator
     * @param  int  $count
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereHas',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aba8b3486c5fc1d6c9c0226ec16a94fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a relationship count / exists condition to the query with where clauses.
     *
     * @param  string  $relation
     * @param  \\Closure|null  $callback
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereDoesntHave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd4d65cba4bc087dae4e383f4091ed351' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a relationship count / exists condition to the query with where clauses and an "or".
     *
     * @param  string  $relation
     * @param  \\Closure|null  $callback
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereDoesntHave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '20bc85661f08cde775681d1a890ac3b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a polymorphic relationship count / exists condition to the query.
     *
     * @param  \\Illuminate\\Database\\Eloquent\\Relations\\MorphTo|string  $relation
     * @param  string|array  $types
     * @param  string  $operator
     * @param  int  $count
     * @param  string  $boolean
     * @param  \\Closure|null  $callback
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'hasMorph',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '25d9316c25e2cde67b8077419d916e00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the BelongsTo relationship for a single polymorphic type.
     *
     * @param  \\Illuminate\\Database\\Eloquent\\Relations\\MorphTo  $relation
     * @param  string  $type
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getBelongsToRelation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f21985ccb35a4a18f45a2dcb078dfddc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a polymorphic relationship count / exists condition to the query with an "or".
     *
     * @param  \\Illuminate\\Database\\Eloquent\\Relations\\MorphTo|string  $relation
     * @param  string|array  $types
     * @param  string  $operator
     * @param  int  $count
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orHasMorph',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '28b529ba5b53ea48273c908da73f4f03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a polymorphic relationship count / exists condition to the query.
     *
     * @param  \\Illuminate\\Database\\Eloquent\\Relations\\MorphTo|string  $relation
     * @param  string|array  $types
     * @param  string  $boolean
     * @param  \\Closure|null  $callback
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'doesntHaveMorph',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ababc43346caa2febdeea34fceab2feb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a polymorphic relationship count / exists condition to the query with an "or".
     *
     * @param  \\Illuminate\\Database\\Eloquent\\Relations\\MorphTo|string  $relation
     * @param  string|array  $types
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orDoesntHaveMorph',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '531396ba0ae460942bd797e75869bda0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a polymorphic relationship count / exists condition to the query with where clauses.
     *
     * @param  \\Illuminate\\Database\\Eloquent\\Relations\\MorphTo|string  $relation
     * @param  string|array  $types
     * @param  \\Closure|null  $callback
     * @param  string  $operator
     * @param  int  $count
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereHasMorph',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5dd115798aef8bd8740b5a879d486a6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a polymorphic relationship count / exists condition to the query with where clauses and an "or".
     *
     * @param  \\Illuminate\\Database\\Eloquent\\Relations\\MorphTo|string  $relation
     * @param  string|array  $types
     * @param  \\Closure|null  $callback
     * @param  string  $operator
     * @param  int  $count
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereHasMorph',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd6cf80d01b88502ff6add7e384c19b28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a polymorphic relationship count / exists condition to the query with where clauses.
     *
     * @param  \\Illuminate\\Database\\Eloquent\\Relations\\MorphTo|string  $relation
     * @param  string|array  $types
     * @param  \\Closure|null  $callback
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereDoesntHaveMorph',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c86cc828570a4d195444965e5490e3ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a polymorphic relationship count / exists condition to the query with where clauses and an "or".
     *
     * @param  \\Illuminate\\Database\\Eloquent\\Relations\\MorphTo|string  $relation
     * @param  string|array  $types
     * @param  \\Closure|null  $callback
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereDoesntHaveMorph',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a773a05fb34960e6c32a7ce3375365f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add subselect queries to include an aggregate value for a relationship.
     *
     * @param  mixed  $relations
     * @param  string  $column
     * @param  string  $function
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withAggregate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '91ac6f91fb415cd94bbf1f0ef43c2944' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add subselect queries to count the relations.
     *
     * @param  mixed  $relations
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f649849e2cdc0dabfb97562368662d25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add subselect queries to include the max of the relation\'s column.
     *
     * @param  string|array  $relation
     * @param  string  $column
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withMax',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd1bebe6944fdfbba81531f4edeb7e2af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add subselect queries to include the min of the relation\'s column.
     *
     * @param  string|array  $relation
     * @param  string  $column
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withMin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ffb89e29827bdee8f5a423139b3e16e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add subselect queries to include the sum of the relation\'s column.
     *
     * @param  string|array  $relation
     * @param  string  $column
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withSum',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83a0cb1a0624bac3afb4036ecb5af6eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add subselect queries to include the average of the relation\'s column.
     *
     * @param  string|array  $relation
     * @param  string  $column
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withAvg',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d1f31068068fa20eb881fbc889ff0ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add the "has" condition where clause to the query.
     *
     * @param  \\Illuminate\\Database\\Eloquent\\Builder  $hasQuery
     * @param  \\Illuminate\\Database\\Eloquent\\Relations\\Relation  $relation
     * @param  string  $operator
     * @param  int  $count
     * @param  string  $boolean
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'addHasWhere',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ac085ec56119338e6d88870e5d6e8d5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Merge the where constraints from another query to the current query.
     *
     * @param  \\Illuminate\\Database\\Eloquent\\Builder  $from
     * @return \\Illuminate\\Database\\Eloquent\\Builder|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'mergeConstraintsFrom',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c1a015bae82a4b10954ad51ad3b2c601' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a sub-query count clause to this query.
     *
     * @param  \\Illuminate\\Database\\Query\\Builder  $query
     * @param  string  $operator
     * @param  int  $count
     * @param  string  $boolean
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'addWhereCountQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c6c18632ddb1522fc15c6b1b6156e40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the "has relation" base query instance.
     *
     * @param  string  $relation
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\Relation
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getRelationWithoutConstraints',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '13302be83f17952b7ca8cdda2e19e344' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Check if we can run an "exists" query to optimize performance.
     *
     * @param  string  $operator
     * @param  int  $count
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'canUseExistsForExistenceCheck',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd60836dcee3f658d7490f33738b8d5bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Explains the query.
     *
     * @return \\Illuminate\\Support\\Collection
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'collection' => 'Illuminate\\Support\\Collection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'explain',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9adf911894fbb539f8f017a3fe97eeb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Forward a method call to the given object.
     *
     * @param  mixed  $object
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     *
     * @throws \\BadMethodCallException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'error' => 'Error',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'forwardCallTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83c7eac2386e9af8f7998d4f8e736b18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Throw a bad method call exception for the given method.
     *
     * @param  string  $method
     * @return void
     *
     * @throws \\BadMethodCallException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'error' => 'Error',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'throwBadMethodCallException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea182132e16c03022e548885a2821240' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The base query builder instance.
     *
     * @var \\Illuminate\\Database\\Query\\Builder
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '480338b1914bf254f64dfa357decfa22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The model being queried.
     *
     * @var \\Illuminate\\Database\\Eloquent\\Model
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e3a70319a27efb39d8fb8f605412721a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The relationships that should be eager loaded.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ebb6041e2c1b6eddb10b755cd3d2b70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * All of the globally registered builder macros.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '555e5da30785fed0f0d8f3faf08753d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * All of the locally registered builder macros.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3145f3d77a402a8d8ef68538a28666c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * A replacement for the typical delete function.
     *
     * @var \\Closure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '00ad5b1b9f1de04461f23d710f9e3efa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The methods that should be returned from query builder.
     *
     * @var string[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4856234a5ce4c94ac91dca4283a6c2bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Applied global scopes.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f829cc223e41ebcdc384b0aee80b90ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Removed global scopes.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd485bdf649cf4eb5aa13993341e3810a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new Eloquent query builder instance.
     *
     * @param  \\Illuminate\\Database\\Query\\Builder  $query
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3aeaf04d2fb1c7ebf2f025ea028e0c87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create and return an un-saved model instance.
     *
     * @param  array  $attributes
     * @return \\Illuminate\\Database\\Eloquent\\Model|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'make',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d944d9b86852fe170800d9159f49ab1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Register a new global scope.
     *
     * @param  string  $identifier
     * @param  \\Illuminate\\Database\\Eloquent\\Scope|\\Closure  $scope
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withGlobalScope',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '976c3980d8da206bdceb472cfdeb69a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Remove a registered global scope.
     *
     * @param  \\Illuminate\\Database\\Eloquent\\Scope|string  $scope
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withoutGlobalScope',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ece80579881607e5a0b2040c5b08502f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Remove all or passed registered global scopes.
     *
     * @param  array|null  $scopes
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withoutGlobalScopes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e333c03ab5f2359ead83e0cb1da55cab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get an array of global scopes that were removed from the query.
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'removedScopes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97b79293ca3bd25009541af5c11cb7f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a where clause on the primary key to the query.
     *
     * @param  mixed  $id
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8eb0dcd3bc9dbbfa40b2de5c12a41acf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a where clause on the primary key to the query.
     *
     * @param  mixed  $id
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereKeyNot',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab266575c9790ec4748cbd20257038ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a basic where clause to the query.
     *
     * @param  \\Closure|string|array|\\Illuminate\\Database\\Query\\Expression  $column
     * @param  mixed  $operator
     * @param  mixed  $value
     * @param  string  $boolean
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'where',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5f244d3dddb6a882dd1daf775b1209d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a basic where clause to the query, and return the first result.
     *
     * @param  \\Closure|string|array|\\Illuminate\\Database\\Query\\Expression  $column
     * @param  mixed  $operator
     * @param  mixed  $value
     * @param  string  $boolean
     * @return \\Illuminate\\Database\\Eloquent\\Model|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'firstWhere',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1885bf8481d29e4563c6094b71684e05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add an "or where" clause to the query.
     *
     * @param  \\Closure|array|string|\\Illuminate\\Database\\Query\\Expression  $column
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhere',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '433ca340a87c4aaba647500b478a235e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add an "order by" clause for a timestamp to the query.
     *
     * @param  string|\\Illuminate\\Database\\Query\\Expression  $column
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'latest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7ba41b538959523e6173713805fcaee3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add an "order by" clause for a timestamp to the query.
     *
     * @param  string|\\Illuminate\\Database\\Query\\Expression  $column
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'oldest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c4a0d6a2bfe281d50a4491070c2bbdba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a collection of models from plain arrays.
     *
     * @param  array  $items
     * @return \\Illuminate\\Database\\Eloquent\\Collection
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'hydrate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '86989fb9f09ff4cfa5799899ca6069fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a collection of models from a raw query.
     *
     * @param  string  $query
     * @param  array  $bindings
     * @return \\Illuminate\\Database\\Eloquent\\Collection
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'fromQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '980a89e2c0c0ebdc3d670b8d8de51569' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Find a model by its primary key.
     *
     * @param  mixed  $id
     * @param  array  $columns
     * @return \\Illuminate\\Database\\Eloquent\\Model|\\Illuminate\\Database\\Eloquent\\Collection|static[]|static|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'find',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ddb5e5f58f00fc6ac3b745e1cfd2c250' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Find multiple models by their primary keys.
     *
     * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $ids
     * @param  array  $columns
     * @return \\Illuminate\\Database\\Eloquent\\Collection
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'findMany',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '189cec622889a46b22d45873033f8cf2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Find a model by its primary key or throw an exception.
     *
     * @param  mixed  $id
     * @param  array  $columns
     * @return \\Illuminate\\Database\\Eloquent\\Model|\\Illuminate\\Database\\Eloquent\\Collection|static|static[]
     *
     * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'findOrFail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '937c886d009d4fb76e3eeee39c24490a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Find a model by its primary key or return fresh model instance.
     *
     * @param  mixed  $id
     * @param  array  $columns
     * @return \\Illuminate\\Database\\Eloquent\\Model|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'findOrNew',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'edf7ca070bcfa9f2af48a6b5455ecac2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the first record matching the attributes or instantiate it.
     *
     * @param  array  $attributes
     * @param  array  $values
     * @return \\Illuminate\\Database\\Eloquent\\Model|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'firstOrNew',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4bc5f2d10b8a7d9dff1d6d258d0ee17c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the first record matching the attributes or create it.
     *
     * @param  array  $attributes
     * @param  array  $values
     * @return \\Illuminate\\Database\\Eloquent\\Model|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'firstOrCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7d77b473b80aca3d86423047af6dba9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create or update a record matching the attributes, and fill it with values.
     *
     * @param  array  $attributes
     * @param  array  $values
     * @return \\Illuminate\\Database\\Eloquent\\Model|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'updateOrCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c5d7e9f91e4d94a0abb54efcec99e3f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Execute the query and get the first result or throw an exception.
     *
     * @param  array  $columns
     * @return \\Illuminate\\Database\\Eloquent\\Model|static
     *
     * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'firstOrFail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e0b7a46ace0794618a162688b5f0562c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Execute the query and get the first result or call a callback.
     *
     * @param  \\Closure|array  $columns
     * @param  \\Closure|null  $callback
     * @return \\Illuminate\\Database\\Eloquent\\Model|static|mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'firstOr',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9fcc21ca5b6aacdead45f4d8d1aa4c29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get a single column\'s value from the first result of a query.
     *
     * @param  string|\\Illuminate\\Database\\Query\\Expression  $column
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'value',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50b196bb830849f5c32cccd24b31e801' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Execute the query as a "select" statement.
     *
     * @param  array|string  $columns
     * @return \\Illuminate\\Database\\Eloquent\\Collection|static[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '46862d2d61b799e0bb2973f50c657276' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the hydrated models without eager loading.
     *
     * @param  array|string  $columns
     * @return \\Illuminate\\Database\\Eloquent\\Model[]|static[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getModels',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f551e313e0d39f639ed265782db8574f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Eager load the relationships for the models.
     *
     * @param  array  $models
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'eagerLoadRelations',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8e130fb377d259d904c4c13db14a03be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Eagerly load the relationship on a set of models.
     *
     * @param  array  $models
     * @param  string  $name
     * @param  \\Closure  $constraints
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'eagerLoadRelation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5efa1fb8672053ab3214f6c63c019edc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the relation instance for the given relation name.
     *
     * @param  string  $name
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\Relation
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getRelation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eac796b2765a48fae6180f6226a45997' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the deeply nested relations for a given top-level relation.
     *
     * @param  string  $relation
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'relationsNestedUnder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b064b64a0f178d05951c176e06423d08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determine if the relationship is nested.
     *
     * @param  string  $relation
     * @param  string  $name
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'isNestedUnder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '76ba8e80fc5dffddb1e5533823241f71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get a lazy collection for the given query.
     *
     * @return \\Illuminate\\Support\\LazyCollection
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'cursor',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e1aa558c7b9b1db1cc46778c433155f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a generic "order by" clause if the query doesn\'t already have one.
     *
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'enforceOrderBy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3c8bd959c27d18072a3df71317287e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get an array with the values of a given column.
     *
     * @param  string|\\Illuminate\\Database\\Query\\Expression  $column
     * @param  string|null  $key
     * @return \\Illuminate\\Support\\Collection
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'pluck',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7eb66c38c4bb181d0de92424addc6bef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Paginate the given query.
     *
     * @param  int|null  $perPage
     * @param  array  $columns
     * @param  string  $pageName
     * @param  int|null  $page
     * @return \\Illuminate\\Contracts\\Pagination\\LengthAwarePaginator
     *
     * @throws \\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'paginate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3f32783c415bcae181d7689c41ff5f87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Paginate the given query into a simple paginator.
     *
     * @param  int|null  $perPage
     * @param  array  $columns
     * @param  string  $pageName
     * @param  int|null  $page
     * @return \\Illuminate\\Contracts\\Pagination\\Paginator
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'simplePaginate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9863f10403107b9ef22825460641400' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Save a new model and return the instance.
     *
     * @param  array  $attributes
     * @return \\Illuminate\\Database\\Eloquent\\Model|$this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6251891809fcd6d811a1b72d0d323548' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Save a new model and return the instance. Allow mass-assignment.
     *
     * @param  array  $attributes
     * @return \\Illuminate\\Database\\Eloquent\\Model|$this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'forceCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4759791bbcd56e172ad240eb2c89e518' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Update records in the database.
     *
     * @param  array  $values
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'update',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a774a4655406969f20eb81a44c04536' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Insert new records or update the existing ones.
     *
     * @param  array  $values
     * @param  array|string  $uniqueBy
     * @param  array|null  $update
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'upsert',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b7eeb0c9845631cfefb61f1b9fb66ad7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Increment a column\'s value by a given amount.
     *
     * @param  string|\\Illuminate\\Database\\Query\\Expression  $column
     * @param  float|int  $amount
     * @param  array  $extra
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'increment',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e4efa23d9cd152d2435ce496ef2b1222' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Decrement a column\'s value by a given amount.
     *
     * @param  string|\\Illuminate\\Database\\Query\\Expression  $column
     * @param  float|int  $amount
     * @param  array  $extra
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'decrement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35abf015fb83bc9024f2934a6275ac8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add the "updated at" column to an array of values.
     *
     * @param  array  $values
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'addUpdatedAtColumn',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f7319bef45bc6b89988199a9d61478b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add timestamps to the inserted values.
     *
     * @param  array  $values
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'addTimestampsToUpsertValues',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '45cbd11ede76774b3dd4f7383e4ead54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add the "updated at" column to the updated columns.
     *
     * @param  array  $update
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'addUpdatedAtToUpsertColumns',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '41549dcde46990de529828d2366b6180' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Delete records from the database.
     *
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'delete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f0d8154ab91b5ec919920c3d32accc32' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Run the default delete function on the builder.
     *
     * Since we do not apply scopes here, the row will actually be deleted.
     *
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'forceDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '096c8e6f43ab21dc3d07a08c6b2775d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Register a replacement for the default delete function.
     *
     * @param  \\Closure  $callback
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'onDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3499af8b41a9d387f3d8fc2e521e9c81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determine if the given model has a scope.
     *
     * @param  string  $scope
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'hasNamedScope',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '92c5c11b6a26a32d58a84b69742a18b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Call the given local model scopes.
     *
     * @param  array|string  $scopes
     * @return static|mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'scopes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'edf594bd77350575ea382fd43df37e45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Apply the scopes to the Eloquent builder instance and return it.
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'applyScopes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fcf4500738948c9c86eb4f1de5120dd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Apply the given scope on the current builder instance.
     *
     * @param  callable  $scope
     * @param  array  $parameters
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'callScope',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dcd51d75e838ab3881e2febf5be6009d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Apply the given named scope on the current builder instance.
     *
     * @param  string  $scope
     * @param  array  $parameters
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'callNamedScope',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d74aae87ed3e387c4c2c55eef3af4ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Nest where conditions by slicing them at the given where count.
     *
     * @param  \\Illuminate\\Database\\Query\\Builder  $query
     * @param  int  $originalWhereCount
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'addNewWheresWithinGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4d7868e3d647c879c4c63794fdb93bd3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Slice where conditions at the given offset and add them to the query as a nested condition.
     *
     * @param  \\Illuminate\\Database\\Query\\Builder  $query
     * @param  array  $whereSlice
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'groupWhereSliceForScope',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7e93ba892e32a60175ce062a8fc2456f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a where array with nested where conditions.
     *
     * @param  array  $whereSlice
     * @param  string  $boolean
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'createNestedWhere',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b934a12a90f0283cec9760263fbf855d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Set the relationships that should be eager loaded.
     *
     * @param  string|array  $relations
     * @param  string|\\Closure|null  $callback
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'with',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd04dc78925af6ae430893e1d9bbd8821' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Prevent the specified relations from being eager loaded.
     *
     * @param  mixed  $relations
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'without',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '96023ae5d4f111586021755d24467383' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new instance of the model being queried.
     *
     * @param  array  $attributes
     * @return \\Illuminate\\Database\\Eloquent\\Model|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'newModelInstance',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3df5d302b341deee64eaae944b9d7b0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Parse a list of relations into individuals.
     *
     * @param  array  $relations
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'parseWithRelations',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9bba32d8127fd0cf734d1df8c4f16bb3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a constraint to select the given columns for the relation.
     *
     * @param  string  $name
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'createSelectWithConstraint',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eb1be4d56cb48bc3c6204e979a8dc153' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Parse the nested relationships in a relation.
     *
     * @param  string  $name
     * @param  array  $results
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'addNestedWiths',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50082e9e6f488c546a95ccf1ce6a62ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Apply query-time casts to the model instance.
     *
     * @param  array  $casts
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withCasts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fd792d73c8a69df06d29319d28151916' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the underlying query builder instance.
     *
     * @return \\Illuminate\\Database\\Query\\Builder
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '16427138d9a1f431614b99d1c7754dca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Set the underlying query builder instance.
     *
     * @param  \\Illuminate\\Database\\Query\\Builder  $query
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'setQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '53ae045d521a6dbf9815249f7cf2b9b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get a base query builder instance.
     *
     * @return \\Illuminate\\Database\\Query\\Builder
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'toBase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '29d1ad374bf92dda618957636f871cd6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the relationships being eagerly loaded.
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getEagerLoads',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1aae72e78bdaa4a6c85f9ac0901c7e61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Set the relationships being eagerly loaded.
     *
     * @param  array  $eagerLoad
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'setEagerLoads',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d04d16f78a7eb3bcd740728d15b9c44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the default key name of the table.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'defaultKeyName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa198a3403f21a19e24d18ec7b6f67e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the model instance being queried.
     *
     * @return \\Illuminate\\Database\\Eloquent\\Model|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getModel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a343d7a9f5e26e4b99dbae387104cb13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Set a model instance for the model being queried.
     *
     * @param  \\Illuminate\\Database\\Eloquent\\Model  $model
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'setModel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '35273fe3081e93962dbdd9e71072592e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Qualify the given column name by the model\'s table.
     *
     * @param  string|\\Illuminate\\Database\\Query\\Expression  $column
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'qualifyColumn',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7653e954862385b926adf43a74046345' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the given macro by name.
     *
     * @param  string  $name
     * @return \\Closure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getMacro',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab699e8076aa698aae72dca6c474c98e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if a macro is registered.
     *
     * @param  string  $name
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'hasMacro',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5124073a362157f356e9afb8026c6c79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the given global macro by name.
     *
     * @param  string  $name
     * @return \\Closure
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getGlobalMacro',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ab9737d366bf9fd7ee05a4a0f30cddad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if a global macro is registered.
     *
     * @param  string  $name
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'hasGlobalMacro',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '850290977bffa0a432e6a0a8e0ed4663' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Dynamically access builder proxies.
     *
     * @param  string  $key
     * @return mixed
     *
     * @throws \\Exception
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => '__get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0a07f0f4e02c3dc5b4a94d40c54b6583' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Dynamically handle calls into the query instance.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => '__call',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9e43ee46d43370339edf9e8d8b8dd90b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Dynamically handle calls into the query instance.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     *
     * @throws \\BadMethodCallException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => '__callStatic',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '811460fbca8a4a9bae13184d96e57a55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Register the given mixin with the builder.
     *
     * @param  string  $mixin
     * @param  bool  $replace
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'registerMixin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aeb35b85a6127687d915ddd1a930f13c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Force a clone of the underlying query builder when cloning.
     *
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'explainsqueries' => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => '__clone',
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