<style>


.touch .socila {
    display: block;
    /* float: right */
}

    
@media only screen and (min-width:768px) and (max-width:991px),
(max-width:767px) {
	.touch .socila {
		float: none;
		text-align: center
	}
}

.touch .socila li {
	margin: 0;
	margin-right: 5px;
	display: inline-block !important;
}



.touch .socila li:last-child {
	margin: 0;
}



.touch .socila li a {
	height: 35px;
	width: 35px;
	text-align: center;
	display: block;
	color: #fff;
	border-radius: 50%;
	line-height: 35px;
	font-size: 15px
}



.touch .socila li a:hover {
	background-color: #fff;
	color: #000;
	border-color: transparent
}



.touch .socila li span {
	display: inline-block;
	color: #fff;
	margin-right: 12px
}

@media(max-width:767px) {
	.touch .socila li span {
		display: none
	}
}
</style> 
 
 <!-- Start Footer Area -->
    <footer class="footer">
    <!-- Start Footer Middle -->
    <div class="footer-middle">
        <div class="container">
            <div class="bottom-inner">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-contact">
                            <h3 id="touchhead"></h3>
                            {{-- <p id="contact_address"> --}}
                            </p>
                            <!-- <p class="phone">Phone: +91 471 2525444</p> -->
                            <!-- <p class="mail">
                                <a href="mailto:admin.ksitm@kerala.gov.in">admin.ksitm@kerala.gov.in</a>
                            </p> -->
                            {{-- <p class="mail">
                                <a href="" id="contact_link">admin.ksitm@kerala.gov.in</a>
                            </p> --}}


                            {{-- need to change --}}
                            <div class="touch">
                                <ul class="socila" id="footermedia1">
                                    <li >
                                    {{-- <span id="followusfooter"></span> --}}
                                    </li>
                                </ul>
                            </div>
                            {{-- need to change end --}}
                            

                            
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer our-app">
                            <h3 id="mobilehead"></h3>
                            <ul class="app-btn">
                                <li>
                                    <a target="_blank" data-toggle="tooltip" data-placement="top" id="download1" title="" href="#">
                                        <i class="lni lni-apple"></i>
                                       
                                        <span class="small-title" id="small-title1"></span>
                                        <span class="big-title" id="app-store"></span>
                                    
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" data-toggle="tooltip" data-placement="top" id="download2" title="" href="#">
                                        <i class="lni lni-play-store"></i>
                                        <span class="small-title" id="small-title2"></span>
                                        <span class="big-title" id="google-play"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3 id="aboutgovthead"></h3>
                            <ul id="footerlinks">
                                <!-- <li><a href="javascript:void(0)">About Us</a></li>
                                <li><a href="javascript:void(0)">National Portal of India</a></li>
                                <li><a href="javascript:void(0)">myGov</a></li>
                                <li><a href="javascript:void(0)">Kerala Legislative Assembly</a></li>
                                <li><a href="javascript:void(0)">I&PRD </a></li> -->
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3 id="infmnhead"> </h3>
                            <ul id="footermenus">
                                <!-- <li><a href="javascript:void(0)">പോർട്ടലിനെ കുറിച്ച് </a></li>
                                <li><a href="javascript:void(0)">Hyperlink policy</a></li>
                                <li><a href="javascript:void(0)">Privacy policy</a></li>
                                <li><a href="javascript:void(0)">Disclaimer</a></li>
                                <li><a href="javascript:void(0)">Copyright Policy</a></li>
                                <li><a href="javascript:void(0)">Terms and Conditions</a></li>
                                <li><a href="javascript:void(0)">Guidelines</a></li> -->
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Middle -->
    <!-- Start Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="inner-content">
                <div class="row">

                    <div class="col-lg-8 col-12">
                        <div class="copyright">
                            <p><span id="footer-title1"></span> <br>
                                <span id="footer-title2"></span><br>
                                <span id="footer-title3"></span></p>
                            <hr>
                            <p style="color:#FFFFFF;" id="lastviewhead">&nbsp;&nbsp; <span id="site_update_date"></span></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        {{-- <ul class="socila" id="footermedia1">
                            <li >
                                <span id="followusfooter"></span>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>


<!---------------------track complaint------------------------------------------->
<div class="modal fade" id="transactionmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content modalevenrow">
            <div class="modal-header modalevenrow">
                <h4 class="modal-title text-primary"><i class="fas fa-users-cog"></i>&nbsp;&nbsp;Custom Ajax Title </h4>
                <button type="button" class="close1" data-dismiss="modal">&times;</button>
            </div> <!-- ./modal-header -->
            <span id="formresults"></span>
            <form id="ajaxmodalform" method="post" class="form-horizontal">
            <div class="modal-body modalevenrow text-dark">
                <div class="row p-2 modaloffrow">
                    <div class="col-12 d-flex justify-content-center" id="contentdiv"> 

                    </div> <!-- ./col6 -->
                </div> <!-- ./row1 -->
                
                
            </div> <!-- ./modal-body -->
            <div class="modal-footer modaloffrow">
                
            </div> <!-- ./modal-footer -->
            </form> <!-- ./form -->
        </div> <!-- ./modal-content -->
    </div> <!-- ./modal-dialog -->
</div> <!-- ./transaction_modal -->
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('assets/newdesign/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/newdesign/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/newdesign/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/newdesign/js/main.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('assets/newdesign/owl/jquery.min.js') }}"></script> 
    <script src="{{ asset('assets/newdesign/owl/owl.carousel.min.js') }}"></script> 
    <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="{{ asset('assets/newdesign/js/counterup.min.js') }}"></script>

    <script>(function(){var s = document.createElement("script");s.setAttribute("data-account","g8GwtnEHLX");s.setAttribute("src","https://cdn.userway.org/widget.js");document.body.appendChild(s);})();</script>

    
    <script type="text/javascript">
        //========= Hero Slider 
        tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        });

       
    </script>
	



<script>
            var lightbox = GLightbox();
            lightbox.on('open', (target) => {
                console.log('lightbox opened');
            });
            var lightboxDescription = GLightbox({
                selector: '.glightbox2'
            });
            var lightboxVideo = GLightbox({
                selector: '.glightbox3'
            });
            lightboxVideo.on('slide_changed', ({ prev, current }) => {
                console.log('Prev slide', prev);
                console.log('Current slide', current);

                const { slideIndex, slideNode, slideConfig, player } = current;

                if (player) {
                    if (!player.ready) {
                        // If player is not ready
                        player.on('ready', (event) => {
                            // Do something when video is ready
                        });
                    }

                    player.on('play', (event) => {
                        console.log('Started play');
                    });

                    player.on('volumechange', (event) => {
                        console.log('Volume change');
                    });

                    player.on('ended', (event) => {
                        console.log('Video ended');
                    });
                }
            });

            var lightboxInlineIframe = GLightbox({
                selector: '.glightbox4'
            });


        </script>
	
    <!-- chat bot -->
    <style>
    .rw-conversation-container .rw-header {
        background-color: #5D6DBF;
    }
    .rw-conversation-container .rw-messages-container .rw-message .rw-client{
        background-color: #5D6DBF;
    }
    .rw-launcher{
        background-color: #5D6DBF;
    }
    .rw-conversation-container .rw-messages-container .rw-replies .rw-reply{
        background-color: #5D6DBF;
    }
    .rw-conversation-container .rw-header .rw-title{
        color:  white;
    }
    </style>

  <!--   <script>!(function () {
    let e = document.createElement("script"),
        t = document.head || document.getElementsByTagName("head")[0];
    (e.src =
        "https://cdn.jsdelivr.net/npm/rasa-webchat/lib/index.js"),
        // Replace 1.x.x with the version that you want
        (e.async = !0),
        (e.onload = () => {
        window.WebChat.default(
            {
            initPayload: "/greet",
            customData: { language: "en" },
            socketUrl: "http://103.135.131.100:5005",
            title: 'Service Support',
            subtitle: 'Talk with us'
            // add other props here
            },
            null
        );
        }),
        t.insertBefore(e, t.firstChild);
    })();
    </script> -->
     <!-- chat bot end-->

     <!-- <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            nav:true,
            dots: false,
            margin:10,
            autoWidth:false,
            autoplayHoverPause:true,
            navText: ["<i class='fas fa-arrow-alt-circle-left fa-3x'></i>","<i class='fas fa-arrow-alt-circle-right fa-3x'></i>"],
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:4
                },
                1000:{
                    items:5
                }
            }
        })
    </script> -->

</body>

</html>