 <!-- here we have our header -->
  <!-- we make the header have flexbox on large screens -->
  <div class="flex-l">

      <!-- our header background image -->
      <div class="w-100 w-60-l vh-50 vh-100-l cover bg-center" style="<?php nice_background('hero_image');?>"></div>

      <!-- our header content -->
      
      <!-- we make our header background have 100% width,
            and then 60% width on large screens, as well as 50vh and 100vh
            height on small and large screens  -->

      <div class="w-100 w-40-l flex items-center justify-center ph3 ph4-l relative">
        <!-- flex-box will center this one child element as it works from parent to child -->
        <!-- if it has heaps of elements, flex-box will try to arrange as a grid -->
        <div class="tc">
          <!-- is being absolutely positioned on larger screens, so don't need the margin-bottom -->
          <!-- here we use absolute position for larger screens to put the date in the top center -->
          <p class="f6 archivo mt0 mb5 mb0-l ttu tracked absolute-l top-0-l left-0-l w-100-l pt5">   
            <?php nice_date(get_field('date')); ?>
            <!-- line -->
            <span class="line mt4"></span>
          </p>

          <h1 class="f2 f1-l archivo mt0 mb2 ttu lh-title">
            <!-- standard wordpress data -->
            <!-- we change the typescale for larger screens and squish the line height a bit because of the bigger font-size -->
            <?php the_title(); ?>
          </h1>

          <p class="f2 f1-l tenor mt0 mb4 mb5-l ttu lh-title">
            <?php the_field('subhead'); ?>
          </p>
          <!-- sets a max-width and rem -->
          <p class="f4 cardo i measure center mv0">
            <!-- specific to this component -->
            <?php the_sub_field('header_intro');   ?>
          </p>

        </div>
      </div>
    </div>