<!-- Diah Ayuning Tyas - 21091397013 --->

<?php
    require_once 'inifilephp.php';
?>

<html lang="id">
<head>
     <link rel="stylesheet" type="text/css" href="/A_013__Diah Ayuning Tyas_PBO_Prak4/No 3/no3."> 
    <title>Praktikum 4</title>
</head>
<body>
<h2><center>Soal No 3</center></h2>
<table align="center">

<tr align="center" bgcolor="iceblue">
    <td>Objek</td>
    <td>Umur</td>  
    <td>Nama</td>  
    <td>Panjang Ekor</td>  
    <td>Cara Bergerak</td>      
</tr>

<tr>
    <td>01</td>
    <td><?=$katak->getUmur() ?> </td>  
    <td><?=$katak->getnama() ?> </td>  
    <td>-</td>  
    <td><?=$katak->carabergerak() ?> </td>      
</tr>

<tr>
    <td>02</td>
    <td><?=$kecebong->getUmur() ?></td>  
    <td><?=$kecebong->getNama() ?></td>  
    <td><?=$kecebong->getpanjangekor() ?></td>  
    <td><?=$kecebong->carabergerak() ?></td>      
</tr>

</table>
</body>
</html>
