
<?php
require '../header.php';
require '../menutopo1.php';
?>
<title>INDEPENDENTE</title>
<div class="content">
	<div class="container">
		<div class="form">
			<form action="../controle/consultausuario.php" method="POST">
				<label>Entrar</label>
				<div class="opt-group">
					<label>E-mail</label>
					<input type="email" name="email" required>
				</div>
				<div class="opt-group">
					<label>Senha</label>
					<input type="password" name="senha" required>       
				</div>
				<div class="opt-group">
					<input type="checkbox" name="remember" class="remember" id="remember">
					<label class="checkbox" for="remember">Lembre-se de mim</label>
				</div>
				<input type="submit" name="login" value="Entrar">
				<a href="cadastro.php">Não tem uma conta? Cadastre-se</a>
			</form>		
		</div>
	</div>
</div> 
<style>

body {
  background: #fff;
}
body .content {
  width: 90%;
  float: left;
}

body .content .container .form {
  float: center;
  width: 300px;
  margin-left: calc(50% - 175px);
  margin-top: 10vh;
}
body .content .container .form img {
  float: left;
  margin-bottom: 35px;
  width: 100px;
  margin-left: calc(50% - 50px);
}
body .content .container .form form {
  float: left;
  width: 100%;
  border: 2px solid rgba(0, 0, 0, 0.1);
  border-radius: 3px;
  padding: 25px;
  margin-left: -26px;
}
body .content .container .form form label {
  float: left;
  width: 100%;
  text-align: center;
  font-size: 23px;
  font-family: Arial, sans-serif;
  text-transform: uppercase;
  color: rgba(0, 0, 0, 0.7);
  margin-bottom: 15px;
}
body .content .container .form form .opt-group {
  float: left;
  text-align: left;
  width: 100%;
  margin-top: 10px;
}
body .content .container .form form .opt-group label {
  text-align: left;
  font-size: 14px;
  text-transform: none;
  margin-bottom: 2px;
  margin-top: 10px;
}
body .content .container .form form .opt-group label.checkbox {
  float: left;
  width: calc(100% - 20px);
  margin-top: 12px;
  margin-left: 7px;
}
body .content .container .form form .opt-group input {
  float: left;
  width: calc(100% - 20px);
  height: 35px;
  padding: 0px 10px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 5px;
  margin-top: 2.5px;
  outline: none;
}
body .content .container .form form .opt-group input[type=checkbox] {
  width: 13px;
}
body .content .container .form form input[type=submit] {
  width: 100%;
  height: 35px;
  background:	#FF0000;
  color: white;
  border-radius: 5px;
  border: none;
  cursor: pointer;
  transition: all 0.5s;
  -o-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
}
body .content .container .form form input[type=submit]:hover {
  background: #00adf3;
}
body .content .container .form form a {
  float: left;
  text-decoration: none;
  color: #00adf3;
  font-size: 13px;
  font-family: Arial, sans-serif;
  margin-top: 10px;
}