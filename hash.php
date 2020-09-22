<!DOCTYPE html>
<html>
  <head>
    <title>Hash Generator</title>
    <link rel="stylesheet" href="hash.css">
  </head>
  <body>
    <div class="testbox">
      <form method="post">
        <div class="banner">
          <h1>Hash Generator</h1>
        </div>
        <h3 class="top-info" style="color:blue;"> This PHP Hash Generator helps you to Generate the hash according to the below  specified criteria </h3>
        <div class="item">
          <p>TEXT<span class="required">*</span></p>
          <div class="name-item">
            <input type="text" name="text" required/>
          </div>
          <p>Salt<span class="required"></span></p>
          <div class="name-item">
            <input type="text" name="salt" />
          </div>
        </div>
        <h3 style="color:blue;"> SELECT HASH TYPE (only one)</h3>
        <br/>

   		<input type="checkbox" name='md5' value="MD5"> MD5(Input) <br/>
    	<input type="checkbox" name='2*md5' value="2*md5"> MD5(MD5(Input)) <br/>
    	<input type="checkbox" name='3*md5' value="3*md5"> MD5(MD5(MD5(Input))) <br/>
   		<input type="checkbox" name='sha1' value="sha1"> SHA1(Input) <br/>
   		<input type="checkbox" name='2*sha1' value="2*sha1"> SHA1(SHA1(Input)) <br/>
   		<input type="checkbox" name='3*sha1' value="3*sha1"> SHA1(SHA1(SHA1(Input))) <br/>
   		<input type="checkbox" name='md5*sha1' value="md5*sha1"> MD5(SHA1(Input)) <br/>
   		<input type="checkbox" name='md5*md5*sha1' value="md5*md5*sha1"> MD5(MD5(SHA1(Input))) <br/>
   		<input type="checkbox" name='sha1*md5' value="sha1*md5"> SHA1(MD5(Input)) <br/>
   		<input type="checkbox" name='sha1*sha1*md5' value="sha1*sha1*md5"> SHA1(SHA1(MD5(Input))) <br/>
 		
        <input name="find" type="submit" value="FIND" />
    	<div class="btn-block">
          <?php
		if(isset($_POST['find']))
		{
			if(!empty($_POST['salt']))
			{
				$_POST['text'] = $_POST['text'].$_POST['salt'];
			}
			if(!empty($_POST['md5']))
			{
				echo "<p> <font color=blue>" .md5($_POST['text']) . " </font> </p>";
				
			}
			elseif(!empty($_POST['2*md5']))
			{
				echo "<p> <font color=blue>" . md5(md5($_POST['text'])) . " </font> </p>";
				
			}
			elseif(!empty($_POST['3*md5']))
			{
				echo "<p> <font color=blue>" . md5(md5(md5($_POST['text']))) . " </font> </p>";
				
			}
			elseif(!empty($_POST['sha1']))
			{
				echo "<p> <font color=blue>" . sha1($_POST['text']) . " </font> </p>";
				
			}
			elseif(!empty($_POST['2*sha1']))
			{
				echo "<p> <font color=blue>" . sha1(sha1($_POST['text'])) . " </font> </p>";
				
			}
			elseif(!empty($_POST['3*sha1']))
			{
				echo "<p> <font color=blue>" . sha1(sha1(sha1($_POST['text']))) . " </font> </p>";
				
			}
			elseif(!empty($_POST['md5*sha1']))
			{
				echo "<p> <font color=blue>" . md5(sha1($_POST['text'])) . " </font> </p>";
				
			}
			elseif(!empty($_POST['md5*md5*sha1']))
			{
				echo "<p> <font color=blue>" . md5(md5(sha1($_POST['text']))) . " </font> </p>";
				
			}
			elseif(!empty($_POST['sha1*md5']))
			{
				echo "<p> <font color=blue>" . sha1(md5($_POST['text'])) . " </font> </p>";
				
			}
			elseif(!empty($_POST['sha1*sha1*md5']))
			{
				echo "<p> <font color=blue>" . sha1(sha1(md5($_POST['text']))) . " </font> </p>";
				
			} 
		}
		?>
        </div>
		</form>
		
		
	</div>
    		
		
    
  </body>
</html>