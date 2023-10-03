<?php

    class Alumni {
        private $row;

    public function __construct($row)
        {
    $this->row=$row;
    }

    public function getAlumniId(){
        return $this->row["collegeId"];
    }

    public function getAlumniName(){
        return $this->row["alumniName"];
    }

    public function getAlumniCollegeNameShort(){
        return $this->row["alumniCollegeNameShort"];
    }

    public function getAlumniBranchName()
    {
        return $this->row["alumniBranchName"];
    }

    public function getAlumniPassingYear()
    {
        return $this->row["alumniPassingYear"];
    }

    public function getAlumniImage()
    {
        return$this->row["alumniImage"];
    }

    public function getAlumniAchievement()
    {
        return$this->row["alumniAchievement"];
    }




}
?>