<!DOCTYPE html>
<?php

$conn = mysqli_connect("localhost","root","","smart_agriculture");

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM farmers WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0)
    {
        header("Location: dashboard.php");
    }
    else
    {
        echo "<script>alert('Invalid Login');</script>";
    }
}

?>
<html>
<head>

    <title>Login - Smart Agriculture</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background-color:#f5fff5;">

    <div class="container">

        <div class="row justify-content-center mt-5">

            <div class="col-md-5">

                <div class="card shadow p-4">

                    <h2 class="text-center text-success mb-4">
                        Farmer Login
                    </h2>

                    <form method="POST">

                        <div class="mb-3">

                            <label>Email</label>

                            <input type="email" name="email" class="form-control" placeholder="Enter Email">

                        </div>

                        <div class="mb-3">

                            <label>Password</label>

                            <input type="password" name="password" class="form-control" placeholder="Enter Password">

                        </div>

                        <button class="btn btn-success w-100" name="login">
                            Login
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</body>
</html>