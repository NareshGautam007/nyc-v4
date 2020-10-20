
        <!-- /header -->
        <!--content-->
        <div class="container container-240">
            
            <div class="myaccount">
                <ul class="breadcrumb v3">
                    <li><a href="#">Home</a></li>
                    <li class="active">My Account</li>
                </ul>

                <div class="row flex pd">


                    <!-- <div class="account-element bd-7">
                        <div class="cmt-title text-center abs">
                            <h1 class="page-title v1">Login</h1>
                        </div>
                        <div class="page-content">
                            <p>Sign in to your account</p>
                            <form class="login-form" method="post" action="#"> 
                                  <div class="form-group">
                                    <label>Username or email address <span class="f-red">*</span></label>
                                      <input type="text" id="author" class="form-control bdr" name="comment[author]" value="">
                                      <label>Password <span class="f-red">*</span></label>
                                      <input type="email" id="email" class="form-control bdr" name="comment[email]" value="">
                                  </div>
                                  <div class="flex lr">
                                      <button type="submit" class="btn btn-submit btn-gradient">
                                          Login
                                      </button>
                                        <div class="checkbox checkbox-default">       
                                          <input id="remember" type="checkbox" value="yes" class="">
                                          <label for="remember"><span class="chk-span" tabindex="2"></span>Remember me</label>      
                                      </div>
                                  </div>
                            </form>
                            <a href="#" class="btn-lostpwd spc">Lost your password?</a>
                        </div>
                    </div>
                     -->
                    <div class="account-element bd-7 e-center salc">
                        <div class="cmt-title text-center abs">
                            <h1 class="page-title v1">Register</h1>
                        </div>
                        <div class="page-content">
                            <p>Create your very own account</p>
                            <form class="login-form" method="POST" action=""> 
                                  <div class="form-group">
                                    
                                    <label>Name<span class="f-red">*</span></label>
                                    <input type="text"  class="form-control bdr" name="name" value="">

                                    <label>Email <span class="f-red">*</span></label>
                                    <input type="text"  class="form-control bdr" name="email" value="">
                                    
                                    <label>Phone <span class="f-red">*</span></label>
                                    <input type="text"  class="form-control bdr" name="phone" value="">

                                      <label>Password <span class="f-red">*</span></label>
                                      <input type="password"  class="form-control bdr" name="pass" value="">

                                      <label>Repet Password<span class="f-red">*</span></label>
                                      <input type="repet-pass" class="form-control bdr" name="pass_repeat" value="">
                                      
                                  </div>
                                  <div class="flex lr">
                                      <button type="submit" name="signup" class="btn btn-submit btn-gradient" value="<?= lang('register_me') ?>">
                                          Register
                                        </button>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="feature">
            <div class="container container-240">
                <div class="feature-inside">
                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="<?php echo base_url(); ?>assets/img/feature/truck.png" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>Worldwide Delivery</h3>
                            <p>With sites in 5 languages, we ship to over 200 countries & regions.</p>
                        </div>
                    </div>

                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="<?php echo base_url(); ?>assets/img/feature/credit-card.png" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>Safe Payment</h3>
                            <p>Pay with the world’s most popular and secure payment methods.</p>
                        </div>
                    </div>

                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="<?php echo base_url(); ?>assets/img/feature/safety.png" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>Shop with Confidence</h3>
                            <p>Our Buyer Protection covers your purchase from click to delivery.</p>
                        </div>
                    </div>

                    <div class="feature-block text-center">
                        <div class="feature-block-img"><img src="<?php echo base_url(); ?>assets/img/feature/telephone.png" alt="" class="img-reponsive"></div>
                        <div class="feature-info">
                            <h3>24/7 Help Center</h3>
                            <p>Round-the-clock assistance for a smooth shopping experience.</p>
                        </div>
                    </div>
            </div>
            </div>
        </div>
        <!-- / end content -->
       