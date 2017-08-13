// Event listeners 
var qFlag = document.getElementById('questionableButton'); 
qFlag.addEventListener('click', flagQuestionable); 

function flagQuestionable(event) {	
	// I should probably use AJAX for something like this but OH WELL 

	if(qFlag.value == "Flag as Questionable") { 
		alert("You flagged this article as Questionable"); 
		qFlag.value = "Flagged Questionable"; 

	} else { 
		alert("Unflagged article as Questionable"); 
		qFlag.value = "Flag as Questionable"; 
	} 

/* 
	var tagSec = document.createElement('div'); 
	tagSec.id = 'block'; tagSec.className = 'block'; 
	document.getElementsByTagName('body')[0].appendChild(tagSec); 
	tagSec.appendChild(newDiv); 
*/ 

} function checkFlags() { }
