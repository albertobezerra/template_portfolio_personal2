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
          <a class="nav-link js-scroll-trigger" href="#about">Sobre mim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Experiência</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Formação</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Habilidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#blog">Blog</a>
        </li>
      </ul>
    </div>

  </nav>

  <div class="container-fluid p-0">

	<section class="resume-section p-3 p-lg-5 d-flex align-items-center">

		<div class="w-100">


		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<h3 class="mb-5"><?php the_title(); ?></h3>
		<p class="lead mb-5"><?php the_content(); ?></p>
		<?php endwhile; endif; ?>

		</div>

	</section>


  </div>


<?php get_footer(); ?>