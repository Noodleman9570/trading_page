<!doctype html>
<html lang="<?=SITE_LANG?>">
  <head>
    <?=getFavicon();?>
    <meta charset="<?=SITE_CHARSET?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?=SITE_DESC?>">
    <meta name="author" content="Carlos Mora Rangel">
    <meta name="generator" content="<?=SITE_VERSION?>">
    <title><?=SITE_NAME?></title>
    <link rel="stylesheet" type="text/css" href="<?= PLUGINS; ?>/notify/noty.css">
    <link rel="stylesheet" type="text/css" href="<?= PLUGINS; ?>/notify/noty.css.map">
    <link rel="stylesheet" type="text/css" href="<?= CSS; ?>/style.css">
    <!-- Custom styles for this template -->
  </head>
  <body>
    <!-- Navbar-->
    <header>
    	<a href="<?=BASE_URL?>/home" class="logo">
      <img src="<?= IMG?>/logo.jpg" alt="error" width="60" height="60" />

	      <h2 class="nombreEmpresa">CryptoLearning</h2>
    	</a>
      
      <nav>
        <ul>
          <?php        
          if (!$_SESSION['login']) {      

          $file = strtolower($_SERVER['REQUEST_URI']);
            if ($file != '/trading_page/login' || $file == '/trading_page'.'/') {
              echo "<li>
              <a href='".BASE_URL."/login' target='_self'>
                Iniciar Sesión
              </a>
            </li>";
            }  

            $file = strtolower($_SERVER['REQUEST_URI']);
            if ($file != '/trading_page/sign') {
              echo "<li>
              <a href='".BASE_URL."/sign' target='_self'>
                Registrarse
              </a>
            </li> ";
            }
        }else{
          echo "<li>
          <a href='".BASE_URL."/logout' target='_self'>
            Cerrar sesión
          </a>
        </li>";
        }
          ?>   
            <select>
              <option>Español</option>
              <option>Inglés</option>
            </select>
          </li>
        </ul>
      </nav>
    </header>
  
        