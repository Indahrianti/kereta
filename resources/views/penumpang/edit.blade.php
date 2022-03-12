@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <form Action="{{ route('penumpang.update', $penumpang->id)}}" method="POST">
                                     <!-- /.card-heading -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                    @csrf
                    @method('put')
                    <div class="panel-body">
                        <label>ID Kereta</label>
                        <input  type="text" name="kereta_id" value="{{$penumpang->kereta_id}}" class="form-control" readonly>
                    </div>
                    <div class="panel-body">
                        <label>Kelas</label>
                        <input  type="text" name="kelas" value="{{$penumpang->kelas}}" class="form-control" >
                    </div>
                    <div class="form-group col-md-12">
                        <label>Tanggal Berangkat</label>
                        <input type="date" class="form-control" name="tgl" min="<?= date
                        ('Y-m-d') ?>" value="<?= date('Y-m-d') ?>" >
                    </div>
                    <div class="panel-body">
                        <label>Jumlah Penumpang</label>
                        <input  type="text" name="jml_penumpang" class="form-control" value="{{$penumpang->jml_penumpang}}" >
                    </div>
                    <br>
                    <div class="panel-body">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
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