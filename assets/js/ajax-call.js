$(document).ready(function (e) {


	//submited user registration form
	$("#user_registration_form").on('submit',(function(e) {
		var isvalidate = $("#user_registration_form").valid();
		if (!isvalidate) {
			return false;
		}else{
			$(".loader").modal();
	        e.preventDefault();

	        var name_prefix = $("#name_prefix").val();
	        var name = $("#name").val();
	        var email = $("#email").val();
	        var contact = $("#contact").val();
	        var password = $("#password").val();

	        var obj = {name_prefix: name_prefix, name: name, email: email, contact: contact, password: password};
	        var form_data = JSON.stringify(obj);

	        console.log(form_data);

			var action_page 					= $("#user_registration_form").attr('action'); 
			$.ajax({
				url: action_page, 		  // Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				data: form_data, 		  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
				success: function(resp)   // A function to be called if request succeeds
				{
					$('.loader').modal('toggle');
					resp = JSON.parse(resp);
					console.log(resp);
					var http_response_code = resp.stutusCode;
					var message = '';
					if(http_response_code==500){
						message = resp.stutusMessage;
						swal("Error", message, "error");
					}else if(http_response_code==200){
						message = resp.stutusMessage;
						swal({title: "success!", text: message, type: "success"},
		                    function(){ 
		                    	window.location.reload();
		                    }
		                );					
					}
				}
			});
	  	}
	}));

	
	//submited user login form
	$("#user_login_form").on('submit',(function(e) {
		var isvalidate = $("#user_login_form").valid();
		if (!isvalidate) {
			return false;
		}else{
			$(".loader").modal();
	        e.preventDefault();

	        var email = $("#email").val();
	        var password = $("#password").val();

	        var obj = {email: email, password: password};
	        var form_data = JSON.stringify(obj);

	        console.log(form_data);

			var action_page 					= $("#user_login_form").attr('action'); 
			$.ajax({
				url: action_page, 		  // Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				data: form_data, 		  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
				success: function(resp)   // A function to be called if request succeeds
				{
					$('.loader').modal('toggle');
					resp = JSON.parse(resp);
					console.log(resp);
					var http_response_code = resp.stutusCode;
					var message = '';
					if(http_response_code==500){
						message = resp.stutusMessage;
						swal("Error", message, "error");
					}else if(http_response_code==404){
						message = resp.stutusMessage;
						swal("Warning", message, "warning");
					}else if(http_response_code==200){
						message = resp.stutusMessage;
						window.location.reload();
						// swal({title: "success!", text: message, type: "success"},
		    //                 function(){ 
		    //                 	window.location.reload();
		    //                 }
		    //             );					
					}
				}
			});
	  	}
	}));

	
	//submited add new slider image form
	$("#add_new_slider_img_form").on('submit',(function(e) {
		var isvalidate = $("#add_new_slider_img_form").valid();
		if (!isvalidate) {
			return false;
		}else{
			$(".loader").modal();
	        e.preventDefault();

	        $(".loader").modal();

	    	// Get form
	        var form = $('#add_new_slider_img_form')[0];

			// Create an FormData object 
	        var requestData = new FormData(form);

	    	var action_page 		= $("#add_new_slider_img_form").attr('action');

			console.log(requestData);
			// processData & contentType should be set to false
		    $.ajax
		    ({
		    	url: action_page, 		  // Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				enctype: 'multipart/form-data',
				data: requestData, 		  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // Important! To send DOMDocument or non processed data file it is set to false
				timeout: 600000,
				success: function(resp){  // A function to be called if request succeeds

		        	$('.loader').modal('toggle');
		            resp = JSON.parse(resp);
		            console.log(resp);

		            if(resp.statusCode == 200){
		                swal({title: "Success", text: resp.statusMessage, type: "success"},
		                    function(){ 
		                        window.location.href = resp.redirectUrl;
		                        //window.location.reload();
		                    }
		                );
		            }else{
		                swal({title: "Fail", text: resp.statusMessage, type: "error"});
		            }
		        }
		    });
	  	}
	}));

	
	//submited add new announcement form
	$("#add_new_announcement_form").on('submit',(function(e) {
		var isvalidate = $("#add_new_announcement_form").valid();
		if (!isvalidate) {
			return false;
		}else{
			$(".loader").modal();
	        e.preventDefault();

	        $(".loader").modal();

	    	// Get form
	        var form = $('#add_new_announcement_form')[0];

			// Create an FormData object 
	        var requestData = new FormData(form);

	    	var action_page 		= $("#add_new_announcement_form").attr('action');

			console.log(requestData);
			// processData & contentType should be set to false
		    $.ajax
		    ({
		    	url: action_page, 		  // Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				enctype: 'multipart/form-data',
				data: requestData, 		  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // Important! To send DOMDocument or non processed data file it is set to false
				timeout: 600000,
				success: function(resp){  // A function to be called if request succeeds

		        	$('.loader').modal('toggle');
		            resp = JSON.parse(resp);
		            console.log(resp);

		            if(resp.statusCode == 200){
		                swal({title: "Success", text: resp.statusMessage, type: "success"},
		                    function(){ 
		                        window.location.href = resp.redirectUrl;
		                        //window.location.reload();
		                    }
		                );
		            }else{
		                swal({title: "Fail", text: resp.statusMessage, type: "error"});
		            }
		        }
		    });
	  	}
	}));

	//submited add new upcoming event form
	$("#add_new_upcomig_event_form").on('submit',(function(e) {
		var isvalidate = $("#add_new_upcomig_event_form").valid();
		if (!isvalidate) {
			return false;
		}else{
			$(".loader").modal();
	        e.preventDefault();

	        $(".loader").modal();

	    	// Get form
	        var form = $('#add_new_upcomig_event_form')[0];

			// Create an FormData object 
	        var requestData = new FormData(form);

	    	var action_page 		= $("#add_new_upcomig_event_form").attr('action');

			console.log(requestData);
			// processData & contentType should be set to false
		    $.ajax
		    ({
		    	url: action_page, 		  // Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				enctype: 'multipart/form-data',
				data: requestData, 		  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // Important! To send DOMDocument or non processed data file it is set to false
				timeout: 600000,
				success: function(resp){  // A function to be called if request succeeds

		        	$('.loader').modal('toggle');
		            resp = JSON.parse(resp);
		            console.log(resp);

		            if(resp.statusCode == 200){
		                swal({title: "Success", text: resp.statusMessage, type: "success"},
		                    function(){ 
		                        window.location.href = resp.redirectUrl;
		                        //window.location.reload();
		                    }
		                );
		            }else{
		                swal({title: "Fail", text: resp.statusMessage, type: "error"});
		            }
		        }
		    });
	  	}
	}));

	
	//submited add new important date form
	$("#add_new_important_date_form").on('submit',(function(e) {
		var isvalidate = $("#add_new_important_date_form").valid();
		if (!isvalidate) {
			return false;
		}else{
			$(".loader").modal();
	        e.preventDefault();

	        $(".loader").modal();

	    	// Get form
	        var form = $('#add_new_important_date_form')[0];

			// Create an FormData object 
	        var requestData = new FormData(form);

	    	var action_page 		= $("#add_new_important_date_form").attr('action');

			console.log(requestData);
			// processData & contentType should be set to false
		    $.ajax
		    ({
		    	url: action_page, 		  // Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				enctype: 'multipart/form-data',
				data: requestData, 		  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // Important! To send DOMDocument or non processed data file it is set to false
				timeout: 600000,
				success: function(resp){  // A function to be called if request succeeds

		        	$('.loader').modal('toggle');
		            resp = JSON.parse(resp);
		            console.log(resp);

		            if(resp.statusCode == 200){
		                swal({title: "Success", text: resp.statusMessage, type: "success"},
		                    function(){ 
		                        window.location.href = resp.redirectUrl;
		                        //window.location.reload();
		                    }
		                );
		            }else{
		                swal({title: "Fail", text: resp.statusMessage, type: "error"});
		            }
		        }
		    });
	  	}
	}));



});

