        <!--content-->
        <div class="container container-240">
            <div class="blog-banner pd-banner v2">
               <a href="#" class="effect_img2"><img src="img/blog/blog-banner.png" alt="" class="img-reponsive"></a> 
            </div>
            <div class="blog spc1">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Blog</li>
                </ul>
                <div class="blog-grid">
                   <!-- <h1 class="blog-heading text-center">Blog</h1>-->
                    <div class="row">

                        <?php 
                        if(!empty($posts));

                        foreach ($posts as $key => $article) {
                            ?>

                       
                        <div class="col-md-4 col-sm-6 col-xs-12 blog-post-item">
                            <div class="blog-img">
                                <a href="<?= LANG_URL . '/blog/' . $article['url'] ?>" class="hover-images"><img src="<?= base_url('attachments/blog_images/' . $article['image']) ?>" alt="<?= $article['title'] ?>" class="img-reponsive"></a>
                                <div class="blog-post-date e-gradient abs">
                                    <span class="b-month"><?= date('M d, y', $article['time']) ?></span>
                               
                                </div>
                            </div>
                            <div class="blog-info">
                                <h3 class="blog-post-title"><a href="<?= LANG_URL . '/blog/' . $article['url'] ?>"><?= character_limiter($article['title'], 85) ?></a></h3>
                                <div class="blog-post-author">
                                    <div class="author">Posted by <span class="c-black">Admin</span></div>
<!-- 
                                     <div class="blog-post-comment"><span class="c-black"></span>2</div> -->
                                
                                </div>
                                <p class="blog-post-desc"><?= character_limiter(strip_tags($article['description']), 300) ?></p>
                                <div class="brdbtn">
                                    <a href="<?= LANG_URL . '/blog/' . $article['url'] ?>" class="slide-btn e-orange-gradient" tabindex="0">Read More<i class="ion-ios-arrow-forward"></i></a>
                                </div>
                                
                            </div>
                        </div>
                       <?php }

                        ?>


                    </div>
                </div>
