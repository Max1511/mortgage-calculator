<?php

class MortgageData {
    public $realEstateValue = 3000000;
    public $initialFee = 450000;
    public $years = 15;
    public $interestRate = 7.7;
    public $result = '';
}
$mortgageData = new MortgageData();

if (empty($_POST)) return $mortgageData;

$mortgageData->realEstateValue = $_POST['realEstateValue'];
$mortgageData->initialFee = $_POST['initialFee'];
$mortgageData->years = $_POST['years'];
$mortgageData->interestRate = $_POST['interestRate'];

$loanAmount = $mortgageData->realEstateValue - $mortgageData->initialFee;
$interestRate12 = $mortgageData->interestRate / 12 / 100;
$months = $mortgageData->years * 12;
$totalRate = (1 + $interestRate12) ** $months;

$mortgageData->result = $loanAmount * $interestRate12 * $totalRate / ($totalRate - 1);

return $mortgageData;