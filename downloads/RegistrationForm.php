<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
  <title>Registration Form</title>
</head>

<body>
<?php
  if(isset($_GET['pass'])) {
    echo '<script>alert("Password not match")</script>';
  }
  ?>
  <form method="post" action="registerAction.php">
    <div class="container">
      <h1>Register Here</h1>
      <label> Name </label>
      <input type="text" name="uname" placeholder="name" required />
      <label> Userid </label>
      <input type="text" name="userid" placeholder=" Enter userid" required />
      <div>

        <label for="email">Email</label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw">Password</label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat">Confirm Password</label>
        <input type="password" placeholder="Confirm Password" name="psw1" required>
        <div>
          <a href="/login.php">Already registered? click here</a>
        </div>
        <button type="submit" class="registerbtn">Register</button>
      </div>
    </div>
  </form>


<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>