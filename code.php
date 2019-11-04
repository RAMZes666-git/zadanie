<?php
$select=$_REQUEST['select'];
if(empty($select)){
    $select=10;
}else $select=$_REQUEST['select'];
///$row=$_REQUEST['row'];
$filter=$_REQUEST['filter'];
$filter_value=$_REQUEST['filter_value'];

$kol=count($select);


$conn = mysqli_connect("localhost", "root", "") or die("Нет соединения с MySQL");
mysqli_select_db( $conn,"parser") or die ("Базы не существует...");
$file= fopen('parser1.csv','r');

//$i=0;

while (!feof($file) ) {

    $mass = fgetcsv($file, 1024, ';');
    // $i++;

    if($kol==1 and $filter==1){
        if ($select[0] == 1 and $mass[0]==$filter_value) {

            $result = mysqli_query($conn,"INSERT INTO balancesandprices 
                                          values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]' )  ");
        }

        elseif ($select[0] == 3 and $mass[2]==$filter_value ) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices 
                                          values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]' ) ");
        }
        elseif ($select[0] == 4 and $mass[3]==$filter_value) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices 
                                          values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]') ");
        }

    }
    elseif($kol==1 and $filter==2){
        if ($select[0] == 1 and $mass[0]>$filter_value) {

            $result = mysqli_query($conn,"INSERT INTO balancesandprices 
                                          values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]' )  ");
        }

        elseif ($select[0] == 3 and $mass[2]>$filter_value ) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices 
                                          values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]' ) ");
        }
        elseif ($select[0] == 4 and $mass[3]>$filter_value) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices 
                                          values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]') ");
        }
    }
    elseif($kol==1 and $filter==3){
        if ($select[0] == 1 and $mass[0]<$filter_value) {

            $result = mysqli_query($conn,"INSERT INTO balancesandprices 
                                          values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]' )  ");
        }

        elseif ($select[0] == 3 and $mass[2]<$filter_value ) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices 
                                          values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]' ) ");
        }
        elseif ($select[0] == 4 and $mass[3]<$filter_value) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices 
                                          values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]') ");
        }

}

    elseif($kol==2 and $filter==1){

        if ($select[0] == 1 and $select[1] == 3 and $mass[0]==$filter_value and $mass[2]==$filter_value) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices
                                    values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]') ");
        }
        elseif ($select[0] == 1 and $select[1] == 4 and $mass[0]==$filter_value and $mass[3]==$filter_value) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices
                                    values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]') ");
        }

        elseif ($select[0] == 3 and $select[1] == 4 and $mass[2]==$filter_value and $mass[3]==$filter_value) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices
                                    values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]') ");
        }

    }
    elseif($kol==2 and $filter==2){

        if ($select[0] == 1 and $select[1] == 3 and $mass[0]>$filter_value and $mass[2]>$filter_value) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices
                                    values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]') ");
        }
        elseif ($select[0] == 1 and $select[1] == 4 and $mass[0]>$filter_value and $mass[3]>$filter_value) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices
                                    values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]') ");
        }

        elseif ($select[0] == 3 and $select[1] == 4 and $mass[2]>$filter_value and $mass[3]>$filter_value) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices
                                    values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]') ");
        }

    }
    elseif($kol==2 and $filter==3){

        if ($select[0] == 1 and $select[1] == 3 and $mass[0]<$filter_value and $mass[2]<$filter_value) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices
                                    values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]') ");
        }
        elseif ($select[0] == 1 and $select[1] == 4 and $mass[0]<$filter_value and $mass[3]<$filter_value) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices
                                    values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]') ");
        }

        elseif ($select[0] == 3 and $select[1] == 4 and $mass[2]<$filter_value and $mass[3]<$filter_value) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices
                                    values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]') ");
        }

    }
    elseif($kol==3 and $filter==1){
        if ($select[0] == 1 and $select[1] == 3 and $select[2] == 4 and $mass[0]==$filter_value and $mass[2]==$filter_value and $mass[3]==$filter_value) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices
                                    values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]') ");
        }

    }
    elseif($kol==3 and $filter==2){
        if ($select[0] == 1 and $select[1] == 3 and $select[2] == 4 and $mass[0]>$filter_value and $mass[2]>$filter_value and $mass[3]>$filter_value) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices
                                    values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]') ");
        }

    }
    elseif($kol==3 and $filter==3){
        if ($select[0] == 1 and $select[1] == 3 and $select[2] == 4 and $mass[0]<$filter_value and $mass[2]<$filter_value and $mass[3]<$filter_value) {
            $result = mysqli_query($conn,"INSERT INTO balancesandprices
                                    values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]') ");
        }

    }


    elseif($kol==4 and $filter==1)
    {
        if ($select[0] == 1 and $select[1] == 3 and $select[2] == 4 and $mass[0]==$filter_value and $mass[2]==$filter_value and $mass[3]==$filter_value)
            $result = mysqli_query($conn,"INSERT INTO balancesandprices
                                    values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]' ) ") ;
    }
    elseif($kol==4 and $filter==2)
    {
        if ($select[0] == 1 and $select[1] == 3 and $select[2] == 4 and $mass[0]>$filter_value and $mass[2]>$filter_value and $mass[3]>$filter_value)
            $result = mysqli_query($conn,"INSERT INTO balancesandprices
                                    values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]' ) ") ;
    }
    elseif($kol==4 and $filter==3)
    {
        if ($select[0] == 1 and $select[1] == 3 and $select[2] == 4 and $mass[0]<$filter_value and $mass[2]<$filter_value and $mass[3]<$filter_value)
            $result = mysqli_query($conn,"INSERT INTO balancesandprices
                                    values ('$mass[0]','$mass[1]','$mass[2]','$mass[3]' ) ") ;
    }



}
fclose($file);
mysqli_close($conn);
echo '<script> window.alert('.'"'.'Успешно сохранено'.'"'.') </script>';

?>
<script>
    document.location.href="index.html"
</script>
