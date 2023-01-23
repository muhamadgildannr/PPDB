@extends('main')

@section('content')
<h2 style="font-family:'Times New Roman', Times, serif">Data User</h2>
<br>
        <table class="table" style="background-color: orange">
            <thead>
              <tr>
                <th scope="col-md-1 text-white">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Created</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ \Carbon\Carbon::parse($user['created_at'])->format('j F, Y') }}</td>
                {{-- <td>{{ \Carbon\Carbon::parse($user['updated_at'])->format('j F, Y') }}</td> --}}
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection