<?php DEFINE("BASE","views/"); ?>
<?php include "parts/head.php"; ?>
<body>
    <!-- Top bar -->
    <?php include "parts/top-nav.php"; ?>
    <!-- Ends Topbar -->

    <!-- Nagigation -->
    <?php include "parts/nav.php"; ?>
    <!-- Ends Navigation -->    
<!-- Header #homepage -->
    <section class="header-homepage">
        <div class="container">
            <div class="row header-margin">
                <div class="col-sm-12">
                    <h1 class="hero-title">Explore - Enrich - Excel</h1>
                    <p class="hero-tag">Everything you need in order to find the <strong>Right</strong> Class for you</p>
                </div>
                <div class="col-sm-12">
                    <!-- Home Search form -->
                    <form action="https://ecampus.mhaii.com/search-tutor" id="search_form" method="post" accept-charset="utf-8">
                        <ul class="home-search">
                            <li>
                                <select name="location_slug[]" class="select-picker" required="required" >
                                    <option value="" selected="selected">Select Location</option>
                                </select>
                            </li>
                            <li>
                                <select name="course_slug[]" class="select-picker" required="required" >
                                    <option value="" selected="selected">Type Of Course</option>
                                    <option value="primaryoneenglish-1">Primary One English (0)</option>
                                    <option value="senioroneagriculture-1">Senior One Agriculture (0)</option>
                                    <option value="seniorfiveire-1">Senior Five IRE (0)</option>
                                </select>
                            </li>
                            <li>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i>Search Your Teacher</button>
                            </li>
                        </ul>
                    </form>
                    <style>
                        label.error {
                            color: #FF3300;
                            float: left;
                            margin-top: -30px;
                        }
                    </style>


<script src="<?= BASE ?>assets/front/js/jquery.js"></script>
<script src="<?= BASE ?>assets/front/js/jquery.validate.min.js"></script>
<script type="text/javascript"> 
  (function($,W,D)
   {
      var JQUERY4U = {};
   
      JQUERY4U.UTIL =
      {
          setupFormValidation: function()
          {
              //form validation rules
              $("#search_form").validate({
                  rules: {
                        "location_slug[]": {
                            required: true
                        },
                        "course_slug[]": {
                            required: true
                        }
                  },

                  messages: {
                        "location_slug[]": {
                            required: "Please Select Location"
                        },
                        "course_slug[]": {
                            required: "Please Select Course"
                        }
                  },

                  submitHandler: function(form) {
                      form.submit();
                  }
              });
          }
      }
         //when the dom has loaded setup form validation rules
     $(D).ready(function($) {
         JQUERY4U.UTIL.setupFormValidation();
     });
 })(jQuery, window, document);           
