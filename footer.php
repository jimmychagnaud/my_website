<?php
/**
 * @package Jimmy Chagnaud
 * @since Jimmy Chagnaud 1.0
 */
?>		
      <div class="viewer">
        <div class="viewer-content">
          <img src="" alt="">
        </div>
      </div>
      </main>
    </div>
  </div>
  <footer class="footer-distributed" data-start="margin-top: -300px;" data-end="margin-top: 75px;">
    <div class="footer-left">
      <h3>Creation sites<span> à Pau</span></h3>
      <p class="footer-links">
        <a href="/">Accueil</a>
        ·
        <a href="/portfolios">Portfolios</a>
        ·
        <a href="/contact">Contact</a>
      </p>
      <p class="footer-company-name">Chagnaud Jimmy &copy; 2017</p>
    </div>
    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p>Pau, France</p>
      </div>
      <div>
        <i class="fa fa-phone"></i>
        <p>06 64 53 88 29</p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:contact@creationsitespau.fr">contact@creationsitespau.fr</a></p>
      </div>
    </div>
    <div class="footer-right">
      <p class="footer-company-about">
        <span>
          A propos
          <br>
          <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="chagnaud jimmy developpeur web" style="height: 50px; width: 50px;">
        </span>
        Je suis un jeune developpeur web passionné, et je souhaite partager mes connaissance avec vous de maniere à vous permettre
        d'augmenter votre visibilité sur le Web !
      </p>
    </div>
  </footer>
  <script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
  <?php if (is_front_page()): ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/js/app.js"></script>
  <?php endif; ?>
  </body>
</html>
