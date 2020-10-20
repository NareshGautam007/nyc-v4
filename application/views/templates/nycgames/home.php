<div class="slide-fullw mrgbt0">
            <div class="js-slider-home2">

                <?php
                $i=0;
                foreach($sliderProducts as $slider){


                    ?>
                <div class="e-slide-img">
                    <img src="<?= base_url('attachments/shop_images/' . $slider['image']) ?>" alt="">
                    <div class="slide-content v4 box-center">
                        <div class="container container-240">
                        </div>
                    </div>
                </div>
                <?php $i++; } ?>
            </div>
            </div>
        </div>
       
        
         <div class="header-mid">
                <div class="header-cate e-gradient hidden-xs hidden-sm mrgbt50">
               <ul>
                   <li>
                        <a href="<?php echo base_url();?>home/category_list/31"><img class="tprs" src="<?php echo base_url()?>assets/assets/img/icon/nintendo-icon.png" alt="">Nintendo</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>home/category_list/30"><img class="tprs" src="<?php echo base_url()?>assets/assets/img/icon/playstation.png" alt="">Play station<span class="h-ribbon h-pos v2 e-red">Hot</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>home/category_list/32"><img class="tprs" src="<?php echo base_url()?>assets/assets/img/icon/xbox.png" alt="">XBox</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>home/category_list/30"><img class="tprs" src="<?php echo base_url()?>assets/assets/img/icon/game.png" alt="">Games & Consoles<span class="h-ribbon h-pos v2 e-skyblue">new</span></a>
                    </li>
            
                    <li>
                        <a href="<?php echo base_url();?>home/category_list/31"><img class="tprs" src="<?php echo base_url()?>assets/assets/img/icon/accessories.png" alt="">Accessories</a>
                    </li>
                    
               </ul>
           </div>
           
        <!-- End Slide -->
        <!-- Homepage banner -->
        <div class="homepage-banner spc2">
            <div class="container container-240">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="banner-img effect-img3 plus-zoom">
                            <a href="<?php  echo base_url ();?>home/category_list/30" class=""><img src="<?php echo base_url()?>assets/assets/second/first.jpg" alt="" class="img-responsive"></a>
                            <div class="txta">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="banner-img effect-img3 plus-zoom">
                            <a href="<?php  echo base_url ();?>home/category_list/32"><img src="<?php echo base_url()?>assets/assets/second/second.jpg" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="banner-img effect-img3 plus-zoom">
                            <a href="<?php  echo base_url ();?>home/category_list/31"><img src="<?php echo base_url()?>assets/assets/second/third.jpg" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Homepage banner -->
        <!-- super deal -->
        
        
        <div class="super-deal v2">
            <div class="container container-240">
                <div class="owl-carousel owl-theme owl-cate  js-oneitem2">

                    <?php 

                    if(!empty($Super_deal))

                       foreach ($Super_deal as $super)
                        { ?>


                    <div class="row">

                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="product-countd pd-bd spc2 bg product-inner">
                                <div class="product-item-countd">
                                    <div class="product-info">
                                        <h1 class="deal-title text-center">Super Deals</h1>
                                        <h3 class="product-title text-center v4"><a href="#"><?php $super['title']; ?></a></h3>
                                        <div class="product-price thin-price v3 no-bg bd">
                                            <span class="red">AED <?php echo $super['price']; ?></span>
                                            <span class="old">AED <?php echo $super['old_price'];?></span>
                                        </div>
                                        <div class="deal-progress">
                                            <div class="deal-stock">
                                                <span class="stock-sold">19% already claimed</span>
                                                <span class="stock-available">Available: <strong>22</strong></span>
                                            </div>
                                            <div class="progress">
                                                <span class="progress-bar" style="width:27.5956%"></span>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="product-wrapper">
                                <div class="flex product-img-slide">
                                    <div class="product-images v2">
                                        <div class="main-img v2 js-product-slider sprimgw">

<?php
            if ($super['folder'] != null) {
                $dir = "attachments/shop_images/" . $super['folder'] . '/';
                ?>
                    <?php
                    if (is_dir($dir)) {
                        if ($dh = opendir($dir)) {
                            $i = 1;
                            while (($file = readdir($dh)) !== false) {
                                if (is_file($dir . $file)) {
                                    ?>

                                    <a href="<?= LANG_URL . '/' . $super['url'] ?>" class="hover-images effect"><img src="<?= base_url($dir . $file) ?>" alt=""class="img-reponsive">

                                    </a>
                                        
                                    <?php
                                    $i++;
                                }
                            }
                            closedir($dh);
                        }
                    }
                    ?>
                <?php
            }
            ?>

                                        </div>
                                    </div>
                                    <div class="multiple-img-list-ver2 v2 js-click-product">


                                         <?php
            if ($super['folder'] != null) {
                $dir = "attachments/shop_images/" . $super['folder'] . '/';
                ?>
                    <?php
                    if (is_dir($dir)) {
                        if ($dh = opendir($dir)) {
                            $i = 1;
                            while (($file = readdir($dh)) !== false) {
                                if (is_file($dir . $file)) {
                                    ?>

                                        <div class="product-col v2">
                                            <div class="img active">
                                                <img src="<?= base_url($dir . $file) ?>" alt="photo" class="img-reponsive">
                                            </div>
                                        </div>


                                        
                                    <?php
                                    $i++;
                                }
                            }
                            closedir($dh);
                        }
                    }
                    ?>
                <?php
            }
            ?>


                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                           
                       <?php } ?>

                </div>
            </div>
        </div>
        
        
        <!-- End super deal -->
        <!-- feature product -->
        <div class="feature-product spc2">
            <div class="container container-240">
                <div class="ecome-heading style2">
                    <h1>Featured Products</h1>
                </div>
                
                <p class="ecome-info spc2">Featured Products </p>
                
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <ul class="tab-link">

                            <?php
                            $i=0;
                            foreach($all_categories as $category){
                                ?>
                                
                            <li>
                                <a data-toggle="tab" href="#<?php echo $category['id']; ?>">
                                    <div class="tab-link-info flex align-center">
                                        <img src="<?php echo base_url()?>attachments/<?php echo $category['image']; ?>" alt="">
                                        <span><?php echo $category['name'];?></span>
                                    </div>
                                </a>
                            </li>

                           <?php  } ?>
                           

                           </ul>
                    </div>

                    <div class="col-md-9 col-sm-8 col-xs-12">

                        <div class="tab-content">

                            <div id="31" class="tab-pane fade in ">
                                <div class="row">
                                    <?php 
                                    

                                    $i=0;
                                    foreach($Game as $Game_product)
                                    {
                                        ?>
                                        
                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="<?= LANG_URL . '/' . $Game_product['url'] ?>">
                                                <img src="<?= base_url('attachments/shop_images/' . $Game_product['image']) ?>" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        
                                                    <?= character_limiter(strip_tags($Game_product['description']), 50);?>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>

                                                        <!-- <div class="number-rating">( 896 reviews )</div>
                                                     -->
                                                    </div>
                                                    
                                                    <h3 class="product-title"><a href="<?= LANG_URL . '/' . $Game_product['url'] ?>">
                                                    <?= character_limiter($Game_product['title'], 50);?></a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>AED <?php echo $Game_product['price']; ?></span>
                                                         <span class="old">AED <?php echo $Game_product['old_price']; ?></span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    
                                                    
                                        <div class="product-bottom-group">
                                            <a href="#" class="btn-icon">
                                                <span class="icon-bg icon-cart"></span>
                                            </a>
                                            
                        <a href="javascript:void(0);" class="add-wishlist" data-id="<?= $Game_product['id'] ?>">
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


                        <a href="javascript:void(0);" class="add-wishlist" data-id="<?= $Game_product['id'] ?>">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>
                                            

                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <?php $i++; }

                                    ?>
                       
                      
                                 </div>
                            </div>
        
        <div id="30" class="tab-pane fade in active">
                                <div class="row">
                                    <?php 
                                    

                                    $i=0;
                                    foreach($Gaming_accessories as $accessories)
                                    {
                                        ?>
                                        
                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="<?= LANG_URL . '/' . $accessories['url'] ?>">
                                                <img src="<?= base_url('attachments/shop_images/' . $accessories['image']) ?>" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        
                                                    <?= character_limiter(strip_tags($accessories['description']), 50);?>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>

                                                        <!-- <div class="number-rating">( 896 reviews )</div>
                                                     -->
                                                    </div>
                                                    
                                                    <h3 class="product-title"><a href="<?= LANG_URL . '/' . $accessories['url'] ?>">
                                                    <?= character_limiter($accessories['title'], 50);?></a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>AED <?php echo $accessories['price']; ?></span>
                                                         <span class="old">AED <?php echo $accessories['old_price']; ?></span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>

<!--                                                         <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
 -->



                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                   
                                                   <!--  <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
 -->
                        <a href="javascript:void(0);" class="add-wishlist" data-id="<?= $accessories['id'] ?>">
                                                <span class="icon-bg icon-wishlist"></span>
                                            </a>


                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <?php $i++; }

                                    ?>
                       
                      
                                 </div>
                            </div>
                            
                            <div id="32" class="tab-pane fade in ">
                                <div class="row">
                                    <?php 
                                    $i=0;
                                    foreach($Feature_console as $Consoles)
                                    {
                                        ?>
                                        
                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="<?= LANG_URL . '/' . $Consoles['url'] ?>">
                                                <img src="<?= base_url('attachments/shop_images/' . $Consoles['image']) ?>" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        
                                                    <?= character_limiter(strip_tags($Consoles['description']), 50);?>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>

                                                        <!-- <div class="number-rating">( 896 reviews )</div>
                                                     -->
                                                    </div>
                                                    
                                                    <h3 class="product-title"><a href="<?= LANG_URL . '/' . $Consoles['url'] ?>">
                                                    <?= character_limiter($Consoles['title'], 50);?></a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>AED <?php echo $Consoles['price']; ?></span>
                                                         <span class="old">AED <?php echo $Consoles['old_price']; ?></span></div>
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


                                    <?php $i++; }

                                    ?>
                       
                      
                                 </div>
                            </div>



                        </div>


                   </div>

               
               </div>
               </div>
             </div>
               
 <div class="feature-product spc3">
            <div class="container container-240">
                <div class="ecome-heading style2">
                    <h1>BestSeller Products</h1>
                    
                    <!--<a href="shoplist.php" class="btn-show">Shop more<i class="ion-ios-arrow-forward"></i></a>-->
                </div>
               
                <p class="ecome-info spc3">Best Sellers Products</p>
               
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <ul class="tab-link">

                           <?php
                            $i=0;
                            foreach($all_categories as $category){
                                ?>
                                
                            <li>
                                <a data-toggle="tab" href="#<?php echo substr($category['name'],0,7); ?>">
                                    <div class="tab-link-info flex align-center">
                                        <img src="<?php echo base_url()?>attachments/<?php echo $category['image']; ?>" alt="">
                                        <span><?php echo $category['name'];?></span>
                                    </div>
                                </a>
                            </li>

                           <?php $i++; } ?>
                           

                           </ul>
                        </ul>
                    </div>

                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="tab-content">

                        <div id="Gaming" class="tab-pane fade in active">
                        <div class="row">
                        <?php 
                            $i=0;
                            if(!empty($Best_Gaming_accessories))
                                foreach ($Best_Gaming_accessories as $bestgame) {

                                    // echo "<pre>";
                                    // var_dump($bestgame);
                                    // die();
                               ?>

                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="<?= LANG_URL . '/' . $bestgame['url'] ?>">
                                                <img src="<?= base_url('attachments/shop_images/' . $bestgame['image']) ?>" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        
                                                    <?= character_limiter(strip_tags($bestgame['description']), 50);?>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>

                                                        <!-- <div class="number-rating">( 896 reviews )</div>
                                                     -->
                                                    </div>
                                                    
                                                    <h3 class="product-title"><a href="<?= LANG_URL . '/' . $bestgame['url'] ?>">
                                                    <?= character_limiter($bestgame['title'], 50);?></a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>AED <?php echo $bestgame['price']; ?></span>
                                                         <span class="old">AED <?php echo $bestgame['old_price']; ?></span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                            <span class="icon-bg icon-view"></span>
                                                        </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
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
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                               <?php  $i++; }

                             ?>
                                </div>

                              </div>
                        <div id="Console" class="tab-pane fade">
                                <div class="row">

                            <?php 
                            $i=0;
                            if(!empty($Best_console))
                                foreach ($Best_console as $bestconsole) {

                               ?>

                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="<?= LANG_URL . '/' . $bestconsole['url'] ?>">
                                                <img src="<?= base_url('attachments/shop_images/' . $bestconsole['image']) ?>" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        
                                                    <?= character_limiter(strip_tags($bestconsole['description']), 50);?>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>

                                                        <!-- <div class="number-rating">( 896 reviews )</div>
                                                     -->
                                                    </div>
                                                    
                                                    <h3 class="product-title"><a href="<?= LANG_URL . '/' . $bestconsole['url'] ?>">
                                                    <?= character_limiter($bestconsole['title'], 50);?></a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>AED <?php echo $bestconsole['price']; ?></span>
                                                         <span class="old">AED <?php echo $bestconsole['old_price']; ?></span></div>
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
                                    
                               <?php  $i++; }

                             ?>
                                    
                                    
                                    
                                    
                                </div>
                            </div>

                            <div id="Game" class="tab-pane fade">
                                <div class="row">

                                    <?php 
                                    if(!empty($Best_game))

                                        foreach($Best_game as $game)
                                        {
                                        ?><div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="<?= LANG_URL . '/' . $game['url'] ?>">
                                                <img src="<?= base_url('attachments/shop_images/' . $game['image']) ?>" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        
                                                    <?= character_limiter(strip_tags($game['description']), 50);?>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>

                                                        <!-- <div class="number-rating">( 896 reviews )</div>
                                                     -->
                                                    </div>
                                                    
                                                    <h3 class="product-title"><a href="<?= LANG_URL . '/' . $game['url'] ?>">
                                                    <?= character_limiter($bestgame['title'], 50);?></a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>AED <?php echo $game['price']; ?></span>
                                                         <span class="old">AED <?php echo $game['old_price']; ?></span></div>
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

                                    
                                        
                                        <?php }

                                        ?>
                                    
                                </div>
                            </div>
                             



                        </div>
                    </div>
                </div>
            </div>
        </div>
       
                           
        <div class="our-blog bg">
            <div class="container container-240">
                <div class="ecome-heading style2">
                    <h1 class="v2">Latest Posts</h1>


                    <a href="<?php  echo base_url();?>blog" class="btn-show">View more<i class="ion-ios-arrow-forward"></i></a>

                </div>
               
                <p class="ecome-info spc2">
                    Lastest Posts..</p>

                <div class="product-tab-pd owl-carousel owl-theme js-owl-blog owl-custom-dots v2">
                  
                   <?php 
                    $i=0;
                    foreach( $lastBlogs as $post){

                        ?>

                    <div class="blog-post-item v3">
                        <div class="blog-img">
                            <a href="<?= LANG_URL . '/blog/' . $post['url'] ?>" class="hover-images">
                            <img src="<?= base_url('attachments/blog_images/' . $post['image']) ?>" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="heading-blog flex align-center">
                            <div class="blog-post-date e-gradient">
                                <!-- <span class="b-date"></span>
                             -->
                                <span class="b-month"><?= date('M d, Y', $post['time']) ?></span>
                            
                            </div>
                            <h3 class="blog-post-title"><a href="<?= LANG_URL . '/blog/' . $post['url'] ?>"><?= character_limiter($post['title'], 85) ?></a></h3>
                        </div>
                        <div class="blog-post-author">
                            <div class="author">Posted by <span class="c-black">Admin</span></div>
                            <!-- <div class="blog-post-comment"><span class="c-black"></span>2</div>
                             -->
                        </div>
                        <p class="blog-post-desc">
                        <?= character_limiter(strip_tags($post['description']), 300) ?></p>
                        
                    </div>


                   <?php $i++; } ?>

                </div>
            </div>
        </div>
        


