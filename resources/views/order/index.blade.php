<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TanAir Orders  </title>

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
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Orders list</h3>
                                <div class="col-auto d-flex w-sm-100">
                                    <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#expadd"><i class="icofont-plus-circle me-2 fs-6"></i>Add Orders</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row g-3 mb-3"> 
                        <div class="col-md-12">
                            <div class="card"> 
                                <div class="card-body"> 
                                    <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">  
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Customer Name</th>
                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                                 <th>Prices<small>/Quantity </small></th>
                                                <th>Status</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($orders as $order)
                                          <tr>
                                            <td><a href="{{route('order.order-details',$order->id)}}"><strong>{{$order->id}}</strong></a></td>
                                            <td><img src="/assets/images/product/product-1.jpg" class="avatar lg rounded me-2" alt="profile-image"><span>{{ $order->customer->name }}</span></td>
                                            <td>{{$order->product_name}}</td>
                                            <td>{{$order->quantity}}</td>
                                            <td>
                                              {{$order->price}}
                                            </td>
                                            <td><span class="badge bg-warning">{{$order->status}}</span></td>
                                            <td>
                                                <a href="#expedit" class="icofont-edit text-success"
                                                data-bs-toggle="modal" data-bs-target="#expedit"
                                                onclick="editOrder({{ $order->id }})">Edit</a>
                                                <a href="{{ route('order.delete', $order->id) }}"
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
                    </div>
                </div>
            </div>
            <div class="modal fade" id="expadd" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="expaddLabel">Add Order</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="deadline-form">
                                @if($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                    <ul>
                                        <li>{{$error}}</li>
                                    </ul>
                                        
                                    @endforeach
                                </div>
                                @endif
                                <form method="POST" action="{{ route('order.store') }}">
                                    @csrf
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-12">
                                            <label for="customer_id" class="form-label">Select Customer</label>
                                            <select class="form-select" id="customer_id" name="customer_id" required>
                                                <option value="" disabled selected>Select Customer</option>
                                                @foreach($customers as $customer)
                                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="product_name" class="form-label">Product Name</label>
                                            <input type="text" class="form-control" id="product_name" name="product_name" required>
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-6">
                                            <label for="quantity" class="form-label">Quantity</label>
                                            <input type="number" class="form-control" id="quantity" name="quantity" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="price" class="form-label">Price</label>
                                            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-12">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select" id="status" name="status" required>
                                                <option value="pending">Pending</option>
                                                <option value="completed">Completed</option>
                                                <option value="shipped">Shipped</option>
                                                <option value="canceled">Canceled</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-12">
                                            <label class="form-label">Additional Notes</label>
                                            <textarea class="form-control" name="notes" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Add Order</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="expedit" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="expeditLabel">Edit Order</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="deadline-form">
                                <form method="POST" action="{{ route('order.update', ['id' => $order->id]) }}">
                                    @csrf
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-12">
                                            <label for="customer_id" class="form-label">Select Customer</label>
                                            <select class="form-select" id="customer_id" name="customer_id" required>
                                                <option value="" disabled>Select Customer</option>
                                                @foreach($customers as $customer)
                                                    <option value="{{ $customer->id }}" {{ $order->customer_id == $customer->id ? 'selected' : '' }}>{{ $customer->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('customer_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="product_name" class="form-label">Product Name</label>
                                            <input type="text" class="form-control" id="product_name" name="product_name" value="{{ old('product_name', $order->product_name) }}" required>
                                            @error('product_name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-6">
                                            <label for="quantity" class="form-label">Quantity</label>
                                            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity', $order->quantity) }}" required>
                                            @error('quantity')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="price" class="form-label">Price</label>
                                            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $order->price) }}" required>
                                            @error('price')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-12">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select" id="status" name="status" required>
                                                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                                <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                                                <option value="canceled" {{ $order->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
                                            </select>
                                            @error('status')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-sm-12">
                                            <label class="form-label">Additional Notes</label>
                                            <textarea class="form-control" name="notes" rows="3">{{ old('notes', $order->notes) }}</textarea>
                                            @error('notes')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
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
        $('#myDataTable')
        .addClass( 'nowrap')
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });

       
        
    </script>

    
</body>

</html> 