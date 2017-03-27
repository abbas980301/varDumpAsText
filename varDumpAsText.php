<?php
/**
 * Telegram Error Logger Class.
 * @author shakibonline
 */

/**
 * @param $array
 * @param string $title
 * @param bool $head
 * @return string
 */
function rt($array, $title = '', $head = true)
{

    var_dump($title);

    $ref = 'ref';
    $text = '';
    if ($head) {
        $text = "[$ref]";
        $text .= "\n";
    }
    foreach ($array as $key => $value) {
        if (is_array($value)) {
//            if ($title != '')
//                $title = $title.'.'.$key;
            $text .= rt($value , $key, false);
        } else {
            if (is_bool($value)) {
//                $value = var_export($value,true);
                $value = ($value) ? 'true' : 'false';
            }
            if ($title != '')
                $text .= $ref . '.'.$title.'.'.$key.'= '.$value.PHP_EOL;
            else
                $text .= $ref . '.'.$key.'= '.$value.PHP_EOL;

        }
    }
    return $text;
}
