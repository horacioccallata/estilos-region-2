<?php
/**
 * @file
 * Template for Default Home page panel.
 */
?>

<body>
<link rel="stylesheet" type="text/css" href="oa_home_default">

<div class="big-wrapper">
  <div class="hero">
    <div class="hero-left-graphic"></div><!--/hero-right-graphic-->
    <div class="hero-right-graphic"></div><!--/hero-right-graphic-->
    <!-- <h1>Potente, Flexible, Abierto</h1> -->
    <h1>Bienvenido a la intranet del <strong>GRT</strong></h1>
    <h2>Bienvenido <?php if (!empty($username)) {print '<span>' . $username . '</span>'; } ?></h2>
    <h3 id="h3"><strong>¿Qué sigue? Sumérgete en o echa un vistazo a algunos de los recursos.</strong></h3>
  </div><!--/hero-->

  <div class="modules">

  <?php if (!empty($login)): ?>
    <div class="entry">
      <div class="module-header"><h4>acaba de empezar?</h4></div><!--/module-header-->
      <div class="module-content">
        <a href="http://docs.openatrium.com/" class="icon icon-documentation"></a>
        <p>Read <a href="http://docs.openatrium.com/">documentacion</a> para ayudarle a ponerse en marcha con Open Atrium, o visite el código abierto <a href="https://drupal.org/project/openatrium">Open Atrium project</a> at <a href="https://drupal.org">drupal.org.</a></p>
      </div><!--/module content-->
    </div><!--/entry-->
  <?php else: ?>
    <div class="entry">
      <div class="module-header"><h4>Problemas conseguidos?</h4></div><!--/module-header-->
      <div class="module-content">
        <a href="https://drupal.org/project/openatrium" class="icon icon-got-issues"></a>
        <p>Visite el código abierto <a href="https://drupal.org/project/openatrium">Open Atrium proyecto</a> a <a href="https://drupal.org">drupal.org.</a></p>
      </div><!--/module content-->
    </div><!--/entry-->
  <?php endif; ?>

  <?php if (!empty($login)): ?>
    <div class="user-login">
      <?php print render($login); ?>
    </div>
  <?php else: ?>
    <div class="entry">
      <div class="module-header"><h4>acaba de empezar</h4></div><!--/module-header-->
      <div class="module-content">
        <a href="http://docs.openatrium.com/" class="icon icon-documentation"></a>
        <p>Leer <a href="http://docs.openatrium.com/">documentación</a> para ayudar a ponerse en marcha con Open Atrium.</p>
      </div><!--/module content-->
    </div><!--/entry-->
  <?php endif; ?>

    <div class="entry entry-last">
      <div class="module-header"><h4>necesitan los profesionales?</h4></div><!--/module-header-->
      <div class="module-content">
        <a href="http://www.phase2technology.com/contact-us/start-a-project-with-phase2/" class="icon icon-pros"></a>
        <p>Find <a href="http://www.phase2technology.com/contact-us/start-a-project-with-phase2/">Best-in-Class Servicios profesionales</a> para construir su solución Open Atrium.</p>
      </div><!--/module content-->
    </div><!--/entry-->
    <div class="entry entry-last">
      <div class="module-header"><h4>necesitan los profesionales?</h4></div><!--/module-header-->
      <div class="module-content">
        <a href="http://www.phase2technology.com/contact-us/start-a-project-with-phase2/" class="icon icon-pros"></a>
        <p>Find <a href="http://www.phase2technology.com/contact-us/start-a-project-with-phase2/">Best-in-Class Servicios profesionales</a> para construir su solución Open Atrium.</p>
      </div><!--/module content-->
    </div><!--/entry--><div class="entry entry-last">
      <div class="module-header"><h4>necesitan los profesionales?</h4></div><!--/module-header-->
      <div class="module-content">
        <a href="http://www.phase2technology.com/contact-us/start-a-project-with-phase2/" class="icon icon-pros"></a>
        <p>Find <a href="http://www.phase2technology.com/contact-us/start-a-project-with-phase2/">Best-in-Class Servicios profesionales</a> para construir su solución Open Atrium.</p>
      </div><!--/module content-->
    </div><!--/entry--><div class="entry entry-last">
      <div class="module-header"><h4>necesitan los profesionales?</h4></div><!--/module-header-->
      <div class="module-content">
        <a href="http://www.phase2technology.com/contact-us/start-a-project-with-phase2/" class="icon icon-pros"></a>
        <p>Find <a href="http://www.phase2technology.com/contact-us/start-a-project-with-phase2/">Best-in-Class Servicios profesionales</a> para construir su solución Open Atrium.</p>
      </div><!--/module content-->
    </div><!--/entry-->

  </div><!--/modules-->

  

  <div class="subfooter">
    <div class="subfooter-graphic">
    </div><!--/subfooter graphic-->
  </div><!--/subfooter-->

</div><!--/big wrapper-->

</body>

