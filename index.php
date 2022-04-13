<?php 
if(file_exists(dirname(__FILE__)."./config.php")){
    require_once(dirname(__FILE__)."./config.php");
}
// if($conn==true){
//     echo"yes";
// }else{
//     echo"no";
// }

?>


<?php 

if(isset($_POST['register'])){

    $fullName    =  isset( $_POST['name']) ?  $_POST['name'] : NULL;
    $email       =  isset( $_POST['email']) ?  $_POST['email'] : NULL;
    $postion     =  isset( $_POST['postion']) ?  $_POST['postion'] : NULL;
    $password    =  isset( $_POST['password']) ?  $_POST['password'] : NULL;
    $gender      =  isset( $_POST['gender']) ?  $_POST['gender'] : NULL;


    $sqli  = "INSERT INTO reginfo(Full_Name, Email, Position, Password, Gender) VALUES ('$fullName', '$email', '$postion', '$password', '$gender')";
    // this email already use
    $select = mysqli_query($conn, "SELECT * FROM reginfo WHERE email = '".$_POST['email']."'");
    if(mysqli_num_rows($select)) {
        exit('This email address is already used!');
    }

    $queryData   = mysqli_query ($conn, $sqli);

    

    if($queryData == TRUE){
        echo "done";
        header("Location: result.php");
    }else{
        echo "not done";
    }

    mysqli_close($conn);

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
                                   <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                   <div class="valid-feedback">Username field is valid!</div>
                                   <div class="invalid-feedback">Username field cannot be blank!</div>
                                </div>
    
                                <div class="col-md-12">
                                    <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                     <div class="valid-feedback">Email field is valid!</div>
                                     
                                     <div class="invalid-feedback">Email field cannot be blank!</div>
                                </div>
    
                               <div class="col-md-12">
                                    <select class="form-select mt-3" name="postion" required>
                                          <option selected disabled value="">Position</option>
                                          <option value="jweb">Junior Web Developer</option>
                                          <option value="sweb">Senior Web Developer</option>
                                          <option value="pmanager">Project Manager</option>
                                   </select>
                                    <div class="valid-feedback">You selected a position!</div>
                                    <div class="invalid-feedback">Please select a position!</div>
                               </div>
    
    
                               <div class="col-md-12">
                                  <input class="form-control" type="password" name="password" placeholder="Password" required>
                                   <div class="valid-feedback">Password field is valid!</div>
                                   <div class="invalid-feedback">Password field cannot be blank!</div>
                               </div>
    
    
                               <div class="col-md-12 mt-3">
                                <label class="mb-3 mr-1" for="gender">Gender: </label>
    
                                <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" value="Male" required>
                                <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>
    
                                <input type="radio" class="btn-check" name="gender" value="Female" id="female" autocomplete="off" required>
                                <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>
    
                                <input type="radio" class="btn-check" name="gender" value="Secret" id="secret" autocomplete="off" required>
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
                                    <button id="submit" type="submit" name="register" class="btn btn-primary">Register</button>
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