<?php include("includes/header.php"); ?>
<?php include("load.php"); ?>
<section id="search"> 
    <div class="container">
        <div class="row  search-wrap align-items-center  justify-content-center ">
            <div class=" col-md-10  justify-content-center">
                <div class="input-group  justify-content-center " id="search-items">
                    <input type="text" class="p-sm-3 p-2" placeholder="Counselling, colleges... " id="search-input">
                    <button class="" type="button" id="search-btn" > <i class="bi bi-search fs-sm-3 fs-4"></i> </button>
                </div>
            </div>
        </div>
    </div>
</section> 
<section class="info-sec " id="info"> 
        <div class="container  " id="info-container-wrap">
            <div class="row   justify-content-center   " id="info-wrap-1">
                <div class="col-sm-6 col-11   info-container " id="info-TTI">
                    <div class="info-card p-sm-5" id="info-card-TTI">
                        <div class="info-card-title">
                            Talk to IITian
                        </div>
                        <div class="info-card-dis">
                        Ask your all college, counselling &  <br> career-related doubt for FREE!
                        </div>
                        <div class="info-card-dis">
                            more colleges coming soon...
                        </div>
                        
                        <div class="info-card-btn text-center " id="info-TTI-btn">
                            <a href="mentors.php" target="_blank" class="btn btn-"> Schedule a Call </a>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-6 col-11    info-container  " id="info-college">
                    <div class="info-card p-sm-5 ">
                        <div class="info-card-title">
                            Colleges
                        </div>
                        <div class="info-card-dis">
                        Colleges Ranking, Cutoff & Placements info in most simplified way
                        </div>
                        <div class="info-card-btn d-flex justify-content-between flex-column  gap-md-5   gap-4 " id="info-college-btn">
                            <div class="box-1  d-flex justify-content-between">
                               <a href='all-college.php?id=#IIT' target="_blank" class="margin-right" > IIT</a>
                               <a href='all-college.php?id=#NIT' target="_blank" class="margin-left" > NIT</a>
                            </div>
                            <div class="box-2  d-flex justify-content-between">
                                <a class="margin-right">Bits</a>
                                <a class="margin-left">More <i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!--<div class="row mt-md-5 mt-0  justify-content-center" id="info-wrap-2">-->
            <!--    <div class=" col-sm-6 col-11  info-container" id="info-counsellingResource">-->
            <!--        <div class="info-card p-sm-5">-->
            <!--            <div class="info-card-title ">-->
            <!--                Counselling Resources-->
            <!--            </div>-->
            <!--            <div class="info-card-dis">-->
            <!--            Coming Soon...-->
            <!--            </div>-->
            <!--            <div class="info-card-btn d-flex justify-content-between flex-column gap-sm-5  gap-4 " id="info-counsellingResource-btn">-->
            <!--                <div class="box-1  d-flex justify-content-between">-->
            <!--                    <a class="margin-right">Josaa</a>-->
            <!--                    <a class="margin-left">PDF</a>-->
            <!--                </div>-->
                            
            <!--                <div class="box-2  d-flex justify-content-between">-->
            <!--                    <a class="margin-right">Cutoff</a>-->
            <!--                    <a class="margin-left">Doc</a>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-sm-6 col-11   info-container" id="info-popularExam">-->
            <!--        <div class="info-card p-sm-5 ">-->
            <!--            <div class="info-card-title">-->
            <!--                Popular Exams-->
            <!--            </div>-->
            <!--            <div class="info-card-dis">-->
            <!--            Coming Soon...-->
            <!--            </div>-->
            <!--            <div class="info-card-btn d-flex justify-content-between flex-column  gap-sm-5  gap-4 " id="iinfo-popularExam-btn">-->
            <!--                <div class="box-1  d-flex justify-content-between ">-->
            <!--                    <a class="margin-righ ">JEE</a>-->
            <!--                    <a class="margin-left ">NEET</a>-->
            <!--                </div>-->
            <!--                <div class="box-2  d-flex justify-content-between">-->
            <!--                    <a class="margin-right">Wb JEE</a>-->
            <!--                    <a class="margin-left">More <i class="bi bi-chevron-right"></i></a>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--</div>-->
            
            
        </div> 
