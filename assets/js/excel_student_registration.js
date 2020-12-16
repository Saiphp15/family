$(document).ready(function() {

	$("#student_name").focusout(function(){
		var student_name = $("#student_name").val();
		if(student_name.length>0){
			$("#student_name").css("border", "");
			$("#student_name_error").html('');
		}else{
			$("#student_name").css("border", "1px solid #ff0000");
			$("#student_name_error").html('Student Name Should Not Empty');
		}
	});
	
	$("#father_name").focusout(function(){
		var father_name = $("#father_name").val();
		if(father_name.length>0){
			$("#father_name").css("border", "");
			$("#father_name_error").html('');
		}else{
			$("#father_name").css("border", "1px solid #ff0000");
			$("#father_name_error").html('Father Name Should Not Empty');
		}
	});
	
	$("#mother_name").focusout(function(){
		var mother_name = $("#mother_name").val();
		if(mother_name.length>0){
			$("#mother_name").css("border", "");
			$("#mother_name_error").html('');
		}else{
			$("#mother_name").css("border", "1px solid #ff0000");
			$("#mother_name_error").html('Mother Name Should Not Empty');
		}
	});
	
	$("#student_adress").focusout(function(){
		var student_adress = $("#student_adress").val();
		if(student_adress.length>0){
			$("#student_adress").css("border", "");
			$("#student_adress_error").html('');
		}else{
			$("#student_adress").css("border", "1px solid #ff0000");
			$("#student_adress_error").html('Student Address Should Not Empty');
		}
	});
	
	$("#student_email").focusout(function(){
		var student_email = $("#student_email").val();
		if(student_email.length>0){
			if( !isValidEmailAddress( student_email ) ) { 
				$("#student_email").css("border", "1px solid #ff0000");
				$("#student_email_error").html('Enter Email in Valid Format');
			}else{
				$("#student_email").css("border", "");
				$("#student_email_error").html('');
			}
		}else{
			$("#student_email").css("border", "1px solid #ff0000");
			$("#student_email_error").html('Student Email Should Not Empty');
		}
	});
	
	$("#student_contact_no").focusout(function(){
		var student_contact_no = $("#student_contact_no").val();
		if(student_contact_no.length>0){
			$("#student_contact_no").css("border", "");
			$("#student_contact_no_error").html('');
		}else{
			$("#student_contact_no").css("border", "1px solid #ff0000");
			$("#student_contact_no_error").html('Student Contact Number Should Not Empty');
		}
	});
	
	$("#student_highest_qualification").change(function(){
		var student_highest_qualification = $("#student_highest_qualification").val();
		if(student_highest_qualification.length>0){
			$("#student_highest_qualification").css("border", "");
			$("#student_highest_qualification_error").html('');
		}else{
			$("#student_highest_qualification").css("border", "1px solid #ff0000");
			$("#student_highest_qualification_error").html('Student Highest Qualification Should Not Empty');
		}
	});
	
	$("#GrdSpecialization").change(function(){
		var GrdSpecialization = $("#GrdSpecialization").val();
		if(GrdSpecialization.length>0){
			$("#GrdSpecialization").css("border", "");
			$("#GrdSpecialization_error").html('');
			$("#specialization").val(GrdSpecialization);
		}else{
			$("#GrdSpecialization").css("border", "1px solid #ff0000");
			$("#GrdSpecialization_error").html('Student Highest Qualification Specialisation Should Not Empty');
		}
	});
	
	$("#PGSpecialization").change(function(){
		var PGSpecialization = $("#PGSpecialization").val();
		if(PGSpecialization.length>0){
			$("#PGSpecialization").css("border", "");
			$("#PGSpecialization_error").html('');
			$("#specialization").val(PGSpecialization);
		}else{
			$("#PGSpecialization").css("border", "1px solid #ff0000");
			$("#PGSpecialization_error").html('Student Highest Qualification Specialisation Should Not Empty');
		}
	});
	
	$("#student_highest_colfication_certificate").focusout(function(){
		var student_highest_colfication_certificate = $("#student_highest_colfication_certificate").val();
		if(student_highest_colfication_certificate.length>0){
			$("#student_highest_colfication_certificate").css("border", "");
			$("#student_highest_colfication_certificate_error").html('');
		}else{
			$("#student_highest_colfication_certificate").css("border", "1px solid #ff0000");
			$("#student_highest_colfication_certificate_error").html('Student Highest Qualification Certificate Should Not Empty');
		}
	});
	
	$("#student_other_certificate").focusout(function(){
		var student_other_certificate = $("#student_other_certificate").val();
		if(student_other_certificate.length>0){
			$("#student_other_certificate").css("border", "");
			$("#student_other_certificate_error").html('');
		}else{
			$("#student_other_certificate").css("border", "1px solid #ff0000");
			$("#student_other_certificate_error").html('Student Other Qualification Certificate Should Not Empty');
		}
	});
	
	$("#job_interested").change(function(){
		var job_interested = $("input:radio[name='job_interested']:checked").val();
		if(job_interested.length>0){
			$("#job_interested").css("border", "");
			$("#job_interested_error").html('');
		}else{
			$("#job_interested").css("border", "1px solid #ff0000");
			$("#job_interested_error").html('You Must Choose Student Job Interest Yes/No');
		}
	});
	
	$("#occupation_status").change(function(){
		var occupation_status = $("input:radio[name='occupation_status']:checked").val();
		if(occupation_status.length>0){
			$("#occupation_status").css("border", "");
			$("#occupation_status_error").html('');
		}else{
			$("#occupation_status").css("border", "1px solid #ff0000");
			$("#occupation_status_error").html('You Must Choose Student Occupation Status ');
		}
	});
	
	$("#student_current_course").focusout(function(){
		var student_current_course = $("#student_current_course").val();
		if(student_current_course.length>0){
			$("#student_current_course").css("border", "");
			$("#student_current_course_error").html('');
		}else{
			$("#student_current_course").css("border", "1px solid #ff0000");
			$("#student_current_course_error").html('Student Current Course Should Not Empty');
		}
	});
	
	$("#company_name").focusout(function(){
		var company_name = $("#company_name").val();
		if(company_name.length>0){
			$("#company_name").css("border", "");
			$("#company_name_error").html('');
		}else{
			$("#company_name").css("border", "1px solid #ff0000");
			$("#company_name_error").html('Company Name Should Not Empty');
		}
	});
	
	$("#company_address").focusout(function(){
		var company_address = $("#company_address").val();
		if(company_address.length>0){
			$("#company_address").css("border", "");
			$("#company_address_error").html('');
		}else{
			$("#company_address").css("border", "1px solid #ff0000");
			$("#company_address_error").html('Company Address Should Not Empty');
		}
	});
	
	$("#designation").focusout(function(){
		var designation = $("#designation").val();
		if(designation.length>0){
			$("#designation").css("border", "");
			$("#designation_error").html('');
		}else{
			$("#designation").css("border", "1px solid #ff0000");
			$("#designation_error").html('Designation Should Not Empty');
		}
	});
	
	$("#salary").focusout(function(){
		var salary = $("#salary").val();
		if(designation.length>0){
			$("#salary").css("border", "");
			$("#salary_error").html('');
		}else{
			$("#salary").css("border", "1px solid #ff0000");
			$("#salary_error").html('Salary Should Not Empty');
		}
	});
	
	$("#year_of_experience").focusout(function(){
		var year_of_experience = $("#year_of_experience").val();
		if(year_of_experience.length>0){
			$("#year_of_experience").css("border", "");
			$("#year_of_experience_error").html('');
		}else{
			$("#year_of_experience").css("border", "1px solid #ff0000");
			$("#year_of_experience_error").html('Year Of Experience Should Not Empty');
		}
	});
	
	
});

