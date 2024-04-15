var loadingPanelMsg = '';


showLoadingPanelMsg('Loading page, please wait...');

$(document).ready(function () {


    setTimeout(hideLoadingPanelMsg,2000);
});


function createReport(page, perPage){

    showLoadingPanelMsg('Loading page, please wait...');


    var fromDate = $('#from_month').val();
    var toDate = $('#to_month').val();
    var region = $('#region').val();
    var store = $('#store').val();
    var user_id = $('#user').val();

    $.ajax({
        async: false,
        cache: false,
        type: 'POST',
        dataType: "json",
        url: 'index.php?module=hr_Reports&action=getEmployeeTargetPerformance',
        data: {
            fromDate: fromDate,
            toDate: toDate,
            region: region,
            store: store,
            user_id: user_id,
            page: page,
            perPage: perPage

        },
        success: function (data) {

            console.log(data);
            if (data.hasOwnProperty('result') && data.result.rows != '') {
                // Update the table container with the received table HTML
                if ($('#employee_table').length > 0) {
                    $('#employee_table').replaceWith(data.result.table);
                } else {
                    $('#content').append(data.result.table);
                }


                // Remove the existing pagination footer, if any
                $('.pagination-footer').remove();

                // Add pagination footer after the table container
                $('#employee_table').after(data.result.pagination);
                setTimeout(hideLoadingPanelMsg,2000);
            } else {

                alert('NO REPORTS');
                // message = SUGAR.language.get('hr_Reports', 'LBL_NO_REPORTS');
                // dialog(message);
                // setTimeout(hideLoadingPanelMsg,2000);
            }
        }
    });
}

function showLoadingPanelMsg(msg) {
    if (!loadingPanelMsg) {
        loadingPanelMsg = new YAHOO.widget.Panel("ajaxloading", {
            width: "240px",
            fixedcenter: true,
            close: false,
            draggable: false,
            constraintoviewport: false,
            modal: true,
            visible: false
        });
        loadingPanelMsg.setBody('<div id="loadingPage" align="center" style="vertical-align:middle;"><img src="' + SUGAR.themes.loading_image + '" align="absmiddle" /> <b>' + msg + '</b></div>');
        loadingPanelMsg.render(document.body);
    }

    if (document.getElementById('ajaxloading_c'))
        document.getElementById('ajaxloading_c').style.display = '';

    loadingPanelMsg.show();

}

function hideLoadingPanelMsg() {
    loadingPanelMsg.hide();

    if (document.getElementById('ajaxloading_c'))
        document.getElementById('ajaxloading_c').style.display = 'none';
}

function exportToExcel() {
    var url = window.location.href.split("index.php");
    var fromDate = $('#from_month').val();
    var toDate = $('#to_month').val();
    var region = $('#region').val();
    var store = $('#store').val();
    var user_id = $('#user').val();

    var region_name = $("#region option:selected").attr("label");
    var store_name = $("#store option:selected").attr("label");
    var user_name = $("#user option:selected").attr("label");



    url = url[0];

    $.ajax({
        cache: false,
        async: false,
        type: "POST",
        url: 'index.php?module=hr_Reports&action=exportToExcel',
        data: {
            fromDate: fromDate,
            toDate: toDate,
            region: region,
            store: store,
            user_id: user_id,
            region_name: region_name,
            store_name: store_name,
            user_name: user_name
        },
        success: function(filename) {
            console.log(filename);
            window.open(url + 'exports/' + filename, '_blank');
            // window.document.location = 'index.php?module=itg_Forecasts&action=index';
        }
    });
}