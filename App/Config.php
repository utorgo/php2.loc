<?php

namespace App;

class Config
{
    use Singleton;

    public $data = [];
    public $connSettingsArray = [];
    protected $db;
    protected $host;
    protected $dbname;
    protected $username;
    protected $password;

    protected $pathToConfig = __DIR__ . '/../config.txt';

    protected function __construct()
    {
        if (is_readable($this->pathToConfig)){

            $this->tmp = file($this->pathToConfig,FILE_IGNORE_NEW_LINES);

            foreach ($this->tmp as $strValue)
            {
                $this->item = explode('=', $strValue);
                $this->connSettingsArray[$this->item[0]] =  $this->item[1];                               
            }
            
            $this->data = [
            		$this->connSettingsArray['db'] => [
            				$this->connSettingsArray['host'] => '\'' . $this->connSettingsArray['db'] . ':host=' . $this->connSettingsArray['host'] . ';dbname='. $this->connSettingsArray['dbname'] .'\',\''. $this->connSettingsArray['user'] .'\',\''. $this->connSettingsArray['password'] .'\''            
            		]
            ];                  
        }
    }
}

