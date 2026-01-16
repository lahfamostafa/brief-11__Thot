<?php

require_once '../app/core/Database.php';

class Course
{
    public static function all()
    {
        $db = Database::connect();

        $stmt = $db->query("SELECT * FROM courses ORDER BY created_at DESC");

        return $stmt->fetchAll();
    }

    public static function find($id)
    {
        $db = Database::connect();

        $stmt = $db->prepare("SELECT * FROM courses WHERE id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch();
    }
}
