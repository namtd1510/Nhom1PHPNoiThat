
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>Furnyish Store a Ecommerce Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
        <link href="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <!-- jQuery (necessary JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
        <!-- Custom Theme files -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
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
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/menu_jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/simpleCart.min.js"></script>
        <link href="<?php echo base_url(); ?>assets/css/form.css" rel="stylesheet" type="text/css" media="all" />
        <!--etalage-->
        <link href="<?php echo base_url(); ?>assets/css/etalage.css" rel="stylesheet" />
        <script src="<?php echo base_url(); ?>assets/js/jquery.etalage.min.js"></script>
        <script>
            jQuery(document).ready(function ($) {

                $('#etalage').etalage({
                    thumb_image_width: 300,
                    thumb_image_height: 400,
                    source_image_width: 900,
                    source_image_height: 1200,
                    show_hint: true,
                    click_callback: function (image_anchor, instance_id) {
                        alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                    }
                });

            });
        </script>


        <!-- //etalage-->

    </head>
    <body>
        <!-- header -->
        <div class="top_bg">
            <div class="container">
                <div class="header_top-sec">
                    <div class="top_left">
                        <ul>
                            <li class="top_link">Email:<a href="nhom1noithat@gmail.com"> nhom1noithat@gmail.com</a></li>|
                            <li class="top_link"><a href="login.html">My Account</a></li>|					
                        </ul>
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="facebook"></i></a></li>
                                <li><a href="#"><i class="twitter"></i></a></li>
                                <li><a href="#"><i class="dribble"></i></a></li>	
                                <li><a href="#"><i class="google"></i></a></li>										
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
       
        <!--cart-->

        
        <!---->
        <div class="single-sec">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url("Home/index")?>">Home</a></li>
                    <li class="active">Products</li>
                </ol>
                <!-- start content -->	
                <div class="col-md-9 det">
                    <div class="single_left">
                        <div class="grid images_3_of_2">
                            <ul id="etalage">
                                <?php
                                foreach ($product_image as $p) {
                                    ?> 
                                    <li>
                                        <img class="etalage_thumb_image" src="<?php echo $p->image_url;?>" class="img-responsive" />
                                        <img class="etalage_source_image" src="<?php echo $p->image_url;?>" class="img-responsive" title="" />
                                    </li>
                                <?php }
                                ?> 
                            </ul>
                            <div class="clearfix"></div>		
                        </div>
                    </div>
                    <?php
                    foreach ($product as $p) {

                        //echo "<div class='col-md-3 seller-grid'>";
                        //echo "<a href='" . site_url('productController/index') . "/" . $p->id . "'></a>";
                        //echo "</div>";
                        ?> 
                        <div class="single-right">
                            <h3><?php echo $p->product_name; ?></h3>
                            <div class="id"><h4><?php echo $p->sku; ?></h4></div>
                            <form action="" class="sky-form">
                                <fieldset>					
                                    <section>
                                        <div class="rating">
                                            <?php
                                            for ($i = $p->vote; $i >= 1; $i--) {
                                                echo '<input type="radio" name="stars-rating" id="stars-rating-' . $i . '">';
                                                echo '<label for="stars-rating-' . $i . '"><i class="icon-star"></i></label>';
                                            }
                                            ?>
                                            <div class="clearfix"></div>
                                        </div>
                                    </section>
                                </fieldset>
                            </form>
                            <div class="cost">
                                <div class="prdt-cost">
                                    <ul>							 
                                        <li>Sellling Price:</li>
                                        <li class="active"><?php echo number_format($p->price) ?></li>
                                        <a href="#">BUY NOW</a>
                                    </ul>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                            <div class="item-list">
                                <ul>
                                    <li>Material: <?php echo $p->material; ?></li>
                                    <li>Color: <?php echo $p->color; ?></li>
                                </ul>
                            </div>
                            <div class="single-bottom1">
                                <h6>Details</h6>
                                <p class="prod-desc">
                                    <!--Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.-->
                                    <?php echo $p->detail; ?>
                                </p>
                            </div>					 
                        </div>
                        <div class="clearfix"></div>	
                    <?php }
                    ?> 
                </div>
                <div class="rsidebar span_1_of_left">
                    <section  class="sky-form">
                        <div class="product_right">
                            <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories</h4>
                            <div class="tab1">
                                <ul class="place">								
                                    <li class="sort">Furniture</li>
                                    <li class="by"><img src="images/do.png" alt=""></li>
                                    <div class="clearfix"> </div>
                                </ul>
                                <div class="single-bottom">						
                                    <a href="#"><p>Sofas</p></a>
                                    <a href="#"><p>Fabric Sofas</p></a>
                                    <a href="#"><p>Love Seats</p></a>
                                    <a href="#"><p>Dinning Sets</p></a>
                                </div>
                            </div>						  
                            <div class="tab2">
                                <ul class="place">								
                                    <li class="sort">Decor</li>
                                    <li class="by"><img src="images/do.png" alt=""></li>
                                    <div class="clearfix"> </div>
                                </ul>
                                <div class="single-bottom">						
                                    <a href="#"><p>Shelves</p></a>
                                    <a href="#"><p>Wall Racks</p></a>
                                    <a href="#"><p>Curios</p></a>
                                    <a href="#"><p>Ash Trays</p></a>
                                </div>
                            </div>
                            <div class="tab3">
                                <ul class="place">								
                                    <li class="sort">Lighting</li>
                                    <li class="by"><img src="images/do.png" alt=""></li>
                                    <div class="clearfix"> </div>
                                </ul>
                                <div class="single-bottom">						
                                    <a href="#"><p>Table Lamps</p></a>
                                    <a href="#"><p>Tube Lights</p></a>
                                    <a href="#"><p>Study Lamps</p></a>
                                    <a href="#"><p>Usb Lamps</p></a>
                                </div>
                            </div>
                            <div class="tab4">
                                <ul class="place">								
                                    <li class="sort">Bed & Bath</li>
                                    <li class="by"><img src="images/do.png" alt=""></li>
                                    <div class="clearfix"> </div>
                                </ul>
                                <div class="single-bottom">						
                                    <a href="#"><p>Towels</p></a>
                                    <a href="#"><p>Bath Roles</p></a>
                                    <a href="#"><p>Mirrors</p></a>
                                    <a href="#"><p>Soap Stands</p></a>
                                </div>
                            </div>
                            <div class="tab5">
                                <ul class="place">								
                                    <li class="sort">Fabric</li>
                                    <li class="by"><img src="images/do.png" alt=""></li>
                                    <div class="clearfix"> </div>
                                </ul>
                                <div class="single-bottom">						
                                    <a href="#"><p>Sofas</p></a>
                                    <a href="#"><p>Fabric Sofas</p></a>
                                    <a href="#"><p>Beds</p></a>
                                    <a href="#"><p>Relax Chairs</p></a>
                                </div>
                            </div>

                            <!--script-->
                            <script>
                                $(document).ready(function () {
                                    $(".tab1 .single-bottom").hide();
                                    $(".tab2 .single-bottom").hide();
                                    $(".tab3 .single-bottom").hide();
                                    $(".tab4 .single-bottom").hide();
                                    $(".tab5 .single-bottom").hide();

                                    $(".tab1 ul").click(function () {
                                        $(".tab1 .single-bottom").slideToggle(300);
                                        $(".tab2 .single-bottom").hide();
                                        $(".tab3 .single-bottom").hide();
                                        $(".tab4 .single-bottom").hide();
                                        $(".tab5 .single-bottom").hide();
                                    })
                                    $(".tab2 ul").click(function () {
                                        $(".tab2 .single-bottom").slideToggle(300);
                                        $(".tab1 .single-bottom").hide();
                                        $(".tab3 .single-bottom").hide();
                                        $(".tab4 .single-bottom").hide();
                                        $(".tab5 .single-bottom").hide();
                                    })
                                    $(".tab3 ul").click(function () {
                                        $(".tab3 .single-bottom").slideToggle(300);
                                        $(".tab4 .single-bottom").hide();
                                        $(".tab5 .single-bottom").hide();
                                        $(".tab2 .single-bottom").hide();
                                        $(".tab1 .single-bottom").hide();
                                    })
                                    $(".tab4 ul").click(function () {
                                        $(".tab4 .single-bottom").slideToggle(300);
                                        $(".tab5 .single-bottom").hide();
                                        $(".tab3 .single-bottom").hide();
                                        $(".tab2 .single-bottom").hide();
                                        $(".tab1 .single-bottom").hide();
                                    })
                                    $(".tab5 ul").click(function () {
                                        $(".tab5 .single-bottom").slideToggle(300);
                                        $(".tab4 .single-bottom").hide();
                                        $(".tab3 .single-bottom").hide();
                                        $(".tab2 .single-bottom").hide();
                                        $(".tab1 .single-bottom").hide();
                                    })
                                });
                            </script>
                            <!-- script -->					 
                    </section> 
                    <!---->
                    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
                    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
                    <script type='text/javascript'>//<![CDATA[ 
                                $(window).load(function () {
                                    $("#slider-range").slider({
                                        range: true,
                                        min: 0,
                                        max: 400000,
                                        values: [2500, 350000],
                                        slide: function (event, ui) {
                                            $("#amount").val("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
                                        }
                                    });
                                    $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

                                });//]]>  

                    </script>

                </div>
            </div>	     				
            <div class="clearfix"></div>
        </div>	 
    </div>
    <!---->
    <div class="footer-content">
        <div class="container">
            <div class="ftr-grids">
                <div class="col-md-3 ftr-grid">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="#">Who We Are</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#">Our Sites</a></li>
                        <li><a href="#">In The News</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Carrers</a></li>					 
                    </ul>
                </div>
                <div class="col-md-3 ftr-grid">
                    <h4>Customer service</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Cancellation</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Bulk Orders</a></li>
                        <li><a href="#">Buying Guides</a></li>					 
                    </ul>
                </div>
                <div class="col-md-3 ftr-grid">
                    <h4>Your account</h4>
                    <ul>
                        <li><a href="account.html">Your Account</a></li>
                        <li><a href="#">Personal Information</a></li>
                        <li><a href="#">Addresses</a></li>
                        <li><a href="#">Discount</a></li>
                        <li><a href="#">Track your order</a></li>					 					 
                    </ul>
                </div>
                <div class="col-md-3 ftr-grid">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="#">> Furinture</a></li>
                        <li><a href="#">> Bean Bags</a></li>
                        <li><a href="#">> Decor</a></li>
                        <li><a href="#">> Kichen & Dinning</a></li>
                        <li><a href="#">> Bed & Bath</a></li>
                        <li><a href="#">...More</a></li>					 
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!---->
    <div class="footer">
        <div class="container">
            <div class="store">
                <ul>
                    <li class="active">OUR STORE LOCATOR::</li>
                    <li><a href="#">Noida</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="#">Belgium</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="#">China</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="#">Thane</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="#">Chennai</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="#">Armenia</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="#">Kolkata</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="#">Malaysia</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="#">Indonesia</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="#">Mumbai</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="#">Kerala</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="#">Spain</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="#">Northern Ireland</a></li>	
                    <li><a href="#">|</a></li>				 
                    <li><a href="#">Mohali</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="#">Gurgaon</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="#">Panchkula</a></li>
                    <li><a href="#">|</a></li>				 
                    <li><a href="#">Ambala</a></li>	
                </ul>
            </div>		 
            <div class="copywrite">
                <p>Copyright © 2015 Furnyish All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>			 
        </div>
    </div>
</div>
<!---->
</body>
</html>