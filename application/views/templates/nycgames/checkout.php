<!-- /header -->
        <!--content-->
        <div class="main-content space1">
            <div class="container container-240">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Checkout</li>
                </ul>
        <?php
        if ($cartItems['array'] != null) {
        ?> 
                        
                
                <form name="checkout" method="post"  id="goOrder" class="co">
                    <div class="cart-box-container-ver2">
                        <div class="row">
                            
                            
                            
                            <div class="col-sm-12">
                    <h4 class="chh"><?= lang('your_order') ?></h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-products nwch">
                            <thead>
                                <tr>
                                    <th><?= lang('product') ?></th>
                                    <th><?= lang('title') ?></th>
                                    <th><?= lang('quantity') ?></th>
                                    <th><?= lang('price') ?></th>
                                    <th><?= lang('total') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cartItems['array'] as $item) { ?>
                                    <tr>
                                        
                                        <td class="relative">
                                            <input type="hidden" name="id[]" value="<?= $item['id'] ?>">
                                            <input type="hidden" name="quantity[]" value="<?= $item['num_added'] ?>">
                                            <img class="product-image" src="<?= base_url('/attachments/shop_images/' . $item['image']) ?>" alt="">
                                            <a href="<?= base_url('home/removeFromCart?delete-product=' . $item['id'] . '&back-to=checkout') ?>" class="btn btn-xs btn-danger remove-product prcb">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </a>
                                        </td>
                                        <td><a href="<?= LANG_URL . '/' . $item['url'] ?>"><?= $item['title'] ?></a></td>
                                        <td>
                                            <a class="btn prcb btn-xs btn-primary refresh-me add-to-cart <?= $item['quantity'] <= $item['num_added'] ? 'disabled' : '' ?>" data-id="<?= $item['id'] ?>" href="javascript:void(0);">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </a>
                                            <span class="quantity-num">
                                                <?= $item['num_added'] ?>
                                            </span>
                                            <a class="btn prcb btn-xs btn-danger" onclick="removeProduct(<?= $item['id'] ?>, true)" href="javascript:void(0);">
                                                <span class="glyphicon glyphicon-minus"></span>
                                            </a>
                                        </td>
                                        <td> AED <?= $item['price']; ?></td>
                                        <td> AED <?= $item['sum_price']; ?></td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="4" class="text-right"><?= lang('total') ?></td>
                                    <td>
                                        <span class="final-amount"><?= $cartItems['finalSum'] ?></span>AED
                                        <input type="hidden" class="final-amount" name="final_amount" value="<?= $cartItems['finalSum'] ?>">
                                        <input type="hidden" name="amount_currency" value="AED">
                                        <input type="hidden" name="discountAmount" value="">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                            
                        </div>
                        
                    <div class="row">
                            <div class="col-md-8">
                                <div class="co-left bd-7">
                                    <div class="cmt-title text-center abs">
                                        <h1 class="page-title v1">Billing details</h1>
                                    </div>
                                    <div class="row form-customer">
                                        <div class="form-group col-md-6">
                                            <label for="inputfname_2" class=" control-label">First Name <span class="f-red">*</span></label>
                                           
                                           <!--  <input type="text" id="inputfname_2" class="form-control form-account">
                                        -->
                            <input id="firstNameInput" class="form-control form-account" name="first_name" value="<?= @$_POST['first_name'] ?>" type="text" placeholder="<?= lang('first_name') ?>">

                                        </div>


                                        <div class="form-group col-md-6">
                                            <label for="inputlname" class=" control-label">Last Name <span class="f-red">*</span></label>
                                          

                            <input id="lastNameInput" class="form-control form-accoun" name="last_name" value="<?= @$_POST['last_name'] ?>" type="text" placeholder="<?= lang('last_name') ?>">
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="inputcompany" class=" control-label">Email</label>
                                            
 <input id="emailAddressInput" class="form-control form-account" name="email" value="<?= @$_POST['email'] ?>" type="text" placeholder="<?= lang('email_address') ?>">
                        
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputcountry1" class=" control-label">Phone <span class="f-red">*</span></label>
                                            
                                           
                                            <input id="phoneInput" class="form-control form-account" name="phone" value="<?= @$_POST['phone'] ?>" type="text" placeholder="<?= lang('phone') ?>">


                                        </div>                                    
                                        <div class="form-group col-md-12">
                                            <label for="inputstreet" class=" control-label">Street address <span class="f-red">*</span></label>
                                        <textarea id="addressInput" name="address" class="form-control" rows="3"><?= @$_POST['address'] ?></textarea>
                      
                                        </div>
                                       

                                        <div class="form-group col-md-12">
                                            <label for="inputpostcode" class=" control-label">Postcode / ZIP</label>
                                           
                                           <input id="postInput" class="form-control form-account" name="post_code" value="<?= @$_POST['post_code'] ?>" type="text" placeholder="<?= lang('post_code') ?>">
                        
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputfState" class=" control-label">City <span class="f-red">*</span></label>
                                       
                            <input id="cityInput" class="form-control form-account" name="city" value="<?= @$_POST['city'] ?>" type="text" placeholder="<?= lang('city') ?>">

                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputphone" class="control-label">Notes <span class="f-red">*</span></label>
                                       <textarea id="notesInput" class="form-control" name="notes" rows="3"><?= @$_POST['notes'] ?></textarea>

                                        </div>
                                        <div class="form-check col-md-12">
                                            <label class="form-check-label ver2">
                                                <input type="checkbox" class="form-check-input">
                                                <span>Create an account?</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End contact-form -->
                            <div class="col-md-4">
                                <div class="cart-total bd-7">
                                    <div class="cmt-title text-center abs">
                                        <h1 class="page-title v3">Your order</h1>
                                    </div>
                                   
                                    <ul class="payment">
                                        
                    <div class="payment-type-box">
                        <select class="selectpicker payment-type" data-style="btn-green" name="payment_type">
                            <?php if ($cashondelivery_visibility == 1) { ?>
                                <option value="cashOnDelivery"><?= lang('cash_on_delivery') ?> </option>
                            <?php } if (filter_var($paypal_email, FILTER_VALIDATE_EMAIL)) { ?>
                                <option value="PayPal"><?= lang('paypal') ?> </option>
                            <?php } if ($bank_account['iban'] != null) { ?>
                                <option value="Bank"><?= lang('bank_payment') ?> </option>
                            <?php } ?>
                        </select>
                        <span class="top-header text-center"><?= lang('choose_payment') ?></span>
                    </div>
                                    </ul>
                                    
                                    <div class="form-check">
                                        <label class="form-check-label ver2">
                                            <input type="checkbox" class="form-check-input">
                                            <span>I’ve read and accept the <a href="#" class="term">terms & conditions *</a></span>
                                        </label>
                                    </div>
                                    <div class="cart-total-bottom v2">
                                   
                                       <!--  <a href="#" class="btn-gradient btn-checkout btn-co-order">Place order</a>
                                    -->
                        <a href="javascript:void(0);" class="btn-gradient btn-checkout btn-co-order" onclick="<?php if($_SESSION['logged_user'])
                            echo "document.getElementById('goOrder').submit()"; else header('location:http://tmadevelopment.org/projects/nycgames/login'); ?>" class="pull-left">
                            <?= lang('custom_order') ?> 
                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> 

<?php }

 else { ?>
    <div class="alert alert-info"><?= lang('no_products_in_cart') ?></div>
    <?php
}
if ($this->session->flashdata('deleted')) {
    ?>
    <script>
        $(document).ready(function () {
            ShowNotificator('alert-info', '<?= $this->session->flashdata('deleted') ?>');
        });
    </script>
<?php } if ($codeDiscounts == 1 && isset($_POST['discountCode'])) { ?>
    <script>
        $(document).ready(function () {
            checkDiscountCode();
        });
    </script>
<?php } ?>
<script src="<?= base_url('assets/bootstrap-select-1.12.1/js/bootstrap-select.min.js') ?>"></script>
        <!-- / end content -->


