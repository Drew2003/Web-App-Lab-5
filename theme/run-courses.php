<?php
include("../../ems_connection.php");

$sql_product = "SELECT * FROM courses_tab";
$result_product = $connect->query($sql_product);
$count = 1;
?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Faculty ID</th>
        <th>Offered In</th>
        <th>Credits</th>
        <th>Prerequisites</th>
        <th>Type</th>
    </tr>
    <?php
    while ($row_product = $result_product->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row_product["course_id"]; ?></td>
            <td><?php echo $row_product["course_name"]; ?></td>
            <td><?php echo $row_product["fac_id"]; ?></td>
            <td><?php echo $row_product["offered_in"]; ?></td>
            <td><?php echo $row_product["credits"]; ?></td>
            <td><?php echo $row_product["pre_req"]; ?></td>
            <td><?php echo $row_product["type"]; ?></td>
        </tr>
        <?php
    }
    ?>
</table>
