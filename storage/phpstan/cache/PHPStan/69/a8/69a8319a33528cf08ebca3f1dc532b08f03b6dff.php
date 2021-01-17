<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\nesbot\\carbon\\src\\Carbon\\Traits\\Converter.php-1610491694',
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
    'fdf0ed6c654361861f59b2622a73a680' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait Converter.
 *
 * Change date into different string formats and types and
 * handle the string cast.
 *
 * Depends on the following methods:
 *
 * @method static copy()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f487810db1f29b5f01881102511cb03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format to use for __toString method when type juggling occurs.
     *
     * @var string|Closure|null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0256cf6e7fc01a67914df9c462728bdc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Reset the format used to the default when type juggling a Carbon instance to a string
     *
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'resetToStringFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea5f1240f68a810869e25452ef1aace6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
     *             You should rather let Carbon object being casted to string with DEFAULT_TO_STRING_FORMAT, and
     *             use other method or custom format passed to format() method if you need to dump an other string
     *             format.
     *
     * Set the default format used when type juggling a Carbon instance to a string
     *
     * @param string|Closure|null $format
     *
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'setToStringFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be1c7b3a48386962d28e96827dd5533f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the formatted date string on success or FALSE on failure.
     *
     * @see https://php.net/manual/en/datetime.format.php
     *
     * @param string $format
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'format',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ddda10f682a129c11d30ad7469e1bf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @see https://php.net/manual/en/datetime.format.php
     *
     * @param string $format
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'rawFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ceb85d8c217c23e263962bf88ddbe0f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as a string using the set format
     *
     * @example
     * ```
     * echo Carbon::now(); // Carbon instances can be casted to string
     * ```
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => '__toString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1046adefaa44faec8afb8abae498ffd5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as date
     *
     * @example
     * ```
     * echo Carbon::now()->toDateString();
     * ```
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toDateString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83384b11d162925efa7aa5b872fe0931' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as a readable date
     *
     * @example
     * ```
     * echo Carbon::now()->toFormattedDateString();
     * ```
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toFormattedDateString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd51aa4166c59a1a11bf4acd00482b020' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as time
     *
     * @example
     * ```
     * echo Carbon::now()->toTimeString();
     * ```
     *
     * @param string $unitPrecision
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toTimeString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1d01afc5545eea9ecfb6550717accfb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as date and time
     *
     * @example
     * ```
     * echo Carbon::now()->toDateTimeString();
     * ```
     *
     * @param string $unitPrecision
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toDateTimeString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '15a3e2d0dcaf5abf92f90ba14f1c1951' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return a format from H:i to H:i:s.u according to given unit precision.
     *
     * @param string $unitPrecision "minute", "second", "millisecond" or "microsecond"
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'getTimeFormatByPrecision',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e92df3a8747c090d7e53b71c01157527' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as date and time T-separated with no timezone
     *
     * @example
     * ```
     * echo Carbon::now()->toDateTimeLocalString();
     * echo "\\n";
     * echo Carbon::now()->toDateTimeLocalString(\'minute\'); // You can specify precision among: minute, second, millisecond and microsecond
     * ```
     *
     * @param string $unitPrecision
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toDateTimeLocalString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c79aea1f487889f7d49be6254605c82' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance with day, date and time
     *
     * @example
     * ```
     * echo Carbon::now()->toDayDateTimeString();
     * ```
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toDayDateTimeString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2878278dc02b9e2dee4d29d8cec5a222' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as ATOM
     *
     * @example
     * ```
     * echo Carbon::now()->toAtomString();
     * ```
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toAtomString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aa25e5ae9002b62e8ae19c49c27566fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as COOKIE
     *
     * @example
     * ```
     * echo Carbon::now()->toCookieString();
     * ```
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toCookieString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '900508064e7d63891becd896c8f0319d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as ISO8601
     *
     * @example
     * ```
     * echo Carbon::now()->toIso8601String();
     * ```
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toIso8601String',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5b7840bcd58c875c49038104ccf436d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as RFC822
     *
     * @example
     * ```
     * echo Carbon::now()->toRfc822String();
     * ```
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toRfc822String',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '61aabb0693787456b1638100c6b169f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Convert the instance to UTC and return as Zulu ISO8601
     *
     * @example
     * ```
     * echo Carbon::now()->toIso8601ZuluString();
     * ```
     *
     * @param string $unitPrecision
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toIso8601ZuluString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1824c78fdf54dd92a4f780112153871f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as RFC850
     *
     * @example
     * ```
     * echo Carbon::now()->toRfc850String();
     * ```
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toRfc850String',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8af8772ec6db19a82005e586be07de69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as RFC1036
     *
     * @example
     * ```
     * echo Carbon::now()->toRfc1036String();
     * ```
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toRfc1036String',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9ea99ce47605c0468e3df0b502149f52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as RFC1123
     *
     * @example
     * ```
     * echo Carbon::now()->toRfc1123String();
     * ```
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toRfc1123String',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a48c2631d47bfc11a172297b10aab9b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as RFC2822
     *
     * @example
     * ```
     * echo Carbon::now()->toRfc2822String();
     * ```
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toRfc2822String',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c091ec5f10474fc75bfa520d4cafe9e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as RFC3339
     *
     * @param bool $extended
     *
     * @example
     * ```
     * echo Carbon::now()->toRfc3339String() . "\\n";
     * echo Carbon::now()->toRfc3339String(true) . "\\n";
     * ```
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toRfc3339String',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '038a592ad3f1c905ba27ef1ea4d2879c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as RSS
     *
     * @example
     * ```
     * echo Carbon::now()->toRssString();
     * ```
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toRssString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c45fd48fdc999ad9e9d349cea2740cd4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as W3C
     *
     * @example
     * ```
     * echo Carbon::now()->toW3cString();
     * ```
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toW3cString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '357aaab3246389b65ac298da42d5681b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Format the instance as RFC7231
     *
     * @example
     * ```
     * echo Carbon::now()->toRfc7231String();
     * ```
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toRfc7231String',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae8e3d49f15a84a95613449fac0dc578' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get default array representation.
     *
     * @example
     * ```
     * var_dump(Carbon::now()->toArray());
     * ```
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '36b850c5da6dcee83ebbf3b3a1c98228' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get default object representation.
     *
     * @example
     * ```
     * var_dump(Carbon::now()->toObject());
     * ```
     *
     * @return object
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '49351a4918780dc731e220ea4f0e7318' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns english human readable complete date string.
     *
     * @example
     * ```
     * echo Carbon::now()->toString();
     * ```
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d1cb32a4fdc2dcf82da5299cc4d5495' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the ISO-8601 string (ex: 1977-04-22T06:00:00Z, if $keepOffset truthy, offset will be kept:
     * 1977-04-22T01:00:00-05:00).
     *
     * @example
     * ```
     * echo Carbon::now(\'America/Toronto\')->toISOString() . "\\n";
     * echo Carbon::now(\'America/Toronto\')->toISOString(true) . "\\n";
     * ```
     *
     * @param bool $keepOffset Pass true to keep the date offset. Else forced to UTC.
     *
     * @return null|string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toISOString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd46ebc0f252b055c199f5af2b38c8dad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the ISO-8601 string (ex: 1977-04-22T06:00:00Z) with UTC timezone.
     *
     * @example
     * ```
     * echo Carbon::now(\'America/Toronto\')->toJSON();
     * ```
     *
     * @return null|string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toJSON',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c6a705b771b63f6abec056b72e7cc4bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return native DateTime PHP object matching the current instance.
     *
     * @example
     * ```
     * var_dump(Carbon::now()->toDateTime());
     * ```
     *
     * @return DateTime
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toDateTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '50c59154651ba89cf70679123fa9009c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return native toDateTimeImmutable PHP object matching the current instance.
     *
     * @example
     * ```
     * var_dump(Carbon::now()->toDateTimeImmutable());
     * ```
     *
     * @return DateTimeImmutable
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toDateTimeImmutable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8a12096ca9423e1189818acf556de09a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @alias toDateTime
     *
     * Return native DateTime PHP object matching the current instance.
     *
     * @example
     * ```
     * var_dump(Carbon::now()->toDate());
     * ```
     *
     * @return DateTime
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toDate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '951624912cec2418d7062603ebc845df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a iterable CarbonPeriod object from current date to a given end date (and optional interval).
     *
     * @param \\DateTimeInterface|Carbon|CarbonImmutable|int|null $end      period end date or recurrences count if int
     * @param int|\\DateInterval|string|null                      $interval period default interval or number of the given $unit
     * @param string|null                                        $unit     if specified, $interval must be an integer
     *
     * @return CarbonPeriod
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'toPeriod',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4e773dae7a1002149d9ead36a7b69ae8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a iterable CarbonPeriod object from current date to a given end date (and optional interval).
     *
     * @param \\DateTimeInterface|Carbon|CarbonImmutable|null $end      period end date
     * @param int|\\DateInterval|string|null                  $interval period default interval or number of the given $unit
     * @param string|null                                    $unit     if specified, $interval must be an integer
     *
     * @return CarbonPeriod
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbon' => 'Carbon\\Carbon',
          'carbonimmutable' => 'Carbon\\CarbonImmutable',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'carbonperiod' => 'Carbon\\CarbonPeriod',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'datetime' => 'DateTime',
          'datetimeimmutable' => 'DateTimeImmutable',
        ),
         'className' => 'Carbon\\Traits\\Converter',
         'functionName' => 'range',
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