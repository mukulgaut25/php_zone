<?php 

    session_start();
    
    
    if (isset($_POST['submit']))
    { 
      $filename = $_FILES["fileToUpload"]["name"];
      $tmp_file_name = $_FILES["fileToUpload"]["tmp_name"]; 
      $target_path_file = '/Library/WebServer/Documents/images/' . ($filename);
    
      setcookie("image", $filename, $cookie_expire);
      
      if (move_uploaded_file($tmp_file_name, $target_path_file))
      {
          echo "File uploaded sucessfully";
      }
      else
      {
        echo "uploading failed";

      } 

    }
    
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>CV_FORM</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">   
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    </form>

		<form  method="POST" action="welcome.php" >
			Full Name:<br> 
  			<input type="text" name="username" pattern="[a-zA-Z+ ]+" required>
        <br>  
  			Email id:<br> 
  			<input type="email" name="email" pattern="^[a-zA-Z0-9+.]+@[a-zA-Z+.]+$" placeholder="example@gmail.com" required> 
        <br>
  			Mobile Number:<br> 
  			<input type="Number" name="mobile">
   			<br> 
  			Job Experience:<br> 
  			<input type="text" name="job_title" pattern="[a-zA-Z0-9+.]+" placeholder="Company name, Time spend "> 
  			<br> 
  			Job Description:<br> 
  			<input type="text" name="job_info" pattern="[a-zA-Z0-9]+" placeholder="Area of field, Profile, Experience"> 
  			<br> 
  			Personal Information:<br> 
  			<input type="text" name="personal_info" pattern="[a-zA-Z0-9]+" placeholder="Personal info about yourself" required> 
  			<br> 
  			Key Skills:<br> 
  			<input type="text" name="skills" pattern="[a-zA-Z0-9]+" ><br> 
  			College/University:<br> 
  			<input type="text" name="college" pattern="[a-zA-Z0-9]+" placeholder="Educational background" required> 
  			<br>
  			<br>
  			<label for="extra">Extra_info:</label> 
        	<textarea rows="5" cols="50" name="extra"> </textarea> 
        <br>
        <br>
            
		<input type="Submit" value="Submit" name="Submit" placeholder="More about yourself">
    </form>


</body>
</html>



