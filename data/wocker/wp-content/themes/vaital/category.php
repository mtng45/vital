<?php
/*
Template Name: category
*/
if ( in_category('rhyda') ) {
  include(TEMPLATEPATH . '/category-rhyda.php');
}
?>
<?php get_header(); ?>
    <!-- Header -->
    <header>
    <div class="u-text-center logo">
        <a href="<?php home_url(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/img/logo.png" alt="vital logo"></a>
    </div>
    <nav>
        <div class="nav-wrapper">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="m-navbar hide-on-med-and-down">
                <li><a href="./">HOME</a></li>
                <li><a href="/artists/">ARTISTS</a></li>
                <li><a href="/events/">EVENTS</a></li>
                <li><a href="/music/">MUSIC</a></li>
                <li><a href="/blog/">BLOG</a></li>
                <li><a href="#">SHOP</a></li>
            </ul>
            <ul class="side-nav m-sidenav" id="mobile-demo">
                <li><a href="./">HOME</a></li>
                <li><a href="/artists/">ARTISTS</a></li>
                <li><a href="/events/">EVENTS</a></li>
                <li><a href="/music/">MUSIC</a></li>
                <li><a href="/blog/">BLOG</a></li>
                <li><a href="#">SHOP</a></li>
            </ul>
        </div>
    </nav>
</header>
    <div class="u-bg-top">
    
    <section class="container u-pt60">
        <h1 class="m-heading-sub">NEW TOPICS</h1>
        <div class="l-row row u-mt30">
            <div class="col m4 s6">
                <section class="card m-card">
                    <a href="#">
                        <div class="m-card-image">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/keyvisual01.jpg">
                        </div>
                    </a>
                    <h1 class="m-heading-content">
                        <a href="#">TITLES</a>
                    </h1>
                </section>
            </div>
            <div class="col m4 s6">
                <section class="card m-card">
                    <a href="#">
                        <div class="m-card-image">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/ate/ate07.jpg">
                        </div>
                    </a>
                    <h1 class="m-heading-content">
                        <a href="#">TITLES</a>
                    </h1>
                </section>
            </div>
            <div class="col m4 s6">
                <section class="card m-card">
                    <a href="#">
                        <div class="m-card-image">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/ate/ate01.png">
                        </div>
                    </a>
                    <h1 class="m-heading-content">
                        <a href="#">TITLES</a>
                    </h1>
                </section>
            </div>
            <div class="col m4 s6">
                <section class="card m-card">
                    <a href="#">
                        <div class="m-card-image">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/ate/ate01.png">
                        </div>
                    </a>
                    <h1 class="m-heading-content">
                        <a href="#">TITLES</a>
                    </h1>
                </section>
            </div>
            <div class="col m4 s6">
                <section class="card m-card">
                    <a href="#">
                        <div class="m-card-image">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/ate/ate01.png">
                        </div>
                    </a>
                    <h1 class="m-heading-content">
                        <a href="#">TITLES</a>
                    </h1>
                </section>
            </div>
            <div class="col m4 s6">
                <section class="card m-card">
                    <a href="#">
                        <div class="m-card-image">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/ate/ate01.png">
                        </div>
                    </a>
                    <h1 class="m-heading-content">
                        <a href="#">TITLES</a>
                    </h1>
                </section>
            </div>
        </div> 
        <hr class="u-hr-black">
        <!-- SNS -->
        <div class="u-text-center">
    <ul class="m-listSns">
        <li><a href="#"><i class="icon-instagram"></a></i></li>
        <li><a href="#"><i class="icon-facebook"></a></i></li>
        <li><a href="#"><i class="icon-twitter"></a></i></li>
        <li><a href="#"><i class="icon-pinterest"></a></i></li>
        <li><a href="#"><i class="icon-tumblr"></a></i></li>
        <li><a href="#"><i class="icon-vimeo"></a></i></li>
    </ul>
</div>
    </section>
        <?php get_footer(); ?>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/index.min.js"></script>
    </body>
</html>
