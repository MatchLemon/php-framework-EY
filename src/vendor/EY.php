<?php
/**
* default base
*/
class EY {
public static $request;
public static $router;

}
register_shutdown_function('zyfshutdownfunc');

function zyfshutdownfunc()
{
    if ($error = error_get_last()) {
        echo ('<b>register_shutdown_function: Type:' . $error['type'] . ' Msg: ' . $error['message'] . ' in ' . $error['file'] . ' on line ' . $error['line'] . '</b>');
    }
}
require(__DIR__ . '/autoload.php');
?>