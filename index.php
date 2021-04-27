<?php
defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$lang = JFactory::getLanguage();

// получение пути к ресурсам шаблона
$menu = $app->getMenu();
$template_url = $this->baseurl . '/templates/' . $this->template;
$is_home_page = $menu->getActive() == $menu->getDefault($lang->getTag());
$css_url = $template_url."/css";
$js_url = $template_url."/js";
$mod_url = $template_url."/modules";
$php_url = $template_url."/php";
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <?php include "include/bootstrap.php"; ?>
    
    <?php include "include/include.php"; ?>

    <?php include "include/modules.php"; ?>
    
    <jdoc:include type="head"/>
    
    <?php include "include/IE9_HTML5.php"; ?>
    
  </head>
  
<body>
  <div class="container">
    <header>
	  <div class="block-social">
        <jdoc:include type="modules" name="social"/>
	  </div>
	  <div class="block-top">
	    <jdoc:include type="modules" name="header.top"/>
	  </div>
      <div class="block-logo">
        <div class="logo-title">
          <jdoc:include type="modules" name="logo.title"/>
        </div>
        <div class="logo-bottom">
          <div class="logo-menu">
            <jdoc:include type="modules" name="logo.menu"/>
          </div>
          <div class="logo-photo">
            <jdoc:include type="modules" name="logo.photo"/>
          </div>
        </div>
      </div>
    </header>
	  
    <div class="block-main">
		<div class="main-left">
		  <div class="main-info">
		    <jdoc:include type="modules" name="warning" />
		  </div>
		  <div class="content">
		    <div class="content-top">
              <a name="start"></a>
              <jdoc:include type="modules" name="content.top"/>
            </div>
		    <div class="content-mid">
			  <jdoc:include type="component"/>
              <jdoc:include type="modules" name="content.mid"/>
            </div>
			<div class="content-bot">
              <jdoc:include type="modules" name="content.bot"/>
            </div>
		  </div>
		</div>
	    <div class="main-right">
          <jdoc:include type="modules" name="right.top" style="modMenu"/>
          <jdoc:include type="modules" name="right.mid" style="modMenu"/>
          <jdoc:include type="modules" name="right.bot" style="modMenu"/>
		</div>
    </div>
    
    <footer>
      <jdoc:include type="modules" name="footer"/>
      <p class="annotate">Copyright &copy; Архитектурно-строительный колледж в составе межгосударственного образовательного учреждения высшего образования "Белорусско-Российский университет".</p>
    </footer>
  </div>
  
<!-- bottom scripts -->
  
  <script></script>
  
<!-- end scripts -->
  
    <?php include "modules/lightbox/lightbox.php"; ?>
    <?php include "modules/passbox/passbox.php"; ?>
  
  </body>
</html>