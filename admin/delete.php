<?php
 include '../core/confi.php';
if($_REQUEST['empid']) {
$sql = "DELETE FROM cake WHERE id='".$_REQUEST['empid']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
if($resultset) {
echo "Record Deleted";
}
}
?>

<!--pie delete -->

<?php
 include '../core/confi.php';
if($_REQUEST['pieid']) {
$sql = "DELETE FROM pies WHERE id='".$_REQUEST['pieid']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
if($resultset) {
echo "Record Deleted";
}
}
?>


<!-- dessert delete-->

<?php
 include '../core/confi.php';
if($_REQUEST['dessertid']) {
$sql = "DELETE FROM desserts WHERE id='".$_REQUEST['dessertid']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
if($resultset) {
echo "Record Deleted";
}
}
?>

<!-- basic delete-->

<?php
 include '../core/confi.php';
if($_REQUEST['basicid']) {
$sql = "DELETE FROM basic WHERE id='".$_REQUEST['basicid']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
if($resultset) {
echo "Record Deleted";
}
}
?>

<!-- cheese delete-->

<?php
 include '../core/confi.php';
if($_REQUEST['cheeseid']) {
$sql = "DELETE FROM cheese WHERE id='".$_REQUEST['cheeseid']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
if($resultset) {
echo "Record Deleted";
}
}
?>


<!-- dough delete-->

<?php
 include '../core/confi.php';
if($_REQUEST['doughid']) {
$sql = "DELETE FROM dough WHERE id='".$_REQUEST['doughid']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
if($resultset) {
echo "Record Deleted";
}
}
?>

<!-- dough delete-->

<?php
 include '../core/confi.php';
if($_REQUEST['frenchid']) {
$sql = "DELETE FROM french_desert WHERE id='".$_REQUEST['frenchid']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
if($resultset) {
echo "Record Deleted";
}
}
?>

<!-- dough delete-->

<?php
 include '../core/confi.php';
if($_REQUEST['puddingid']) {
$sql = "DELETE FROM pudding WHERE id='".$_REQUEST['puddingid']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
if($resultset) {
echo "Record Deleted";
}
}
?>

<!--cupcake delete-->

<?php
 include '../core/confi.php';
if($_REQUEST['cupcakeid']) {
$sql = "DELETE FROM cupcake WHERE id='".$_REQUEST['cupcakeid']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
if($resultset) {
echo "Record Deleted";
}
}
?>


<!-- cookies delete -->

<?php
 include '../core/confi.php';
if($_REQUEST['cookiesid']) {
$sql = "DELETE FROM cookies WHERE id='".$_REQUEST['cookiesid']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
if($resultset) {
echo "Record Deleted";
}
}
?>

<?php
 include '../core/confi.php';
if($_REQUEST['breadid']) {
$sql = "DELETE FROM bread WHERE id='".$_REQUEST['breadid']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
if($resultset) {
echo "Record Deleted";
}
}
?>


<?php
 include '../core/confi.php';
if($_REQUEST['reviewid']) {
$sql = "DELETE FROM review WHERE id='".$_REQUEST['reviewid']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
if($resultset) {
echo "Record Deleted";
}
}
?>