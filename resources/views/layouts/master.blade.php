<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SilesTicks @yield('title')</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="../assets/css/sb-admin.css" rel="stylesheet">

    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Extras css -->
    <link href="../assets/extras/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@yield('content')


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../assets/js/bootstrap.min.js"></script>
<!--<script src="../assets/js/jQuery-2.1.4.min.js"></script> -->
<script src="../assets/js/validator.js"></script>
<script src="../assets/js/validator.js"></script>


<script src="../assets/js/plugins/morris/raphael.min.js"></script>
<script src="../assets/js/plugins/morris/morris.min.js"></script>
<script src="../assets/js/plugins/morris/morris-data.js"></script>
<!-- Extras js -->
<link href="../assets/extras/js/holder.min.js" rel="stylesheet">
@section('scripts')
@show
</body>
</html>