function StdHighestQualification(StdHighestQualVal){
	if(StdHighestQualVal=='ssc'){
		$("#GrdSpecialization_div").hide();
		$("#GrdSpecialization").val('');
		$("#PGSpecialization_div").hide();
		$("#PGSpecialization").val('');
	}else if(StdHighestQualVal=='hsc'){
		$("#GrdSpecialization_div").hide();
		$("#GrdSpecialization").val('');
		$("#PGSpecialization_div").hide();
		$("#PGSpecialization").val('');
	}else if(StdHighestQualVal=='Grd'){
		$("#GrdSpecialization_div").show();
		$("#PGSpecialization_div").hide();
		$("#PGSpecialization").val('');
	}else if(StdHighestQualVal=='pg'){
		$("#PGSpecialization_div").show();
		$("#GrdSpecialization_div").hide();
		$("#GrdSpecialization").val('');
	}
}

function CurrentOccupation(CurrentOccupationVal){if(CurrentOccupationVal=='student'){$("#OccupationStudent").show();$("#OccupationEmployed").hide();$("#company_name").val('');$("#company_address").val('');$("#designation").val('');$("#salary").val('');$("#year_of_experience").val('');}else if(CurrentOccupationVal=='employed'){$("#OccupationStudent").hide();$("#OccupationEmployed").show();$("#student_current_course").val('');}else if(CurrentOccupationVal=='unemployed'){$("#OccupationStudent").hide();$("#OccupationEmployed").hide();$("#student_current_course").val('');$("#company_name").val('');$("#company_address").val('');$("#designation").val('');$("#salary").val('');$("#year_of_experience").val('');}}
function StudentRegistration(){
	
	var action_page			 					= $("#action_page").val();
	var student_name 							= $("#student_name").val();
	var father_name 							= $("#father_name").val();
	var mother_name 							= $("#mother_name").val();
	var country									= $("#country").val();
	var state									= $("#state").val();
	var city									= $("#city").val();
	var student_adress 							= $("#student_adress").val();
	var student_email							= $("#student_email").val();
	var student_contact_no 						= $("#student_contact_no").val();
	var student_highest_qualification 			= $("#student_highest_qualification").val();
	var specialization 							= $("#specialization").val();
	var student_other_certificate 				= $("#student_other_certificate").val();
	var job_interested 							= $("input:radio[name='job_interested']:checked").val();
	var occupation_status	 					= $("input:radio[name='occupation_status']:checked").val();
	var student_current_course 					= $("#student_current_course").val();
	var company_name 							= $("#company_name").val();
	var company_address 						= $("#company_address").val();
	var designation 							= $("#designation").val();
	var salary 									= $("#salary").val();
	var year_of_experience 						= $("#year_of_experience").val();
	
	if(student_name==''){
		$("#student_name").css("border", "1px solid #ff0000");
		$("#student_name_error").html('Student Name Should Not Empty');
		$("#student_name").focus();
		return false;
	}else if(father_name==''){
		$("#father_name").css("border", "1px solid #ff0000");
		$("#father_name_error").html('Father Name Should Not Empty');
		$("#father_name").focus();
		return false;
	}else if(mother_name==''){
		$("#mother_name").css("border", "1px solid #ff0000");
		$("#mother_name_error").html('Mother Name Should Not Empty');
		$("#mother_name").focus();
		return false;
	}else if(student_adress==''){
		$("#student_adress").css("border", "1px solid #ff0000");
		$("#student_adress_error").html('Student Address Should Not Empty');
		$("#student_adress").focus();
		return false;
	}else if(student_email==''){
		$("#student_email").css("border", "1px solid #ff0000");
		$("#student_email_error").html('Student Email Should Not Empty');
		$("#student_email").focus();
		return false;
	}else if(student_contact_no==''){
		$("#student_contact_no").css("border", "1px solid #ff0000");
		$("#student_contact_no_error").html('Student Contact Number Should Not Empty');
		$("#student_contact_no").focus();
		return false;
	}else if(student_highest_qualification==''){
		$("#student_highest_qualification").css("border", "1px solid #ff0000");
		$("#student_highest_qualification_error").html('Student Highest Qualification Should Not Empty');
		$("#student_highest_qualification").focus();
		return false;
	}else if(student_other_certificate==''){
		$("#student_other_certificate").css("border", "1px solid #ff0000");
		$("#student_other_certificate_error").html('Student Other Qualification Certificate Should Not Empty');
		$("#student_other_certificate").focus();
		return false;
	}else{
		
		/* alert(action_page+'\n'+
		student_name+'\n'+
		father_name+'\n'+
		mother_name+'\n'+
		student_adress+'\n'+
		student_email+'\n'+
		student_contact_no+'\n'+
		student_highest_qualification+'\n'+
		specialization+'\n'+
		student_other_certificate+'\n'+
		job_interested+'\n'+
		occupation_status+'\n'+
		student_current_course+'\n'+
		company_name+'\n'+
		company_address+'\n'+
		designation+'\n'+
		salary+'\n'+
		year_of_experience); */
		
		$.ajax
        ({
            type: "POST",
            data: '{"fullName":"'+student_name+
			'", "fname":"'+father_name+
			'", "mName":"'+mother_name+
			'", "country":"'+country+
			'", "state":"'+state+
			'", "city":"'+city+
			'", "pAddress":"'+student_adress+
			'", "student_email":"'+student_email+
			'", "contact":"'+student_contact_no+
			'", "hQualification":"'+student_highest_qualification+
			'", "stream":"'+specialization+
			'", "oQualification":"'+student_other_certificate+
			'", "interestJob":"'+job_interested+
			'", "currentOccupation":"'+occupation_status+
			'", "currentCourse":"'+student_current_course+
			'", "companyName":"'+company_name+
			'", "companyAddress":"'+company_address+
			'", "designation":"'+designation+
			'", "salary":"'+salary+
			'", "yearOfExp":"'+year_of_experience+'"}',
            url: action_page,
            success: function(resp) 
            {
                resp = JSON.parse(resp);
				console.log(resp)
				resp_statuscode = resp.statusCode;
				if(resp_statuscode==0){
					resp_error = resp.error_message;
					$("#DisplayErrorDiv").html('<div class="alert alert-danger" >'+resp_error+'</div>');
				}else if(resp_statuscode==1){
					resp_data = resp.resultArray[0];
					redirecturl = resp_data.redirectionUrl;
					window.location.href = redirecturl;
				}
            }
        });
		
	}
	
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		$("#student_contact_no").css("border", "1px solid #ff0000");
		$("#student_contact_no_error").html('Allow Only Number Should Not Empty');
		$("#student_contact_no").focus();
        return false;
    }else{
		$("#student_contact_no").css("border", "");
		$("#student_contact_no_error").html('');
		$("#student_contact_no").focus();
	}
    
}

