    <div class="container">
        <!-- Trigger the modal with a button -->

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          	<div class="modal-dialog">
            	<!-- Modal content-->
	            <div class="modal-content">
	                <div class="modal-header">
	                	<button type="button" class="close" data-dismiss="modal">&times;</button>
	                	<h4 class="modal-title">Modal Header</h4>
	                </div>
                	<div class="modal-body">
                		{{Form::open(['url' => url('category'), 'method' => 'put', 'class' => 'form_modal'])}}
                    		{{ Form::label('name', 'Category Name') }}
                    		{{ Form::text('name', 'Your cat name', array('class' => 'form-control mod')) }}
                  			{{ Form::submit('Edit!', array('class' => 'btn btn-primary')) }}
                		{{ Form::close() }}
              		</div>
	                <div class="modal-footer">
	                	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	              	</div>
	            </div>            
          	</div>
        </div>  
    </div>

    <!-- Modal for create -->
    <div class="container">
        <!-- Trigger the modal with a button -->

        <!-- Modal -->
        <div class="modal fade" id="myModal_1" role="dialog">
          	<div class="modal-dialog">
          
	            <!-- Modal content-->
	            <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal">&times;</button>
		                <h4 class="modal-title">Modal Header</h4>
		            </div>
		            <div class="modal-body">
		                {{Form::open(['url' => url('category'), 'method' => 'post', 'class' => 'form_add_catl'])}}
		                    {{ Form::label('name', 'Category Name') }}
		                    {{ Form::text('name', 'Your cat name', array('class' => 'form-control mod_add')) }}
		                    {{ Form::submit('Add!', array('class' => 'btn btn-primary')) }}
		                {{ Form::close() }}
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		            </div>
            	</div>
            
          	</div>
        </div>
    </div>