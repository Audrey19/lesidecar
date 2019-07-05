<section>
  <div class="footergrey">
    <div class="footergrey_container">
      <div class="greyitem">
        <p>ADDRESS</p>
      </div>
      <div class="greyitem">
        <div>
          <p>FOLLOW US</p>
        </div>
        <div>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-instagram"></a>
          <a href="#" class="fa fa-envelope"></a>
        </div>
      </div>
      <div class="greyitem">
        <p>CONTACT US</p>
      </div>
    </div>
  </div>
  <div class="footerblack">
    <div class="footerblack_container">
      <div class="imgfooter">
       <img height="50px"src="<?php echo get_bloginfo('template_url') ?>/assets/images/SideCarLogo.svg"/>
      </div>
      <p class="logofooter">Le Sidecar</p>
    </div>
  </div>
</section>	<!-- MAIN APP -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

 <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="/assets/js/script/script.js"></script>

  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); echo '/assets/js/script/script.js?' . filemtime( get_stylesheet_directory() . '/assets/js/script/script.js'); ?>"></script>

	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); echo '/main.js?' . filemtime( get_stylesheet_directory() . '/main.js'); ?>"></script>
	<?php wp_footer(); ?>
</body>
</html>
