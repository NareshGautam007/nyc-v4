
        <!-- /header -->
        <!--content-->
        <div class="container container-240">
            
            <div class="myaccount">
                <ul class="breadcrumb v3">
                    <li><a href="#">Home</a></li>
                    <li class="active">My Account</li>
                </ul>
                <div class="row flex pd">
                    <div class="account-element bd-7">
                        <div class="cmt-title text-center abs">
                            <h1 class="page-title v1">Login</h1>
                        </div>
                        <div class="page-content">
                            <p>Sign in to your account</p>
                            <form class="login-form" method="POST" action="#"> 
                                  <div class="form-group">
                                    <label>Email<span class="f-red">*</span></label>
                                      <input type="text"  class="form-control bdr" name="email" value="">
                                      <label>Password <span class="f-red">*</span></label>
                                      <input type="password"  class="form-control bdr" name="pass" value="">
                                  </div>
                                  <div class="flex lr aclg">
                                      <button type="submit" name="login" class="btn btn-submit btn-gradient" value="<?= lang('login') ?>">
                                          Login
                                      </button>

                                  <!--       <div class="checkbox checkbox-default">       
                                          <input id="remember" type="checkbox" value="yes" class="">
                                          <label for="remember"><span class="chk-span" tabindex="2"></span>Remember me</label>
                                       </div>
                                   -->
                                  </div>
                            </form>
                            
                            <a href="#" class="btn-lostpwd spc">Lost your password?</a>
                        </div>
                    </div>



                    <div class="account-element bd-7 e-left">
                        <div class="cmt-title text-center abs">
                            <h1 class="page-title v1">New Customer</h1>
                        </div>
                        <div class="page-content">
                            <p>Create your very own account</p>
                                  <div class="form-group">
<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                                  </div>
                                  <div class="flex lr alcn">
                                    <a href="<?php echo base_url(); ?>users/register">  <button type="submit" class="btn btn-submit btn-gradient">
                                          Continue
                                        </button></a>
                                  </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- / end content -->
       