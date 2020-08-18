<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="catphb2";
// Create connection
$GLOBALS["conn"] = mysqli_connect($servername, $username, $password, $db);

?>

<?php
function getOneNews_inTop()
{
    $qr = "SELECT * FROM tin ORDER BY idTin DESC LIMIT 0,1";
    return mysqli_query( $GLOBALS["conn"], $qr);
}

function get5news_inTop()
{
    $qr = "SELECT * FROM tin ORDER BY idTin DESC LIMIT 1,6";
    return mysqli_query( $GLOBALS["conn"], $qr);
}

function getMoreWarchNews(){
    $qr = "SELECT * FROM tin ORDER BY SoLanXem DESC LIMIT 0,6";
    return mysqli_query( $GLOBALS["conn"], $qr);
}

function getNews_inLeft($idLT)
{
    $qr = "SELECT * FROM tin WHERE idLT=$idLT ORDER BY idTin DESC LIMIT 0,1";
    return mysqli_query( $GLOBALS["conn"], $qr);
}

function get5News_inLeft($idLT)
{
    $qr = "SELECT * FROM tin WHERE idLT=$idLT ORDER BY idTin DESC LIMIT 1,6";
    return mysqli_query( $GLOBALS["conn"], $qr);
}

function getNameTypesNews($idLT){
    $qr = "SELECT Ten FROM loaitin WHERE idLT=$idLT";

    $typeNews = mysqli_query($GLOBALS["conn"], $qr);

    $row = mysqli_fetch_array($typeNews);

    
    return mysqli_query( $GLOBALS["conn"], $qr);

}

function getTypesMenu() {
    $qr = "SELECT * FROM theloai";
    return mysqli_query( $GLOBALS["conn"], $qr);
}

function getChildTypes($idLT) {
    $qr = "SELECT * FROM loaitin WHERE idTL=$idLT";
    return mysqli_query( $GLOBALS["conn"], $qr);
}


 function getOneNewsInMain($idLT)
{
    $qr = "SELECT * FROM tin WHERE idTL=$idLT ORDER BY idTin DESC LIMIT 0,1";
    return mysqli_query( $GLOBALS["conn"], $qr);
}

function getThreeNewsInMain($idLT){
    $qr = "SELECT * FROM tin WHERE idTL=$idLT ORDER BY idTin DESC LIMIT 1,2";
    return mysqli_query( $GLOBALS["conn"], $qr);
}

function getNewsByType($idLT) {
    $qr = "SELECT * FROM tin WHERE idLT=$idLT ORDER BY idTin DESC";
    return mysqli_query( $GLOBALS["conn"], $qr);
}


function getNewsByType_Paginate($idLT, $numInPage, $page) {
    $qr = "SELECT * FROM tin WHERE idLT=$idLT ORDER BY idTin DESC LIMIT $page, $numInPage";
    return mysqli_query( $GLOBALS["conn"], $qr);
}

function getNumberNewsByType($idLT)
{
   $qr = "SELECT COUNT(*) FROM tin WHERE idLT=$idLT";
   return mysqli_query( $GLOBALS["conn"], $qr);
}

function breadCrumb($idLT) {
        $qr = "SELECT idLT, TenTL, Ten FROM theloai,loaitin WHERE theloai.idTL = loaitin.idTL AND idLT=$idLT";
        return mysqli_query( $GLOBALS["conn"], $qr);
}


function getDetaltNews($idTin) {
    $qr = "SELECT * FROM tin WHERE idTin=$idTin";
    return mysqli_query($GLOBALS["conn"], $qr);
}

function getNewsSameType($idTin, $idLT) {
    $qr = "SELECT * FROM tin WHERE idTin <>$idTin AND idLT=$idLT ORDER BY RAND() LIMIT 0,3";
    return mysqli_query( $GLOBALS["conn"], $qr);
}

function updateNumOfSeen($idTin) {
    $qr = "UPDATE tin SET SoLanXem = SoLanXem + 1 WHERE idTin=$idTin"; 
    return mysqli_query( $GLOBALS["conn"], $qr);
}

?>