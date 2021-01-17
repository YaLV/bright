<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'C:\\wamp64\\www\\vendor\\symfony\\http-foundation\\File\\File.php-1610491669',
   'data' => 
  array (
    '82fb337db3a984c8cf37773d343708f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A file in the file system.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'mimetypes' => 'Symfony\\Component\\Mime\\MimeTypes',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\File',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '7a7f771b95db8e0f509cecc4c28435a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Constructs a new file from the given path.
     *
     * @param string $path      The path to the file
     * @param bool   $checkPath Whether to check the path or not
     *
     * @throws FileNotFoundException If the given path is not a file
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'mimetypes' => 'Symfony\\Component\\Mime\\MimeTypes',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\File',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '6fcfb249b00d44cc8f7411fd9099f98b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the extension based on the mime type.
     *
     * If the mime type is unknown, returns null.
     *
     * This method uses the mime type as guessed by getMimeType()
     * to guess the file extension.
     *
     * @return string|null The guessed extension or null if it cannot be guessed
     *
     * @see MimeTypes
     * @see getMimeType()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'mimetypes' => 'Symfony\\Component\\Mime\\MimeTypes',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\File',
         'functionName' => 'guessExtension',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '64147fa77b0f49d5d7ffe1ca1a454ec4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the mime type of the file.
     *
     * The mime type is guessed using a MimeTypeGuesserInterface instance,
     * which uses finfo_file() then the "file" system binary,
     * depending on which of those are available.
     *
     * @return string|null The guessed mime type (e.g. "application/pdf")
     *
     * @see MimeTypes
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'mimetypes' => 'Symfony\\Component\\Mime\\MimeTypes',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\File',
         'functionName' => 'getMimeType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '9387f815d8565944f0307e4481af0897' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Moves the file to a new location.
     *
     * @return self A File object representing the new file
     *
     * @throws FileException if the target file could not be created
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'mimetypes' => 'Symfony\\Component\\Mime\\MimeTypes',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\File',
         'functionName' => 'move',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    'd405b34d5ba1e604b19e2ee1db76d9d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return self
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'mimetypes' => 'Symfony\\Component\\Mime\\MimeTypes',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\File',
         'functionName' => 'getTargetFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
        )),
      )),
    )),
    '83781f156cc5495be8db592a1867e40d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns locale independent base name of the given path.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpFoundation\\File',
         'uses' => 
        array (
          'fileexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException',
          'filenotfoundexception' => 'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException',
          'mimetypes' => 'Symfony\\Component\\Mime\\MimeTypes',
        ),
         'className' => 'Symfony\\Component\\HttpFoundation\\File\\File',
         'functionName' => 'getName',
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