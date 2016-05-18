<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
					<div class="title">
						<b>AM</b>POWER
						<p class="white">Monitoring Your Project</p>
						<p class="white">Administrator</p>
					</div>			
					<div class="form-login">
						<form action="" method="post" id="login">
							<img src="">
							<input class="input" name="username" type="text" placeholder="Username" autofocus="">	
							<input class="input" id="pwd" name="pwd" type="password" placeholder="Password">
							<input type="checkbox" id="show-hide" name="show-hide" value="" />
							<label for="show-hide">Show password</label>

							<input type="submit" class="submit" name="submit" value="LOG IN">
						</form>	
					</div>			
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">

(function() {
	
	var PasswordToggler = function( element, field ) {
		this.element = element;
		this.field = field;
		
		this.toggle();	
	};
	
	PasswordToggler.prototype = {
		toggle: function() {
			var self = this;
			self.element.addEventListener( "change", function() {
				if( self.element.checked ) {
					self.field.setAttribute( "type", "text" );
				} else {
					self.field.setAttribute( "type", "password" );	
				}
            }, false);
		}
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		var checkbox = document.querySelector( "#show-hide" ),
			pwd = document.querySelector( "#pwd" ),
			form = document.querySelector( "#login" );
			
			form.addEventListener( "submit", function( e ) {
				e.preventDefault();
			}, false);
			
			var toggler = new PasswordToggler( checkbox, pwd );
		
	});
	
})();


</script>