var store_by_region = {};
$(document).ready(function (){
    console.log('here');
    getStoresByRegion();
    $('#store_id').prop('disabled',true);
    $('#region_id').change(function (){
        if(this.value != ''){
            storeByRegion(this.value);
            $('#store_id').prop('disabled',false);
        }
        else{
            $('#store_id').prop('disabled',true);
            $('#store_id').val('');
        }
    });

});

function getStoresByRegion(){
    $.ajax({
        cache: false,
        async: false,
        type: "GET",
        url: 'index.php?module=hr_Position_management&action=getStoresByRegion',
        dataType: 'json',
        data: {},
        success: function (data) {
            store_by_region = data;
        }

    });
}

function storeByRegion(region_id){
    $('#store_id').empty();
    var emptyOption = $('<option>').val('').text('');
    $('#store_id').append(emptyOption);
    var stores = store_by_region[region_id];

    $.each(stores, function(stID, stData){
        var name = stData.name;
        var option = $('<option>').attr('label', name).val(stID).text(name);
        $('#store_id').append(option);

    });
}