function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};

function GetState(CountryId){
	//alert(CountryId);
	var GetStateActionPage = $("#GetStateActionPage").val();
	$.ajax
	({
		type: "POST",
		data: '{"CountryId":"'+CountryId+'"}',
		url: GetStateActionPage,
		success: function(resp) 
		{
			resp = JSON.parse(resp);
			console.log(resp)
			resp_statuscode = resp.statusCode;
			if(resp_statuscode==0){
				resp_error = resp.error_message;
				$("#DisplayErrorDiv").html('<div class="alert alert-danger" >'+resp_error+'</div>');
			}else if(resp_statuscode==1){
				resp_data = resp.resultArray[0];
				console.log(resp_data)
				var States = '';
				   $.each(resp_data,function(key,value){
				   States += '<option value="'+value.id+'">'+value.name+'</option>';
				  });
				 $('#state').append(States);
			}
		}
	});
	
}

function GetCity(StateId){
	//alert(StateId);
	var GetCityActionPage = $("#GetCityActionPage").val();
	$.ajax
	({
		type: "POST",
		data: '{"StateId":"'+StateId+'"}',
		url: GetCityActionPage,
		success: function(resp) 
		{
			resp = JSON.parse(resp);
			console.log(resp)
			resp_statuscode = resp.statusCode;
			if(resp_statuscode==0){
				resp_error = resp.error_message;
				$("#DisplayErrorDiv").html('<div class="alert alert-danger" >'+resp_error+'</div>');
			}else if(resp_statuscode==1){
				resp_data = resp.resultArray[0];
				console.log(resp_data)
				var Cities = '';
				   $.each(resp_data,function(key,value){
				   Cities += '<option value="'+value.id+'">'+value.name+'</option>';
				  });
				 $('#city').append(Cities);
			}
		}
	});
}

