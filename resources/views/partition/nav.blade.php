<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css1/style.css')}}" />
</head>
<body>
    <header>
        <div class="container">
          <a href="{{asset('menu')}}" class="logo">
            <img src="{{asset('images/logo.png')}}" height="42px" alt="quette logo" />
          </a>
          <div class="icon-box nav-toggle-btn" id="nav-toggle-btn">
            <span class="material-symbols-rounded open"> menu </span>
            <span class="material-symbols-rounded close"> close </span>
          </div>
          <div class="colaps">
            <nav>
              <ul>
                <li><a href="{{asset('menu')}}">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a class="" href="{{asset('foodplace')}}">Food Place</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">FAQ</a></li>
              </ul>
            </nav>
            <a
            href="./login.html"
            class="btn btn-shadow-md btn-primary btn-smooth"
          >
            Sign Up
          </a>
        </div>
      </div>
      </header>
</body>
</html>


