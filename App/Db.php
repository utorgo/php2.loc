<?php

namespace App;

class Db

{
    use Singleton;

    protected $dbh;

    protected function __construct()
    {    	
        $this->dbh = new \PDO('mysql:host=localhost;dbname=test','test','+1279484');
    }

    public function execute($sql, $substArr = [':id' => ''])
    {
    	var_dump($sql);
    	echo '</br>';
    	var_dump($substArr);
    	
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($substArr);
        if ($res){
        	return $this->dbh->lastInsertId();        	
        }        
        return $res;
    }

    public function query($sql, $class, $substArr = [':id' => ''])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($substArr);
        if(false !== $res){
            return $sth->fetchAll(\PDO::FETCH_CLASS,$class);
        }
        return [];
    }    
}