<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
      height: 550px;
    }

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {
        height: auto;
      }
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
    }

    .form-container {
      width: 100%;
      max-width: 600px;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin: 20px auto;
    }

    .styled-form h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #555;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      outline: none;
      transition: border-color 0.3s ease;
    }

    .form-group input:focus {
      border-color: #009879;
    }

    button {
      width: 100%;
      padding: 10px;
      font-size: 18px;
      color: #ffffff;
      background-color: #009879;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #007f65;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">View Post</a></li>
        <li><a href="#">Add Post</a></li>
        <li><a href="#">Jobseeker Details</a></li>
        <li><a href="#">Status</a></li>
        <li><a href="#">Shortlist</a></li>
        <li><a href="#">Rejected Post</a></li>
        <li><a href="#">Approved</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Logo</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="{{ route('view-post') }}">View Post</a></li>
        <li><a href="{{ route('view-post') }}">Add Post</a></li>
        <li><a href="{{ route('view-post') }}">Jobseeker Details</a></li>
        
        <li><a href="{{ route('view-post') }}">Shortlist</a></li>
        <li><a href="{{ route('view-post') }}">Rejected Post</a></li>
        <li><a href="{{ route('view-post') }}">Approved</a></li>
      </ul>
    </div>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p>Some text..</p>
      </div>

      <div class="form-container">
        <form class="styled-form">
          <h2>Apply Post</h2>
          <div class="form-group">
            <label for="cname">Company Name</label>
            <input type="text" id="cname" name="name" placeholder="Company name" required>
          </div>
          <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" id="designation" name="designation" placeholder="Designation" required>
          </div>
          <div class="form-group">
            <label for="experience">Experience</label>
            <input type="text" id="experience" name="experience" placeholder="Experience" required>
          </div>
          <div class="form-group">
            <label for="email">Company Email</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="sp">Salary Package</label>
            <input type="text" id="sp" name="salarypackage" placeholder="Salary package" required>
          </div>
          <div class="form-group">
            <label for="nv">Number of Vacancies</label>
            <input type="text" id="nv" name="vacancy" placeholder="Number of vacancies" required>
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" id="description" name="description" placeholder="Description" required>
          </div>
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
