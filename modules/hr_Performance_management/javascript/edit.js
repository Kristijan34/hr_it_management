var user_id = '';

$(document).ready(function (){
    setRelateFieldsToReadOnly();

    $('#btn_user_name').attr('onclick', $('#btn_user_name').attr('onclick').replaceAll('"set_return"', '"set_return_notify"'));
    $('#btn_clr_user_name').click(emptyFields);

});

function setRelateFieldsToReadOnly(){
    $('#btn_role_name').attr('disabled',true);
    $('#btn_clr_role_name').attr('disabled',true);

    $('#btn_region_name').attr('disabled',true);
    $('#btn_clr_region_name').attr('disabled',true);

    $('#btn_store_name').attr('disabled',true);
    $('#btn_clr_store_name').attr('disabled',true);
}

function emptyFields(){
    $('#region_id').val('');
    $('#region_name').val('');

    $('#role_id').val('');
    $('#role_name').val('');

    $('#store_id').val('');
    $('#store_name').val('');
}
function set_return_notify(o) {
    var res = set_return(o);
    console.log(o.name_to_value_array);
    if (typeof o.name_to_value_array.user_id != 'undefined') {
        user_id = o.name_to_value_array.user_id;
    }

    setTimeout(setRegionStoreRole, 0);

}

function setRegionStoreRole(){

    $.ajax({
        cache: false,
        async: false,
        type: "POST",
        url: 'index.php?module=hr_Performance_management&action=getUserPosition',
        dataType: 'json',
        data: {
            user_id: user_id,
        },
        success: function(result) {
            if (result['error'] != '') {
               alert(result['error']);
                $('#user_id').val('');
                $('#user_name').val('');
                return false;
            }
            else {
                $('#region_id').val(result['data']['region_id']);
                $('#region_name').val(result['data']['region_name']);

                $('#role_id').val(result['data']['role_id']);
                $('#role_name').val(result['data']['role_name']);

                $('#store_id').val(result['data']['store_id']);
                $('#store_name').val(result['data']['store_name']);
            }

        }
    });

}
