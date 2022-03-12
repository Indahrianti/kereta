@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            Data User
        </div>
        <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach($user as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->name}}</td>
                            <td>{{ $data->email}}</td>
                            <td>
                                <form action="{{route('user.destroy', $data->id)}}" method="post">
                                    @method('delete')
                                    @csrf

                                    <!-- <a href="{{route('user.edit',$data->id)}}" class="btn btn-success">Ubah</a>
                                    <a href="{{route('user.show',$data->id)}}" class="btn btn-warning">Tampil</a> -->
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('DataTables/datatables.min.css')}}">
@endsection

@section('js')
    <script src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>
@endsection