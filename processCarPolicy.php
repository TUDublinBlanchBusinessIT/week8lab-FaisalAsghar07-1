<?php

include("CarPolicy2.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $policyNumber = $_POST["policyNumber"];
    $yearlyPremium = $_POST["yearlyPremium"];
    $dateOfLastClaim = $_POST["dateOfLastClaim"];

    $carPolicy = new CarPolicy($policyNumber, $yearlyPremium);

    $carPolicy->setDateOfLastClaim($dateOfLastClaim);
    
    $intialPremium = $yearlyPremium;

    $discountedPremium = $carPolicy->getDiscountedPremium();

    echo "Initial Premium: $" . $intialPremium . "<br>";
    echo "Discounted Premium: $" . $discountedPremium;
}

?>