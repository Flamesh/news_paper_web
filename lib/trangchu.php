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

?>