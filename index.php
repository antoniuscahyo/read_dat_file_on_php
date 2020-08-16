<?php
$attlog = file("attlog_aug_20.dat");

$pin = $attlog[0];
$tanggal = $attlog[1];
$jam = $attlog[2];
$status1 = $attlog[3];
$status2 = $attlog[4];
$status3 = $attlog[5];
$status4 = $attlog[6];
// print_r($attlog);
foreach ($attlog as $key => $value) {
    $expl_data = explode('	',trim($value));
    $expl_datetime = explode('	',trim($expl_data[1]));
    echo $expl_data[0].' '.$expl_datetime[0].' '.$expl_datetime[2].' '.$expl_data[3].'<br>';
    // echo $value.'<br>';
}
// print("<p> $pin $tanggal $jam $status1 </p>");