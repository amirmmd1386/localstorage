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
        <h2>Insert</h2>
    <form action="insert.php" method="get">
        <div class="mb-3 mt-3">
            <label for="email">UserName:</label>
            <input type='text' class="form-control" name='username' id='username'required>
            </label>
        </div>
        <div class="mb-3 mt-3">
            <label for="email">Password:</label>
            <input type='text' class="form-control" name='password' id='password'required>
            </label>
        </div>
        <div class="mb-3 mt-3">
            <label for="email">FullName:</label>
            <input type='text' class="form-control" name='fname' id='fname'required>
            </label>
        </div>
        <input type="submit" class="btn btn-secondary" value="Insert">
    </form>
    </div>
    <?php
    if (isset($_GET['username'])) {
        $link = mysqli_connect("localhost", "root", "", "localstorage_dbl");
        $userName = $_GET['username'];
        $Password = $_GET['password'];
        $fname = $_GET['fname'];
        $query = "insert into users (fname,username,password) VALUES ('$fname','$userName','$Password')";
        mysqli_query($link, $query);
        echo "<script>window.location.replace('index.php')</script>";
    }
    ?>
</body>

</html>