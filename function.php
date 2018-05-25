<?php
    function calculateTax($income,$expense,$minus)
    {
        $taxRate=0;
        $netIncome = $income-$expense-$minus;
        if($netIncome<=500000)
            $taxRate=0.05;
        else if($netIncome<=1000000)
            $taxRate=0.1;
        else
            $taxRate=0.15;
        
        $tax = $netIncome * $taxRate;
        return $tax;
    }
?>