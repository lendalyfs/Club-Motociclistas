$(function() {
    for (i = new Date().getFullYear()-18; i > 1909; i--){
        $('#years').append($('<option />').val(i).html(i));
    }
    for (i = 1; i < 13; i++){
        $('#months').append($('<option />').val(i).html(i));
    }
    updateNumberOfDays();

    $('#years, #months').change(function(){
        updateNumberOfDays();
    });
});

function updateNumberOfDays(){
    $('#days').html('');
    month = $('#months').val();
    year = $('#years').val();
    days = daysInMonth(month, year);

    for(i=1; i < days+1 ; i++){
        $('#days').append($('<option />').val(i).html(i));
    }
}

// Full date
$(function() {
    for (i = new Date().getFullYear(); i > 1909; i--){
        $('#full-years').append($('<option />').val(i).html(i));
    }
    for (i = 1; i < 13; i++){
        $('#full-months').append($('<option />').val(i).html(i));
    }
    updateNumberOfDaysFull();

    $('#full-years, #full-months').change(function(){
        updateNumberOfDaysFull();
    });
});

function updateNumberOfDaysFull(){
    $('#full-days').html('');
    month = $('#full-months').val();
    year = $('#full-years').val();
    days = daysInMonth(month, year);

    for(i=1; i < days+1 ; i++){
        $('#full-days').append($('<option />').val(i).html(i));
    }
}

function daysInMonth(month, year) {
    return new Date(year, month, 0).getDate();
}