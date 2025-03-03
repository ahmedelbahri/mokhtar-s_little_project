<?php
    get_header();
?>
<!-- <section>
    <div class="container">
        <?php
            if (have_posts())
            {
                while (have_posts())
                {
                    the_post();
                    the_content();
                }
            }
        ?>
    </div>
</section> -->
<!--//////////////////////////////////////////////////////////////-->

    <!-- Page Header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content">
            <p>Lorem ipsum dolor sit amet.</p>
            <h6><strong class="text-primary">Merrouch</strong> Gaming</h6> 
            <button class="btn btn-outline-light">Download Now</button> 
        </div>      
    </header><!-- End of Page Header -->    
    
    <!-- About Section -->
    <section id="about">
        <!-- Container -->
        <div class="container">
            <!-- About wrapper -->
            <div class="about-wrapper">
                <div class="after"><h1>About Us</h1></div>
                <div class="content">
                    <h5 class="title mb-3">Lorem ipsum dolor sit.</h5>
                    <!-- row -->
                    <div class="row">
                        <div class="col">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda soluta nisi cumque nostrum porro repellat iusto neque quos asperiores, aliquam.</p>
                            <p><b>Adipisicing elit. Modi similique  iusto voluptatibus sint.</b></p>                        
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dignissimos modi molestias voluptas possimus perferendis saepe soluta accusantium, obcaecati neque quas ducimus, alias labore nesciunt atque ab voluptatibus quis! Molestiae dicta reprehenderit, quod laborum voluptatem laboriosam! Sapiente vel, fugiat voluptates.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, quis!</p>
                        </div>
                        <div class="col">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda soluta nisi cumque nostrum porro repellat iusto neque quos asperiores, aliquam.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, quis!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dignissimos modi molestias voluptas possimus perferendis saepe soluta accusantium, obcaecati neque quas ducimus, alias labore nesciunt atque ab voluptatibus quis! Molestiae dicta reprehenderit, quod laborum voluptatem laboriosam! Sapiente vel, fugiat voluptates.</p>
                        </div>
                    </div><!-- End of Row -->                   
                    <a href="javascript:void(0)">Read More...</a>
                </div>
            </div><!-- End of About Wrapper -->         
        </div>  <!-- End of Container-->        
     </section><!--End of Section -->


    <!-- section -->
    <section>
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after"></div>
                        <img src="/test/wordpress/wp-content/themes/my_template/assets/imgs/img-1.jpg" class="w-100" alt="About Us">
                    </div>
                </div>
                <div class="col-md-5">
                    <h6 class="title mb-3">Lorem ipsum dolor sit amet, consectetur.</h6>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae autem rem impedit molestiae hic ducimus, consequuntur ullam dolorem quaerat beatae labore explicabo, sint laboriosam aperiam nihil inventore facilis. Quasi, facilis.</p>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, amet!</p>
                    <button class="btn btn-outline-primary btn-sm">Learn More</button>
                </div>
            </div>
            <!-- End of Row -->
        </div>  
        <!-- End of Container -->
    </section><!-- End of Section -->   

    <!-- section -->
    <section>
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-between align-items-center">                
                <div class="col-md-5">
                    <h6 class="title mb-3">Lorem ipsum dolor sit amet, consectetur.</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae autem rem impedit molestiae hic ducimus, consequuntur ullam dolorem quaerat beatae labore explicabo, sint laboriosam aperiam nihil inventore facilis. Quasi, facilis.</p>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, amet!</p>
                    <button class="btn btn-outline-primary btn-sm">Learn More</button>

                </div>
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after right"></div>
                        <img src="/test/wordpress/wp-content/themes/my_template/assets/imgs/img-2.jpg" class="w-100" alt="About Us">
                    </div>                      
                </div>
            </div><!-- End of Row -->           
        </div><!-- End of Container-->      
    </section><!-- End of Section -->
    

    <!-- Features Section -->
    <section class="has-bg-img" id="features">
        <div class="overlay"></div>
        <!-- Button trigger modal -->
        <a data-toggle="modal" href="#exampleModalCenter">
            <i></i>
        </a>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                     <iframe width="100%" height="450px" class="border-0" 
                    src="https://www.youtube.com/embed/tgbNyZ7vqY?controls=0">
                    </iframe>
                </div>
            </div>
        </div><!-- End of Modal -->     
    </section><!-- End of features Section -->  

    <!-- Section -->
    <section>
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after"></div>
                        <img src="/test/wordpress/wp-content/themes/my_template/assets/imgs/img-3.jpg" class="w-100" alt="About us">
                    </div>
                </div>
                <div class="col-md-5">
                    <h6 class="title mb-3">Lorem ipsum dolor sit amet, consectetur.</h6>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae autem rem impedit molestiae hic ducimus, consequuntur ullam dolorem quaerat beatae labore explicabo, sint laboriosam aperiam nihil inventore facilis. Quasi, facilis.</p>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, amet!</p>
                    <button class="btn btn-outline-primary btn-sm">Learn More</button>
                </div>
            </div><!-- End of Row -->           
        </div><!-- End of Container-->      
    </section><!-- End of Section -->   

    <!-- Testmonial Section -->
    <section class="text-center pt-5" id="testmonial">
        <!-- Container -->
        <div class="container">
            <h3 class="mt-3 mb-5 pb-5">What our Client says</h3>
            <!-- Row -->
            <div class="row">
                <div class="col-sm-10 col-md-4 m-auto">
                    <div class="testmonial-wrapper">
                        <img src="/test/wordpress/wp-content/themes/my_template/assets/imgs/avatar1.jpg" alt="Client Image">
                        <h6 class="title mb-3">Adell Smith</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium voluptates voluptatem eum nisi cumque veniam est id reprehenderit atque rerum, cum sit perspiciatis, harum cupiditate nostrum quibusdam perferendis accusamus, illo.</p>
                    </div>
                </div>
                <div class="col-sm-10 col-md-4 m-auto">
                    <div class="testmonial-wrapper">
                        <img src="/test/wordpress/wp-content/themes/my_template/assets/imgs/avatar2.jpg" alt="Client Image">
                        <h6 class="title mb-3">John Doe</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium voluptates voluptatem eum nisi cumque veniam est id reprehenderit atque rerum, cum sit perspiciatis, harum cupiditate nostrum quibusdam perferendis accusamus, illo.</p>
                    </div>
                </div>
                <div class="col-sm-10 col-md-4 m-auto">
                    <div class="testmonial-wrapper">
                        <img src="/test/wordpress/wp-content/themes/my_template/assets/imgs/avatar3.jpg" alt="Client Image">
                        <h6 class="title mb-3">Kyle Butler</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium voluptates voluptatem eum nisi cumque veniam est id reprehenderit atque rerum, cum sit perspiciatis, harum cupiditate nostrum quibusdam perferendis accusamus, illo.</p>
                    </div>
                </div>
            </div><!-- end of Row -->           
        </div><!-- End of Cotanier -->  
    </section><!-- End of Testmonial Section -->

    <!-- Section -->
    <section class="has-bg-img text-center text-light height-auto" style="background-image: url(/test/wordpress/wp-content/themes/my_template/assets/imgs/bg-img-2.jpg)">
        <h1 class="display-4">LET’S TALK BUSINESS.</h1>
    </section><!-- End of Section -->
    

    <!-- Contact Section -->
    <section id="contact" class="text-center">
        <!-- container -->
        <div class="container">
            <h1>CONTACT US</h1>
            <p class="mb-5">If you have some Questions or need Help! Please Contact Us! <br> 
            We make Cool and Clean Design for your Business</p>
            
            <!-- Contact form -->
            <form class="contact-form col-md-11 col-lg-9 mx-auto">
                <div class="form-row">
                    <div class="col form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Your Message"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" value="Send Message">
                </div>
            </form><!-- End of Contact form -->         
        </div><!-- End of Container-->      
    </section><!-- End of Contact Section -->   
<!--//////////////////////////////////////////////////////////////-->
<?php
    get_footer();
?>