<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('store') }}" method="post">
      @csrf
        <div class="container">
          <h1>Register</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>

          <label for="email"><b>Name</b></label>
          <input type="text" placeholder="Enter Name" name="name" id="name" required>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="password" required>


          <label for="role"><b>Role</b></label>
          <select name="role">
           <option value="jobseeker">Jobseeker</option>
           <option value="employer">Employer</option>
         
      </select>

          
      
          
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <button type="submit" value="submit" class="registerbtn">Register</button>
        </div>
      
        
      </form>


    
</body>
</html>