function deleteSingleSliderImage(img_id, action_page){

}

$(document).on('click', '.deleteSingleSliderImage', function(){
	//$(this).parents('.item').remove();
	
	var login_user_id = $("#login_user_id").val();
	var action_page = $("#delete_account_request_single_comment_url").val();
	var createdby = $(this).data("createdby");
	var request_comment_id = $(this).data("id");
	var itemId = $(this).parents('.item').attr('id');

    swal({
        title: "Are you sure You Want to Remove this Comment ?",
        text: "This Comment will Remove ",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, Remove !",
        showLoaderOnConfirm: true,
        cancelButtonText: "No, cancel please!",
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function(isConfirm){
        if (isConfirm) {
            $.ajax
            ({
                type: "POST",
                data: {"login_user_id":login_user_id, "createdby":createdby,"request_comment_id":request_comment_id},
                url: action_page,
                success: function(resp) 
                {
                    resp = JSON.parse(resp);
                    resp_statuscode = resp.statusCode;
                    if(resp_statuscode==0){
                        resp_error = resp.statusMessage;
                        swal("Error", resp_error, "error");                     
                    }else if(resp_statuscode==1){
                        resp_msg = resp.statusMessage;
                        swal({title: "Removed!", text: resp_msg, type: "success"},
                            function(){ 
                               //window.location.reload();
                               $("#"+itemId).html('<span style="color:red;">Comment Removed</span>');
                               //$(this).parents('.item').html('<span style="color:red;">Comment Removed</span>');
                            }
                        );
                    }
                }
            });

        } else {
            swal("Cancelled", "Comment Record is safe .", "error");
        }
    });

});