</script>




                    <!-- Home Search form -->
                </div>
                                <div class="col-sm-12">
                    <img src="<?= BASE ?>assets/front/images/headericons.png" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </section>
    <!-- Ends Header #homepage -->

    <!-- Advantages #homepage -->
    <section>
        <div class="container">
            <div class="row row-margin">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="advantage">
                        <div class="media-left">
                            <img src="../10.0.0.14/menorah-tutor-sellingcourses/assets/front/images/icn-video.png" alt="..">
                        </div>
                        <div class="media-body">
                            <h4><a href="#">Videos &amp; Images</a></h4>
                            <p>Listen to our teachers speeches and see our video testimonials before you take any decisions</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="advantage">
                        <div class="media-left">
                            <img src="../10.0.0.14/menorah-tutor-sellingcourses/assets/front/images/icn-score.png" alt="..">
                        </div>
                        <div class="media-body">
                            <h4><a href="#">Quality Scores</a></h4>
                            <p>We have rated teachers for safety and convenience as we know how important this is for you</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="advantage">
                        <div class="media-left">
                            <img src="../10.0.0.14/menorah-tutor-sellingcourses/assets/front/images/icn-calendar.png" alt="..">
                        </div>
                        <div class="media-body">
                            <h4><a href="#">Reviews &amp; Ratings</a></h4>
                            <p>No more emails, Calls or messaging friends for recommendations - Get acces to real reviews in seconds</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <!-- Ends Advantages #homepage -->


    <!-- Our-Popular #homepage -->
        <section class="our-popular">
        <div class="container">
            <div class="row-margin">
                <div class="row ">
                    <div class="col-sm-12 ">
                        <h2 class="heading">Our Popular Courses</h2>
                    </div>

                    
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="pop-list">
                            <a href=courses/primaryschoolsubjects-1-1.html class="link-all">See All</a>
                            <h3 class="heading-line" title="Primary School Subjects">Primary School Subjects</h3>
                            <ul>
                                <li><a href="search-tutor/primaryoneenglish-1.html" title="Primary One English">Primary One English</a></li>
                                <li><a href="search-tutor/primaryonemathematics-.html" title="Primary One Mathematics ">Primary One Mathematics </a></li>
                                <li><a href="search-tutor/primaryonesceince-1.html" title="Primary One Science">Primary One Science</a></li>
                                <li><a href="search-tutor/primaryonesocialstudies-1.html" title="Primary One Social Studies">Primary One Social Studies</a></li>
                            </ul>
                        </div>
                    </div>

                    
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="pop-list">
                            <a href=courses/o-levelsubjects-1.html class="link-all">See All</a>
                            <h3 class="heading-line" title="O-Level Subjects">O-Level Subjects</h3>
                            <ul>
                                <li><a href="search-tutor/senioroneenglish-1-1.html" title="Senior One  English">Senior One  English</a></li>
                                <li><a href="search-tutor/senioronemathemetics-1.html" title="Senior One  Mathemetics">Senior One  Mathemetics</a></li>
                                <li><a href="search-tutor/senior-one-biology-1.html" title="Senior One  Biology">Senior One  Biology</a></li>
                                <li><a href="search-tutor/senioronechemistry-1.html" title="Senior One Chemistry">Senior One Chemistry</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="pop-list">
                            <a href=courses/a-levelsubjects-1.html class="link-all">See All</a>
                            <h3 class="heading-line" title="A-Level Subjects">A-Level Subjects</h3>
                            <ul>
                                <li><a href="search-tutor/seniorfivemathematics-1.html" title="Senior Five Mathematics">Senior Five Mathematics</a></li>
                                <li><a href="search-tutor/seniorfivebiology-1.html" title="Senior Five Biology">Senior Five Biology</a></li>
                                <li><a href="search-tutor/seniorfivechemistry-1.html" title="Senior Five Chemistry">Senior Five Chemistry</a></li>
                                <li><a href="search-tutor/seniorsixphysics-1.html" title="Senior Six Physics">Senior Six Physics</a></li>
                            </ul>
                        </div>
                    </div>

                    
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="mtop4">
                            <a href="/page/courses" class="btn-link">Check All Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Ends Our-Popular #homepage -->


    <!-- Featured-On #homepage -->
    <section class="featured-on">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <h4>FEATURED ON</h4>
                </div>
                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
                    <ul>
                        <li>
                            <a href="#"><img src="../10.0.0.14/menorah-tutor-sellingcourses/assets/front/images/1.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="../10.0.0.14/menorah-tutor-sellingcourses/assets/front/images/2.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="../10.0.0.14/menorah-tutor-sellingcourses/assets/front/images/3.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="../10.0.0.14/menorah-tutor-sellingcourses/assets/front/images/4.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="../10.0.0.14/menorah-tutor-sellingcourses/assets/front/images/5.png" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="../10.0.0.14/menorah-tutor-sellingcourses/assets/front/images/6.png" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>    <!-- Ends Featured-On #homepage -->

    <!-- Lession-cards #homepage -->
        <section class="lession-cards">
        <div class="container">
            <div class="row row-margin">
                <div class="col-sm-12 ">
                    <h2 class="heading">Recent Added <span>Courses</span></h2>
                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="lession-card">
                        <a href="search-tutor/seniorsixsubict-1-1.html">
                            <figure class="imghvr-zoom-in">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="<?= BASE ?>assets/uploads/courses/24ede-ee7b9-it.jpg" class="img-responsive" alt="">
                                        <figcaption></figcaption>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title" title="Senior Six Sub ICT">Senior Six Sub ICT</h4>
                                        <p class="card-info animated fadeIn" title="This is a full package of Senior Six Sub ICT Syllabus">This is a full package of Senior Six Sub ICT Syllabus</p>
                                    </div>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="lession-card">
                        <a href="search-tutor/seniorfivesubict-1.html">
                            <figure class="imghvr-zoom-in">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="<?= BASE ?>assets/uploads/courses/default-course-img.jpg" class="img-responsive" alt="">
                                        <figcaption></figcaption>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title" title="Senior Five Sub ICT">Senior Five Sub ICT</h4>
                                        <p class="card-info animated fadeIn" title="This is a full package of Senior Five Sub ICT Syllabus">This is a full package of Senior Five Sub ICT Syllabus</p>
                                    </div>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="lession-card">
                        <a href="search-tutor/seniorfivesubmath-1.html">
                            <figure class="imghvr-zoom-in">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="<?= BASE ?>assets/uploads/courses/default-course-img.jpg" class="img-responsive" alt="">
                                        <figcaption></figcaption>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title" title="Senior Five Submaths ">Senior Five Submaths </h4>
                                        <p class="card-info animated fadeIn" title="This is a full package of Senior Five Submaths Syllabus">This is a full package of Senior Five Submaths Syllabus</p>
                                    </div>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="lession-card">
                        <a href="search-tutor/seniorsixsubmath-1.html">
                            <figure class="imghvr-zoom-in">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="<?= BASE ?>assets/uploads/courses/default-course-img.jpg" class="img-responsive" alt="">
                                        <figcaption></figcaption>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title" title="Senior Six Submaths ">Senior Six Submaths </h4>
                                        <p class="card-info animated fadeIn" title="This is a full package of Senior Six Submaths Syllabus">This is a full package of Senior Six Submaths Syllabus</p>
                                    </div>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="lession-card">
                        <a href="search-tutor/seniorsixire-1.html">
                            <figure class="imghvr-zoom-in">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="<?= BASE ?>assets/uploads/courses/default-course-img.jpg" class="img-responsive" alt="">
                                        <figcaption></figcaption>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title" title="Senior Six IRE">Senior Six IRE</h4>
                                        <p class="card-info animated fadeIn" title="This is a full package of Senior Six IRE Syllabus">This is a full package of Senior Six IRE Syllabus</p>
                                    </div>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="lession-card">
                        <a href="search-tutor/seniorfiveire-1.html">
                            <figure class="imghvr-zoom-in">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="<?= BASE ?>assets/uploads/courses/default-course-img.jpg" class="img-responsive" alt="">
                                        <figcaption></figcaption>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title" title="Senior Five IRE">Senior Five IRE</h4>
                                        <p class="card-info animated fadeIn" title="This is a full package of Senior Five IRE Syllabus">This is a full package of Senior Five IRE Syllabus</p>
                                    </div>
                                </div>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Ends Lession-cards #homepage -->

    <!-- How-it-works #homepage -->
    <section class="how-it-works">
	<div class="container">
		<div class="row row-margin">
			<div class="col-sm-12 ">
				<h2 class="heading">
					How Does This <span>Work</span></h2>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="step-block center-block">
					<div class="step-img">
						<img alt="" src="../dev.mindsworthy.com/tutorsci/assets/front/images/step1.png" />
						<div class="step-icon">
							1</div>
					</div>
					<h4>
						Start Your Search</h4>
					<p>
						Search for online courses by category or institute, researcher, author. </p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="step-block center-block">
					<div class="step-img">
						<img alt="" src="../dev.mindsworthy.com/tutorsci/assets/front/images/step2.png" />
						<div class="step-icon">
							2</div>
					</div>
					<h4>
						Review</h4>
					<p>
						Read feedback and ratings from parents and students. Detailed tutor profiles also include photos more.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="step-block center-block">
					<div class="step-img">
						<img alt="" src="../dev.mindsworthy.com/tutorsci/assets/front/images/step3.png" />
						<div class="step-icon">
							3</div>
					</div>
					<h4>
						Schedule</h4>
					<p>
						Communicate directly with tutors to attend course modules. </p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="step-block center-block">
					<div class="step-img">
						<img alt="" src="../dev.mindsworthy.com/tutorsci/assets/front/images/step4.png" />
						<div class="step-icon">
							4</div>
					</div>
					<h4>
						Start Learning</h4>
					<p>
						Find detailed modules available for you to consume.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<p>
	&nbsp;</p>
    <!-- Ends How-it-works #homepage -->

