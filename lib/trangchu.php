<?php
function getOneNews_inTop()
{
    $qr = "SELECT * FROM tin ORDER BY idTin DESC LIMIT 0,1";
    return mysql_query($qr);
}

function get5news_inTop()
{
    $qr = "SELECT * FROM tin ORDER BY idTin DESC LIMIT 1,6";
    return mysql_query($qr);
}

function getMoreWarchNews(){
    $qr = "SELECT * FROM tin ORDER BY SoLanXem DESC LIMIT 0,6";
    return mysql_query($qr);
}

function getNews_inLeft($idLT)
{
    $qr = "SELECT * FROM tin WHERE idLT=$idLT ORDER BY idTin DESC LIMIT 0,1";
    return mysql_query($qr);
}

function get5News_inLeft($idLT)
{
    $qr = "SELECT * FROM tin WHERE idLT=$idLT ORDER BY idTin DESC LIMIT 1,6";
    return mysql_query($qr);
}

function getNameTypesNews($idLT){
    $qr = "SELECT Ten FROM loaitin WHERE idLT=$idLT";

    $typeNews = mysql_query($qr);

    $row = mysql_fetch_array($typeNews);

    
    return $row['Ten'];

}

function getTypesMenu() {
    $qr = "SELECT * FROM theloai";
    return mysql_query($qr);
}

function getChildTypes($idLT) {
    $qr = "SELECT * FROM loaitin WHERE idTL=$idLT";
    return mysql_query($qr);
}


 function getOneNewsInMain($idLT)
{
    $qr = "SELECT * FROM tin WHERE idTL=$idLT ORDER BY idTin DESC LIMIT 0,1";
    return mysql_query($qr);
}

function getThreeNewsInMain($idLT){
    $qr = "SELECT * FROM tin WHERE idTL=$idLT ORDER BY idTin DESC LIMIT 1,2";
    return mysql_query($qr);
}

function getNewsByType($idLT) {
    $qr = "SELECT * FROM tin WHERE idLT=$idLT ORDER BY idTin DESC";
    return mysql_query($qr);
}


function getNewsByType_Paginate($idLT, $numInPage, $page) {
    $qr = "SELECT * FROM tin WHERE idLT=$idLT ORDER BY idTin DESC LIMIT $page, $numInPage";
    return mysql_query($qr);
}

function getNumberNewsByType($idLT)
{
   $qr = "SELECT COUNT(*) FROM tin WHERE idLT=$idLT";
   return mysql_query($qr);
}

function breadCrumb($idLT) {
        $qr = "SELECT idLT, TenTL, Ten FROM theloai,loaitin WHERE theloai.idTL = loaitin.idTL AND idLT=$idLT";
        return mysql_query($qr);
}


function getDetaltNews($idTin) {
    $qr = "SELECT * FROM tin WHERE idTin=$idTin";
    return mysql_query($qr);
}

function getNewsSameType($idTin, $idLT) {
    $qr = "SELECT * FROM tin WHERE idTin <>$idTin AND idLT=$idLT ORDER BY RAND() LIMIT 0,3";
    return mysql_query($qr);
}

function updateNumOfSeen($idTin) {
    $qr = "UPDATE tin SET SoLanXem = SoLanXem + 1 WHERE idTin=$idTin"; 
    mysql_query($qr);
}
