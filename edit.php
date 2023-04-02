<?php 
    require "config.php";
    $id = $_GET["id"];

    if(isset($_POST["submit"])) {
        $name = $_POST["name"];
        $win = $_POST["win"];
        $defeat = $_POST["defeat"];
        $draw = $_POST["draw"];
        $no_contest = $_POST["no_contest"];
        $height = $_POST["height"];
        $divison = $_POST["divison"];

        $sql = "UPDATE `data` SET `full_name`='$name', `wins`='$win', `defeats`='$defeat', `draws`='$draw', `no_contests`='$no_contest', `height`='$height', `weight_class`='$divison' WHERE id = $id";

        $result = mysqli_query($conn, $sql);

        if($result) {
            header("location: index.php");
        }
    }

    $sql = "SELECT * FROM `data` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Application | Update record</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section id="add">
        <form method="POST">
            <center><span>Update record 🚀</span></center>
            <input type="text" name="name" value="<?php echo $row["full_name"] ?>" required>
            <div class="flex">
                <input type="number" name="win" value="<?php echo $row["wins"] ?>" required>
                <input type="number" name="defeat" value="<?php echo $row["defeats"] ?>" required>
            </div>
            <div class="flex">
                <input type="number" name="draw" value="<?php echo $row["draws"] ?>" required>
                <input type="number" name="no_contest" value="<?php echo $row["no_contests"] ?>" required>
            </div>
            <input type="number" name="height" value="<?php echo $row["height"] ?>" required>
            <input type="text" name="divison" value="<?php echo $row["weight_class"] ?>" required>
            <button type="submit" name="submit">🔥 Update</button>
        </form>
    </section>
    <script src="cancel.js"></script>
</body>
</html>