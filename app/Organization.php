<?php

namespace App;

class Organization
{
    use \App\FormName;

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

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = formNameOfAuthorOfReport();
        $this->author = $author;
    }

    public function getInformationAboutOrganization()
    {
        return "$this->title\n(ІПН:$this->ipn\КПП:$this->kpp). Директор: $this->author";
    }

}
