@extends('main')

@section('content')
<div class="container pt-5">
    <div class="card d-block m-auto p-3">
        <form action="{{route('dashboard.profile.change')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group mb-3">
                <label for="image_upload">Choose Image</label>
                <input type="file" name="image_profile" class="form-control" id="image_upload">
            </div>
                <button type="submit" class="btn btn-primary me-3">Change</button>
                <a href="/dashboard/profile" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection