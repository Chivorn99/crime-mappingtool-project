<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <!-- Header Nav -->
    @include('admin_layout/headnav')

    <div id="layoutSidenav">
        <!-- Side Nav -->
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Data Management</div>
                        <a class="nav-link" href="/homepage">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Home
                        </a>
                        <a class="nav-link" href="/user_dash">
                            <div class="sb-nav-link-icon"><i class="fas fa-user fa-fw"></i></div>
                            User Management
                        </a>
                        <a class="nav-link" href="/crime_dash">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Crime Management
                        </a>
                        <a class="nav-link" href="/crime_chart">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-pie"></i>
                            </div>
                            Crime Chart
                        </a>
                        <a class="nav-link active" href="/pending_report">
                            <div class="sb-nav-link-icon"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                            </div>
                            Pending Report
                        </a>
                        <a class="nav-link" href="/crime_map">
                            <div class="sb-nav-link-icon"><i class="fas fa-map-marker-alt"></i>
                            </div>
                            Crime Map
                        </a>
                        <a class="nav-link" href="/contacts">
                            <div class="sb-nav-link-icon"><i class="fas fa-comments"></i>
                            </div>
                            Contact Feedbacks
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    {{$admin->admin_username}}
                </div>
            </nav>
        </div>

        <!-- Content Section -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Pending Report</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">Pending Report Dashboard</li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>

                    <!-- Pending Crime Data Table -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Pending Crime
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple" class="display">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Address</th>
                                        <th>Location</th>
                                        <th>Reported By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Type</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Address</th>
                                        <th>Location</th>
                                        <th>Reported By</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($crime_pendings as $crime_pending)
                                        <tr>
                                            <td>{{$crime_pending['crime_type']}}</td>
                                            <td>{{$crime_pending['description']}}</td>
                                            <td>{{$crime_pending['date']}}</td>
                                            <td>2011/04/25</td>
                                            <td>{{$crime_pending['address']}}</td>
                                            <td>{{$crime_pending['longitude']}} , {{$crime_pending['latitude']}}</td>
                                            <td>{{$crime_pending->reportedBy->username}}</td>
                                            <td>
                                                <form action="/delete_pending_crime/{{$crime_pending->id}}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this crime?')">Delete</button>
                                                </form>
                                                <form action="/confirm_pending_crime/{{$crime_pending->id}}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success btn-sm">Confirm</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple.js"></script>
</body>

</html>