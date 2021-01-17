<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\nesbot\\carbon\\src\\Carbon\\Traits\\Difference.php-1610491694',
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
    'd8158addd94aebb793ec4e1dda83fd0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait Difference.
 *
 * Depends on the following methods:
 *
 * @method bool lessThan($date)
 * @method static copy()
 * @method static resolveCarbon($date = null)
 * @method static Translator translator()
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94f7d3fb2c9b29e880801c4e303adc4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @codeCoverageIgnore
     *
     * @param CarbonInterval $diff
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'fixNegativeMicroseconds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'be9e627c50ac89e3b6cdb143dca524f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param DateInterval $diff
     * @param bool         $absolute
     *
     * @return CarbonInterval
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'fixDiffInterval',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '016934f54f0484a70c15a7f80b92eb84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference as a DateInterval instance.
     * Return relative interval (negative if
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return DateInterval
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diff',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bcd1a342a2fed6c44e35e2f0f1f6a245' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference as a CarbonInterval instance.
     * Return absolute interval (always positive) unless you pass false to the second argument.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return CarbonInterval
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffAsCarbonInterval',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '748ee59bfb0403159e073de746960ac3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in years
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInYears',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b521827c268395922af53372343d9a6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in quarters rounded down.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInQuarters',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8b070e567131936ff8974df8cd6f9586' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in months rounded down.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInMonths',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '922bd2ae33e755fc78d1f0a04e22f499' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in weeks rounded down.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInWeeks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7c2ce03600d8babd148cc83586cb8726' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in days rounded down.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInDays',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55773a5e211d1a353330b6cd4aadaf44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in days using a filter closure rounded down.
     *
     * @param Closure                                                $callback
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInDaysFiltered',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '48031b32a8a86907b75c4659c363ed19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in hours using a filter closure rounded down.
     *
     * @param Closure                                                $callback
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInHoursFiltered',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c304cc40664dc5d1f61f6e50c9ea11fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference by the given interval using a filter closure.
     *
     * @param CarbonInterval                                         $ci       An interval to traverse by
     * @param Closure                                                $callback
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffFiltered',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '442509c32b4915811253f9d70740a8cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in weekdays rounded down.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInWeekdays',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a25e27dd76c3a827790ab52b0bc6d0c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in weekend days using a filter rounded down.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInWeekendDays',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f89eb4d137556ffe70c40e167acc0c35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in hours rounded down.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInHours',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77b5b3f2767f2e1494f1cd61848ba6db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in hours rounded down using timestamps.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInRealHours',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a2d2f31925848ca100f1d281da04478c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in minutes rounded down.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInMinutes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '57d17b08782274fc4d6e7fce7d97cf76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in minutes rounded down using timestamps.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInRealMinutes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '369548958fa8a542b1109030e34616e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in seconds rounded down.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInSeconds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fca51014f0f427a23334468c44559a84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in microseconds.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInMicroseconds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5912fd4ef7a1e0c3d0598408a88a263c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in milliseconds rounded down.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInMilliseconds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '65b1171cf295c5ce00828c19e10dac7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in seconds using timestamps.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInRealSeconds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69e225a6610b7cd08552b5dd64b4e1d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var CarbonInterface $date */',
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInRealSeconds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8c9dd496e8852dceb84c8d0a0ce336e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in microseconds using timestamps.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInRealMicroseconds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5741e1f79aaf7937adce94cf4ca73003' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var CarbonInterface $date */',
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInRealMicroseconds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6117c71579d36b31ba2977420eac474' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in milliseconds rounded down using timestamps.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffInRealMilliseconds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'dcd1ebb739d621902816086cd2c498bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in seconds as float (microsecond-precision).
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return float
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInSeconds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0d6001645e98d1be618b1d053edf6799' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in minutes as float (microsecond-precision).
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return float
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInMinutes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a89159da543f9b96993aba3d53a15788' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in hours as float (microsecond-precision).
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return float
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInHours',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'eebc12ff28532e77c4d56b7516bb5243' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in days as float (microsecond-precision).
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return float
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInDays',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd7851e92b6a192e8334fe0bbdcfabfe6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in weeks as float (microsecond-precision).
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return float
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInWeeks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '458f3d8f5edc1a70d8b1d13922a4c135' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in months as float (microsecond-precision).
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return float
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInMonths',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '66a44f3ad964e1b8a65543a2c6cb64f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var Carbon|CarbonImmutable $floorEnd */',
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInMonths',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fdd122c524ebaeba53a1d3834a97df34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var Carbon|CarbonImmutable $startOfMonthAfterFloorEnd */',
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInMonths',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2956a9d8c8aa15dd0cff04d07375e7bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in year as float (microsecond-precision).
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return float
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInYears',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed3d4eaf6c4e50588df8918af11169f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var Carbon|CarbonImmutable $floorEnd */',
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInYears',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a244c8161c9cf6a1b8716e2d40044ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var Carbon|CarbonImmutable $startOfYearAfterFloorEnd */',
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInYears',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '94c03f9411f7dc244e136d550f03ffce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in seconds as float (microsecond-precision) using timestamps.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return float
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInRealSeconds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '356b762013e0a8555bde2cd920f0df95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in minutes as float (microsecond-precision) using timestamps.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return float
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInRealMinutes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5886f0ea819c18eb45b1e456bcfeadf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in hours as float (microsecond-precision) using timestamps.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return float
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInRealHours',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '27d695f36df538389062eceb8c87b87d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in days as float (microsecond-precision).
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return float
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInRealDays',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4a5387c8c126bbcdcb671f01cd06c1cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in weeks as float (microsecond-precision).
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return float
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInRealWeeks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd40a00b9dd8b21dba2d6aa3ef236827d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in months as float (microsecond-precision) using timestamps.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return float
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInRealMonths',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1f5a365702474606909eaf7f286513c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var Carbon|CarbonImmutable $floorEnd */',
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInRealMonths',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3459f708ebad7f450d7180e2d11616df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var Carbon|CarbonImmutable $startOfMonthAfterFloorEnd */',
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInRealMonths',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '971a9fc62a67830b45ced3e3b9f30d87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in year as float (microsecond-precision) using timestamps.
     *
     * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
     * @param bool                                                   $absolute Get the absolute of the difference
     *
     * @return float
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInRealYears',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4c3e398341d63982a038846486b9ae4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var Carbon|CarbonImmutable $floorEnd */',
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInRealYears',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '31b1ecbcc4dbd0878d32f0f311b82871' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var Carbon|CarbonImmutable $startOfYearAfterFloorEnd */',
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'floatDiffInRealYears',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c567afba02cbc939df701184af6d08c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The number of seconds since midnight.
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'secondsSinceMidnight',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b3cb32abec047d41db553fe6ccf78cbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The number of seconds until 23:59:59.
     *
     * @return int
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'secondsUntilEndOfDay',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bfd82ebd248b2f19fedcd81fa4e5cf67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in a human readable format in the current locale from current instance to an other
     * instance given (or now if null given).
     *
     * @example
     * ```
     * echo Carbon::tomorrow()->diffForHumans() . "\\n";
     * echo Carbon::tomorrow()->diffForHumans([\'parts\' => 2]) . "\\n";
     * echo Carbon::tomorrow()->diffForHumans([\'parts\' => 3, \'join\' => true]) . "\\n";
     * echo Carbon::tomorrow()->diffForHumans(Carbon::yesterday()) . "\\n";
     * echo Carbon::tomorrow()->diffForHumans(Carbon::yesterday(), [\'short\' => true]) . "\\n";
     * ```
     *
     * @param Carbon|\\DateTimeInterface|string|array|null $other   if array passed, will be used as parameters array, see $syntax below;
     *                                                             if null passed, now will be used as comparison reference;
     *                                                             if any other type, it will be converted to date and used as reference.
     * @param int|array                                   $syntax  if array passed, parameters will be extracted from it, the array may contains:
     *                                                             - \'syntax\' entry (see below)
     *                                                             - \'short\' entry (see below)
     *                                                             - \'parts\' entry (see below)
     *                                                             - \'options\' entry (see below)
     *                                                             - \'join\' entry determines how to join multiple parts of the string
     *                                                             `  - if $join is a string, it\'s used as a joiner glue
     *                                                             `  - if $join is a callable/closure, it get the list of string and should return a string
     *                                                             `  - if $join is an array, the first item will be the default glue, and the second item
     *                                                             `    will be used instead of the glue for the last item
     *                                                             `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
     *                                                             `  - if $join is missing, a space will be used as glue
     *                                                             - \'other\' entry (see above)
     *                                                             if int passed, it add modifiers:
     *                                                             Possible values:
     *                                                             - CarbonInterface::DIFF_ABSOLUTE          no modifiers
     *                                                             - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
     *                                                             - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
     *                                                             Default value: CarbonInterface::DIFF_ABSOLUTE
     * @param bool                                        $short   displays short format of time units
     * @param int                                         $parts   maximum number of parts to display (default value: 1: single unit)
     * @param int                                         $options human diff options
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'diffForHumans',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '21d337c49fa75c9633709c8ccc817ade' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @alias diffForHumans
     *
     * Get the difference in a human readable format in the current locale from current instance to an other
     * instance given (or now if null given).
     *
     * @param Carbon|\\DateTimeInterface|string|array|null $other   if array passed, will be used as parameters array, see $syntax below;
     *                                                             if null passed, now will be used as comparison reference;
     *                                                             if any other type, it will be converted to date and used as reference.
     * @param int|array                                   $syntax  if array passed, parameters will be extracted from it, the array may contains:
     *                                                             - \'syntax\' entry (see below)
     *                                                             - \'short\' entry (see below)
     *                                                             - \'parts\' entry (see below)
     *                                                             - \'options\' entry (see below)
     *                                                             - \'join\' entry determines how to join multiple parts of the string
     *                                                             `  - if $join is a string, it\'s used as a joiner glue
     *                                                             `  - if $join is a callable/closure, it get the list of string and should return a string
     *                                                             `  - if $join is an array, the first item will be the default glue, and the second item
     *                                                             `    will be used instead of the glue for the last item
     *                                                             `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
     *                                                             `  - if $join is missing, a space will be used as glue
     *                                                             - \'other\' entry (see above)
     *                                                             if int passed, it add modifiers:
     *                                                             Possible values:
     *                                                             - CarbonInterface::DIFF_ABSOLUTE          no modifiers
     *                                                             - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
     *                                                             - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
     *                                                             Default value: CarbonInterface::DIFF_ABSOLUTE
     * @param bool                                        $short   displays short format of time units
     * @param int                                         $parts   maximum number of parts to display (default value: 1: single unit)
     * @param int                                         $options human diff options
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'from',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f9e3c326460fdc8597e92bf0d68314f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @alias diffForHumans
     *
     * Get the difference in a human readable format in the current locale from current instance to an other
     * instance given (or now if null given).
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'since',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3c77d9d49403058b3380f6e0bee08e21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in a human readable format in the current locale from an other
     * instance given (or now if null given) to current instance.
     *
     * When comparing a value in the past to default now:
     * 1 hour from now
     * 5 months from now
     *
     * When comparing a value in the future to default now:
     * 1 hour ago
     * 5 months ago
     *
     * When comparing a value in the past to another value:
     * 1 hour after
     * 5 months after
     *
     * When comparing a value in the future to another value:
     * 1 hour before
     * 5 months before
     *
     * @param Carbon|\\DateTimeInterface|string|array|null $other   if array passed, will be used as parameters array, see $syntax below;
     *                                                             if null passed, now will be used as comparison reference;
     *                                                             if any other type, it will be converted to date and used as reference.
     * @param int|array                                   $syntax  if array passed, parameters will be extracted from it, the array may contains:
     *                                                             - \'syntax\' entry (see below)
     *                                                             - \'short\' entry (see below)
     *                                                             - \'parts\' entry (see below)
     *                                                             - \'options\' entry (see below)
     *                                                             - \'join\' entry determines how to join multiple parts of the string
     *                                                             `  - if $join is a string, it\'s used as a joiner glue
     *                                                             `  - if $join is a callable/closure, it get the list of string and should return a string
     *                                                             `  - if $join is an array, the first item will be the default glue, and the second item
     *                                                             `    will be used instead of the glue for the last item
     *                                                             `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
     *                                                             `  - if $join is missing, a space will be used as glue
     *                                                             - \'other\' entry (see above)
     *                                                             if int passed, it add modifiers:
     *                                                             Possible values:
     *                                                             - CarbonInterface::DIFF_ABSOLUTE          no modifiers
     *                                                             - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
     *                                                             - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
     *                                                             Default value: CarbonInterface::DIFF_ABSOLUTE
     * @param bool                                        $short   displays short format of time units
     * @param int                                         $parts   maximum number of parts to display (default value: 1: single unit)
     * @param int                                         $options human diff options
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'to',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd62174b714cca8f38ea859daf1beb4a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @alias to
     *
     * Get the difference in a human readable format in the current locale from an other
     * instance given (or now if null given) to current instance.
     *
     * @param Carbon|\\DateTimeInterface|string|array|null $other   if array passed, will be used as parameters array, see $syntax below;
     *                                                             if null passed, now will be used as comparison reference;
     *                                                             if any other type, it will be converted to date and used as reference.
     * @param int|array                                   $syntax  if array passed, parameters will be extracted from it, the array may contains:
     *                                                             - \'syntax\' entry (see below)
     *                                                             - \'short\' entry (see below)
     *                                                             - \'parts\' entry (see below)
     *                                                             - \'options\' entry (see below)
     *                                                             - \'join\' entry determines how to join multiple parts of the string
     *                                                             `  - if $join is a string, it\'s used as a joiner glue
     *                                                             `  - if $join is a callable/closure, it get the list of string and should return a string
     *                                                             `  - if $join is an array, the first item will be the default glue, and the second item
     *                                                             `    will be used instead of the glue for the last item
     *                                                             `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
     *                                                             `  - if $join is missing, a space will be used as glue
     *                                                             - \'other\' entry (see above)
     *                                                             if int passed, it add modifiers:
     *                                                             Possible values:
     *                                                             - CarbonInterface::DIFF_ABSOLUTE          no modifiers
     *                                                             - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
     *                                                             - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
     *                                                             Default value: CarbonInterface::DIFF_ABSOLUTE
     * @param bool                                        $short   displays short format of time units
     * @param int                                         $parts   maximum number of parts to display (default value: 1: single unit)
     * @param int                                         $options human diff options
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'until',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6a72cdbfbc6923de719ff8a4778c977f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in a human readable format in the current locale from current
     * instance to now.
     *
     * @param int|array $syntax  if array passed, parameters will be extracted from it, the array may contains:
     *                           - \'syntax\' entry (see below)
     *                           - \'short\' entry (see below)
     *                           - \'parts\' entry (see below)
     *                           - \'options\' entry (see below)
     *                           - \'join\' entry determines how to join multiple parts of the string
     *                           `  - if $join is a string, it\'s used as a joiner glue
     *                           `  - if $join is a callable/closure, it get the list of string and should return a string
     *                           `  - if $join is an array, the first item will be the default glue, and the second item
     *                           `    will be used instead of the glue for the last item
     *                           `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
     *                           `  - if $join is missing, a space will be used as glue
     *                           if int passed, it add modifiers:
     *                           Possible values:
     *                           - CarbonInterface::DIFF_ABSOLUTE          no modifiers
     *                           - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
     *                           - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
     *                           Default value: CarbonInterface::DIFF_ABSOLUTE
     * @param bool      $short   displays short format of time units
     * @param int       $parts   maximum number of parts to display (default value: 1: single unit)
     * @param int       $options human diff options
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'fromNow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ba8350feff36331b2fbfe9bc46300ada' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in a human readable format in the current locale from an other
     * instance given to now
     *
     * @param int|array $syntax  if array passed, parameters will be extracted from it, the array may contains:
     *                           - \'syntax\' entry (see below)
     *                           - \'short\' entry (see below)
     *                           - \'parts\' entry (see below)
     *                           - \'options\' entry (see below)
     *                           - \'join\' entry determines how to join multiple parts of the string
     *                           `  - if $join is a string, it\'s used as a joiner glue
     *                           `  - if $join is a callable/closure, it get the list of string and should return a string
     *                           `  - if $join is an array, the first item will be the default glue, and the second item
     *                           `    will be used instead of the glue for the last item
     *                           `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
     *                           `  - if $join is missing, a space will be used as glue
     *                           if int passed, it add modifiers:
     *                           Possible values:
     *                           - CarbonInterface::DIFF_ABSOLUTE          no modifiers
     *                           - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
     *                           - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
     *                           Default value: CarbonInterface::DIFF_ABSOLUTE
     * @param bool      $short   displays short format of time units
     * @param int       $parts   maximum number of parts to display (default value: 1: single part)
     * @param int       $options human diff options
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'toNow',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b0d77d9d182f77f9fe896e21f1f51d42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in a human readable format in the current locale from an other
     * instance given to now
     *
     * @param int|array $syntax  if array passed, parameters will be extracted from it, the array may contains:
     *                           - \'syntax\' entry (see below)
     *                           - \'short\' entry (see below)
     *                           - \'parts\' entry (see below)
     *                           - \'options\' entry (see below)
     *                           - \'join\' entry determines how to join multiple parts of the string
     *                           `  - if $join is a string, it\'s used as a joiner glue
     *                           `  - if $join is a callable/closure, it get the list of string and should return a string
     *                           `  - if $join is an array, the first item will be the default glue, and the second item
     *                           `    will be used instead of the glue for the last item
     *                           `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
     *                           `  - if $join is missing, a space will be used as glue
     *                           if int passed, it add modifiers:
     *                           Possible values:
     *                           - CarbonInterface::DIFF_ABSOLUTE          no modifiers
     *                           - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
     *                           - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
     *                           Default value: CarbonInterface::DIFF_ABSOLUTE
     * @param bool      $short   displays short format of time units
     * @param int       $parts   maximum number of parts to display (default value: 1: single part)
     * @param int       $options human diff options
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'ago',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5e70f02db389e3d946d307c9852f8c15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the difference in a human readable format in the current locale from current instance to an other
     * instance given (or now if null given).
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'timespan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6aa3ad82f02d544291a378f74fbe75b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns either the close date "Friday 15h30", or a calendar date "10/09/2017" is farthest than 7 days from now.
     *
     * @param Carbon|\\DateTimeInterface|string|null $referenceTime
     * @param array                                 $formats
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'calendar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a66542a83c09285ded99fc867b1ed1e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var CarbonInterface $current */',
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'calendar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '3252c34e660ca0b6e29ebf911adaed2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var CarbonInterface $other */',
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
          'translator' => 'Carbon\\Translator',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
          'datetimeinterface' => 'DateTimeInterface',
        ),
         'className' => 'Carbon\\Traits\\Difference',
         'functionName' => 'calendar',
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