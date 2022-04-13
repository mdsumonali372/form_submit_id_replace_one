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
                                    <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                     <div class="valid-feedback">Email field is valid!</div>
                                     <div class="invalid-feedback">Email field cannot be blank!</div>
                                </div>

                                <br/>

                               <div class="col-md-12">
                                  <input class="form-control" type="password" name="password" placeholder="Password" required>
                                   <div class="valid-feedback">Password field is valid!</div>
                                   <div class="invalid-feedback">Password field cannot be blank!</div>
                               </div>

                               <br/>
    
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                              <label class="form-check-label">I confirm that all data are correct</label>
                             <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                            </div>
                      
    
                                <div class="d-flex justify-content-between">
                                <div class="form-button mt-3">
                                    <button id="submit" type="submit" name="login" class="btn btn-primary">Login</button>
                                </div>
                                <div class="form-button mt-3 ">
                                    <button id="submit" type="submit" name="login" class="btn btn-primary create-account"><a href="index.php" class="text-decoration-none text-light">Create New Account</a></button>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 style="color:red;"><?php echo $done ?></h2>
    
    </div>
</body>
</html>