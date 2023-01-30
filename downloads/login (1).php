<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login Page </title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            font-family: poppins, Helvetica, sans-serif;
            background: url(images/img2.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-color: lightgray;
        }

        button {
            background-color: rgb(27, 27, 234);
            width: 100%;
            color: whitesmoke;
            padding: 15px;
            margin: 15px 0px;
            border: none;
            cursor: pointer;
        }

        form {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: center;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            margin: 15px 0;
            padding: 10px 1px;
            display: inline-block;
        }

        button:hover {
            opacity: 0.7;
        }
        button[type='submit'] {
            font-family: Poppins, Helvetica, sans-serif;
            font-size: 18px;
        }

        .container {
            max-width: 40%;
            padding: 30px;
            margin-top: 1rem;
            background-color: white;
            background-color: rgba(0, 0, 0, 0.5);
        }

        h1 {
            color: #fff;
            text-align: center;
            padding-top: 5rem;
        }

        form {
            color: #fff;
        }

        form .lower {
            padding-top: .5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .lower a {
            text-decoration: none;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1> Login Here </h1>
    <form>
        <div class="container">
            <label>Username : </label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <label>Password : </label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <div class="lower">
                <div>
                    <input type="checkbox"> Remember me
                </div>
                <p><a href="#">Forgot password? </a></p>
            </div>
            <button type="submit">Login</button>
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