</section> 
<section class="mt-5 pb-5 " id="TTI"> 
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-8 col-md-8 col-sm-8 col-10   py-sm-5 pt-4 text-center   " id="TTI-heading">
                <h2 class="section-heading mb-sm-4 mb-3" >Talk to IITian</h2>
                <p class="section-dis" > Ask your doubt directly from Hundred plus IITians and NITians for FREE! </p>
            </div>
        </div>
        <div class="row mt-3 justify-content-center ">
            <div class="col-12" id="TTI-card-fetch">
                <div  class="owl-carousel owl-theme">
                    <?php echo $Create->getMentorDetails(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-sm-5 pb-sm-5  mt-3 pb-3 " id="topCollege"> 
     <div class="container">
            <div class="row   justify-content-center ">
                <div class=" mb-3 col-lg-8 col-md-8 col-sm-8 col-10  py-sm-5 pt-4 text-center" id="topCollege-section-heading">
                    <h2  class=" mb-sm-4 mb-3 section-heading" >Top Colleges</h2>
                    <p class="section-dis" >Top colleges Info, Ranking, Cutoff & Placements</p>
                </div>
                <div>
                    <button onclick="getTopCollegeIIT()" value="iit" id="iit-top-college-btn">IIT</button>
                    <button onclick="getTopCollegeNIT()" value="nit" id="nit-top-college-btn">NIT</button>
                </div>
                
            </div>

            <div class="row mt-3 justify-content-center" id="iit-sec">
                <div class="col-12">
                    <div  class="owl-carousel owl-theme" id="top-college-fetch">

                    <?php echo $Create->getIITCollegeDetailsHome(); ?>



                    <a href='all-college.php?id=#NIT' target= '_blank'> 
                        <div class='card text-center topCollege-card-item' data-collegeId='$collegeId' id='topCollege-card'>
                            <div class='card-body topCollege-card-body'>
                                    <div class='imageHover imagecol'>
                                            <div>
                                            <figure><img src='assets/images/top_college_all.jpeg' alt='$this->collegeNameShort' class='img-fluid rounded' id='topCollege-img'></figure>
                                            </div>
                                    </div>
                                    <p class='mt-3 card-title topCollege-card-item-collegeName'>SEE ALL</p>
                                    <p class='mt-2 card-title topCollege-card-item-collegeAddress'>IITs</p>
                            </div>
                         </div> 
                    </a> 

                    </div>
                </div>
            </div>

            <div class="row mt-3 justify-content-center" id="nit-sec">
                <div class="col-12">
                    <div  class="owl-carousel owl-theme" id="top-college-fetch">

                    <?php echo $Create->getNITCollegeDetailsHome(); ?>

                    <a href='all-college.php?id=#NIT' target= '_blank'> 
                        <div class='card text-center topCollege-card-item' data-collegeId='$collegeId' id='topCollege-card'>
                            <div class='card-body topCollege-card-body'>
                                    <div class='imageHover imagecol'>
                                            <div>
                                            <figure><img src='assets/images/top_college_all.jpeg' alt='$this->collegeNameShort' class='img-fluid rounded' id='topCollege-img'></figure>
                                            </div>
                                    </div>
                                    <p class='mt-3 card-title topCollege-card-item-collegeName'>SEE ALL</p>
                                    <p class='mt-2 card-title topCollege-card-item-collegeAddress'>NITs</p>
                            </div>
                         </div> 
                    </a> 

                    </div>
                </div>
            </div>

    </div>
</section>

<script>
    function getTopCollegeIIT() {
        document.getElementById('iit-sec').style.display = 'block';
        document.getElementById('nit-sec').style.display = 'none';
        document.getElementById('iit-top-college-btn').style.backgroundColor = '#8dedc2';
        document.getElementById('nit-top-college-btn').style.backgroundColor = '#fff';
    }

    function getTopCollegeNIT() {
        document.getElementById('nit-sec').style.display = 'block';
        document.getElementById('iit-sec').style.display = 'none';
        document.getElementById('nit-top-college-btn').style.backgroundColor = '#8dedc2';
        document.getElementById('iit-top-college-btn').style.backgroundColor = '#fff';
    }
    document.getElementById('iit-top-college-btn').style.backgroundColor = '#8dedc2';
    document.getElementById('nit-sec').style.display = 'none';

</script>

<?php include("includes/footer.php") ; ?>