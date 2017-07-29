<?php get_header(); ?>

<section class="row showcase animated fadeIn">
    <div class="container">
        <div class="col-md-12">
            <div class="showcase-content">
                <h1><?php echo get_theme_mod('showcase_heading', 'CleanCut Theme') ?></h1>
                <p class="lead"><?php echo get_theme_mod('showcase_text', 'A Wordpress Theme By Rafa Huelin') ?></p>
                <?php if(get_theme_mod('facebook_url', 'http://facebook.com') != '') : ?>
                    <a class="btn btn-default btn-lg" href="<?php echo get_theme_mod('facebook_url', 'http://facebook.com'); ?>" target="_blank"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
                <?php endif; ?>
                <?php if(get_theme_mod('twitter_url', 'http://twitter.com') != '') : ?>
                    <a class="btn btn-default btn-lg" href="<?php echo get_theme_mod('twitter_url', 'http://twitter.com'); ?>" target="_blank"><i class="fa fa-twitter fa-fw"></i> Twitter</a>
                <?php endif; ?>
                <?php if(get_theme_mod('linkedin_url', 'http://linkedin.com') != '') : ?>
                    <a class="btn btn-default btn-lg" href="<?php echo get_theme_mod('linkedin_url', 'http://linkedin.com'); ?>" target="_blank"><i class="fa fa-linkedin fa-fw"></i> Linkedin</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<div class="section-a">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6 animated fadeInLeft">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Lorem ipsum dolor sit:</h2>
                <p class="lead">Proin interdum metus in justo malesuada, non dignissim nunc porta. Pellentesque facilisis lorem cursus condimentum facilisis. Aenean viverra, ante quis tristique molestie</p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img src="./img/pic1.jpg" class="img-responsive img-circle animated fadeInRight">
            </div>
        </div>
    </div>
</div>

<div class="section-b">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6 col-sm-6 animated fadeInRight">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Vivamus porta neque justo:</h2>
                <p class="lead">Suspendisse at lacus condimentum, lobortis orci et, cursus sem. Donec id aliquet augue. Aliquam non aliquet urna, eu sagittis lacus</p>
            </div>
            <div class="col-lg-5 col-sm-pull-6 col-sm-6">
                <img src="./img/pic2.jpg" class="img-responsive img-circle animated fadeInLeft">
            </div>
        </div>
    </div>
</div>

<div class="section-a">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6 animated fadeInLeft">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Ut a dapibus felis:</h2>
                <p class="lead">Ut auctor elementum lacus sit amet molestie. Ut a dapibus felis, non feugiat odio. Etiam sagittis aliquam felis, nec eleifend lectus bibendum et</p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img src="./img/pic3.jpg" class="img-responsive img-circle animated fadeInRight">
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>