<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/public/php/models/Pages.php';

class ReadPages extends Pages
{

    public function getPage($id_page)
    {
        if (!$page = $this->selectPage($id_page)) {
            return false;
        }

        return $page;
    }
}
