<?php DEFINE("BASE","views/"); ?>
<?php include "parts/head.php"; ?>
<body>
    <!-- Top bar -->
    <?php include "parts/top-nav.php"; ?>
    <!-- Ends Topbar -->

    <!-- Nagigation -->
    <?php include "parts/nav.php"; ?>
    <!-- Ends Navigation -->    

    <!-- Page Title Wrap  -->
    <div class="page-title-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Wrap  -->

<!-- News Scroller  -->    <!-- News Scroller  -->

        <!-- Dashboard Section  -->
        <section class="dashboard-section">
            <div class="container">
                <div class="row offcanvas offcanvas-right row-margin">

                    <div class="col-xs-8 col-sm-3 sidebar-offcanvas" id="sidebar">
        <div class="panel-group dashboard-menu" id="accordion">
            <div class="dashboard-profile">
                <h3>Categories</h3>
            </div>
            <ul class="cat-list">
                <li class=""><a href="/page/courses"> All Courses</a></li>
                <li class="active" title="Primary School Subjects" ><a href="primaryschoolsubjects-1-1.html"> Primary School Subjects</a></li>
                <li class="" title="O-Level Subjects" ><a href="o-levelsubjects-1.html"> O-Level Subjects</a></li>
                <li class="" title="A-Level Subjects" ><a href="a-levelsubjects-1.html"> A-Level Subjects</a></li>
            </ul>
        </div>
        <!-- /.panel-group -->
    </div>

    <div class="col-xs-12 col-sm-9 dashboard-content ">
        <!-- Breadcrumb -->
        <ol class="breadcrumb dashcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Courses By Catgory</li>
        </ol>
        <!-- Breadcrumb ends -->

        <!-- Dashboard Panel -->
        <div class="dashboard-panel">
            <div class="row">
                <div class="col-sm-12">
                    <h4>Courses In Primary School Subjects (28)</h4>
                </div>
            </div>
            <hr>
                <div id="course_list">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="lession-card">
                            <a href="<?= BASE ?>search-tutor/primaryoneenglish-1.html">
                                <figure class="imghvr-zoom-in">
                                    <div class="card">
                                        <div class="card-img all-c">
                                            <img src="<?= BASE ?>assets/uploads/courses/865d1-4b833-16004.jpg" class="img-responsive" alt="">
                                            <figcaption></figcaption>
                                        </div>
                                        <div class="card-content opc">
                                            <h4 class="card-title" title="Primary One English">Primary One English</h4>
                                            <p class="card-info animated fadeIn" title="This is a full package of primary one English Subject">This is a full package of primary one English Subject</p>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="lession-card">
                            <a href="<?= BASE ?>search-tutor/primaryonemathematics-">
                                <figure class="imghvr-zoom-in">
                                    <div class="card">
                                        <div class="card-img all-c">
                                            <img src="<?= BASE ?>assets/uploads/courses/d3a45-95cbd-mathematics.jpg" class="img-responsive" alt="">
                                            <figcaption></figcaption>
                                        </div>
                                        <div class="card-content opc">
                                            <h4 class="card-title" title="Primary One Mathematics ">Primary One Mathematics </h4>
                                            <p class="card-info animated fadeIn" title="This is a full package of Primary one Mathematics ">This is a full package of Primary one Mathematics </p>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="lession-card">
                            <a href="<?= BASE ?>search-tutor/primaryonesceince-1">
                                <figure class="imghvr-zoom-in">
                                    <div class="card">
                                        <div class="card-img all-c">
                                            <img src="<?= BASE ?>assets/uploads/courses/865d1-4b833-16004.jpg" class="img-responsive" alt="">
                                            <figcaption></figcaption>
                                        </div>
                                        <div class="card-content opc">
                                            <h4 class="card-title" title="Primary One Science">Primary One Science</h4>
                                            <p class="card-info animated fadeIn" title="This is a full package of primary one Science Subject">This is a full package of primary one Science Subject</p>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="lession-card">
                            <a href="<?= BASE ?>search-tutor/primaryonesocialstudies-1">
                                <figure class="imghvr-zoom-in">
                                    <div class="card">
                                        <div class="card-img all-c">
                                            <img src="<?= BASE ?>assets/uploads/courses/865d1-4b833-16004.jpg" class="img-responsive" alt="">
                                            <figcaption></figcaption>
                                        </div>
                                        <div class="card-content opc">
                                            <h4 class="card-title" title="Primary One Social Studies">Primary One Social Studies</h4>
                                            <p class="card-info animated fadeIn" title="This is a full package of primary one Social Studies (SST) Subject">This is a full package of primary one Social Studies (SST) Subject</p>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="lession-card">
                            <a href="<?= BASE ?>search-tutor/primarytwoenglish-1">
                                <figure class="imghvr-zoom-in">
                                    <div class="card">
                                        <div class="card-img all-c">
                                            <img src="<?= BASE ?>assets/uploads/courses/865d1-4b833-16004.jpg" class="img-responsive" alt="">
                                            <figcaption></figcaption>
                                        </div>
                                        <div class="card-content opc">
                                            <h4 class="card-title" title="Primary Two English">Primary Two English</h4>
                                            <p class="card-info animated fadeIn" title="This is a full package of primary two English Subject">This is a full package of primary two English Subject</p>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="lession-card">
                            <a href="<?= BASE ?>search-tutor/primarytwomathematics-1">
                                <figure class="imghvr-zoom-in">
                                    <div class="card">
                                        <div class="card-img all-c">
                                            <img src="<?= BASE ?>assets/uploads/courses/865d1-4b833-16004.jpg" class="img-responsive" alt="">
                                            <figcaption></figcaption>
                                        </div>
                                        <div class="card-content opc">
                                            <h4 class="card-title" title="Primary Two Mathematics">Primary Two Mathematics</h4>
                                            <p class="card-info animated fadeIn" title="This is a full package of primary two Mathematics Subject">This is a full package of primary two Mathematics Subject</p>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="lession-card">
                            <a href="<?= BASE ?>search-tutor/primarytwoscience-1">
                                <figure class="imghvr-zoom-in">
                                    <div class="card">
                                        <div class="card-img all-c">
                                            <img src="<?= BASE ?>assets/uploads/courses/865d1-4b833-16004.jpg" class="img-responsive" alt="">
                                            <figcaption></figcaption>
                                        </div>
                                        <div class="card-content opc">
                                            <h4 class="card-title" title="Primary Two Science">Primary Two Science</h4>
                                            <p class="card-info animated fadeIn" title="This is a full package of primary two Science Subject">This is a full package of primary two Science Subject</p>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="lession-card">
                            <a href="<?= BASE ?>search-tutor/primarytwosocialstudies-1">
                                <figure class="imghvr-zoom-in">
                                    <div class="card">
                                        <div class="card-img all-c">
                                            <img src="<?= BASE ?>assets/uploads/courses/865d1-4b833-16004.jpg" class="img-responsive" alt="">
                                            <figcaption></figcaption>
                                        </div>
                                        <div class="card-content opc">
                                            <h4 class="card-title" title="Primary Two Social Studies">Primary Two Social Studies</h4>
                                            <p class="card-info animated fadeIn" title="This is a full package of primary two Social Studies (SST) Subject">This is a full package of primary two Social Studies (SST) Subject</p>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="lession-card">
                            <a href="<?= BASE ?>search-tutor/primarythreeenglish-1">
                                <figure class="imghvr-zoom-in">
                                    <div class="card">
                                        <div class="card-img all-c">
                                            <img src="<?= BASE ?>assets/uploads/courses/865d1-4b833-16004.jpg" class="img-responsive" alt="">
                                            <figcaption></figcaption>
                                        </div>
                                        <div class="card-content opc">
                                            <h4 class="card-title" title="Primary Three English">Primary Three English</h4>
                                            <p class="card-info animated fadeIn" title="This is a full package of primary Three English Subject">This is a full package of primary Three English Subject</p>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="lession-card">
                            <a href="<?= BASE ?>search-tutor/primarythreemathematics-1-1">
                                <figure class="imghvr-zoom-in">
                                    <div class="card">
                                        <div class="card-img all-c">
                                            <img src="<?= BASE ?>assets/uploads/courses/865d1-4b833-16004.jpg" class="img-responsive" alt="">
                                            <figcaption></figcaption>
                                        </div>
                                        <div class="card-content opc">
                                            <h4 class="card-title" title="Primary Three Mathematics">Primary Three Mathematics</h4>
                                            <p class="card-info animated fadeIn" title="This is a full package of primary Three Mathematics Subject">This is a full package of primary Three Mathematics Subject</p>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="lession-card">
                            <a href="<?= BASE ?>search-tutor/primarythreescience-1">
                                <figure class="imghvr-zoom-in">
                                    <div class="card">
                                        <div class="card-img all-c">
                                            <img src="<?= BASE ?>assets/uploads/courses/865d1-4b833-16004.jpg" class="img-responsive" alt="">
                                            <figcaption></figcaption>
                                        </div>
                                        <div class="card-content opc">
                                            <h4 class="card-title" title="Primary Three Science">Primary Three Science</h4>
                                            <p class="card-info animated fadeIn" title="This is a full package of primary Three Science Subject">This is a full package of primary Three Science Subject</p>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="lession-card">
                            <a href="<?= BASE ?>search-tutor/primarythreesocialstudies-1">
                                <figure class="imghvr-zoom-in">
                                    <div class="card">
                                        <div class="card-img all-c">
                                            <img src="<?= BASE ?>assets/uploads/courses/865d1-4b833-16004.jpg" class="img-responsive" alt="">
                                            <figcaption></figcaption>
                                        </div>
                                        <div class="card-content opc">
                                            <h4 class="card-title" title="Primary Three Social Studies">Primary Three Social Studies</h4>
                                            <p class="card-info animated fadeIn" title="This is a full package of primary Three Social Studies(SST) Subject">This is a full package of primary Three Social Studies(SST) Subject</p>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="lession-card">
                            <a href="<?= BASE ?>search-tutor/primaryfourenglish-1">
                                <figure class="imghvr-zoom-in">
                                    <div class="card">
                                        <div class="card-img all-c">
                                            <img src="<?= BASE ?>assets/uploads/courses/865d1-4b833-16004.jpg" class="img-responsive" alt="">
                                            <figcaption></figcaption>
                                        </div>
                                        <div class="card-content opc">
                                            <h4 class="card-title" title="Primary Four English">Primary Four English</h4>
                                            <p class="card-info animated fadeIn" title="This is a full package of primary Four English Subject">This is a full package of primary Four English Subject</p>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="lession-card">
                            <a href="<?= BASE ?>search-tutor/primaryfourmathematics-1">
                                <figure class="imghvr-zoom-in">
                                    <div class="card">
                                        <div class="card-img all-c">
                                            <img src="<?= BASE ?>assets/uploads/courses/865d1-4b833-16004.jpg" class="img-responsive" alt="">
                                            <figcaption></figcaption>
                                        </div>
                                        <div class="card-content opc">
                                            <h4 class="card-title" title="Primary Four Mathematics">Primary Four Mathematics</h4>
                                            <p class="card-info animated fadeIn" title="This is a full package of primary Four Mathematics Subject">This is a full package of primary Four Mathematics Subject</p>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="lession-card">
                            <a href="<?= BASE ?>search-tutor/primaryfourscience-1-1-1">
                                <figure class="imghvr-zoom-in">
                                    <div class="card">
                                        <div class="card-img all-c">
                                            <img src="<?= BASE ?>assets/uploads/courses/865d1-4b833-16004.jpg" class="img-responsive" alt="">
                                            <figcaption></figcaption>
                                        </div>
                                        <div class="card-content opc">
                                            <h4 class="card-title" title="Primary Four Science">Primary Four Science</h4>
                                            <p class="card-info animated fadeIn" title="This is a full package of primary Four Science Subject">This is a full package of primary Four Science Subject</p>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="lession-card">
                            <a href="<?= BASE ?>search-tutor/primaryfoursocialstudies-1">
                                <figure class="imghvr-zoom-in">
                                    <div class="card">
                                        <div class="card-img all-c">
                                            <img src="<?= BASE ?>assets/uploads/courses/865d1-4b833-16004.jpg" class="img-responsive" alt="">
                                            <figcaption></figcaption>
                                        </div>
                                        <div class="card-content opc">
                                            <h4 class="card-title" title="Primary Four Social Studies">Primary Four Social Studies</h4>
                                            <p class="card-info animated fadeIn" title="This is a full package of primary four Social Studies(SST) Subject">This is a full package of primary four Social Studies(SST) Subject</p>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row" id="div_load_more">
                    <div class="col-sm-12 text-center">
                        <div class="load-more" onclick="load_more();">
                            <input type="hidden" name="limit" id="limit" value="16" />
                            <input type="hidden" name="offset" id="offset" value="16" />
                            <input type="hidden" name="category_slug" id="category_slug" value="primaryschoolsubjects-1-1" />
                            <a class="btn-link" id="btn_load_more"> Load More</a>
                        </div>
                    </div>
                </div>
                
        </div>


                <!-- Ends Dashboard Panel -->
            </div>
        </div>
    </div>
</section>
<!-- Ends Dashboard section  -->

    <script>
    function load_more()
    {
        $.ajax({
            url:"https://ecampus.mhaii.com/home/load_more_courses",
            data:{
              offset        : $('#offset').val(),
              limit         : $('#limit').val(), 
              category_slug : $('#category_slug').val()
            },
            type:"post", 
            beforeSend: function() {
                $('#btn_load_more')('<i class="fa fa-spinner"></i> Loading');
            },
            success :function(data){

                $('#btn_load_more')(' Load More');

                dta = $.parseJSON(data);

                if(dta.result == "\n") {

                    $('#div_load_more').html('You have reached end of the list.');

                } else {

                    $(dta.result).hide().appendTo("#course_list").fadeIn(1000);
                    $('#offset').val(dta.offset);
                    $('#limit').val(dta.limit);
                }
            }
        })
    }
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
 