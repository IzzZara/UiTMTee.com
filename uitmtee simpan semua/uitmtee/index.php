<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>PHP CRUD Application</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        CRUD
    </nav>

    <div class="container">
        <?php
        if (isset($_GET["msg"])) {
            $msg = $_GET["msg"];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            ' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
        <a href="add_new.php" class="btn btn-dark mb-3">Add New</a>
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Type</th>
                    <th scope="col">XS</th>
                    <th scope="col">S</th>
                    <th scope="col">M</th>
                    <th scope="col">L</th>
                    <th scope="col">XL</th>
                    <th scope="col">2XL</th>
                    <th scope="col">3XL</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "connection.php";


                $sql = "SELECT CLO_NUM AS 'clo_num', CLO_NAME AS 'clo_name', IMAGE AS 'image', CLO_PRICE AS 'clo_price', CLO_TYPE AS 'clo_type', XS_QTY AS 'xs_qty', S_QTY AS 's_qty', M_QTY AS 'm_qty', L_QTY AS 'l_qty', XL_QTY AS 'xl_qty', 2XL_QTY AS '2xl_qty', 3XL_QTY AS '3xl_qty' FROM clothes";

               
                $result = mysqli_query($condb, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $target_file = $row['image'];
                ?>
                        <tr>
                            <td><?php echo $row['clo_num']; ?></td>
                            <td><?php echo $row['clo_name']; ?></td>
                            <td><img src="<?php echo $target_file; ?>" style="max-width: 100px;"></td>
                            <td><?php echo $row['clo_price']; ?></td>
                            <td><?php echo $row['clo_type']; ?></td>
                            <td><?php echo $row['xs_qty']; ?></td>
                            <td><?php echo $row['s_qty']; ?></td>
                            <td><?php echo $row['m_qty']; ?></td>
                            <td><?php echo $row['l_qty']; ?></td>
                            <td><?php echo $row['xl_qty']; ?></td>
                            <td><?php echo $row['2xl_qty']; ?></td>
                            <td><?php echo $row['3xl_qty']; ?></td>
                            <td>
                                <a href="edit.php?clo_num=<?php echo $row['clo_num']; ?>" class="text-dark"><i class="fas fa-edit"></i></a>
                                <a href="delete.php?clo_num=<?php echo $row['clo_num']; ?>" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='13'>No records found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
