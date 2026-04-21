<?php

namespace Soramugi\GoogleDrive;

class Spreadsheet extends File
{
    public function __construct()
    {
        $this->setMimeType('text/csv');
        $this->setOptParams(array('convert' => true));

        parent::__construct(...func_get_args());
    }
}
