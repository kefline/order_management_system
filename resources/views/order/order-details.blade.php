<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Order Details </title>
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



                            <div class="dropdown notifications">
                                <a class="nav-link dropdown-toggle pulse" href="#" role="button"
                                    data-bs-toggle="dropdown">
                                    <i class="icofont-alarm fs-5"></i>
                                    <span class="pulse-ring"></span>
                                </a>
                                <div id="NotificationsDiv"
                                    class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-md-end p-0 m-0 mt-3">
                                    <div class="card border-0 w380">
                                        <div class="card-header border-0 p-3">
                                            <h5 class="mb-0 font-weight-light d-flex justify-content-between">
                                                <span>Notifications</span>
                                                <span class="badge text-white">06</span>
                                            </h5>
                                        </div>
                                        <div class="tab-content card-body">
                                            <div class="tab-pane fade show active">
                                                <ul class="list-unstyled list mb-0">
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle"
                                                                src="assets/images/xs/avatar1.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span
                                                                        class="font-weight-bold">Chloe Walkerr</span>
                                                                    <small>2MIN</small>
                                                                </p>
                                                                <span class="">Added New Product 2021-07-15 <span
                                                                        class="badge bg-success">Add</span></span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <div class="avatar rounded-circle no-thumbnail">AH</div>
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span
                                                                        class="font-weight-bold">Alan Hill</span>
                                                                    <small>13MIN</small>
                                                                </p>
                                                                <span class="">Invoice generator </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle"
                                                                src="assets/images/xs/avatar3.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span
                                                                        class="font-weight-bold">Melanie Oliver</span>
                                                                    <small>1HR</small>
                                                                </p>
                                                                <span class="">Orader Return RT-00004</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle"
                                                                src="assets/images/xs/avatar5.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span
                                                                        class="font-weight-bold">Boris Hart</span>
                                                                    <small>13MIN</small>
                                                                </p>
                                                                <span class="">Product Order to Toyseller</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle"
                                                                src="assets/images/xs/avatar6.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span
                                                                        class="font-weight-bold">Alan Lambert</span>
                                                                    <small>1HR</small>
                                                                </p>
                                                                <span class="">Leave Apply</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle"
                                                                src="assets/images/xs/avatar7.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span
                                                                        class="font-weight-bold">Zoe Wright</span>
                                                                    <small class="">1DAY</small>
                                                                </p>
                                                                <span class="">Product Stoke Entry Updated</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a class="card-footer text-center border-top-0" href="#"> View all
                                            notifications</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                                <div class="u-info me-2">
                                    <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">John
                                            Quinn</span></p>
                                    <small>Admin Profile</small>
                                </div>
                                <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-display="static">
                                    <img class="avatar lg rounded-circle img-thumbnail"
                                        src="/assets/images/profile_av.svg" alt="profile">
                                </a>
                                <div
                                    class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                    <div class="card border-0 w280">
                                        <div class="card-body pb-0">
                                            <div class="d-flex py-1">
                                                <img class="avatar rounded-circle" src="/assets/images/profile_av.svg"
                                                    alt="profile">
                                                <div class="flex-fill ms-3">
                                                    <p class="mb-0"><span class="font-weight-bold">John Quinn</span>
                                                    </p>
                                                    <small class="">Johnquinn@gmail.com</small>
                                                </div>
                                            </div>

                                            <div>
                                                <hr class="dropdown-divider border-dark">
                                            </div>
                                        </div>
                                        <div class="list-group m-2 ">
                                            <a href="admin-profile.html"
                                                class="list-group-item list-group-item-action border-0 "><i
                                                    class="icofont-ui-user fs-5 me-3"></i>Profile Page</a>
                                            <a href="order-invoices.html"
                                                class="list-group-item list-group-item-action border-0 "><i
                                                    class="icofont-file-text fs-5 me-3"></i>Order Invoices</a>
                                            <a href="ui-elements/auth-signin.html"
                                                class="list-group-item list-group-item-action border-0 "><i
                                                    class="icofont-logout fs-5 me-3"></i>Signout</a>

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
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div
                                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Order Details: #Order-<span
                                        id="selectedOrder">{{ $selectedOrder->id ?? 'N/A' }}</span></h3>
                                <div class="col-auto d-flex btn-set-task w-sm-100 align-items-center">
                                    <select class="form-select" id="orderSelect" aria-label="Select an order"
                                        onchange="updateOrderDetails()">
                                        <option selected disabled>Select Order Id</option>
                                        @foreach ($orders as $order)
                                            <option value="{{ $order->id }}"
                                                {{ $order->id == $selectedOrder->id ? 'selected' : '' }}>
                                                Order-{{ $order->id }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                        <div class="col">
                            <div class="alert-success alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-success text-light"><i
                                            class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Order Created at</div>
                                        <span class="small">{{ $selectedOrder->created_at }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert-danger alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-danger text-light"><i
                                            class="fa fa-user fa-lg" aria-hidden="true"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Name</div>
                                        <span class="small">{{ $selectedOrder->customer->name }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert-warning alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-warning text-light"><i
                                            class="fa fa-envelope fa-lg" aria-hidden="true"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Email</div>
                                        <span class="small">{{ $selectedOrder->customer->email }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert-info alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-info text-light"><i
                                            class="fa fa-phone-square fa-lg" aria-hidden="true"></i></div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Contact No</div>
                                        <span class="small">{{ $selectedOrder->customer->phone }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-xl-12 col-xxl-12">
                            <div class="card">
                                <div
                                    class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold">Order Summary</h6>
                                </div>
                                <div class="card-body">
                                    <div class="product-cart">
                                        <div class="checkout-table table-responsive">
                                            <table id="myCartTable"
                                                class="table display dataTable table-hover align-middle"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Product Name</th>
                                                        <th class="quantity">Quantity</th>
                                                        <th class="price">Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                       
                                                        <td>
                                                            <h6 class="title">{{ $selectedOrder->product_name }}
                                                               
                                                            </h6>
                                                        </td>
                                                        <td>{{ $selectedOrder->quantity }}</td>
                                                        <td>
                                                            <p class="price">
                                                                ${{ number_format($selectedOrder->price, 2) }}</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div
                                            class="checkout-coupon-total checkout-coupon-total-2 d-flex flex-wrap justify-content-end">
                                            <div class="checkout-total">
                                                <div class="single-total">
                                                    <p class="value">Subtotal Price:</p>
                                                    <p class="price">
                                                        ${{ number_format($selectedOrder->quantity * $selectedOrder->price, 2) }}
                                                    </p>
                                                </div>
                                                <!-- Add more totals like shipping, discounts, etc. -->
                                                <div class="single-total total-payable">
                                                    <p class="value">Total Payable:</p>
                                                    <p class="price">
                                                        ${{ number_format($selectedOrder->quantity * $selectedOrder->price + 12 - 10 + 198, 2) }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>

    <script src="/assets/bundles/libscripts.bundle.js"></script>

    <script src="/assets/bundles/dataTables.bundle.js"></script>

    <script>
        $(document).ready(function() {
            $('#myCartTable')
                .addClass('nowrap')
                .dataTable({
                    responsive: true,
                    columnDefs: [{
                        targets: [-1, -3],
                        className: 'dt-body-right'
                    }]
                });
        });
    </script>

    <script>
        function updateOrderDetails() {
            var orderId = document.getElementById('orderSelect').value;
            var selectedOrderSpan = document.getElementById('selectedOrder');

            // Update the order ID in the header
            selectedOrderSpan.textContent = 'Order-' + orderId;

            // Redirect to the same page with the selected order ID
            window.location.href = '/order-details/' + orderId;
        }
    </script>

</body>


</html>
