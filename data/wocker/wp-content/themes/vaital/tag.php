<?php
//取得したいタグ情報
$tags = get_the_tags();
//取得したいタームのID
$term_id = $tags[0]->term_id;
//取得したいタクソノミーの種類 category | post_tag | カスタムタクソノミー
$taxonomy = 'post_tag';
//取得したいカスタムフィールド
$key_image = SCF::get_term_meta( $term_id, $taxonomy, 'cf-artistKeyImage');
$artist_image = SCF::get_term_meta( $term_id, $taxonomy, 'cf-artistImage');
$artist_string = SCF::get_term_meta( $term_id, $taxonomy, 'cf-artistString');
$instagram_url = SCF::get_term_meta( $term_id, $taxonomy, 'cf-instagramUrl');
$facebook_url = SCF::get_term_meta( $term_id, $taxonomy, 'cf-facebookUrl');
$twitter_url = SCF::get_term_meta( $term_id, $taxonomy, 'cf-twitterUrl');
$pinterest_url = SCF::get_term_meta( $term_id, $taxonomy, 'cf-pinterestUrl');
$tumblr_url = SCF::get_term_meta( $term_id, $taxonomy, 'cf-tumblrUrl');
$vimeo_url = SCF::get_term_meta( $term_id, $taxonomy, 'cf-vimeoUrl');
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
    <!-- image -->
    <div class="m-keyvisual">
        <div class="m-keyvisual-body">
            <?php echo wp_get_attachment_image( $key_image, 'full' ); ?>
        </div>
    </div>
    
    <section class="l-section-maxWidth u-mb60">
        <h1 class="m-heading-main u-text-center"><?php echo esc_html( single_tag_title() ); ?></h1>
        <div class="row">
            <div class="col m4">
                <div class="m-thumbnail">
                    <div class="m-thumbnail-body">
                        <?php echo wp_get_attachment_image( $artist_image, 'middle' ); ?>
                    </div>
                </div>
            </div>
            <div class="col m4 l-box">
                <p class="u-text-middle">
                <?php echo esc_html( $artist_string ); ?>
                
                </p>
                <div class="l-box-bottom">
                    <!-- SNS -->
                    <div class="u-text-center">
                        <ul class="m-listSns">
                            <?php if($instagram_url) { ?>
                            <li><a href="<?php echo esc_html( $instagram_url ); ?>" target="_blank"><i class="icon-instagram"></a></i></li>
                            <?php } ?>
                            <?php if($facebook_url) { ?>
                            <li><a href="<?php echo esc_html( $facebook_url ); ?>" target="_blank"><i class="icon-facebook"></a></i></li>
                            <?php } ?>
                            <?php if($twitter_url) { ?>
                            <li><a href="<?php echo esc_html( $twitter_url ); ?>" target="_blank"><i class="icon-twitter"></a></i></li>
                            <?php } ?>
                            <?php if($pinterest_url) { ?>
                            <li><a href="<?php echo esc_html( $pinterest_url ); ?>" target="_blank"><i class="icon-pinterest"></a></i></li>
                            <?php } ?>
                            <?php if($tumblr_url) { ?>
                            <li><a href="<?php echo esc_html( $tumblr_url ); ?>" target="_blank"><i class="icon-tumblr"></a></i></li>
                            <?php } ?>
                            <?php if($vimeo_url) { ?>
                            <li><a href="<?php echo esc_html( $vimeo_url ); ?>" target="_blank"><i class="icon-vimeo"></a></i></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col m4">
                <div class="m-thumbnail">
                    <a href="#">
                        <div class="m-thumbnail-content">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/keyvisual01.jpg" alt="アーティストアー写">
                        </div>
                    </a>
                    <a href="#">
                        <div class="m-thumbnail-content">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/thumnail01.jpg" alt="アーティストアー写">
                        </div>
                    </a>
                    <a href="#">
                        <div class="m-thumbnail-content">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/thumnail01.jpg" alt="アーティストアー写">
                        </div>
                    </a>
                    <a href="#">
                        <div class="m-thumbnail-content">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/thumnail01.jpg" alt="アーティストアー写">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="container">
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
