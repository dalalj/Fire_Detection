<?php  include("includes/sec.php");

$fQuery = "";

$dbDetails = array(
    'host' => DB_HOST,
    'user' => DB_USER,
    'pass' => DB_PASS,
    //'db'   => 'jtable'
    'db'   => DB_DB
);


 if($_GET['db'] == "accounts") {

    $table = 'accounts';
    $getLink = "accountsAddMember";
    
    // Table's primary key
    $primaryKey = 'id';
    
    
    
    $columns = array(
        array( 'db' => 'username', 'dt' => 0 ),
        array( 'db' => 'name', 'dt' => 1 ),
        array( 'db' => 'surname', 'dt' => 2 ),
        array( 'db' => 'email', 'dt' => 3 ),
        array(
            'db'        => 'authorization',
            'dt'        => 4,
            'formatter' => function( $d, $row ) {
    
                if($d == 2) $mes ='<span class="text-danger">Admin</span>';
                else if($d == 1) $mes ='<span class="text-dark">Member</span>';
    
                return $mes;
            }
        ),
        array(
            'db'        => '',
            'dt'        => 5,
            'dbs' => 'action'
        )
    );
    
    }   
// Include SQL query processing class
require 'ssp.class.php';

       echo json_encode(
        SSP::complex( $_GET, $dbDetails, $table, $primaryKey, $columns,$getLink,$fQuery)
    );
 

 ?>