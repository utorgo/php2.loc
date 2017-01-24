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
	<body>	
		<h1>Содержание новости:</h1>
	    <hr>   
	       
	    <?php if(isset($_GET['id'])) { $id = (int)$_GET['id'] ?>
	    
	    <form action="article.php" method="post">
	    	<textarea name="content" rows="2" cols="100"><?php echo $articles[$id]->getName(); ?></textarea>     	
	     	<br></br>     	
	     	<textarea name="content" rows="10" cols="100"><?php echo $articles[$id]->getContent(); }?></textarea>      	        	
	    </form>	        
	    
	    <?php 
		    $article = $articles[$id];
		    //$article->id= $id;
		    $article->setName('pip222@mail.com');
		    $article->setContent('ReПипкин');
		    $res = $article->update();
	    ?>
	    	    
	    <a href="/index.php">Назад</a>    
	
	</body>
</html>