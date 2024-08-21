<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="time" name="time" required>
    <button type="submit" class="btn btn-primary">Çevir</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $timeInput = $_POST['time'];

    // Vaxtı hissələrə böl (saat və dəqiqə)
    list($hour, $minute) = explode(':', $timeInput);

    // Saatı yoxla və uyğun mesaj qaytar
    if ($hour == 0 && $minute == 0) {
        $mesaj = "Gecə yarısıdır.";
    } elseif ($hour < 6) {
        $mesaj = "Gecədir.";
    } elseif ($hour < 12) {
        $mesaj = "Səhərdir.";
    } elseif ($hour < 18) {
        $mesaj = "Günortadır.";
    } elseif ($hour < 21) {
        $mesaj = "Axşamdır.";
    } elseif ($hour < 24) {
        $mesaj = "Gecədir.";
    } else {
        $mesaj = "Yanlış vaxt daxil edilib.";
    }

    echo "<p>Saat $timeInput olduğu üçün: $mesaj</p>";
}
?>

</body>
</html>
