<?php
    include("function.php");

    $txtFirstName = $_POST['txtFirstName'];
    $txtLastName = $_POST['txtLastName'];
    $txtId = $_POST['txtId'];
    $txtSalary = $_POST['txtSalary'];
    $txtBonus = $_POST['txtBonus'];
    $txtWelfare = $_POST['txtWelfare'];
    $txtProvident = $_POST['txtProvident'];

    $income = ($txtSalary * 12) + $txtBonus;
    if($income*0.5 >= 10000)
        $expense = 100000;
    else
        $expense = $income*0.5;
    $minus = $txtWelfare + $txtProvident;

    $netIncome = $income-$expense-$minus;

    $tax = calculateTax($income,$expense,$minus);

    //show output
    echo "<h1>ผลการคำนวณ</h1>";
    echo "<h2>ข้อมูลผู้เสียภาษี</h2>";
    echo "<strong>ชื่อ:</strong> $txtFirstName $txtLastName<br>";
    echo "<strong>เลขประจำตัวประชาชน: </strong>$txtId<br>";
    echo "<h2>ข้อมูลการเสียภาษี</h2>";
    echo "<strong>เงินได้ทั้งหมด: </strong>$income บาท<br>";
    echo "<strong>หักค่าใช้จ่าย: </strong>$expense บาท<br>";
    echo "<strong>หักค่าลดหย่อน: </strong>$minus บาท<br>";
    echo "<strong>เงินได้สุทธิ: </strong>$netIncome บาท<br>";
    echo "<strong>ภาษีเงินได้ที่ต้องชำระ: </strong>$tax บาท<br>";


    

?>