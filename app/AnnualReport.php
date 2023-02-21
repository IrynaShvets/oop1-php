<?php

namespace App;

class AnnualReport extends Report
{
    public function getDateReportCreated(): string
    {
        return date("Y");
    }
}