<html>
    <head>
    <head>
        <title>Furnyish Store a Ecommerce Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary JavaScript plugins) -->
        <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
        <!-- Custom Theme files -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Furnyish Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
        <!-- start menu -->
        <link href="<?php echo base_url(); ?>assets/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/megamenu.js"></script>
        <script>$(document).ready(function () {
                $(".megamenu").megamenu();
            });</script>
        <script src="<?php echo base_url(); ?>assets/js/menu_jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/simpleCart.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 1
                $("#slider1").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                });
            });
        </script>
    </head>
    <body>
        <?php
        if ($header)
            echo $header;
        if ($megamenu)
            echo $megamenu;
        if ($content)
            echo $content;
        if ($topnew)
            echo $topnew;
        if ($recommendation)
            echo $recommendation;
        if ($footercontent)
            echo $footercontent;
        if ($footer)
            echo $footer;
        ?>
    </body>
</html>