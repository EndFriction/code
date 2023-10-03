<?php

class Create {
       private $pdo;
       private $A5Html = "";
       private $A1LT5Html = "";
       private $LT1Html = "";
       private $MinorityHtml = "";
       private $courseList4year="";
       private $courseList5year="";
       public $collegeNameShort;

       public function __construct($pdo) {
              $this->pdo = $pdo;
       }

// ===================== College Details Function ===============================================================

       public function getCollegeBannerHtml($row) {

              $college  = new College($row);

              $collegeId=$college->getCollegeId();
              $this->collegeNameShort=$college->getCollegeNameShort();
              $collegeNameLong=$college->getCollegeNameLong();
              $collegeCity=$college->getCollegeCity();
              $collegeState=$college->getCollegeState();
              $collegeBg=$college->getCollegeBg();
              $collegeLogo=$college->getCollegeLogo();
              $collegeEstd=$college->getCollegeEstd();


              return "<div class='col college-banner-bg' style='background-image: url(../../$collegeBg)'>
                            <div class='banner-opacity '></div>
                                   <div class='banner-college-name' data-collegeId='$collegeId'>
                                   $collegeNameLong
                                   </div>
              
                            <div class='banner-item  d-flex justify-content-around align-content-start flex-row  '>
                                   <div class='banner-item-location  text-center d-flex flex-column align-self-center'>
                                          <i class='bi bi-geo-alt-fill '></i>
                                          <p class=''>$collegeCity, <br> $collegeState</p>
                                   </div>
              
                                   <div class='logo-holder  bg-light d-flex justify-content-center align-content-start ' >
                                   <img src=../../$collegeLogo width='200px'  id='banner-logo' alt='$this->collegeNameShort Logo'>
                                   </div>
              
                                   <div class='banner-item-est text-center  d-flex align-self-center'>
                                          <i class='bi bi-building'></i>
                                          <p>$collegeEstd</p>
                                   </div>
                            </div>
                     </div>";
       }


       public function getCollegeBannerDetails($collegeId) {
              $query= $this->pdo->prepare("SELECT * FROM  iit_college  WHERE collegeId = ?");
              $query->bindvalue(":collegeId",$collegeId);
              $query->execute(array($collegeId));

              $row=$query->fetch(PDO::FETCH_ASSOC);

             return  $this->getCollegeBannerHtml($row);
       }

       // ===================== College Highlight Function ==============================
       public function getCollegeHighlightDetails($collegeId) {

              $query= $this->pdo->prepare("SELECT highlights FROM  iit_college WHERE collegeId = ?");
              $query->bindvalue(":collegeId", $collegeId);
              $query->execute(array($collegeId));
              $row=$query->fetch(PDO::FETCH_ASSOC);

              return $row["highlights"];
       } 

       public function getCollegeHighlightList($text) {
       $this->htmllistviewhighlight.="<ul><li>$text</li></ul>";
       return $this->htmllistviewhighlight;
       }


       // ===================== College NIRF Ranking  =============================

       public function getJsonNirfEngg($collegeId)
       {
              $query= $this->pdo->prepare("SELECT * FROM iit_nirf_rank WHERE collegeId = ?");
              $query->bindvalue(":collegeId", $collegeId);
              $query->execute(array($collegeId));

              $row=$query->fetch(PDO::FETCH_ASSOC);
              return $row["collegeNirfEngineering"];
       }

       public function getJsonNirfOver($collegeId)
       {
              $query= $this->pdo->prepare("SELECT * FROM iit_nirf_rank WHERE collegeId = ?");
              $query->bindvalue(":collegeId", $collegeId);
              $query->execute(array($collegeId));

              $row=$query->fetch(PDO::FETCH_ASSOC);
              return $row["collegeNirfOverall"];
       }


 // ================================================== College Cut-off  ============================= =============================

       public function getCutoffRoundYr4($category, $year, $Gender, $collegid, $round)
       {
              $query=$this->pdo->prepare("SELECT * FROM  iit_cutoff  WHERE branch LIKE  '%4%'  AND round = ? AND category = ? AND year = ? AND Gender = ?  AND  collegeId = ?");
              $query->bindvalue(":category",$category);
              $query->bindvalue(":year",$year);
              $query->bindvalue(":Gender",$Gender);
              $query->bindvalue(":collegeId",$collegid);
              $query->bindvalue(":round",$round);
              $query->execute(array($round, $category ,$year, $Gender, $collegid));

              $htmltwo="";
              while($row=$query->fetch(PDO::FETCH_ASSOC))
              {
                     $htmltwo.=$this->getcutoffrow($row);
              }
              return $htmltwo;
       }


