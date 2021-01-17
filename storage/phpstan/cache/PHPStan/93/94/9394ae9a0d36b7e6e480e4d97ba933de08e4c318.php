<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\nesbot\\carbon\\src\\Carbon\\Traits\\Units.php-1610491694',
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
    'd6d358ec0509d8e19d8193479aad7e23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait Units.
 *
 * Add, subtract and set units.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbonconverterinterface' => 'Carbon\\CarbonConverterInterface',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
        ),
         'className' => 'Carbon\\Traits\\Units',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '88f5e8f50ef1de643512b902ec88766f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add seconds to the instance using timestamp. Positive $value travels
     * forward while negative $value travels into the past.
     *
     * @param string $unit
     * @param int    $value
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbonconverterinterface' => 'Carbon\\CarbonConverterInterface',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
        ),
         'className' => 'Carbon\\Traits\\Units',
         'functionName' => 'addRealUnit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ddfd7b37f7ad1efec92cc18606d56ee9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if a property can be changed via setter.
     *
     * @param string $unit
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbonconverterinterface' => 'Carbon\\CarbonConverterInterface',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
        ),
         'className' => 'Carbon\\Traits\\Units',
         'functionName' => 'isModifiableUnit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '12ff4ae7cd79d795ea94be2270d127b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Call native PHP DateTime/DateTimeImmutable add() method.
     *
     * @param DateInterval $interval
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbonconverterinterface' => 'Carbon\\CarbonConverterInterface',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
        ),
         'className' => 'Carbon\\Traits\\Units',
         'functionName' => 'rawAdd',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'f59732d11e9ae5003dbd8256be79e79f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add given units or interval to the current instance.
     *
     * @example $date->add(\'hour\', 3)
     * @example $date->add(15, \'days\')
     * @example $date->add(CarbonInterval::days(4))
     *
     * @param string|DateInterval|Closure|CarbonConverterInterface $unit
     * @param int                                                  $value
     * @param bool|null                                            $overflow
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbonconverterinterface' => 'Carbon\\CarbonConverterInterface',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
        ),
         'className' => 'Carbon\\Traits\\Units',
         'functionName' => 'add',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'bb745eba9b17b840240ec091fefd6062' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add given units to the current instance.
     *
     * @param string    $unit
     * @param int       $value
     * @param bool|null $overflow
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbonconverterinterface' => 'Carbon\\CarbonConverterInterface',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
        ),
         'className' => 'Carbon\\Traits\\Units',
         'functionName' => 'addUnit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '0ec080781a4a7c7b860a1f881601412b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var static $date */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbonconverterinterface' => 'Carbon\\CarbonConverterInterface',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
        ),
         'className' => 'Carbon\\Traits\\Units',
         'functionName' => 'addUnit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '55bb9269c7b12ebce82a6093454aba1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Subtract given units to the current instance.
     *
     * @param string    $unit
     * @param int       $value
     * @param bool|null $overflow
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbonconverterinterface' => 'Carbon\\CarbonConverterInterface',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
        ),
         'className' => 'Carbon\\Traits\\Units',
         'functionName' => 'subUnit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'ea0ff60c677316e8d385339daca32477' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Call native PHP DateTime/DateTimeImmutable sub() method.
     *
     * @param DateInterval $interval
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbonconverterinterface' => 'Carbon\\CarbonConverterInterface',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
        ),
         'className' => 'Carbon\\Traits\\Units',
         'functionName' => 'rawSub',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '16fd0b2ea7574e89ec57244a7fca7574' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Subtract given units or interval to the current instance.
     *
     * @example $date->sub(\'hour\', 3)
     * @example $date->sub(15, \'days\')
     * @example $date->sub(CarbonInterval::days(4))
     *
     * @param string|DateInterval|Closure|CarbonConverterInterface $unit
     * @param int                                                  $value
     * @param bool|null                                            $overflow
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbonconverterinterface' => 'Carbon\\CarbonConverterInterface',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
        ),
         'className' => 'Carbon\\Traits\\Units',
         'functionName' => 'sub',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'fa68e5f4277504e80ecb1a4880dbd06f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Subtract given units or interval to the current instance.
     *
     * @see sub()
     *
     * @param string|DateInterval $unit
     * @param int                 $value
     * @param bool|null           $overflow
     *
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Carbon\\Traits',
         'uses' => 
        array (
          'carbonconverterinterface' => 'Carbon\\CarbonConverterInterface',
          'carboninterface' => 'Carbon\\CarbonInterface',
          'carboninterval' => 'Carbon\\CarbonInterval',
          'unitexception' => 'Carbon\\Exceptions\\UnitException',
          'closure' => 'Closure',
          'dateinterval' => 'DateInterval',
        ),
         'className' => 'Carbon\\Traits\\Units',
         'functionName' => 'subtract',
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