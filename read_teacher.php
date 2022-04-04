<?php
require "includes/header.php";
require "includes/menu.php";
require_once "includes/dbcon.php";
$query = "SELECT * FROM teacher";
$result = mysqli_query($conn, $query);
?>

<br><br>
<h1>All Teacher</h1>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>dept</th>
            <th>nid</th>
            <th>birth</th>
            <th>address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($result as $teacher) {
        ?>
            <tr>
                <td><?= $teacher['id'] ?></td>
                <td><?= $teacher['dept'] ?></td>
                <td><?= $teacher['nid'] ?></td>
                <td><?= $teacher['birth'] ?></td>
                <td><?= $teacher['address'] ?></td>
                <td><a href="#">Update</a></td>
                <td><a href="delete_teacher.php?id=<?=$teacher['id']?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
require "includes/footer.php";
?>