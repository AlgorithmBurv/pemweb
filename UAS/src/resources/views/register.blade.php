<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="/images/alphabet.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<style>
    .container-fluid {
        background-image: url("images/backround.png");
     
        
    }
    .main {
        height: 100vh;
        box-sizing: border-box;
    }
    .register-box {      
        width: 500px;
        border: solid 2px;
        padding: 30px;
    }
    form div {
        margin-bottom: 20px;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="main d-flex flex-column justify-content-center align-items-center">
                    @if ($errors->any())
                        <div class="alert alert-danger" style="width: 500px">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('status'))
                    <div class="alert alert-success" style="width: 500px">
                        {{ session('message') }}
                    </div>
                @endif
            <div class="register-box">
                <form action="" method="post">
                    @csrf
                    <div class="">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control">
                    </div>
                    <div class="">
                        <label for="addres" class="form-label">Addres</label>
                        <textarea name="addres" id="addres" class="form-control" rows="5"  required></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary form-control">Register</button>
                    </div>
                    <div class="text-center">
                        Have account?<a href="login" > Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>