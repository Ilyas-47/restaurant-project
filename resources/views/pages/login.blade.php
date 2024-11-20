<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  </head>
  <body>
    <div class="form-page container">
      <div class="form-banner">
        <img class="image-cover" src="{{asset('images/Vector.png')}}" alt="vector" />
      </div>
      <form action="{{ route('login.process') }}" method="POST">
        @csrf
        <div class="logo">
          <img src="{{asset('images/logo.png')}}" alt="quette" />
        </div>
        <h3 class="c-heading w-medium">Login</h3>
        <div class="input-fuild">
          <label for="email" class="xs c-body">Gmail</label>
          <input
            class="xs c-body"
            type="text"
            placeholder="Enter email"
            name="email"
            id="email"
          />
        </div>
        <div class="input-fuild">
          <label for="password" class="xs c-body">Password</label>
          <input
            class="xs c-body"
            type="password"
            placeholder="Enter Password"
            name="password"
            id="password"
          />
        </div>
        <style>
          .error-messages {
            margin-top: 20px;
            color: red;
            font-size: 14px;
            border: 1px solid red;
            padding: 10px;
            background-color: #f8d7da; 
            border-radius: 5px;
          }
    
          .error-messages ul {
            list-style-type: none;
            padding-left: 0;
          }
    
          .error-messages li {
            margin: 5px 0;
          }
        </style>
        @if ($errors->any())
        <div class="error-messages">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @else 
        <a class="password-forgot" href="">
          <img src="{{asset('icons/fi-sr-info.svg')}}" alt="info icon" />
          <p class="c-body-soft">forgot password</p>
        </a>
      @endif
        <input
          type="submit"
          value="login"
          class="btn btn-shadow-md btn-primary btn-smooth"
        />
        <a class="c-body-soft" href="{{asset('sign_up')}}">Don't have an account ?</a>
      </form>
    </div>
  </body>
</html>
