<?php
//Turn on error reporting
ini_set('display_errors', 'On');
//Connects to the database
$mysqli = new mysqli("oniddb.cws.oregonstate.edu","rocka-db","zXzbFEwYBGhNXUeS","rocka-db");
if($mysqli->connect_errno){
	echo "Connection error " . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Home Page - BillBarker</title>
<link href="./Content/bootstrap.css" rel="stylesheet"/>
<link href="./Content/Site.css" rel="stylesheet"/>
</head>
<body>
<script type="text/javascript"></script>
<script type="text/javascript"></script>


<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
    </button>
    <a href="./" class="navbar-brand"><b>BillBarker</b></a>
</div>
<div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
	<li><a href="./">Home</a></li>
	<li><a href="About">About</a></li>
	<li><a href="Contact">Contact</a></li>
						  </ul>
                    <div class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
</div>
</div>
</div>
<div class="container body-content">
<h2>Latest Posts</h2>
<div class="jumbotron">

<div>
<h2>Article: 
<?php
if(!($stmt = $mysqli->prepare("SELECT BBArticleBill.Title FROM BBArticleBill WHERE BBArticleBill.Id = 1"))){
	echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
}

if(!$stmt->execute()){
	echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
}
if(!$stmt->bind_result($title)){
	echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
}
while($stmt->fetch()){
 echo "<tr>\n<td>\n" . $title . "\n</td>\n</tr>";
}
$stmt->close();
?>
</h2>
</div>
 <a id="MainContent_viewSummaryButton" class="btn btn-primary btn-sm" href="Summary.html" href="javascript:__doPostBack(&#39;ctl00$MainContent$viewSummaryButton&#39;,&#39;&#39;)">>View summary</a>
        </div>


    	<hr />
            <footer>
                <p>&copy; 2017 - BillBarker Application</p>
            </footer>
	</div>

        <p>&nbsp;</p>

   	</form>

	</body>
</html>