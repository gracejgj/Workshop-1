<?php
 
  $db_host="localhost";
   $db_user="root";
   $db_pass="";
   $db_name="florist";
 
    $db = new mysqli($db_host, $db_user, $db_pass, $db_name);
     
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
	
if(!empty($_POST))
{
      $aKeyword = explode(" ", $_POST['keyword']);
      $query ="SELECT * FROM table1 WHERE field1 like '%" . $aKeyword[0] . "%'";
      
     for($i = 1; $i < count($aKeyword); $i++) {
        if(!empty($aKeyword[$i])) {
            $query .= " OR field1 like '%" . $aKeyword[$i] . "%'";
        }
      }
     
     $result = $db->query($query);
     echo "<br>You have searched for keywords: " . $_POST['keyword'];
                     
     if(mysqli_num_rows($result) > 0) {
        $row_count=0;
        echo "<br>Result Found: ";
        echo "<br><table border='1'>";
        While($row = $result->fetch_assoc()) {   
            $row_count++;                         
            echo "<tr><td> ROW ".$row_count." </td><td>". $row['field1'] . "</td></tr>";
        }
        echo "</table>";
    }
    else {
        echo "<br>Result Found: NONE";
    }
}
 
?>
