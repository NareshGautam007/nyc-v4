<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Nyc Games || Online Gaming Store</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/assets/logo/fav.png" type="image/png">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/custome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <?php if ($cookieLaw != false) { ?>
            <script type="text/javascript">
                window.cookieconsent_options = {"message": "<?= $cookieLaw['message'] ?>", "dismiss": "<?= $cookieLaw['button_text'] ?>", "learnMore": "<?= $cookieLaw['learn_more'] ?>", "link": "<?= $cookieLaw['link'] ?>", "theme": "<?= $cookieLaw['theme'] ?>"};
            </script>
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
        <?php } ?>

        <style type="text/css">
            a.item-info {
    color: black;
}
h3.er {
    position: absolute;
    top: 164px;
    z-index: 1150;
    right: 0px;
    color: #fff;
    background-color: rgb(153 209 162 / 62%);
    padding: 8px 0px;
    font-size: 15px;
    /* left: 0; */
}

h3.success {
    position: absolute;
    top: 164px;
    z-index: 1150;
    right: 0px;
    color: #fff;
    background-color: rgb(153 209 162 / 62%);
    padding: 8px 0px;
    font-size: 15px;
    /* left: 0; */
}

        </style>        

        <script type="text/javascript">
            
            $(".alert").alert()
        </script>

</head>


