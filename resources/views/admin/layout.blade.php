<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href={{asset('admin/css/bootstrap.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('admin/css/font-awesome.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('admin/css/select2.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('admin/css/style.css')}}>
</head>
<body>
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li class="bg-primary">

                    <a class="btn" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                        <i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
                <li>
                    <a href="{{url('/chatify')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="{{route('adminDashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="{{route('doctors')}}"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                </li>

                <li >
                    <a href="{{route('appointment')}}"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                </li>
                <li>
                    <a href="{{route('schedule')}}"><i class="fa-regular fa-calendar"></i><span>Doctor Schedule</span></a>
                </li>





            </ul>
        </div>
    </div>
</div>
@yield('adminBody')

<div class="sidebar-overlay" data-reff=""></div>
<script src={{asset('admin/js/jquery-3.2.1.min.js')}}></script>
<script src={{asset('admin/js/popper.min.js')}}></script>
<script src={{asset('admin/js/bootstrap.min.js')}}></script>
<script src={{asset('admin/js/jquery.slimscroll.js')}}></script>
<script src={{asset("admin/js/select2.min.js")}}></script>
<script src={{asset("admin/js/moment.min.js")}}></script>
<script src={{asset('admin/js/jquery.fullcalendar.js')}}></script>
<script src={{asset('admin/js/jquery.dataTables.min.js')}}></script>
<script src={{asset("admin/js/fullcalendar.min.js")}}></script>
<script src={{asset("admin/js/dateTables.bootstrap4.min.js")}}></script>
<script src={{asset("admin/s/bootstrap-datetimepicker.min.js")}}></script>
<script src={{asset("admin/js/app.js")}}></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
