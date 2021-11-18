<?php

namespace App\Http\Middleware;

class Cat extends Animal
{
    const CAT_VOICE = 'мяу';

    public function meow()
    {
        return self::CAT_VOICE;
    }

    static function methodA()
    {
        return 'A';
    }
}