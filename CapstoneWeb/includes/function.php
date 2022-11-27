<?php

function redirecLink($link){
    echo("<script>location.href = '$link';</script>");
}


function dbQuery($q){

     $dbh  = new PDO('mysql:dbname='.DB_DB.';charset=UTF8;host='.DB_HOST.';port='.DB_PORT,DB_USER,DB_PASS);
     $sql=$dbh->query($q);

     if($sql) return "ok:".$sql->fetch(PDO::FETCH_ASSOC); else return "hata :".$dbh->errorInfo()[2];
     $dbh =null;

}

function dbQueryLastId($q){

     $dbh  = new PDO('mysql:dbname='.DB_DB.';charset=UTF8;host='.DB_HOST.';port='.DB_PORT,DB_USER,DB_PASS);
     $sql=$dbh->query($q);
     //$dbh->exec($sql);
     $last_id = $dbh->lastInsertId();

     if($sql) return "ok:".$last_id; else return "hata:".$sql->errorInfo();

}


function dbPrepare($q,$e){
     $dbh  = new PDO('mysql:dbname='.DB_DB.';charset=UTF8;host='.DB_HOST.';port='.DB_PORT,DB_USER,DB_PASS);
     $sql=$dbh->prepare($q);
     $sql->execute($e);
     $dbh =null;
     return $sql;
}

function dbQueryList($q){
     $dbh  = new PDO('mysql:dbname='.DB_DB.';charset=UTF8;host='.DB_HOST.';port='.DB_PORT,DB_USER,DB_PASS);
     $sql=$dbh->query($q);
     $dbh =null;
     return $sql;
}

function uriDataChech($uriData){
     if(filter_var($uriData, FILTER_VALIDATE_IP)){
        //ip
        return 1;
     } else {
         if(filter_var($uriData, FILTER_VALIDATE_URL) or strpos($uriData, ".") !== false){
             //url
             return 3;
             } else {
              //hash
              return 2;
             }
     }
 }


 function getDataUrl($url){
     $curl_handle=curl_init();
     curl_setopt($curl_handle, CURLOPT_URL,$url);
     curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
     curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($curl_handle, CURLOPT_USERAGENT, 'AYBU-Graduation Project');
     $query = curl_exec($curl_handle);
     curl_close($curl_handle);
     return $query;
 }

?>
 