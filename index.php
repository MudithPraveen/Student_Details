<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./script.php" method="post">
        <h1>Student Details</h1>
        <label for="">Student ID</label>
        <input type="text" name="id"><br>
        <label for="">First Name</label>
        <input type="text" name="fname"><br>
        <label for="">Last Name</label>
        <input type="text" name="lname"><br>
        <label for="">Year</label>
        <input type="year" name="year"><br>
        <input type="submit" name="submit">
    </form>

    <table>
        <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Year</th>
        </tr>
    </table>
</body>
</html>