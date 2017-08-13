<?php
//Turn on error reporting
ini_set('display_errors', 'On');
//Connects to the database
$mysqli = new mysqli("oniddb.cws.oregonstate.edu","rocka-db","zXzbFEwYBGhNXUeS","rocka-db");
if($mysqli->connect_errno){
    echo "Connection error " . $mysqli->connect_errno . " " . $mysqli->connect_error;
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html class="gr__web_engr_oregonstate_edu"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Page - BillBarker</title>
	<link href="./Content/bootstrap.css" rel="stylesheet">
	<link href="./Content/Site.css" rel="stylesheet">
    </head>
    <body data-gr-c-s-loaded="true">
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
    		    <a href="http://web.engr.oregonstate.edu/~diazalb/billbarker/BillBarker.php" class="navbar-brand"><b>BillBarker</b></a>
		</div>
		<div class="navbar-collapse collapse">
    		    <ul class="nav navbar-nav">
		        <li><a href="http://web.engr.oregonstate.edu/~diazalb/billbarker/BillBarker.php"><b>Home</b></a></li>
		        <li><a href="http://web.engr.oregonstate.edu/~diazalb/billbarker/About.html"><b>About</b></a></li>
		        <li><a href="http://web.engr.oregonstate.edu/~diazalb/billbarker/Contact.html"><b>Contact</b></a></li>
		        <li><input name="ctl00$fakeSearchBox" type="text" id="fakeSearchBox" style="height:16px;width:200px; right;"></li>
    		    </ul>
		</div>
	    </div>
	</div>

	<div class="container body-content">
	    <h2>Latest Posts</h2>
	    <div class="jumbotron">
		<div>
		    <h3>Article: "H.R.3639 - To establish a position of Science Laureate of the United States"
			</h3>
		    
		    <div class="bottom-section">
			<div class="articleTags">
				<p style="font-size: 70%;display:inline;"> Tags: </p>
				<p id="questionableTag" class="bg-primary" style="font-size:70%; color:#7E1518; border-color:#7E1518; display:inline; text-align:center; border:25px; border-style:solid; border-width:1px;">
					Questionable
				</p>
				<p id="verifiedTag" class="bg-primary" style="font-size:70%; color:#034500; border-color:#034500; display:inline; text-align:center; border:25px; border-style:solid; border-width:1px">
					Verified
				</p>
				<p id="questionableTag" class="bg-primary" style="font-size:70%; color:#162955; border-color:#162955; display:inline; text-align:center; border:25px; border-style:solid; border-width:1px">
					Spotlight
				</p>
			</div>
			<p id="buttons">
		  	    <a id="MainContent_viewSummaryButton" class="btn btn-primary btn-sm" href="./Summary.php">View summary</a>
			    <input type="button" class="btn btn-danger" id="questionableButton" style="float: right;" value="Flag as Questionable">
		    	</p>
			<div class="lastUpdate" style="float:right; font-size:50%">
				<p> Last Updated: 2017-08-01 09:31:30
				</p>
				
			</div>
		    </div>
		</div>
	    </div>


    	<hr>
            <footer>
                <p>© 2017 - BillBarker Application</p>
            </footer>
	</div>

        <p>&nbsp;</p>
   	
    

    <script src="./Scripts/main.php"></script>


</body></html>