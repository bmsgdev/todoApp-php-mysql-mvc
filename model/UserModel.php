<?php

require_once "../model/Database.php";
class Users extends Database
{
  public function getAllUsers()
  {
    $sql = "SELECT * FROM users";
    return parent::getManyData($sql);
    // print_r($users);                               
  }
 
  public function getOneUser($username)
  {
    $sql = "SELECT * FROM users WHERE username=? ";
    $data = array($username);
    $user = parent::getOneData($data, $sql);
    print_r($user);
  }

  public function updateUser($user)
  {
    $newdata = $user;
    $sql = "UPDATE users SET username=?, password=? WHERE username=?";
    parent::setData($sql, $newdata);
  }
  public function deleteUser($username)
  {
    $data = array($username);
    $sql = "DELETE FROM users WHERE username=?";
    parent::setData($sql, $data);
  }
   public function createUser($data){
    $sql = "INSERT INTO users(username,email,password) VALUES (?,?,?)";
    parent::setData($sql, $data);
  }
}
$instanceOfUser = new Users();
$instanceOfUser->getAllUsers();
    // $instanceOfUser->getOneUser(["Bms"]);
// $instanceOfUser->updateUser(["Bms10", "newpw", 1]);
// $instanceOfUser->deleteUser(["test"]);