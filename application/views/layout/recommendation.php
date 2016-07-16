<div class="recommendation">
    <div class="container">
        <div class="recmnd-head">
            <h3>RECOMMENDATIONS FOR YOU</h3>
        </div>
        <div class="bikes-grids">			 
            <ul id="flexiselDemo1">
                <li>
                    <a href="products.html"><img src="<?php echo base_url(); ?>assets/images/ts1.jpg" alt=""/></a>	
                    <h4><a href="products.html">King Size Bed</a></h4>	
                    <p>ID: KS3989</p>
                </li>
                <li>
                    <a href="products.html"><img src="<?php echo base_url(); ?>assets/images/r2.jpg" alt=""/></a>	
                    <h4><a href="products.html">Elite Diwan Seater</a></h4>	
                    <p>ID: KS3989</p>
                </li>
                <li>
                    <a href="products.html"><img src="<?php echo base_url(); ?>assets/images/r3.jpg" alt=""/></a>
                    <h4><a href="products.html">Dior Corner Sofa</a></h4>	
                    <p>ID: KS3989</p>
                </li>
                <li>
                    <a href="products.html"><img src="<?php echo base_url(); ?>assets/images/r4.jpg" alt=""/></a>
                    <h4><a href="products.html">Alia Modular Sofa</a></h4>	
                    <p>ID: KS3989</p>
                </li>
                <li>
                    <a href="products.html"><img src="<?php echo base_url(); ?>assets/images/r5.jpg" alt=""/></a>	
                    <h4><a href="products.html">King Size Bed</a></h4>	
                    <p>ID: KS3989</p>					 
                </li>
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