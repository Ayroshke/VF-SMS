<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration</title>
    <style>
        /* General Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Form Container */
form {
    background: white;
    padding: 30px;
    width: 350px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    margin-bottom: 20px;
    color: #28a745;
}

/* Input Fields */
input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/* Submit Button */
input[type="submit"] {
    width: 100%;
    border: none;
    padding: 10px;
    background-color: #28a745;
    color: white;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
    margin-top: 10px;
}

input[type="submit"]:hover {
    background: #218838;
}

/* Cancel Button */
.btn {
    display: inline-block;
    padding: 10px;
    width: 100%;
    text-align: center;
    font-size: 16px;
    color: #fff;
    background: #dc3545;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    transition: background 0.3s;
    margin-top: 10px;
}

.btn:hover {
    background: #b52b3a;
}

/* Links Section */
.links {
    margin-top: 15px;
    font-size: 14px;
}

.links a {
    text-decoration: none;
    color: #28a745;
    font-weight: bold;
}

.links a:hover {
    text-decoration: underline;
}

/* Media Styling */
@media screen and (max-width: 768px) {
    form {
        width: 90%;
        padding: 20px;
    }

    input {
        font-size: 14px;
        padding: 8px;
    }

    input[type="submit"],
    .btn {
        font-size: 14px;
        padding: 8px;
    }
}

@media screen and (max-width: 480px) {
    form {
        width: 95%;
        padding: 15px;
    }

    h2 {
        font-size: 20px;
    }

    input {
        font-size: 14px;
        padding: 8px;
    }

    input[type="submit"],
    .btn {
        font-size: 14px;
        padding: 8px;
    }

    .links {
        flex-direction: column;
        text-align: center;
    }
}


    </style>
</head>
  
<body>
    <center><br><br>
        <form action="registration.php" method="post">
            <h2>User Account Creation</h2>
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="email" name="email" placeholder="@gmail.com" required><br>
            <input type="password" name="password" placeholder="********" required><br>
            <input type="number" name="mobilenumber" placeholder="Phone" required><br>
            </div>
            <input type="submit" name="submit" value="Sign Up">
            <a href="index.html" class="btn">Cancel</a>
            <br>
            <br>

            <div class="links">
                
            <label>Already have an account?</label><a href="user_login.php">Sign In</a>
            </div>
            
        </form>
    </center>
</body>

</html>
