<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
    <form action="update.php" method="get">
        <?php
        $link = mysqli_connect("localhost", "root", "", "localstorage_dbl");
        $userName = $_GET['UserName'];
        $Password = $_GET['Password'];
        $query1 = "select * from users where username='$userName' and password='$Password'";
        $resualt = mysqli_query($link, $query1);
        $row = mysqli_fetch_array($resualt);
        if (!$row) {
            echo "<script>window.location.replace('index.php')</script>";
        }
        echo "
        <div class='mb-3 mt-3'>
            <label for='email'>UserName:</label>
                <input type='text' class='form-control' name='username' id='username' value='$row[username]'>
                 </label>
        </div>
                <div class='mb-3 mt-3'>
                <label for='email'>Password:</label>
                <input type='text' class='form-control' name='password' id='password' value='$row[password]'>
                 </label>
        </div>
        <div class='mb-3 mt-3'>
                            <label for='email'>FullName:</label>
                <input type='text' class='form-control' name='fname' id='fname' value='$row[fname]'>
                 </label>
        </div>
                <input type='text' class='form-control' name='id' id='id' value='$row[userid]'hidden>
                ";

        mysqli_close($link);
        ?>
        <input type="submit" value="update" class="btn btn-secondary">
        <?php
        echo "<a href='delete.php?id=$row[userid]' class='btn btn-primary'>delete</a>";
        ?>
        <a href="index.php" class="btn btn-primary">login</a>
        <a href="table.php" class="btn btn-primary">show all data</a>
    </form>
    </div>
</body>

</html>