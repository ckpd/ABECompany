<?php
/*****
* Connect to the database
* @ return successfull mysqli connection
*******/

function db_connect(){
        $DB_host = "localhost";
        $DB_username = "root";
        $DB_password = "root";
        $DB_name  = "ABE_db";

        $connection = mysqli_connect($DB_host, $DB_username, $DB_password, $DB_name); 
        //check connection
        if($connection === false){
            return mysqli_connect_error();
        }
    return $connection;
};


/*****
* query the database
*
* @ params $query the string
* @ return the result of the query() function
*******/


function db_query($query){
            //connect to database
            $connection = db_connect();
    
            // query the database
            $result= mysqli_query($connection, $query);
    
        return $result;
}


function db_select($query){
    $rows = array();
    $result = db_query($query);

    //it error occurs return false
    if($result === false){
        return false;
    } else {
        
        //if successful, get all rows into and array;
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        
    }
    return $rows;
}


/*****
* @ db_error - error handling
*******/

function db_error(){
        $connection = db_connect();
    return mysqli_error($connection);
}

    
?>