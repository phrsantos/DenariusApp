

$(document).ready(function(){
	console.log('Executando database.js');
	
		    	$('.total-users').html('<span> O55,55</span>');
	
				document.getElementById("total-users").innerHTML = "Olar";

	var query = firebase.database().ref("extrato").equalTo("Geral");
		query.once("value")
		  .then(function(snapshot) {
		    snapshot.forEach(function(childSnapshot) {

		    	var key = childSnapshot.key; // unique id
		    	var childData = childSnapshot.val();
		    	$('.total-users').html('<span> O55,55</span>');
				document.getElementById("total-users").innerHTML = "Olar";
		  	
		  	});
		});
	
});

