<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | CRUD</title>
    <style>
    *{margin: 0;}
        body{
            background-image: url("back_ground.png");
            height: 100vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student Add<a href="index.php" class="btn btn-danger float-end">BACK</a></h4>
                </div>
                <div class="card-body">
                    <form action="includes.php" method="POST">
                        <div class="mb-3">
                            <label for="firstname">First Name</label>
                            <input type="text" name="firstname" class="form-control" id="firstname">
                        </div>
                        <div class="mb-3">
                            <label for="lastname">Last Name</label>
                            <input type="text" name="lastname" class="form-control" id="lastname">
                        </div>
                        <div class="mb-3">
                            <label for="emailname">Student Email</label>
                            <input type="text" name="emailname" class="form-control" id="emailname">
                        </div>
                        <div class="mb-3">
                            <label for="phonenum">Phone Number</label>
                            <input type="text" name="phonenum" class="form-control" id="phonenum">
                        </div>
                        <div class="mb-3">
                            <label for="password">Student Password</label>
                            <input type="text" name="password" class="form-control" id="password">
                        </div>
                        <div class="mb-3">
                            <label for="coursename">Student Course</label>
                            <input type="text" name="coursename" class="form-control" id="coursename">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_student" class="btn btn-primary" value="submit">Save Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
