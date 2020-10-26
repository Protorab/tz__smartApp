<?php
/**
 * Template Name: main-page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Test
 */

get_header();
?>

	<main id="primary" class="site-main">

  <form class="submit__form test__form">

<!-- Hidden Required Fields -->
<input type="hidden" name="project_name" value="Test_site">
<input type="hidden" name="admin_email" value="<?php  the_field('email','option');?>">
<input type="hidden" name="form_subject" value="<?php  the_field('subject','option');?>">
 
<!-- END Hidden Required Fields -->

<input required type="text" name="Name" placeholder="You name... " required>
<input required type="email" name="E-mail" placeholder="You E-mail..." required>
<input required type="tel" name="Phone" placeholder="You phone...">
<textarea name="message" id="" cols="30" rows="10"></textarea>

<button>Send</button>

</form>
<?php echo do_shortcode('[hubspot type=form portal=8708698 id=1cba7926-fdd2-4441-a34a-8868d773cd09]')?>


<?php echo do_shortcode('[contact-form-7 id="18" title="Контактная форма 1"]')?>
	</main><!-- #main -->

<?php
 
get_footer();
