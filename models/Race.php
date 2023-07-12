<?php

class Race
{
    private int $id;
    private string $race;
    private int $type_id;


    public static function getRaceByType($type_id): array
    {
        $db = Database::getInstancePDO();
        $sql = 'SELECT 
                    `race`.id, name_race, type
                FROM
                    `race`
                        RIGHT JOIN
                    `type` ON id_type = `type`.id';
        $stmt = $db->prepare($sql);
        $stmt->bindValue(":type_id", $type_id);
        $stmt->execute();
        $race = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $race;
    }
}
