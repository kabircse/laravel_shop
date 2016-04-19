
$(function(){
  $(".alert-modal,.modal-btn").hide('fast');
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
  setTimeout(function(){$('#myModal').modal('hide')},3500);
}
function modal_trigger(){
  $(".alert-modal").show('fast');
  $('.modal-btn').trigger('click');
}

function window_load(){
 $(window).load(function(){
    modal_trigger();//function call
    hide_modal();
});  
}