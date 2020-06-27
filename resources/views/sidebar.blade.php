<div class="card mb-1">
    <form method="post">
        {{csrf_field()}}
    <div class="card-header bg-primary rounded-0 text-white mb-1">Login Here!</div>
    @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
    @endforeach
    <div class="card-body">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control form-control-sm rounded-0" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control form-control-sm rounded-0" id="password" name="password" name="Password" placeholder="Password">
        </div>
        <button class="btn btn-primary btn-sm rounded-0">Login</button>
        <button class="btn btn-outline-primary btn-sm rounded-0 ml-2">Cancel</button>
    </div>
    </form>
</div>
{{-- <div class="card">
    <div class="card-header">
        Category
    </div>
    <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item">Orange</li>
            <li class="list-group-item">Orange</li>
            <li class="list-group-item">Orange</li>
            <li class="list-group-item">Orange</li>
        </ul>
    </div>
</div> --}}
<ul class="list-group">
    <li class="list-group-item active rounded-0">Category</li>
    <a href="{{url('/')}}">
        <li class="list-group-item rounded-0"><i class="fa fa-angle-right text-info"></i>&nbsp;<b>All Car</b></li>
    </a>
    @foreach($cates as $cate)
        <a href="{{action('HomeController@show',$cate->id)}}">
            <li class="list-group-item rounded-0"><i class="fa fa-arrow-right text-info"></i>&nbsp;{{$cate->brand}}</li>
        </a>
    @endforeach
</ul>