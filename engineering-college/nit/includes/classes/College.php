<?php

    class College {
        private $row;

        public function __construct($row) {

        $this->row=$row;
        }
        
        public function getCollegeId() {
            return $this->row["collegeId"];
        }

        public function getCollegeNameShort() {
            return $this->row["collegeNameShort"];
        }
        public function getCollegeNameLong() {
            return $this->row["collegeNameLong"];
        }

        public function getCollegeCity() {
            return $this->row["collegeCity"];
        }
        
        public function getCollegeEstd() {
            return $this->row["estd"];
        }
        
        
        public function getCollegeLogo() {
            return $this->row["logo"];
        }
        

        public function getCollegeBg() {
            return $this->row["collegeBg"];
        }

        public function getCollegeHighlight() {
            return $this->row["highlight"];
        }

        public function getCollegeState() {
            return $this->row["collegeState"];
        }
    }

?>