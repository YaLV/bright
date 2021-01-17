<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\nesbot\\carbon\\src\\Carbon\\Traits\\Week.php-1610491694',
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
    '7771a1b282df0411f87f9fe42cc7aa5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait Week.
 *
 * week and ISO week number, year and count in year.
 *
 * Depends on the following properties:
 *
 * @property int $daysInYear
 * @property int $dayOfWeek
 * @property int $dayOfYear
 * @property int $year
 *
 * Depends on the following methods:
 *
 * @method static addWeeks(int $weeks = 1)
 * @method static copy()
 * @method static dayOfYear(int $dayOfYear)
 * @method string getTranslationMessage(string $key, string $locale = null, string $default = null, $translator = null)
 * @method static next(int|string $day = null)
 * @method static startOfWeek(int $day = 1)
 * @method static subWeeks(int $weeks = 1)
 * @method static year(int $year = null)
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Carbon\\Traits\\Week',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'aae65429be2d834b28648a4d9598e216' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Set/get the week number of year using given first day of week and first
     * day of year included in the first week. Or use ISO format if no settings
     * given.
     *
     * @param int|null $year      if null, act as a getter, if not null, set the year and return current instance.
     * @param int|null $dayOfWeek first date of week from 0 (Sunday) to 6 (Saturday)
     * @param int|null $dayOfYear first day of year included in the week #1
     *
     * @return int|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Carbon\\Traits\\Week',
         'functionName' => 'isoWeekYear',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c93f1ebe33e82acece56ff8ae1c52530' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Set/get the week number of year using given first day of week and first
     * day of year included in the first week. Or use US format if no settings
     * given (Sunday / Jan 6).
     *
     * @param int|null $year      if null, act as a getter, if not null, set the year and return current instance.
     * @param int|null $dayOfWeek first date of week from 0 (Sunday) to 6 (Saturday)
     * @param int|null $dayOfYear first day of year included in the week #1
     *
     * @return int|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Carbon\\Traits\\Week',
         'functionName' => 'weekYear',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ae5a873f7b273a8ed8f74647ff555f63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the number of weeks of the current week-year using given first day of week and first
     * day of year included in the first week. Or use ISO format if no settings
     * given.
     *
     * @param int|null $dayOfWeek first date of week from 0 (Sunday) to 6 (Saturday)
     * @param int|null $dayOfYear first day of year included in the week #1
     *
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Carbon\\Traits\\Week',
         'functionName' => 'isoWeeksInYear',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f19a3203ba36905fd70fd42c2120294f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the number of weeks of the current week-year using given first day of week and first
     * day of year included in the first week. Or use US format if no settings
     * given (Sunday / Jan 6).
     *
     * @param int|null $dayOfWeek first date of week from 0 (Sunday) to 6 (Saturday)
     * @param int|null $dayOfYear first day of year included in the week #1
     *
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Carbon\\Traits\\Week',
         'functionName' => 'weeksInYear',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '196c5b265a07aff475561228a78180e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get/set the week number using given first day of week and first
     * day of year included in the first week. Or use US format if no settings
     * given (Sunday / Jan 6).
     *
     * @param int|null $week
     * @param int|null $dayOfWeek
     * @param int|null $dayOfYear
     *
     * @return int|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Carbon\\Traits\\Week',
         'functionName' => 'week',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a101a1e0c5dbdb1c1e2990f951a11e8b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get/set the week number using given first day of week and first
     * day of year included in the first week. Or use ISO format if no settings
     * given.
     *
     * @param int|null $week
     * @param int|null $dayOfWeek
     * @param int|null $dayOfYear
     *
     * @return int|static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Carbon\\Traits\\Week',
         'functionName' => 'isoWeek',
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