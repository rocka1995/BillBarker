<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
	Bill Summary
	</title>
	
	<link href="./Content/bootstrap.css" rel="stylesheet"/>
	<link href="./Content/Site.css" rel="stylesheet"/>
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

</head>
<body>
<?php
//Turn on error reporting
ini_set('display_errors', 'On');

//Connects to the database rocka-db
$con = new mysqli("oniddb.cws.oregonstate.edu","rocka-db","zXzbFEwYBGhNXUeS","rocka-db");

if($con->connect_errno > 0){
    die('Unable to connect to database [' . $con->connect_error . ']');
}


// We now need to setup our SQL query to grab all bill from this page.
// The example SQL query we copied from phpMyAdmin is:
// SELECT * FROM `bill` WHERE `articleid` =1 LIMIT 0 , 30
// If we run this query, it will ALWAYS grab only the bill from our
// article with an id of 1. We therefore need to update the SQL query
// so that on article 2 is searches for the "2", on page is searches for
// "3", and so on.
// If you notice in the URL, the id of the article is set after id=
// For example, in the following URL:
// http://phpandmysql.inmotiontesting.com/page2.php?id=2
// ... the article id is 2. We can grab and store this number in a variable
// by using the following code:

//CHOOSING ARTICLE MANUALLY FIRST!  FIX ME!
//$article_id = $_GET['id'];
$article_id = 2;

// following code will check to ensure that $article_id is a number.

if( ! is_numeric($article_id) )
  die('invalid article id');

// Now that we have our article id, we need to update our SQL query. This
// is what it looks like after we update the article number and assign the
// query to a variable named $query

$query = "SELECT * FROM `BBArticleBill` WHERE `Id` =$article_id LIMIT 0 , 30";

// Now that we have our Query, we will run the query against the database
// and actually grab all of our bill

$bill = mysqli_query($con, $query);

// The while statement will begin the "looping"

while($row = mysqli_fetch_array($bill, MYSQL_ASSOC))
{

  $title = htmlspecialchars($row['Title'],ENT_QUOTES);
  $flag = htmlspecialchars($row['Questionable'],ENT_QUOTES);
  $verified = htmlspecialchars($row['Verified'],ENT_QUOTES);
  $spotlight = htmlspecialchars($row['IsSpotlight'],ENT_QUOTES);
  $articleURL = htmlspecialchars($row['ArticleURL'],ENT_QUOTES);
  $updated = htmlspecialchars($row['Updated'],ENT_QUOTES);
  
  // Display navbar
echo "
  <form method='post' action='./Summary' id='ctl01'>

	<div class='aspNetHidden'>
		<input type='hidden' name='__EVENTTARGET' id='__EVENTTARGET'/>
		<input type='hidden' name='__EVENTARGUMENT' id='__EVENTARGUMENT'/>
		<input type='hidden' name='__VIEWSTATE' id='__VIEWSTATE' value='2eCq6HYAD94wkLOQMJKtY+B46aW4XLmIdfMk7j28AmLc4MrVs601WQ2ZKj9PeQruSlS4Lr14KyMuv8VaRqMNYVo/TThJnlG6RWhr8zBZAAU=' />
	</div>

	<script type='text/javascript'>
	var theForm = document.forms['ctl01'];
	if (!theForm) {
		theForm = document.ctl01;
	}
	function __doPostBack(eventTarget, eventArgument) {
		if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
			theForm.__EVENTTARGET.value = eventTarget;
			theForm.__EVENTARGUMENT.value = eventArgument;
			theForm.submit();
		}
	}
	</script>


	<div class='navbar navbar-inverse navbar-fixed-top'>
		<div class='container'>
			<div class='navbar-header'>
				<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
				</button>
				<a href='http://web.engr.oregonstate.edu/~diazalb/billbarker/BillBarker.php' class='navbar-brand'><b>BillBarker</b></a>
			</div>
			<div class='navbar-collapse collapse'>
					<ul class='nav navbar-nav'>
						<li><a href='http://web.engr.oregonstate.edu/~diazalb/billbarker/BillBarker.php'><b>Home</b></a></li>
						<li><a href='http://web.engr.oregonstate.edu/~diazalb/billbarker/About.html'><b>About</b></a></li>
						<li><a href='http://web.engr.oregonstate.edu/~diazalb/billbarker/Contact.html'><b>Contact</b></a></li>
					</ul>
			</div>
			<input name='ctl00fakeSearchBox' type='text' id='fakeSearchBox' style='height:16px;width:200px; text-align:right;' />
		</div>
	</div>
";

//Display Body-start
echo "
	<div class='container body-content'>
		<h2>Summary</h2>
    <div id='summaryContent' class='jumbotron'>
        
        <h3>$title</h3>
        <p>[Legislative Bill Content Here]</p>

		<a href='$articleURL'>$articleURL</a>
		
		<div class='bottom-section'>
			<div class='articleTags'>
				<p style='font-size: 70%;display:inline;'> 
				Tags: 
				</p>
";

if($flag){
	echo "
	<p id='questionableTag' class='bg-primary' style='font-size:70%; color:#7E1518; border-color:#7E1518; display:inline; text-align:center; border:25px; border-style:solid; border-width:1px;'>
	Questionable
	</p>
	";
}

if($verified){
	echo "
	<p id='verifiedTag' class='bg-primary' style='font-size:70%; color:#034500; border-color:#034500; display:inline; text-align:center; border:25px; border-style:solid; border-width:1px'>
	Verified
	</p>
	";
}

if($spotlight){
	echo "
	<p id='questionableTag' class='bg-primary' style='font-size:70%; color:#162955; border-color:#162955; display:inline; text-align:center; border:25px; border-style:solid; border-width:1px'>
	Spotlight
	</p>
	";
}

//Display Body-Bottom
echo "
			</div>
					
			<p id='buttons'>
				<input type='button' class='btn btn-danger' id='questionableButton' style='float: right;' value='Flag as Questionable'>
			</p>
					
			<div class='lastUpdate' style='float:right; font-size:50%'>
				<p> Last Updated: $updated
				</p>
			</div>
			
		</div>
	</div>		
</div>
		<div id='commentContainer' class='container'>
			<p>Comment Box</p>
			<input name='ctl00MainContentTextBox1' type='text' id='MainContent_TextBox1' style='height:125px;width:234px;' />

			<div class='usertextButtons'>
				<button type='button' value='Post Comment'>Post Comment</button>
				<button type='button' value='Preview'>Preview</button>
			</div>
		</div>

		<hr />
		<footer>
		<p>&copy; 2017 - BillBarker Application</p>
		</footer>


        <p>
        &nbsp;
		</p>
</form>
";

}
?>

</body>
</html>

<?php
// At this point, we've added the user's comment to the database, and we can
// now close our connection to the database:
mysqli_close($con);
?>

