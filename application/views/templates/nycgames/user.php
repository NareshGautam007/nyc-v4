     <?php  
     // echo "<pre>";
     // var_dump($userInfo);
     // die();

     ?>

    <!-- /header -->
        <!--content-->
        <div class="container container-240">
            <div class="pd-banner v2">
               <a href="#" class="image-bd effect_img2"><img src="img/o-banner.jpg" alt="" class="img-reponsive"></a> 
            </div>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Profile</li>
            </ul>
        </div>
       <section class="prfl-sec">
           <div class="container container-240">
               <div class="row">
                   <div class="col-md-12">
                       <div class="tbs">
                            <div  class="col-sm-12">
       <!-- <h3>Left Tabs</h3>
        <hr/>-->
        <div class="col-xs-3"> <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left sideways">
              <li class="prf"><img src="img/rakeshk.jpg" alt=""><span><?php echo $userInfo['name']; ?> ..!!</span></li>
            <li class="active"><a href="#home-v" data-toggle="tab">Personal Details</a></li>
            <li><a href="#profile-v" data-toggle="tab">My Orders</a></li>
            <li><a href="#messages-v" data-toggle="tab">Address</a></li>
            <li><a href="#settings-v" data-toggle="tab">Change Password</a></li>
            <li><a href="<?= LANG_URL . '/logout' ?>" data-toggle="">Logout</a></li>
          </ul>
        </div>

        <div class="col-xs-9">
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="home-v">
                <div class="rgttb">
                    <form class="login-form" action="#">
                        <h3 class="rgtprh ujk">Personal Information</h3>
                            <div class="form-group">
                                  <input type="text" id="" class="form-control bdr pri" name="name" value="<?php echo $userInfo['name']; ?>" placeholder="Name ">
                                  
                                  <input type="text" id="" class="form-control bdr pri" name="phone" value="<?php echo $userInfo['phone']; ?>" placeholder="Phone Number">
                                  
                                  <input type="email" id="" class="form-control bdr pri" name="email" value="<?php echo $userInfo['email']; ?>" placeholder="Email ">
                                  
                                  <div class="wrapper-innere">
                                    <h4 class="heading">Gender</h4>
                                    <div class="form-group prd">
                                        <div class="radio">
                                            <label>
                                  <input type="radio" name="radio-input" checked="checked"> Male
                                  <span class="checkmark"></span>
                                  </label>
                                        </div>
                                    </div>
                                    <div class="form-group prd">
                                        <div class="radio">
                                            <label>
                                  <input type="radio" name="radio-input">Female
                                  <span class="checkmark"></span>
                                  </label>
                                        </div>
                                    </div>
                                   
                                </div>
                                 
                                  <input type="date" id="" class="form-control bdr pri" name="date" value="" placeholder="Date Of Birth ">
                                  <!-- 
                                  <input type="password" id="" class="form-control bdr pri" name="password" value="" placeholder="Password "> -->
                            </div>

                              <div class="form-group">
                                  <button type="submit" class="btn btn-submit btn-gradient prfbtn">
                                      Save Changes
                                  </button>
                              </div>
                          </form>
                </div>
            </div>
            <div class="tab-pane scrl" id="profile-v">
                <div class="rgttb">
                    <h3 class="rgtprh ujk">  My Orders</h3>
                    <table class="prtbl">
                      <thead>
                        <tr>
                          <th><?= lang('usr_order_id') ?></th>
                          <th><?= lang('usr_order_date') ?></th>
                          <th><?= lang('usr_order_address') ?></th>
                          <th><?= lang('usr_order_phone') ?></th>
                           <th><?= lang('user_order_products') ?></th>
                           
                        </tr>
                      </thead>
                      <tbody>
             <?php
                        if (!empty($orders_history)) {
                            foreach ($orders_history as $order) {
                                ?>
                                <tr>
                                    <td><?= $order['order_id'] ?></td>
                                    <td><?= date('d.m.Y', $order['date']) ?></td>
                                    <td><?= $order['address'] ?></td>
                                    <td><?= $order['phone'] ?></td>
                                    <td>    
                                        <?php
                                        $arr_products = unserialize($order['products']);
                                        foreach ($arr_products as $product) {
                                            ?>
                                            <div style="word-break: break-all;">
                                                <div class="flx">
                                                    <img src="<?= base_url('attachments/shop_images/' . $product['product_info']['image']) ?>" alt="Product" style="width:100px; margin-right:10px;" class="img-responsive">
                                                
                                                <a target="_blank" class="cla" href="<?= base_url($product['product_info']['url']) ?>">
                                                    <?= base_url($product['product_info']['url']) ?> 
                                                </a> 
                                                </div>
                                                <div style=" background-color: #f1f1f1; border-radius: 2px; padding: 2px 5px;"><b><?= lang('user_order_quantity') ?></b> <?= $product['product_quantity']; ?></div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <hr>
                                        <?php }
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="5"><?= lang('usr_no_orders') ?></td>
                            </tr>
                        <?php } ?>




            
          </tbody>
          </table>
            </div>
            </div>
            <div class="tab-pane scrl" id="messages-v">
                <div class="rgttb">
                    <form class="login-form" action="#">
                        <h3 class="rgtprh ujk">Your Address</h3>
                            <div class="form-group">
                                  <input type="text" id="" class="form-control bdr pri" name="address" value="" placeholder="Street Address">
                                  
                                  <input type="text" id="" class="form-control bdr pri" name="address1" value="" placeholder="Additional Address">
                                  
                                  <input type="text" id="" class="form-control bdr pri" name="landmark" value="" placeholder="Landmark">
                                  
                                   <input type="text" id="" class="form-control bdr pri" name="city" value="" placeholder="City">
                                  
                                   <input type="text" id="" class="form-control bdr pri" name="pincode" value="" placeholder="Pincode">
                                   
                                    <input type="text" id="" class="form-control bdr pri" name="state" value="" placeholder="State">
                                  
                            </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-submit btn-gradient prfbtn">
                                      Save Changes
                                  </button>
                              </div>
                          </form>
                </div>
            </div>
            <div class="tab-pane" id="settings-v">
                <div class="rgttb">
                    <form class="login-form" action="#">
                        <h3 class="rgtprh ujk">Change Password</h3>
                            <div class="form-group">
                                  <input type="password" id="" class="form-control bdr pri" name="c-password" value="" placeholder="Current Password">
                                  
                                  <input type="password" id="" class="form-control bdr pri" name="n-password" value="" placeholder="New Password">
                                  
                                  <input type="password" id="" class="form-control bdr pri" name="r-password" value="" placeholder="Confirm Password">
                                  
                                   
                                  
                            </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-submit btn-gradient prfbtn">
                                      Save Changes
                                  </button>
                              </div>
                          </form>
                </div>
            </div>
          </div>
        </div>

        <div class="clearfix"></div>

      </div>

      
                       </div>
                   </div>
               </div>
           </div>
       </section>
        <div class="clearfix"></div>
        <!-- / end content -->
      