<?php 

if(file_exists(dirname (__FILE__). "./config.php")){
    require_once(dirname (__FILE__). "./config.php");

}


$formdata     = "SELECT * FROM reginfo";

$ali      = mysqli_query($conn, $formdata );


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Position</th>
                    <th scope="col">Password</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

            <?php 

            if($ali == TRUE){
                // while loop this working assoc
                while($data = mysqli_fetch_assoc($ali)){
                $id       = $data['ID'];
                $fullName = $data['Full_Name'];
                $email    = $data['Email'];
                $postion  = $data['Position'];
                $password = $data['Password'];
                $gender   = $data['Gender'];



                ?>
            
            
                <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $fullName; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $postion;?></td>
                    <td><?php echo $password;?></td>
                    <td><?php echo $gender;?></td>
                    <td>
                        
                    <a href="delete.php?id=<?php echo $id;?>">Delete</a> ||
                    <a href="edit.php?id=<?php echo 20;?>">Edit</a>
                
                    </td>
                </tr>


                <?php 
                
            }
            
        }
                
                ?>
             
            </tbody>
        </table>
    </div>
</body>

</html>