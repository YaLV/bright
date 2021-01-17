<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\nesbot\\carbon\\src\\Carbon\\Traits\\Modifiers.php-1610491694',
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
    'f80c8efcdc4d4417d5dacfd54f21fa85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait Modifiers.
 *
 * Returns dates relative to current date using modifier short-hand.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9c460aa8770bc14bd237d7a11f71075c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Midday/noon hour.
     *
     * @var int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9de2a0e4b7f7c0986f3b9d7411e686a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * get midday/noon hour
     *
     * @return int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'getMidDayAt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2e51542334b7aefdbe743ec747dbf516' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
     *             You should rather consider mid-day is always 12pm, then if you need to test if it\'s an other
     *             hour, test it explicitly:
     *                 $date->format(\'G\') == 13
     *             or to set explicitly to a given hour:
     *                 $date->setTime(13, 0, 0, 0)
     *
     * Set midday/noon hour
     *
     * @param int $hour midday hour
     *
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'setMidDayAt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '07cc5eed06fe44ef897a1a287790251d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to midday, default to self::$midDayAt
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'midDay',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '01546d8781497ee9c352da7136a90178' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to the next occurrence of a given modifier such as a day of
     * the week. If no modifier is provided, modify to the next occurrence
     * of the current day of the week. Use the supplied constants
     * to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param string|int|null $modifier
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'next',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0922b00174b4d706b3880f8fc91ddefc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Go forward or backward to the next week- or weekend-day.
     *
     * @param bool $weekday
     * @param bool $forward
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'nextOrPreviousDay',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83c59dfbe2ff6156aa04cb9d09b0771b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var CarbonInterface $date */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'nextOrPreviousDay',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1423b1e7a6eb589f264dc7c6b2a741b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Go forward to the next weekday.
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'nextWeekday',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '71267a5662a18499e832ebe2d3209f3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Go backward to the previous weekday.
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'previousWeekday',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a939e6490e9d97443d72cf171f664ad0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Go forward to the next weekend day.
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'nextWeekendDay',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f933f1d605dc8e0454f0a0a59ec3175a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Go backward to the previous weekend day.
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'previousWeekendDay',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '33d7b1500d680f1d9df6629a66c62cba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to the previous occurrence of a given modifier such as a day of
     * the week. If no dayOfWeek is provided, modify to the previous occurrence
     * of the current day of the week. Use the supplied constants
     * to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param string|int|null $modifier
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'previous',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '17d376e0fe47d98a408be9a81006fedb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to the first occurrence of a given day of the week
     * in the current month. If no dayOfWeek is provided, modify to the
     * first day of the current month.  Use the supplied constants
     * to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int|null $dayOfWeek
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'firstOfMonth',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '148cd880afdc5053763745796ecbcaec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to the last occurrence of a given day of the week
     * in the current month. If no dayOfWeek is provided, modify to the
     * last day of the current month.  Use the supplied constants
     * to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int|null $dayOfWeek
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'lastOfMonth',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '566bd95ffe268b469f6a01d0f645bfd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to the given occurrence of a given day of the week
     * in the current month. If the calculated occurrence is outside the scope
     * of the current month, then return false and no modifications are made.
     * Use the supplied constants to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int $nth
     * @param int $dayOfWeek
     *
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'nthOfMonth',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd249a1eaeedf76c79dc0868f1f13bb18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to the first occurrence of a given day of the week
     * in the current quarter. If no dayOfWeek is provided, modify to the
     * first day of the current quarter.  Use the supplied constants
     * to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int|null $dayOfWeek day of the week default null
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'firstOfQuarter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b04ee881ed443ceef267158d42144d77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to the last occurrence of a given day of the week
     * in the current quarter. If no dayOfWeek is provided, modify to the
     * last day of the current quarter.  Use the supplied constants
     * to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int|null $dayOfWeek day of the week default null
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'lastOfQuarter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea6363ae242dbf71b2aa61b1cabe51f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to the given occurrence of a given day of the week
     * in the current quarter. If the calculated occurrence is outside the scope
     * of the current quarter, then return false and no modifications are made.
     * Use the supplied constants to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int $nth
     * @param int $dayOfWeek
     *
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'nthOfQuarter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '2fe53d7f0e9dfdd79d9f07d30144aacd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to the first occurrence of a given day of the week
     * in the current year. If no dayOfWeek is provided, modify to the
     * first day of the current year.  Use the supplied constants
     * to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int|null $dayOfWeek day of the week default null
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'firstOfYear',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6e860e195a7ba9e956f818130651b965' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to the last occurrence of a given day of the week
     * in the current year. If no dayOfWeek is provided, modify to the
     * last day of the current year.  Use the supplied constants
     * to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int|null $dayOfWeek day of the week default null
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'lastOfYear',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '68676d84077fc2f42740fd051a8961a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to the given occurrence of a given day of the week
     * in the current year. If the calculated occurrence is outside the scope
     * of the current year, then return false and no modifications are made.
     * Use the supplied constants to indicate the desired dayOfWeek, ex. static::MONDAY.
     *
     * @param int $nth
     * @param int $dayOfWeek
     *
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'nthOfYear',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '387c624e97d444cd32f6d75899abc03a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify the current instance to the average of a given instance (default now) and the current instance
     * (second-precision).
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|null $date
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'average',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f20eae4deec5a122df70c561283a22b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the closest date from the instance (second-precision).
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date1
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date2
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'closest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a6bbc917221300636658999b2b488d23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the farthest date from the instance (second-precision).
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date1
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date2
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'farthest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'e60fa1476a0c27ebae5eaa2df643b0d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the minimum instance between a given instance (default now) and the current instance.
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'min',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '5af068061063379151aaa099b306a369' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the minimum instance between a given instance (default now) and the current instance.
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @see min()
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'minimum',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ff3e9481bf51ff876e98c2dc3835ca7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the maximum instance between a given instance (default now) and the current instance.
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'max',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c9ae7a516c7fa02834c00a94b3441657' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get the maximum instance between a given instance (default now) and the current instance.
     *
     * @param \\Carbon\\Carbon|\\DateTimeInterface|mixed $date
     *
     * @see max()
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'maximum',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c83f0bfca026e3cd038bed488e51e6da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Calls \\DateTime::modify if mutable or \\DateTimeImmutable::modify else.
     *
     * @see https://php.net/manual/en/datetime.modify.php
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'modify',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '456f9b964391b84829b89cae46440032' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Similar to native modify() method of DateTime but can handle more grammars.
     *
     * @example
     * ```
     * echo Carbon::now()->change(\'next 2pm\');
     * ```
     *
     * @link https://php.net/manual/en/datetime.modify.php
     *
     * @param string $modifier
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carboninterface' => 'Carbon\\CarbonInterface',
        ),
         'className' => 'Carbon\\Traits\\Modifiers',
         'functionName' => 'change',
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