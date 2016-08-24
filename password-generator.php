<!DOCTYPE HTML>

<html>

<head>
  <title>Generátor hesel</title>
  <meta charset="utf-8">
  <style type="text/css">
  <!--
  body {
	  font-family: Verdana, Geneva, sans-serif;
  }
  h1 {
	  text-align: center;
	  color: rgba(0, 102, 153, 1);
  }
  pre {
	  text-align: center;
	  font-size: 2em;
	  font-weight: bold;
	  letter-spacing: .05em;
  }
  input {
	  display: block;
	  margin: 0 auto;
	  font-size: 1.5em;
  }
  -->
  </style>
</head>

<body>
<h1>Generátor hesel</h1>
<pre><?php
$chars = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789\|/[]{}<>()#$&@%-+=_!?.:,;AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz";

for($i=0;$i<12;$i++){
	echo htmlentities(substr($chars, mt_rand(0, strlen($chars)-1), 1));
}
?></pre>
<input name="refresh" type="button" value="Chci jiné" onclick="window.location.reload();">
</body>

</html>
