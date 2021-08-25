<!DOCTYPE html>
<html>
<head>
    <title>Vodguk</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- //for-mobile-apps -->
    <link rel="stylesheet" href="/public/css/swipebox.css">
    <link href="/public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- js -->
    <script type="text/javascript" src="/public/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!--animate-->
    <link href="/public/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="/public/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <script src="/public/js/responsiveslides.min.js"></script>
    <!-- swipe box js -->
    <script src="/public/js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            $(".swipebox").swipebox();
        });
    </script>
    <!-- //swipe box js -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="/public/js/move-top.js"></script>
    <script type="text/javascript" src="/public/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/main_style.css">
    <!-- start-smoth-scrolling -->

</head>
<body class="main_template" style="background-color: silver">
<!--banner-->
<div class="banner">
    <div class="container">
        <div class="header-nav">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div id="rotate_logo">
                        <h1>
                            <a class="navbar-brand link link--yaku" id="rotate_letter"
                               href="?"><span>V</span><span>O</span><span>D</span><span>G</span><span>U</span><span>K</span></a>
                        </h1>
                    </div>
                </div>
                <?php
                include "menu_" . ($_SESSION['user']['code'] ?? 'guest') . ".php";
                ?>
        </div>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 4
                $("#slider3").responsiveSlides({
                    auto: true,
                    pager: false,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });
            });
        </script>
        <div id="top" class="callbacks_container">
        </div>
        <div class="clearfix">
        </div>
    </div>
</div>
<?php
if (!empty($_SESSION['warnings'])) {
    foreach ($_SESSION['warnings'] as $warning) {
        echo "<div class='alert alert-warning' role='alert'>$warning</div>";
    }
    $_SESSION['warnings'] = [];
}
?>
<?php
/**
 * @var $this App\View\View
 */
$this->body();
?>
<footer>
    <section>email:pozharkov.sergej@gmail.com, tel:+375-29-374-82-72</section>
    <section>
        <a href="https://github.com/SergeiPozharkov" id="link">GITHUB</a>
        <a href="https://www.linkedin.com/in/sergey-pozharkov-131705208/" id="link">LINKEDIN</a>
    </section>
    <section>
        &copy; Pozharkov Sergey 2021
    </section>
</footer>
<!-- //footer -->
<script type="text/javascript" src="/public/js/bootstrap-3.1.1.min.js"></script>
<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</html>