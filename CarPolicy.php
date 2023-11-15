<?php

class CarPolicy
{
    private $policyNumber=0;
    private $yearlyPremium=0;
    private $dateOfLastClaim=0;

    public function __construct($policyNumber, $yearlyPremium)
    {
        $this->policyNumber = $policyNumber;
        $this->yearlyPremium = $yearlyPremium;
  
    }

    public function __toString()
    {
        return $this->policyNumber . ': ' . $this->yearlyPremium;
    }
    public function setDateOfLastClaim($date)
    {
    $this->dateOfLastClaim = $date;
    }
    public function getTotalYearsNoClaims()
    {
        $currentDate = new DateTime();
        $lastDate = new DateTime($this->dateOfLastClaim);
        $interval = $currentDate->diff($lastDate);
        return $interval->format("%y");
    }

   
}


?>







