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

    public function execute($sql, $substArr)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($substArr);
        return $res;
    }

    public function query($sql, $class, $substArr)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($substArr);
        if(false !== $res){
            return $sth->fetchAll(\PDO::FETCH_CLASS,$class);
        }
        return [];
    }

}