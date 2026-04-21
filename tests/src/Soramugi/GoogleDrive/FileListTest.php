<?php

namespace Soramugi\GoogleDrive\Tests;

use Soramugi\GoogleDrive\FileList;

class FileListTest extends \PHPUnit\Framework\TestCase
{
    function testUseObjects()
    {
        $ref = new \ReflectionMethod(
            'Soramugi\GoogleDrive\FileList',
            'useObjects'
        );
        $ref->setAccessible(true);
        $this->assertTrue($ref->invoke(new FileList()));
    }
}
