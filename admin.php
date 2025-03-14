<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Manage Suggestions</title>
    <style>
        /* General Styles */
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

/* Heading */
h2 {
    color: #333;
    margin-bottom: 20px;
}

/* Dashboard Section */
.dashboard-section {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
    flex-wrap: wrap;
}

/* Dashboard Cards */
.dashboard-card {
    background: white;
    padding: 20px;
    width: 300px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.dashboard-card h3 {
    color: #333;
    margin-bottom: 10px;
}

.dashboard-card p {
    color: #555;
    line-height: 1.5;
}

/* Hover Effects */
.dashboard-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

/* Buttons */
.dashboard-card a {
    display: inline-block;
    padding: 10px 15px;
    margin-top: 10px;
    text-decoration: none;
    background-color: #007bff;
    color: white;
    border-radius: 5px;
    transition: background 0.3s ease;
}

.dashboard-card a:hover {
    background-color: #0056b3;
}



        footer {
        background: #222;
        color: white;
        padding: 20px 0;
        text-align: center;
    }

    .footer-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        padding: 20px;
    }

    .footer-section {
        width: 30%;
        min-width: 250px;
        margin-bottom: 15px;
    }

    .footer-section h3 {
        border-bottom: 2px solid #28a745;
        display: inline-block;
        padding-bottom: 5px;
        margin-bottom: 10px;
    }

    .footer-section p, .footer-section ul {
        font-size: 14px;
        line-height: 1.5;
    }

    .footer-section ul {
        list-style: none;
        padding: 0;
    }

    .footer-section ul li {
        margin: 5px 0;
    }

    .footer-section ul li a {
        text-decoration: none;
        color: #bbb;
    }

    .footer-section ul li a:hover {
        color: #28a745;
    }

    .footer-bottom {
        background: #111;
        padding: 10px 0;
        margin-top: 10px;
        font-size: 14px;
        color: #333;
    }
/* Responsive Styling */
@media screen and (max-width: 768px) {
    .dashboard-section {
        flex-direction: column;
        align-items: center;
    }

    .dashboard-card {
        width: 90%;
    }
}

@media screen and (max-width: 480px) {
    h2 {
        font-size: 20px;
    }

    .dashboard-card {
        width: 95%;
    }
}
    
    </style>
</head>
  
<body>
    <h2>Welcome, Administrator! Manage users and oversee feedback efficiently.</h2>

    <div class="dashboard-section">
        <div class="dashboard-card">
            <h3>User Management</h3>
            <p>Review and manage registered user accounts with ease.</p>
            <br>
            <br>
            <a href="manageuser.php">Manage Users</a>
        </div>

        <div class="dashboard-card">
            <h3>Suggestion Center</h3>
            <p>Access, review, and respond to submitted suggestions.</p>
            <br>
            <a href="admin_feedback.html">View Suggestions</a>
        </div>
    </div>
    <br>
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>We provide a secure and anonymous platform for students and staff to share their feedback, helping to improve university services and overall experience.</p>
            </div>
    
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Get In Touch</a></li>
                </ul>
            </div>
    
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: support@feedbacksystem.ac.ke</p>
                <p>Phone: +254 712 345 678</p>
                <p>Location: Kirinyaga University, Kenya</p>
            </div>
        </div>
    
        <div class="footer-bottom">
            <p>&copy; 2025 UniVoice Platform | All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>