<?php if (!isset($_SESSION['logged_user'])) { ?>

<div class="modal fade" id="modal-subscribe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog popw" role="document">
		<div class="modal-content ndsp">
			<div class="modal-header border-0 ppclc">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"></h4>
			</div>
			<div class="modal-body">
				<div class="row flex pd">
                    <div class="account-element bd-7 col-md-12 pppwt">
                        <div class="cmt-title text-center abs">
                            <h1 class="page-title v1">Login</h1>
                        </div>
                        <div class="page-content">
                            <p>Sign in to your account</p>
                            <form class="login-form ppfrm" method="POST" action="#"> 
                                  <div class="form-group">
                                    <label>Email<span class="f-red">*</span></label>
                                      <input type="text"  class="form-control bdr" name="email" value="">
                                      <label>Password <span class="f-red">*</span></label>
                                      <input type="password"  class="form-control bdr" name="pass" value="">
                                  </div>
                                  
                                  <div class="flex lr">
                                      <button type="submit" name="login" class="btn btn-submit btn-gradient ppbtn" value="<?= lang('login') ?>">
                                          Login
                                      </button>


                       
                                  </div>
                                   <div class="sclgn">
                                <h3><span>OR</span>with social accounts...</h3>
                                <ul>
                                    <li><a href="#"><img src="<?php echo base_url(); ?>assets/img/sclf.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/sclg.png" alt=""></a></li>
                                </ul>
                            </div>
                            </form>
                           <div class="bthbtn">
                            <a href="#" class="btn-lostpwd spc">Forgot your password?</a> <a href="#" class="btn-lostpwd spc ppsgn">Signup</a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
<?php } ?>