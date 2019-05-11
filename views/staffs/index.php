<html>
  <head>
    <title>Staff Manager</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-contact100">
    <h1 class = "header-Staff">Staff Manager</h1>

    <div class ="container-btn-newStaff">
      <button ><a class= "fas fa-user-plus fa-3x" href="./index.php?controller=staff&action=renderCreate"></a>
      </button>
    </div>

    <table class="table-users">
      <tr>
        <th>Avatar</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Birthday</th>
        <th>Address</th>
        <th>Phone</th>
        <th></th>
      </tr>

    <?php
    foreach ($staffs as $staff) {
      echo '<tr>';
      
      echo '<td><img src="' . $staff->staff_avatar . '"></td>'
          .'<td>' . $staff->staff_name . '</td>'
          .'<td>'. $staff->staff_gender .'</td>' 
          .'<td>'. $staff->staff_dob .'</td>'
          .'<td>'. $staff->staff_address .'</td>'
          .'<td>'. $staff->staff_phone .'</td>'
          .'<td><a class="fas fa-user-edit fa-2x" href="index.php?controller=staff&action=renderUpdate&id='.$staff->staff_id.'">' . '</a>'
          .'<a class="fas fa-times fa-2x" href="index.php?controller=staff&action=deleteStaff&id='.$staff->staff_id.'">' . '</a></td>';
      echo '</tr>';
    }
    
  ?>
    </table>

    </div>
    
  </body>
</html>