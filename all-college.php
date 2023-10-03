<?php include("includes/header.php");?>
<?php include("load.php"); ?>

<section id="IIT">
    <div class="container-fluid">

        <div class="row justify-content-center ">
            <div class="col-lg-8 col-md-8 col-sm-8 col-10   py-sm-5 pt-4 text-center   " id="TTI-heading">
                <h2 class="section-heading mb-sm-4 mb-3"> IIT </h2>
                <p class="section-dis" >All IIT - Info, Ranking, Cutoff & Placements 2022 - Endfriction.</p>
            </div>
        </div>

        <div class="row mt-3 justify-content-center ">
            <div class="col d-flex flex-wrap justify-content-evenly" id="all-college-fetch">

                <?php echo $Create->getIITCollegeDetailsCollege(); ?>

            </div>
        </div>

    </div>
</section>


<section id="NIT">
    <div class="container-fluid">

        <div class="row justify-content-center ">
            <div class="col-lg-8 col-md-8 col-sm-8 col-10   py-sm-5 pt-4 text-center   " id="TTI-heading">
                <h2 class="section-heading mb-sm-4 mb-3"> NIT </h2>
                <p class="section-dis" >All NIT - Info, Ranking, Cutoff & Placements 2022 - Endfriction.</p>
            </div>
        </div>


        <div class="row mt-3 justify-content-center ">
            <div class="col d-flex flex-wrap justify-content-evenly" id="all-college-fetch">

                <?php echo $Create->getNITCollegeDetailsCollege(); ?>

            </div>
        </div>


    </div>
</section>

<?php include("includes/footer.php");?>


