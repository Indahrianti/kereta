@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <form Action="{{ route('pesan.update', $pesan->id)}}" method="POST">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="example">
                    @csrf
                    @method('put')
                    <div class="form-group col-md-10">
                                    <label>Jurusan</label>
                                    <select name="id_kereta" class="form-control">
                                        @foreach ($kereta as $data)
                                            <option value="{{ $data->id }}">{{ $data->asal }} - {{ $data->tujuan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-10 ">
                                    <label>Kelas</label>
                                    <select name="kelas" class="form-control">
                                        <option value="ekonomi">Ekonomi</option>
                                        <option value="bisnis">Bisnis</option>
                                    </select>
                                </div>
                               
                                <div class="form-group col-md-10 ">
                                    <label>Tanggal Berangkat</label>
                                    <input type="date" class="form-control" name="tgl" min="<?= date
                                    ('Y-m-d') ?>" value="<?= date('Y-m-d') ?>" >
                                </div>
     
                                <div class="form-group col-md-10 ">
                                    <label>Jumlah Tiket</label>
                                    <select name="jml_tiket" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="panel-body">
                                    <label>Total</label>
                                    <input type="text" class="form-control" name="total" value="{{$pesan->total}}">
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