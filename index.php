<?php 
$result = null;
if(isset($_POST['submit'])){
    $fNumber = $_POST['first-number'];
    $sNumber = $_POST['second-number'];

    $result = $fNumber + $sNumber;
}else{

}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <!-- form start -->
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="mb-3">
                        <label for="first-number" class="form-label">Enter Your First Number</label>
                        <input type="number" name="first-number" class="form-control first-number" id="first-number"
                            placeholder="Input first number" required>
                    </div>
                    <div class="mb-3">
                        <label for="second-number" class="form-label">Enter Your Second Number</label>
                        <input type="number" name="second-number" class="form-control second-number" id="second-number"
                            value="20" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
                <!-- form end -->
                <div>
                    <h2 class="mt-3"><?php echo 'Your result is'. ' '. $result; ?></h2>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>