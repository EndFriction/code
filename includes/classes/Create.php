<?php

class Create {
       private $pdo;
       public $collegeNameShort;
       public function __construct($pdo) {
              $this->pdo = $pdo;
       }

       public function getModalCard($mentorId)
       {
              $query= $this->pdo->prepare("SELECT * FROM  mentors WHERE mentorId = ?");
              $query->bindvalue(':mentorId', $mentorId);
              $query->execute(array($mentorId));

              $row=$query->fetch(PDO::FETCH_ASSOC);
              $mentorname=$row["mentorName"];
              $mentorprofilepic=$row["mentorProfileImage"];
              $mentorbranchname=$row["mentorCollegeName"];

              return "
                     <div class='modal-img-and-dis d-flex flex-row justify-content-center align-items-center' id='$mentorId'>
                            <img src=$mentorprofilepic alt='Mentor image  class='' id='modal-mentor-img'>
                            <div class='modal-mentor-card-dis'>
                                   <p class='  card-title modal-mentor-name'> $mentorname</p>
                                   <p class='  card-title modal-mentor-collageName'></p>
                                   <p class=''  card-title modal-mentor-branchName'> $mentorbranchname</p>
                            </div>
                     </div>";
       }

       public function getMentorDetails() {
              $query= $this->pdo->prepare('SELECT * FROM  mentors ');
              $query->execute();
              $htmldetails='';

              while($row=$query->fetch(PDO::FETCH_ASSOC)) {
                      $htmldetails.=$this->getMentorCardHtml($row);
              }
              return $htmldetails;
       }

       public function getMentorCardHtml($row) {
          $data= new Mentor($row);
          $mentorId = $data->getMentorId();
          $mentorName=$data->getMentorName();
          $mentorImage=$data->getMentorImage();
          $mentorBranchName=$data->getMentorBranchName();
          $mentorCollegeName=$data->getMentorCollegeName();

              return "<a href='mentors.php?id=#$mentorId' target='_blank'> <div class='item'>
              <div class=' card text-center  TTI-card-item'>
                            <div class=' card-body TTI-card-body'>
                            <img src= $mentorImage alt='IITians on Call' class='img-fluid' id='TTI-img'>
                            <p class=' mt-2 card-title TTI-card-item-name'> $mentorName</p>
                            <p class=' mb-2 card-title TTI-card-item-collegeName'> $mentorCollegeName</p>
                            <button href='#' class='TTI-card-item-btn'>Schedule Now</button>
              </div>
          </div>
          </div> </a>";
       }

// ===================== Mentor TTI Schedule page ===============================================================
       public function schedule($mentorId, $fullname, $email, $phone, $city, $time,  $language, $doubt) {
              $query = $this->pdo->prepare('INSERT INTO  schedule (mentorId, fullname, email, phone, city, time, language, doubt) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)');
              $query->bindvalue(':mentorId', $mentorId);
              $query->bindvalue(':fullname', $fullname);
              $query->bindvalue(':email', $email);
              $query->bindvalue(':phone', $phone);
              $query->bindvalue(':city', $city);
              $query->bindvalue(':time', $time);
              $query->bindvalue(':language', $language);
              $query->bindvalue(':doubt', $doubt);
              $query->execute(array($mentorId, $fullname, $email, $phone, $city, $time, $language, $doubt));
              return true;
       }

       public function getMentorScheduleCardHtml($row) {
          $data= new Mentor($row);
          $mentorId = $data->getMentorId();
          $mentorName=$data->getMentorName();
          $mentorImage=$data->getMentorImage();
          $mentorBranchName=$data->getMentorBranchName();
          $mentorCollegeName=$data->getMentorCollegeName();
      
              return "<div class=' card text-center mentor-card-item mentorCard' data-mentorid = $mentorId  id='$mentorId' >
                            <div class=' card-body mentor-card-body'>
                            <div class='card-img-and-dis'>
                                   <img src=$mentorImage alt='IITians on Call'  class='' id='mentor-img'>
                                   <div class='mentor-card-dis'>
                                   <p class=' mt-2 card-title mentor-card-item-name'>$mentorName</p>
                                   <p class=' mb-2 card-title mentor-card-item-collageName'>$mentorCollegeName</p>
                                   <p class=' mb-2 card-title mentor-card-item-branchName'>$mentorBranchName</p>
                                   </div>
                            </div>
                            <button  class='mentor-card-item-btn'  data-bs-toggle='modal'  data-bs-target='#mentor-Modal'>Schedule call</button>
                            </div>
                     </div>";
       }

       public function getMentorScheduleDetails() {
              $query= $this->pdo->prepare('SELECT * FROM  mentors ');
              $query->execute();

              $htmldetails='';

              while($row=$query->fetch(PDO::FETCH_ASSOC)) {
                      $htmldetails.=$this->getMentorScheduleCardHtml($row);
              }
              return $htmldetails;
       }


// ===================== Talk to IITian FAQ ===============================================================
       public function getFaqDetails() {
              $query= $this->pdo->prepare('SELECT * FROM faq');
              $query->execute();

              $htmldetails='';

              while($row=$query->fetch(PDO::FETCH_ASSOC)) {
                      $htmldetails.=$this->getFaqQuestionHtml($row);
              }
              return $htmldetails;
       }

