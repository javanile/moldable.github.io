<?php

namespace Javanile\MoldableGithubIo\Pages;

use Javanile\Elegy\Page;
use Javanile\MoldableDocs\Samples\People;

class Page2 extends Page
{
    public function content()
    {
        //$this->printClass('Javanile\\MoldableDocs\\Samples\\People');

        // @block : start 'insert'
        // Insert one record
        //People::insert([
        //    'name' => 'ciao'
        //]);
        // @block : end

        //$this->printFileBlock(__FILE__, 'insert');

        //People::desc();
        //People::dump();
    }
}
