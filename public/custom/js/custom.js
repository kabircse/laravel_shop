$(window).load(function(){
    $('.alert_msg').delay(2500).hide('slow');
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
