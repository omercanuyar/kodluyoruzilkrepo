<html> 
 <head> 
  <title>Cevap</title> 
 </head>
 <body>
     
     <?php

    $value = trim($_POST['sayi']);

    $firstValue = $value;
    if ($value == "") {
        $result = "Değer boş olamaz.";
    } else {
        if ($value % 3 == 0) {
            $result = "Girilen değer 3 ile bölünebiliyor.";
        } else {
            
            while ($value % 3 != 0) {
                $value++;
            }
            $result = "<b> Girilen Sayı : " . $firstValue . "</b><br> Girdiğiniz sayı 3 ile bölünemez. Bölünebilecek ilk sayı :" . $value;
        }
    }
    echo $result;


?>
 </body>
</html>




