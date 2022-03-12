<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{asset('backend/css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{asset('backend/css/timeline.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{asset('backend/css/startmin.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{asset('backend/css/morris.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{asset('backend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

                <!-- /.navbar-top-links -->

                {{--NAVBAR--}}
           @include('layouts.bagian.navbar')
           {{-- /NAVBAR --}}

            {{--sidebar--}}
            @include('layouts.bagian.sidebar')
             {{-- /sidebar --}}


            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">pesan</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                    {{-- table --}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Tambah Data pesan
                                </div>
                                <form Action="{{ route('pesan.store')}}" method="POST">
                                @csrf
                                    <div class="panel-body">
                                    <label>Jurusan</label>
                                    <select name="id_kereta" class="form-control">
                                        @foreach ($kereta as $data)
                                            <option value="{{$data->id}}">{{ $data->asal }} - {{ $data->tujuan }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                   <div class="panel-body">
                                   <label>Kelas</label>
                                    <select name="kelas" class="form-control" required>
                                        <option value="">~~ Pilih ~~</option>
                                        <option value="ekonomi">Ekonomi</option>
                                        <option value="bisnis">Bisnis</option>
                                    </select>
                                    </div>
                                   <div class="panel-body">
                                   <label>Tanggal Berangkat</label>
                                    <input type="date" class="form-control" name="tgl" min="<?= date
                                    ('Y-m-d') ?>" value="<?= date('Y-m-d') ?>" >
                                    </div>
                                    <div class="panel-body">
                                    <label>Jumlah Tiket</label>
                                    <select name="jml_tiket" class="form-control" required>
                                            <option value="">~~ Pilih ~~</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                    </select>
                                    </div>
                                   <div class="panel-body">
                                       <button type="reset" class="btn btn-warning">Reset</button>
                                       <button type="submit" class="btn btn-primary">Tambah</button>
                                   </div>
                                </form>
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    {{-- /table --}}

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{asset('backend/js/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{asset('backend/js/metisMenu.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{asset('backend/js/raphael.min.js')}}"></script>
        <script src="{{asset('backend/js/morris.min.js')}}"></script>
        <script src="{{asset('backend/js/morris-data.js')}}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{asset('backend/js/startmin.js')}}"></script>

    </body>
</html>
