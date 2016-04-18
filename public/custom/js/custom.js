$(window).load(function(){
    //$('.alert_msg').delay(2700).hide('slow');
    modal_trigger();
    hide_modal();//function call
});
$(function(){
  $('.modal-btn').hide('fast');
    /*DataTable*/
    $('.dataTable').DataTable({
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "order": []
    });
});

function hide_modal(){
  setTimeout(function(){$('#myModal').modal('hide')},3000);
}
function modal_trigger(){
  $('.modal-btn').trigger('click');
}
