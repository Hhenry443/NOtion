<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/public/php/config/db.php';

class Pages extends Db
{
    function __construct()
    {
        $this->db = Db::getConnection();
    }

    protected function selectPage($id_page)
    {
        $sql = "SELECT * FROM pages WHERE id = :id_page";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id_page', $id_page, PDO::PARAM_STR);
        $stmt->execute();

        $results = $stmt->fetch();
        if (!empty($results)) {
            return $results;
        } else {
            return false;
        }
    }
}
