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
                            
                            
                            
                            <div class="dropdown notifications">
                                <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                    <i class="icofont-alarm fs-5"></i>
                                    <span class="pulse-ring"></span>
                                </a>
                                <div id="NotificationsDiv" class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-md-end p-0 m-0 mt-3">
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
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar1.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Chloe Walkerr</span> <small>2MIN</small></p>
                                                                <span class="">Added New Product 2021-07-15 <span class="badge bg-success">Add</span></span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <div class="avatar rounded-circle no-thumbnail">AH</div>
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Alan	Hill</span> <small>13MIN</small></p>
                                                                <span class="">Invoice generator </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar3.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Melanie	Oliver</span> <small>1HR</small></p>
                                                                <span class="">Orader  Return RT-00004</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar5.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Boris Hart</span> <small>13MIN</small></p>
                                                                <span class="">Product Order to Toyseller</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar6.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Alan	Lambert</span> <small>1HR</small></p>
                                                                <span class="">Leave Apply</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar7.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Zoe Wright</span> <small class="">1DAY</small></p>
                                                                <span class="">Product Stoke Entry Updated</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a class="card-footer text-center border-top-0" href="#"> View all notifications</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                                <div class="u-info me-2">
                                    <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">John Quinn</span></p>
                                    <small>Admin Profile</small>
                                </div>
                                <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                    <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/profile_av.svg" alt="profile">
                                </a>
                                <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                    <div class="card border-0 w280">
                                        <div class="card-body pb-0">
                                            <div class="d-flex py-1">
                                                <img class="avatar rounded-circle" src="assets/images/profile_av.svg" alt="profile">
                                                <div class="flex-fill ms-3">
                                                    <p class="mb-0"><span class="font-weight-bold">John	Quinn</span></p>
                                                    <small class="">Johnquinn@gmail.com</small>
                                                </div>
                                            </div>
                                            
                                            <div><hr class="dropdown-divider border-dark"></div>
                                        </div>
                                        <div class="list-group m-2 ">
                                            <a href="admin-profile.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user fs-5 me-3"></i>Profile Page</a>
                                            <a href="order-invoices.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-file-text fs-5 me-3"></i>Order Invoices</a>
                                            <a href="ui-elements/auth-signin.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-5 me-3"></i>Signout</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                        </div>

                        <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                            <span class="fa fa-bars"></span>
                        </button>

                        <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                            <div class="input-group flex-nowrap input-group-lg">
                                <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                                <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                                
                            </div>
                        </div>

                    </div>
                </nav>
            </div>

            <div class="body d-flex py-lg-3 py-md-2">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Customers Information</h3>
                                <div class="col-auto d-flex w-sm-100">
                                    <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#expadd"><i class="icofont-plus-circle me-2 fs-6"></i>Add Customers</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row clearfix g-3">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Customers</th> 
                                                <th>Register  Date</th>
                                                <th>Mail</th>
                                                <th>Phone</th> 
                                                <th>Country</th> 
                                                <th>Total Order</th>
                                                <th>Actions</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>#CS-00002</strong></td>
                                                <td>
                                                        <a href="customer-detail.html">
                                                            <img class="avatar rounded" src="assets/images/xs/avatar1.svg" alt="">
                                                            <span class="fw-bold ms-1">Joan Dyer</span>
                                                        </a>
                                                </td>
                                                <td>
                                                        12/03/2021
                                                </td>
                                                <td>JoanDyer@gmail.com</td>
                                                <td>202-555-0983</td>
                                                <td>South Africa</td>
                                                <td>18</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#CS-00006</strong></td>
                                                <td>
                                                    <a href="customer-detail.html">
                                                        <img class="avatar rounded" src="assets/images/xs/avatar2.svg" alt="">
                                                        <span class="fw-bold ms-1">Ryan	Randall</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    12/03/2021
                                                </td>
                                                <td>RyanRandall@gmail.com</td>
                                                <td>303-555-0151</td>
                                                <td>Australia</td>
                                                <td>4568</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#CS-00004</strong></td>
                                                <td>
                                                    <a href="customer-detail.html">
                                                        <img class="avatar rounded" src="assets/images/xs/avatar3.svg" alt="">
                                                        <span class="fw-bold ms-1">Phil	Glover</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    16/03/2021
                                                </td>
                                                <td>PhilGlover@gmail.com</td>
                                                <td>843-555-0175</td>
                                                <td>Sri Lanka</td>
                                                <td>05</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#CS-00008</strong></td>
                                                <td>
                                                    <a href="customer-detail.html">
                                                        <img class="avatar rounded" src="assets/images/xs/avatar4.svg" alt="">
                                                        <span class="fw-bold ms-1">Victor Rampling</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    25/02/2021
                                                </td>
                                                <td>VictorRampling@gmail.com</td>
                                                <td>404-555-0100</td>
                                                <td>Israel</td>
                                                <td>14</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#CS-00018</strong></td>
                                                <td>
                                                    <a href="customer-detail.html">
                                                        <img class="avatar rounded" src="assets/images/xs/avatar5.svg" alt="">
                                                        <span class="fw-bold ms-1">Sally Graham</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    16/02/2021
                                                </td>
                                                <td>SallyGraham@gmail.com</td>
                                                <td>502-555-0118</td>
                                                <td>Indonesia</td>
                                                <td>03</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#CS-00014</strong></td>
                                                <td>
                                                    <a href="customer-detail.html">
                                                        <img class="avatar rounded" src="assets/images/xs/avatar6.svg" alt="">
                                                        <span class="fw-bold ms-1">Robert Anderson</span>
                                                    </a>
                                                </td>
                                                <td>
                                                18/01/2021
                                                </td>
                                                <td>RobertAnderson@gmail.com</td>
                                                <td>502-555-0133</td>
                                                <td>Malaysia</td>
                                                <td>02</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->
                </div>
            </div>
          
            <!-- Add Customers-->
            <div class="modal fade" id="expadd" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  fw-bold" id="expaddLabel">Add Customers</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="deadline-form">
                            <form>
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-12">
                                        <label for="item" class="form-label">Customers Name</label>
                                        <input type="text" class="form-control" id="item">
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="taxtno" class="form-label">Customers Profile</label>
                                        <input type="File" class="form-control" id="taxtno">
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                <div class="col-sm-6">
                                    <label for="depone" class="form-label">Country</label>
                                    <input type="text" class="form-control" id="depone">
                                </div>
                                <div class="col-sm-6">
                                    <label for="abc" class="form-label">Customers Register date</label>
                                    <input type="date" class="form-control w-100" id="abc">
                                </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-6">
                                    <label for="abc11" class="form-label">Mail</label>
                                    <input type="text" class="form-control" id="abc11">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="abc111" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="abc111">
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-12">
                                        <label class="form-label">Total Order</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
                </div>
            </div>

            <!-- Edit Customers-->
            <div class="modal fade" id="expedit" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  fw-bold" id="expeditLabel"> Edit Customers</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                        <div class="deadline-form">
                            <form>
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-12">
                                        <label for="item1" class="form-label">Customers Name</label>
                                        <input type="text" class="form-control" id="item1" value="Cloth"> 
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="taxtno1" class="form-label">Customers Profile</label>
                                        <input type="file" class="form-control" id="taxtno1">
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                <div class="col-sm-6">
                                    <label class="form-label">Country</label>
                                    <input type="text" class="form-control" value="South Africa">
                                </div>
                                <div class="col-sm-6">
                                    <label for="abc1" class="form-label">Customers Register date</label>
                                    <input type="date" class="form-control w-100" id="abc1" value="2021-03-12">
                                </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-6">
                                    <label for="mailid" class="form-label">Mail</label>
                                    <input type="text" class="form-control" id="mailid" value="PhilGlover@gmail.com">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="phoneid" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phoneid" value="843-555-0175">
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-6">
                                        <label class="form-label">Total Order</label>
                                        <input type="text" class="form-control" value="18">
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                        <button type="submit" class="btn btn-primary">Save</button>
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
            .addClass( 'nowrap' )
            .dataTable( {
                responsive: true,
                columnDefs: [
                    { targets: [-1, -3], className: 'dt-body-right' }
                ]
            });
            $('.deleterow').on('click',function(){
            var tablename = $(this).closest('table').DataTable();  
            tablename
                    .row( $(this)
                    .parents('tr') )
                    .remove()
                    .draw();

            } );
        });
    </script>
</body>

</html>