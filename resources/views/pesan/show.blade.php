@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <form Action="{{ route('transaksi.show', $transaksi->id)}}" method="POST">
                                     <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                    @csrf
                    @method('put')
                    <div class="panel-body">
                        <label>Nama Penumpang</label>
                        <input  type="text" name="nama_penumpang" value="{{$transaksi->nama_penumpang}}" class="form-control" readonly>
                    </div>
                    <div class="panel-body">
                        <label>Jumlah</label>
                        <input type="text" class="form-control" name="jumlah" value="{{$transaksi->jumlah}}" readonly>
                    </div>
                    <div class="panel-body">
                        <label>No Telelpon</label>
                        <input type="text" class="form-control" name="no_telp" value="{{$transaksi->no_telp}}" readonly>
                    </div>
                    <div class="panel-body">
                        <label>Total</label>
                        <input type="text" class="form-control" name="total" value="{{$transaksi->total}}" readonly>
                    </div>
                    
                    <div class="form-group">
                             <br>
                            <a href="{{ url('admin/transaksi') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                     </form>
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