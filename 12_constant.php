<?php

// constact== tempat menyimpan varable

define("PHI",3.14);

echo PHI . PHP_EOL;

const UMUR = 32;
echo UMUR;

class lala  
{
    // const dapat disimpan di dalam class
    const NAMA = 'I Made Raditya Bayu';
}

function coba()
{
    return __FUNCTION__;
}

echo coba() . PHP_EOL;

class coba
{
    public $kelas = __CLASS__;
}

// __LINE__;
// __FILE__;
// __DIR__;
// __FUNCTION__;
// __CLASS__;
// __TRAIT__;
// __METHOD__;
// __NAMESPACE__:
