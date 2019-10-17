<?php

namespace App\wcs;

class Bonjour
{
    private $talk = 'Hello World !';

    public function getTalk()
    {
       // echo 'Hello World !';
       return $this->talk;
    }
}

