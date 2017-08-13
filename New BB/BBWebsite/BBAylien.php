<?php
//Turn on error reporting
ini_set('display_errors', 'On');
//Connects to the database
$mysqli = new mysqli("oniddb.cws.oregonstate.edu","colea-db","8X1AO9Uh6sr4K96x","colea-db");
//If no connection, display error
if($mysqli->connect_errno){
	echo "Connection error " . $mysqli->connect_errno . " " . $mysqli->connect_error;
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<style>
	
	h4{
        font-family: Arial;
		margin-top: 1em;
		margin-bottom 0em;
	    }
	
	h5{
		font-family: Arial;
		font-size: 12px;
		text-align: justify;
		font-weight: normal;
		margin-top: 0em;
		}
		
<meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Home Page - BillBarker</title>
<link href="./Content/bootstrap.css" rel="stylesheet"/>
<link href="./Content/Site.css" rel="stylesheet"/>
</style>
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
	<li><input name="ctl00$fakeSearchBox" type="text" id="fakeSearchBox" style="height:16px;width:200px; text-align:right;" /></li>
    </ul>
</div>
</div>
</div>
<div class="container body-content">
<h2>Latest Posts</h2>
<div class="jumbotron">

<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: app_id
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-ID', '75feec14');

// Configure API key authorization: app_key
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-Key', '8fbfcaff9402bf1d5e14bc2c62dc5e78');

$api_instance = new Aylien\NewsApi\Api\DefaultApi();

$params = array(
  'text' => "legislation",
  'language' => array("en"),
  'published_at_start' => "NOW-1DAY",
  'published_at_end' => "NOW",
  'source_locations_country' => array("US"),
  'categories_taxonomy' => 'iab-qag',
  'categories_id' => ["IAB11"],
  'per_page' => 5
);


try {
    $result = $api_instance->listStories($params);
    for($i = 0; $i < sizeof($result->getStories()); $i++){
      echo "<h4>" . $result->getStories()[$i]->getTitle() . "</h4>";
	  echo "<h5>" . $result->getStories()[$i]->getBody() . "/" . 
	   $result->getStories()[$i]->getSource()->getName() . "\n" . "</h5>";
         
	}
	
} catch (Exception $e) {
    print_r($e->getResponseObject()->getErrors());
    echo 'Exception when calling DefaultApi->listStories: ', $e->getMessage(), "\n";
}	

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