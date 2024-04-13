<?php
    include("../../ems_connection.php");

    $sql_product = "SELECT * FROM faculty_tab";
    $result_product = $connect->query($sql_product);
    $count = 1;
?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date of Joining</th>
        <th>Qualification</th>
        <th>Department</th>
    </tr>
    <?php
        while ($row_product = $result_product->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row_product["fac_id"]; ?></td>
                <td><?php echo $row_product["fac_name"]; ?></td>
                <td><?php echo $row_product["fac_DOJ"]; ?></td>
                <td><?php echo $row_product["qualification"]; ?></td>
                <td><?php echo $row_product["department"]; ?></td>
            </tr>
            <?php
        }
    ?>
</table>