       public function getCutoffRoundYr5($category, $year, $Gender, $collegid, $round)
       {
              $query=$this->pdo->prepare("SELECT * FROM  iit_cutoff WHERE branch LIKE '%5%' AND round = ? AND category = ? AND year = ? AND Gender = ?  AND  collegeId = ?");
              $query->bindvalue(":category",$category);
              $query->bindvalue(":year",$year);
              $query->bindvalue(":Gender",$Gender);
              $query->bindvalue(":collegeId",$collegid);
              $query->bindvalue(":round",$round);
              $query->execute(array($round, $category ,$year, $Gender, $collegid));

              $htmltwo="";
              while($row=$query->fetch(PDO::FETCH_ASSOC))
              {
                     $htmltwo.=$this->getcutoffrow($row);
              }
              return $htmltwo;
       }

       public function getcutoffrow($row) {

              $cutoff= new cutoff($row);
              $openrank=$cutoff->getopenrank();
              $closerank=$cutoff->getcloserank();
              $branch=$cutoff->getbranch();

              return  "<tr> <td>$branch</td> <td>$openrank</td> <td>$closerank</td> </tr>";
       }


       // ===================== Alumni  Card =============================
       public function getAlumniNameJson($collegeId) {
              $query= $this->pdo->prepare('SELECT alumniName FROM  iit_alumni WHERE collegeId = ?');
              $query->bindvalue(":collegeId",$collegeId);
              $query->execute(array($collegeId));

              $row=$query->fetch(PDO::FETCH_ASSOC);
              return $row["alumniName"] ;
       }

       public function getAlumniBranchNameJson($collegeId) {
              $query= $this->pdo->prepare('SELECT alumniBranchName FROM  iit_alumni WHERE collegeId = ?');
              $query->bindvalue(":collegeId",$collegeId);
              $query->execute(array($collegeId));

              $row=$query->fetch(PDO::FETCH_ASSOC);
              return $row["alumniBranchName"] ;
       }

       public function getAlumniPassingYearJson($collegeId) {
              $query= $this->pdo->prepare('SELECT alumniPassingYear FROM  iit_alumni WHERE collegeId = ?');
              $query->bindvalue(":collegeId",$collegeId);
              $query->execute(array($collegeId));

              $row=$query->fetch(PDO::FETCH_ASSOC);
              return $row["alumniPassingYear"] ;
       }

       public function getAlumniImageJson($collegeId) {
              $query= $this->pdo->prepare('SELECT alumniImage FROM  iit_alumni WHERE collegeId = ?');
              $query->bindvalue(":collegeId",$collegeId);
              $query->execute(array($collegeId));

              $row=$query->fetch(PDO::FETCH_ASSOC);
              return $row["alumniImage"] ;
       }

       public function getAlumniAchievementJson($collegeId) {
              $query= $this->pdo->prepare('SELECT alumniAchievement FROM  iit_alumni WHERE collegeId = ?');
              $query->bindvalue(":collegeId",$collegeId);
              $query->execute(array($collegeId));

              $row=$query->fetch(PDO::FETCH_ASSOC);
              return $row["alumniAchievement"] ;
       }


       public function getAlumniCardHtml($alumniNameJson, $alumniBranchNameJson, $alumniPassingYearJson, $alumniImageJson, $alumniAchievementJson) {

              return " <div class='item'>
                            <div class=' card text-center  alumni-card-item'>
                            <div class=' card-body alumni-card-body'>
                            <p class=' mt-2 card-title alumni-card-name'>$alumniNameJson</p>
                            <img src= ../../$alumniImageJson  class='img-fluid rounded' id='alumni-card-img'>
                            <p class=' mt-2 card-title alumni-card-achievement'> $alumniAchievementJson </p>
                            <p class=' mb-2 card-title alumni-card-batch'>$alumniBranchNameJson, $alumniPassingYearJson </p>
                             </div>
                     </div>
              </div>";

       }


       // ===================== Top Company  =============================

       public function getCompanyNameJson() {

              $query= $this->pdo->prepare("SELECT companyName FROM  iit_top_company ORDER BY RAND() ");
              $query->execute();
              
              $row=$query->fetch(PDO::FETCH_ASSOC);
              return $row["companyName"];
       }

       public function getCompanyLogoJson() {

              $query= $this->pdo->prepare("SELECT companyLogo FROM  iit_top_company  ORDER BY RAND()");
              $query->execute();
              
              $row=$query->fetch(PDO::FETCH_ASSOC);
              return $row["companyLogo"];
       }


       public function getCompanyCardHtml($companyNameJson, $companyLogoJson   ) {



              return "   <div class='item'>
                            <div class=' card text-center  top-company-item'>
                            <div class=' card-body top-company-body'>
                                   <img src=../../$companyLogoJson alt='$companyNameJson' class='img-fluid' id='top-company-img'>
                            </div>
                            </div>
                     </div>";

       }

       // ===================== Placement  =============================

       public function getPlacementJson($placementYear, $collegeId) {

              $query= $this->pdo->prepare("SELECT * FROM  iit_placement WHERE placementYear = ? AND collegeId = ?");
              $query->bindvalue(":collegeId",$collegeId);
              $query->bindvalue(":placementYear", $placementYear);
              $query->execute(array($placementYear, $collegeId));
              
              $row=$query->fetch(PDO::FETCH_ASSOC);
              return $row;
       }


       // ===================== Fee structure  =============================

