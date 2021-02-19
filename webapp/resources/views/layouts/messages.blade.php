@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="danger text-danger py-2 px-4 text-center">
            {{$error}}
			<hr>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="text-success py-2 px-4 text-center">
        <h4>{{session('success')}}</h4>
		<hr>
    </div>
@endif


@if(session('error'))
    <div class="text-danger py-2 px-4 text-center">
        <h4>{{session('error')}}</h4>
		<hr>
    </div>
@endif