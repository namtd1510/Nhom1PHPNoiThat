<div class="top-sellers">
    <div class="container">
        <h3>TOP - NEW</h3>
        <div class="seller-grids">
            
                <?php
                foreach ($product as $p) {
                    echo "<div class='col-md-3 seller-grid'>";
                    echo "<a href='".  site_url('productController/index')."/".$p->id."'><img src='".$p->image_url."' /></a>";
                    echo '<h4><a href="'.site_url('productController/index')."/".$p->id.'">'.$p->product_name.'</a></h4>';
                    echo "<p>".$p->sku."</p>";
                    echo "</div>";
                }
                ?> 
                <!--<a href="products.html"><img src="<?php //echo base_url(); ?>assets/images/ts2.jpg" alt=""/></a>
                <h4><a href="products.html">Carnival Doublecot Bed</a></h4>
                <span>ID: DB4790</span>
                <p>Rs. 25000/-</p>-->
            
            
            <div class="clearfix"></div>
        </div>
    </div>
</div>