<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard </title>

    <link rel="stylesheet" href="/assets/plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="/assets/plugin/datatables/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="/assets/css/ebazar.style.min.css">
</head>

<body>
    <div id="ebazar-layout" class="theme-blue">

        <div class="sidebar px-4 py-4 py-md-4 me-0">
            <div class="d-flex flex-column h-100">

                <ul class="menu-list flex-grow-1 mt-3">
                    <li><a class="m-link active" href="{{ route('admin.index') }}"><i class="icofont-home fs-5"></i>
                            <span>Dashboard</span></a></li>
                    <li><a class="m-link active" href="{{ route('order.index') }}"><i class="icofont-notepad fs-5"></i>
                            <span>Orders</span></a></li>
                    <li><a class="m-link active" href="{{ route('customer.index') }}"><i
                                class="icofont-funky-man fs-5"></i>
                            <span>Customers</span></a></li>
                </ul>
                <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                    <span class="ms-2"><i class="icofont-bubble-right"></i></span>
                </button>
            </div>
        </div>

        <div class="main px-lg-4 px-md-4">

            <div class="header">
                <nav class="navbar py-4">
                    <div class="container-xxl">

                        <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">



                            <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                                <div class="u-info me-2">
                                    <p class="mb-0 text-end line-height-sm">
                                        <span class="font-weight-bold">{{ Auth::user()->name }}</span>
                                    </p>
                                    <small>{{ Auth::user()->role ?? 'User Profile' }}</small>
                                </div>
                                <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-display="static">
                                    <img class="avatar lg rounded-circle img-thumbnail"
                                        src="{{ Auth::user()->profile_image ?? '/assets/images/profile_av.svg' }}"
                                        alt="profile">
                                </a>
                                <div
                                    class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                    <div class="card border-0 w280">
                                        <div class="card-body pb-0">
                                            <div class="d-flex py-1">
                                                <img class="avatar rounded-circle"
                                                    src="{{ Auth::user()->profile_image ?? '/assets/images/profile_av.svg' }}"
                                                    alt="profile">
                                                <div class="flex-fill ms-3">
                                                    <p class="mb-0"><span
                                                            class="font-weight-bold">{{ Auth::user()->name }}</span></p>
                                                    <small class="">{{ Auth::user()->email }}</small>
                                                </div>
                                            </div>

                                            <div>
                                                <hr class="dropdown-divider border-dark">
                                            </div>
                                        </div>
                                        <div class="list-group m-2">
                                            <form action="{{ route('logout') }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                <button type="submit"
                                                    class="list-group-item list-group-item-action border-0">
                                                    <i class="icofont-logout fs-5 me-3"></i>Signout
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button"
                            data-bs-toggle="collapse" data-bs-target="#mainHeader">
                            <span class="fa fa-bars"></span>
                        </button>

                        <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                            <div class="input-group flex-nowrap input-group-lg">
                                <input type="search" class="form-control" placeholder="Search" aria-label="search"
                                    aria-describedby="addon-wrapping">
                                <button type="button" class="input-group-text" id="addon-wrapping"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>

            <div class="body d-flex py-3">
                <div class="container-xxl">

                    <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                        <div class="col">
                            <div class="alert-success alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-success text-light"><i
                                            class="fa fa-dollar fa-lg"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Customers</div>
                                        <span class="small">{{ $totalCustomers }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert-danger alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-danger text-light"><i
                                            class="fa fa-credit-card fa-lg"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0"> Total Orders</div>
                                        <span class="small">{{ $totalOrders }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert-warning alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-warning text-light"><i
                                            class="fa fa-smile-o fa-lg"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Completed Orders</div>
                                        <span class="small">{{ $completedOrders }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert-info alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-info text-light"><i
                                            class="fa fa-shopping-bag" aria-hidden="true"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Shipped Orders</div>
                                        <span class="small">{{ $shippedOrders }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>

        </div>

        <script src="/assets/bundles/libscripts.bundle.js"></script>

        <script src="/assets/bundles/apexcharts.bundle.js"></script>
        <script src="/assets/bundles/dataTables.bundle.js"></script>


        </script>
        <script>
            $('#myDataTable')
                .addClass('nowrap')
                .dataTable({
                    responsive: true,
                    columnDefs: [{
                        targets: [-1, -3],
                        className: 'dt-body-right'
                    }]
                });
        </script>
</body>

</html>
