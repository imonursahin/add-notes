<?php 
  // If you installed via composer, just use this code to require autoloader on the top of your projects.
  require 'Medoo.php';
      
  // Using Medoo namespace
  use Medoo\Medoo;
  
  $database = new Medoo([
      // required
      'database_type' => 'mysql',
      'database_name' => 'itp_vt',
      'server' => 'localhost',
      'username' => 'root',
      'password' => '123456789',
  
      // [optional]
      'charset' => 'utf8mb4',
      'collation' => 'utf8mb4_general_ci',
      'port' => 3306,
  
  ]);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Not's</title>
    <style>

    table.blueTable {
    border: 1px solid #1C6EA4;
    background-color: #EEEEEE;
    width: 100%;
    text-align: left;
    border-collapse: collapse;
    }
    table.blueTable td, table.blueTable th {
    border: 1px solid #AAAAAA;
    padding: 3px 2px;
    }
    table.blueTable tbody td {
    font-size: 13px;
    }
    table.blueTable tr:nth-child(even) {
    background: #D0E4F5;
    }
    table.blueTable thead {
    background: #1E5E1D;
    border-bottom: 2px solid #444444;
    }
    table.blueTable thead th {
    font-size: 15px;
    font-weight: bold;
    color: #FFFFFF;
    text-align: center;
    border-left: 2px solid #D0E4F5;
    }
    table.blueTable thead th:first-child {
    border-left: none;
    }

    table.blueTable tfoot td {
    font-size: 14px;
    }
    table.blueTable tfoot .links {
    text-align: right;
    }
    table.blueTable tfoot .links a{
    display: inline-block;
    background: #1C6EA4;
    color: #FFFFFF;
    padding: 2px 8px;
    border-radius: 5px;
    }
    </style>
 </head>
 <body>
    <form action="" method="post">
    *Not Başlığı: <input type="text" name="baslik"><br><br>
    *Not Detayı: <input type="text" name="detay"style="width: 50%"><br><br>
    Not Oluşturma Zamanı: <input type="datetime-local" name="tarih">   
    Hatırlatıcı: <select name="hatirlatici">
          <option>YOK</option>
          <option>1 Gün sonra</option>
          <option>3 Gün sonra</option>
          <option>5 Gün sonra</option>
          <option>1 Hafta sonra</option>
          <option>1 Ay sonra</option>
          <option>3 Ay sonra</option>
          <option>6 Ay sonra</option>
          <option>1 Yıl sonra</option>
        </select><br><br>

    <input type="submit" value="+ Ekle"style="width: 50%; text-align:center">   
    </form><br><br> 
<?php
$baslik="";
$detay="";
$tarih="";
$hatirlatici="";
if (isset($_POST["baslik"]) && isset($_POST["detay"]) && isset($_POST["tarih"]) && isset($_POST["hatirlatici"])){
    $baslik=$_POST["baslik"];
    $detay=$_POST["detay"];
    $tarih=$_POST["tarih"];
    $hatirlatici=$_POST["hatirlatici"];
    if($baslik=="" or $detay==""){
        echo '<script>alert("Hata, tekrar deneyin!");</script>';     

    }else{
        $database->insert("tbl_400432", ["baslik" => $baslik,"detay" => $detay, "tarih" => $tarih,"hatirlatici" => $hatirlatici]);
        echo '<script>alert("Notunuz başarıyla eklendi.");</script>';
    }
}
?>
<table class="blueTable">
<thead>
<tr>
<th>Sıra</th>
<th>Not Başlığı</th>
<th>Not Detayı</th>
<th>Oluşturma Zamanı</th>
<th>Hatırlatıcı</th>
</tr>
</thead>
<tbody>

<?php
$notEkle = $database->select("tbl_400432", "*");
$sira=1;
foreach($notEkle as $ekle){
    echo "<tr>
    <td>$sira</td>
    <td>".$ekle["baslik"]."</td>
    <td>".$ekle["detay"]."</td>
    <td>".$ekle["tarih"]."</td>
    <td>".$ekle["hatirlatici"]."</td>
    </tr>";
    $sira++;
}
?>

 </body>
 </html>