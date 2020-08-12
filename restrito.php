<?php
session_start();

if($_SESSION['logou'] == 1){
	$paginas = ['home'=>'eae men. Aqui é a home!!','sobre'=>'Aqui é o Sobre','contato'=>"<input type='text' placeholder='entrar em contato'>"];
}else{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>restrito</title>
</head>
<body>
<header>
<?php
	    foreach ($paginas as $key => $value){
                 echo "<a class='chaves' href='?page='.$key.''>'.$value.'</a>";
           }
	?>
	<a href='logout.php'>Sair de TUDO</a>
</header>
	<section>
        <h2>
          <?php
             if(isset($_GET['page'])){
                 $paginas = $_GET['page'];
             }else{$paginas ='home';}
 
          ?>
 
        </h2>
        
    </section>
</body>
<html>
