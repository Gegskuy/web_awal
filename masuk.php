<!DOCTYPE html>
<html lang="en">
<head>
    <title>Masuk</title>
    <link rel="stylesheet" type="text/css" href="ceeses.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="bg">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href=" ">Tugas Web PHP (123210136)</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="faktorial.php">Faktorial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kembalian.php">Kembalian</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        <center>
            <br><br><br><br><br><br><br><br>
            <h1 class="font">Selamat Datang, Praktikan<br>Web IF-E</h1>

            <div class="font">____________________________________________________________________________________</div>
            <br><br>

            <?php
                echo "<font color = 'green'> $_POST[nim] </font>";
            ?>
            
        </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>
</html>