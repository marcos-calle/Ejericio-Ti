<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>
    <div class="container mx-auto">
        <div class="row">
            <div class="col-md-12">
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="userName">UserName</label>
                        <input type="text" class="form-control" id="userName" placeholder="Enter username" name="userName">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="passwordConfirmation"> Repet Password</label>
                        <input type="password" class="form-control" id="passwordConfirmation" placeholder="PasswordConfirmation" name="passwordConfirmation">
                    </div>
                    <input type="submit" class="btn btn-primary mt-3" value="Sign In"></input>
                </form>



            </div>
        </div>
    </div>

</body>

</html>