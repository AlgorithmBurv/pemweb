<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maca | @yield('title') </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="/images/alphabet.png">
    @include('css/style')
</head>

<body>
    
    <div class="main d-flex flex-column justify-content-between">
      
        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo02">
               
                    
                  <div class="">
                    <img src="images/book.jpg" class="img-thumbnail" alt="Book">
                    <h2><center>Maca </center></h2>
                  </div>

                    @if (Auth::user())
                        @if (Auth::user()->role_id== 1)
                        
                            <a href="/dashboard" @if (request()->route()->uri == 'dashboard') class="active" @endif  > <i class="bi bi-house-door"></i> Dashboard</a>
                        
                            <a href="/books" @if (request()->route()->uri == 'books'||request()->route()->uri == 'book-add'||
                                request()->route()->uri == 'book-deleted'||request()->route()->uri == 'book-edit/{slug}'||
                                request()->route()->uri == 'book-delete/{slug}'
                                ) class="active" @endif><i class="bi bi-book"></i> Books</a>

                            <a href="/categories" @if (request()->route()->uri == 'categories'||request()->route()->uri == 'category-add'||
                                request()->route()->uri == 'category-deleted'||request()->route()->uri == 'category-edit/{slug}'||
                                request()->route()->uri == 'category-delete/{slug}'
                                ) class="active" @endif><i class="bi bi-tags"></i> Categories</a>

                            <a href="/users" @if (request()->route()->uri == 'users'||request()->route()->uri == 'registered-users'
                                ||request()->route()->uri == 'user-detail/{slug}'||request()->route()->uri == 'user-ban/{slug}'
                                ||request()->route()->uri == 'user-banned') class="active" @endif><i class="bi bi-person-add"></i> User</a>

                            <a href="/rent-logs" @if (request()->route()->uri == 'rent-logs') class="active" @endif><i class="bi bi-check2-circle"></i> Rent Log</a>
                            <a href="/" @if (request()->route()->uri == '/') class="active" @endif><i class="bi bi-list-task"></i> Book List</a>
                            <a href="/book-rent" @if (request()->route()->uri == 'book-rent') class="active" @endif><i class="bi bi-cart-plus"></i> Book Rent</a>
                            <a href="/book-return" @if (request()->route()->uri == 'book-return') class="active" @endif><i class="bi bi-cart-x"></i> Book Return</a>
                            <a href="/about" @if (request()->route()->uri == 'about') class="active" @endif><i class="bi bi-person-bounding-box"></i> About Us</a>
                            <a href="/logout" @if (request()->route()->uri == 'logout') class="active" @endif><i class="bi bi-box-arrow-left"></i> Logout</a>
                        @else
                            <a href="/profile" @if (request()->route()->uri == 'profile') class="active" @endif><i class="bi bi-person-circle"></i> Profile</a>
                            <a href="/" @if (request()->route()->uri == '/') class="active" @endif><i class="bi bi-list-task"></i> Book List</a>
                            <a href="/about" @if (request()->route()->uri == 'about') class="active" @endif><i class="bi bi-person-bounding-box"></i> About Us</a>
                            <a href="/logout" @if (request()->route()->uri == 'logout') class="active" @endif><i class="bi bi-box-arrow-left"></i> Logout</a>
                        @endif
                    @else
                                <a href="/login">Login</a>
                                <a href="/register">Register</a>
                    @endif
                      
                </div>
                <div class="content p-5 col-lg-10">
                    @yield('content')  
                   @include('footer')
                </div>
            </div>
        </div>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>