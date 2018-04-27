// $(document).ready(function(){
// 	$('#myloginbtn').click(function(){
// 		var username = $('#username').val();

// 		$.ajax(
// 				{
// 					'url':'userserver.php',//url where to send the AJAX request
// 					'data':{'username':username},//JSON data to send
// 					'type':'POST',//type of request: GET or POST
// 					'success' : authenticate //what function to do after successful AJAX
// 				}
// 			);
// 	});
// });


// function authenticate(userdata){
// 	if (userdata != ""){
// 		var userinfo = JSON.parse(userdata);
// 		console.log(userinfo.username);
// 	}
// 	else{
// 		return false;
// 	}

// }