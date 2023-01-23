@extends('layout')

@section('content')


@if (Session::get('fail'))
<div class="alert alert-danger">
    {{ Session::get('fail') }}
</div>
@endif
@if (Session::get('notAllowed'))
<div class="alert alert-danger">
    {{ Session::get('notAllowed') }}
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
   <ul>
       @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
       @endforeach
   </ul>
</div>
@endif
@if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (Session::get('notAllowed'))
        <div class="alert alert-danger">
            {{ Session::get('notAllowed') }}
        </div>
    @endif
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif

    <div class="container d-flex justify-content-center align-items-center mt-5">
        <form method="POST" action="{{route('login.auth')}}" class="card py-4 px-4">
            @csrf
            <div class="text-center logo">
                <i class="fas fa-user-circle"></i>
            </div>
            <div class="text-center mt-3">
                
            <span class="info-text">silahkan mengisi email dan password untuk login</span>
            
            </div>
            <div class="position-relative mt-3 form-input">
                <label>Email</label>
                <input class="form-control" type="text" name="email">
                <i class="fas fa-user"></i>
            </div>
            <div class="position-relative mt-3 form-input">
                <label>Password</label>
                <input class="form-control" type="password" name="password">
                <i class="fas fa-lock"></i>
            </div>
            
            <div class=" mt-5 d-flex justify-content-between align-items-center">
                <button type="submit" class="go-button"><i class="fas fa-long-arrow-right"></i></button>
            </div>
        </form>
    </div>
@endsection
