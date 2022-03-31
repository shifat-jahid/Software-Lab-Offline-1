<?php
require "includes/header.php";
require "includes/menu.php";
require_once "includes/dbcon.php";
$student_id = $_GET['id'];
$query = "SELECT * FROM payment WHERE student_id = $student_id";
$result = mysqli_query($conn, $query);
?>

<br><br>
<h1>All Payment</h1>
<table>
    <thead>
        <tr>
            <th>payment_id</th>
            <th>student_id</th>
            <th>amount</th>
            <th>payment_date</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($result as $payment) {
        ?>
            <tr>
                <td><?= $payment['payment_id'] ?></td>
                <td><?= $payment['student_id'] ?></td>
                <td><?= $payment['amount'] ?></td>
                <td><?= $payment['payment_date'] ?></td>
                <td>
                    <a href="update_payment.php?id=<?= $payment['payment_id'] ?>">Update</a>
                    <a href="delete_payment.php?id=<?= $payment['payment_id'] ?>">Delete</a>
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