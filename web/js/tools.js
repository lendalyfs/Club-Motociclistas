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

function daysInMonth(month, year) {
    return new Date(year, month, 0).getDate();
}

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 9000);
}