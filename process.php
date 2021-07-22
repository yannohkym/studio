





<!DOCTYPE html>
<html lang="eng">
<head>
	<title>table|users</title>
		<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" type="text/css" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">

	<style type="text/css">


		table{

			font-family:monospace;
			width:100%;
			font-size: 15px;
			text-align: left;
			color: aqua;

		}
		.container{
			background-color: white;
			margin-top: 15px;

				width: 1050px;
			height: 450px;
			margin-left: 150px;

		}
		.wrapper
	</style>
</head>
<body bgcolor="blue">

	<div class="container">
		<div class="wrapper">

<h3> new message</h3>

        			 <div class="form-group">
          <label for=" subject">username</label>
          <input type="text" class="form-control"name="username" value="" placeholder="enter your name" id="username">
      </div>
			<div class="form-group">
			<label for="receipient">email</label>
            <input type="email"class="form-control" name="email" value="" placeholder="enter your email"id="email">
            </div>
      <div class="form-group">
          <label for=" subject">subject</label>
          <input type="text" class="form-control"name="subject" value="" placeholder="subject" id="subject">
      </div>
      <div class="form-group">
          <label for=" subject">message</label>
          <textarea rows="6" class="form-control" id="message"></textarea>
      </div>
    
        <button class="btn btn-primary" onclick="sendEmail()" value="sending an email">sendEmail</button>

</div>
    <script
            src="http://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
<script type="text/javascript">
    function sendEmail(){
        console.log('sending...');
        var username=$("#username");
        var email=$("#email");
        var subject=$("#subject");
        var message=$("#message");
if (isNotEmpty(username) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(message))
        {
            $.ajax(
                {
                    url:'mail.php',
                method:'POST',
                    dataType:'json',
                    data: {
                        username: username.val(),
                        email: email.val(),
                        subject: subject.val(),
                        message: message.val()
                    },success: function (response){ console.log(response)}

                }
            )
        }
        function isNotEmpty(caller){
          if (caller.val()==""){
        caller.css('border','1px solid red');
        return false;
    }else {
        caller.css('border','');
        return true;
    }
        }
    }

</script>
</body>
</html>