<?php
  include('koneksi.php');
  $query = mysqli_query($dbconnect,"SELECT nama.name AS Name, work.name AS Work, kategori.salary AS Salary FROM nama INNER JOIN work ON nama.id_work = work.id join kategori on nama.id_salary = kategori.id ORDER BY nama.id");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Dinamis</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Menyisipkan Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <style>
    * {box-sizing: border-box;}
    
    body { 
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
    
    .header {
      overflow: hidden;
      background-color: #f1f1f1;
    }
    
    .header a {
      float: left;
      color: black;
      text-align: center;
      text-decoration: none;
      font-size: 18px; 
      line-height: 25px;
      border-radius: 4px;
    }
    
    .header a.logo {
      font-size: 25px;
      font-weight: bold;
    }
    
    .header a:hover {
      background-color: #ddd;
      color: black;
    }
    
    .header a.active {
      background-color: dodgerblue;
      color: white;
    }
    
    .header-left {
      float: center;
    }
    
    @media screen and (max-width: 500px) {
      .header a {
        float: center;
        display: block;
        text-align: left;
      }
      
      .header-left {
        float: center;
      }

      .gambar{
        width: 300px;
        float: left;
        margin-right: 10px;
      }
    }
  </style>
</head>

<body>
    <div class="header">
      <a href="#default" class="gambar"><img src="./logo.png" width="120px" height="70px" alt="banner"></a>
      <div class="header-left">
        <br>
        <b>ARKADEMY BOOTCAMP</b>
      </div>
    </div>

    <!-- Menampilkan Tabel Data Dinamis -->
    <br><br><br><br>
    </div>
    <div class="container">
        <div class="header-left">
            <button class="btn btn-warning">Add</button>
        </div>
        <br><br>
		<div class="table-responsive">
            <table class="table table-bordered table-sm" bordercolor="#000000"> 
				<thead class="thead-light">
					<tr align=center>
						<th width=50px>Name</th>
						<th width=100px>Work</th>
                        <th width=100px>Salary</th>
                        <th width=100px>Action</th>
					</tr>
				</thead>
				<?php
						if (mysqli_num_rows($query)>0) {
							while ($data = mysqli_fetch_array($query)) {
        ?>
                <tr align=center>
                    <td><?php echo $data["Name"];?></td>
                    <td><?php echo $data["Work"];?></td>
                    <td><?php echo $data["Salary"];?></td>
                    <td>
                        <input type="image" src="hapus.png" width="30" height"30"/>
                        <input type="image" src="edit.png" width="30" height"30"/>
                    </td>
                </tr>
				<?php
							}
						}
				?>
			</table>
		</div>
  </div>
  
    <!-- Menyisipkan JQuery dan Javascript Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>