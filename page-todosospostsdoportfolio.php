<?php get_header(); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-primary-custom  fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="http://www.equipebezerradasilva.com.br/alberto">
      <span class="d-block d-lg-none">Alberto Bezerra</span>

        <span class="d-none d-lg-block">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" class="img-fluid img-profile rounded-circle mx-auto mb-2" >
        </span>
    
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="http://www.equipebezerradasilva.com.br/alberto">VOLTAR AO INICIO</a>
        </li>
        <li class="nav-item-custom">
        <a class="nav-link js-scroll-trigger" href="http://www.equipebezerradasilva.com.br/alberto/posts-do-blog">TODOS OS POST'S DO BLOG</a>
        </li>


      </ul>
    </div>

</nav>

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="portfolio">
      <div class="w-100">

        <h2 class="mb-5"><?php the_title(); ?></h2>

        <div class="row">

          <?php 
            $args = array('post_type'=>'post', 'category_name'=>'portfolio');
            $my_posts = get_posts( $args );
            if($my_posts) : foreach($my_posts as $post) : setup_postdata( $post );
            ?>

        <div class="col-md-4">
          <div class="work-box">

            <a href="<?php the_permalink(); ?>">

              <div class="work-img">
                <?php the_post_thumbnail(false, array('class'=>'img-fluid')); ?> 
              </div>

              <div class="work-content">

                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"><?php the_title(); ?></h2>
                    <div class="w-more">
                      <span class="w-ctegory"><?php echo strip_tags(get_the_tag_list('',', ',''));?></span> / <span class="w-date"><?php the_time('d M Y') ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <?php
              endforeach;
              endif;
            ?>



      </div>
      </div>
    </section>




<!--Isso que devine o layout para cada págia-->
<?php
/*
Template Name: TODOS OS POSTS DO PORTFOLIO
*/
?>

<?php get_footer(); ?>