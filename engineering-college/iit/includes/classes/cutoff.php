<?php

class cutoff
{
    private $row;

    public function __construct($row)
    {
    
    $this->row=$row;
    
    }
    
    public function getcollegename()
    {
        return $this->row["collegeName"];
    }
    
    public function getopenrank()
    {
        return $this->row["openingRank"];
    }

    public function getcloserank()
    {
        return $this->row["closingRank"];
    }
    

    public function getbranch()
    {
        return $this->row["branch"];
    }
    
    
    




}


?>