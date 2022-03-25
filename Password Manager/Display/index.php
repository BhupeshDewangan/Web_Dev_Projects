<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password);

    if (!$conn) {
        die("Connection failed".$conn->connect_error);
    }

    $sql = "SELECT * FROM `pmss`.`passsaver`";
    // $sql = "SELECT * FROM `passsaver`";


?>
    <!-- $sql = "SELECT * FROM `pmss`.`passsaver`"; -->
    <!-- $result = mysqli_query($conn, $sql); -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style1.css" />
    <title>Displaying The Database</title>
  </head>

  <body>
    <form action="index.php" method="post">

    <h1>ALL ITEMS</h1><br><br>
    <main>
      <center>
      <table id="table2">

      <thead id="thead">
        <tr class="tr1">
          <th class="th1">S.no</th>
          <th class="th1">Name</th>
          <th class="th1">Email</th>
          <th class="th1">Mobile No.</th>
          <th class="th1">Sitename</th>
          <th class="th1">Password</th>
        </tr>
    </thead>


        <?php
          $result = mysqli_query($conn, $sql);
        //   $count = mysqli_num_rows($result);
          if (mysqli_num_rows($result) > 0) {
              echo $conn->error;
              while ($row = mysqli_fetch_assoc($result)) {
        ?>

    <tbody class="tbody">
        <tr>
          <td><?php echo $row['sno'];?></td>
          <td><?php echo $row['nameu'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['mono'];?></td>
          <td><?php echo $row['namesite'];?></td>
          <td><?php echo $row['password'];?></td>
        </tr>
    </tbody>


        <?php
              }
            }
            ?>

      </table>
          </center>    
    </main>
    </form>
  </body>
</html>