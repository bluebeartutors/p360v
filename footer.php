<?php
?>
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="left_contact">
          <?php
            $ContactPageID = 601;
            $ContactID = get_post($ContactPageID); 
            //echo $ContactID->post_content;
            echo apply_filters( 'the_content', $ContactID->post_content );
          ?>
          <div class="social-icons">
            <?php
              $FacebookLink   = get_field('facebook_link', $ContactPageID);
              $TwitterLink    = get_field('twitter_link', $ContactPageID);
              $GoogleLink     = get_field('google_link', $ContactPageID);
              $InstagramLink  = get_field('instagram_link', $ContactPageID);
            ?>

            <a <?php echo $FacebookLink != '' ? 'href="'.$FacebookLink.'" target="_blank"' : 'href="javascript:;"'; ?> ><img src="https://property360view.net/wp-content/uploads/2018/12/facebook-white.png"></a>
            <a <?php echo $TwitterLink != '' ? 'href="'.$TwitterLink.'" target="_blank"' : 'href="javascript:;"'; ?> ><img src="https://property360view.net/wp-content/uploads/2018/12/twitter-white.png"></a>
            <a <?php echo $GoogleLink != '' ? 'href="'.$GoogleLink.'" target="_blank"' : 'href="javascript:;"'; ?> ><img src="https://property360view.net/wp-content/uploads/2018/12/google-plus-white.png"></a>
            <a <?php echo $InstagramLink != '' ? 'href="'.$InstagramLink.'" target="_blank"' : 'href="javascript:;"'; ?> ><img src="https://property360view.net/wp-content/uploads/2018/12/instagram-white.png"></a>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6 col-md-6 contact-form">
        <?php //echo do_shortcode('[contact-form-7 id="26" title="Contact form 1"]');?>
		<?php echo do_shortcode('[contact-form-7 id="1683" title="new home contact form"]');?>
      </div>
    </div>
  </div>

</section>

 <!-- Footer -->
    <footer>
      <div class="container">
        <p class="m-0 text-center text-white copyrighta">&copy; Copyright Property 360 View All Rights Reserved | PrivacyPolicy</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo get_theme_file_uri('/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo get_theme_file_uri('/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
	 <script src="<?php echo get_theme_file_uri('/vendor/custom.js');?>"></script>
   
<?php wp_footer(); ?>

</body>
</html>