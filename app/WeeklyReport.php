<?php

namespace App;

class WeeklyReport extends Report
{
    public function getDateReportCreated(): int
    {
        $date = new \DateTime(date('d.m.Y'));
        $week = $date->format("W");
        return (int) $week;
    }
}