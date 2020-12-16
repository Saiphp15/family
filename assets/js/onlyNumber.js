$(document).ready(function() {
	$(function() {
		$('.form-grop').on('keydown', '#aadhar_no, #nussd_student_pincode, #mobile_no, #alternate_contact_no, #father_monthly_income, #mother_month_income, #tenth_pass_year, #twelfth_pass_year, #g_passing_year, #g_admission_year, #g_current_study_year', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
	});
}); 