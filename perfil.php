<?php
require '../header.php';
require '../menutopo1.php';

?>
<title>CONSTRUQUER</title>

  
  <!-- Profile Form -->
  <form>
    <!-- User Name -->
    <label for="username">Nome do usuário:</label><br>
    <input type="text" id="username" name="username" ><br>
 <!-- Location -->
 <label for="cpf">CPF do usuário:</label><br>
    <input type="text" id="cpf" name="cpf"><br>

    <!-- Patient -->
    <label for="email">E-mail do usuário:</label><br>
    <input type="text" id="email" name="email"><br>

    <!-- User -->
    <label for="senha">Senha antiga:</label><br>
    <input type="password" id="senha" name="senha"><br>

    <!-- Staff -->
    <label for="senhan">Senha nova:</label><br>
    <input type="password" id="senhan" name="senhan"><br>
    

    <!-- Last Login -->
    <div class="last-login">
      Última vez que você entrou: 12/12/2022 12:00 PM
    </div>

    <!-- Edit Profile Button -->
    <input type="submit" value="Editar Perfil">

  </form>
</section>

   


<style>

body {
  margin: 0;
  font-family: sans-serif;
  background-color: #f2f2f2;
}

nav {
  background-color: #333;
  color: white;
  display: flex;
  justify-content: space-around;
  align-items: center;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav li {
  display: inline-block;
}

nav a {
  color: white;
  text-decoration: none;
  font-size: 18px;
  padding: 10px;
  display: block;
}

nav a:hover {
  background-color: #555;
}

main {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

footer {
  background-color: #333;
  color: white;
  padding: 20px;
  text-align: center;
}

/* Form Styles */
form {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 60%;
  margin: 20px auto;
}

form label {
  width: 100%;
  margin-bottom: 10px;
  font-size: 20px;
}

form input[type="text"],
form input[type="password"], form input[type="email"], form input[type="number"], form input[type="date"], form input[type="time"], form input[type="datetime-local"], form input[type="file"] {
width: 100%;
padding: 5px 5px;
margin: 8px 0;
box-sizing: border-box;
border: 1px solid #ccc;
border-radius: 4px;
}

form input[type="submit"] {
width: 100%;
background-color: red;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
font-size: 18px;
}

form input[type="submit"]:hover {
background-color: red;
}

form .last-login {
margin: 20px 0;
font-size: 16px;
color: #666;
}

/* Table Styles */
table {
width: 100%;
border-collapse: collapse;
}

th, td {
border: 1px solid #ddd;
padding: 8px;
}

tr:nth-child(even) {
background-color:
  #f2f2f2;
}

th {
background-color: #333;
color: white;
font-size: 18px;
}

/* Responsive Design */
@media (max-width: 600px) {
nav {
flex-direction: column;
}

nav a {
display: block;
margin: 10px 0;
}

form {
width: 90%;
}
}

body {
  margin: 0;
  font-family: sans-serif;
  background-color: #f1f1f1;
}



</style>