<body>
    <!-- push menu-->
    <div class="pushmenu menu-home5">
        <div class="menu-push">
            <span class="close-left js-close"><i class="icon-close f-20"></i></span>
            <div class="clearfix"></div>
            <form role="search" method="get" id="searchform" class="searchform" action="/search">
                <div>
                    <label class="screen-reader-text" for="q"></label>
                    <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                    <input type="hidden" name="type" value="product">
                    <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
                </div>
            </form>
            
            
        </div>
    </div>
    <!-- end push menu-->
    <div class="wrappage">
        <header id="header" class="header-v2">
        <div class="topbar">
                <div class="container container-240">
                    <div class="row flex">
                        <div class="col-md-6 col-sm-6 col-xs-4 flex-left">
                            <div class="topbar-left">
                                <div class="element element-store hidden-xs hidden-sm">
                                    <a id="label1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?php echo base_url()?>assets/img/icon-map.png" alt="">
                                      
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="label1">
                                        <li><a href="#">EN</a></li>
                                        <li><a href="#">DE</a></li>
                                        <li><a href="#">FR</a></li>
                                    </ul>
                                </div>
                                <div class="element hidden-xs hidden-sm">
                                    <a href="#"><img src="<?php echo base_url()?>assets/img/icon-track.png" alt=""><span>Track Your Order</span></a>
                                </div>
                                <div class="element element-account hidden-md hidden-lg">
                                    <a id="label4" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    
                                      <span>My Account</span>
                                      <span class="ion-ios-arrow-down f-10 e-arrow"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="label4">
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Register</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-8 flex-right">
                            <div class="topbar-right">
                                <div class="element hidden-xs hidden-sm">
                                    <a href="#"><img src="img/icon-phone.png" alt="">
                                        <span>+971 504843272</span>
                                    
                                    </a>
                                </div>
                                
                                
                                <div class="element hidden-xs hidden-sm">
                                   <li class="email">
                                        <span>sales@nycgames.co</span>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="header-center">
                <div class="container container-240">
                    <div class="row flex">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 v-center header-logo">
                            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url()?>assets/assets/logo/logo.png" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="col-lg-7 col-md-7 v-center header-search hidden-xs hidden-sm">
                            
                            <form method="post" action="<?php echo base_url();?>home/product_search" class="searchform ajax-search" >
                              
                                <input type="hidden" name="type" value="product">
                                <input type="text" name="title" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" name="q" class="form-control" placeholder="Search for products, brands & more ...">
                            
                                <div class="search-panel">
                                    
                                    <i class="fa fa-sort-desc dpos" aria-hidden="true"></i>


                                    <select class="form-control tphop" id="exampleFormControlSelect1" name="category_id">
                                       
                                            <option value="">All</option>
                                        <?php 
                                            if(!empty($nav_categories))

                                                foreach ($nav_categories as $nav_cat) {
                                                    ?>
                                              <option value="<?php echo $nav_cat['id']; ?>"><?php echo $nav_cat['name']; ?></option>
                                              
                                                <?php }
                                                ?>

                                    </select>
                                </div>
                                <span class="input-group-btn">
                                <button class="button_search" name="submit" type="submit"><i class="ion-ios-search-strong"></i></button>
                                </span>
                            </form>
                            
                        </div>


                        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6 v-center header-sub">
                            <div class="right-panel">
                                <div class="header-sub-element row">
                               
                        <?php if (isset($_SESSION['logged_user'])) { ?>
                          <a class="hidden-xs hidden-sm" href="<?= LANG_URL . '/myaccount' ?>">

                         <img src="<?php echo base_url()?>assets/assets/img/icon-user.png" alt="">
                        <?= lang('my_acc') ?>

                                            </a>
                        <?php } else { ?>
                           
                <a href="<?= LANG_URL . '/login' ?>"> <img class="usi" src="<?php  echo base_url();?>assets/img/icon-user.png" alt=""></a>
                           <!-- <a href="<?= LANG_URL . '/login' ?>" class="my-acc-login">
                                <?= lang('login') ?>
                            </a>
                            
                            <a href="<?= LANG_URL . '/register' ?>" class="my-acc-register">
                                <?= lang('register') ?>
                            </a>-->
                        <?php } ?>

                        
                                    
                        <a href="<?= LANG_URL . '/shopping-cart' ?>" class="spsc">

                        <?= uri_string() == 'shopping-cart' || uri_string() == MY_LANGUAGE_ABBR . '/shopping-cart' ?> 
                        <img src="<?php  echo base_url();?>assets/assets/img/icon-user3.png" alt="">
                     </a> 

                    <div class="cart">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
                                <span class="badge"><?= $cartItems['array'] == 0 ? 0 : $sumOfItems ?></span>
                                <!--<i class="fa fa-shopping-basket"></i>-->
                            </a>
                            
                            <ul class="dropdown-menu dropdown-menu-right dropdown-cart" role="menu">
                                <?= $load::getCartItems($cartItems) ?>
                            </ul>
                            <a href="<?= LANG_URL . '/shopping-cart' ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="label5">
                            <img src="<?php echo base_url(); ?>assets/img/icon-user2.png" alt="">
                            </a>


                                    </div>
                                    
                                    <a href="#" class="hidden-md hidden-lg icon-pushmenu js-push-menu">
                                        <i class="fa fa-bars f-15"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="header-bottom hidden-xs hidden-sm">
                <div class="flex lr hrbgc">
                    <div class="box-header-nav">
                        <nav class="main-menu">
                            <ul class="nav navbar-nav">
                                
                                <li class="level1"><a href="<?php echo base_url(); ?>aboutus">About</a></li>
                                
                                <li class="level1 active hassub"><a href="#">Shop</a>
                                    <span class="plus js-plus-icon"></span>
                                    
                                    <div class="menu-level-1 ver2 dropdown-menu">
                                        <div class="row">
                                        <?php

                                            function loop_tree_nav($nav_categories, $is_recursion = false)
                                            {
                                                if ($is_recursion == false) {
                                                    ?>
                                                    <span>
                                                        <?php
                                                    }
                                                    foreach ($nav_categories as $nav_category) {
                                                 

                                                        $children = false;
                                                        if (isset($nav_category['children']) && !empty($nav_category['children'])) {
                                                            $children = true;
                                                        }
                                                        ?> 
                                                       
                                            <div class="cate-item col-md-4 col-sm-12">
                                                <div class="demo-img">
                                                <a href="<?php echo base_url();?>home/category_list/<?php echo $nav_category['id']; ?>">
                                                    
                                        <img src="<?php echo base_url(); ?>attachments/<?php echo $nav_category['image'];  ?>" alt="" class="img-reponsive"></a>
                                                </div>
                                                <div class="demo-text"><?php echo $nav_category['name']; ?></div>
                                            </div> 
                                                       
                                                        <?php
                                                        if ($children === true) {
                                                            loop_tree_nav($nav_category['children'], true);
                                                        }
                                                    }
                                                    if ($is_recursion == false) {
                                                        ?>
                                                    </span>
                                                    <?php
                                                }
                                            }

                                            loop_tree_nav($nav_categories);
                                            ?>

                                            
                                        </div>
                                    </div>
                                </li>
                                <li class="level1"><a href="<?php echo base_url();?>home/Bundle_offer">Bundle Offers </a></li>
                                <li class="level1">
                                    <a href="<?php echo base_url();?>home/Unboxing_videos">Unboxing Videos <span class="h-ribbon h-pos v4 e-red">new</span></a></li>
                           
                            </ul>
                        </nav>
                    </div>
                    <div class="box-header-menu">
                        <nav class="main-menu">
                            <ul class="nav navbar-nav">
                                <li class="level1"><a href="http://tmadevelopment.org/projects/nycgames-lp/">PlayStation 5</a></li>
                                <li class="level1"><a href="<?= LANG_URL . '/blog' ?>">Blogs/Latest Updates</a></li>
                                
                                
                                <li class="level1"><a href="<?php echo base_url(); ?>contacts">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        
        <?php if($this->session->flashdata('Error')); { ?>
        <h3 class="er"><?php echo $this->session->flashdata('Error'); ?></h3>
        <?php }?>

        
        
        
        
   




        
        
        
        
        
        
        
        
        