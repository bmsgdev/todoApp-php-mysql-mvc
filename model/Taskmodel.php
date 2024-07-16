<?php

require_once "../model/Database.php";
class taskModel extends Database
{
    public function getAllTask()
    {
        $sql = "SELECT * FROM tasks";
        return parent::getManyData($sql);
        // print_r($tasks);                               
    }

    public function getOneTask($id)
    {
        $sql = "SELECT * FROM tasks WHERE id=? ";
        $data = array($id);
        $user = parent::getOneData($data, $sql);
        print_r($user);
    }

    public function updateTask($data)
    {
        $newdata = $data;
        $sql = "UPDATE tasks SET task_text=?,statut=? WHERE id=?";
        parent::setData($sql, $newdata);
    }
    public function deleteTask($data)
    {
        $data = array($data);
        $sql = "DELETE FROM tasks WHERE id=?";
        parent::setData($sql, $data);
    }
    public function addTask($data)
    {
        $sql = "INSERT INTO tasks(task_text) VALUES (?)";
        parent::setData($sql, $data);
    }
}
