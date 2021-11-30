<?php  
require_once 'functions.php';
if(isset($_POST['submit'])){
    tambah($_POST);
}
else{
    header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <title>Document</title>
</head>

<body>

    <div class="container p-5">
        <div class="text-center">
            <img src="https://www.millergroup.ca/wp-content/uploads/2017/05/Checkmark.png" class="rounded"
                alt="Completed" height="350">
            <div class="text-center p-3">
                <h2>Terima Kasih Telah Mengisi</h2>
                <h2><span class="text-success">Form Survey Vaksinasi</span> Kami.</h2>
                <br>
                <a href="index.php"><button type="button" class="btn btn-secondary">Isi Form Lagi</button></a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>