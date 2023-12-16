<?php get_header() ?>


<div class="content-wrapper oh">

  <!-- Content -->
  <section class="content blog-standard">
    <div class="container relative">
      <div class="row">

        <!-- post content -->
        <div class="col-md-9 post-content mb-50">

          <!-- large post -->
          <?php if (have_posts()) : ?>

            <?php
            $count = 1;

            while (have_posts()) : the_post();

              if (is_sticky()) {
                get_template_part('entry', 'large');
              } else {
                if ($count == 1) {
                  echo '<div class = "row items-grid">';
                }
                get_template_part('entry');
                $count++;
              }

            // if( $count == 1 ) {
            // 	get_template_part( 'entry', 'large' );
            // 	echo '<div class="row items-grid">';
            // } else {
            // 	get_template_part( 'entry' );
            // }
            //
            // $count++;

            endwhile;
            if ($count > 1) {
              echo '</div>';
            }
            ?>
            <!-- 
            <div class="row mt-20">
              <div class="col-md-12 text-center pagination">
                <a href="#" class=""><i class="icon arrow_carrot-left"></i></a>
                <a href="#" class="">2</a>
                <a href="#" class="">3</a>
                <a href="#" class="">4</a>
                <span class="current">5</span>
                <span>...</span>
                <a href="#" class="">4</a>
                <a href="#" class=""><i class="icon arrow_carrot-right"></i></a>
              </div>
            </div> -->


            <div class="row mt-20">
              <div class="col-md-12 text-center pagination">
                <?php
                $current_page = !empty($_GET['misha']) ? $_GET['misha'] : 1;
                $query = new WP_Query(array(
                  'posts_per_page' => 2,
                  'paged' => $current_page, // передаём текущую страницу сюда!
                ));

                while ($query->have_posts()) : $query->the_post();

                  echo '<h2>' . get_the_title() . '</h2>'; // выведем чисто заголовки для примера

                endwhile;
                echo paginate_links(array(
                  'base' => site_url() . '%_%',
                  'format' => '?misha=%#%',
                  'total' => $query->max_num_pages,
                  'current' => $current_page,
                ));

                wp_reset_postdata();
                ?>
              </div>
            </div>

          <?php endif; ?>


        </div> <!-- end col -->


        <?php get_sidebar(); ?>

      </div> <!-- end row -->
    </div> <!-- end container -->
  </section> <!-- end content -->

  <?php
  get_footer();
  ?>