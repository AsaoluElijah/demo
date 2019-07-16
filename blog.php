<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require('includes/css.php');
        require('includes/connection.php');

        $query = "SELECT * FROM blog ORDER BY id desc LIMIT 6";
        $result = mysqli_query($connection,$query);

        function countComment($postId){
            include('includes/connection.php');
            $q = "SELECT * FROM comment WHERE post_id = {$postId}";
            $r = mysqli_query($connection,$q);
            return mysqli_num_rows($r);
        }

    ?>
</head>

<body>

<?php require('includes/main-header.php'); ?>

<!-- START SECTION BANNER -->
<section class="section_breadcrumb blue_light_bg" data-z-index="1" data-parallax="scroll" data-image-src="assets/images/home_banner_bg.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="banner_text text-center">
                    <h1 class="animation" data-animation="fadeInUp" data-animation-delay="1.1s">Our Blog</h1>
                    <ul class="breadcrumb bg-transparent justify-content-center animation m-0 p-0" data-animation="fadeInUp" data-animation-delay="1.3s"> 
                        <li><a href="#">Home</a> </li>
                        <li><span>Blog</span></li> 
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION BLOG- -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="post-details">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- Fetch Point ;) -->
                            <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $commentNo = countComment($row['id']);
                            ?>
                                
                            <article class="blog_content_detail">
                                <div class="post_content">
                                    <h3 class="blog_title"><a href="#"><?php echo $row['title']; ?></a></h3>
                                    <ul class="list_none blog_meta">
                                        <li><a href="#">Posted By <span>admin</span></a></li>
                                        <li><a href="#"><i class="ion-android-time"></i><?php echo $row['date']; ?></a></li>
                                        <li><a href="#"><i class="ion-chatboxes"></i> <?php echo $commentNo; ?> Comments</a></li>
                                    </ul>
                                    <div class="blog-img mt-3 mb-3">
                                        <img alt="blog_largel_img1.jpg" src="images/<?php echo $row['picture']; ?>">
                                    </div>
                                    <p>
                                        <?php echo $row['post']; ?>
                                    </p>
                                </div>
                                <div class="action_block">
                                    <a href="blog-detail.php?title=<?php echo $row['title']; ?>" class="btn btn-default btn-radius"> Read More</a>
                                    <ul class="social-share list_none">
                                      <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                      <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                      <li class="google-plus"><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                      <li class="pinterest"><a href="#"><i class="ion-social-pinterest"></i></a></li>
                                      <li class="linkedin"><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                   </ul>
                               </div>
                            </article>
                            <?php } ?>
                            <article class="blog_content_detail">
                                <div class="post_content">
                                    <h3 class="blog_title"><a href="#">The Year Cryptocurrencies Seized the </a></h3>
                                    <ul class="list_none blog_meta">
                                        <li><a href="#">Posted By <span>admin</span></a></li>
                                        <li><a href="#"><i class="ion-android-time"></i> April 14, 2018</a></li>
                                        <li><a href="#"><i class="ion-chatboxes"></i> 8 Comments</a></li>
                                    </ul>
                                    <div class="blog-img mt-3 mb-3">
                                        <img alt="blog_largel_img2.jpg" src="assets/images/blog_large_img2.jpg">
                                    </div>
                                    <p>The crypto markets continued to build on April's gains this week, with alternative cryptocurrencies like nano, VeChain and bytecoin leading the way. The Enterprise Blockchain Gap A number of large corporations, including Microsoft, IBM, Oracle, and SAP, have started to take notice of, and invest in, blockchain technology. Enterprise customers are interested in the blockchain because it can help reduce fraud, increase transparency, and provide secure record keeping. </p>
                                </div>
                                <div class="action_block">
                                    <a href="#" class="btn btn-default btn-radius"> Read More</a>
                                    <ul class="social-share list_none">
                                      <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                      <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                      <li class="google-plus"><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                      <li class="pinterest"><a href="#"><i class="ion-social-pinterest"></i></a></li>
                                      <li class="linkedin"><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                   </ul>
                               </div>
                            </article>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="pagination">
                                        <li><a href="#">Prev</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">...</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar_block">
                    <div class="widget widget_search">
                        <form class="form_search">
                            <input type="text" placeholder="Search" required="" style="outline: 0;">
                            <button value="Submit" name="submit" title="Subscribe" type="submit"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_category">
                        <h5 class="widget_title">Categories</h5>
                        <ul class="list_none">
                            <li><a href="#">Football News<span>(2)</span></a></li>
                            <li><a href="#">Entertainment <span>(10)</span></a></li>
                            <li><a href="#">Telecommunication <span>(3)</span></a></li>
                        </ul>
                    </div>
                    <!-- <div class="widget tags">
                        <h5 class="widget_title">Popular Tags</h5>
                        <ul class="list_none">
                            <li><a href="#">bitcoin</a></li>
                            <li><a href="#">Investments</a></li>
                            <li><a href="#">Crypto</a></li>
                            <li><a href="#">Cryptocurrecies</a></li>
                            <li><a href="#">Mining</a></li>
                            <li><a href="#">Escrow</a></li>
                            <li><a href="#">Exchange</a></li>
                            <li><a href="#">Transiaction</a></li>
                        </ul>
                    </div> -->
                    <!-- <div class="widget widget_archive">
                        <h5 class="widget_title">Archives</h5>
                        <ul class="list_none">
                            <li><a href="#">September <span>2015</span></a></li>
                            <li><a href="#">August <span>2015</span></a></li>
                            <li><a href="#">June <span>2014</span></a></li>
                            <li><a href="#">May <span>2014</span></a></li>
                            <li><a href="#">January <span>2014</span></a></li>
                            <li><a href="#">April <span>2013</span></a></li>
                        </ul>
                    </div> -->
                    <div class="widget widget_popular_post">
                        <h5 class="widget_title">Recent Posts</h5>
                        <div class="widget-post">
                            <div class="widget-post-thumb">
                                <a href="#"><img src="assets/images/post-thumb1.jpg" alt="post-thumb1"></a>
                            </div>
                            <div class="widget-post-content">
                                <h6><a href="#">Blockchain as a Service</a></h6>
                                <div class="widget-date"><i class="ion-android-time"></i> April 14, 2018</div>
                            </div>
                        </div>
                        <div class="widget-post">
                            <div class="widget-post-thumb">
                                <a href="#"><img src="assets/images/post-thumb2.jpg" alt="post-thumb2"></a>
                            </div>
                            <div class="widget-post-content">
                                <h6><a href="#">Why Raiblocks Needs to Implement Proof of Stake</a></h6>
                                <div class="widget-date"><i class="ion-android-time"></i> April 14, 2018</div>
                            </div>
                        </div>
                        <div class="widget-post">
                            <div class="widget-post-thumb">
                                <a href="#"><img src="assets/images/post-thumb3.jpg" alt="post-thumb3"></a>
                            </div>
                            <div class="widget-post-content">
                                <h6><a href="#">How to Buy Cryptocurrencies</a></h6>
                                <div class="widget-date"><i class="ion-android-time"></i> April 14, 2018</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG- -->

