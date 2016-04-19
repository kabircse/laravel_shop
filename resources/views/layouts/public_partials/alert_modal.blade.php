@if(Session::get('alert'))
	<?php echo '<script>$(function(){window_load()});</script>';?>
@endif
	<!-- Trigger the modal with a button -->
	<button type="button" class="modal-btn btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">x</button>
	<!-- Modal -->
	<div id="myModal" class="modal fade alert-modal" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-body">
	        <p class="alert-msg btn btn-info btn-{{ Session::get('alert') }}">{{ Session::get('notification') }}</p>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
	      </div>
	    </div>
	  </div>
	</div>