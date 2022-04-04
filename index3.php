<html>

<body>
<link rel="stylesheet" href="tablesUsers.css">

<?php
        include 'db.php';
        

        $sql = 'SELECT * FROM students';

        $result =  mysqli_query($con,$sql);

        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($users as $user) {
        
          echo '<table>
                <tr>
                <th>username</th>
                <th>email</th>
                <th>password</th>
              </tr>';
            
            echo '<td>'.htmlspecialchars($user['username']).'</td>';
            echo '<td>'.htmlspecialchars($user['email']).'</td>';
            echo '<td>'.htmlspecialchars($user['password']).'</table></td>';
           
            
        }

      ?>

<li><a href="http://localhost/FULLSTACK/index.php" data-after="send">LogOUT</a></li>
        





</body>

 </html>