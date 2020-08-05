<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
            Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="source/admin/css/bootstrap.min.css" rel="stylesheet" />
  <link href="source/admin/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="source/admin/demo/demo.css" rel="stylesheet" />
</head>
<body >
   
    <div class="wrapper ">
            @include('admin.layouts.sidebar')
           
            <div class="main-panel">
                @include('admin.layouts.navbar')

                
                <div class="container-fluid">
                    @yield('content')
                </div>
               
            </div>
    </div>

            @include('admin.layouts.footer')

</body>

</html>