<!DOCTYPE html>
<html>
<head>
<title>Welcome Email</title>
</head>
<body>
<h2>Welcome to Bank of Attat {{$user['name']}}</h2>
<br/>
  <h2><span class="font-weight-200">Your Safest Banking Device</span></h2>
<!-- 
              <p>For students of striking schools, admission seekers, self made enterpreneurs and any other interested individual.<br>
                We will connect you to mentors, schools, give you scholarship and make your time worth while. <br> Our purpose is to help the Nigerian youth use their time wisely.<br>
              </p> -->
               
               <br/>
				Your registered email-id is {{$user['email']}} , Please click on the below link to verify your email account
				<br/>
				<a href="{{url('user/verify', $user->verifyUser->token)}}">Verify Email</a> 
        <br> 
        <center>OR</center>

         <p>Copy and paste this {{url('user/verify', $user->verifyUser->token)}} on your browser </p>

              <p>
                <a href="https://twitter.com/#"  target="_blank" class="link-white"><i class="fa fa-twitter"></i></a>
              </p>
</body>
</html>
