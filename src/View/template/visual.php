<?php if(!isset($title)):?>
    
    <!-- visual -->
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>We Are Creative <br>Web Programers.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                        <a href="#" class="btn btn-common">SIGN UP</a>
                    </div>
                    <img src="/images/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="/images/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="/images/home/slider/sun.png" class="slider-sun" alt="slider image">
                    <img src="/images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="/images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
    </section>
    <?php else: ?>
        <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">
                                <a href="myblog.html">닉네임의 블로그</a>
                            </h1>
                            <p><small>Todo Blog of 아이디 </small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    
        <?php endif; ?>