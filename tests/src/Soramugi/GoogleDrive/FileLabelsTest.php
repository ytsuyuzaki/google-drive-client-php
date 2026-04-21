<?php

namespace Soramugi\GoogleDrive\Tests;

use Soramugi\GoogleDrive\FileLabels;
use Mockery;

class FileLabelsTest extends \PHPUnit\Framework\TestCase
{
    protected ?FileLabels $fileLabels = null;
    function setUp(): void
    {
        $this->fileLabels = new FileLabels;
    }

    function tearDown(): void
    {
        $this->fileLabels = null;
    }

    function testUseObjects()
    {
        $ref = new \ReflectionMethod(
            'Soramugi\GoogleDrive\FileLabels',
            'useObjects'
        );
        $ref->setAccessible(true);
        $this->assertTrue($ref->invoke(new FileLabels()));
    }
}
