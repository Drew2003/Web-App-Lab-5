<?php
include("../../ems_connection.php");

$sql_product = "SELECT * FROM department_tab";
$result_product = $connect->query($sql_product);
$count = 1;
?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Chair</th>
        <th>Dean</th>
        <th>Budget</th>
    </tr>
    <?php
    while ($row_product = $result_product->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row_product["dept_id"]; ?></td>
            <td><?php echo $row_product["dept_name"]; ?></td>
            <td><?php echo $row_product["dept_chair"]; ?></td>
            <td><?php echo $row_product["dept_dean"]; ?></td>
            <td><?php echo $row_product["budget"]; ?></td>
        </tr>
        <?php
    }
    ?>
</table>
