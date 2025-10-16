<?php

// 1. Parzysta czy nieparzysta
echo "<h3>Zadanie 1</h3>";
$liczba = 7;
if ($liczba % 2 == 0) {
    echo "Liczba parzysta<br>";
} else {
    echo "Liczba nieparzysta<br>";
}

// 2. Czy pierwsza podzielna przez drugą
echo "<h3>Zadanie 2</h3>";
$a = 10;
$b = 5;
if ($b != 0 && $a % $b == 0) {
    echo "$a jest podzielna przez $b<br>";
} else {
    echo "$a nie jest podzielna przez $b<br>";
}

// 3. Czy liczba jest z przedziału <1,10> lub <17,21>
echo "<h3>Zadanie 3</h3>";
$x = 18;
if (($x >= 1 && $x <= 10) || ($x >= 17 && $x <= 21)) {
    echo "Liczba $x jest w przedziale<br>";
} else {
    echo "Liczba $x nie jest w przedziale<br>";
}

// 4. Większa, mniejsza czy równa zero
echo "<h3>Zadanie 4</h3>";
$y = -3;
if ($y > 0) {
    echo "Większa od zera<br>";
} elseif ($y < 0) {
    echo "Mniejsza od zera<br>";
} else {
    echo "Równa zero<br>";
}

// 5. Sprawdzanie wieku
echo "<h3>Zadanie 5</h3>";
$wiek = 16;
if ($wiek < 11) {
    echo "Dziecko<br>";
} elseif ($wiek < 18) {
    echo "Nastolatek<br>";
} else {
    echo "Dorosły<br>";
}

// 6. Sprawdzanie siły hasła
echo "<h3>Zadanie 6</h3>";
$d = 10;
if ($d < 5) {
    echo "Bardzo słabe<br>";
} elseif ($d < 9) {
    echo "Słabe<br>";
} elseif ($d < 12) {
    echo "Silne<br>";
} else {
    echo "Bardzo silne<br>";
}

// 7. Ilość dni w lutym
echo "<h3>Zadanie 7</h3>";
$rok = 2000;
if ($rok >= 1582) {
    if (($rok % 4 == 0 && $rok % 100 != 0) || ($rok % 400 == 0)) {
        echo "Rok $rok ma 29 dni w lutym<br>";
    } else {
        echo "Rok $rok ma 28 dni w lutym<br>";
    }
} else {
    echo "Rok poza zakresem<br>";
}

// 8. Najmniejsza z trzech liczb
echo "<h3>Zadanie 8</h3>";
$a = 8;
$b = 2;
$c = 5;
$min = $a;
if ($b < $min) $min = $b;
if ($c < $min) $min = $c;
echo "Najmniejsza liczba to $min<br>";

// 9. Czy są dwie takie same liczby
echo "<h3>Zadanie 9</h3>";
$a = 3;
$b = 7;
$c = 3;
if ($a == $b || $a == $c || $b == $c) {
    echo "Są co najmniej dwie takie same liczby<br>";
} else {
    echo "Wszystkie liczby różne<br>";
}

// 2. Pętla for – 2 wiersze po 10 znaków
echo "<h3>Zadanie 2</h3>";
for ($i = 1; $i <= 20; $i++) {
    echo "*";
    if ($i % 10 == 0) echo "<br>";
}

// 3. Pętle for, while, do…while
echo "<h3>Zadanie 3</h3>";
for ($i = 1; $i <= 100; $i += 2);
while ($i > 1) {
    $i -= 4;
}
$i = 1;
do {
    $i += 2;
} while ($i <= 100);
do {
    $i -= 4;
} while ($i > 1);
echo "<br>Petle wykonane<br>";

// 6. Liczby z przedziału <0..1000> podzielne przez 3 i 7
echo "<h3>Zadanie 6</h3>";
for ($i = 0; $i <= 1000; $i++) {
    if ($i % 3 == 0 && $i % 7 == 0) {
        echo "$i ";
    }
}
echo "<br>";

// 7. Liczby z przedziału <0..100> bez podzielnych przez 3
echo "<h3>Zadanie 7</h3>";
for ($i = 0; $i <= 100; $i++) {
    if ($i % 3 != 0) {
        echo "$i ";
    }
}

?>
