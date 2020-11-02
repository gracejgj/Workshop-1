<?php

//Including Database configuration file.

$con = MySQLi_connect(
   "localhost", //Server host description.
   "root", //Database userdescription.
   "", //Database password.
   "florist" //Database description or anything you would like to call it.
);
//Check connection
if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}

//Getting value of "search" variable from "script.js".

if (isset($_POST['search'])) {

//Search box value assigning to $description variable.

   $description = $_POST['search'];

//Search query.

   $Query = "SELECT description FROM tbl_product WHERE description LIKE '%$description%' LIMIT 5";

//Query execution

   $ExecQuery = MySQLi_query($con, $Query);

//Creating unordered list to display result.

   echo '

<ul>

   ';

   //Fetching result from database.

   while ($Result = MySQLi_fetch_array($ExecQuery)) {

       ?>

   <!-- Creating unordered list items.

        Calling javascript function descriptiond as "fill" found in "script.js" file.

        By passing fetched result as parameter. -->

   <li onclick='fill("<?php echo $Result['description']; ?>")'>

   <a>

   <!-- Assigning searched result in "Search box" in "search.php" file. -->

       <?php echo $Result['description']; ?>

   </li></a>

   <!-- Below php code is just for closing parenthesis. Don't be confused. -->

   <?php

}}


?>

</ul>