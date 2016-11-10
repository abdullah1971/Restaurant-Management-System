<?php 

    
    $user='root';
    $pass='';
    $server='localhost';
    $dbname='voting_system';

    $con = new mysqli($server,$user,$pass,$dbname);

    if(!$con)
    {
        die("Database connection failed");
    }

    function insertSingleValue($table_name, $field, $value){

    	global $con;

    	$query = "INSERT INTO $table_name ($field) VALUES ('$value')";

    	mysqli_query($con, $query);
    }




    function insertTwoValue($table_name, $field1, $field2, $value1, $value2){

    	$query = "INSERT INTO $table_name ($field1, $field2) VALUES ('$value1', '$value2')";

    	global $con;

    	mysqli_query($con, $query);

    	/*if(mysqli_query($con, $query)){
    		echo "insert successful";
    	}
    	else{
    		echo "error";
    	}*/


    }


    function insertThreeValue($table_name, $field1, $field2, $field3, $value1, $value2, $value3){

        $query = "INSERT INTO $table_name ($field1, $field2, $field3) VALUES ('$value1', '$value2', '$value3')";

        global $con;

        mysqli_query($con, $query);

        /*if(mysqli_query($con, $query)){
            echo "insert successful";
        }
        else{
            echo "error";
        }*/


    }



    function insertFourValue($table_name, $field1, $field2, $field3, $field4, $value1, $value2, $value3, $value4){

        $query = "INSERT INTO $table_name ($field1, $field2, $field3, $field4) VALUES ('$value1', '$value2', '$value3', $value4)";

        global $con;

        mysqli_query($con, $query);

        /*if(mysqli_query($con, $query)){
            echo "insert successful";
        }
        else{
            echo "error";
        }*/


    }


    function insertFiveValue($table_name, $field1, $field2, $field3, $field4, $field5, $value1, $value2, $value3, $value4, $value5){

    	$query = "INSERT INTO $table_name ($field1, $field2, $field3, $field4, $field5) VALUES ('$value1', '$value2', '$value3', '$value4','$value5')";

    	global $con;

    	mysqli_query($con, $query);

    	/*if(mysqli_query($con, $query)){
    		echo "insert successful";
    	}
    	else{
    		echo "error";
    	}*/


    }


    function findValue($table_name, $condition , $value){

    	$query = "SELECT * FROM $table_name WHERE $condition = '$value'";

    	global $con;

    	$result = mysqli_query($con, $query);

        return $result;

        //echo $result;

    	/*if (mysqli_num_rows($result) > 0){
    		return $result;
    	}else{
    		return "";
    	}*/

    	
    }


    function updateValue($table_name, $condition1, $value1, $condition2, $value2, $condition3, $value3, $condition4, $value4, $condition5, $value5, $final_condition, $final_value){


    	$query = "UPDATE $table_name SET $condition1 = '$value1', $condition2 = '$value2', $condition3 = '$value3', $condition4 = '$value4', $condition5 = '$value5' WHERE $final_condition = '$final_value'";


    	global $con;

    	mysqli_query($con, $query);


    }


    function removeItem($table_name, $condition, $value){

        global $con;

        $query = "DELETE FROM $table_name WHERE $condition = '$value'";

        mysqli_query($con, $query);

        echo '<script> alert("Item has been removed")</script>';
    }

?>