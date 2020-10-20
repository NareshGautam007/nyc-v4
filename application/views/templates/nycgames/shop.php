<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// var_dump($products);
// die();

?>
        <!-- /header -->
        <!--content-->
        <div class="container container-240 shop-collection">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shop</li>
            </ul>
            <div class="filter-collection-left hidden-lg hidden-md">
              <a class="btn">Filter</a>
            </div>
            <div class="row shop-colect">
			    <div class="col-md-3 col-sm-3 col-xs-12 col-left collection-sidebar" id="filter-sidebar">
                    <div class="close-sidebar-collection hidden-lg hidden-md">
                        <span>filter</span><i class="icon_close ion-close"></i>
                    </div>
                    <div class="filter filter-cate">
                        <ul class="wiget-content v2">
                            <li class="active"><a href="#">Games <span class="number">(0)</span></a></li>
                            <li class="active"><a href="#">Console <span class="number">(0)</span></a></li>
                            <li class="active"><a href="#">Accesseries <span class="number">(0)</span></a></li>
                            
                        </ul>
                    </div>
                    <div class="filter filter-group">
                        <h1 class="widget-blog-title">Product filter</h1>
                        <div class="filter-price filter-inside">
                            <h3>Price</h3>
                            <div class="filter-content">
                                <div class="price-range-holder">
                                    <input type="text" class="price-slider" value="">
                                </div>
                                <span class="min-max">
                                    Price: $25 — $258
                                </span>
                                <a href="#" class="btn-filter e-gradient">Filter</a>
                            </div>
                        </div>
                        <div class="filter-brand filter-inside">
                            <h3>Brands</h3>
                            <ul class="e-filter brand-filter">
                                <li><a href="#">Sony <span class="number">(0)</span></a></li>
                                <li class="active-filter"><a href="#">Nintendo <span class="number">(0)</span></a></li>
                                <li><a href="#">XBox <span class="number">(0)</span></a></li>
                                <!--<li><a href="#">Blackberry <span class="number">(80)</span></a></li>
                                <li><a href="#">Oppo <span class="number">(80)</span></a></li>
                                <li><a href="#">Panasonic <span class="number">(80)</span></a></li>-->
                            </ul>
                            <a href="#" class="btn-showmore">Show more +</a>
                        </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12 collection-list">
                    <div class="e-product">
                        <div class="pd-banner">
                           <a href="#" class="image-bd effect_img2"><img src="<?php echo base_url(); ?>assets/img/shplst.png" alt="" class="img-reponsive"></a> 
                        </div>
                        <div class="pd-top">
                            <h1 class="title">Shop</h1>
                            <div class="show-element"><span>Showing 1–15 of 20 results</span></div>
                        </div>
                        <div class="pd-middle">
                            <div class="view-mode view-group">
                                <a class="grid-icon col active"><img src="<?php echo base_url(); ?>assets/img/grid.png" alt=""></a>
                                <a class="grid-icon col2"><img src="<?php echo base_url(); ?>assets/img/grid2.png" alt=""></a>
                                <a class="list-icon list "><img src="<?php echo base_url(); ?>assets/img/list.png" alt=""></a>
                            </div>
                            <div class="pd-sort">
                                <div class="filter-sort">
                                    <div class="dropdown">
                                      <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="dropdown-label">Default sorting</span>
                                      </button>
                                      <ul class="dropdown-menu">
                                          <li><a href="manual">Featured</a></li>   
                                          <li><a href="best-selling">Best Selling</a></li>
                                          <li><a href="title-ascending">Alphabetically, A-Z</a></li>
                                            <li><a href="title-descending">Alphabetically, A-Z</a></li>
                                          <li><a href="price-descending">Price, high to low</a></li>
                                          <li><a href="price-ascending">Price, low to high</a></li>
                                          <li><a href="created-ascending">Date, old to new</a></li>
                                          <li><a href="created-descending">Date, new to old</a></li>
                                      </ul>
                                    </div>
                                </div>
                                <div class="filter-show">
                                    <div class="dropdown">
                                          <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                              Show
                                                <span class="dropdown-label">12</span>
                                          </button>
                                          <ul class="dropdown-menu">
                                              <li><a href="#">12</a></li>   
                                              <li><a href="#">24</a></li>
                                              <li><a href="#">36</a></li>
                                                <li><a href="#">48</a></li>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="product-collection-grid product-grid product-list product-grid-v2">-->
						<div class="product-collection-grid product-grid">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="pin_product.php"><img src="<?php echo base_url(); ?>assets/images/products/Sony-PS4-Camera1.jpg" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group"></div>
                                            <div class="element-list element-list-left">
                                                <ul class="desc-list">
                                                   <li>Connects directly to Bluetooth</li> 
                                                   <li>Battery Indicator light</li> 
                                                   <li>DPI Selection:2600/2000/1600/1200/800</li> 
                                                   <li>Computers running Windows</li> 
                                                </ul>
                                            </div>
                                            <div class="element-list element-list-middle">
                                                <div class="product-rating bd-rating">
                                                    <span class="star star-5"></span>
                                                    <span class="star star-4"></span>
                                                    <span class="star star-3"></span>
                                                    <span class="star star-2"></span>
                                                    <span class="star star-1"></span>
                                                    <div class="number-rating">( 896 reviews )</div>
                                                </div>
                                                
                                                <h3 class="product-title"><a href="pin_product.php">Sony PS4 Camera</a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price"><span>AED 220</span></div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>    
                                                <div class="product-bottom-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>          
                                            <div class="product-button-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="pin_product.php"><img src="<?php echo base_url(); ?>assets/images/products/Nintendo-Switch-Left-and-Right-Joy-Cons-Neon-Red-and-Neon-Blue1.jpg" alt="" class="img-reponsive"></a>
                                            <div class="ribbon-price red"><span>- 30% </span></div>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group"></div>
                                            <div class="element-list element-list-left">
                                                <ul class="desc-list">
                                                   <li>Connects directly to Bluetooth</li> 
                                                   <li>Battery Indicator light</li> 
                                                   <li>DPI Selection:2600/2000/1600/1200/800</li> 
                                                   <li>Computers running Windows</li> 
                                                </ul>
                                            </div>
                                            <div class="element-list element-list-middle">
                                                <div class="product-rating bd-rating">
                                                    <span class="star star-5"></span>
                                                    <span class="star star-4"></span>
                                                    <span class="star star-3"></span>
                                                    <span class="star star-2"></span>
                                                    <span class="star star-1"></span>
                                                    <div class="number-rating">( 896 reviews )</div>
                                                </div>
                                               
                                                <h3 class="product-title"><a href="pin_product.php">Nintendo Switch Left and Right Joy-Cons - Neon Red and Neon Blue</a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price">
                                                        <span class="red">AED 290</span>
                                                        <span class="old">AED 300</span>
                                                    </div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>    
                                                <div class="product-bottom-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>     
                                            <div class="product-button-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="pin_product.php"><img src="<?php echo base_url(); ?>assets/images/products/Nintendo-Joy-Con-Neon-PurpleNeon-Orange-Nintendo-Switch1.jpg" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group"></div>
                                            <div class="element-list element-list-left">
                                                <ul class="desc-list">
                                                   <li>Connects directly to Bluetooth</li> 
                                                   <li>Battery Indicator light</li> 
                                                   <li>DPI Selection:2600/2000/1600/1200/800</li> 
                                                   <li>Computers running Windows</li> 
                                                </ul>
                                            </div>
                                            <div class="element-list element-list-middle">
                                                <div class="product-rating bd-rating">
                                                    <span class="star star-5"></span>
                                                    <span class="star star-4"></span>
                                                    <span class="star star-3"></span>
                                                    <span class="star star-2"></span>
                                                    <span class="star star-1"></span>
                                                    <div class="number-rating">( 896 reviews )</div>
                                                </div>
                                                
                                                <h3 class="product-title"><a href="pin_product.php">Nintendo Joy-Con Neon Purple/Neon Orange (Nintendo Switch)</a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price"><span>AED 290</span></div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>    
                                                <div class="product-bottom-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>          
                                            <div class="product-button-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="pin_product.php"><img src="<?php echo base_url(); ?>assets/images/products/PlayStation-VR-Marvel-Iron-Man-VR-PS41.jpg" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group">
                                            </div>
                                            <div class="element-list element-list-left">
                                                <ul class="desc-list">
                                                   <li>Connects directly to Bluetooth</li> 
                                                   <li>Battery Indicator light</li> 
                                                   <li>DPI Selection:2600/2000/1600/1200/800</li> 
                                                   <li>Computers running Windows</li> 
                                                </ul>
                                            </div>
                                            <div class="element-list element-list-middle">
                                                <div class="product-rating bd-rating">
                                                    <span class="star star-5"></span>
                                                    <span class="star star-4"></span>
                                                    <span class="star star-3"></span>
                                                    <span class="star star-2"></span>
                                                    <span class="star star-1"></span>
                                                    <div class="number-rating">( 896 reviews )</div>
                                                </div>
                                               
                                                <h3 class="product-title"><a href="pin_product.php">PlayStation VR Marvel's Iron Man VR (PS4) </a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price"><span>AED 1450</span></div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>    
                                                <div class="product-bottom-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>         
                                            <div class="product-button-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="pin_product.php"><img src="<?php echo base_url(); ?>assets/images/products/Sony-PS4-Dualshock-4-Controller-Black1.jpg" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group">
                                                <a href="#" class="circle blue"></a>
                                                <a href="#" class="circle red"></a>
                                            </div>
                                            <div class="element-list element-list-left">
                                                <ul class="desc-list">
                                                   <li>Connects directly to Bluetooth</li> 
                                                   <li>Battery Indicator light</li> 
                                                   <li>DPI Selection:2600/2000/1600/1200/800</li> 
                                                   <li>Computers running Windows</li> 
                                                </ul>
                                            </div>
                                            <div class="element-list element-list-middle">
                                                <div class="product-rating bd-rating">
                                                    <span class="star star-5"></span>
                                                    <span class="star star-4"></span>
                                                    <span class="star star-3"></span>
                                                    <span class="star star-2"></span>
                                                    <span class="star star-1"></span>
                                                    <div class="number-rating">( 896 reviews )</div>
                                                </div>
                                                
                                                <h3 class="product-title"><a href="pin_product.php">Sony PS4 Dualshock 4 Controller, Black </a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price"><span>AED 185</span></div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>    
                                                <div class="product-bottom-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>         
                                            <div class="product-button-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="pin_product.php"><img src="<?php echo base_url(); ?>assets/images/products/Sony-PS4-glasses1.jpg" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group">
                                            </div>
                                            <div class="element-list element-list-left">
                                                <ul class="desc-list">
                                                   <li>Connects directly to Bluetooth</li> 
                                                   <li>Battery Indicator light</li> 
                                                   <li>DPI Selection:2600/2000/1600/1200/800</li> 
                                                   <li>Computers running Windows</li> 
                                                </ul>
                                            </div>
                                            <div class="element-list element-list-middle">
                                                <div class="product-rating bd-rating">
                                                    <span class="star star-5"></span>
                                                    <span class="star star-4"></span>
                                                    <span class="star star-3"></span>
                                                    <span class="star star-2"></span>
                                                    <span class="star star-1"></span>
                                                    <div class="number-rating">( 896 reviews )</div>
                                                </div>
                                               
                                                <h3 class="product-title"><a href="pin_product.php">Sony PS4 glasses</a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price"><span>AED 150</span></div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>    
                                                <div class="product-bottom-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>         
                                            <div class="product-button-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="pin_product.php"><img src="<?php echo base_url(); ?>assets/images/products/Ghost-of-Tsushima-Collector-Edition1.jpg" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group">
                                            </div>
                                            <div class="element-list element-list-left">
                                                <ul class="desc-list">
                                                   <li>Connects directly to Bluetooth</li> 
                                                   <li>Battery Indicator light</li> 
                                                   <li>DPI Selection:2600/2000/1600/1200/800</li> 
                                                   <li>Computers running Windows</li> 
                                                </ul>
                                            </div>
                                            <div class="element-list element-list-middle">
                                                <div class="product-rating bd-rating">
                                                    <span class="star star-5"></span>
                                                    <span class="star star-4"></span>
                                                    <span class="star star-3"></span>
                                                    <span class="star star-2"></span>
                                                    <span class="star star-1"></span>
                                                    <div class="number-rating">( 896 reviews )</div>
                                                </div>
                                                
                                                <h3 class="product-title"><a href="pin_product.php">Ghost of Tsushima Collector's Edition</a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price"><span>AED 1150</span></div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>    
                                                <div class="product-bottom-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>         
                                            <div class="product-button-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="pin_product.php"><img src="<?php echo base_url(); ?>assets/images/products/Nintendo-Switch-Extended-Battery-Life-with-Grey-Joy‑Con1.jpg" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group">
                                            </div>
                                            <div class="element-list element-list-left">
                                                <ul class="desc-list">
                                                   <li>Connects directly to Bluetooth</li> 
                                                   <li>Battery Indicator light</li> 
                                                   <li>DPI Selection:2600/2000/1600/1200/800</li> 
                                                   <li>Computers running Windows</li> 
                                                </ul>
                                            </div>
                                            <div class="element-list element-list-middle">
                                                <div class="product-rating bd-rating">
                                                    <span class="star star-5"></span>
                                                    <span class="star star-4"></span>
                                                    <span class="star star-3"></span>
                                                    <span class="star star-2"></span>
                                                    <span class="star star-1"></span>
                                                    <div class="number-rating">( 896 reviews )</div>
                                                </div>
                                                
                                                <h3 class="product-title"><a href="pin_product.php">Nintendo Switch Extended Battery Life with Grey Joy‑Con </a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price"><span>AED 1235</span></div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>    
                                                <div class="product-bottom-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>         
                                            <div class="product-button-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="pin_product.php"><img src="<?php echo base_url(); ?>assets/images/products/Sony-PlayStation-4-Pro-1TB-Console-White1.jpg" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group">
                                            </div>
                                            <div class="element-list element-list-left">
                                                <ul class="desc-list">
                                                   <li>Connects directly to Bluetooth</li> 
                                                   <li>Battery Indicator light</li> 
                                                   <li>DPI Selection:2600/2000/1600/1200/800</li> 
                                                   <li>Computers running Windows</li> 
                                                </ul>
                                            </div>
                                            <div class="element-list element-list-middle">
                                                <div class="product-rating bd-rating">
                                                    <span class="star star-5"></span>
                                                    <span class="star star-4"></span>
                                                    <span class="star star-3"></span>
                                                    <span class="star star-2"></span>
                                                    <span class="star star-1"></span>
                                                    <div class="number-rating">( 896 reviews )</div>
                                                </div>
                                                
                                                <h3 class="product-title"><a href="pin_product.php">Sony PlayStation 4 Pro 1TB Console (White) </a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price"><span>AED 1380</span></div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>    
                                                <div class="product-bottom-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>         
                                            <div class="product-button-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="pin_product.php"><img src="<?php echo base_url(); ?>assets/images/products/Sony-PlayStation-4-1TB-Console-Grey-Days-of-Play-Limited-Edition1.jpg" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group">
                                                <a href="#" class="circle black"></a>
                                                <a href="#" class="circle red"></a>
                                                <a href="#" class="circle gray"></a>
                                            </div>
                                            <div class="element-list element-list-left">
                                                <ul class="desc-list">
                                                   <li>Connects directly to Bluetooth</li> 
                                                   <li>Battery Indicator light</li> 
                                                   <li>DPI Selection:2600/2000/1600/1200/800</li> 
                                                   <li>Computers running Windows</li> 
                                                </ul>
                                            </div>
                                            <div class="element-list element-list-middle">
                                                <div class="product-rating bd-rating">
                                                    <span class="star star-5"></span>
                                                    <span class="star star-4"></span>
                                                    <span class="star star-3"></span>
                                                    <span class="star star-2"></span>
                                                    <span class="star star-1"></span>
                                                    <div class="number-rating">( 896 reviews )</div>
                                                </div>
                                                
                                                <h3 class="product-title"><a href="pin_product.php">Sony PlayStation 4 1TB Console (Grey) - Days of Play Limited Edition</a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price"><span>AED 1190</span></div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>    
                                                <div class="product-bottom-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>         
                                            <div class="product-button-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="pin_product.php"><img src="<?php echo base_url(); ?>assets/images/products/Sony-PlayStation-4-1TB-Slim-1-Controller-Black1.jpg" alt="" class="img-reponsive"></a>
                                            <div class="ribbon-price red"><span>- 30% </span></div>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group">
                                            </div>
                                            <div class="element-list element-list-left">
                                                <ul class="desc-list">
                                                   <li>Connects directly to Bluetooth</li> 
                                                   <li>Battery Indicator light</li> 
                                                   <li>DPI Selection:2600/2000/1600/1200/800</li> 
                                                   <li>Computers running Windows</li> 
                                                </ul>
                                            </div>
                                            <div class="element-list element-list-middle">
                                                <div class="product-rating bd-rating">
                                                    <span class="star star-5"></span>
                                                    <span class="star star-4"></span>
                                                    <span class="star star-3"></span>
                                                    <span class="star star-2"></span>
                                                    <span class="star star-1"></span>
                                                    <div class="number-rating">( 896 reviews )</div>
                                                </div>
                                                
                                                <h3 class="product-title"><a href="pin_product.php">Sony PlayStation 4 1TB Slim , 1 Controller, Black</a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price">
                                                        <span class="red">AED 1075</span>
                                                        <span class="old">AED 1095</span>
                                                    </div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>    
                                                <div class="product-bottom-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>         
                                            <div class="product-button-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="pin_product.php"><img src="<?php echo base_url(); ?>assets/images/products/Sony-PlayStation-4-500GB-Console-Black1.jpg" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group">
                                            </div>
                                            <div class="element-list element-list-left">
                                                <ul class="desc-list">
                                                   <li>Connects directly to Bluetooth</li> 
                                                   <li>Battery Indicator light</li> 
                                                   <li>DPI Selection:2600/2000/1600/1200/800</li> 
                                                   <li>Computers running Windows</li> 
                                                </ul>
                                            </div>
                                            <div class="element-list element-list-middle">
                                                <div class="product-rating bd-rating">
                                                    <span class="star star-5"></span>
                                                    <span class="star star-4"></span>
                                                    <span class="star star-3"></span>
                                                    <span class="star star-2"></span>
                                                    <span class="star star-1"></span>
                                                    <div class="number-rating">( 896 reviews )</div>
                                                </div>
                                               
                                                <h3 class="product-title"><a href="pin_product.php">Sony PlayStation 4 500GB Console (Black)</a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price"><span>AED 970</span></div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>    
                                                <div class="product-bottom-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>         
                                            <div class="product-button-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
                            </div>
                        </div>
                        <div class="pd-middle space-v1">
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                            </ul>
                            <div class="pd-sort">
                                <div class="filter-sort">
                                    <div class="dropdown">
                                      <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="dropdown-label">Default sorting</span>
                                      </button>
                                      <ul class="dropdown-menu">
                                          <li><a href="manual">Featured</a></li>   
                                          <li><a href="best-selling">Best Selling</a></li>
                                          <li><a href="title-ascending">Alphabetically, A-Z</a></li>
                                            <li><a href="title-descending">Alphabetically, A-Z</a></li>
                                          <li><a href="price-descending">Price, high to low</a></li>
                                          <li><a href="price-ascending">Price, low to high</a></li>
                                          <li><a href="created-ascending">Date, old to new</a></li>
                                          <li><a href="created-descending">Date, new to old</a></li>
                                      </ul>
                                    </div>
                                </div>
                                <div class="filter-show">
                                    <div class="dropdown">
                                          <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                              Show
                                                <span class="dropdown-label">12</span>
                                          </button>
                                          <ul class="dropdown-menu">
                                              <li><a href="#">12</a></li>   
                                              <li><a href="#">24</a></li>
                                              <li><a href="#">36</a></li>
                                                <li><a href="#">48</a></li>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- / end content -->

       