@extends('template.app')

@section('page-title', 'Master User')


@section('content')

    {{-- Default Box --}}
    <div class="box box-primary">
        <div class="box-body">
            <div class="table">
                <table class="table table-striped table-hover table-responsive" id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $index => $user)
                            <tr>
                                <td>{{ $index + $users->firstItem() }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if( $user->is_admin == false )
                                        <span class="label label-primary">User</span>
                                    @else
                                        <span class="label label-success">Admin</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{--Pagination--}}
                <div class="pull-right">
                    {!! $users->links() !!}
                </div>
                {{--Tutup Pagination--}}

            </div>
        </div>
        {{-- tutup box body --}}
    </div>
@endsection