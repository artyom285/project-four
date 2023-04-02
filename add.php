<?php 
    require "config.php";

    if(isset($_POST["submit"])) {
        $name = $_POST["name"];
        $win = $_POST["win"];
        $defeat = $_POST["defeat"];
        $draw = $_POST["draw"];
        $no_contest = $_POST["no_contest"];
        $height = $_POST["height"];
        $divison = $_POST["divison"];

        $sql = "INSERT INTO `data` (`id`, `full_name`, `wins`, `defeats`, `draws`, `no_contests`, `height`, `weight_class`) VALUES (NULL, '$name', '$win', '$defeat', '$draw', '$no_contest', '$height', '$divison')";

        $result = mysqli_query($conn, $sql);

        if($result) {
            header("location: index.php");
        }
    }

    if(isset($_POST["cancel"])) {
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Application | Add more</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section id="add">
        <form method="POST">
            <center><span>Create record 🚀</span></center>
            <input type="text" name="name" placeholder="Fighter's name" required>
            <div class="flex">
                <input type="number" name="win" placeholder="Wins" required>
                <input type="number" name="defeat" placeholder="Defeats" required>
            </div>
            <div class="flex">
                <input type="number" name="draw" placeholder="Draws" required>
                <input type="number" name="no_contest" placeholder="No contests" required>
            </div>
            <input type="number" name="height" placeholder="Height (cm)" required>
            <input type="text" name="divison" placeholder="Divison" required>
            <button type="submit" name="submit">🔥 Add fighter</button>
        </form>
    </section>
    <script src="cancel.js"></script>
</body>
</html>