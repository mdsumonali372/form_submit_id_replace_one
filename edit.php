<?php 
if(file_exists(dirname(__FILE__)."./config.php")){
    require_once(dirname(__FILE__)."./config.php");
}


if(isset($_REQUEST['id'])){
    // $editId   = $_REQUEST['id'];

    $editsqli  = "SELECT * FROM reginfo WHERE ID = 20";

    $finalquerySqli   = mysqli_query($conn, $editsqli);


    if($finalquerySqli){
        $fetchData  = mysqli_fetch_assoc($finalquerySqli);{
        // database table er field er name gulo hobe akhaney
            $fullname  = $fetchData['Full_Name'];
            $email     = $fetchData['Email'];
            $postion   = $fetchData['Position'];
            $password  = $fetchData['Password'];
            $gender    = $fetchData['Gender'];
        }
    }
}

// input er name gulo hobe akhaney
if(isset($_REQUEST['update'])){
    // $editId     = $_REQUEST['id'];
    $fullname   = $_REQUEST['name'];
    $email      = $_REQUEST['email'];
    $postion    = $_REQUEST['postion'];
    $password   = $_REQUEST['password'];
    $gender     = $_REQUEST['gender'];


    $updateSqli   = "UPDATE reginfo SET Full_Name='$fullname', Email='$email', Position='$postion', Password='$password', Gender='$gender' WHERE ID = 20 ";

    // $updateSqli= " UPDATE reginfo SET Full_Name =[$fullname], Email =[$email], Positio=[$postion],Password= [$password], Gender =[$gender] WHERE ID = $editId";


    $finalUpdate   = mysqli_query($conn, $updateSqli);

    if($finalUpdate == TRUE ){
        echo "done";
        header("Location: result.php");
       
    }else{
        echo "not update";
    }
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap template reg form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3>Register Today</h3>
                            <p>Fill in the data below.</p>
                            <form class="requires-validation" action="" method="POST" enctype='multipart/form-data' novalidate>
    
                                <div class="col-md-12">
                                   <input class="form-control" type="text" name="name" placeholder="Full Name"  value="<?php if(isset($fullname)){echo $fullname;} ?>" required>
                                   <div class="valid-feedback">Username field is valid!</div>
                                   <div class="invalid-feedback">Username field cannot be blank!</div>
                                </div>
    
                                <div class="col-md-12">
                                    <input class="form-control" type="email" name="email" placeholder="E-mail Address" value="<?php if(isset($email)){echo $email;} ?>" required>
                                     <div class="valid-feedback">Email field is valid!</div>
                                     
                                     <div class="invalid-feedback">Email field cannot be blank!</div>
                                </div>
    
                               <div class="col-md-12">
                                    <select class="form-select mt-3" name="postion" value="<?php if(isset($postion)){echo $postion;} ?>" required>
                                          <option selected disabled value="">Position</option>
                                          <option value="jwd">Junior Web Developer</option>
                                          <option value="swd">Senior Web Developer</option>
                                          <option value="pm">Project Manager</option>
                                   </select>
                                    <div class="valid-feedback">You selected a position!</div>
                                    <div class="invalid-feedback">Please select a position!</div>
                               </div>
    
    
                               <div class="col-md-12">
                                  <input class="form-control" type="password" name="password" placeholder="Password" value="<?php if(isset($password)){echo $password;} ?>" required>
                                   <div class="valid-feedback">Password field is valid!</div>
                                   <div class="invalid-feedback">Password field cannot be blank!</div>
                               </div>
    
    
                               <div class="col-md-12 mt-3">
                                <label class="mb-3 mr-1" for="gender">Gender: </label>
    
                                <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" value="male" <?php if(isset($gender)){echo $gender;} ?> required>
                                <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>
    
                                <input type="radio" class="btn-check" name="gender" value="female" id="female" autocomplete="off" <?php if(isset($gender)){echo $gender;} ?> required>
                                <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>
    
                                <input type="radio" class="btn-check" name="gender" value="secret" id="secret" autocomplete="off" <?php if(isset($gender)){echo $gender;} ?> required>
                                <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>
                                   <div class="valid-feedback mv-up">You selected a gender!</div>
                                    <div class="invalid-feedback mv-up">Please select a gender!</div>
                                </div>
    
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                              <label class="form-check-label">I confirm that all data are correct</label>
                             <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                            </div>
                      
    
                                <div class="form-button mt-3">
                                    <button id="submit" type="submit" name="update" class="btn btn-primary">Update</button>
                                </div>
                            </form>

                            <h2 style="color:red;">Show:</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    
    </div>

  <script src="main.js"></script>  
</body>
</html>