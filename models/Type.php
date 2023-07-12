<?php

class Type{
    private int $id;
    private string $type;

    public static function getAllTypes() : array
    {
        $db = Database::getInstancePDO();
        $sql ='SELECT * FROM `type`';
        $stmt = $db->query($sql);
        $types = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $types;
    }
}