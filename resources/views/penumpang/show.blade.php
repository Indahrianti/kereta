@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <form Action="{{ route('penumpang.show', $penumpang->id)}}" method="POST">
                                     <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                    @csrf
                    @method('put')
                    <div class="panel-body">
                        <label>Nama Kereta</label>
                        <input type="text" class="form-control" name="kereta_id" value="{{$penumpang->keretas->nama_KA}}" readonly>
                    </div>
                    <div class="panel-body">
                        <label>Asal Berangkat</label>
                        <input type="text" class="form-control" name="asal_id" value="{{$penumpang->keretas->asals->asal_brangkat}}" readonly>
                    </div>
                    <div class="panel-body">
                        <label>Tujuan Berangkat</label>
                        <input type="text" class="form-control" name="tujuan_id" value="{{$penumpang->keretas->tujuans->tujuan_brangkat}}" readonly>
                    </div>
                    <div class="panel-body">
                        <label>Kelas</label>
                        <input type="text" class="form-control" name="kelas" value="{{$penumpang->kelas}}" readonly>
                    </div>
                    <div class="panel-body">
                        <label>Tanggal</label>
                        <input type="text" class="form-control" name="tgl" value="{{$penumpang->tgl}}" readonly>
                    </div>
                    <div class="panel-body">
                        <label>Jumlah Penumpang</label>
                        <input type="text" class="form-control" name="jml_penumpang" value="{{$penumpang->jml_penumpang}}" readonly>
                    </div>
                    <div class="form-group">
                             <br>
                            <a href="{{ url('admin/penumpang') }}" class="btn btn-block btn-outline-primary">Kembali</a>
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