<?php

include 'config.php'; 

session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_user'])) {
    $username_to_delete = $_POST['delete_user'];

   
    $delete_query = "DELETE FROM users WHERE username = '$username_to_delete'";
    $delete_result = $conn->query($delete_query);

    if ($delete_result) {
        echo "User deleted successfully!";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}


$query = "SELECT * FROM users";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f4f4f4;
    text-align: center;
    padding: 20px;
}

/* Back Button */
a {
    text-decoration: none;
    font-size: xx-large;
    display: inline-block;
    margin-bottom: 20px;
    color: #007BFF;
}

a:hover {
    color: #0056b3;
}

/* Admin Dashboard Header */
h1 {
    color: #333;
    margin-bottom: 20px;
}

h2 {
    color: #555;
    margin-bottom: 10px;
}

/* Table Styling */
table {
    width: 80%;
    margin: 0 auto;
    border-collapse: collapse;
    background: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: center;
}

th {
    background-color: #007BFF;
    color: white;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #e2e6ea;
}

/* Delete Button */
button {
    background-color: red;
    color: white;
    border: none;
    padding: 8px 12px;
    cursor: pointer;
    border-radius: 5px;
}

button:hover {
    background-color: darkred;
}

/* Footer */
footer {
    background: #333;
    color: white;
    padding: 10px;
    position: fixed;
    width: 100%;
    bottom: 0;
    left: 0;
    text-align: center;
}

@media screen and (max-width: 1024px) {
    table {
        width: 90%;
    }
}

@media screen and (max-width: 768px) {
    table {
        width: 100%;
    }

    th, td {
        padding: 8px;
        font-size: 14px;
    }

    button {
        padding: 6px 10px;
    }
}

@media screen and (max-width: 480px) {
    h1 {
        font-size: 20px;
    }

    h2 {
        font-size: 18px;
    }

    a {
        font-size: 16px;
    }

    table {
        font-size: 12px;
    }

    th, td {
        padding: 6px;
    }

    button {
        padding: 5px 8px;
    }
}
    </style>
</head>

<body>

<h1>Welcome to the Admin Dashboard</h1>

    <h2>Total Users:</h2>
    <table border="1">
        <tr>
            <th>Username</th>
            
            <th>Email</th>
            <th>Phone Nummber</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['username'] ?></td>
           
            <td><?= $row['email'] ?></td>
            <td><?= $row['mobile_number'] ?></td>
            <td>
                <form method="post">
                    <input type="hidden" name="delete_user" value="<?= $row['username'] ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <br>
   
</body>
<footer>
    <a href="admin.php">🔙</a>
    <p>&copy; 2025 UniVoice Platform. All rights reserved.</p>
</footer>

</html>