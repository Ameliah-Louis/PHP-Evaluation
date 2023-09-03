<?php 

class User 
{
    public int $id = 1;
    public string $username = "améliah";
    public string $pswd = 'test';
    public int $roles_id = 0;


    public function __construct($id, $username, $pswd, $roles_id ) 
    {
    $this->id = $id;
    $this->username = $username;
    $this->pswd = $pswd;
    $this->roles_id = $roles_id;
    }
}