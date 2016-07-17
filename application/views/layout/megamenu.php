<!------>
<div class="mega_nav">
    <div class="container">
        <div class="menu_sec">
            <!-- start header menu -->
            <ul class="megamenu skyblue">
                <li class="active grid"><a class="color1" href="index.html">Home</a></li>
                <?php
                foreach ($category as $c) {
                    echo "<li class='grid'><a class='color2' href='#'>";
                    echo $c['category_name'];
                    echo "</a></li>";
                }
                ?>                    
                <!--<li class="grid"><a class="color2" href="#">furniture</a>
                    <div class="megapanel">

                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Sofas</h4>
                                    <ul>
                                        <li><a href="products.html">All Sofas</a></li>
                                        <li><a href="products.html">Fabric Sofas</a></li>
                                        <li><a href="products.html">Leather Sofas</a></li>
                                        <li><a href="products.html">L-shaped Sofas</a></li>
                                        <li><a href="products.html">Love Seats</a></li>									
                                        <li><a href="products.html">Wooden Sofas</a></li>
                                    </ul>	
                                </div>							
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Tables</h4>
                                    <ul>
                                        <li><a href="products.html">Coffee Tables</a></li>
                                        <li><a href="products.html">Dinning Tables</a></li>
                                        <li><a href="products.html">Study Tables</a></li>
                                        <li><a href="products.html">Wooden Tables</a></li>
                                        <li><a href="products.html">Study Tables</a></li>
                                        <li><a href="products.html">Bar & Unit Stools</a></li>
                                    </ul>	
                                </div>							
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Beds</h4>
                                    <ul>
                                        <li><a href="products.html">Single Bed</a></li>
                                        <li><a href="products.html">Poster Bed</a></li>
                                        <li><a href="products.html">Sofa Cum Bed</a></li>
                                        <li><a href="products.html">Bunk Bed</a></li>
                                        <li><a href="products.html">King Size Bed</a></li>
                                        <li><a href="products.html">Metal Bed</a></li>
                                    </ul>	
                                </div>												
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Seating</h4>
                                    <ul>
                                        <li><a href="products.html">Wing Chair</a></li>
                                        <li><a href="products.html">Accent Chair</a></li>
                                        <li><a href="products.html">Arm Chair</a></li>
                                        <li><a href="products.html">Mettal Chair</a></li>
                                        <li><a href="products.html">Folding Chair</a></li>
                                        <li><a href="products.html">Bean Bags</a></li>
                                    </ul>	
                                </div>						
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Solid Woods</h4>
                                    <ul>
                                        <li><a href="products.html">Side Tables</a></li>
                                        <li><a href="products.html">T.v Units</a></li>
                                        <li><a href="products.html">Dressing Tables</a></li>
                                        <li><a href="products.html">Wardrobes</a></li>
                                        <li><a href="products.html">Shoe Racks</a></li>
                                        <li><a href="products.html">Console Tables</a></li>
                                    </ul>	
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>
                <li><a class="color4" href="#">living</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Sofas</h4>
                                    <ul>
                                        <li><a href="products.html">All Sofas</a></li>
                                        <li><a href="products.html">Fabric Sofas</a></li>
                                        <li><a href="products.html">Leather Sofas</a></li>
                                        <li><a href="products.html">L-shaped Sofas</a></li>
                                        <li><a href="products.html">Love Seats</a></li>									
                                        <li><a href="products.html">Wooden Sofas</a></li>
                                    </ul>	
                                </div>							
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Tables</h4>
                                    <ul>
                                        <li><a href="products.html">Coffee Tables</a></li>
                                        <li><a href="products.html">Dinning Tables</a></li>
                                        <li><a href="products.html">Study Tables</a></li>
                                        <li><a href="products.html">Wooden Tables</a></li>
                                        <li><a href="products.html">Study Tables</a></li>
                                        <li><a href="products.html">Bar & Unit Stools</a></li>
                                    </ul>	
                                </div>							
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Beds</h4>
                                    <ul>
                                        <li><a href="products.html">Single Bed</a></li>
                                        <li><a href="products.html">Poster Bed</a></li>
                                        <li><a href="products.html">Sofa Cum Bed</a></li>
                                        <li><a href="products.html">Bunk Bed</a></li>
                                        <li><a href="products.html">King Size Bed</a></li>
                                        <li><a href="products.html">Metal Bed</a></li>
                                    </ul>	
                                </div>												
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Seating</h4>
                                    <ul>
                                        <li><a href="products.html">Wing Chair</a></li>
                                        <li><a href="products.html">Accent Chair</a></li>
                                        <li><a href="products.html">Arm Chair</a></li>
                                        <li><a href="products.html">Mettal Chair</a></li>
                                        <li><a href="products.html">Folding Chair</a></li>
                                        <li><a href="products.html">Bean Bags</a></li>
                                    </ul>	
                                </div>						
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Solid Woods</h4>
                                    <ul>
                                        <li><a href="products.html">Side Tables</a></li>
                                        <li><a href="products.html">T.v Units</a></li>
                                        <li><a href="products.html">Dressing Tables</a></li>
                                        <li><a href="products.html">Wardrobes</a></li>
                                        <li><a href="products.html">Shoe Racks</a></li>
                                        <li><a href="products.html">Console Tables</a></li>
                                    </ul>	
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>				
                <li><a class="color5" href="#">kitchen & dinning</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Sofas</h4>
                                    <ul>
                                        <li><a href="products.html">All Sofas</a></li>
                                        <li><a href="products.html">Fabric Sofas</a></li>
                                        <li><a href="products.html">Leather Sofas</a></li>
                                        <li><a href="products.html">L-shaped Sofas</a></li>
                                        <li><a href="products.html">Love Seats</a></li>									
                                        <li><a href="products.html">Wooden Sofas</a></li>
                                    </ul>	
                                </div>							
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Tables</h4>
                                    <ul>
                                        <li><a href="products.html">Coffee Tables</a></li>
                                        <li><a href="products.html">Dinning Tables</a></li>
                                        <li><a href="products.html">Study Tables</a></li>
                                        <li><a href="products.html">Wooden Tables</a></li>
                                        <li><a href="products.html">Study Tables</a></li>
                                        <li><a href="products.html">Bar & Unit Stools</a></li>
                                    </ul>	
                                </div>							
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Beds</h4>
                                    <ul>
                                        <li><a href="products.html">Single Bed</a></li>
                                        <li><a href="products.html">Poster Bed</a></li>
                                        <li><a href="products.html">Sofa Cum Bed</a></li>
                                        <li><a href="products.html">Bunk Bed</a></li>
                                        <li><a href="products.html">King Size Bed</a></li>
                                        <li><a href="products.html">Metal Bed</a></li>
                                    </ul>	
                                </div>												
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Seating</h4>
                                    <ul>
                                        <li><a href="products.html">Wing Chair</a></li>
                                        <li><a href="products.html">Accent Chair</a></li>
                                        <li><a href="products.html">Arm Chair</a></li>
                                        <li><a href="products.html">Mettal Chair</a></li>
                                        <li><a href="products.html">Folding Chair</a></li>
                                        <li><a href="products.html">Bean Bags</a></li>
                                    </ul>	
                                </div>						
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Solid Woods</h4>
                                    <ul>
                                        <li><a href="products.html">Side Tables</a></li>
                                        <li><a href="products.html">T.v Units</a></li>
                                        <li><a href="products.html">Dressing Tables</a></li>
                                        <li><a href="products.html">Wardrobes</a></li>
                                        <li><a href="products.html">Shoe Racks</a></li>
                                        <li><a href="products.html">Console Tables</a></li>
                                    </ul>	
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>
                <li><a class="color6" href="#">appliances</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Sofas</h4>
                                    <ul>
                                        <li><a href="products.html">All Sofas</a></li>
                                        <li><a href="products.html">Fabric Sofas</a></li>
                                        <li><a href="products.html">Leather Sofas</a></li>
                                        <li><a href="products.html">L-shaped Sofas</a></li>
                                        <li><a href="products.html">Love Seats</a></li>									
                                        <li><a href="products.html">Wooden Sofas</a></li>
                                    </ul>	
                                </div>							
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Tables</h4>
                                    <ul>
                                        <li><a href="products.html">Coffee Tables</a></li>
                                        <li><a href="products.html">Dinning Tables</a></li>
                                        <li><a href="products.html">Study Tables</a></li>
                                        <li><a href="products.html">Wooden Tables</a></li>
                                        <li><a href="products.html">Study Tables</a></li>
                                        <li><a href="products.html">Bar & Unit Stools</a></li>
                                    </ul>	
                                </div>							
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Beds</h4>
                                    <ul>
                                        <li><a href="products.html">Single Bed</a></li>
                                        <li><a href="products.html">Poster Bed</a></li>
                                        <li><a href="products.html">Sofa Cum Bed</a></li>
                                        <li><a href="products.html">Bunk Bed</a></li>
                                        <li><a href="products.html">King Size Bed</a></li>
                                        <li><a href="products.html">Metal Bed</a></li>
                                    </ul>	
                                </div>												
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Seating</h4>
                                    <ul>
                                        <li><a href="products.html">Wing Chair</a></li>
                                        <li><a href="products.html">Accent Chair</a></li>
                                        <li><a href="products.html">Arm Chair</a></li>
                                        <li><a href="products.html">Mettal Chair</a></li>
                                        <li><a href="products.html">Folding Chair</a></li>
                                        <li><a href="products.html">Bean Bags</a></li>
                                    </ul>	
                                </div>						
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Solid Woods</h4>
                                    <ul>
                                        <li><a href="products.html">Side Tables</a></li>
                                        <li><a href="products.html">T.v Units</a></li>
                                        <li><a href="products.html">Dressing Tables</a></li>
                                        <li><a href="products.html">Wardrobes</a></li>
                                        <li><a href="products.html">Shoe Racks</a></li>
                                        <li><a href="products.html">Console Tables</a></li>
                                    </ul>	
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>				

                <li><a class="color7" href="#">decor</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Sofas</h4>
                                    <ul>
                                        <li><a href="products.html">All Sofas</a></li>
                                        <li><a href="products.html">Fabric Sofas</a></li>
                                        <li><a href="products.html">Leather Sofas</a></li>
                                        <li><a href="products.html">L-shaped Sofas</a></li>
                                        <li><a href="products.html">Love Seats</a></li>									
                                        <li><a href="products.html">Wooden Sofas</a></li>
                                    </ul>	
                                </div>							
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Tables</h4>
                                    <ul>
                                        <li><a href="products.html">Coffee Tables</a></li>
                                        <li><a href="products.html">Dinning Tables</a></li>
                                        <li><a href="products.html">Study Tables</a></li>
                                        <li><a href="products.html">Wooden Tables</a></li>
                                        <li><a href="products.html">Study Tables</a></li>
                                        <li><a href="products.html">Bar & Unit Stools</a></li>
                                    </ul>	
                                </div>							
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Beds</h4>
                                    <ul>
                                        <li><a href="products.html">Single Bed</a></li>
                                        <li><a href="products.html">Poster Bed</a></li>
                                        <li><a href="products.html">Sofa Cum Bed</a></li>
                                        <li><a href="products.html">Bunk Bed</a></li>
                                        <li><a href="products.html">King Size Bed</a></li>
                                        <li><a href="products.html">Metal Bed</a></li>
                                    </ul>	
                                </div>												
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Seating</h4>
                                    <ul>
                                        <li><a href="products.html">Wing Chair</a></li>
                                        <li><a href="products.html">Accent Chair</a></li>
                                        <li><a href="products.html">Arm Chair</a></li>
                                        <li><a href="products.html">Mettal Chair</a></li>
                                        <li><a href="products.html">Folding Chair</a></li>
                                        <li><a href="products.html">Bean Bags</a></li>
                                    </ul>	
                                </div>						
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Solid Woods</h4>
                                    <ul>
                                        <li><a href="products.html">Side Tables</a></li>
                                        <li><a href="products.html">T.v Units</a></li>
                                        <li><a href="products.html">Dressing Tables</a></li>
                                        <li><a href="products.html">Wardrobes</a></li>
                                        <li><a href="products.html">Shoe Racks</a></li>
                                        <li><a href="products.html">Console Tables</a></li>
                                    </ul>	
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>				

                <li><a class="color8" href="#">kids</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Sofas</h4>
                                    <ul>
                                        <li><a href="products.html">All Sofas</a></li>
                                        <li><a href="products.html">Fabric Sofas</a></li>
                                        <li><a href="products.html">Leather Sofas</a></li>
                                        <li><a href="products.html">L-shaped Sofas</a></li>
                                        <li><a href="products.html">Love Seats</a></li>									
                                        <li><a href="products.html">Wooden Sofas</a></li>
                                    </ul>	
                                </div>							
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Tables</h4>
                                    <ul>
                                        <li><a href="products.html">Coffee Tables</a></li>
                                        <li><a href="products.html">Dinning Tables</a></li>
                                        <li><a href="products.html">Study Tables</a></li>
                                        <li><a href="products.html">Wooden Tables</a></li>
                                        <li><a href="products.html">Study Tables</a></li>
                                        <li><a href="products.html">Bar & Unit Stools</a></li>
                                    </ul>	
                                </div>							
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Beds</h4>
                                    <ul>
                                        <li><a href="products.html">Single Bed</a></li>
                                        <li><a href="products.html">Poster Bed</a></li>
                                        <li><a href="products.html">Sofa Cum Bed</a></li>
                                        <li><a href="products.html">Bunk Bed</a></li>
                                        <li><a href="products.html">King Size Bed</a></li>
                                        <li><a href="products.html">Metal Bed</a></li>
                                    </ul>	
                                </div>												
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Seating</h4>
                                    <ul>
                                        <li><a href="products.html">Wing Chair</a></li>
                                        <li><a href="products.html">Accent Chair</a></li>
                                        <li><a href="products.html">Arm Chair</a></li>
                                        <li><a href="products.html">Mettal Chair</a></li>
                                        <li><a href="products.html">Folding Chair</a></li>
                                        <li><a href="products.html">Bean Bags</a></li>
                                    </ul>	
                                </div>						
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Solid Woods</h4>
                                    <ul>
                                        <li><a href="products.html">Side Tables</a></li>
                                        <li><a href="products.html">T.v Units</a></li>
                                        <li><a href="products.html">Dressing Tables</a></li>
                                        <li><a href="products.html">Wardrobes</a></li>
                                        <li><a href="products.html">Shoe Racks</a></li>
                                        <li><a href="products.html">Console Tables</a></li>
                                    </ul>	
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>-->				
            </ul> 
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->