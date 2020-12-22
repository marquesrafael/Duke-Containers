<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="robots" content="index,follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Duke containers - <?php echo $pagina ?></title>
  <link rel="icon" href="assets/images/favicon.ico" />

  <meta name="author" content="Rafael Marques, contato@rafaelmarques.net">
  <meta name="revised" content="Monday, December 21, 2020, 9:43 am" />
  <meta name="Classification" content="Business">
  <meta name="theme-color" content="#db5945">
  <meta name="rating" content="general" />
  <meta name="copyright" content="© 2020 ~ 2021 Duke containers" />
  <meta name="description" content="Para compras ou aluguel, cotação de containers, modificações em containers" />
  <meta name="keywords" content="containers, venda, compra, aluga, aluguel, cotação">

  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/all.css">
</head>

<body>
  <div class="main-top" id="home">
    <!-- header -->
    <header>
      <div class="container-fluid">
        <div class="header d-lg-flex justify-content-between align-items-center py-3 px-sm-3">

          <!-- logo -->
          <div id="logo">
            <h1>
              <a href="index.php">
                <span class="font-1">Duke</span> <span class="font-2">containers</span>
              </a>
            </h1>
          </div>
          <!-- //logo -->

          <!-- nav -->
          <div class="nav_w3ls">
            <nav>
              <label for="drop" class="toggle">Menu</label>
              <input type="checkbox" id="drop" />
              <ul class="menu">
                <li>
                  <a href="index.php" <?php echo ($id == "1" ? "class='active'" : ""); ?>>Home</a>
                </li>
                <li>
                  <a href="about.php" <?php echo ($id == "2" ? "class='active'" : ""); ?>>Sobre a Empresa</a>
                </li>
                <li>
                  <a href="containers.php" <?php echo ($id == "3" ? "class='active'" : ""); ?>>Containers</a>
                </li>
                <li>
                  <a href="contact.php" <?php echo ($id == "4" ? "class='active'" : ""); ?>>Contato</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- //nav -->
        </div>
      </div>
    </header>
    <!-- //header -->
  </div>