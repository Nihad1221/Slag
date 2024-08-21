<?php

// Əsas massiv
$numbers = [1, 2, 3, 4, 5];

// Hər bir elementi 2-yə vurmaq üçün funksiya
$multipliedNumbers = array_map(function ($num) {
    return $num * 2;
}, $numbers);

// Nəticəni çap etmək
print_r($multipliedNumbers);
?>
<?php
// Əsas massiv
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Cüt ədədləri tapan funksiya
$evenNumbers = array_filter($numbers, function ($num) {
    return $num % 2 == 0;
});

// Nəticəni çap etmək
print_r($evenNumbers);
?>
