<?php

/**
 * Вывод в консоль
 */
class ConsoleLog
{
    static private $color = array(
        'gray'              => 30,
        'black'             => 30,
        'red'               => 31,
        'green'             => 32,
        'yellow'            => 33,
        'blue'              => 34,
        'magenta'           => 35,
        'cyan'              => 36,
        'white'             => 37,
        'default'           => 39
    );
    static private $bgcolor = array(
        'gray'              => 40,
        'black'             => 40,
        'red'               => 41,
        'green'             => 42,
        'yellow'            => 43,
        'blue'              => 44,
        'magenta'           => 45,
        'cyan'              => 46,
        'white'             => 47,
        'default'           => 49,
    );
    static private $style = array(
        'default'           => '0',
        'bold'              => 1,
        'faint'             => 2,
        'normal'            => 22,
        'italic'            => 3,
        'notitalic'         => 23,
        'underlined'        => 4,
        'doubleunderlined'  => 21,
        'notunderlined'     => 24,
        'blink'             => 5,
        'blinkfast'         => 6,
        'noblink'           => 25,
        'negative'          => 7,
        'positive'          => 27,
    );

    static private $indent = 0;
    static private $isNewLine = true;       // Is line new? If yes than add indent

    static public function output($val, $useNewLine = true)
    {
        ob_start();
        if (is_array($val)) {
            print_r($val);
        }
        else
        if (is_object($val) || is_resource($val)) {
            var_dump($val);
        }
        else
        if (is_bool($val)) {
            echo $val ? 'true' : 'false';
        }
        else {
            echo $val;
        }
        $content = ob_get_clean();

        $indentStr = '';
        for ($i=0; $i<self::$indent; $i++)
            $indentStr .= '  ';

        $res = explode(PHP_EOL, $content);
        if (is_array($res) && count($res)>0)
        {
            $last = end($res);
            $last = trim($last);
            if (empty($last))
                array_pop($res);
        }

        // Only on new string add indent. That's why stings whithout carrent return will be working.
        foreach ($res as $str) {
            if (self::$isNewLine)
                echo $indentStr;
            echo $str;
            self::$isNewLine = false;
            if ($useNewLine) {
                echo PHP_EOL;
                self::$isNewLine = true;
            }
        }
    }

    static public function setStyle($color=null, $bgcolor=null, $style=array())
    {
        $codes = array();
        if ($color !== null  &&  isset(self::$color[$color]))
            $codes[] = self::$color[$color];
        if ($bgcolor !== null  &&  isset(self::$bgcolor[$bgcolor]))
            $codes[] = self::$bgcolor[$bgcolor];
        if (is_array($style)  &&  !empty($style)) {
            foreach ($style as $v) {
                if (isset(self::$style[$v]))
                    $codes[] = self::$style[$v];
            }
        }
        if (!empty($codes))
            echo "\033[".implode(';', $codes).'m';
    }

    static public function resetStyle()
    {
        echo "\033[0m";
    }

    static public function addIndent()
    {
        self::$indent++;
    }

    static public function removeIndent()
    {
        if (self::$indent > 0)
            self::$indent--;
    }

    static public function removeAllIndent()
    {
        self::$indent = 0;
    }
}
