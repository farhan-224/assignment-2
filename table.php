<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Table</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Massage</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "contact");
            $sql = "SELECT * FROM contact";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                </tr>
            <?php
            }
            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</div>
    </body>
</html>