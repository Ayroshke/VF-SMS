<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css" />

    <style>
      /* General Reset */
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

/* Login Form Container */
.box {
    background: white;
    padding: 25px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    width: 350px;
    text-align: center;
    border-radius: 10px;
}

/* Title */
.box h2 {
    margin-bottom: 20px;
    color: #28a745;
}

/* Input Box */
.inputbox {
    position: relative;
    width: 100%;
    margin: 15px 0;
}

.inputbox input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.inputbox span {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #8f8f8f;
    font-size: 1em;
    transition: 0.5s;
    pointer-events: none;
}

.inputbox input:focus ~ span,
.inputbox input:valid ~ span {
    font-size: 0.75em;
    transform: translateY(-30px);
    color: black;
}

/* Buttons */
.btn, input[type="submit"] {
    width: 48%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    transition: 0.3s;
}

.btn {
    background: #dc3545;
    color: white;
    margin-right: 5px;
}

.btn:hover {
    background: #b52b3a;
}

input[type="submit"] {
    background: #28a745;
    color: white;
}

input[type="submit"]:hover {
    background: #218838;
}

/* Responsive Design */
@media (max-width: 450px) {
    .box {
        width: 90%;
        padding: 20px;
    }

    .inputbox input {
        font-size: 14px;
    }

    .btn, input[type="submit"] {
        width: 100%;
        margin-bottom: 10px;
    }
}


    </style>
  </head>
    
  <body>
    <div class="box">
        <form action="log.php" method="post">
            <h2>KyU Admin</h2>
           
            <div class="inputbox">
                <input type="text" name="username" required />
                <span>Username</span>
                
            </div>
            <div class="inputbox">
                <input type="password" name="password" required />
                <span>Password</span>
                
            </div>

            
            <a href="index.html" class="btn">Cancel</a>
            <input type="submit" value="Login" />
            
        </form>
    </div>
</body>
</html>