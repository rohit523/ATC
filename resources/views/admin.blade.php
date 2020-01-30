@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as Admin!
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <table>
    <thead>
        <th>name</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table> --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Registered Users</h3>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="table-responsive">
                <table id="mytable" class="table table-bordered table-hover">
                    <tr class="danger">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->Role }}</td>
                            <td>
                                <a href="/ATC/public/admin/{{$user->id}}" class="btn btn-success">EDIT</a>
                            </td>
                            <td>
                                <form action="/ATC/public/delete/{{ $user->id }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    
                </table>
                <?php echo $users->render(); ?>
            </div>
        </div>
    </div>
</div>
@endsection