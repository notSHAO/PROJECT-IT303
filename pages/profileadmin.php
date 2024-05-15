<?php
require '../connection/dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartnear</title>
    <link rel="stylesheet" href="profileadmin.css">
    <link rel="stylesheet" href="../animation.css">
    <link href="https://cdn.datatables.net/v/dt/dt-2.0.4/datatables.min.css" rel="stylesheet">
    <link rel="icon" href="../img/logoweb.png" type="image/x-icon">
</head>
<body>

      <div class="navBar">
        <a href="../index.php"
          ><img src="../img/logo.png" alt="" class="logo"
        /></a>
        <nav>
          <ul>
          <li><a href="homeloginadmin.php">Apartment List</a></li>
            <li><a href="addapart.php">Add Apartment</a></li>
            <li><a href="profileadmin.php">Profiles</a></li>
            <li><a href="loginpage.php">Logout</a></li>
          </ul>
        </nav>
      </div>
        <table id="usertable">
          <thead>
            <tr>
              <th>Full Name</th>
              <th>Username</th>
              <th>Email</th>
              <th>Password</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query="SELECT*FROM userinfo";
              $result=mysqli_query($connect,$query);
              if(mysqli_num_rows($result)>0){
                foreach($result as $userinfo){
            ?>
            <tr>
              
              <td><?=$userinfo['fullname'];?></td>
                <td><?=$userinfo['username'];?></td>
                <td><?=$userinfo['email'];?></td>
                <td><?=$userinfo['userpass'];?></td>
                <td class="equal">
                <a href="editUser.php?id=<?=$userinfo['userID'];?>" class="btn">Edit</a>
                <form action="../function/functions.php" method="POST" class="d-inline">
                  <button type="submit" name="deleteData" value="<?=$userinfo['userID']; ?>" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
            </tr>
            <?php
                    }
                }else{
                    echo "<td colspan = '5'>No Datas Found!</td>";
                }
            ?>
      </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/v/dt/dt-2.0.4/datatables.min.js"></script>
        <script>
                $(document).ready(function(){
                    $('#usertable').DataTable();
                });
            </script>
      
      
</body>
</html>