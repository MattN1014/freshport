	</div><!-- closes site-wrapper -->
    <section id="contact">

    </section>
	<footer>
        <div class="container">
            <div class="row">
                <div class="col copyright">
                    <p>
                        &copy; <?php echo date('Y'); ?> Your company | All Rights Reserved
                    </p>
                </div>
                <div class="col des-by">
                    <p>
                        Designed by <a target="_blank" href="https://www.mwn-design.co.uk">MWN Design</a>
                    </p>
                </div>
            </div>
        </div>
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