<?php

namespace Soramugi\GoogleDrive\Tests;

use Soramugi\GoogleDrive\Spreadsheet;

class SpreadsheetTest extends \PHPUnit\Framework\TestCase
{
    function setUp(): void
    {
        $this->spreadsheet = new Spreadsheet;
    }

    function tearDown(): void
    {
        $this->spreadsheet = null;
    }

    function testNew()
    {
        $this->assertInstanceOf(
            'Soramugi\GoogleDrive\Spreadsheet', $this->spreadsheet
        );
    }

    function testSpreadsheetType()
    {
        $this->assertEquals(
            'text/csv',
            $this->spreadsheet->getMimeType()
        );
        $this->assertEquals(
            array('convert' => true),
            $this->spreadsheet->getOptParams()
        );
    }
}
