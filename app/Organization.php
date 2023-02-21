<?php

namespace App;

class Organization
{
    use \App\formName;

    private $title;
    private $ipn;
    private $kpp;
    private $address;
    private $author;

    public function __construct(string $title, string $ipn, string $kpp, string $author)
    {
        $this->title = $title;
        $this->ipn = $ipn;
        $this->kpp = $kpp;
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    public function getInformationAboutOrganization(string $title, string $ipn, string $kpp, string $author)
    {
        return $title . '<br>' . '(' . 'ІПН:' . $ipn . 'КПП:' . $kpp . '.' . 'Директор: ' . $author;
    }

}
