<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <h1>โปรแกรม ภาษา PHP</h1>
    664485036 นายฑีฆายุ เปรมสุข <br>
    หมู่เรียน 66/96
    
    <?php
        $กว้าง = $_POST["w"];
        $ยาว = $_POST["h"];
        $สูง = $_POST["t"];
        $z=$กว้าง*$ยาว*$สูง;
        echo "<br> คำตอบมีค่าเท่ากับ".$z;


    ?>

</body>
</html>