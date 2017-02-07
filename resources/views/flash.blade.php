@if (session()->has('flash_message'))
    <div class="alert alert-{{ session('flash_message_level') }}" role="alert">
	    @if (session('flash_message_close'))
	    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		@endif
    	{{ session('flash_message') }}
    </div>
@endif