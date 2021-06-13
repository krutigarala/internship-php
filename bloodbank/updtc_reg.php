<?php
include 'conn.php';
$hdn=$_POST['hdn'];
$bnm=$_POST['bnm'];
$orgnm_dt=$_POST['orgnm'];
$add=$_POST['add'];
$dt=$_POST['dttime'];
$cnm=$_POST['campnm'];
$vanue=$_POST['vanue'];
$exdo=$_POST['exdo'];

$qury="UPDATE `camp_registration` SET `bloodbankname`='$bnm',`organization_name` = '$orgnm',`address` = '$add',
`dateandtime` = '$dttime',`campname` = '$campnm', `vanue`='$vanue',`expected_donor`='exdo' WHERE `id` =$hdn";
$res=mysqli_query($qury,$con);
if($res)
{
header("location:viewc_reg.php");
}
?>