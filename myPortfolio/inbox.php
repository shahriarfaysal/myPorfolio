<?php
include_once  'database.php';
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages Table</title>
    <style>
table {
    width: 100%;
    border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
    padding: 12px;
            border: 1px solid #ddd;
        }
        th {
    background-color: #f4f4f4;
        }
        tr:nth-child(even) {
background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Mail Address</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $conn = databaseConn();
        if ($conn) {
        $sql = "SELECT * FROM messages";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["subject"]. "</td><td>" . $row["message"]. "</td><td>" . $row["mTime"]. "</td></tr>";
        }
        } else {
        echo "0 results";
        }
        $conn->close();
        } else {
        echo "Failed to connect to the database.";
        }
        ?>
        </tbody>
    </table>
</body>
</html>
