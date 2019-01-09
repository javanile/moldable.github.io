<?php

namespace Javanile\MoldableGithubIo\Pages;

use Javanile\Elegy\Page;
use Javanile\MoldableDocs\Samples\People;

class Index extends Page
{
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function content()
    {
        echo "<h1>Index1</h1>";

        //$this->renderMarkdown('docs/insert.md');
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
