<?php

/**
 * Created by PhpStorm.
 * User: azder
 * Date: 21/08/2015
 * Time: 3:43
 */
namespace Azder\D;

const CT_JSON = 'application/json; charset=utf-8';
const CT_TEXT = 'text/plain; charset=utf-8';

function ctjsonln($expression) {
    header('Content-Type: ' . CT_JSON);
    jsonln($expression);
}


function jsonln($expression) {
    die(json_encode($expression, JSON_PRETTY_PRINT) . PHP_EOL);
}


function export($expression) {
    var_export($expression);
    die();
}

function exportln($expression) {
    var_export($expression);
    print PHP_EOL;
    die();
}


function dump($expression) {
    var_dump($expression);
    die();
}

function dumpln($expression) {
    var_dump($expression);
    print PHP_EOL;
    die();
}


function printr($expression) {
    print_r($expression);
    die();
}


function ctprintrln($expression) {
    header('Content-Type: ' . CT_TEXT);
    printrln($expression);
}

function printrln($expression) {
    print_r($expression);
    print PHP_EOL;
    die();
}


function prnt($string) {
    print $string;
    die();
}

function ctprintln($expression) {
    header('Content-Type: ' . CT_TEXT);
    println($expression);
}

function println($string) {
    print $string . PHP_EOL;
    die();
}

