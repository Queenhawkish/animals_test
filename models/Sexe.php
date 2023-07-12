<?php

class Sexe{
    private int $id;
    private string $sex;

    public static function getAllSexes() : array
    {
        $db = Database::getInstancePDO();
        $sql ='SELECT * FROM `sex`';
        $stmt = $db->query($sql);
        $sexes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $sexes;
    }
}