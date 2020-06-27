@extends('layout.master')
@section('title','Admin Dashboard')
@section('content')
    <div class="container-fluid my-2">
        <div class="row">
            <div class="col-md-3">
                @include('backend.admin.sidebar')
            </div>
            <div class="col-md-9">
                
                @if(Auth::check())
                @if(Auth::user()->name)
                    <b><p>Welcome to <i style="color:red;">{{Auth::user()->name}}</i> </p></b>
                @endif
                @endif
                <p id="phyo"></p>
                {{-- <p>This is your Panel</p>
                <p>You have permission to Edit, Delete, Insert and Update Car Information Here!</p>
                <p>Your responsibility and role on the left side!</p>
                <p>Take your time and feel free</p> --}}
            </div>
        </div>
    </div>
    <script type="text/javascript">
		var Text = "This is your Panel. You have permission to Edit, Delete, Insert and Update Car Information Here.Your responsibility and role on the left side. Take your time and feel free.";
		var Textarray = Text.split('');
		var loopTime;
		function looper(){
			if(Textarray.length>0){
				document.getElementById("phyo").innerHTML += Textarray.shift();
			}else{
				clearTimeout(loopTime);
			}
			loopTime =setTimeout("looper()",100);
		}
		looper();
	</script>
@endsection
