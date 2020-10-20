
        <!-- /header -->
        <!--content-->
        <div class="container container-240">
             <div class="single-product-detail product-bundle product-aff">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>

                    <!-- <li class="active">Console</li>
                     -->
                    <li class="active"><?php echo $product['title'];?></li>
                </ul>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        
                        <div class="flex product-img-slide">
                            <div class="product-images">
                                <div class="main-img js-product-slider">


                                <?php


                                if ($product['folder'] != null) {
                                    $dir = "attachments/shop_images/" . $product['folder'] . '/';
                                    ?>
                                        <?php
                                        if (is_dir($dir)) {
                                            if ($dh = opendir($dir)) {
                                                $i = 1;
                                                while (($file = readdir($dh)) !== false) {
                                                    if (is_file($dir . $file)) {
                                                        ?>
                                        <a href="#" class="hover-images effect">
                                        <img src="<?php echo  base_url($dir . $file) ?>" alt="<?= str_replace('"', "'", $product['title']) ?>" class="img-reponsive">
                                    </a>


                                                        <?php
                                                        $i++;
                                                    }
                                                }
                                                closedir($dh);
                                            }
                                        }
                                        ?>
                                    </div>
                                    <?php
                                }
                                ?>
                                
                                </div>
                            </div>


                            <div class="multiple-img-list-ver2 js-click-product">

                                <?php 
                                  if ($product['folder'] != null) {
                                    $dir = "attachments/shop_images/" . $product['folder'] . '/';
                                    ?>
                                        <?php
                                        if (is_dir($dir)) {
                                            if ($dh = opendir($dir)) {
                                                $i = 1;
                                                while (($file = readdir($dh)) !== false) {
                                                    if (is_file($dir . $file)) {
                                                        ?>
                                        


                                <div class="product-col">


                                    <div class="img active">
                                        <img src="<?php echo  base_url($dir . $file) ?>" alt="<?= str_replace('"', "'", $product['title']) ?>" class="img-reponsive">
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
                                    </div>
                                    <?php
                                }
                                ?>
                                   
                                
                            </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="single-flex">
                            <div class="single-product-info product-info product-grid-v2 s-50">
                                <!--<p class="product-cate">Audio Speakers</p>-->
                                <div class="product-rating">
                                    <span class="star star-5"></span>
                                    <span class="star star-4"></span>
                                    <span class="star star-3"></span>
                                    <span class="star star-2"></span>
                                    <span class="star star-1"></span>
                                    <div class="number-rating">( 896 reviews )</div>
                                </div>
                                <h3 class="product-title"><a href="#">
                                    <?php  echo $product['title'];?></a></h3>
                                <div class="product-price">
                                    <span>AED <?php echo $product['price']; ?></span>
                                </div>
                                <div class="availability">
                                    <p class="product-inventory"> <label>Availability : </label><span> In stock</span></p>
                                </div>
                                <div class="product-brand">
                                    <p>Brand :</p>
                                    <h3><?php echo $product['categorie_name'];?></h3>
                                    <!--<img src="img/single/sony_brand.png" alt="">-->
                                </div>
                                
                                <!--<div class="product-sku">-->
                                <!--    <label>SKU :</label><span> 8900105789430</span>-->
                                <!--</div>-->
                                
                                <div class="short-desc">
                                    <p class="product-desc">
                                    <?php 

                                    echo $product['description'];

                                    
                                    ?>
                                    </p>
                                        
                                    
                                </div>

                                <div class="single-product-button-group">
                                   
                                    <div class="e-btn cart-qtt btn-gradient">

                                       <a href="javascript:void(0);" data-goto="<?= LANG_URL . '/shopping-cart' ?>" class="add-to-cart btn-add" data-id="<?= $product['id'] ?>"> <span class="icon-bg icon-cart v2"></span></a>

                                    </div>


                                    <div class="e-btn cart-qtt btn-gradient">

                                       <a href="javascript:void(0);" data-goto="<?= LANG_URL . '/home/WishList' ?>" class="add-to-cart btn-add" data-id="<?= $product['id'] ?>"><span class="icon-bg icon-wishlist"></span>
                                           
                                    </div>

                                    
                                    <div class="e-btn cart-qtt btn-gradient">
                                       
                                       <a href="javascript:void(0);" data-goto="<?= LANG_URL . '/checkout' ?>" class="add-to-cart btn-add" data-id="<?= $product['id'] ?>">Buy Now </a>

                                    </div>
                                    
                        
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
                </div>
                </div>
                
                
                
<section class="rvwsec">
    <div class="container container-240">
        <div class="row algn">
        
        <div class="col-md-12">
            <div class="inrhdng pdb355">
                <h2>Rating &amp; Review <span>(0)</span></h2>
            </div>
        </div>
        </div>
        
        <div class="bdrbtmr">


<form action="<?php echo base_url();?>home/review" method="post">
        
        <div class="row">
        
        <div class="col-md-12">
             
            <div class="rtng">
            <p class="rtngtxt1">Rating</p>
                
<div class="star-rating">
  <input type="radio" id="5-stars" name="rating" value="5">
  <label for="5-stars" class="star">★</label>
  <input type="radio" id="4-stars" name="rating" value="4">
  <label for="4-stars" class="star">★</label>
  <input type="radio" id="3-stars" name="rating" value="3">
  <label for="3-stars" class="star">★</label>
  <input type="radio" id="2-stars" name="rating" value="2">
  <label for="2-stars" class="star">★</label>
  <input type="radio" class="star" id="1-star" name="rating" value="1">
  <label for="1-star" class="star">★</label>
</div>
<p class="rtngtxt2">4.0 out of 5 stars</p>
            </div>
        </div>
    <div class="col-md-12 pdm">

<input type="hidden" name="product_id" value="<?php echo $product['id']; ?>" class="dtlsubtn">
    <div class="form-group">
      <textarea class="form-control dtlmsgr" id="comment" name="review" placeholder="Add your reviews"></textarea>
    </div>
    <input type="submit" name="submit" class="btn btn-submit btn-gradient rvwbtn">
    </div>
    </div>
    </form>
    
    </div>
        
        
        
        <div class="allrvws">
            <div class="row">
        
        <div class="col-md-12">
            <div class="inrhdngsml pdb15">
                <h2>Reviews</h2>
            </div>
        </div>
            
        </div>
        </div>
        

<?php 
$SQL="SELECT  users_public.name as name, rating.review as review, rating.rating as rating FROM rating INNER JOIN users_public ON
rating.user_id=users_public.id Where product_id={$product['id']}";

$query = $this->db->query($SQL);

$review_result = $query->result_array();

// var_dump($review_result);
// die();

foreach($review_result as $rel_result):

?>
        <div class="rvwshw">
            <div class="row algn">

            <div class="col-md-3 pdrgt">
            <div class="rvwlft">
           
            <img src="<?php echo base_url();?>assets/images/user.png" alt=""><p><?php echo $rel_result['name'];?></p>

            <div class="star-ratings">
            
            <input type="radio" id="5-stars1" name="rating1" value="5" />
            <label for="5-stars1" class="star">&#9733;</label>
            <input type="radio" id="5-stars1" name="rating1" value="5" />
            <label for="5-stars1" class="star">&#9733;</label>
            <input type="radio" id="5-stars1" name="rating1" value="5" />
            <label for="5-stars1" class="star">&#9733;</label>
            <input type="radio" id="5-stars1" name="rating1" value="5" />
            <label for="5-stars1" class="star">&#9733;</label>
            </div>
            </div>
            </div>

                <div class="col-md-9 pdlft">
                    <div class="rvwrgt">
                        <p>
                        <?php echo $rel_result['review'];?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

<?php endforeach;?>
<div class="row">
            <div class="col-md-12">
                <div class="lodbtn1">
        <a href="#" id="loadMore">Read More</a>
        </div>
            </div>
        </div>
        
    </div>
    
    </section>
            <div class="bestseller container">
                <div class="ecome-heading style5v3 spc5v3">
                    <h1>Related products</h1>

               <!--      <a href="#" class="btn-show">Shop more<i class="ion-ios-arrow-forward"></i></a>
                -->
                </div>

                <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate">

                    <?php 

                    if(!empty($sameCagegoryProducts))
                        foreach ($sameCagegoryProducts as $sameproduct) 
                            { ?>
                            

                    <div class="product-item">
                        <div class="pd-bd product-inner">
                            <div class="product-img">
                                <a href="<?= LANG_URL . '/' . $sameproduct['url'] ?>"><img src="<?= base_url('attachments/shop_images/' . $sameproduct['image']) ?>" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <div class="color-group">
                                </div>
                                <div class="element-list element-list-left">
                                </div>
                                <div class="element-list element-list-middle">
                                   <!-- <p class="product-cate">Audio Speakers</p>-->
                                    <h3 class="product-title"><a href="<?= LANG_URL . '/' . $sameproduct['url'] ?>"><?php echo $sameproduct['title']; ?></a></h3>
                                    <div class="product-bottom">
                                        <div class="product-price"><span>AED <?php echo $sameproduct['price']; ?></span></div>
                                        <a href="#" class="btn-icon btn-view">
                                            <span class="icon-bg icon-view"></span>
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

                        
                        <?php }  ?>



                    
                </div>
            </div>
        
        
        
        <!-- / end content -->
       