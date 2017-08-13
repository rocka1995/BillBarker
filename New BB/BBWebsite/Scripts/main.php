<?php
  
  // Turn on error reporting
    ini_set('display_errors', 'On');
  // Connects to the database
    $mysqli = new mysqli("oniddb.cws.oregonstate.edu", "rocka-db", "zXzbFEwYBGhNXUeS", "rocka-db");
    if($mysqli->connect_errno){
	echo "Connection error " . $mysqli->connect_errno . " " . $mysqli->connect_error;
    } 
?>


// Event listeners
var qFlag = document.getElementById('questionableButton');
qFlag.addEventListener('click', flagQuestionable);



function flagQuestionable(event) {	

	// I should probably use AJAX for something like this but OH WELL

	if(qFlag.value == "Flag as Questionable") {
		alert("You flagged this article as Questionable");
		qFlag.value = "Flagged Questionable";
	
		<?php
			if(!($stmt = $mysqli->prepare("UPDATE BBArticleBill SET Questionable=1 WHERE BBArticleBill.Id = 2"))){
				echo "Prepare failed: " . $stmt->errno . " " . $stmt->error;
			}
			if(!$stmt->execute()){
				echo "Execute failed: " . $mysqli->connect_errno . " " . $mysqli->connect_error;
			}
			$stmt->close();
		?>
	} else {
		alert("Unflagged article as Questionable");
		qFlag.value = "Flag as Questionable";
		<?php
			if(!($stmt = $mysqli->prepare("UPDATE BBArticleBill SET Questionable=0 WHERE BBArticleBill.Id = 2"))){
				echo "Prepare failed: " . $stmt->errno . " " . $stmt->error;
			}
			if(!$stmt->execute()){
				echo "Execute failed: " . $mysqli->connect_errno . " " . $mysqli->connect_error;
			}
			$stmt->close();
		?>
	}

/*
	var tagSec = document.createElement('div');
	tagSec.id = 'block';
	tagSec.className = 'block';
	document.getElementsByTagName('body')[0].appendChild(tagSec);
	

	tagSec.appendChild(newDiv);
*/
	


}


function checkFlags() {
	
	


}




