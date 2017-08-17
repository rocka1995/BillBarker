<?php

  // Turn on error reporting
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
	<style>


		.vertical-menu {
		    width: 300px; /* Set a width if you like */
		}

		.vertical-menu a {
  		    background-color: #eee; /* Grey background color */
		    color: black; /* Black text color */
    		    display: block; /* Make the links appear below each other */
    		    padding: 12px; /* Add some padding */
    		    text-decoration: none; /* Remove underline from links */
		}

		.vertical-menu a:hover {
    		    background-color: #ccc; /* Dark grey background on mouse-over */
		}

		.vertical-menu a.active {
    		    background-color: #4CAF50; /* Add a green color to the "active/current" link */
    		    color: white;
		}

		.sidebar {
    		max-width: 300px;
		    min-width: 150px;
    		height: 150px;
    		overflow-y: auto;
		    overflow-x: hidden;
		    right: 0;
		    display: inline-block;
		    float: right; 
	  	    margin-top: 85px;
		    margin-right: 10px;
		    border-radius: 10px;
		    overflow: hidden;
		    text-overflow: ellipsis;
		}

		.jumbotron {
		    display: inline-block;
		    overflow: hidden;
		    width: 900px;
		}
		
		#sidebar-title {
		    background-color: skyblue;
		    margin: 0px;
		    font-size: 12pt;
		    text-align: center;
		}

		#questionableTag {
		    padding: 2px;
		    font-size:70%;
		    color:#7E1518;
		    border-color:#7E1518;
		    display:inline;
		    text-align:center;
		    border-style:solid;
		    border-width:1px;
		    margin: 2px;
		}
		
		#verifiedTag {
		    padding: 2px;
		    font-size:70%;
		    color:#034500;
		    border-color:#034500;
		    display:inline;
		    text-align:center;
		    border-style:solid;
		    border-width:1px;
		    margin: 2px;
		}
		
		#spotlightTag {
		    padding: 2px;
		    font-size:70%;
		    color:#162955;
		    border-color:#162955;
		    display:inline;
		    text-align:center;
		    border-style:solid;
		    border-width:1px;
		    margin: 2px;
		}

		#genericTag {
		    padding: 2px;
		    font-size:70%;
		    color:#582A72;
		    border-color:#582A72;
		    display:inline;
		    text-align:center;
		    border-style:solid;
		    border-width:1px;
		    margin: 2px;
		}
	</style>
    </head>
 
    <div class="sidebar">
	<p id="sidebar-title"> Related articles </p>
	<div class="vertical-menu">
  	    <a href="#">Link 1</a>
  	    <a href="#">Link 2</a>
	</div>
    </div>

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
                    <a href="./Home.php" class="navbar-brand"><b>BillBarker</b></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="./Home.php"><b>Home</b></a></li>
                        <li><a href="./About.html"><b>About</b></a></li>
                        <li><a href="./Contact.html"><b>Contact</b></a></li>
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
	    <div class="jumbotron" id="article1">
		<div>
		    <h3>Article: "

			<tr>
<td>
Scientists call out New York Times for incorrect claim about climate report
</td>
</tr>
		    "</h3>
		    
		    <div class="bottom-section">
			<div class="articleTags">
				<p style="font-size: 70%;display:inline;"> Tags: </p>
				<p id='questionableTag' class='bg-primary'>Questionable</p>
	
			</div>
			<p id="buttons">
		  	    <a id="MainContent_viewSummaryButton" class="btn btn-primary btn-sm" href="Summary.php?id=1" href="javascript:__doPostBack(&#39;ctl00$MainContent$viewSummaryButton&#39;,&#39;&#39;)">>View summary</a>
			    <input type='button' class='btn btn-danger' id='questionableButton1' style='float: right;' value='Flagged Questionable'>		    	</p>
			<div class="lastUpdate" style="float:right; font-size:50%">
				<p> Last Updated:
				
					<tr>
<td>
2017-08-08 08:32:58
</td>
</tr>

				</p>
				
			</div>
		    </div>
		</div>
	    </div>


   	    <div class="jumbotron" id="article2">
		<div>
		    <h3>Article: "

			<tr>
<td>
H.R.3639 - To establish a position of Science Laureate of the United States
</td>
</tr>
		    "</h3>
		    
		    <div class="bottom-section">
			<div class="articleTags">
				<p style="font-size: 70%;display:inline;"> Tags: </p>
				<p id='spotlightTag' class='bg-primary'>Spotlight</p>				
			</div>
			<p id="buttons">
		  	    <a id="MainContent_viewSummaryButton" class="btn btn-primary btn-sm" href="Summary.php?id=2" href="javascript:__doPostBack(&#39;ctl00$MainContent$viewSummaryButton&#39;,&#39;&#39;)">>View summary</a>
		    	    <input type='button' class='btn btn-danger' id='questionableButton2' style='float: right;' value='Flag as Questionable'>			</p>
			<div class="lastUpdate" style="float:right; font-size:50%">
				<p> Last Updated:
				
					<tr>
<td>
2017-08-01 09:31:30
</td>
</tr>

				</p>
				
			</div>
		    </div>
		</div>
	</div>

	
	<div class="jumbotron" id="article3">
		<div>
		    <h3>Article: "

			<tr>
<td>
H.R.3210 - SECRET Act of 2017
</td>
</tr>
		    "</h3>
		    
		    <div class="bottom-section">
			<div class="articleTags">
				<p style="font-size: 70%;display:inline;"> Tags: </p>
				<p id='verifiedTag' class='bg-primary'>Verified</p><p id='spotlightTag' class='bg-primary'>Spotlight</p>			</div>
			<p id="buttons">
		  	    <a id="MainContent_viewSummaryButton" class="btn btn-primary btn-sm" href="Summary.php?id=3" href="javascript:__doPostBack(&#39;ctl00$MainContent$viewSummaryButton&#39;,&#39;&#39;)">>View summary</a>
		   	    <input type='button' class='btn btn-danger' id='questionableButton3' style='float: right;' value='Flag as Questionable'>    
			</p>
			<div class="lastUpdate" style="float:right; font-size:50%">
				<p> Last Updated:
				
					<tr>
<td>
2017-08-10 18:15:07
</td>
</tr>

				</p>
				
			</div>
		    </div>
		</div>
	</div>

    	<hr />
            <footer>
                <p>&copy; 2017 - BillBarker Application</p>
            </footer>

        <p>&nbsp;</p>
   	</form>
    </body>

    <script src="./Scripts/main.php"></script>
</html>