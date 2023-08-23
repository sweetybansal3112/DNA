<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="style1.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Login Form</h2>
                <form action="newvalidation.php" method="post">
                    <div class="formgroup">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="formgroup">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>    
            <div class="col-lg-6">
                <h2>Signin Form</h2>
                <form action="newregistration.php" method="post">
                    <div class="formgroup">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="formgroup">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Signin</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>