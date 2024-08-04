<?php
include 'dbconnect.php';
$sql = "SELECT * FROM list_leads";
$mass=[];
if($result = $link->query($sql)){
    foreach($result as $row){
        $mass[]=[
            'ID'=>$row["id"],
            'FIO'=>$row["FIO"],
            'PHONE'=>$row["PHONE"],
            'EMAIL'=>$row["EMAIL"],
            'CITY'=>$row["CITY"],
        ];
    }
}
header("Content-type: text/csv"); 
header("Content-Disposition: attachment; filename=file.csv"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 
 
$buffer = fopen('../csv/file.csv', 'w'); 
fputs($buffer, chr(0xEF) . chr(0xBB) . chr(0xBF));
foreach($mass as $val) { 
	fputcsv($buffer, $val, ';'); 
} 
fclose($buffer); 
exit();
