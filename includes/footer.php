<footer>
<section class="mt-5 py-5 "> 
        <div class="container">
            <div class="row  justify-content-center">
                <div class="col">
                    <div class="footer-logo mb-3">
                        <a href="index.php">
                             <img src="assets/images/endfrictionlogo/EndFriction_white_logo.png"  class="img-fluid" alt="EndFriction">
                             </a>
                    </div>
                    <div class="footer-address">
                        <p> <strong>Endfriction </strong> connects juniors directly with the seniors studying in premier colleges of India like IIT and NIT for one-to-one guidance.</p>
                    </div>
                    <div class="footer-social">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-twitter"></i>
                    <i class="bi bi-youtube"></i>
                    </div>
                </div>
                <div class="col footer-link">
                    <h4>Important Links</h4>
                    <a href="mentors.php" target="_blank">Talk to IITian</a>
                    <a href="all-college.php" target="_blank">All Colleges </a>
                    <a href="about.php">About</a>
                    <a  href="mailto:admin@endfriction.com">Contact</a>
                    <a href="mentors.php?id=#faq-endfriction">FAQ</a>
                    <a href="https://forms.gle/Jcry41dK7RayeKg49" target="_blank">Feedback/query</a>
                </div>
            </div>
        </div>
</section> 
</footer>

    <script src="assets/js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
<script type="text/javascript">
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
            })
        })()
</script>
<script type="text/javascript">
    $(document).ready(function(){
            $(document).on('click','.mentorCard',function(){
                var mentorlodaId = $(this).data("mentorid");
                $.post('http://www.endfriction.com/ajax/modelimage.php',{mentoridinfo:mentorlodaId},function(data){
                    document.getElementById("modal-details").innerHTML = data;
                });
                
                $.post('http://endfriction.com/ajax/modelimage.php',{mentoridinfo:mentorlodaId},function(data){
                    document.getElementById("modal-details").innerHTML = data;
                });
                $(document).on('click','#modal-btn',function(){
                var form = document.getElementById('modalform')
                form.addEventListener('submit',function(event){
                    event.preventDefault();
                    var fullname= document.getElementById('user-name').value
                    var email= document.getElementById('user-email').value
                    var phone= document.getElementById('user-phone').value
                    var time= document.getElementById('modal-select').value
                    var city= document.getElementById('user-city').value
                    var doubt= document.getElementById('modal-textArea').value
                    var mentorId=mentorlodaId

                    var langAll = document.getElementsByName('language');
                    var language;
                    for(var i = 0; i < langAll.length; i++){
                        if(langAll[i].checked){language = langAll[i].value;}
                    }

                    
                    
                    if(phone.length == 10) {
                        $.post('http://endfriction.com/ajax/modaltesting.php',{mentorinfo:mentorId,emailinfo:email,phoneinfo:phone,timeinfo:time,fullnameinfo:fullname,cityinfo:city,languageinfo:language,doubtinfo:doubt}).done(function(data){
                        if(data == true) { location.href = "mentors.php"; }
                        })

                    }
                    else{
                        document.getElementById("invalidfeedback-phone").innerHTML = "Please enter a valid Phone Number"
                    }
                    
                    if(phone.length == 10) {
                        $.post('http://www.endfriction.com/ajax/modaltesting.php',{mentorinfo:mentorId,emailinfo:email,phoneinfo:phone,timeinfo:time,fullnameinfo:fullname,cityinfo:city,languageinfo:language,doubtinfo:doubt}).done(function(data){
                        if(data == true) { location.href = "mentors.php"; }
                        })

                    }
                    else{
                        document.getElementById("invalidfeedback-phone").innerHTML = "Please enter a valid Phone Number"
                    }
                    
                });
            });
        });
    });
</script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 15,
        nav: true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        dots: false,
        responsive: {
            0: {
                items: 2,
                margin: 15,
                nav: false,
                autoplayTimeout:2500,
                autoplayHoverPause:true,
                dots: false,
            },
            576: {
                items: 3
            },
            992: {
                items: 4 
            }
        }
    })
</script>
</body>
</html>