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
        <a class="nav-link js-scroll-trigger" href="http://www.equipebezerradasilva.com.br/alberto/posts-do-portfolio">IR PARA O PORTFÓLIO</a>
        </li>


      </ul>
    </div>

</nav>

<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="blog">
      <div class="w-100">

        <h2 class="mb-5"><?php the_title(); ?></h2>

        <div class="row">

          <?php 
            $args = array('post_type'=>'post', 'category_name'=>'blog');
            $my_posts = get_posts( $args );
            if($my_posts) : foreach($my_posts as $post) : setup_postdata( $post );
            ?>

          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail(false, array('class'=>'img-fluid')); ?></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category"><?php echo strip_tags(get_the_tag_list('',', ',''));?></h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="card-description"><?php the_excerpt(); ?></p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">

                    <?php echo get_avatar( get_the_author_meta('ID'), $args['96'], '', 'avatar', array('class' => 'avatar rounded-circle') ); ?>

                    <span class="author"><?php the_author() ?></span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> <?php the_time('M,y') ?>
                </div>
              </div>
            </div>
        </div>

            <?php
              endforeach;
              endif;
            ?>


      </div>
</section>




<!--Isso que devine o layout para cada págia-->
<?php
/*
Template Name: TODOS OS POSTS DO BLOG
*/
?>

<?php get_footer(); ?>