       public function getFeeA5Json() {

              $query= $this->pdo->prepare("SELECT genewsobcA5 FROM  iit_fee ");
              $query->execute();
              
              $row=$query->fetch(PDO::FETCH_ASSOC);
              return $row["genewsobcA5"];
       }

       public function getFeeA1LT5Json() {

              $query= $this->pdo->prepare("SELECT genewsobcA1LT5 FROM  iit_fee ");
              $query->execute();
              
              $row=$query->fetch(PDO::FETCH_ASSOC);
              return $row["genewsobcA1LT5"];
       }

       public function getFeeLT1Json() {

              $query= $this->pdo->prepare("SELECT genewsobcLT1 FROM  iit_fee ");
              $query->execute();
              
              $row=$query->fetch(PDO::FETCH_ASSOC);
              return $row["genewsobcLT1"];
       }

       public function getFeeMinorityJson() {

              $query= $this->pdo->prepare("SELECT scstpwd FROM  iit_fee");
              $query->execute();
              
              $row=$query->fetch(PDO::FETCH_ASSOC);
              return $row["scstpwd"];
       }

       public function getFeeParticularNameJson() {

              $query= $this->pdo->prepare("SELECT feeParticularName FROM  iit_fee");
              $query->execute();
              
              $row=$query->fetch(PDO::FETCH_ASSOC);
              return $row["feeParticularName"];
       }


       public function getFeeA5Table($feeA5Json, $feeParticularNameJson)
       {

              $this->A5Html.="<tr>
                                          <td>$feeParticularNameJson</td>
                                          <td> &#8377; $feeA5Json</td>
                                   </tr> ";

              return $this->A5Html;

       }

       public function getFeeA1LT5Table($feeA1LT5Json, $feeParticularNameJson)
       {

              $this->A1LT5Html.="<tr>
                                          <td>$feeParticularNameJson</td>
                                          <td> &#8377; $feeA1LT5Json</td>
                                   </tr> ";
              return $this->A1LT5Html;
       }

       public function getFeeLT1Table($feeLT1Json, $feeParticularNameJson)
       {

              $this->LT1Html.="<tr>
                                          <td>$feeParticularNameJson</td>
                                          <td> &#8377; $feeLT1Json</td>
                                   </tr> ";
              return $this->LT1Html;
       }

       public function getFeeMinorityTable($feeMinorityJson, $feeParticularNameJson)
       {

              $this->MinorityHtml.="<tr>
                                          <td>$feeParticularNameJson</td>
                                          <td> &#8377; $feeMinorityJson</td>
                                   </tr> ";
              return $this->MinorityHtml;
       }


       // ===================== Course =============================

       public function get4YearCourse($collegeId) {
              $query= $this->pdo->prepare("SELECT DISTINCT branch FROM `iit_cutoff` WHERE branch LIKE '%4%' AND collegeId = ?");
              $query->bindvalue(":collegeId",$collegeId);
              $query->execute(array($collegeId));

              while($row=$query->fetch(PDO::FETCH_ASSOC)) {
                     
                      $this->courseList4year.=$this->get4YearCourseHtml($row);
              }
              return $this->courseList4year;
       }

       public function get4YearCourseHtml($row) {


              return "<li> $row[branch] </li>";

       }


       public function get5YearCourse($collegeId) {
              $query= $this->pdo->prepare("SELECT DISTINCT branch FROM `iit_cutoff` WHERE branch LIKE '%5%' AND collegeId = ?");
              $query->bindvalue(":collegeId",$collegeId);
              $query->execute(array($collegeId));

              while($row=$query->fetch(PDO::FETCH_ASSOC)) {
                     
                      $this->courseList5year.=$this->get5YearCourseHtml($row);
              }
              return $this->courseList5year;
       }

       public function get5YearCourseHtml($row) {

              return "<li> $row[branch] </li>";
       }


 // ===================== Fest an Events ===============================================================

       public function getFestDetails() {

              $query= $this->pdo->prepare("SELECT * FROM  iit_fest");
              $query->execute();

              $row=$query->fetch(PDO::FETCH_ASSOC);
              return $row;
       }

       public function getFestVideoDetails($collegeId) {

              $query= $this->pdo->prepare("SELECT * FROM iit_fest WHERE collegeId = ?");
              $query->bindValue(":collegeId",$collegeId);
              $query->execute(array($collegeId));

              $row=$query->fetch(PDO::FETCH_ASSOC);
              return $row;
       }


       public function getCollegeFestCardHtml($thumbnail, $videoId) {

              return "
                          <div class='' id='festIframe' data-videoId='$videoId' >
                          <img src=$thumbnail  class='img-fluid' >
                          </div>";

       //        return "<div class='item' id='festIframeA'  >
       //               <div class=' card text-center  TTI-card-item'>
       //               <div class=' card-body TTI-card-body'>

       //                    <div  class='festIframe' data-videoId='$videoId' >
       //                    <img src=$thumbnail  class='img-fluid' >
       //                    </div>
       //            </div>
       //        </div>
       //    </div>";
       }


}




?>