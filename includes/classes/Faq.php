<?php



class Faq
{

    private $row;

    public function __construct($row)
    {
    
    $this->row=$row;
    
    }
    
    public function getFaqQuestion()
    {
        return $this->row["faqQuestion"];
    }
    
    public function getFaqAnswer()
    {
        return $this->row["faqAnswer"];
    }
    
    public function getFaqPreferenceId()
    {
        return $this->row["faqPreferenceId"];
    }
    public function getFaqShow()
    {
        return $this->row["accordianShow"];
    }
    


}


?>