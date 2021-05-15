<!DOCTYPE>
<html>
<head>
  <title>feedback</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link type="text/css" rel="stylesheet" href="css/style.css">


<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<body ondragstart="return false;" ondrop="return false;">

</head>
<body id="cssmenu">
  
  <ul>
   <li class='active'><a href='main.php'><span>Home</span></a></li>
   <li><a href='news.php'><span>News</span></a></li>
   <li><a href='contect.php'><span>Contact</span></a></li>
   <li><a href='blog.php'><span>Blog</span></a></li>
      <li><a href='about.php'><span>About</span></a></li>
   <li><a href='feedback.php'><span>Feedback</span></a></li>

</ul>
<hr>
<h3>Feedback Form</h3>

<div class="container">
  <form action="fdatabase.php" method="post">
    <label for="fname">First_Name</label>
    <input type="text" id="fname" name="F_name" placeholder="Your name..">

    <label for="lname">Last_Name</label>
    <input type="text" id="lname" name="L_name" placeholder="Your last name..">

    <label for="m_number">Mobile_Number</label>
    <input type="text" id="m_number" name="Mobile" placeholder="Your 

Mobile_Number..">

    <label for="m_number">Email_Id</label>
    <input type="text" id="email" name="email" placeholder="Your Email_Id..">

    <label for="country">Country</label>
    <select id="country" name="country">
    <option value="india">INDIA</option>
     <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="comment">Comments</label>
    <textarea id="comment" name="comment" placeholder="Write something.." 

style="height:200px"></textarea>

    <button type="submit"class="btn btn-primary">Submit>></button>
  </form>
</div>
</body>
</html>