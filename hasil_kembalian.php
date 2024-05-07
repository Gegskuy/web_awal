<!DOCTYPE html>
<html lang="en">
<head>
    <title>Uang Kembaliann</title>
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

    <?php
      $kembalian = $_POST['uang'] - $_POST['harga'];
      $seratusribu = floor($kembalian/100000);
      $limapuluhribu = floor(($kembalian-($seratusribu*100000))/50000);
      $duapuluhribu = floor(($kembalian-($seratusribu*100000)-($limapuluhribu*50000))/20000);
      $sepuluhribu = floor(($kembalian-($seratusribu*100000)-($limapuluhribu*50000)-($duapuluhribu*20000))/10000);
      $limaribu = floor(($kembalian-($seratusribu*100000)-($limapuluhribu*50000)-($duapuluhribu*20000)-($sepuluhribu*10000))/5000);
      $duaribu = floor(($kembalian-($seratusribu*100000)-($limapuluhribu*50000)-($duapuluhribu*20000)-($sepuluhribu*10000)-($limaribu*5000))/2000);
      $seribu = floor(($kembalian-($seratusribu*100000)-($limapuluhribu*50000)-($duapuluhribu*20000)-($sepuluhribu*10000)-($limaribu*5000)-($duaribu*2000))/1000);
      $limaratus = floor(($kembalian-($seratusribu*100000)-($limapuluhribu*50000)-($duapuluhribu*20000)-($sepuluhribu*10000)-($limaribu*5000)-($duaribu*2000)-($seribu*1000))/500);
      $duaratus = floor(($kembalian-($seratusribu*100000)-($limapuluhribu*50000)-($duapuluhribu*20000)-($sepuluhribu*10000)-($limaribu*5000)-($duaribu*2000)-($seribu*1000)-($limaratus*500))/200);
      $seratus = floor(($kembalian-($seratusribu*100000)-($limapuluhribu*50000)-($duapuluhribu*20000)-($sepuluhribu*10000)-($limaribu*5000)-($duaribu*2000)-($seribu*1000)-($limaratus*500)-($duaratus*200))/100);
    ?>

    <center>
      <br><br><br><br><br>
      <table border=3>
        <tr>
          <td><div class="font">Harga </div></td>
          <td><?php echo "<font color = 'green', size = '3'> = $_POST[harga]";?></td>
        </tr>

        <tr>
          <td><div class="font">Uang </div></td>
          <td><?php echo "<font color = 'green', size = '3'> = $_POST[uang]";?></td>
        </tr>

        <tr>
          <td><div class="font">Kembalian </div></td>
          <td><?php echo "<font color = 'green', size = '3'> = $kembalian";?></td>
        </tr>
      </table>

      <br><br>

      <table border=3>
        <tr>
          <th><div class="font">Nominal</div></th>
          <th><div class="font">Jumlah</div></th>
        </tr>
        <tr>
          <td><div class="font">Rp100.000</div></td>
          <td><?php echo "<font color = 'green', size = '3'> = $seratusribu";?></td>
        </tr>
        <tr>
          <td><div class="font">Rp50.000</div></td>
          <td><?php echo "<font color = 'green', size = '3'> = $limapuluhribu";?></td>
        </tr>
        <tr>
          <td><div class="font">Rp20.000</div></td>
          <td><?php echo "<font color = 'green', size = '3'> = $duapuluhribu";?></td>
        </tr>
        <tr>
          <td><div class="font">Rp10.000</div></td>
          <td><?php echo "<font color = 'green', size = '3'> = $sepuluhribu";?></td>
        </tr>
        <tr>
          <td><div class="font">Rp5.000</div></td>
          <td><?php echo "<font color = 'green', size = '3'> = $limaribu";?></td>
        </tr>
        <tr>
          <td><div class="font">Rp2.000</div></td>
          <td><?php echo "<font color = 'green', size = '3'> = $duaribu";?></td>
        </tr>
        <tr>
         <td><div class="font">Rp1.000</div></td>
          <td><?php echo "<font color = 'green', size = '3'> = $seribu";?></td>
        </tr>
        <tr>
          <td><div class="font">Rp500</div></td>
          <td><?php echo "<font color = 'green', size = '3'> = $limaratus";?></td>
        </tr>
        <tr>
        <td><div class="font">Rp200</div></td>
          <td><?php echo "<font color = 'green', size = '3'> = $duaratus";?></td>
        </tr>
        <td><div class="font">Rp100</div></td>
          <td><?php echo "<font color = 'green', size = '3'> = $seratus";?></td>
      </table>
    </center>
</body>
</html>