       public function getFaqQuestionHtml($row) {
          $data= new Faq($row);
          $faqQuestion = $data->getFaqQuestion();
          $faqAnswer=$data->getFaqAnswer();
          $faqPreferenceId=$data->getFaqPreferenceId();
          $faqShow=$data->getFaqShow();

              return "<div class='accordion-item'>
                            <h2 class='accordion-header' id='heading$faqPreferenceId'>
                                   <button class='accordion-button ' type='button' data-bs-toggle='collapse' data-bs-target='#collapse$faqPreferenceId' aria-expanded='true' aria-controls='collapse$faqPreferenceId'>
                                   $faqQuestion
                                   </button>
                            </h2>

                            <div id='collapse$faqPreferenceId' class='accordion-collapse collapse $faqShow ' aria-labelledby='heading$faqPreferenceId' data-bs-parent='#faqAccordion'>
                                   <div class='accordion-body'>
                                   $faqAnswer
                                   </div>
                            </div>
                     </div>";
       }

// =============================About contri=========================
              public function getContributorDetails() {

                     $query= $this->pdo->prepare("SELECT * FROM  contributors ORDER BY RAND() ");
                     $query->execute();

                     $html = "";
                     while ($row=$query->fetch(PDO::FETCH_ASSOC)) {
                            $html.=$this->getContributorHtml($row);
                     }
                     return $html;
              }

              public function getContributorHtml($row) {

                     $contributorsImg = $row['contributorImage'];
                     $contributorsName = $row['contributorName'];
                     $contributorsSocial = $row['contributorSocial'];

                     return " <a href=$contributorsSocial target='_blank' id='contributorNameSocial'>  <div class='item'>
                                   <div class=' contributor-img'>
                                          <img src=$contributorsImg class='img-fluid rounded-circle'  width='50px' id=''>
                                   </div>
                                     <p>$contributorsName</p>  
                            </div>  </a>";
              }

// =====================Home Page Top College Details Function ===============================================================

       public function getIITCollegeDetailsHome() {

              $query= $this->pdo->prepare("SELECT * FROM  iit_college LIMIT 5");
              $query->execute();
              
              $htmlcollege = "";
              while ($row=$query->fetch(PDO::FETCH_ASSOC)) {
                    
                     $htmlcollege.=$this->getIITCollegeCardHtml($row);
              }
            return $htmlcollege;
       }
       public function getIITCollegeDetailsCollege() {

              $query= $this->pdo->prepare("SELECT * FROM  iit_college ");
              $query->execute();
              
              $htmlcollege = "";
              while ($row=$query->fetch(PDO::FETCH_ASSOC)) {
                    
                     $htmlcollege.=$this->getIITCollegeCardHtml($row);
              }
            return $htmlcollege;
       }

       public function getIITCollegeCardHtml($row) {

              $college  = new College($row);

              $collegeId=$college->getCollegeId();
              $this->collegeNameShort=$college->getCollegeNameShort();
              $collegeCity=$college->getCollegeCity();
              $collegeState=$college->getCollegeState();
              $collegeBg=$college->getCollegeBg();
              $collegeLogo=$college->getCollegeLogo();

              return "<a href='engineering-college/iit/iit.php?id=$collegeId' target= '_blank'> <div class='card text-center topCollege-card-item' data-collegeId='$collegeId' id='topCollege-card'>
                            <div class='card-body topCollege-card-body'>
                                   <div class='imageHover imagecol'>
                                          <div>
                                          <figure><img src=$collegeBg alt='$this->collegeNameShort' class='img-fluid rounded' id='topCollege-img'></figure>
                                          </div>
                                   </div>
                                   <p class='mt-3 card-title topCollege-card-item-collegeName'>$this->collegeNameShort</p>
                                   <p class='mt-2 card-title topCollege-card-item-collegeAddress'>$collegeCity, $collegeState </p>
                            </div>
                     </div> </a>";
       }


       public function getNITCollegeDetailsHome() {

              $query= $this->pdo->prepare("SELECT * FROM  nit_college  LIMIT 5");
              $query->execute();
              
              $htmlcollege = "";
              while ($row=$query->fetch(PDO::FETCH_ASSOC)) {
                    
                     $htmlcollege.=$this->getNITCollegeCardHtml($row);
              }

             return $htmlcollege;
       }
       public function getNITCollegeDetailsCollege() {

              $query= $this->pdo->prepare("SELECT * FROM  nit_college ");
              $query->execute();
              
              $htmlcollege = "";
              while ($row=$query->fetch(PDO::FETCH_ASSOC)) {
                    
                     $htmlcollege.=$this->getNITCollegeCardHtml($row);
              }

             return $htmlcollege;
       }

       public function getNITCollegeCardHtml($row) {

              $college  = new College($row);

              $collegeId=$college->getCollegeId();
              $this->collegeNameShort=$college->getCollegeNameShort();
              $collegeCity=$college->getCollegeCity();
              $collegeState=$college->getCollegeState();
              $collegeBg=$college->getCollegeBg();
              $collegeLogo=$college->getCollegeLogo();

              return "
              <a href='engineering-college/nit/nit.php?id=$collegeId' target= '_blank'> 

              <div class='card text-center topCollege-card-item' data-collegeId='$collegeId' id='topCollege-card'>
                            <div class='card-body topCollege-card-body'>
                                   <div class='imageHover imagecol'>
                                          <div>
                                          <figure><img src=$collegeBg alt='$this->collegeNameShort' class='img-fluid rounded' id='topCollege-img'></figure>
                                          </div>
                                   </div>
                                   <p class='mt-3 card-title topCollege-card-item-collegeName'>$this->collegeNameShort</p>
                                   <p class='mt-2 card-title topCollege-card-item-collegeAddress'>$collegeCity, $collegeState </p>
                            </div>
                     </div> 
           </a> " ;
       }
}

?>