<?php get_header();?>
<div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <?php if(have_rows('banner')):$img_count=1; while(have_rows('banner')):the_row();
                if ($img_count==1)
                {?>
                <div class="carousel-item active">
                    <img class="w-100" src="<?php the_sub_field ('slider_image'); ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3"><?php the_sub_field ('small_title');?></h4>
                            <h3 class="display-3 text-white mb-md-4"><?php the_sub_field('big_heading');?></h3>
                            <a href="<?php the_sub_field('button_link');?>" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4"><?php the_sub_field('button_text')?></a>
                        </div>
                    </div>
                </div>
                <?php } else {?> 
                <div class="carousel-item">
                    <img class="w-100" src="<?php the_sub_field('slider_image'); ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3"><?php the_sub_field('small_title');?></h4>
                            <h3 class="display-3 text-white mb-md-4"><?php the_sub_field('big_heading');?></h3>
                            <a href="<?php the_sub_field('button_link')?>" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4"><?php the_sub_field('button_text')?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } $img_count++; ?> 	
	 	   <?php endwhile; else : endif; ?>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->

    <?php $about_us = get_field('about_us');?>
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                        <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                        <h4 class="display-3 mb-3"><?php echo $about_us ['yellowbgheading']; ?> </h4>
                        <h1 class="m-0"><?php echo $about_us ['yellowbgtitle']; ?> </h1>
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Learn About Us</h6>
                    <h1 class="mb-4 section-title"><?php echo $about_us['heading']; ?></h1>
                    <p><?php echo $about_us['description'];?></p>
                    <div class="row py-2">
                    <?php if( have_rows('about_us') ): while ( have_rows('about_us') ) : the_row(); ?>
                            <?php if( have_rows('icon') ): while ( have_rows('icon') ) : the_row(); ?>
                            <?php $icon_name = get_sub_field('icon_name'); ?>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-house font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0"><?php echo $icon_name; ?></h5>
                            </div>
                        </div>
                        <?php endwhile; endif; ?>
                        <?php endwhile; endif; ?>
                        <!-- <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                print_r($icon_name); ?>
                                <h1 class="flaticon-stairs font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0"></h5>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Commercial Design</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-living-room font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Residential Design</h5>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Awesome Services</h6>
                    <h1 class="mb-4 section-title">Awesome Interior Designing Services For Your Home</h1>
                    <p>Invidunt lorem justo clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum</p>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4">View More</a>
                </div>
                <div class="col-lg-6 p-0 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bedroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Bedroom Design</h5>
                            <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Kitchen Design</h5>
                            <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bathroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Bathroom Design</h5>
                            <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- Services End -->


    <!-- Features Start -->
    <?php $features = get_field('features'); ?>
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3"><?php echo $features['title']; ?></h6>
                    <h1 class="mb-4 section-title"><?php echo $features['heading']; ?></h1>
                    <p class="mb-4"><?php echo $features ['description']; ?></p>

                    <?php if( have_rows('features') ): while ( have_rows('features') ) : the_row(); ?>
                            <?php if( have_rows('points') ): while ( have_rows('points') ) : the_row(); ?>
                            
                    <ul class="list-inline">
                    <?php $point = get_sub_field('point'); ?>
                          <li><h5><i class="far fa-check-square text-primary mr-3"></i><?php echo $point; ?></h5></li>
                        <!-- <li><h5><i class="far fa-check-square text-primary mr-3"></i>Best Interior Design</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Customer Satisfaction</h5></li> -->
                    </ul>
                    <?php endwhile; endif; ?>
                        <?php endwhile; endif; ?>
                      
                            
                    <?php if (have_rows('features')): while(have_rows('features')): the_row(); ?>                
                                      
                        <a href="<?php echo $features['button_link'];?>" class="btn btn-primary mt-3 py-2 px-4"> <?php echo $features['button_name']; ?></a>

                    <?php endwhile; endif; ?>
                </div>

                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="<?php bloginfo('template_directory');?>/img/feature.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <!-- Features End -->


    <!-- Projects Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Projects</h6>
                    <h1 class="mb-4">Some Of Our Awesome Interior Designing Projects</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary m-1 active"  data-filter="*">All</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".first">Complete</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".second">Running</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".third">Upcoming</li>
                    </ul>
                </div>
            </div>
            <div class="row mx-1 portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/portfolio-1.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Project Name</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="<?php bloginfo('template_directory');?>/img/portfolio-1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/portfolio-2.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Project Name</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="<?php bloginfo('template_directory');?>/img/portfolio-2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/portfolio-3.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Project Name</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="<?php bloginfo('template_directory');?>/img/portfolio-3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/portfolio-4.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Project Name</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="<?php bloginfo('template_directory');?>/img/portfolio-4.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/portfolio-5.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Project Name</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="<?php bloginfo('template_directory');?>/img/portfolio-5.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="<?php bloginfo('template_directory');?>/img/portfolio-6.jpg" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4">Project Name</h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="<?php bloginfo('template_directory');?>/img/portfolio-6.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->

    <!-- Team Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="py-5 px-4 h-100 bg-primary d-flex flex-column align-items-center justify-content-center">
                        <h6 class="text-white font-weight-normal text-uppercase mb-3">Our Team</h6>
                        <h1 class="mb-0 text-center">Meet Our Team Members</h1>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 p-0 py-sm-5">
                    <div class="owl-carousel team-carousel position-relative p-0 py-sm-5">
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php bloginfo('template_directory');?>/img/team-1.jpg" alt="">
                                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Name Goes Here</h5>
                                <p class="m-0">Designation</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php bloginfo('template_directory');?>/img/team-2.jpg" alt="">
                                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Name Goes Here</h5>
                                <p class="m-0">Designation</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php bloginfo('template_directory');?>/img/team-3.jpg" alt="">
                                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Name Goes Here</h5>
                                <p class="m-0">Designation</p>
                            </div>
                        </div>
                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php bloginfo('template_directory');?>/img/team-4.jpg" alt="">
                                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Name Goes Here</h5>
                                <p class="m-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-7 py-5 pr-md-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3 pt-5">Testimonial</h6>
                    <h1 class="mb-4 section-title">What Our Clients Say</h1>
                    <div class="owl-carousel testimonial-carousel position-relative pb-5 mb-md-5">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="<?php bloginfo('template_directory');?>/img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h5>Client Name</h5>
                                    <i>Profession</i>
                                </div>
                            </div>
                            <p>Tempor at diam tempor sed. Sanctus dolor ipsum ut nonumy amet clita sea. Sed eos sed dolores vero no. Ipsum elitr elitr stet dolor  lorem erat. Diam no amet sea justo vero ut. Dolor ipsum kasd ipsum dolore.</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="<?php bloginfo('template_directory');?>/img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h5>Client Name</h5>
                                    <i>Profession</i>
                                </div>
                            </div>
                            <p class="m-0">Tempor at diam tempor sed. Sanctus dolor ipsum ut nonumy amet clita sea. Sed eos sed dolores vero no. Ipsum elitr elitr stet dolor  lorem erat. Diam no amet sea justo vero ut. Dolor ipsum kasd ipsum dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="<?php bloginfo('template_directory');?>/img/testimonial.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Blog</h6>
                    <h1 class="mb-4">Read The Latest News & Articles From Our Blog</h1>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="<?php bloginfo('template_directory');?>/img/blog-1.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">Diam amet eos at no eos</h5>
                            </div>
                            <p>Diam amet eos at no eos sit, amet rebum ipsum clita stet, diam sea est diam eos, sit vero stet justo</p>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="<?php bloginfo('template_directory');?>/img/blog-2.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">Diam amet eos at no eos</h5>
                            </div>
                            <p>Diam amet eos at no eos sit, amet rebum ipsum clita stet, diam sea est diam eos, sit vero stet justo</p>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="<?php bloginfo('template_directory');?>/img/blog-3.jpg" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">Diam amet eos at no eos</h5>
                            </div>
                            <p>Diam amet eos at no eos sit, amet rebum ipsum clita stet, diam sea est diam eos, sit vero stet justo</p>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <?php get_footer();?>