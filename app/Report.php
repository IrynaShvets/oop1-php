<?php

namespace App;

abstract class Report
{
    use \App\formName;

    private $number;
    private $name;
    private $text;
    private $author;
    private $dateReport;
    private $revisionNumber = 0;
    private $dateOfLastRevision;
    private $organization;

    public function __construct(int $number, string $name, string $text, string $author, Organization $organization)
    {
        $this->number = $number;
        $this->name = $name;
        $this->author = $author;
        $this->text = $text;
        $this->organization = $organization;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = mb_strtoupper($name);
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = trim($text);
    }


    abstract public function getDateReportCreated(): mixed;

    public function getThisDateReport()
    {
        $this->dateReport = $this->getDateReportCreated();
    }

    public function save()
    {
        $this->revisionNumber += 1;
        $this->dateOfLastRevision = date('d.m.Y h:i:s');

    }

    public function getFormOrganization(Organization $organization): string
    {
        $this->organization = $organization->getInformationAboutOrganization();
        return $this->organization;
    }

}