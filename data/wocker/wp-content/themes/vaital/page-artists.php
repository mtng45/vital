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
        <h1 class="m-heading-sub">ARTISTS</h1>
        <div class="l-row row u-mt30">
            <?php
            $repeat_group = SCF::get( 'gp-artists' );
            foreach ( $repeat_group as $field_name => $field_value ) {
            ?>
                <div class="col m4 s6">
                    <section class="card m-card">
                        <a href="<?php echo esc_html( $field_value['cf-cateUrl'] ); ?>">
                            <div class="m-card-image">
                                <?php echo wp_get_attachment_image($field_value['cf-artistImage'], 'medium'); ?>
                            </div>
                        </a>
                        <h1 class="m-heading-content">
                            <a href="<?php echo esc_html( $field_value['cf-cateUrl'] ); ?>">
                                <?php echo esc_html( $field_value['cf-artistName'] ); ?>
                            </a>
                        </h1>
                    </section>
                </div>
                <?php } ?>
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
