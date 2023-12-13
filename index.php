<?php get_header() ?>


<div class="content-wrapper oh">

  <!-- Content -->
  <section class="content blog-standard">
    <div class="container relative">
      <div class="row">

        <!-- post content -->
        <div class="col-md-9 post-content mb-50">

          <!-- large post -->
          <article class="entry-item large-post">

            <div class="entry-header">
              <a href="#" class="entry-category"><?php the_category(', '); ?></a>
              <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
            </div>

            <div class="entry-img">
              <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/featured_post.jpg" alt="">
              </a>
            </div>

            <div class="entry-wrap">
              <div class="entry">

                <div class="entry-content">
                  <?php the_content(); ?>
                  <div class="text-center">
                    <a href="" <?php the_permalink(); ?>" class="read-more underline-link">Читать далее</a>
                  </div>
                </div>

                <div class="entry-meta-wrap clearfix">
                  <ul class="entry-meta">
                    <li class="entry-date">
                      <a href="#">1 января 2020</a>
                    </li>
                    <li class="entry-comments">
                      <a href="blog-single.html">5 комментариев</a>
                    </li>
                  </ul>


                </div>

              </div>
            </div>
          </article> <!-- end large post -->

          <!-- grid posts -->
          <div class="row items-grid">

            <?php if (have_posts()) : ?>
              <!-- grid posts -->
              <div class="row items-grid">

                <?php while (have_posts()) : the_post(); ?>

                  <?php get_template_part('entry'); ?>

                <?php endwhile; ?>



              </div> <!-- end grid posts -->
            <?php else : ?>
              <p>В этой рубрике пусто.....</p>
            <?php endif; ?>



          </div> <!-- end grid posts -->

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
          </div>


        </div> <!-- end col -->
        <?php get_sidebar(); ?>

      </div> <!-- end row -->
    </div> <!-- end container -->
  </section> <!-- end content -->

  <?php
  get_footer();
  ?>