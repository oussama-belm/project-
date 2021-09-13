
<!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/  07 Jan 2020 03:36:49 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>Admin Profile</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

<!-- Plugins css -->
<link rel="stylesheet" href="assets/plugins/charts-c3/c3.min.css"/>

<!-- Core css -->
<link rel="stylesheet" href="assets/css/main.css"/>
<link rel="stylesheet" href="assets/css/theme1.css"/>
</head>

<body class="font-montserrat offcanvas-active">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">

    <div id="header_top" class="header_top">
        <div class="container">
            <div class="hleft">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link user_btn"><img class="avatar"  data-toggle="tooltip" data-placement="right" title="User Menu"/></a>
                </div>
            </div>

        </div>
    </div>
    <div class="user_div">
        <h5  class="brand-name mb-4 ml-5">{{ $admin->username }}<a href="javascript:void(0)" class="user_btn"><i class="icon-logout"></i></a></h5>
        <div class="card-body">
            <a href="page-profile.html"><img class="card-profile-img" src="" alt=""></a>
            <h6 class="mb-0">{{ $admin->nomadmin }} {{ $admin->prenomadmin }}</h6>
            <span>{{ $admin->addressadmin }}</span>
            <div class="d-flex align-items-baseline mt-3">
                <h3 class="mb-0 mr-2">9.8</h3>
                <p class="mb-0"><span class="text-success">1.6% <i class="fa fa-arrow-up"></i></span></p>
            </div>
            <div class="progress progress-xs">
                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 5%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-indigo" role="progressbar" style="width: 13%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h6 class="text-uppercase font-10 mt-1">Performance Score</h6>
            <hr>
            <p>Activity</p>
            <ul class="new_timeline">
                <li>
                    <div class="bullet pink"></div>
                </li>
                <li>
                    <div class="bullet pink"></div>
                </li>
                <li>
                    <div class="bullet green"></div>
                </li>
                <li>
                    <div class="bullet green"></div>
                </li>
                <li>
                    <div class="bullet orange"></div>
                </li>
                <li>
                    <div class="bullet green"></div>
                </li>
            </ul>
        </div>
    </div>



    <div class="page">
        <div id="page_top" class="section-body top_dark">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <i class="fa  fa-align-left mr-10"></i>
                        <h1 class="page-title">Dashboard</h1>
                    </div>
                    <div class="right">

                        <div class="notification d-flex">
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2" data-toggle="dropdown"><i class="fa fa-language"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                </div>
                            </div>

                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-2" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                    <a class="dropdown-item" href="login.html"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="mb-4">
                            <h4>Welcome {{ $admin->nomadmin }} {{ $admin->prenomadmin }}!</h4>
                            <small>now you can see all the information about your app</small>
                        </div>
                    </div>
                </div>
                <div class="row clearfix row-deck">
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">nbr products</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 counter">{{  count($products) }}</h5>
                                <span class="font-12">Explor all the products... <a href="#">More</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">nbr client</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 counter">{{ count($users) }}</h5>
                                <span class="font-12">explore all the clients... <a href="#">More</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">nbr venderus</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 counter">{{ count($vendeurs) }}</h5>
                                <span class="font-12">explore all vendeurs ... <a href="#">More</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">nbr problems</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 counter">{{ count($problems) }}</h5>
                                <span class="font-12">see the problems... <a href="#">More</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">evenements</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 counter">{{ count($evenements) }}</h5>
                                <span class="font-12">see evenements... <a href="#">More</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Quantity Total</h3>
                            </div>
                            <div class="card-body">
                                <h5 class="number mb-0 font-32 counter">
                                    <?php $i = 0;
                                    foreach ($products as $product) {
                                        $i = $product->quantite + $i;
                                    }
                                    ?>
                                    {{$i}}</h5>
                                <span class="font-12">this total Quantity </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="section-body mt-4">
            <div class="container-fluid">

                <!--
                <div class="row clearfix row-deck">
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Transaction History</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    <div class="item-action dropdown ml-2">
                                        <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-174px, 25px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table card-table mt-2">
                                <tbody>
                                    <tr>
                                        <td class="w60"><img class="avatar" src="assets/images/xs/avatar1.jpg" alt="Avatar"></td>
                                        <td>
                                            <p class="mb-0 d-flex justify-content-between"><span>Payment from #2583</span> <strong>$300</strong></p>
                                            <span class="text-muted font-13">Feb 21, 2019</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60"><img class="avatar" src="assets/images/xs/avatar2.jpg" alt="Avatar"></td>
                                        <td>
                                            <p class="mb-0 d-flex justify-content-between"><span>Payment from #1245</span> <strong>$1200</strong></p>
                                            <span class="text-muted font-13">March 14, 2019</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60"><img class="avatar" src="assets/images/xs/avatar3.jpg" alt="Avatar"></td>
                                        <td>
                                            <p class="mb-0 d-flex justify-content-between"><span>Payment from #8596</span> <strong>$780</strong></p>
                                            <span class="text-muted font-13">March 18, 2019</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60"><img class="avatar" src="assets/images/xs/avatar4.jpg" alt="Avatar"></td>
                                        <td>
                                            <p class="mb-0 d-flex justify-content-between"><span>Payment from #1526</span> <strong>$841</strong></p>
                                            <span class="text-muted font-13">April 27, 2019</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60"><img class="avatar" src="assets/images/xs/avatar5.jpg" alt="Avatar"></td>
                                        <td>
                                            <p class="mb-0 d-flex justify-content-between"><span>Payment from #4859</span> <strong>$235</strong></p>
                                            <span class="text-muted font-13">March 18, 2019</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Customer Satisfaction</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    <div class="item-action dropdown ml-2">
                                        <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-174px, 25px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-baseline">
                                    <h1 class="mb-0 mr-2">9.8</h1>
                                    <p class="mb-0"><span class="text-success">1.6% <i class="fa fa-arrow-up"></i></span></p>
                                </div>
                                <h6 class="text-uppercase font-10">Performance Score</h6>
                                <div class="progress progress-xs">
                                    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-orange" role="progressbar" style="width: 5%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-indigo" role="progressbar" style="width: 13%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="tx-medium"><i class="fa fa-circle text-blue"></i> Excellent</td>
                                            <td class="text-right">3,007</td>
                                            <td class="text-right">50%</td>
                                        </tr>
                                        <tr>
                                            <td class="tx-medium"><i class="fa fa-circle text-success"></i> Very Good</td>
                                            <td class="text-right">1,674</td>
                                            <td class="text-right">25%</td>
                                        </tr>
                                        <tr>
                                            <td class="tx-medium"><i class="fa fa-circle text-info"></i> Good</td>
                                            <td class="text-right">125</td>
                                            <td class="text-right">6%</td>
                                        </tr>
                                        <tr>
                                            <td class="tx-medium"><i class="fa fa-circle text-orange"></i> Fair</td>
                                            <td class="text-right">98</td>
                                            <td class="text-right">5%</td>
                                        </tr>
                                        <tr>
                                            <td class="tx-medium"><i class="fa fa-circle text-indigo"></i> Poor</td>
                                            <td class="text-right">512</td>
                                            <td class="text-right">10%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Overall Rating</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    <div class="item-action dropdown ml-2">
                                        <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-174px, 25px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-baseline">
                                    <h2 class="font-28 mr-2">4.2</h2>
                                    <div class="font-14">
                                        <i class="fa fa-star text-orange"></i>
                                        <i class="fa fa-star text-orange"></i>
                                        <i class="fa fa-star text-orange"></i>
                                        <i class="fa fa-star text-orange"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p class="mb-0 font-12">Overall the quality or your support team’s efforts Rating.</p>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter mb-0">
                                    <tbody>
                                        <tr>
                                            <td><strong>5.0</strong></td>
                                            <td>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </td>
                                            <td class="text-right">432</td>
                                            <td class="text-right">58%</td>
                                        </tr>
                                        <tr>
                                            <td><strong>4.0</strong></td>
                                            <td>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </td>
                                            <td class="text-right">189</td>
                                            <td class="text-right">42%</td>
                                        </tr>
                                        <tr>
                                            <td><strong>3.0</strong></td>
                                            <td>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </td>
                                            <td class="text-right">125</td>
                                            <td class="text-right">23%</td>
                                        </tr>
                                        <tr>
                                            <td><strong>2.0</strong></td>
                                            <td>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </td>
                                            <td class="text-right">89</td>
                                            <td class="text-right">18%</td>
                                        </tr>
                                        <tr>
                                            <td><strong>1.0</strong></td>
                                            <td>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </td>
                                            <td class="text-right">18</td>
                                            <td class="text-right">11%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <div class="row clearfix">
                    <div class="col-12 col-sm-13">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">CLIENT LIST</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped text-nowrap table-vcenter mb-0">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Email</th>
                                                <th>User Name</th>
                                                <th>address</th>
                                                <th>Number_telephone</th>
                                                <th>Action</th>
                                                <th>created_at</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                            <tr>
                                                <td>#{{ $user->id }}</td>
                                                <td>{{ $user->nom }}</td>
                                                <td>{{ $user->prenom }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->address }}</td>
                                                <td>{{ $user->num_telephone }}</td>
                                                <td class=" btn-danger">
                                                   <a href=" remove/{{$admin->id}}/{{$user->id}}" style="color: black;">remove</a>
                                                </td>
                                                <td>{{ $user->created_at }}</td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex justify-content-between">
                                    <ul class="nav nav-tabs b-none">
                                        <li class="nav-item"><a class="nav-link active" id="list-tab" data-toggle="tab" href="#list"><i class="fa fa-list-ul"></i>Dommande List</a></li>
                                    </ul>
                                    <div class="d-flex align-items-center sort_stat">
                                        <div class="d-flex">
                                            <div class="ml-2">
                                                <p class="mb-0 font-11">nbr dommandes</p>
                                                <h5 class="font-16 mb-0">{{ count($dommander_compte_vendeurs) }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mt-2">
                                    <input type="text" class="form-control search" placeholder="Search...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="list" role="tabpanel">
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                <div class="table-responsive" id="users">
                                    <table class="table table-hover table-vcenter text-nowrap table_custom border-style list">
                                        <tbody>

                                            @foreach ( $dommander_compte_vendeurs as $dommande)

                                            <form action="/accepter/{{ $dommande->id }}" method="get">
                                                @csrf
                                            <tr class="">
                                                <td class="width35 hidden-xs">
                                                    <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                                </td>
                                                <td class="text-center width40">
                                                    <div class="avatar d-block">
                                                        {{ $dommande->id }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div><a href="javascript:void(0);">{{ $dommande->nom }}</a></div>

                                                </td>
                                                <td>
                                                    <div><a href="javascript:void(0);">{{ $dommande->prenom }}</a></div>
                                                </td>
                                                <td>

                                                    <div class="text-muted">{{ $dommande->num_telephone }}</div>
                                                </td>
                                                <td class="hidden-xs">
                                                    <div class="text-muted">{{ $dommande->num_boutique }}</div>
                                                </td>
                                                <td class="hidden-sm">
                                                    <div class="text-muted">{{ $dommande->typearticle }}</div>
                                                </td>
                                                <td class="hidden-sm">
                                                    <input type="text" placeholder="username" class=" border-0" name="username">
                                                </td>

                                                <td class="hidden-sm">
                                                    <input type="password" placeholder="password" class=" border-0" name="password">
                                                </td>
                                                <td class="text-right">
                                                    <button class=" border-0 badge-light rounded-circle" type="submit"><i data-toggle="tooltip" title="Accepter" class="fa fa-check-circle-o"></i></button>
                                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert" data-type="confirm"  href="/delete/{{ $dommande->id }}" data-toggle="tooltip" title="Refuser"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            </form>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="tab-pane fade" id="grid" role="tabpanel">
                        <div class="row row-deck">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card " >
                                    <div class="card-body">
                                        <div class="card-status bg-blue"></div>
                                        <div class="mb-3"> <img src="assets/images/sm/avatar1.jpg" class="rounded-circle w100" alt=""> </div>
                                        <div class="mb-2">
                                            <h5 class="mb-0">Paul Schmidt</h5>
                                            <p class="text-muted">Aalizeethomas@info.com</p>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                        </div>
                                        <span class="font-12 text-muted">Common Contact</span>
                                        <ul class="list-unstyled team-info margin-0 pt-2">
                                            <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                            <li><img src="assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                            <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="mb-3"> <img src="assets/images/sm/avatar2.jpg" class="rounded-circle w100" alt=""> </div>
                                        <div class="mb-2">
                                            <h5 class="mb-0">Andrew Patrick</h5>
                                            <p>Aalizeethomas@info.com</p>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                        </div>
                                        <span class="font-12 text-muted">Common Contact</span>
                                        <ul class="list-unstyled team-info margin-0 pt-2">
                                            <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                            <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                            <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                            <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="mb-3"> <img src="assets/images/sm/avatar3.jpg" class="rounded-circle w100" alt=""> </div>
                                        <div class="mb-2">
                                            <h5 class="mb-0">Mary Schneider</h5>
                                            <p>Aalizeethomas@info.com</p>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                        </div>
                                        <span class="font-12 text-muted">Common Contact</span>
                                        <ul class="list-unstyled team-info margin-0 pt-2">
                                            <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card " >
                                    <div class="card-body">
                                        <div class="card-status bg-green"></div>
                                        <div class="mb-3"> <img src="assets/images/sm/avatar4.jpg" class="rounded-circle w100" alt=""> </div>
                                        <div class="mb-2">
                                            <h5 class="mb-0">Sean Black</h5>
                                            <p>Aalizeethomas@info.com</p>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                        </div>
                                        <span class="font-12 text-muted">Common Contact</span>
                                        <ul class="list-unstyled team-info margin-0 pt-2">
                                            <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                            <li><img src="assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                                            <li><img src="assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                            <li><img src="assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="mb-3"> <img src="assets/images/sm/avatar5.jpg" class="rounded-circle w100" alt=""> </div>
                                        <div class="mb-2">
                                            <h5 class="mb-0">David Wallace</h5>
                                            <p>Aalizeethomas@info.com</p>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                        </div>
                                        <span class="font-12 text-muted">Common Contact</span>
                                        <ul class="list-unstyled team-info margin-0 pt-2">
                                            <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                            <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="card-status bg-pink"></div>
                                        <div class="mb-3"> <img src="assets/images/sm/avatar6.jpg" class="rounded-circle w100" alt=""> </div>
                                        <div class="mb-2">
                                            <h5 class="mb-0">Andrew Patrick</h5>
                                            <p>Aalizeethomas@info.com</p>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                        </div>
                                        <span class="font-12 text-muted">Common Contact</span>
                                        <ul class="list-unstyled team-info margin-0 pt-2">
                                            <li><img src="assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                            <li><img src="assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                                            <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="mb-3"> <img src="assets/images/sm/avatar2.jpg" class="rounded-circle w100" alt=""> </div>
                                        <div class="mb-2">
                                            <h5 class="mb-0">Michelle Green</h5>
                                            <p>Aalizeethomas@info.com</p>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                        </div>
                                        <span class="font-12 text-muted">Common Contact</span>
                                        <ul class="list-unstyled team-info margin-0 pt-2">
                                            <li><img src="assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                            <li><img src="assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="mb-3"> <img src="assets/images/sm/avatar4.jpg" class="rounded-circle w100" alt=""> </div>
                                        <div class="mb-2">
                                            <h5 class="mb-0">Mary Schneider</h5>
                                            <p>Aalizeethomas@info.com</p>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt</span>
                                        </div>
                                        <span class="font-12 text-muted">Common Contact</span>
                                        <ul class="list-unstyled team-info margin-0 pt-2">
                                            <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                            <li><img src="assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    -->

                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                    <div class="section-body">
                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                            <div class="card-header">
                                <h4>Ajouter Evenement</h4>
                            </div>
                            <form action="/Ajouter/evenement/{{ $admin->id }}" method="get">
                            <div class="card-body">
                                <div class="form-group row mb-4 ">
                                    <label class=" ml-125" for="start">date debut:</label>

                                    <input class=" ml-125 w-50 ml-20" type="date" id="start" name="debut"
                                           value="2021-07-13"
                                           min="2021-08-12" max="2022-12-31">
                                </div>
                                <div class="form-group row mb-4 ">
                                    <label class=" ml-125" for="end">date fin ev: </label>
                                    <input class="ml-125 w-50 ml-20" type="date" id="end" name="fin"
                                           value="2021-10-01"
                                           min="2021-8-01" max="2023-12-31">
                                </div>
                                </div>
                                <div class="ml-125 form-group row mb-4 ">
                                <label class="ml-125 ml-1 col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea style="
                                                        padding: 10px;
                                                        width: 700px;
                                                        height: 150px;
                                                        line-height: 1.5;
                                                        border-radius: 5px;
                                                        border: 1px solid #ccc;
                                                        box-shadow: 1px 1px 1px #999;
                                    " class="summernote" placeholder=" Description" name="description"></textarea>
                                </div>
                                </div>
                                <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-primary">Publish</button>
                                </div>
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


<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/bundles/apexcharts.bundle.js"></script>
<script src="assets/bundles/counterup.bundle.js"></script>
<script src="assets/bundles/knobjs.bundle.js"></script>
<script src="assets/bundles/c3.bundle.js"></script>

<script src="assets/js/core.js"></script>
<script src="assets/js/page/project-index.js"></script>
</body>

<!-- soccer/project/  07 Jan 2020 03:37:22 GMT -->
</html>
