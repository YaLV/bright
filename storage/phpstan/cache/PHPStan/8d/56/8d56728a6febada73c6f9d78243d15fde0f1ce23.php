<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\nesbot\\carbon\\src\\Carbon\\Traits\\Boundaries.php-1610491694',
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
    'a07f551620628fdea3164b810ae35b45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait Boundaries.
 *
 * startOf, endOf and derived method for each unit.
 *
 * Depends on the following properties:
 *
 * @property int $year
 * @property int $month
 * @property int $daysInMonth
 * @property int $quarter
 *
 * Depends on the following methods:
 *
 * @method $this setTime(int $hour, int $minute, int $second = 0, int $microseconds = 0)
 * @method $this setDate(int $year, int $month, int $day)
 * @method $this addMonths(int $value = 1)
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4ec9c5ba61a86c6dc76691eb544e6137' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets the time to 00:00:00 start of day
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfDay();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'startOfDay',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9f826bc34bb9a797d7a389d7e14da693' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets the time to 23:59:59.999999 end of day
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfDay();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'endOfDay',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '69e25904322e4c071fb16044cbef350e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets the date to the first day of the month and the time to 00:00:00
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfMonth();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'startOfMonth',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '608bcbf5ec112404336043da7ae9231f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets the date to end of the month and time to 23:59:59.999999
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfMonth();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'endOfMonth',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd07e12371bcde7e375481603023cd009' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets the date to the first day of the quarter and the time to 00:00:00
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfQuarter();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'startOfQuarter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6af50c0d462004a5ee62de6d5703ca2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets the date to end of the quarter and time to 23:59:59.999999
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfQuarter();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'endOfQuarter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '179ac324ebdfbee23dfa897f6660fae0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets the date to the first day of the year and the time to 00:00:00
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfYear();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'startOfYear',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '89e6ff4f9acb72e1c331a68a22a5c615' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets the date to end of the year and time to 23:59:59.999999
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfYear();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'endOfYear',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '612d772c4c680b9453f5e08449eb0f96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets the date to the first day of the decade and the time to 00:00:00
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfDecade();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'startOfDecade',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '898b08a737acf9fe78ac5ab6d7c47300' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets the date to end of the decade and time to 23:59:59.999999
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfDecade();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'endOfDecade',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '1ab725ae67e10025c4619880731c1ca9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets the date to the first day of the century and the time to 00:00:00
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfCentury();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'startOfCentury',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8ec8e33b580b85f1dcad5bc304fa651c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets the date to end of the century and time to 23:59:59.999999
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfCentury();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'endOfCentury',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'a40cf8e4dc39974b0364c2dda159137f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets the date to the first day of the millennium and the time to 00:00:00
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfMillennium();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'startOfMillennium',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '77b5a948afea01742d2c3e2b4e597e99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets the date to end of the millennium and time to 23:59:59.999999
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfMillennium();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'endOfMillennium',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f28ea9982153a7bab1dc74aaa9ad8178' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets the date to the first day of week (defined in $weekStartsAt) and the time to 00:00:00
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfWeek() . "\\n";
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->locale(\'ar\')->startOfWeek() . "\\n";
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfWeek(Carbon::SUNDAY) . "\\n";
     * ```
     *
     * @param int $weekStartsAt optional start allow you to specify the day of week to use to start the week
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'startOfWeek',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '80146256fb19dedae5f0d8e6fba924ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets the date to end of week (defined in $weekEndsAt) and time to 23:59:59.999999
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfWeek() . "\\n";
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->locale(\'ar\')->endOfWeek() . "\\n";
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfWeek(Carbon::SATURDAY) . "\\n";
     * ```
     *
     * @param int $weekEndsAt optional start allow you to specify the day of week to use to end the week
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'endOfWeek',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'c5cf057a567f23801343445930c9b0ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to start of current hour, minutes and seconds become 0
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfHour();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'startOfHour',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '75ae5cd96d4b10f35fc04066d58c1329' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to end of current hour, minutes and seconds become 59
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfHour();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'endOfHour',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '8d0d6d53447915f374867bf5e73d09f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to start of current minute, seconds become 0
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->startOfMinute();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'startOfMinute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ed528c2e4a9ea55677342c149cd7a34c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to end of current minute, seconds become 59
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16\')->endOfMinute();
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'endOfMinute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '790880b74d144f1de9c011364f341b01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to start of current second, microseconds become 0
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16.334455\')
     *   ->startOfSecond()
     *   ->format(\'H:i:s.u\');
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'startOfSecond',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'b8e0c581c7950055359014c1e034f0f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to end of current second, microseconds become 999999
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16.334455\')
     *   ->endOfSecond()
     *   ->format(\'H:i:s.u\');
     * ```
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'endOfSecond',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f53313a991af3fb03a8733cfd67e7c6c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to start of current given unit.
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16.334455\')
     *   ->startOf(\'month\')
     *   ->endOf(\'week\', Carbon::FRIDAY);
     * ```
     *
     * @param string            $unit
     * @param array<int, mixed> $params
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'startOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '4773a9172bec907a07704a9654a2060c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Modify to end of current given unit.
     *
     * @example
     * ```
     * echo Carbon::parse(\'2018-07-25 12:45:16.334455\')
     *   ->startOf(\'month\')
     *   ->endOf(\'week\', Carbon::FRIDAY);
     * ```
     *
     * @param string            $unit
     * @param array<int, mixed> $params
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'unknownunitexception' => 'Carbon\\Exceptions\\UnknownUnitException',
        ),
         'className' => 'Carbon\\Traits\\Boundaries',
         'functionName' => 'endOf',
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