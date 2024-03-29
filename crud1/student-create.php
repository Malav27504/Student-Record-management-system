<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Student Create</title>
    <style>
        /* body{
            background-color: #F5F5DC;
            margin-bottom : 100px;
            
        } */

        body{
            /* background-color: #F5F5DC; */
            background-image: url('background.jpg'); /* Add your background image URL here */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #ffffff; /* Text color */
            margin-bottom: 100px;

        }

        .container {
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent background for better readability */
            padding: 20px;
            border-radius: 10px;
            margin-top: 5%;
            color:black;
        }

        
        .card-header {
            background-color: #343a40; /* Dark background color for card header */
            color: #ffffff; /* Text color for card header */
        }

        .footer{
            height:70px;
            padding-top:20px;
        }
        .nav{
            display: flex;
            justify-content: space-around;
        }
    </style>
</head>
<body>
<header>
            
            <nav class="nav">
                <ul>
                   <li><a class="active" href="index.php">Home</a></li>
                   <li><a  href="student-edit.php">Edit</a></li>
                   <li><a  href="student-view.php">View</a></li>
                   <li><a  href="#about">About</a></li>
                    
                </ul>
                </nav>
        </header>

<div class="container mt-5">

    <?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student Add
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label>Student Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Student Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Student Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Student Course</label>
                            <input type="text" name="course" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Student Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
        <p>Created by Malav Panchal</p>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
