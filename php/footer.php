<footer class="Footer">
  <div class="Footer-nav">
    <div class="Footer-column">
    <div class="Logo">
        <a href="/" class="Logo-textLink"><h1 class="Logo-heading Logo-heading--footer"><span class="Logo-headingTop">Jacobs</span><span class="Logo-headingBottom">Sierbestrating</span></h1></a>
        <hr class="Line">
        <p>Laguitensebaan 49<br>
        4891 XR Rijsbergen</p>
    </div>    
    </div>
    <div class="Footer-column">
      <h5>Info</h5>
      <ul class="Footer-list">
        <li>Kvk Breda: 20079681</li>
        <li>Btw: NL 8044 54 322 B 01</li>
        <li>Iban: NL58 RABO 0145324605</li>
        <li>Swift: RABONL2U</li>
      </ul>
    </div>
    <div class="Footer-column">
      <h5>Contact</h5>
      <ul class="Footer-list">
        <li>
          <a href="#" class="Footer-link">
            <svg class="Icon Icon--inline" viewBox="0 0 128 128"><use xlink:href="#icon-phone"></use></svg>
            <span>076 - 5962069</span>
          </a>  
        </li>
        <li>
          <a href="#" class="Footer-link">
            <svg class="Icon Icon--inline" viewBox="0 0 128 128"><use xlink:href="#icon-phone"></use></svg>
            <span>076 - 5964348</span>
          </a>
        </li>
        <li>
          <a href="#" class="Footer-link">
            <svg class="Icon Icon--inline" viewBox="0 0 128 128"><use xlink:href="#icon-envelope"></use></svg>
            <span>info@jacobssierbestrating.nl</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="Footer-column">
      <h5>Sitemap</h5>
      <?php include 'includes/sitemap.php'; ?>
    </div>
  </div>
  <!-- Copyright info -->
  <div class="Footer-legal">
    <div class="u-gridContainer">
        <div class="u-textCenter">
          &copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Algemene voorwaarden - Built by Lokaalgevonden
        </div>
      </div>
  </div>
</footer>
	
  <!-- Load jquery from google CDN if possible, with fallback to local version -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/standalone/jquery.min.js"><\/script>')</script>

	<!-- Footer javascript below here -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
