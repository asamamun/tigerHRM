<?php
if ( ! function_exists('key_value_for_dropdown'))
{
    function key_value_for_dropdown()
    {
        list($callee) = debug_backtrace();
        $args = func_get_args();
        $dropcat = [];
        $dropcat[-1] = 'Select';
            foreach ($args[0] as $cat) {
                $dropcat[$cat['id']] = $cat['name'];
                }
        return $dropcat;
    }
} 