<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fdb
 *
 * @author Stefano
 */
class Fdb 
{

    protected $hostname;
    protected $dbname;
    protected $user;
    protected $pass;
    protected $db;
    

    
    public function __construct() {
      $this->hostname="localhost";
      $this->dbname="summertime";
      $this->user="root";
      $this->pass="summertime";
      $this->connetti($this->hostname,$this->dbname,$this->user,$this->pass);
      
        }
    
    public function get_hostname()
    {
        return $this->hostname;
    }
    
    public function get_dbname()
    {
        return $this->dbname;
    }
    
    public function get_user()
    {
        return $this->user;
    }
    
    public function get_pass()
    {
        return $this->pass;
    }
    
    public function get_db()
    {
        return $this->db;
    }
    
    
    public function connetti($hostname,$dbname,$user,$pass)
    {
        try {
 
            $this->db = new PDO ("mysql:host=$hostname;dbname=$dbname", $user, $pass);
            
           
            
            
    } 
    catch (PDOException $e) 
    {
    echo "Errore: " . $e->getMessage();
    die();
    }
        
    //put your code here
    }
    

    
    
    
}
