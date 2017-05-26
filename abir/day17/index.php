<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1><marquee>Signup Form</marquee> </h1>
        <form action="registrationSave.php" method="post" enctype="multipart/form-data"> <!-- action="#" Means data of the form is submitted on the same page -->
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" name="name" placeholder="Full Name" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                <input type="number" class="form-control" name="studentId" placeholder="BRACu Student ID" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input type="number" class="form-control" name="phoneNo" placeholder="Phone No." required>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-option-horizontal"></i></span>
                <input type="password" class="form-control" name="pass" placeholder="Password" required>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>
                <input type="password" class="form-control" name="rePass" placeholder="Repeat Password" required>
            </div>
            <div class="input-group">
                <label>Your Profile Picture</label>
                <input type="file" class="form-control" name="proPicFile" placeholder="Profile Picture">
            </div>
            <button type="submit" class="btn btn-default" value="regSubmit" name="regButton">Submit</button>


        </form>
    </div>
</body>
</html>