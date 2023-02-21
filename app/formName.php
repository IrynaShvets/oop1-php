<?php

namespace App;
trait formName
{
    public function formNameOfAuthorOfReport(): string
    {
        list($firstname, $lastname, $surname) = explode(" ", $this->getAuthor());
        $words = explode(" ", $this->getAuthor());
        $firstname = $words[0];
        $lastname = mb_substr(mb_strtoupper($words[1]), 0, 1) . '.';
        $surname = mb_substr(mb_strtoupper($words[2]), 0, 1) . '.';
        $name = $firstname . ' ' . $lastname . $surname;
        $this->author = $firstname . ' ' . $lastname . $surname;
        return $name;
    }
}