ConsoleLog
==========

PHP class for output strings, objects, etc. to terminal (console) with colors, background colors and styles.

Use
---

```php
// Output green string on yellow background with bold and negative styles
$var = 'foo string';
ConsoleLog::output( $obj, 'green', 'yellow', array('bold', 'negative'));
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
