@if (Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif

{{-- @if (Session::has('error'))
<div class="alert alert-danger">
    {{Session::get('error')}}
</div>
@endif --}}

@if (Session::has('status'))
<div class="alert alert-primary">
    {{Session::get('status')}}
</div>
@endif

@if (Session::has('deleted'))
<div class="alert alert-danger">
    {{Session::get('deleted')}}
</div>
@endif