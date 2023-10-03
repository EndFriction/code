<?php

    class Placement
    {
        private $row;

        public function __construct($row) 
        {
        $this->row=$row;
        }
        
        public function getPlacementDomesticJson()
        {
            return $this->row["domestic"];
        }
    
        public function getPlacementInternationalJson()
        {
            return $this->row["international"];
        }

    }

?>
