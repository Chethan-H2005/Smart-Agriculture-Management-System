<!DOCTYPE html>
<html>
<head>

    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background:#f5fff5;">

    <nav class="navbar navbar-dark bg-success">

        <div class="container">

            <a class="navbar-brand">
                🌱 Smart Agriculture Dashboard
            </a>

        </div>
    
    </nav>
    <div class="container mt-3 text-end">

    <a href="login.php" class="btn btn-danger">
        Logout
    </a>

</div>

    <div class="container mt-5">

        <div class="row g-4">

            <div class="col-md-4">

                <div class="card shadow p-4 text-center">

                    <h3>🌾 Crop Recommendation</h3>

                    <p>Get best crop suggestions.</p>

                    <a href="crop.php" class="btn btn-success w-100">
                    Open
                    </a>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card shadow p-4 text-center">

                    <h3>☁️ Weather Updates</h3>

                    <p>Check live weather updates.</p>

                    <a href="weather.php" class="btn btn-success w-100">
                    Open
                    </a>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card shadow p-4 text-center">

                    <h3>💰 Market Prices</h3>

                    <p>View agriculture market prices.</p>

                    <a href="market.php" class="btn btn-success w-100">
                    Open
                    </a>

                </div>

            </div>

        </div>

    </div>

</body>
</html>