<!-- START FOOTER SECTION -->
<footer>
    <div class="top_footer blue_light_bg" data-z-index="1" data-parallax="scroll" data-image-src="assets/images/footer_bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="newsletter_form">
                        <h4 class="footer_title border_title animation" data-animation="fadeInUp" data-animation-delay="0.2s">Newsletter</h4>
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">By subscribing to our mailing list you will always be update with the latest news from us.</p>
                        <form class="subscribe_form animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <input class="input-rounded" type="text" required placeholder="Enter Email Address"/>
                          <button type="submit" title="Subscribe" class="btn-info" name="submit" value="Submit"> Subscribe </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-8 res_md_mt_30 res_sm_mt_20">
                    <h4 class="footer_title border_title animation" data-animation="fadeInUp" data-animation-delay="0.2s">Quick Links</h4>
                    <ul class="footer_link half_link list_none">
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.2s"><a href="#">Cryptocash ICO</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="#">Team</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="#">How It Works</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="#">Whitepaper</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a href="#">Tokens</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s"><a href="#">FAQ</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="#">Road map</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-4 res_md_mt_30 res_sm_mt_20">
                    <h4 class="footer_title border_title animation" data-animation="fadeInUp" data-animation-delay="0.2s">Social</h4>
                    <ul class="footer_social list_none">
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.2s"><a href="#"><i class="ion-social-facebook"></i> Facebook</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="#"><i class="ion-social-twitter"></i> Twitter</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a href="#"><i class="ion-social-googleplus"></i> Google Plus</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s"><a href="#"><i class="ion-social-pinterest"></i> Pintrest</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><a href="#"><i class="ion-social-instagram-outline"></i> Instagram</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
    <div class="bottom_footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="copyright">Copyright &copy; 2018 All Rights Reserved.</p>
        </div>
        <div class="col-md-6">
          <ul class="list_none footer_menu">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>
</footer>
<!-- END FOOTER SECTION --> 


<a href="#" class="scrollup btn-default"><i class="ion-ios-arrow-up"></i></a> 
<?php require('includes/script.php'); ?>

</body>

<!-- Mirrored from bestwebcreator.com/cryptocash/demo/blog-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 May 2019 19:26:11 GMT -->
</html>