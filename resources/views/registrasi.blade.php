<!DOCTYPE html>
<html>
<head>

    <!-- Title -->
    <title>Login | UKM Picker</title>

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="{{asset('plugins/pace-master/themes/blue/pace-theme-flash.css')}}" rel="stylesheet"/>
    <link href="{{asset('plugins/uniform/css/uniform.default.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('plugins/fontawesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('plugins/line-icons/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/> 
    <link href="{{asset('plugins/offcanvasmenueffects/css/menu_cornerbox.css')}}" rel="stylesheet" type="text/css"/>  
    <link href="{{asset('plugins/waves/waves.min.css')}}" rel="stylesheet" type="text/css"/>  
    <link href="{{asset('plugins/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('plugins/3d-bold-navigation/css/style.css')}}" rel="stylesheet" type="text/css"/> 

    <!-- Theme Styles -->
    <link href="{{asset('css/modern.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/themes/green.css')}}" class="theme-color" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('plugins/3d-bold-navigation/js/modernizr.js')}}"></script>
    <script src="{{asset('plugins/offcanvasmenueffects/js/snap.svg-min.js')}}"></script>

</head>
<body class="page-login login-alt">
    <main class="page-content">
        <div class="page-inner">
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-6 center">
                        <div class="login-box panel panel-white s3 u-rad">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="{{route('PostRegis')}}" method="POST" class="form-horizontal">
                                            @csrf               
                                            <div class="form-group">
                                                <label for="input-rounded" class="col-sm-2 control-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <input name="namamhs" type="text" class="form-control input-rounded" id="input-rounded">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="input-rounded" class="col-sm-2 control-label">NIM</label>
                                                <div class="col-sm-10">
                                                    <input name="nimmhs" type="text" class="form-control input-rounded" id="input-rounded">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="input-rounded" class="col-sm-2 control-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input name="password" type="password" class="form-control input-rounded" id="input-rounded">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Jurusan</label>
                                                <div class="col-sm-10">
                                                    <select name="jurusan" class="form-control m-b-sm">
                                                        @foreach($jurusan as $jr)
                                                        <option value="{{$jr->id}}">{{$jr->nama}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <center>
                                                        <button type="submit" class="btn btn-success btn-rounded" style="width: 50%;">Sumbit</button>
                                                    </center>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    

    <!-- Javascripts -->
    <script src="{{asset('plugins/jquery/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('plugins/pace-master/pace.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-blockui/jquery.blockui.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>
    <script src="{{asset('plugins/uniform/jquery.uniform.min.js')}}"></script>
    <script src="{{asset('plugins/offcanvasmenueffects/js/classie.js')}}"></script>
    <script src="{{asset('plugins/offcanvasmenueffects/js/main.js')}}"></script>
    <script src="{{asset('plugins/waves/waves.min.js')}}"></script>
    <script src="{{asset('plugins/3d-bold-navigation/js/main.js')}}"></script>
    <script src="{{asset('js/modern.min.js')}}"></script>

</body>
</html>