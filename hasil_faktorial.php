<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hasil</title>
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
        <h1 class="font">FAKTORIAL</h1>

       <?php
          echo "<font color = 'green', size = '6'> $_POST[angka]<br> </font>";
       ?>

       <?php
        function faktorial($x){
          $nomor=1;
          $faktor=1;
          while($nomor <= $x){
            $faktor = $faktor * $nomor;
            $nomor = $nomor + 1;            
          }
          return $faktor;
        }
        
        echo "<font color = 'green', size = '3'>$_POST[angka]! = ";

        for($i = $_POST['angka'] ; $i > 0 ; $i--)
        {
          echo "<font color = 'green', size = '3'>$i . ";
        }

          $x = $_POST['angka'];
          echo "<font color = 'green', size = '3'><br>".faktorial($x);
       ?>
      </center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>
</html>