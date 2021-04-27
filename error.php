<?php
defined('_JEXEC') or die;
$template_url = $this->baseurl . '/templates/' . $this->template;
$css_url = $template_url."/css";
$js_url = $template_url."/js";
$img_url = $template_url."/images";
?>
<!doctype html>
<html>
  <head>
    <title><?php echo $this->error->getMessage(); ?></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300" type="text/css"/>
    <link href="<?php echo $css_url;?>/custom.css" rel="stylesheet" media="all">
    <script src="<?php echo $js_url;?>/custom.js"></script>
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="wrapper">
      <header>
        <a href=" "><img src="<?php echo $img_url;?>/logo.png" alt=""><p>АСК. Дополнительное образование для взрослых.</p></a>
      </header>	
      <div class="container">
        <div class="content">
          <h1><?php echo $this->error->getCode(); ?> <?php echo $this->error->getMessage(); ?></h1>
        </div>
      </div>
    </div>
    <footer>
      <p>© 2017 Архитектурно-строительный колледж в составе ГУ ВПО "Белорусско-Росийский университет". <a href="http://ask-bru.by">Официальный сайт.</a></p>
    </footer>
  </body>
</html>
<script>
// скрипты после загрузки страницы
</script>
</script>