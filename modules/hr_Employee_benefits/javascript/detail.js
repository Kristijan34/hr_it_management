$(document).ready(function () {

    $('#notify_users').click(function() {
        //console.log('click');
        var record = '';

        if (typeof $('[name=record]').val() == 'undefined') {
            return false;
        } else {
            record = $('[name=record]').val();
        }
        var benefit_name = $('#name').text();
        var provider = $('#provider').text();
        var description = $('#description').text();
        var valid_from = $('#valid_from').text();
        var valid_to = $('#valid_to').text();



        $.ajax({
            cache: false,
            async: false,
            type: "POST",
            url: 'index.php?module=hr_Employee_benefits&action=notifyUsers',
            data: {
                record: record,
                benefit_name: benefit_name,
                provider: provider,
                description: description,
                valid_from: valid_from,
                valid_to: valid_to
            },
            success: function(data) {
                window.document.location = 'index.php?module=hr_Employee_benefits&action=DetailView&record=' + record;
            }
        });
    });


});