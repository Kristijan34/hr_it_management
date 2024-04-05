var EmployeeAbsences = {
    popupMessage: function (module_name, record_id, name, status, itg_db_name, itg_db_column, new_status) {
        $.ajax({
            async: false,
            cache: false,
            type: 'POST',
            dataType: "json",
            url: 'index.php?module=hr_Approvals&action=approval',
            data: {
                module_name: module_name,
                record_id: record_id,
                status: status,
                itg_db_name: itg_db_name,
                itg_db_column: itg_db_column,
                new_status: new_status
            },
            success: function (data) {
                location.reload();
            }
        });
    },
    popup: function (module_name, record_id, name, status, itg_db_name, itg_db_column, new_status) {
        $("body").append("<div id='popupMessage'>" + SUGAR.language.get('app_strings', 'LBL_UPDATE_STATUS') + new_status + "</div>");
        $("#popupMessage").dialog({
            title: SUGAR.language.get('app_strings', 'LBL_APPROVALS'),
            resizable: false,
            width: 500,
            modal: true,
            closeOnEscape: false,
            dialogClass: 'no-close',
            draggable: false,
            buttons: {
                ok: {
                    text: SUGAR.language.get('app_strings', 'LBL_APPROVALS_BUTTON_OK'),
                    click: function() {
                        EmployeeAbsences.popupMessage(module_name, record_id, name, status, itg_db_name, itg_db_column, new_status);
                    }
                },
                no: {
                    text: SUGAR.language.get('app_strings', 'LBL_APPROVALS_BUTTON_NO'),
                    click: function() {
                        $( this ).dialog( "close" );
                        $( "#popupMessage" ).remove();
                    }
                }
            }
        });
    },
}