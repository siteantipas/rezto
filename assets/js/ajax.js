$(function() {
     
     // Get App Settings

     $.ajax({
     	 type : 'POST',
     	 url  : 'index.php',
     	 data : {
     	 	ajax : true,
     	 	action : 'getAppSettings'
     	 },
     	 success : function(response) {
     	 	//console.log(response)
               window.App = {
                    name : response.name
               }
     	 }
     })
})