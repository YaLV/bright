<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\nesbot\\carbon\\src\\Carbon\\Traits\\Comparison.php-1610491694',
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
    'a0f4572a1198d2e44d9f1b83a989b9fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait Comparison.
 *
 * Comparison utils and testers. All the following methods return booleans.
 * nowWithSameTz
 *
 * Depends on the following methods:
 *
 * @method static        resolveCarbon($date)
 * @method static        copy()
 * @method static        nowWithSameTz()
 * @method static static yesterday($timezone = null)
 * @method static static tomorrow($timezone = null)
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94afaa4542c3cba664477c618d3704b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is equal to another
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25 12:45:16\')->eq(\'2018-07-25 12:45:16\'); // true
     * Carbon::parse(\'2018-07-25 12:45:16\')->eq(Carbon::parse(\'2018-07-25 12:45:16\')); // true
     * Carbon::parse(\'2018-07-25 12:45:16\')->eq(\'2018-07-25 12:45:17\'); // false
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @see equalTo()
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'eq',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81d100b7d73059fa222119614d915b35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is equal to another
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25 12:45:16\')->equalTo(\'2018-07-25 12:45:16\'); // true
     * Carbon::parse(\'2018-07-25 12:45:16\')->equalTo(Carbon::parse(\'2018-07-25 12:45:16\')); // true
     * Carbon::parse(\'2018-07-25 12:45:16\')->equalTo(\'2018-07-25 12:45:17\'); // false
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'equalTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a8eee72c109f36227b498218b5d633f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is not equal to another
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25 12:45:16\')->ne(\'2018-07-25 12:45:16\'); // false
     * Carbon::parse(\'2018-07-25 12:45:16\')->ne(Carbon::parse(\'2018-07-25 12:45:16\')); // false
     * Carbon::parse(\'2018-07-25 12:45:16\')->ne(\'2018-07-25 12:45:17\'); // true
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @see notEqualTo()
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'ne',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5a22b44451b371ea74c850f07540475d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is not equal to another
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25 12:45:16\')->notEqualTo(\'2018-07-25 12:45:16\'); // false
     * Carbon::parse(\'2018-07-25 12:45:16\')->notEqualTo(Carbon::parse(\'2018-07-25 12:45:16\')); // false
     * Carbon::parse(\'2018-07-25 12:45:16\')->notEqualTo(\'2018-07-25 12:45:17\'); // true
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'notEqualTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5853b1a938305b46fa46bf9e91c08e28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is greater (after) than another
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25 12:45:16\')->gt(\'2018-07-25 12:45:15\'); // true
     * Carbon::parse(\'2018-07-25 12:45:16\')->gt(\'2018-07-25 12:45:16\'); // false
     * Carbon::parse(\'2018-07-25 12:45:16\')->gt(\'2018-07-25 12:45:17\'); // false
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @see greaterThan()
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'gt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94efc8987117ed80127791e83287476f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is greater (after) than another
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThan(\'2018-07-25 12:45:15\'); // true
     * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThan(\'2018-07-25 12:45:16\'); // false
     * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThan(\'2018-07-25 12:45:17\'); // false
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'greaterThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '56478941eb21eac5da536160e015fd1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is greater (after) than another
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25 12:45:16\')->isAfter(\'2018-07-25 12:45:15\'); // true
     * Carbon::parse(\'2018-07-25 12:45:16\')->isAfter(\'2018-07-25 12:45:16\'); // false
     * Carbon::parse(\'2018-07-25 12:45:16\')->isAfter(\'2018-07-25 12:45:17\'); // false
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @see greaterThan()
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isAfter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5c66f3909c6045bddf9d4ba47156f6a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is greater (after) than or equal to another
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25 12:45:16\')->gte(\'2018-07-25 12:45:15\'); // true
     * Carbon::parse(\'2018-07-25 12:45:16\')->gte(\'2018-07-25 12:45:16\'); // true
     * Carbon::parse(\'2018-07-25 12:45:16\')->gte(\'2018-07-25 12:45:17\'); // false
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @see greaterThanOrEqualTo()
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'gte',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '24028824e6d16f20fddc8ad8fd0a1ae7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is greater (after) than or equal to another
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThanOrEqualTo(\'2018-07-25 12:45:15\'); // true
     * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThanOrEqualTo(\'2018-07-25 12:45:16\'); // true
     * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThanOrEqualTo(\'2018-07-25 12:45:17\'); // false
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'greaterThanOrEqualTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a4dfc990854bd8f60038e801e9b239f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is less (before) than another
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25 12:45:16\')->lt(\'2018-07-25 12:45:15\'); // false
     * Carbon::parse(\'2018-07-25 12:45:16\')->lt(\'2018-07-25 12:45:16\'); // false
     * Carbon::parse(\'2018-07-25 12:45:16\')->lt(\'2018-07-25 12:45:17\'); // true
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @see lessThan()
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'lt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e780caf0c95ebfa942ec045d125da318' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is less (before) than another
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25 12:45:16\')->lessThan(\'2018-07-25 12:45:15\'); // false
     * Carbon::parse(\'2018-07-25 12:45:16\')->lessThan(\'2018-07-25 12:45:16\'); // false
     * Carbon::parse(\'2018-07-25 12:45:16\')->lessThan(\'2018-07-25 12:45:17\'); // true
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'lessThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e13f863b68edf276adf4cef14b3d8e4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is less (before) than another
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25 12:45:16\')->isBefore(\'2018-07-25 12:45:15\'); // false
     * Carbon::parse(\'2018-07-25 12:45:16\')->isBefore(\'2018-07-25 12:45:16\'); // false
     * Carbon::parse(\'2018-07-25 12:45:16\')->isBefore(\'2018-07-25 12:45:17\'); // true
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @see lessThan()
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isBefore',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '985876804cdba03e895a492c2812a86f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is less (before) or equal to another
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25 12:45:16\')->lte(\'2018-07-25 12:45:15\'); // false
     * Carbon::parse(\'2018-07-25 12:45:16\')->lte(\'2018-07-25 12:45:16\'); // true
     * Carbon::parse(\'2018-07-25 12:45:16\')->lte(\'2018-07-25 12:45:17\'); // true
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @see lessThanOrEqualTo()
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'lte',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a80a2b47e3af3c3ed3dc7ef4423fb258' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is less (before) or equal to another
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25 12:45:16\')->lessThanOrEqualTo(\'2018-07-25 12:45:15\'); // false
     * Carbon::parse(\'2018-07-25 12:45:16\')->lessThanOrEqualTo(\'2018-07-25 12:45:16\'); // true
     * Carbon::parse(\'2018-07-25 12:45:16\')->lessThanOrEqualTo(\'2018-07-25 12:45:17\'); // true
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'lessThanOrEqualTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c82697ee97c7d2439262543b04a968ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is between two others.
     *
     * The third argument allow you to specify if bounds are included or not (true by default)
     * but for when you including/excluding bounds may produce different results in your application,
     * we recommend to use the explicit methods ->betweenIncluded() or ->betweenExcluded() instead.
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25\')->between(\'2018-07-14\', \'2018-08-01\'); // true
     * Carbon::parse(\'2018-07-25\')->between(\'2018-08-01\', \'2018-08-20\'); // false
     * Carbon::parse(\'2018-07-25\')->between(\'2018-07-25\', \'2018-08-01\'); // true
     * Carbon::parse(\'2018-07-25\')->between(\'2018-07-25\', \'2018-08-01\', false); // false
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date1
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date2
     * @param bool                                    $equal Indicates if an equal to comparison should be done
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'between',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bbe967a24262d48dbdbd03b9fe879cd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is between two others, bounds included.
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25\')->betweenIncluded(\'2018-07-14\', \'2018-08-01\'); // true
     * Carbon::parse(\'2018-07-25\')->betweenIncluded(\'2018-08-01\', \'2018-08-20\'); // false
     * Carbon::parse(\'2018-07-25\')->betweenIncluded(\'2018-07-25\', \'2018-08-01\'); // true
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date1
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date2
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'betweenIncluded',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '674c0d4709d53e7b323dae2de6be78d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is between two others, bounds excluded.
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25\')->betweenExcluded(\'2018-07-14\', \'2018-08-01\'); // true
     * Carbon::parse(\'2018-07-25\')->betweenExcluded(\'2018-08-01\', \'2018-08-20\'); // false
     * Carbon::parse(\'2018-07-25\')->betweenExcluded(\'2018-07-25\', \'2018-08-01\'); // false
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date1
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date2
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'betweenExcluded',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dfbb35341f0df4ec859c4338fd5a3122' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is between two others
     *
     * @example
     * ```
     * Carbon::parse(\'2018-07-25\')->isBetween(\'2018-07-14\', \'2018-08-01\'); // true
     * Carbon::parse(\'2018-07-25\')->isBetween(\'2018-08-01\', \'2018-08-20\'); // false
     * Carbon::parse(\'2018-07-25\')->isBetween(\'2018-07-25\', \'2018-08-01\'); // true
     * Carbon::parse(\'2018-07-25\')->isBetween(\'2018-07-25\', \'2018-08-01\', false); // false
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date1
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date2
     * @param bool                                    $equal Indicates if an equal to comparison should be done
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isBetween',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '775c8e8fbfabb01a68df21a040914c0c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is a weekday.
     *
     * @example
     * ```
     * Carbon::parse(\'2019-07-14\')->isWeekday(); // false
     * Carbon::parse(\'2019-07-15\')->isWeekday(); // true
     * ```
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isWeekday',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6aca73a2f6e1e165bbf2c3bfa29ddebf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is a weekend day.
     *
     * @example
     * ```
     * Carbon::parse(\'2019-07-14\')->isWeekend(); // true
     * Carbon::parse(\'2019-07-15\')->isWeekend(); // false
     * ```
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isWeekend',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0aceea4d370179c5a72823729adf14d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is yesterday.
     *
     * @example
     * ```
     * Carbon::yesterday()->isYesterday(); // true
     * Carbon::tomorrow()->isYesterday(); // false
     * ```
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isYesterday',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '42e428b6bfe542346556ae8665148605' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is today.
     *
     * @example
     * ```
     * Carbon::today()->isToday(); // true
     * Carbon::tomorrow()->isToday(); // false
     * ```
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isToday',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '81c670211eb6e2185f18e1361c2dc355' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is tomorrow.
     *
     * @example
     * ```
     * Carbon::tomorrow()->isTomorrow(); // true
     * Carbon::yesterday()->isTomorrow(); // false
     * ```
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isTomorrow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '921e6c37ea4ea7a32f8f8dabff69cb3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is in the future, ie. greater (after) than now.
     *
     * @example
     * ```
     * Carbon::now()->addHours(5)->isFuture(); // true
     * Carbon::now()->subHours(5)->isFuture(); // false
     * ```
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isFuture',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2396a2f2c156083e6814b44fc3e11f4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is in the past, ie. less (before) than now.
     *
     * @example
     * ```
     * Carbon::now()->subHours(5)->isPast(); // true
     * Carbon::now()->addHours(5)->isPast(); // false
     * ```
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isPast',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '832bbc335d53c72e34f95507002eedc6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is a leap year.
     *
     * @example
     * ```
     * Carbon::parse(\'2020-01-01\')->isLeapYear(); // true
     * Carbon::parse(\'2019-01-01\')->isLeapYear(); // false
     * ```
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isLeapYear',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6bbeccd9a86cf366f673dc08f3cdff8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is a long year
     *
     * @example
     * ```
     * Carbon::parse(\'2015-01-01\')->isLongYear(); // true
     * Carbon::parse(\'2016-01-01\')->isLongYear(); // false
     * ```
     *
     * @see https://en.wikipedia.org/wiki/ISO_8601#Week_dates
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isLongYear',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fcd402c4d8c18b0ba4f1d71d76058409' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Compares the formatted values of the two dates.
     *
     * @example
     * ```
     * Carbon::parse(\'2019-06-13\')->isSameAs(\'Y-d\', Carbon::parse(\'2019-12-13\')); // true
     * Carbon::parse(\'2019-06-13\')->isSameAs(\'Y-d\', Carbon::parse(\'2019-06-14\')); // false
     * ```
     *
     * @param string                                        $format date formats to compare.
     * @param \\Carbon\\Carbon|\\DateTimeInterface|string|null $date   instance to compare with or null to use current day.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isSameAs',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '97708ab8220f77c7c4319c87d0908576' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is in the current unit given.
     *
     * @example
     * ```
     * Carbon::parse(\'2019-01-13\')->isSameUnit(\'year\', Carbon::parse(\'2019-12-25\')); // true
     * Carbon::parse(\'2018-12-13\')->isSameUnit(\'year\', Carbon::parse(\'2019-12-25\')); // false
     * ```
     *
     * @param string                                 $unit singular unit string
     * @param \\Carbon\\Carbon|\\DateTimeInterface|null $date instance to compare with or null to use current day.
     *
     * @throws BadComparisonUnitException
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isSameUnit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9e28e4c17694dd75d56fa184f5a1f7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determines if the instance is in the current unit given.
     *
     * @example
     * ```
     * Carbon::now()->isCurrentUnit(\'hour\'); // true
     * Carbon::now()->subHours(2)->isCurrentUnit(\'hour\'); // false
     * ```
     *
     * @param string $unit The unit to test.
     *
     * @throws BadMethodCallException
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isCurrentUnit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '610f15e3c3d3fbdb0cd731d7e083a372' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the passed in date is in the same quarter as the instance quarter (and year if needed).
     *
     * @example
     * ```
     * Carbon::parse(\'2019-01-12\')->isSameQuarter(Carbon::parse(\'2019-03-01\')); // true
     * Carbon::parse(\'2019-01-12\')->isSameQuarter(Carbon::parse(\'2019-04-01\')); // false
     * Carbon::parse(\'2019-01-12\')->isSameQuarter(Carbon::parse(\'2018-03-01\')); // false
     * Carbon::parse(\'2019-01-12\')->isSameQuarter(Carbon::parse(\'2018-03-01\'), false); // true
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|string|null $date       The instance to compare with or null to use current day.
     * @param bool                                          $ofSameYear Check if it is the same month in the same year.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isSameQuarter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b6e6db6fe6fb16881acf731a5ba341cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the passed in date is in the same month as the instance´s month.
     *
     * @example
     * ```
     * Carbon::parse(\'2019-01-12\')->isSameMonth(Carbon::parse(\'2019-01-01\')); // true
     * Carbon::parse(\'2019-01-12\')->isSameMonth(Carbon::parse(\'2019-02-01\')); // false
     * Carbon::parse(\'2019-01-12\')->isSameMonth(Carbon::parse(\'2018-01-01\')); // false
     * Carbon::parse(\'2019-01-12\')->isSameMonth(Carbon::parse(\'2018-01-01\'), false); // true
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|null $date       The instance to compare with or null to use the current date.
     * @param bool                                   $ofSameYear Check if it is the same month in the same year.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isSameMonth',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd9acbfc50238eda501373d9b38296e28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if this day is a specific day of the week.
     *
     * @example
     * ```
     * Carbon::parse(\'2019-07-17\')->isDayOfWeek(Carbon::WEDNESDAY); // true
     * Carbon::parse(\'2019-07-17\')->isDayOfWeek(Carbon::FRIDAY); // false
     * Carbon::parse(\'2019-07-17\')->isDayOfWeek(\'Wednesday\'); // true
     * Carbon::parse(\'2019-07-17\')->isDayOfWeek(\'Friday\'); // false
     * ```
     *
     * @param int $dayOfWeek
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isDayOfWeek',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'df11430982f7597efd050cd1833f7132' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Check if its the birthday. Compares the date/month values of the two dates.
     *
     * @example
     * ```
     * Carbon::now()->subYears(5)->isBirthday(); // true
     * Carbon::now()->subYears(5)->subDay()->isBirthday(); // false
     * Carbon::parse(\'2019-06-05\')->isBirthday(Carbon::parse(\'2001-06-05\')); // true
     * Carbon::parse(\'2019-06-05\')->isBirthday(Carbon::parse(\'2001-06-06\')); // false
     * ```
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|null $date The instance to compare with or null to use current day.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isBirthday',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '692eafee0ab2d71ef07b67b5c7ff72bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Check if today is the last day of the Month
     *
     * @example
     * ```
     * Carbon::parse(\'2019-02-28\')->isLastOfMonth(); // true
     * Carbon::parse(\'2019-03-28\')->isLastOfMonth(); // false
     * Carbon::parse(\'2019-03-30\')->isLastOfMonth(); // false
     * Carbon::parse(\'2019-03-31\')->isLastOfMonth(); // true
     * Carbon::parse(\'2019-04-30\')->isLastOfMonth(); // true
     * ```
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isLastOfMonth',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6370e6a3ce46de4663639c8b50cda6f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Check if the instance is start of day / midnight.
     *
     * @example
     * ```
     * Carbon::parse(\'2019-02-28 00:00:00\')->isStartOfDay(); // true
     * Carbon::parse(\'2019-02-28 00:00:00.999999\')->isStartOfDay(); // true
     * Carbon::parse(\'2019-02-28 00:00:01\')->isStartOfDay(); // false
     * Carbon::parse(\'2019-02-28 00:00:00.000000\')->isStartOfDay(true); // true
     * Carbon::parse(\'2019-02-28 00:00:00.000012\')->isStartOfDay(true); // false
     * ```
     *
     * @param bool $checkMicroseconds check time at microseconds precision
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isStartOfDay',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7918ca00b110986735694c072b7a8d7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Check if the instance is end of day.
     *
     * @example
     * ```
     * Carbon::parse(\'2019-02-28 23:59:59.999999\')->isEndOfDay(); // true
     * Carbon::parse(\'2019-02-28 23:59:59.123456\')->isEndOfDay(); // true
     * Carbon::parse(\'2019-02-28 23:59:59\')->isEndOfDay(); // true
     * Carbon::parse(\'2019-02-28 23:59:58.999999\')->isEndOfDay(); // false
     * Carbon::parse(\'2019-02-28 23:59:59.999999\')->isEndOfDay(true); // true
     * Carbon::parse(\'2019-02-28 23:59:59.123456\')->isEndOfDay(true); // false
     * Carbon::parse(\'2019-02-28 23:59:59\')->isEndOfDay(true); // false
     * ```
     *
     * @param bool $checkMicroseconds check time at microseconds precision
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isEndOfDay',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd2db45ac7c9cd408202a931fd91e57bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Check if the instance is start of day / midnight.
     *
     * @example
     * ```
     * Carbon::parse(\'2019-02-28 00:00:00\')->isMidnight(); // true
     * Carbon::parse(\'2019-02-28 00:00:00.999999\')->isMidnight(); // true
     * Carbon::parse(\'2019-02-28 00:00:01\')->isMidnight(); // false
     * ```
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isMidnight',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9eb880cb4d09db90b0bbf5be015e487' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Check if the instance is midday.
     *
     * @example
     * ```
     * Carbon::parse(\'2019-02-28 11:59:59.999999\')->isMidday(); // false
     * Carbon::parse(\'2019-02-28 12:00:00\')->isMidday(); // true
     * Carbon::parse(\'2019-02-28 12:00:00.999999\')->isMidday(); // true
     * Carbon::parse(\'2019-02-28 12:00:01\')->isMidday(); // false
     * ```
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'isMidday',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d7e00438a348e0206bc4bf55b8c90da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the (date)time string is in a given format.
     *
     * @example
     * ```
     * Carbon::hasFormat(\'11:12:45\', \'h:i:s\'); // true
     * Carbon::hasFormat(\'13:12:45\', \'h:i:s\'); // false
     * ```
     *
     * @param string $date
     * @param string $format
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'hasFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bff1ecb06890000ccb412ccdd5e504bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the (date)time string is in a given format.
     *
     * @example
     * ```
     * Carbon::hasFormatWithModifiers(\'31/08/2015\', \'d#m#Y\'); // true
     * Carbon::hasFormatWithModifiers(\'31/08/2015\', \'m#d#Y\'); // false
     * ```
     *
     * @param string $date
     * @param string $format
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'hasFormatWithModifiers',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e5ce3e7c5a1d0749cb570911dab8d432' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the (date)time string is in a given format and valid to create a
     * new instance.
     *
     * @example
     * ```
     * Carbon::canBeCreatedFromFormat(\'11:12:45\', \'h:i:s\'); // true
     * Carbon::canBeCreatedFromFormat(\'13:12:45\', \'h:i:s\'); // false
     * ```
     *
     * @param string $date
     * @param string $format
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'canBeCreatedFromFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '247d92cbd9eab2773e19fa282989c809' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the current date matches the given string.
     *
     * @example
     * ```
     * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'2019\')); // true
     * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'2018\')); // false
     * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'2019-06\')); // true
     * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'06-02\')); // true
     * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'2019-06-02\')); // true
     * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'Sunday\')); // true
     * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'June\')); // true
     * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'12:23\')); // true
     * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'12:23:45\')); // true
     * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'12:23:00\')); // false
     * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'12h\')); // true
     * var_dump(Carbon::parse(\'2019-06-02 15:23:45\')->is(\'3pm\')); // true
     * var_dump(Carbon::parse(\'2019-06-02 15:23:45\')->is(\'3am\')); // false
     * ```
     *
     * @param string $tester day name, month name, hour, date, etc. as string
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'is',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5abffa489e5b770807c0a716b898cf3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the (date)time string is in a given format with
     * given list of pattern replacements.
     *
     * @example
     * ```
     * Carbon::hasFormat(\'11:12:45\', \'h:i:s\'); // true
     * Carbon::hasFormat(\'13:12:45\', \'h:i:s\'); // false
     * ```
     *
     * @param string $date
     * @param string $format
     * @param array  $replacements
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'badcomparisonunitexception' => 'Carbon\\Exceptions\\BadComparisonUnitException',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Carbon\\Traits\\Comparison',
         'functionName' => 'matchFormatPattern',
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