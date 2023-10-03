<?php

    class Fest
{

    private $row;

    public function __construct($row)
    {
    
    $this->row=$row;
    
    }
    
    public function getFestThumbnail()
    {
        return $this->row["thumbnail"];
    }
    
    public function getFestSrc()
    {
        return $this->row["src"];
    }

    public function getFestId()
    {
        return $this->row["videoId"];
    }
    public function getcontainerFestId()
    {
        return $this->row["containerfestId"];
    }


}


?>