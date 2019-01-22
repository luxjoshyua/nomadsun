<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomadsun
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    
  <!-- hero needs a background image on it -->
  <section class="hero min-vh-100 cover bg-center flex items-center justify-center" style="<?php if( get_field('hero_image') ): ?>
      background-image: url(<?php the_field('hero_image'); ?>); 
    <?php endif; ?>">

  <div class="hero-content white tc">

    <!-- our location title -->
    <h1 class="hero-heading b mt0 mb3 ttu">
      <?php the_title(); ?>
    </h1>

    <!-- our subheading -->
    <?php if( get_field('subhead') ): ?>
      <p class="hero-subhead mb6 mt0 white ttu"><?php the_field('subhead'); ?></p>
    <?php endif; ?>


    <!-- our formatted date -->
    <?php if( get_field('date') ): ?>
      <p class="f6 date ma0 white ttu tracked">
        <?php
        // here we convert our date into a format that php can
        // work with, and then we format it to be nice + readable
        echo date("F Y", strtotime(get_field('date')));
        ?>
      </p>
    <?php endif; ?>


  </div>
</section>


	<header class="entry-header">
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
    <?php 
    // nomadsun_entry_footer(); 
    ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
