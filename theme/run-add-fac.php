<!DOCTYPE html>
<html>

    <?php

    include ("../../ems_connection.php");

        $fac_id = $fac_name = $fac_DOJ = $qualification = $depart = '';

        if(isset($_POST['submit']))
        {
            $fac_id = isset($_POST['fac_id']) ? $_POST['fac_id'] : '';
            $fac_name = isset($_POST['fac_name']) ? $_POST['fac_name'] : '';
            $fac_DOJ = isset($_POST['fac_DOJ']) ? $_POST['fac_DOJ'] : '';
            $qualification = isset($_POST['qualification']) ? $_POST['qualification'] : '';
            $depart = isset($_POST['department']) ? $_POST['department'] : '';

            //echo $stu_id;
        }


        $sql = "INSERT INTO faculty_tab (fac_id, fac_name, fac_DOJ, qualification, department) VALUES ('$fac_id', '$fac_name', '$fac_DOJ', '$qualification', '$depart')";

        $rs = mysqli_query($connect, $sql);

    ?>
</html>