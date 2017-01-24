<?php
    //use App\Models\User;
    use App\Views\View;
    use App\Models\News;

    require __DIR__ . '/autoload.php';
    //require __DIR__ . '/vendor/autoload.php';

    $articles = \App\Models\News::findAll();

    $view = new \App\Views\View();

    $view->assign('articles', $articles);

    $view->display(__DIR__ . '/templates/news.php');
    
    
   
    
    

    

    