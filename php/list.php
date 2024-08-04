<?php
include 'dbconnect.php';
$sql = "SELECT * FROM list_leads";
$mass=[];
if($result = $link->query($sql)){
    foreach($result as $row){
        $mass[$row["id"]]=[
            'FIO'=>$row["FIO"],
            'PHONE'=>$row["PHONE"],
            'EMAIL'=>$row["EMAIL"],
            'CITY'=>$row["CITY"],
        ];
    }
}

echo json_encode($mass);

?>
