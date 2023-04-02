<?php 
    require "config.php";

    $sql = "SELECT * FROM `data`";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Application | Homepage</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section id="main">
        <div class="block">
            <a href="add.php" class="create">Add more</a>
            <div class="data">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Wins</th>
                            <th>Defeats</th>
                            <th>Draws</th>
                            <th>No contests</th>
                            <th>Height</th>
                            <th>Divison</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td> <?php echo $row["full_name"] ?> </td>
                                <td> <?php echo $row["wins"] ?> </td>
                                <td> <?php echo $row["defeats"] ?> </td>
                                <td> <?php echo $row["draws"] ?> </td>
                                <td> <?php echo $row["no_contests"] ?> </td>
                                <td> <?php echo $row["height"] . " cm"?> </td>
                                <td> <?php echo $row["weight_class"] ?> </td>
                                <td>
                                    <div style="display: flex; gap: 10px;">
                                        <a href="edit.php?id=<?php echo $row["id"] ?>" class="action"><i class='bx bxs-edit'></i></i></a>
                                        <a href="delete.php?id=<?php echo $row["id"] ?>" class="action"><i class='bx bx-trash'></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php      
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>