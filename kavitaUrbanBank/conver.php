<?php
function convertAmountToIndianWords($amount) {
    $numberWords = array(
        "", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", 
        "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen"
    );

    $tensWords = array(
        "", "", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety"
    );

    $amountInWords = "";

    if ($amount < 20) {
        $amountInWords .= $numberWords[$amount];
    } elseif ($amount < 100) {
        $amountInWords .= $tensWords[floor($amount / 10)];
        if ($amount % 10 > 0) {
            $amountInWords .= "-" . $numberWords[$amount % 10];
        }
    } elseif ($amount < 1000) {
        $amountInWords .= $numberWords[floor($amount / 100)] . " hundred";
        if ($amount % 100 > 0) {
            $amountInWords .= " and " . convertAmountToIndianWords($amount % 100);
        }
    } elseif ($amount < 100000) {
        $amountInWords .= convertAmountToIndianWords(floor($amount / 1000)) . " thousand";
        if ($amount % 1000 > 0) {
            $amountInWords .= " " . convertAmountToIndianWords($amount % 1000);
        }
    } elseif ($amount < 10000000) {
        $amountInWords .= convertAmountToIndianWords(floor($amount / 100000)) . " lakh";
        if ($amount % 100000 > 0) {
            $amountInWords .= " " . convertAmountToIndianWords($amount % 100000);
        }
    } else {
        $amountInWords = "Number is too large to convert";
    }

    return $amountInWords;
}

// Example usage:
$amount = 1234567.89;
$integerPart = (int)$amount;
$decimalPart = round(($amount - $integerPart) * 100);

$amountInWords = convertAmountToIndianWords($integerPart) . " rupees";
if ($decimalPart > 0) {
    $amountInWords .= " and " . convertAmountToIndianWords($decimalPart) . " paise";
}

echo $amountInWords;
?>
