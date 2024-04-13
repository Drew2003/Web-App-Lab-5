<!DOCTYPE html>
<html>

    <?php

    include ("../../ems_connection.php");

        $stu_id = $stu_name = $stu_yoe = $stu_major = $CGPA = $year_grad = '';

        if(isset($_POST['submit']))
        {
            $stu_id = isset($_POST['stu_id']) ? $_POST['stu_id'] : '';
            $stu_name = isset($_POST['stu_name']) ? $_POST['stu_name'] : '';
            $stu_yoe = isset($_POST['stu_year_of_enrollment']) ? $_POST['stu_year_of_enrollment'] : '';
            $stu_major = isset($_POST['stu_major']) ? $_POST['stu_major'] : '';
            $CGPA = isset($_POST['CGPA']) ? $_POST['CGPA'] : '';
            $year_grad = isset($_POST['year_of_graduation']) ? $_POST['year_of_graduation'] : '';


            echo $stu_id;
        }


        $sql = "INSERT INTO student_tab (stu_id, stu_name, stu_year_of_enrollment, stu_major, CGPA, year_of_graduation) VALUES ('$stu_id', '$stu_name', '$stu_yoe', '$stu_major', '$CGPA', '$year_grad')";

        $rs = mysqli_query($connect, $sql);

    ?>
</html>