<?php

require_once('../vendor/autoload.php');
$organization = new \App\Organization('Palmo', 1234567891011, 2345678912345, 'Пронь Василь Васильович');
//$organization->formNameOfAuthorOfReport();
//$organization = new \App\Organization();
//$organization->getInformationAboutOrganization('Palmo', 1234567891011, 2345678912345, 'Пронь Василь Васильович');

$annualReport = new \App\AnnualReport(1, 'Звіт річний', ' Фінансовий звіт малого підприємства ', 'Швець Ірина Петрівна', $organization);
$annualReport->formNameOfAuthorOfReport();
$annualReport->getDateReportCreated();
$annualReport->setName('Звіт річний');
$annualReport->setText(' Фінансовий звіт малого підприємства ');
$annualReport->save();
$annualReport->getThisDateReport();
//$annualReport->getFormOrganization($organization);

$monthlyReport = new \App\MonthlyReport( 1,'Звіт місячний', ' Єдиний соціальний внесок ', 'Козоріз Богдан Богданович', $organization);
$monthlyReport->formNameOfAuthorOfReport();
$monthlyReport->getDateReportCreated();
$monthlyReport->setName('Звіт місячний');
$monthlyReport->setText(' Єдиний соціальний внесок ');
$monthlyReport->save();
$monthlyReport->getThisDateReport();

$weeklyReport = new \App\WeeklyReport( 1,'Звіт тижневий', ' Моніторинг призначених справ за тиждень ', 'Сидоренко Леонід Васильович', $organization);
$weeklyReport->formNameOfAuthorOfReport();
$weeklyReport->getDateReportCreated();
$weeklyReport->setName('Звіт тижневий');
$weeklyReport->setText(' Моніторинг призначених справ за тиждень ');
$weeklyReport->save();
$weeklyReport->getThisDateReport();

dd($annualReport, $monthlyReport, $weeklyReport);