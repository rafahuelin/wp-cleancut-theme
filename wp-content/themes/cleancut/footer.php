<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Follow Us On Social Media:</h2>
            </div>
            <div class="col-lg-6">
                <ul class="list-inline banner-social-buttons">
                    <?php if(get_theme_mod('facebook_url', 'http://facebook.com') != '') : ?>
                        <li><a class="btn btn-default btn-lg" href="<?php echo get_theme_mod('facebook_url', 'http://facebook.com'); ?>" target="_blank"><i class="fa fa-facebook fa-fw"></i> Facebook</a></li>
                    <?php endif; ?>
                    <?php if(get_theme_mod('twitter_url', 'http://twitter.com') != '') : ?>
                        <li><a class="btn btn-default btn-lg" href="<?php echo get_theme_mod('twitter_url', 'http://twitter.com'); ?>" target="_blank"><i class="fa fa-twitter fa-fw"></i> Twitter</a></li>
                    <?php endif; ?>
                    <?php if(get_theme_mod('linkedin_url', 'http://linkedin.com') != '') : ?>
                        <li><a class="btn btn-default btn-lg" href="<?php echo get_theme_mod('linkedin_url', 'http://linkedin.com'); ?>" target="_blank"><i class="fa fa-linkedin fa-fw"></i> Linkedin</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <p class="copyright text-muted small">Copyright &copy; CleanCut Theme 2016. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>