<!-- Testimonial slider -->
<div class="container" id='testimonials'>
    <div class="row row-margin">
        <div class="col-sm-12 ">
            <h2 class="heading">Why Students <span>Love Us</span></h2>
        </div>
        <div class="col-sm-12">
            <div class="testimonial-slider owl-theme">
                                </div>
        </div>
    </div>
</div>
<!-- Ends Testimonial slider -->

<!-- Counter #Homepage -->
    <!-- Counter -->
    <div class="home-counting">
        <div class="container">
            <div class="row row-margin">
                <div class="col-md-12">
                    <h2 class="counter-block">There are <span id="">0</span> Lessons taught already!</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter -->    <!-- Counter #Homepage -->

    <!-- Call-to-register -->
    <section>
        <div class="container">
                <div class="row row-margin">
                    <div class="col-md-12">
                        <h2 class="heading">Are you a <span>Teacher</span></h2>
                        <p class="heading-tag">Looking for a better way to reach your target audience? We can help - Just list with us <strong>For free</strong>.</p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-sm-12">
                        <div class="choose-block center-block">
                            <div class="icon">
                                <img src="../10.0.0.14/menorah-tutor-sellingcourses/assets/front/images/icn-cal.png" alt="">
                                <i class="sub-icon fa fa-check"></i>
                            </div>
                            <p>Boost your sales and scale up all of your classes.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-sm-12">
                        <div class="choose-block center-block">
                            <div class="icon">
                                <img src="../10.0.0.14/menorah-tutor-sellingcourses/assets/front/images/icn-group.png" alt="">
                                <i class="sub-icon fa fa-check"></i>
                            </div>
                            <p>Get a lot of exposure &amp; brand recognition from everyone.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-sm-12">
                        <div class="choose-block center-block">
                            <div class="icon">
                                <img src="../10.0.0.14/menorah-tutor-sellingcourses/assets/front/images/icn-graph.png" alt="">
                                <i class="sub-icon fa fa-check"></i>
                            </div>
                            <p>Participate in various events and school programs whenever you want.</p>
                        </div>
                    </div>
                            </div>
        </div>
    </section>    
    <!-- Call-to-register -->


