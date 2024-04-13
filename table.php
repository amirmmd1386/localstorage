<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Table</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">fullname</th>
                <th scope="col">username</th>
                <th scope="col">password</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $link = mysqli_connect("localhost", "root", "", "localstorage_dbl");
        $query = "select * from users";
        $resualt = mysqli_query($link, $query);
        $row = mysqli_fetch_array($resualt);
        while ($row) {
            echo "<tr>";
            echo "<td scope='row'>$row[userid]</td>";
            echo "<td>$row[fname]</td>";
            echo "<td>$row[username]</td>";
            echo "<td>$row[password]</td>";
            echo "</tr>";
            $row = mysqli_fetch_array($resualt);
        }
        ?>
        </tbody>
    </table>
    <a href="index.php" class="btn btn-secondary m-3">back</a>
</body>

</html>