<?php

require_once dirname(__FILE__) . "/../database/database.php";
require_once dirname(__FILE__) . "/../model/task.php";
require_once dirname(__FILE__) . "/../model/todolist.php";
require_once dirname(__FILE__) . "/../model/user.php";


class StrikeRepository{
    public static function getAllTasks(){
        // Vervolledig deze functie zodat alle taken teruggegeven worden uit de tabel 'tasks'
    }

    public static function getAllLists(){
        // Vervolledig deze functie zodat alle lijsten teruggegeven worden uit de tabel 'lists'
    }

    public static function getAllTasksFromList($listID){
        $arr = Database::getRows("SELECT * FROM tasks WHERE listID=?", [$listID], "Task");
        return $arr;
    }

    public static function getListById($listID){
        $item = Database::getSingleRow("SELECT * FROM lists WHERE id=?", [$listID],"TodoList");
        return $item;
    }

    public static function getUserById($id){
        // Vervolledig deze functie zodat een gebruiker teruggegeven wordt adhv zijn id
    }

    public static function getUserByEmail($email){
        $item = Database::getSingleRow("SELECT * FROM users WHERE email=?", [$email],"User");
        return $item;
    }

    public static function getLastTask(){
        $item = Database::getSingleRow("SELECT * FROM tasks ORDER BY id DESC LIMIT 0, 1", null,"Task");
        return $item;
    }

    public static function createTask($parTitle, $parDone, $parListID){
        // Vervolledig deze functie zodat een nieuwe taak aangemaakt wordt in de tabel 'tasks'
    }

    public static function createList($parTitle, $parDescription){
        $int = Database::execute("INSERT INTO lists (title ,description) VALUES(?,?)", [$parTitle, $parDescription]);
        return $int;
    }

    public static function updateList($parTitle, $parDescription, $parID){
        // Vervolledig deze functie zodat de juiste record in de tabel 'lists' aangepast wordt
    }

    public static function deleteTask($parID){
         // Vervolledig deze functie zodat de juiste record in de tabel 'tasks' verwijderd wordt
    }

    public static function updateTaskDone($parID){
        // Vervolledig deze functie zodat de juiste record in de tabel 'tasks' aangepast wordt (opgelet! enkel de kolom 'done' moet aangepast worden)
    }
}

?>