<link rel="stylesheet" href="<?= BASE ?>assets/front/css/jquery.raty.css">
<script src="<?= BASE ?>assets/front/js/jquery.raty.js"></script>
<script>

    /****** Tutor Avg. Rating  ******/
   $('div.top_tutor_rating').raty({

    path: 'https://ecampus.mhaii.com/assets/front/raty_images',
    score: function() {
      return $(this).attr('data-score');
    },
    readOnly: true
   });

   
</script> 
<!-- Footer -->
    <?php include "parts/footer.php"; ?>
<!-- Ends Footer -->

<!-- Script files -->
<script src="<?= BASE ?>assets/front/js/jquery.js"></script>

<link rel="stylesheet" href="<?= BASE ?>assets/front/css/jquery-ui.css">
<script src="<?= BASE ?>assets/front/js/jquery-ui.js"></script>
<script>
  $( function() {
    $( ".custom_accordion" ).accordion({
        heightStyle: "content"
    });
  } );
</script>

<!--Bootstrap Page-->
<script src="<?= BASE ?>assets/front/js/bootstrap.min.js"></script>
<!--Profile Page-->
<script src="<?= BASE ?>assets/front/js/marquee.js"></script>
<script type="text/javascript" src="<?= BASE ?>assets/front/js/flatpickr.min.js"></script>
<script type="text/javascript" src="<?= BASE ?>assets/front/js/select2.min.js"></script>
<script type="text/javascript" src="<?= BASE ?>assets/front/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= BASE ?>assets/front/js/jRate.min.js"></script>
<script type="text/javascript" src="<?= BASE ?>assets/front/js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="<?= BASE ?>assets/front/js/jquery.smartmenus.js"></script>
<script type="text/javascript" src="<?= BASE ?>assets/front/js/jquery.smartmenus.bootstrap.js"></script>
<script type="text/javascript" src="<?= BASE ?>assets/front/js/flexgrid.js"></script>
<script type="text/javascript" src="<?= BASE ?>assets/front/js/countUp.js"></script>
<script type="text/javascript" src="<?= BASE ?>assets/front/js/jquery.dataTables.min.js"></script>
<!-- Custom Script -->
<script type="text/javascript" src="<?= BASE ?>assets/front/js/main.js"></script>
<!--Gallery-->
<script type="text/javascript" src="<?= BASE ?>assets/front/js/fileinput.min.js"></script>
</body>
</html>
 