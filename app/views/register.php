<!DOCTYPE html> 
<html> 
<head>     
	<title>Title</title>      
	<meta charset="utf-8">     
	<meta name="viewport" content="width=device-width, initial-scale=1.0">      
	<link rel="stylesheet" type="text/css" href="<?php echo asset('css/kube.min.css') ?>" />  
</head>
 <body style="width:80%;margin:40px auto">     
	 <div class="units-container">          
	 <form method="post" action="" class="forms">             
		 <h3>Form Registrasi</h3>             
		 <label>                 Name 
		 <span class="error"><?php echo $errors->first('name') ?></span>                 
		 <input type="text" name="name" value="<?php echo Form::old('name') ?>" class="width-50" />             
		 </label>             
		 <label>                 Email 
		 <span class="error"><?php echo $errors->first('email') ?></span>                 
		 <input type="text" name="email" value="<?php echo Form::old('email') ?>" class="width-50" />             
		 </label>             
		 <label> Password <span class="error"><?php echo $errors->first('password') ?></span>                
		 <input type="password" name="password" value="<?php echo Form::old('password') ?>" class="width-50" /></label>
		 <label>Password Confirmation 
		 <span class="error"><?php echo $errors->first('password_confirmation') ?></span>
		 <input type="password" name="password_confirmation" value="<?php echo Form::old('password_confirmation') ?>" class="width-50" /></label>
		 <input type="submit" class="btn" value="Submit">
	 </form>
	 </div> 
 </body> 
 </html>