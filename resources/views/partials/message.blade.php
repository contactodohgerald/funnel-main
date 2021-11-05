@if(Session::has('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{!! session('success') !!}</strong>
</div>
@endif
@if(Session::has('error'))
<div class="alert alert-error alert-block" style="background-color:red">
    <button type="button" class="close" data-dismiss="alert" style="color:#fff;">×</button> 
        <strong style="color:#fff;">{!! session('error') !!}</strong>
</div>
@endif