<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>

  <meta charset="UTF-8">
    <title>TCC HELP PETS</title>
	
     <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css"  href="tcc.css" />
    <!--[if lte IE 8]>
 <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->

		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
<br> <br>
<?php
if(isset($_SESSION['nao_autenticado'])):
?>
<div class="notification is-danger">
<p>ERRO: email ou senha inválidos.</p>
</div>
<?php
endif;
unset($_SESSION['nao_autenticado']);
?>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

		 .custom-input {
            width: 300px;
            padding: 10px;
            border: 1px ;
            border-radius: 0px;
            font-size: 14px;
            color: black;
            background-color: transparent; }
        
		</style>
<div class="box">
 <form action="conf.php" method="POST">
     <div class="field">
	     <div class="control">
		     <input name="email" name="text" class="custom-input" placeholder="Email" required onfocus="this.value = '';" 
			 onblur="if (this.value == '') {this.value = '';}">
		 </div>
	 </div>
	 <div class="field">
	     <div class="control">
		     <input name="senha" class="custom-input" type="password" placeholder="Sua senha" 
			 required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
		 </div>
	 </div>

<center>
	<br>
<button class= testebt>Entrar</button>
<br>




<div class="dois">
<h4> <a href="index.html" style="text-decoration: none;"> <br> <font color= black >
  ⫷Não tem uma conta?⫸ </font> </a> </p> 
 <br>
 </head>
 <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
 <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
<body bgcolor= #fffff>

</body>
</html>
