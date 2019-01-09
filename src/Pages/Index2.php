<?php

namespace Javanile\MoldableGithubIo\Pages;

use Javanile\MoldableDocs\Samples\People;

class Index2 extends Page
{
    public function render()
    {
        $this->render->print("<h1>Index2</h1>");
        $this->render->classSourceCode(Samples\People::class);
        //$this->render->markdown('docs/insert.md');
        //$this->renderClass('Javanile\\MoldableDocs\\Samples\\People');
        // <code name="insert" lang="php">
        // Insert one record
        //People::insert([
        //    'name' => 'ciao'
        //]);
        // </code>
        //$this->renderCodeBlock(__FILE__, 'insert');
        //People::desc();
        //People::dump();
    }
}
