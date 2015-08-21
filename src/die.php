<?php

/**
 * Created by PhpStorm.
 * User: azder
 * Date: 21/08/2015
 * Time: 3:43
 */
namespace Azder\D;


function jsonln( $expression )
{
    die( json_encode( $expression, JSON_PRETTY_PRINT ) . PHP_EOL );
}


function export( $expression )
{
    var_export( $expression );
    die();
}


function dump( $expression )
{
    var_dump( $expression );
    die();
}


function printr( $expression )
{
    print_r( $expression );
    die();
}


function println( $string )
{
    print $string . PHP_EOL;
    die();
}

