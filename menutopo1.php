<a class="navbar-brand" href="#"><img class="img-fluid" src="../assets/imagens\imagens48x48.png" width="1600" height="1200"></a>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="contato.php">Reclame aqui </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="entrar.php">Acesse sua conta </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="carrinho.php">Meu carrinho </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="rastreio.php">Rastreio </a>
  </li>
</ul>
<!-- <div class="menu-bg" id="menu-bg"></div> -->
<div class="row text-center mt-3 mb-5">
  <div class="col-md-4">
    <a href="loja.php">
      <div class="seta"></div>
    </a>
  </div>
  <div class="col-md-4">
    <div class="search-bar">
      <input type="text" id="search_input" placeholder="Digite sua pesquisa...">
      <button id="search_button">Pesquisar</button>
    </div>
  </div>
  <div class="col-md-4">
    <div class="perfil-container">
      <img class="img-fluid" src="../assets/imagens\OIP.jpg" width="50" height="50">
      <!-- Ícone do perfil (pode ser uma imagem ou ícone de fonte) -->
      <i class="fas fa-user"></i> <!-- Exemplo com Font Awesome -->
      <!-- Informações do perfil (pode ser texto, imagem, etc.) -->
      <div class="perfil-info">
        <span>Nome: <?php echo $_SESSION['nome']; ?></span>
        <span>Email: <?php echo $_SESSION['email']; ?></span>
        
        <a href="editar.php?nome=<?php echo $_SESSION['nome']; ?>&email=<?php echo $_SESSION['email']; ?>&cpf=<?php echo $_SESSION['cpf']; ?>"><button >Editar Perfil</button>  </a>
      </div>
    </div>
  </div>
</div>



</body>

</html>

<style>
  /*   <!-- Barra de pesquisa --> */
  body {
    font-family: Arial, sans-serif;
  }

  .search-bar {
    display: flex;
    align-items: center;
    justify-content: center;
    /* margin: 20px; */
  }

  #search_input {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  #search_button {
    margin-left: 10px;
    padding: 10px 20px;
    font-size: 16px;
    background-color: #FF0000;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;

  }

  a {
    color: #5A2790;
    transition: color 0.3s;
  }

  a:hover {
    color: #FF5733;
  }

  /* Botão sair */
  .btn {
    background-color: #FF0000;
    color: #fff;
    padding: 12px 24px;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .btn:hover {
    background-color: #FF0000;
  }

  body {
    font-family: 'Roboto', sans-serif;

  }

  /* Perfil */
  .perfil-container {
    position: relative;
    width: 35px;
    /* Largura do ícone */
    height: 35px;
    /* Altura do ícone */
    background-color: #FF0000;
    /* Cor de fundo do ícone (pode ser personalizada) */
    border-radius: 50%;
    /* Bordas arredondadas para criar um círculo */
    cursor: pointer;
    /* Transforma o cursor em um ponteiro quando passa o mouse */
    margin-left: 5rem;
  }

  .perfil-info {
    position: absolute;
    top: -5%;
    /* Distância da parte superior do ícone */
    left: 120%;
    /*transform: translateX(-50%);*/
    transform: translateX(120px, 50%);
    display: none;
    /* Inicialmente oculta */
    background-color: #fff;
    /* Cor de fundo das informações do perfil */
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 150px;
    text-align: center;
  }

  .perfil-container:hover .perfil-info {
    display: block;
    /* Exibe as informações do perfil ao passar o mouse */
  }

  .seta {
    width: 0;
    height: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-right: 10px solid #FF0000;
    /* Cor da seta (azul) */
    cursor: pointer;
    /* Transforma o cursor em um ponteiro */
    /* margin-right: 250px; */
    /* Espaço à direita da seta */
  }
   /* Botão editar */
  button {
            background-color: #FF0000;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }
</style>