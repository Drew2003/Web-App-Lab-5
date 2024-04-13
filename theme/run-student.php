<?php
include("../../ems_connection.php");

$sql_product = "SELECT * FROM student_tab";
$result_product = $connect->query($sql_product);
$count = 1;
?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Year of Enrollment</th>
        <th>Major</th>
        <th>CGPA</th>
        <th>Year of Graduation</th>
    </tr>
    <?php
    while ($row_product = $result_product->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row_product["stu_id"]; ?></td>
            <td><?php echo $row_product["stu_name"]; ?></td>
            <td><?php echo $row_product["stu_year_of_enrollment"]; ?></td>
            <td><?php echo $row_product["stu_major"]; ?></td>
            <td><?php echo $row_product["CGPA"]; ?></td>
            <td><?php echo $row_product["year_of_graduation"]; ?></td>
        </tr>
        <?php
    }
    ?>
</table>
