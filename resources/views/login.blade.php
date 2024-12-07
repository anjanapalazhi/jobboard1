<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
<h2>Login</h2>
    <form action="{{ route('login') }}" method="post">
      @csrf
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="email" name="email" id="form2Example1" class="form-control" />
          <label class="form-label" for="form2Example1" >Email address</label>
        </div>
      
        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="password"  name="password" id="form2Example2" class="form-control" />
          <label class="form-label" for="form2Example2">Password</label>
        </div>
      
        <div data-mdb-input-init class="form-outline mb-4">
          <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">login</button>

        </div>
        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
              <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
          </div>
      
          <div class="col">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
          </div>
        </div>
      
        <!-- Submit button -->
        <div class="text-center">
          <a href="{{ route('register-form') }}" class="btn btn-secondary btn-block mb-4">Register</a>
        </div>      
        <!-- Register buttons -->

    </form>




    
</body>
</html>