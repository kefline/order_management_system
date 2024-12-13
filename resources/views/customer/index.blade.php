<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Customers </title>

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

            <div class="body d-flex py-lg-3 py-md-2">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div
                                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Customers Information</h3>
                                <div class="col-auto d-flex w-sm-100">
                                    <button type="button" class="btn btn-primary btn-set-task w-sm-100"
                                        data-bs-toggle="modal" data-bs-target="#expadd"><i
                                            class="icofont-plus-circle me-2 fs-6"></i>Add Customers</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix g-3">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <table id="myProjectTable" class="table table-hover align-middle mb-0"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Customer Name</th>
                                                <th>Register Date</th>
                                                <th>Mail</th>
                                                <th>Phone</th>
                                                <th>Country</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($customers as $customer)
                                                <tr>
                                                    <td><strong>{{ $customer->id }}</strong></td>
                                                    <td>
                                                        <a href="#">
                                                            <img class="avatar rounded"
                                                                src="/assets/images/xs/avatar1.svg" alt="">
                                                            <span class="fw-bold ms-1">{{ $customer->name }}</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        {{ $customer->created_at }}
                                                    </td>
                                                    <td>{{ $customer->email }}</td>
                                                    <td>{{ $customer->phone }}</td>
                                                    <td>{{ $customer->country }}</td>
                                                    <td>
                                                        <!-- Edit Link -->
                                                        <a href="#expedit" class="icofont-edit text-success"
                                                            data-bs-toggle="modal" data-bs-target="#expedit"
                                                            onclick="editCustomer({{ $customer->id }})">Edit</a>

                                                        <!-- Delete Link -->
                                                        <a href="{{ route('customer.delete', $customer->id) }}"
                                                            class="icofont-ui-delete text-danger"
                                                            onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                                    </td>

                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->
                </div>
            </div>

            <!-- Add Customers-->
            <div class="modal fade" id="expadd" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title  fw-bold" id="expaddLabel">Add Customers</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="deadline-form">
                                <form method="POST" action="{{ route('add.customer') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-12">
                                            <label for="name" class="form-label">Customer Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                required>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="profile" class="form-label">Customer Profile</label>
                                            <input type="file" class="form-control" id="profile"
                                                name="profile">
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-6">
                                            <label for="country" class="form-label">Country</label>
                                            <input type="text" class="form-control" id="country" name="country"
                                                required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="register_date" class="form-label">Customer Register
                                                Date</label>
                                            <input type="date" class="form-control" id="register_date"
                                                name="register_date" required>
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-6">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                required>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Done</button>
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </form>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- Edit Customers-->
            <div class="modal fade" id="expedit" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="expeditLabel">Edit Customer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="deadline-form">
                                <!-- Edit Customer Form -->
                                <form method="POST" action="{{ route('customer.update', ['id' => $customer->id]) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-12">
                                            <label for="item1" class="form-label">Customer Name</label>
                                            <input type="text" class="form-control" id="item1" name="name"
                                                value="{{ old('name', $customer->name) }}" required>
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="profile" class="form-label">Customer Profile</label>
                                            <input type="file" class="form-control" id="profile"
                                                name="profile">
                                            @error('profile')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-6">
                                            <label class="form-label">Country</label>
                                            <input type="text" class="form-control" name="country"
                                                value="{{ old('country', $customer->country) }}" required>
                                            @error('country')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="register_date" class="form-label">Customer Register
                                                Date</label>
                                            <input type="date" class="form-control w-100" id="register_date"
                                                name="register_date"
                                                value="{{ old('register_date', $customer->register_date) }}" required>
                                            @error('register_date')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-6">
                                            <label for="mailid" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="mailid" name="email"
                                                value="{{ old('email', $customer->email) }}" required>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="phoneid" class="form-label">Phone</label>
                                            <input type="text" class="form-control" id="phoneid" name="phone"
                                                value="{{ old('phone', $customer->phone) }}" required>
                                            @error('phone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
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
            $('#myProjectTable')
                .addClass('nowrap')
                .dataTable({
                    responsive: true,
                    columnDefs: [{
                        targets: [-1, -3],
                        className: 'dt-body-right'
                    }]
                });
            $('.deleterow').on('click', function() {
                var tablename = $(this).closest('table').DataTable();
                tablename
                    .row($(this)
                        .parents('tr'))
                    .remove()
                    .draw();

            });
        });

        function editCustomer(customerId) {
            $.ajax({
                url: '/customer/' + customerId,
                method: 'GET',
                success: function(data) {
                    $('#name').val(data.customer.name);
                    $('#profile').val(data.customer.profile);
                    $('#country').val(data.customer.country);
                    $('#register_date').val(data.customer.register_date);
                    $('#email').val(data.customer.email);
                    $('#phone').val(data.customer.phone);
                }
            });
        }
    </script>


</body>

</html>
