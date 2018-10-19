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

    private $hostname;
    private $dbname;
    private $user;
    private $pass;
    public $risultato;
    public $db;
    public $obj;
    

    
    public function __construct() 
    {
      $this->hostname="summertime";
      $this->dbname="summertime";
      $this->user="root";
      $this->pass="summertime";
      //$this->obj=$x;
      $this->connetti($this->hostname,$this->dbname,$this->user,$this->pass);
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        }
        
    public function __destruct()
    {
    	$this->db=null;
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
    
    public function set_obj(object $o){$this->obj=$o;}
    
    
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
    
    public function cerca($k,$v)
	{
         $z=substr(get_class($this),1);
         $z=ucfirst($z);
         $query= "SELECT * FROM ".$z." WHERE ".$k." = ? ";
         $stmt=$this->db->prepare($query);
   	 $stmt->execute([$v]);
   	 $row = $stmt->fetch(PDO::FETCH_ASSOC);
   	 print var_dump($row);
	}
        
    public function cancella($k,$v)
   {
   	$z=substr(get_class($this),1);
        
   	$z=ucfirst($z);
   	$query= "DELETE FROM ".$z." WHERE ".$k." = ? ";
		
		$y=$this->db->prepare($query);
		$y->execute([$v]);
	}
        
    
        
       
    
    
        
    

    
    
    
}
