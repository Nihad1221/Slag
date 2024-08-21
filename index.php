<!doctype html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Səhifə</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
            integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
          integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-utilities.min.css"
          integrity="sha512-4ocAKAxnrkSm7MvkkF1D435kko3/HWWvoi/U9+7+ln94B/U01Mggca05Pm3W59BIv3abl0U3MPdygAPLo5aeqg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<form action="" method="post" class="m-5">
    <input type="text" name="input_text" class="form-control" placeholder="Mətn daxil edin">
    <button type="submit" class="btn btn-primary mt-2">Təqdim et</button>
</form>

<?php
function slugYarat($text) {
    // Hərfləri kiçik hərflərə çevir
    $text = strtolower($text);

    // Hərf və rəqəm olmayan simvolları "-" ilə əvəz et
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // Transliterasiya et
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // İstənməyən simvolları sil
    $text = preg_replace('~[^-\w]+~', '', $text);

    // Əlavə "-" simvollarını sil
    $text = preg_replace('~-+~', '-', $text);

    // Trim et
    $text = trim($text, '-');

    // Slug olaraq geri qaytar
    return $text;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_text = $_POST['input_text'];
    $slug = slugYarat($input_text);
    echo "<div class='m-5'><strong>Nəticə:</strong> $slug</div>";
}
?>

</body>
</html>
