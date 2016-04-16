$(window).load(function(){
    $('.alert_msg').delay(2700).hide('slow');
});
$(function(){
    /*DataTable*/
    $('.dataTable').DataTable({
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "order": []
    });
});
