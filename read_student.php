<?php
require "includes/header.php";
require "includes/menu.php";

require_once "includes/dbcon.php";
$query = "SELECT * FROM student";
$result = mysqli_query($conn, $query);
?>
<br><br>
<h1>All Students</h1>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>dept</th>
            <th>nid</th>
            <th>birth</th>
            <th>address</th>
            <th>Action</th>
            <th>payment</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($result as $student) {
        ?>
            <tr>
                <td><?= $student['student_id'] ?></td>
                <td><?= $student['dept'] ?></td>
                <td><?= $student['nid'] ?></td>
                <td><?= $student['birth'] ?></td>
                <td><?= $student['address'] ?></td>
                <td>
                    <a href="delete_student.php?id=<?= $student['student_id'] ?>">Delete</a>
                    <a href="update_student.php?id=<?= $student['student_id'] ?>">Update</a>
                </td>
                <td>
                    <a href="create_payment.php?id=<?= $student['student_id']?>">Make Payment</a>
                    <a href="read_payment.php?id=<?= $student['student_id'] ?>">Show Payment</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
require "includes/footer.php";
?>