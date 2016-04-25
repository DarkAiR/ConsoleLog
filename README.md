ConsoleLog
==========

PHP class for output strings, objects, etc. to terminal (console) with colors, background colors and styles.

Output
------

####Simple output

```php
$obj = <standart type, array, object>
ConsoleLog::output($obj);
```

####Extended output
```php
ConsoleLog::title('Cyan title');
ConsoleLog::warning('Yellow warning');
ConsoleLog::error('Red error');
ConsoleLog::ok();   // green OK
```

Any output methods has last parameter $useNewLine=true, which automatically added new line at the end of the line. Thats why you can write difficult output like:

```php
ConsoleLog::title('Title withoud EOL ', false);
ConsoleLog::warning('Warning without EOL ', false);
ConsoleLog::eol();

ConsoleLog::output('Text without EOL ', false);
ConsoleLog::ok();       // output green OK and EOL
```

Progress bar
------------

```php
ConsoleLog::progress('Some process text', $currentIdx, $totalIdx, $progressWidth);
```

NOTE: ```$currentIdx``` and ```$totalIdx``` started at 1.


Indents
-------

```php
ConsoleLog::addIndent();
ConsoleLog::output('smth');
ConsoleLog::removeIndent();
```


Styles
------

```php
ConsoleLog::setStyle('green', 'yellow', array('bold', 'negative'));     // color, bgcolor, array(styles)
ConsoleLog::output('smth');
ConsoleLog::resetStyle();
```


List of colors, backgrounds and styles:
---------------------------------------

```code
color = [
    'gray'
    'black'
    'red'
    'green'
    'yellow'
    'blue'
    'magenta'
    'cyan'
    'white'
    'default'
]
bgcolor = [
    'gray'
    'black'
    'red'
    'green'
    'yellow'
    'blue'
    'magenta'
    'cyan'
    'white'
    'default'
]
style = [
    'default'
    'bold'
    'faint'
    'normal'
    'italic'
    'notitalic'
    'underlined'
    'doubleunderlined'
    'notunderlined'
    'blink'
    'blinkfast'
    'noblink'
    'negative'
    'positive'
]
```
