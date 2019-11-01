<?php
$select=$_REQUEST['select'];
if(empty($select)){
    $select=10;
}else $select=$_REQUEST['select'];
$row=$_REQUEST['row'];

$kol=count($select);

$mysqli=new mysqli('localhost','root','','parser');
//$link = mysqli_connect("localhost", "root", "") or die("Нет соединения с MySQL");
//mysqli_select_db( $link,"parser") or die ("Че то база не выбирается...");
$file= fopen('parser1.csv','r');

$i=0;

      while (!feof($file) and $i<$row) {

                   $mass = fgetcsv($file, 1024, ';');
                    $i++;

          if($kol==1){
              if ($select[0] == 1) {
                  $mysqli->query("INSERT INTO balancesandprices
                                          values ('$mass[0]','','','' ) ");
              }
              elseif ($select[0] == 2) {
                  $mysqli->query("INSERT INTO balancesandprices 
                                          values ('','$mass[1]','','' ) ");
              }
              elseif ($select[0] == 3) {
                  $mysqli->query("INSERT INTO balancesandprices 
                                          values ('','','$mass[2]','' ) ");
              }
              elseif ($select[0] == 4) {
                  $mysqli->query("INSERT INTO balancesandprices 
                                          values ('','','','$mass[3]' ) ");
              }
          }
          elseif($kol==2){
              if ($select[0] == 1 and $select[1] == 2) {
                  $mysqli->query("INSERT INTO balancesandprices 
                                          values ('$mass[0]','$mass[1]','','' ) ");
              }
              elseif ($select[0] == 1 and $select[1] == 3) {
                  $mysqli->query("INSERT INTO balancesandprices 
                                          values ('$mass[0]','','$mass[2]','' ) ");
              }
              elseif ($select[0] == 1 and $select[1] == 4) {
                  $mysqli->query("INSERT INTO balancesandprices 
                                          values ('$mass[0]','','','$mass[3]' ) ");
              }
              elseif ($select[0] == 2 and $select[1] == 3) {
                  $mysqli->query("INSERT INTO balancesandprices 
                                          values ('','$mass[1]','$mass[2]','' ) ");
              }
              elseif ($select[0] == 2 and $select[1] == 4) {
                  $mysqli->query("INSERT INTO balancesandprices 
                                          values ('','$mass[1]','','$mass[3]' ) ");
              }
              elseif ($select[0] == 3 and $select[1] == 4) {
                  $mysqli->query("INSERT INTO balancesandprices 
                                          values ('','','$mass[2]','$mass[3]' ) ");
              }
          }
          elseif($kol==3){
              if ($select[0] == 1 and $select[1] == 2 and $select[2] == 3) {
                  $mysqli->query("INSERT INTO balancesandprices 
                                          values ('$mass[0]','$mass[1]','$mass[2]','' ) ");
              }
              if ($select[0] == 1 and $select[1] == 2 and $select[2] == 4) {
                  $mysqli->query("INSERT INTO balancesandprices 
                                          values ('$mass[0]','$mass[1]','','$mass[4]' ) ");
              }
              if ($select[0] == 1 and $select[1] == 3 and $select[2] == 4) {
                  $mysqli->query("INSERT INTO balancesandprices 
                                          values ('$mass[0]','','$mass[2]','$mass[3]' ) ");
              }
              if ($select[0] == 2 and $select[1] == 3 and $select[2] == 4) {
                  $mysqli->query("INSERT INTO balancesandprices 
                                          values ('','$mass[1]','$mass[2]','$mass[3]' ) ");
              }
          }
          elseif($kol==4)
          {
              $mysqli->query("INSERT INTO balancesandprices 
                                          values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]' ) ");
          }

         }

        fclose($file);
        $mysqli->close();
        echo 'данные успешно сохранены';











