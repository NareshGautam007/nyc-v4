

        <!--content-->
        <div class="container container-240">
            
            <div class="checkout">
                <ul class="breadcrumb v3">
                    <li><a href="#">Home</a></li>
                    <li class="active">Cart</li>
                </ul>
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="shopping-cart bd-7">
                            <div class="cmt-title text-center abs">
                                <h1 class="page-title v2">Cart</h1>
                            </div>
                            <div class="table-responsive">

                                 <?php
    if ($cartItems['array'] == null) {
        ?>
        <div class="alert alert-info"><?= lang('no_products_in_cart') ?></div>
        <?php
    } else { ?>
                                <table class="table cart-table">
                                    
                                    <tbody>
                                    <?php
                                    foreach($cartItems['array'] as $item)
                                    {

                                    ?>

                                        <tr class="item_cart">
                                            <input type="hidden" name="id[]" value="<?= $item['id'] ?>">
                                           <input type="hidden" name="quantity[]" value="<?= $item['num_added'] ?>">
                                
                                            <td class="product-name flex align-center">
                                                <a href="<?= base_url('home/removeFromCart?delete-product=' . $item['id'] . '&back-to=shopping-cart') ?>" class="btn-del"><i class="ion-ios-close-empty"></i></a>
                                                <div class="product-img">
                                                    <img src="<?= base_url('/attachments/shop_images/' . $item['image']) ?>" alt="Futurelife">
                                                </div>
                                                <div class="product-info">
                                                    <a href="<?= LANG_URL . '/' . $item['url'] ?>" title=""><?php echo $item['title'];?>  </a>
                                                </div>
                                            </td>
                                            <td class="align-center dgn"> 

                                <a class="prcb btn btn-xs btn-primary refresh-me add-to-cart <?= $item['quantity'] <= $item['num_added'] ? 'disabled' : '' ?>" data-id="<?= $item['id'] ?>" href="javascript:void(0);">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </a>
                                <span class="quantity-num">
                                    <?= $item['num_added'] ?>
                                </span>
                                <a class="btn prcb btn-xs btn-danger" onclick="removeProduct(<?= $item['id'] ?>, true)" href="javascript:void(0);">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </a>
                                            </td>
                                            
                                            
                                            <td class="total-price">
                                                <p class="price"> AED <?= $cartItems['finalSum'];?></p>
                                            </td>
                                        </tr>

                                    <?php 
                                }

                                    ?>



                                    </tbody>

                                </table>
                            </div>
                            
            
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="cart-total bd-7">
                            <div class="cmt-title text-center abs">
                                <h1 class="page-title v3">Go to Checkout</h1>
                            </div>
                            <div class="table-responsive">
                                <table class="shop_table">
                                    <tbody>
                                                                     </tbody>
                                </table>
                            </div>
                            <div class="cart-total-bottom"><!-- 
                                <a href="#" class="btn-gradient btn-checkout">Proceed to checkout</a> -->
<a class="btn-gradient btn-checkout" href="<?= LANG_URL . '/checkout' ?>">
            Proceed to checkout 
        </a>


                            </div>

                        <?php } ?>



                        </div>
                    </div>
                </div>
            </div>
        </div>
   
    
        </div>
        <!-- / end content -->
