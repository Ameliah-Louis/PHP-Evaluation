<?php 

class User 
{
    private int $id = 1;
    private string $username = "améliah";
    private string $pswd = 'test';
    private int $roles_id = 0;


    public function __construct($id, $username, $pswd, $roles_id ) 
    {
    $this->id = $id;
    $this->username = $username;
    $this->pswd = $pswd;
    $this->roles_id = $roles_id;
    }

    public function getUserId () : int 
    {
        return ($this->id);
    }
    public function getUsername () : string 
    {
        return strtoupper($this->username);
    }
    public function getpPswd () : string 
    {
        return strtoupper($this->pswd);
    }
    public function getRolesId () : int 
    {
        return ($this->roles_id);
    }
    
}