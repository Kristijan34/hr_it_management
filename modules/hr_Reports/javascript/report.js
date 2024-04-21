var loadingPanelMsg = '';
var st_by_region = {};
var empl_by_region = {};
var empl_by_store = {};

showLoadingPanelMsg('Loading page, please wait...');

$(document).ready(function () {

    getAllStoresByRegion();
    getEmployeesByRegion();
    getEmployeesByStore();
    setTimeout(hideLoadingPanelMsg,2000);
    $('#store').attr('disabled',true);
    $('#user').attr('disabled',true);
    $('#region').change(function (){
        if(this.value != ''){
            storeByRegion(this.value);
            $('#store').attr('disabled',false);
            if($('#store').val() == ''){
                var emp_by_region = empl_by_region[this.value];
                $('#user').empty();

                var emptyOptionEmpl2 = $('<option>').val('').text('');
                $('#user').append(emptyOptionEmpl2);
                $.each(emp_by_region, function(user_id, userData) {
                    var name = userData.name;
                    var option = $('<option>').attr('label', name).val(user_id).text(name);
                    $('#user').append(option);
                });
                $('#user').attr('disabled',false);
            }
        }
        else {
            $('#store').attr('disabled',true);
            $('#store').val('');
        }
    });

    $('#store').change(function (){
        if(this.value != ''){
            var empl_by_str = empl_by_store[this.value];
            $('#user').empty();
            var emptyOptionEmpl1 = $('<option>').val('').text('');
            $('#user').append(emptyOptionEmpl1);
            $.each(empl_by_str, function(user_id, userData) {
                var name = userData.name;
                var option = $('<option>').attr('label', name).val(user_id).text(name);
                $('#user').append(option);
            });
        }
        else{
            if($('#region').val() == ''){
                $('#user').attr('disabled',true);
                $('#user').val('');
            }
            else{
                var emp_by_region = empl_by_region[$('#region').val()];
                $('#user').empty();

                var emptyOptionEmpl2 = $('<option>').val('').text('');
                $('#user').append(emptyOptionEmpl2);
                $.each(emp_by_region, function(user_id, userData) {
                    var name = userData.name;
                    var option = $('<option>').attr('label', name).val(user_id).text(name);
                    $('#user').append(option);
                });
            }
        }
    });
});

function storeByRegion(region_id){
    $('#store').empty();
    var emptyOption = $('<option>').val('').text('');
    $('#store').append(emptyOption);
    var store = st_by_region[region_id];

    $.each(store, function(stID, stData){
        var name = stData.name;
        var option = $('<option>').attr('label', name).val(stID).text(name);
        $('#store').append(option);

    });
}


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

                alert('There are no reports!');
                // message = SUGAR.language.get('hr_Reports', 'LBL_NO_REPORTS');
                // dialog(message);
                 setTimeout(hideLoadingPanelMsg,200);
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


function getAllStoresByRegion(){
    $.ajax({
        cache: false,
        async: false,
        type: "POST",
        url: 'index.php?module=hr_Reports&action=getAllStoresByRegion',
        dataType: 'json',
        data: {},
        success: function(data) {
            st_by_region = data;

        }
    });
}

function getEmployeesByRegion(){
    $.ajax({
        cache: false,
        async: false,
        type: "POST",
        url: 'index.php?module=hr_Reports&action=getEmployeesByRegion',
        dataType: 'json',
        data: {},
        success: function(data) {
            empl_by_region = data;
        }
    });
}

function getEmployeesByStore(){
    $.ajax({
        cache: false,
        async: false,
        type: "POST",
        url: 'index.php?module=hr_Reports&action=getEmployeesByStore',
        dataType: 'json',
        data: {},
        success: function(data) {
            empl_by_store = data;
        }
    });

}