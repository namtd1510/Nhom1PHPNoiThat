<div class="content">
    <div class="container">
        <div class="slider">
            <ul class="rslides" id="slider1">
                <?php
                foreach ($slide as $s) {
                    echo "<li><img src=".$s->slide_url."></li>";
                }
                ?> 
                <!--<li><img src="<?php //echo base_url(); ?>assets/images/banner2.jpg" alt=""></li>
                <li><img src="<?php //echo base_url(); ?>assets/images/banner1.jpg" alt=""></li>
                <li><img src="<?php //echo base_url(); ?>assets/images/banner3.jpg" alt=""></li>-->
            </ul>
        </div>
    </div>
</div>