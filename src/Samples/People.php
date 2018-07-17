<?php

// Define "People" model class
namespace Javanile\MoldableDocs\Samples;

use Javanile\Moldable\Storable;

class People extends Storable
{
    public $id = self::KEY;
    public $name = '';
}
