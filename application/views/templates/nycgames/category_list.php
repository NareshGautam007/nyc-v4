
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
                            
                            <?php 
                            
                            foreach($nav_categories as $nav){
                                ?>
                                
                            <li class="active"><a href="<?php echo base_url(); ?>home/category_list/<?php echo $nav['id']; ?>"><?php echo $nav['name']; ?></a></li>
                        <?php } ?>
                            
                            

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
                                    Price: AED 25 — AED 258
                                </span>
                                <a href="#" class="btn-filter e-gradient">Filter</a>
                            </div>
                        </div>
                        

                        
                    </div>

                </div>
                <div class="col-md-9 col-sm-12 col-xs-12 collection-list">
                    <div class="e-product">
                        
                         <div class="pd-banner">
                       
                        <?php 
                        $cat= $category_data[0]['category_id'];
                        
                        switch($cat){
                            
                            case "32":
                            echo "<img src='http://tmadevelopment.org/projects/nycgames/assets/assets/img/console.png' alt='' class='img-reponsive'>
                       ";
                            break;
                            
                            case "31":
                            echo "<img src='http://tmadevelopment.org/projects/nycgames/assets/assets/img/Game.png' alt='' class='img-reponsive'>
                       ";break;
                            
                            case "30":
                          echo "<img src='http://tmadevelopment.org/projects/nycgames/assets/assets/img/game_ases.png' alt='' class='img-reponsive'>
                       ";
                       break;
                       
                        }
                        
                            
                        ?>
                         </div>
                        
                        
                        
                        <div class="pd-top">
                            <h1 class="title">Shop</h1>
                            <div class="show-element"><span>Showing 1–15 of 20 results</span></div>
                        </div>
                        <div class="pd-middle">
                            <div class="view-mode view-group ">
                                <a class="grid-icon col active"><img src="<?php echo base_url(); ?>assets/img/grid.png" alt=""></a>
                                <a class="grid-icon col2"><img src="<?php echo base_url(); ?>assets/img/grid2.png" alt=""></a>
                                <a class="list-icon list"><img src="<?php echo base_url(); ?>assets/img/list.png" alt=""></a>
                            </div>
                            <div class="pd-sort">
                                
                                <!--<div class="filter-sort">-->
                                <!--    <div class="dropdown">-->
                                <!--      <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">-->
                                <!--            <span class="dropdown-label">Default sorting</span>-->
                                <!--      </button>-->
                                <!--      <ul class="dropdown-menu">-->
                                <!--          <li><a href="manual">Featured</a></li>   -->
                                <!--          <li><a href="best-selling">Best Selling</a></li>-->
                                <!--          <li><a href="title-ascending">Alphabetically, A-Z</a></li>-->
                                <!--          <li><a href="title-descending">Alphabetically, A-Z</a></li>-->
                                <!--          <li><a href="price-descending">Price, high to low</a></li>-->
                                <!--          <li><a href="price-ascending">Price, low to high</a></li>-->
                                <!--          <li><a href="created-ascending">Date, old to new</a></li>-->
                                <!--          <li><a href="created-descending">Date, new to old</a></li>-->
                                <!--      </ul>-->
                                <!--    </div>-->
                                <!--</div>-->
                                
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

                        <div class="product-collection-grid product-grid">
                            <div class="row">


                                <?php
                                if(!empty($category_data))

                                    foreach($category_data as $cat_products)
                                        { ?>


                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="<?= LANG_URL . '/' . $cat_products['url'] ?>"><img src="<?= base_url('attachments/shop_images/' . $cat_products['image']) ?>" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group"></div>
                                            <div class="element-list element-list-left">
                                                <ul class="desc-list">
                                                    
                                                  <?= character_limiter(strip_tags($cat_products['description']), 50);?>
                                                     
                                                </ul>
                                            </div>
                                            <div class="element-list element-list-middle">
                                                
<!--                                                 <div class="product-rating bd-rating">
                                                    <span class="star star-5"></span>
                                                    <span class="star star-4"></span>
                                                    <span class="star star-3"></span>
                                                    <span class="star star-2"></span>
                                                    <span class="star star-1"></span>
                                                    <div class="number-rating">( 896 reviews )</div>
                                                </div>
 --><!-- 
                                                <p class="product-cate">Computers & Accessories</p> -->

                                                <h3 class="product-title"><a href="<?= LANG_URL . '/' . $cat_products['url'] ?>"><?= character_limiter($cat_products['title'], 50);?></a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price"><span>AED<?php echo $cat_products['price']; ?></span></div>
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

                                   <?php  } ?>


<!--                                 <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="#"><img src="img/product/pd3.jpg" alt="" class="img-reponsive"></a>
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
                                                <p class="product-cate">Audio Speakers</p>
                                                <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price">
                                                        <span class="red">$1.450.00</span>
                                                        <span class="old">$1,215.00</span>
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
 -->


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


        <!-- <div class="e-category">
            <div class="container container-240">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h1 class="cate-title">Featured Products</h1>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/usb.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>

                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/macbook.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>

                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/flycam.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h1 class="cate-title">Top Rated Products</h1>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/samsung.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>

                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/headphone2.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>

                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/anker.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h1 class="cate-title">Top Selling Products</h1>
                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/headphone.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>

                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/samsung2.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>

                        <div class="cate-item">
                            <div class="product-img">
                                <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                                <div class="product-price v2"><span>$780.00</span></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
         -->
        <!-- / end content -->
    