<?php
$conn  = new mysqli('localhost', 'root', '', 'florist');
$query = "select distinct product_name, category, description, price, product_qty, product_code from tbl_product order by product_id";
$result = $conn->query($query) or die($conn->error . __LINE__);
$fetch_data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $fetch_data[] = $row;
    }
}
$jResponse = json_encode($fetch_data);
echo $jResponse;
?>