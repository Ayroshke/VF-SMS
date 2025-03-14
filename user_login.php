<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KyU | Sign in</title>

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

.box {
    background: white;
    padding: 30px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    width: 350px;
    text-align: center;
    border-radius: 10px;
}

.box form h2 {
    margin-bottom: 20px;
    color: #28a745;
}

.input-box {
    width: 100%;
    margin: 15px 0;
}

.input-box input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/* Buttons */
input[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
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

/* Links */
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
    .box {
        width: 90%;
        padding: 20px;
    }

    .input-box input {
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
    .box {
        width: 95%;
        padding: 15px;
    }

    .box form h2 {
        font-size: 20px;
    }

    .input-box input {
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
    <div class="box">
        <form action="logg.php" method="post">
            <h2>Kirinyaga University</h2>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required />
               
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="********" required />
            
            </div>
            <input type="submit" value="Sign In" />
            <a href="index.html" class="btn">Cancel</a>
            <br>
            <br>

            

            <div class="links">
                
            <label>Don't Have An Account?</label><a href="register.php">Sign Up</a>
            </div>
        </form>
    </div>
</body>

</html>
