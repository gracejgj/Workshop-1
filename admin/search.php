<table class="table table-striped table-responsive">

<tr>

<th>ID</th>

<th>First name</th>

<th>Lastname</th>

<th>Address</th>

<th>Contact</th>

</tr>

<?php

while($row = $result->fetch_assoc()){

    ?>

    <tr>

    <td><?php echo $row['user_id']; ?></td>

    <td><?php echo $row['firstname']; ?></td>

    <td><?php echo $row['lastname']; ?></td>

    <td><?php echo $row['address']; ?></td>

    <td><?php echo $row['contact']; ?></td>

    </tr>

    <?php

}

?>

</table>