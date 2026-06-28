<?php

$conn = mysqli_connect("localhost","root","","smart_agriculture");

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO farmers(name,email,password)
              VALUES('$name','$email','$password')";

    mysqli_query($conn,$query);

    echo "<script>
    alert('Registration Successful');
    window.location='login.php';
    </script>";
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Farmer Registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background-color:#f5fff5;">

    <div class="container">

        <div class="row justify-content-center mt-5">

            <div class="col-md-5">

                <div class="card shadow p-4">

                    <h2 class="text-center text-success mb-4">
                        Farmer Registration
                    </h2>

                    <form method="POST">

                        <div class="mb-3">

                            <label>Name</label>

                            <input type="text" name="name" class="form-control">

                        </div>

                        <div class="mb-3">

                            <label>Email</label>

                            <input type="email" name="email" class="form-control">

                        </div>

                        <div class="mb-3">

                            <label>Password</label>

                            <input type="password" name="password" class="form-control">

                        </div>

                        <button class="btn btn-success w-100" name="register">

                            Register

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</body>

</html>