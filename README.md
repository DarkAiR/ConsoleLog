ConsoleLog
==========

PHP class for output strings, objects, etc. to terminal (console) with colors, background colors and styles.

Output
------

```php
// Output green string on yellow background with bold and negative styles
$var = 'foo string';
ConsoleLog::output( $obj );
```


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
