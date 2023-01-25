


<?php if(is_page('home'))
{
    get_header(); ?>



<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
    <div class="container px-5 mt-3">
        <a class="navbar-brand fw-bold" href="#page-top"><?php echo get_theme_mod('landing_panel_title')?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                <?php
                wp_nav_menu(
                    [

                        'theme_location' => 'primary',]
                    )
                ;

                ?>
            </ul>
            <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal"
                data-bs-target="#feedbackModal">
                <span class="d-flex align-items-center">
                    <i class="bi-chat-text-fill me-2"></i>
                    <span class="small"><?php echo get_theme_mod('right_button')?></span>
                </span>
            </button>
        </div>
    </div>
</nav>
<header class="masthead">
    <div class="container px-5 mt-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <!-- Mashead text and app badges-->
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
                    <h1 class="display-1 lh-1 mb-3"><?php echo get_post_meta($post->ID,'showcase',true); ?></h1>
                    <p class="lead fw-normal text-muted mb-5"><?php echo get_post_meta($post->ID, 'launch',true) ?></p>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                        <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge"
                                src="<?php echo get_field('google-play-badge') ?>" alt="..." /></a>
                        <a href="#!"><img class="app-badge" src="<?php echo get_field('app-store-badge')?>" alt="..." /></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%">
                                        <source src="<?php echo get_field('video-phone')?>" type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
    </div>
</header>

<!-- Quote/testimonial aside-->
<aside class="text-center bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-dark mb-4"><?php echo get_post_meta($post->ID,'quotetestimonial',true) ?></div>
                    <img src="<?php echo get_field('tnwlogo')?>" alt="..." style="height: 3rem" />
                </div>
            </div>
        </div>
    </aside>
    <!-- App features section-->
    <section id="features">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt"><?php echo get_post_meta($post->ID,'devicemockt',true) ?></h3>
                                    <p class="text-muted mb-0"><?php echo get_post_meta($post->ID,'devicemockp',true) ?></p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt"><?php echo get_post_meta($post->ID,'flexibleuset',true) ?></h3>
                                    <p class="text-muted mb-0"><?php echo get_post_meta($post->ID,'flexibleusep',true) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt"><?php echo get_post_meta($post->ID,'freetouset',true) ?></h3>
                                    <p class="text-muted mb-0"><?php echo get_post_meta($post->ID,'freetousep',true) ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt"><?php echo get_post_meta($post->ID,'opensourcet',true) ?></h3>
                                    <p class="text-muted mb-0"><?php echo get_post_meta($post->ID,'opensourcep',true) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%">
                                        <source src="<?php echo get_field('video-phone')?>" type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic features section--> <!--Enter new age of web design -->
    <section class="bg-light">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-5">
                    <h2 class="display-4 lh-1 mb-4"><?php echo get_post_meta($post->ID,'enternewaget',true) ?></h2>
                    <p class="lead fw-normal text-muted mb-5 mb-lg-0"><?php echo get_post_meta($post->ID,'enternewagep',true) ?>.</p>
                </div>
                <div class="col-sm-8 col-md-6">
                    <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle"
                            src="https://source.unsplash.com/u8Jn2rzYIps/900x900" alt="..." /></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="cta">
        <div class="cta-content">
            <div class="container px-5">
                <h2 class="text-white display-1 lh-1 mb-4">
                    <?php echo get_post_meta($post->ID,'stopwaiting',true) ?>
                    <br />
                    <?php echo get_post_meta($post->ID,'startbuilding',true) ?>
                </h2>
                <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="https://startbootstrap.com/theme/new-age"
                    target="_blank"><?php echo get_post_meta($post->ID,'dwnldbutton',true) ?></a>
            </div>
        </div>
    </section>
    <!-- App badge section--> <!--Get the app now -->
    <section class="bg-gradient-primary-to-secondary" id="download">
        <div class="container px-5">
            <h2 class="text-center text-white font-alt mb-4"><?php echo get_post_meta($post->ID, 'getappnow',true)?></h2>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="<?php echo get_field('google-play-badge') ?>"
                        alt="..." /></a>
                <a href="#!"><img class="app-badge" src="<?php echo get_field('app-store-badge')?>" alt="..." /></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-black text-center py-4">
        <div class="container">
            <div class="text-white-50 small">
            <?php echo get_theme_mod('footer_panel_title')?>
                <!-- <a href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a> -->
                <?php wp_nav_menu(
                    [

                        'theme_location' => 'extra',]
                    ) ;

                ?>
            </div>
        </div>
    </footer>
    <!-- Feedback Modal-->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary-to-secondary p-4">
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                                data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                            </div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text"
                                placeholder="Enter your message here..." style="height: 10rem"
                                data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a
                                    href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg disabled"
                                id="submitButton" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

<?php get_footer(); 
                    
}
?>