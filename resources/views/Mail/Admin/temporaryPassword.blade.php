<!DOCTYPE html>
<html>
<head>
	   <title>Sign-up</title>
	   <meta charset="utf-8">
	  <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
      
</head>
<body>
	<div style="width:600px;margin: 0 auto;background: #fff;font-family: 'Poppins', sans-serif; border: 1px solid #e6e6e6;">
		<div style="padding: 30px 30px 15px 30px;box-sizing: border-box;">
			<img src="{{ asset('User/images/logo.png') }}" style="width:100px;float: right;margin-top: 0 auto;">
			<h3 style="padding-top:40px; line-height: 30px;"><span style="font-weight: 900;font-size: 35px;color: #F44C0D; display: block;">HealthHoodlum</span></h3>
			<p>Hello </p>
			<p><span style="font-size:20px;"><b>Don't share the temporary password</b></span></p>
			<p>Please login with this temporary password and update the password after login</p>
			

    
    	<p>Temporary Password : <span><b>{{ $password }}</b></span></p>
    	

    	<p style="font-size:20px;">Thank you!</p>
    	<li style="font-size:20px;list-style: none;">sincerly</li>
    	<li style="list-style: none;"><b>Team Healthhoodlum</b></li>
    	
    	<li style="list-style:none;"><b>visit us:</b> <span></span></li>
    	<li style="list-style:none;"><b>call us:</b> <span></span></li>
    	<li style="list-style:none"><b>Email us:</b> <span></span></li>
    	
    	
		</div>
           <footer style="height:25px;width:100%;background: #F44C0D;"><span style="padding-left: 10px;"> copyright &copy; 2023 Healthhoodlum-All right reserverd</span></footer>
	</div>
</body>
</html>