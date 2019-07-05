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

<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://unpkg.com/scrollreveal@4.0.5/dist/scrollreveal.min.js"></script>


<script
    src="https://code.jquery.com/jquery-1.12.3.js"
    integrity="sha256-1XMpEtA4eKXNNpXcJ1pmMPs8JV+nwLdEqwiJeCQEkyc="
  crossorigin="anonymous"></script>

  <script src="<?php bloginfo('stylesheet_directory');?>/assets/js/script/script.js"></script>

	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); echo '/main.js?' . filemtime( get_stylesheet_directory() . '/main.js'); ?>"></script>
	<?php wp_footer(); ?>
</body>
</html>
