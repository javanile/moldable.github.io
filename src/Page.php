<?php
/**
 * File description.
 *
 * PHP version 5
 *
 * @category -
 *
 * @author    -
 * @copyright -
 * @license   -
 */

namespace Moldable\MoldableGithubIo;

use Javanile\Elegy\Page as ElegyPage;

class Page extends ElegyPage
{
    /**
     * Constructor.
     */
    public function __construct(Render $render)
    {
        $this->render = $render
    }
}
