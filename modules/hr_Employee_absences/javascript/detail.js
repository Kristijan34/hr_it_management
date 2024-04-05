$(document).ready(function () {

    $('#send_for_approval').click(function() {
        //console.log('click');
        var record = '';

        if (typeof $('[name=record]').val() == 'undefined') {
            return false;
        } else {
            record = $('[name=record]').val();
        }
        var name = $('#user_id').text();
        var status = $('#status').val();
        var absence_type = $('[field="absence_type"]').text().trim();
        var from_date = $('[field="from_date"]').text().trim();
        var to_date = $('[field="to_date"]').text().trim();


        $.ajax({
            cache: false,
            async: false,
            type: "POST",
            url: 'index.php?module=hr_Employee_absences&action=sendForApproval',
            data: {
                record: record,
                user_name: name,
                status: status,
                absence_type: absence_type,
                from_date: from_date,
                to_date: to_date
            },
            success: function(data) {
                if (data != '') {
                    alert(data);
                    return;
                }
                window.document.location = 'index.php?module=hr_Employee_absences&action=DetailView&record=' + record;
            }
        });
    });


});