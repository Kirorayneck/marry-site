<?php get_header(); ?>
  <main class="main">
    <h1 class="site-title">Со дня свадьбы прошло</h1>
    <div class="timer">
      <div class="timer__items">
        <span class="timer__item timer__years">00</span>
        <span class="timer__item timer__days">00</span>
        <span class="timer__item timer__item-fix timer__hours">00</span>
        <span class="timer__item timer__item-fix timer__minutes">00</span>
        <span class="timer__item timer__item-fix timer__seconds">00</span>
      </div>
    </div>
    <?php get_template_part( 'template-parts/gallery', 'gallery'); ?>  
  </main>
	<style type="text/css" media="screen">
	html {margin-top: 0px !important;}
	@media screen and ( max-width: 782px ) {
		html { margin-top: 0px !important; }
	}
</style>
</body>
</html>