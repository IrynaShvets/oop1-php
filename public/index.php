<?php

require_once('../vendor/autoload.php');
$organization = new \App\Organization('Palmo', 1234567891011, 2345678912345, 'Пронь Василь Васильович');
$organization->getInformationAboutOrganization();
$organization->formNameOfAuthorOfReport();

$annualReport = new \App\AnnualReport(1, ' Звіт річний', ' Фінансовий {anchor} звіт {anchor} малого {anchor} підприємства {anchor} ', 'Швець Ірина Петрівна', $organization);
$annualReport->formNameOfAuthorOfReport();
$annualReport->getDateReportCreated();
$annualReport->setName('Звіт річний');
$annualReport->render(' Фінансовий {anchor} звіт {anchor} малого {anchor} підприємства {anchor} ');
$annualReport->save();
$annualReport->getThisDateReport();
$annualReport->getFormOrganization($organization);

$monthlyReport = new \App\MonthlyReport( 1,'Звіт місячний', ' Єдиний {anchor} соціальний внесок ', 'Козоріз Богдан Богданович', $organization);
$monthlyReport->formNameOfAuthorOfReport();
$monthlyReport->getDateReportCreated();
$monthlyReport->setName('Звіт місячний');
$monthlyReport->render(' Єдиний {anchor} соціальний внесок ');
$monthlyReport->save();
$monthlyReport->getThisDateReport();
$monthlyReport->getFormOrganization($organization);

$weeklyReport = new \App\WeeklyReport( 1,'Звіт тижневий', ' Моніторинг {anchor} призначених {anchor} справ за тиждень ', 'Сидоренко Леонід Васильович', $organization);
$weeklyReport->formNameOfAuthorOfReport();
$weeklyReport->getDateReportCreated();
$weeklyReport->setName('Звіт тижневий');
$weeklyReport->render(' Моніторинг {anchor} призначених {anchor} справ за тиждень ');
$weeklyReport->save();
$weeklyReport->getThisDateReport();
$weeklyReport->getFormOrganization($organization);

var_dump($annualReport, $monthlyReport, $weeklyReport);
