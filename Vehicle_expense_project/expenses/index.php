<?php
// session_start();
include '../layouts/header.php';
include '../connection.php';
include '../layouts/navbar.php';

$userId = $_SESSION['id'];
$query = "SELECT * FROM expense where user_id ='$userId'";

$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <div class="row">

                <div class="col-md-6">
                    <h3>Expenses</h3>
                </div>

                <div class="col-md-6">
                    <a class='btn btn-primary float-right' name='add' href='add.php'>Add</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="table-dark">
                    <th>Expense Name</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Image</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    if ($total != 0) {
                        while ($result = mysqli_fetch_assoc($data)) {
                            echo "<tr>
                            <td> " . $result['expense_name'] . "</td>
                            <td> " . $result['amount'] . "</td>
                            <td> " . $result['date'] . "</td>
                            <td>
                                <img width='70px' src='../file-upload/" . $result['image_name'] . "'/>
                            </td>
                            <td>
                                <a 'name='edit' href='edit.php?id=$result[id]'><i class='bi bi-pencil'></i></a>
                                <a class='ml-3' name='delete' href='delete.php?id=$result[id]'><i class='bi bi-trash-fill'></i></a>
                            </td>

                            </tr>";
                        }

                    } else {
                        echo "<tr>
                            <td colspan='5'>No record found</td>
                        </tr>";
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
