
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link type="text/css" rel="stylesheet" href="css/style.css">

</head>
<style>
.mySlides {display:none;}
</style>
<body>
  <body id="cssmenu">
  
  <ul>
   <li class='active'><a href='adminlogin.php'><span>Home</span></a></li>
   <li><a href='adminlogin.php'><span>News</span></a></li>
   <li><a href='adminlogin.php'><span>Contact</span></a></li>
   <li><a href='adminlogin.php'><span>Blog</span></a></li>
   <li><a href='adminlogin.php'><span>About</span></a></li>
   <li><a href='adminlogin.php'><span>Feedback</span></a></li>
   <li><a href='adminlogin.php'><span>Admin_Login</span></a></li>
            <!--li><a href='sinup.php'><span>SignUp_Form</span></a></li-->
</ul>
  </nav>
  <div class="container" style="background-color:#6a5acd; padding-top: 30px;">
    <h2 class="text-center" style="color:blue;">Welcome To Pondicherry Tourism Development Corporation</h2>
    <br>

 <div class="container">
  <div class="row">
    <div class="col-lg-6">

      <h2>Login form</h2>
      <form action="validation.php" method="post">
       <div class="form-group">
       <label>Username</label>
       <input type="text" name="email" class="form-control" placeholder="Write Username..">
       </div> 

       <div class="form-group">
        <label>Password</label>
        <input type="Password" name="password" class="form-control" placeholder="Your Password..">
      </div>  
             <button type="submit" class="btn btn-primary" onclick="main.php" style="color:black">Login</button>
        </form>
    
      </div>


      <div class="col-lg-6">
        <h2>SignUp form</h2>
        <form action="register1.php" method="post">
        <div class="form-group">
        <label>First_Name</label>
        <input type="text" name="F_name" class="form-control" placeholder="Your First Name..">
      </div>

      <div class="form-group">
        <label>Last_Name</label>
        <input type="text" name="L_name" class="form-control" placeholder="Your Last Name..">
      </div>  

      <div class="form-group">
        <label>Address</label>
        <textarea input type="text" name="address" class="form-control" placeholder="Your Address.."style="height:100px"></textarea>
        
      </div>



       <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="Your Mail_Id..">
      </div>
       
       <div class="form-group">
        <label>Contact_Number</label>
        <input type="text" name="mobile" class="form-control" placeholder="Your Contact_No..">
      </div>

       <!--div class="form-group">
        <label>Gender</label>
        <input type="text" name="gen" class="form-control">
      </div-->
      <div class="form-group">
        <label>Gender</label>
        <br>
      <input type="radio" name="gender"
           <?php if (isset($gender) && $gender=="female") echo "checked";?>
              value="female">Female
              <input type="radio" name="gender"
           <?php if (isset($gender) && $gender=="male") echo "checked";?>
           value="male">Male

</div>

<label for="country">Country</label>
    <select id="country" name="country">
    <option value="india">INDIA</option>
     <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

      <div class="form-group">
        <label>Password</label>
        <input type="Password" name="password" class="form-control" placeholder="Your Password..">
      </div>  
             <button type="submit" class="btn btn-primary" style="color: black">New User Registration>></button>
      </form>
    </div>
    
  </div>
 </div>


</body>
</html>