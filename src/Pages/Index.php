<?php

namespace Javanile\MoldableDocs\Pages;

use Javanile\Elegy\Page;
use Javanile\MoldableDocs\Samples\People;

class Index extends Page
{
    public function content()
    {
        $this->renderClass('Javanile\\MoldableDocs\\Samples\\People');

        // @block : start 'insert'
        // Insert one record
        //People::insert([
        //    'name' => 'ciao'
        //]);
        // @block : end

        $this->renderFileBlock(__FILE__, 'insert');

        //People::desc();
        //People::dump();
    }
}
