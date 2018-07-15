	</div><!-- closes site-wrapper -->
	<footer>
        <div class="footer-top">
            <div class="container text-center">
                <div class="newsletter">
                    <form id="subscription-form" action="" method="post">
                        <div class="form-group">
                            <input type="text" name="sub-email" placeholder="Subscribe to our newsletter">
                            <input type="submit" value="Subscribe Now">
                        </div><!-- form-group -->
                    </form>
                </div><!-- newsletter -->
                <div class="contact-info">
                    <p>
                        123 Lewisham High Street, London, United Kingdom
                    </p>
                    <p>
                        <a href="mailto:team@yourcompany.com">
                            team@yourcompany.com
                        </a>
                    </p>
                </div><!-- contact-info -->
            </div><!-- container -->
        </div><!-- footer-top -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>
                            &copy; <?php echo date('Y'); ?> Your company | All Rights Reserved
                        </p>
                    </div>
                    <div class="col-md-6 des-by">
                        <p>
                            Designed by <a target="_blank" href="https://www.mwn-design.co.uk">MWN Design</a>
                        </p>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- footer-bottom -->
	</footer>
	<!-- link in JS files -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/animationCounter.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".owl-carousel").owlCarousel({
                    autoplay:true,
                    autoplayTimeout: 7500,
                    autoplayHoverPause: true,
                    loop: true,
                    navigation: false,
                    pagination: false,
                    paginationSpeed: 800,
                    singleItem: false,
                    slideSpeed: 1000,
                    items: 1,
                });
            });

        </script>
        <script src="assets/js/wow.js"></script>
        <script>
            new WOW().init();
        </script>
	<script src="assets/js/custom.js"></script>
	</body>
</html>