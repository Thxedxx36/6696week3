<!DOCTYPE html>
<html lang="en">
<head>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
    </html>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body{
            font-family: "IBM Plex Sans Thai", sans-serif;
            font-weight: 100;
            font-style: normal;
        }
    </style>
    <title>ตัวอย่าง 1</title>
</head>
<body>
    <h1>โปรแกรม ภาษา PHP</h1>
    664485036 นายฑีฆายุ เปรมสุข <br>
    หมู่เรียน 66/96
    <?php
        // comment
        echo "<h2> สวัสดีวันปีใหม่</h2>";
        echo "<br>ขอให้มีความสุขนะจ๊ะ";
        // ตัวแปร
        $name="ฑีฆายุ";
        $surname="เปรมสุข";
        echo "<br>ชื่อของคุณคือ".$name." ".$surname;
        // ทดสอบตัวแปร ตัวเลข
        $x=15;
        $y=7;
        $z=$x+$y;
        echo "<br>ค่าผลบวกเท่ากับ".$z;
        $z=$x*$y;
        echo "<br>ค่าผลคูณเท่ากับ".$z;
    ?>
</body>
</html>