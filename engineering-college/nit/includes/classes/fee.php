<?php

    class fee {
        private $row;

        public function __construct($row)
        {
        
        $this->row=$row;
        
        }
        
        public function getltfive()
        {
            return $this->row["genewsobcLT5"];
        }
        
        public function getafive()
        {
            return $this->row["genewsobcA5"];
        }
        
        
        public function getltone()
        {
            return $this->row["genewsobcLT1"];
        }
        
        public function getscst()
        {
            return $this->row["scstpwd"];
        }
    }

?>