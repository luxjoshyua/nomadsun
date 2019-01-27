
 <!-- link to the individual post -->
  <!-- using the permalink() gives us a link to the post -->


<!-- <h1>
  <a href="<?php the_permalink(); ?>">
    Check out <?php the_title(); ?>!
  </a>
</h1> -->



<!-- hero needs a background image on it -->
<a class="db link hero min-vh-100 cover bg-center flex items-center justify-center" 
      style="<?php nice_background('hero_image');?>" href="<?php the_permalink(); ?>">

  <div class="hero-content white tc ph3 ph4-l">

    <!-- our location title -->
    <h1 class="hero-heading f2 f1-l archivo b mt0 mb3 ttu lh-title">
      <?php the_title(); ?>
    </h1>

    <!-- our subheading -->
    <?php if( get_field('subhead') ): ?>
      <p class="hero-subhead f2 f1-l tenor mb5 mb6-l mt0 white ttu lh-title">
        <?php the_field('subhead'); ?>
      </p>
    <?php endif; ?>

    <!-- our formatted date -->
    <?php if( get_field('date') ): ?>
      <p class="f6 date archivo ma0 white ttu tracked">
        <?php
        // here we convert our date into a format that php can
        // work with, and then we format it to be nice + readable
        // echo date("F Y", strtotime(get_field('date')));
        nice_date(get_field('date')); 
        ?>
      </p>
    <?php endif; ?>

  </div>
</a>