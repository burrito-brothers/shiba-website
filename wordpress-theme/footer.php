<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package businessly
 */

?>
</div>
</div><!-- #content -->

</div><!-- #page -->

<div id="smobile-menu" class="mobile-only"></div>
<div id="mobile-menu-overlay"></div>

<style>
  .footer-text {
    font-size: 70%;
    color: white;
    text-align: right;
    margin: 20px;
  }

  .footer-text a { 
    color: white;
  }
</style>

<div class="footer-text">
  <a href="https://app.shiba-gizmos.com/privacy_policy.html">Privacy Policy</a>
  | 
  <a href="https://app.shiba-gizmos.com/terms_of_service.html">Terms of Service</a>
</div>

<?php wp_footer(); ?>
</body>
</html>
