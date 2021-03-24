@extends('layout')
@section('content')
<div>
	<h1> Log In user </h1>
<div class="col-sm-8">
<form method="post" action="login">
@csrf


<div class="form-group">
<label>Email</label>
<input type="text" name="email" class="form-control" placeholder="Enter Email">
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" placeholder="Enter Password">
</div>

</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@stop