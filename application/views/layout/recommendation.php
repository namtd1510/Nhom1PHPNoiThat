<div class="recommendation">
    <div class="container">
        <div class="recmnd-head">
            <h3>RECOMMENDATIONS FOR YOU</h3>
        </div>
        <div class="bikes-grids">			 
            <ul id="flexiselDemo1">
                <?php
                foreach ($product as $p) {
                    echo "<li><a href='".site_url('productController/index')."/".$p->id."'><img src='".$p->image_url."' /></a>";
                    echo '<h4><a href="'.site_url('productController/index')."/".$p->id.'">'.$p->product_name.'</a></h4>';
                    echo "<p>".$p->sku."</p></li>";
                }
                ?> 
                <!--<li>
                    <a href="products.html"><img src="<?php //echo base_url(); ?>assets/images/ts1.jpg" alt=""/></a>	
                    <h4><a href="products.html">King Size Bed</a></h4>	
                    <p>ID: KS3989</p>
                </li>-->
                
            </ul>
            <script type="text/javascript">
                $(window).load(function () {
                    $("#flexiselDemo1").flexisel({
                        visibleItems: 5,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint: 480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint: 640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint: 768,
                                visibleItems: 3
                            }
                        }
                    });
                });
            </script>
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.flexisel.js"></script>			 
        </div>
    </div>
</div>
<!---->