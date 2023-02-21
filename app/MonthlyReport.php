<?php

namespace App;

class MonthlyReport extends Report
{
    public function getDateReportCreated(): int
    {
        return (int) date("m");
    }
}