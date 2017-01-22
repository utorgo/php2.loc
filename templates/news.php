<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Горячие новости</title>
    <style>
        li{
            margin-bottom: 15px;
            padding: 10px;
            border: 1px dotted;
        }
    </style>  

</head>
<body class="">

    <h1>Заголовки новостей:</h1>
    <hr>
    <ul>
        <?php $id = 0; foreach ($articles as $article){?>

        <li>
            <a href="/article.php?id=<?php printf("%03s\n", $id++);?>"><?php echo $article->getName(); ?></a>
            <p> <?php echo mb_substr($article->getContent(),0,250) . '...';?></p>
        </li>
        <?php }?>
    </ul>
    

</body>
</html>