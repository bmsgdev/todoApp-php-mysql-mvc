<?php
class UserController
{
    public function homePage()
    {
        require_once("../views/Home.php");
    }
    public function index()
    {
        echo "index";
    }
    public function create()
    {
        echo "create";
    }
    public function delete()
    {
        echo "delete";
    }
    public function update()
    {
        echo "update";
    }
}
