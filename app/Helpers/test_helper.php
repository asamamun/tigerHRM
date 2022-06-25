<?php
/**
 * ------------------------------------------------------------------------
 *
 * dDebug Helper
 *
 * Outputs the given variable(s) with formatting and location
 *
 * @access    public
 * @param    mixed    - variables to be output
 */
if ( ! function_exists('ddd'))
{
    function ddd()
    {
        list($callee) = debug_backtrace();

        $args = func_get_args();

        $total_args = func_num_args();

        echo '<div><fieldset style="background: #fefefe !important; border:1px red solid; padding:15px">';
        echo '<legend style="background:blue; color:white; padding:5px;">'.$callee['file'].' @line: '.$callee['line'].'</legend><pre><code>';

        $i = 0;

        foreach ($args as $arg)
        {
            echo '<strong>Debug #' . ++$i . ' of ' . $total_args . '</strong>: ' . '<br>';

            var_dump($arg);
        }

        echo "</code></pre></fieldset><div><br>";
        exit;
    }
} 