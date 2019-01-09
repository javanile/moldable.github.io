<?php

namespace Moldable\MoldableGithubIo\Tests;

use Javanile\Producer;
use PHPUnit\Framework\TestCase;
use Moldable\MoldableGithubIo\Render;

Producer::addPsr4([
    'Moldable\MoldableGithubIo\\' => __DIR__.'/../src',
    'Moldable\MoldableGithubIo\\Tests\\' => __DIR__,
]);

final class MoldableGithubIoTest extends TestCase
{
    public function testCreateAnInstance()
    {
        $object = new Render();
        $this->assertInstanceOf('Moldable\MoldableGithubIo\Render', $object);

        $output = "Hello World!";
        $this->assertRegexp('/World/i', $output);
    }
}
