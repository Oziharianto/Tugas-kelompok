
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>My Website</title>
  </head>
  <body>
    <h1>Welcome to My Website <br>
        KELOMPOK OZIS FAMILY
    </h1>
    
    <a href="index.php">Home</a> |
    <a href="index.php?page=page1">Page 1</a> |
    <a href="index.php?page=page2">Page 2</a> |
    <a href="index.php?page=page3">Page 3</a> |
    <a href="index.php?page=page4">Page 4</a> |
    <a href="index.php?page=page5">Page 5</a> 
    <hr/>
    
    <?php 
    
    if (isset($_GET['page'])) :  
        $halaman= filter_var($_GET['page'],FILTER_SANITIZE_URL);
        $a= include "page/".$halaman.".php";
        if ($a==false):
          header('location:index.php');
        endif;
        ?>
 <?php else: ?>
<table width="600px" border="2px" cellspacing="0" cellpadding="5px">
    <tr>
    <th>NAMA</th>
    <th>JABATAN</th>
    <th>PHOTO</th>
</tr>
<tr>
    <td>OZI</td>
    <td>KETUA</td>
    <td><img src="img/a.jpg" width="200px" height="150px"></td>
</tr>
<tr>
    <td>AZZAHRATUL JANNAH</td>
    <td>ANGGOTA</td>
    <td><img src="img/b.jpg" width="200px" height="150px"></td>
</tr>
<tr>
    <td>DINDA KHAIRUNISA</td>
    <td>ANGGOTA</td>
    <td><img src="img/d.jpg" width="200px" height="150px"></td>
</tr>
<tr>
    <td>ASTRI YUNIKA</td>
    <td>ANGGOTA</td>
    <td><img src="img/e.jpg" width="200px" height="150px"></td>
</tr>
<tr>
    <td>EDY SAPRIZAL</td>
    <td>ANGGOTA</td>
    <td><img src="img/c.jpg" width="200px" height="150px"></td>
</tr>
</table>
      
<?php endif; ?>
    
  </body>
</html>

<!--php://filter/convert.base64-encode/resource= ->
