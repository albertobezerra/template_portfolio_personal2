<?php get_header(); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-primary-custom  fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
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
          <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
        </li>
        
        <li class="nav-item-custom">
        Nome qualuqer
        </li>

      </ul>
    </div>

  </nav>

  <div class="container-fluid p-0">

	<section class="resume-section p-3 p-lg-5 d-flex align-items-center">

		<div class="w-100">


		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			
			<?php the_post_thumbnail(false, array('class'=>'img-fluid')); ?>

      <h3><?php the_title(); ?></h3>

      <b>Escrito por <span class="cor"><?php the_author() ?></span> em <?php the_time('d/m/y') ?></b><br><br><br>
			
      <?php the_content(); ?>

		<?php endwhile; endif; ?><br><br>

    <div class="post-pag-wrap">
              
              <div class="post-pag-container prev">
                <?php previous_post_link('
                  <span>Post anterior</span>
                  <h3>%link</h3>
                  ', '%title', false);
                ?>
              </div>

              <div class="post-pag-container next">
                <?php next_post_link('
                  <span>Próximo post</span>
                  <h3>%link</h3>
                  ', '%title', false);
                ?>
              </div>

      </div>

		</div>

	</section>


  </div>

<?php
/*
Single Post Template: [Blog]
Description: This part is optional, but helpful for describing the Post Template
*/
?>


<?php get_footer(); ?>