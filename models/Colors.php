<?php

class Color{
    private int $id;
    private string $color;

    public static function getAllColors() : array
    {
        $db = Database::getInstancePDO();
        $sql ='SELECT * FROM `color`';
        $stmt = $db->query($sql);
        $colors = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $colors;
    }
}