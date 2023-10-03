<?php


    class Mentor {
        private $row;

    public function __construct($row)
        {
    $this->row=$row;
    }

    public function getMentorId(){
        return $this->row["mentorId"];
    }
    public function getMentorName(){
        return $this->row["mentorName"];
    }

    public function getMentorImage()
    {
        return $this->row["mentorProfileImage"];
    }


    public function getMentorBranchName()
    {
        return $this->row["mentorBranchName"];
    }



    public function getMentorCollegeName()
    {
        return$this->row["mentorCollegeName"];
    }




}
?>