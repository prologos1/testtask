<div id="footer"> 
<?php if (!(current_user_can('level_0'))){ ?>
    <ul>
      <li><a href="/registration">Регистрация</a></li>
      <li><a href="/login">Войти</a></li>
    </ul>
<?php } else { ?>
	<ul>
		<li><a href="<?php echo wp_logout_url( get_bloginfo('url') ); ?>">Выйти</a> </li>
		<?php if ( current_user_can("administrator") or current_user_can("editor")  or current_user_can("author") ) { ?>	
		<li><a href="<?php bloginfo('url'); ?>/admin/">Панель инструментов</a></li>
		<?php } ?>
	</ul>
<?php } ?>

  </div>
  <!-- /footer -->
</div>
<!-- /wrap -->
</script>

<?php
	 wp_footer();
	//echo get_theme_option("footer")  . "\n";
?>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
</body>
</html>