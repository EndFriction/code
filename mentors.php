<?php include("includes/header.php"); ?>
<?php include("load.php"); ?>


<section class="py-sm-5 py-3" id="howItWorks">

    <div class="container">
        <div class="row">
            <div class="row justify-content-center ">
                <div class="col text-center my-3 " id="howit-works">
                    <h2 class="howit-works-heading my-sm-5 my-3">How it works </h2>
                </div>
            </div>


            <div class="col">
                <div class="row hiw-wraper text-center">
                    <div class="col-sm-4 col-10  hIW-box " id="box-1">

                        <div class="box-img" id="box-1-img">
                            <img src="assets/images/choose.png" class="img-fluid" alt="choose a mentor">
                        </div>

                        <div class=" box-num  " id="box-1-num">
                            1
                        </div>

                        <div class="box-text" id="box-1-text">
                            Choose a mentor of your choice
                        </div>
                    </div>

                    <div class="col-sm-4 col-10 hIW-box " id="box-1">
                        <div class="box-img" id="box-1-img">
                            <img src="assets/images/enterdetails.png" class="img-fluid" alt="choose a mentor">
                        </div>

                        <div class=" box-num  " id="box-1-num">
                            2
                        </div>

                        <div class="box-text" id="box-1-text">
                            Enter details and confirm Scheduled with your chosen mentor

                        </div>
                    </div>


                    <div class="col-sm-4 col-10 hIW-box " id="box-1">

                        <div class="box-img" id="box-1-img">
                            <img src="assets/images/waitformentor.png" class="img-fluid" alt="choose a mentor">
                        </div>

                        <div class=" box-num  " id="box-1-num">
                            3
                        </div>

                        <div class="box-text" id="box-1-text">
                            You will receive a call back from the mentor at the selected schedule
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="mentor">
    <div class="container">

        <div class="row justify-content-center ">
            <div class="col-lg-8 col-md-8 col-sm-8 col-10   py-sm-5 pt-4 text-center   " id="TTI-heading">
                <h2 class="section-heading mb-sm-4 mb-3"> Your Mentors </h2>
                <p class="section-dis"> </p>
            </div>
        </div>


        <div class="row mt-3 justify-content-center ">
            <div class="col-12 d-flex flex-wrap justify-content-evenly">


                <?php echo $Create->getMentorScheduleDetails(); ?>


            </div>
        </div>

    </div>
</section>


<section id="faq-endfriction">
    <div class="container">

        <div class="row justify-content-center ">
            <div class="col-lg-8 col-md-8 col-sm-8 col-10   py-sm-5 py-4 text-center   " id="TTI-heading">
                <h2 class="section-heading mb-sm-4 mb-3  mt-sm-0 mt-3"> Frequently Asked Doubt </h2>

            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-11">

                <div class="accordion" id="faqAccordion">
                    

                <?php echo $Create->getFaqDetails() ;?>



                </div>
            </div>
        </div>

    </div>
</section>


<div class="modal fade" id="mentor-Modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div id="modal-details"> </div>

                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="modalform" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="mb-3 modal-input">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="user-name" name="fullname" required placeholder=" ">
                            <label for="user-name" class="col-form-label">Full Name</label>
                            <div class="valid-feedback"> Looks good! </div>
                            <div class="invalid-feedback"> Please enter a valid fullname.</div>
                        </div>

                    </div>

                    <div class="mb-3 modal-input ">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="user-email" name="email" required placeholder=" ">
                            <label for="user-email" class="col-form-label">Email address</label>
                            <div class="valid-feedback"> Looks good! </div>
                            <div class="invalid-feedback"> Please enter a valid email, you will get meet link here.</div>
                        </div>
                    </div>
                    
                      <div class="mb-3 modal-input ">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="user-phone" name="phone" required placeholder=" ">
                            <label for="user-phone" class="col-form-label">Phone Number</label>
                            <span id="invalidfeedback-phone"> </span>
                        </div>
                    </div>

                    <div class="mb-3 d-flex flex-row justify-content-between align-items-center " id="modal-time-grp">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="user-city" name="city" required placeholder=" ">
                            <label for="user-city" class="col-form-label">Your City</label>
                            <div class="valid-feedback"> Looks good! </div>
                            <div class="invalid-feedback"> Please enter a valid city.</div>
                        </div>

                        <select class="form-select form-select-lg mb-3" id="modal-select" required name="time">
                            <option disabled selected value="">Select Time</option>
                            <option value="10-12">10am-12pm</option>
                            <option value="12-2">12pm-2pm</option>
                            <option value="2-4">2pm-4pm</option>
                            <option value="4-6">4pm-6pm</option>
                        </select>

                    </div>
  


                    <div class="mb-3 modal-radio-input">
                        <h6>Preferred language of interaction</h6>
                        <div class="form-check form-check-inline" id="modal-lang">
                            <input class="form-check-input" type="radio" name="language" required id="modal-radio-hin" value="hindi">
                            <label class="form-check-label" for="modal-radio-hin"> Hindi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="language" id="modal-radio-eng" value="english">
                            <label class="form-check-label" for="modal-radio-eng"> English</label>
                        </div>
                    </div>

                    <div class="mb-3 modal-input">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder=" " id="modal-textArea" name="doubt"></textarea>
                            <label for="modal-textArea">Write your doubt (optional)...</label>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <input type="submit" name="confirmSchedule" value="Confirm Schedule" id="modal-btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>