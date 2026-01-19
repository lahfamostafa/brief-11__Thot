<?php

require_once '../app/core/Database.php';

class Student
{
    public static function create($name, $email, $password)
    {
        $db = Database::connect();

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $db->prepare("
            INSERT INTO students (name, email, password)
            VALUES (?, ?, ?)
        ");

        return $stmt->execute([$name, $email, $hashedPassword]);
    }

    public static function authenticate($email, $password)
    {
        $db = Database::connect();

        $stmt = $db->prepare("
            SELECT * FROM students WHERE email = ?
        ");
        $stmt->execute([$email]);

        $student = $stmt->fetch();

        if ($student && password_verify($password, $student['password'])) {
            return $student;
        }

        return false;
    }

    public static function find($id)
    {
        $db = Database::connect();

        $stmt = $db->prepare("
            SELECT id, name, email FROM students WHERE id = ?
        ");
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public static function all(){
        $db = Database::connect();
        $stm = $db->query("select id, name, email from Students");
        return $stm->fetchAll();
    }
}
