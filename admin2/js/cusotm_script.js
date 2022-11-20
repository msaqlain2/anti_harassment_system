$(document).ready(function() {
	$('#changeStatusForm').on('change', function() {
		var optionValue = jQuery(this).val();
		var cid = $('#cid').val();
		$.ajax({
                url: "php_scripts/admin/manage_complaints/change_complaint_status.php", 
                data: { "newValue": optionValue, "cid" : cid}, 
                method: "POST",
                success: function(data) {
                    window.location.href = 'view_manage_complaints.php?id='+cid;
                }

        });
	})
})