<!-- 
                <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                </ul> -->

            </div>
        </div>
        
        
        
        
        <!-- Our blog -->
        <!-- <div class="our-blog bg">
            <div class="container container-240">
                <div class="ecome-heading style2">
                    <h1 class="v2">Latest Posts</h1>
                    <a href="#" class="btn-show">View more<i class="ion-ios-arrow-forward"></i></a>
                </div>
                <p class="ecome-info spc2">
                    Lorem Ipsum is simply dummy text of the </p>
                <div class="product-tab-pd owl-carousel owl-theme js-owl-blog owl-custom-dots v2">
                    <div class="blog-post-item v3">
                        <div class="blog-img">
                            <a href="#" class="hover-images"><img src="assets/blog/pubg.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="heading-blog flex align-center">
                            <div class="blog-post-date e-gradient">
                                <span class="b-date">14</span>
                                <span class="b-month">dec</span>
                            </div>
                            <h3 class="blog-post-title"><a href="#">Ricoh's latest spherical camera nets quality images</a></h3>
                        </div>
                        <div class="blog-post-author">
                            <div class="author">Posted by <span class="c-black">Admin</span></div>
                            <div class="blog-post-comment"><span class="c-black"></span>2</div>
                        </div>
                        <p class="blog-post-desc">Here are many variations of passages of Lorem Ipsum availablethe majority have suffered alteration in some form...</p>
                        
                    </div>
                    <div class="blog-post-item v3">
                        <div class="blog-img">
                            <a href="#" class="hover-images"><img src="assets/blog/pubg.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="heading-blog flex align-center">
                            <div class="blog-post-date e-gradient">
                                <span class="b-date">14</span>
                                <span class="b-month">dec</span>
                            </div>
                            <h3 class="blog-post-title"><a href="#">Ricoh's latest spherical camera nets quality images</a></h3>
                        </div>
                        <div class="blog-post-author">
                            <div class="author">Posted by <span class="c-black">Admin</span></div>
                            <div class="blog-post-comment"><span class="c-black"></span>2</div>
                        </div>
                        <p class="blog-post-desc">Here are many variations of passages of Lorem Ipsum availablethe majority have suffered alteration in some form...</p>
                        
                    </div>
                    <div class="blog-post-item v3">
                        <div class="blog-img">
                            <a href="#" class="hover-images"><img src="assets/blog/pubg.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="heading-blog flex align-center">
                            <div class="blog-post-date e-gradient">
                                <span class="b-date">14</span>
                                <span class="b-month">dec</span>
                            </div>
                            <h3 class="blog-post-title"><a href="#">Ricoh's latest spherical camera nets quality images</a></h3>
                        </div>
                        <div class="blog-post-author">
                            <div class="author">Posted by <span class="c-black">Admin</span></div>
                            <div class="blog-post-comment"><span class="c-black"></span>2</div>
                        </div>
                        <p class="blog-post-desc">Here are many variations of passages of Lorem Ipsum availablethe majority have suffered alteration in some form...</p>
                        
                    </div>
                    <div class="blog-post-item v3">
                        <div class="blog-img">
                            <a href="#" class="hover-images"><img src="assets/blog/pubg.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="heading-blog flex align-center">
                            <div class="blog-post-date e-gradient">
                                <span class="b-date">14</span>
                                <span class="b-month">dec</span>
                            </div>
                            <h3 class="blog-post-title"><a href="#">Ricoh's latest spherical camera nets quality images</a></h3>
                        </div>
                        <div class="blog-post-author">
                            <div class="author">Posted by <span class="c-black">Admin</span></div>
                            <div class="blog-post-comment"><span class="c-black"></span>2</div>
                        </div>
                        <p class="blog-post-desc">Here are many variations of passages of Lorem Ipsum availablethe majority have suffered alteration in some form...</p>
                        
                    </div>
                    <div class="blog-post-item v3">
                        <div class="blog-img">
                            <a href="#" class="hover-images"><img src="assets/blog/pubg.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="heading-blog flex align-center">
                            <div class="blog-post-date e-gradient">
                                <span class="b-date">14</span>
                                <span class="b-month">dec</span>
                            </div>
                            <h3 class="blog-post-title"><a href="#">Ricoh's latest spherical camera nets quality images</a></h3>
                        </div>
                        <div class="blog-post-author">
                            <div class="author">Posted by <span class="c-black">Admin</span></div>
                            <div class="blog-post-comment"><span class="c-black"></span>2</div>
                        </div>
                        <p class="blog-post-desc">Here are many variations of passages of Lorem Ipsum availablethe majority have suffered alteration in some form...</p>
                        
                    </div>
                    <div class="blog-post-item v3">
                        <div class="blog-img">
                            <a href="#" class="hover-images"><img src="assets/blog/pubg.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="heading-blog flex align-center">
                            <div class="blog-post-date e-gradient">
                                <span class="b-date">14</span>
                                <span class="b-month">dec</span>
                            </div>
                            <h3 class="blog-post-title"><a href="#">Ricoh's latest spherical camera nets quality images</a></h3>
                        </div>
                        <div class="blog-post-author">
                            <div class="author">Posted by <span class="c-black">Admin</span></div>
                            <div class="blog-post-comment"><span class="c-black"></span>2</div>
                        </div>
                        <p class="blog-post-desc">Here are many variations of passages of Lorem Ipsum availablethe majority have suffered alteration in some form...</p>
                        
                    </div>
                    <div class="blog-post-item v3">
                        <div class="blog-img">
                            <a href="#" class="hover-images"><img src="assets/blog/pubg.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="heading-blog flex align-center">
                            <div class="blog-post-date e-gradient">
                                <span class="b-date">14</span>
                                <span class="b-month">dec</span>
                            </div>
                            <h3 class="blog-post-title"><a href="#">Ricoh's latest spherical camera nets quality images</a></h3>
                        </div>
                        <div class="blog-post-author">
                            <div class="author">Posted by <span class="c-black">Admin</span></div>
                            <div class="blog-post-comment"><span class="c-black"></span>2</div>
                        </div>
                        <p class="blog-post-desc">Here are many variations of passages of Lorem Ipsum availablethe majority have suffered alteration in some form...</p>
                        
                    </div>
                    <div class="blog-post-item v3">
                        <div class="blog-img">
                            <a href="#" class="hover-images"><img src="assets/blog/pubg.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="heading-blog flex align-center">
                            <div class="blog-post-date e-gradient">
                                <span class="b-date">14</span>
                                <span class="b-month">dec</span>
                            </div>
                            <h3 class="blog-post-title"><a href="#">Ricoh's latest spherical camera nets quality images</a></h3>
                        </div>
                        <div class="blog-post-author">
                            <div class="author">Posted by <span class="c-black">Admin</span></div>
                            <div class="blog-post-comment"><span class="c-black"></span>2</div>
                        </div>
                        <p class="blog-post-desc">Here are many variations of passages of Lorem Ipsum availablethe majority have suffered alteration in some form...</p>
                        
                    </div>
                </div>
            </div>
        </div> -->
        
        
        
        



        <!-- / end content -->
       