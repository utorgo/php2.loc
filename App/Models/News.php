<?php

namespace App\Models;

class News extends Model
{
    const TABLE = 'news';
    protected $name;
    protected $content;

    public function getName()
    {
        return $this->name;
    }

    public function getContent()
    {
        return $this->content;
    }
    
    public function setName($name)
    {
    	$this->name = $name;
    }
    
    public function setContent($content)
    {
    	$this->content = $content;
    }
}