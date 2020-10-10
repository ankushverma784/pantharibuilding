@extends('layouts.admin')
@section('content')

    <section id="home-page" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pb-4">
                    <div class="section-heading mb-4">
                        <h2>Dashboard <small>CONTROL PANEL</small></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <a href="moversresult.php">
                            <div class="dashboard-details">
                                <div class="dashboard-content">
                                <div class="d-flex">
                                    <div class="dashboard-img">
                                       <img src="../assets/admin/images/delivery-truck.svg"/>   
                                    </div>
                                    <div class="dashboard-txt ml-3">
                                        <h3>Total Vehicle</h3>
                                        <p>4</p>
                                    </div>
                                </div> 
                            </div>
                            </a>
                            <div class="bg-dashboard">
                                    <a href="moversresult.php">View All</a>
                                </div>  
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <a href="customersresult.php">
                            <div class="dashboard-details">
                                <div class="dashboard-content">
                                <div class="d-flex">
                                    <div class="dashboard-img">
                                       <img src="../assets/admin/images/challan.svg"/>   
                                    </div>
                                    <div class="dashboard-txt ml-3">
                                        <h3>Total challan</h3>
                                        <p>10</p>
                                    </div>
                                </div> 
                            </div>
                            </a>
                            <div class="bg-dashboard">
                                    <a href="customersresult.php">View All</a>
                                </div>  
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-12 py-4">
                    <div class="section-heading mb-4">
                        <h2>Leads <small>View All Leads</small></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="newenquiry.php">
                            <div class="dashboard-details">
                                <div class="dashboard-content">
                                <div class="d-flex">
                                    <div class="dashboard-img">
                                       <img src="../assets/admin/images/s3.svg"/>   
                                    </div>
                                    <div class="dashboard-txt ml-3">
                                        <h3>Insurance</h3>
                                        <p>20</p>
                                    </div>
                                </div> 
                            </div>
                            </a>
                            <div class="bg-dashboard">
                                    <a href="newenquiry.php">View All</a>
                                </div>  
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <a href="live-leads.php">
                            <div class="dashboard-details">
                                <div class="dashboard-content">
                                <div class="d-flex">
                                    <div class="dashboard-img">
                                       <img src="../assets/admin/images/s2.svg"/>   
                                    </div>
                                    <div class="dashboard-txt ml-3">
                                        <h3>Permit</h3>
                                        <p>20</p>
                                    </div>
                                </div> 
                            </div>
                            </a>
                            <div class="bg-dashboard">
                                    <a href="live-leads.php">View All</a>
                                </div>  
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <a href="expiredleads.php">
                            <div class="dashboard-details">
                                <div class="dashboard-content">
                                <div class="d-flex">
                                    <div class="dashboard-img">
                                       <img src="../assets/admin/images/pollution.svg"/>   
                                    </div>
                                    <div class="dashboard-txt ml-3">
                                        <h3>Pollution</h3>
                                        <p>20</p>
                                    </div>
                                </div> 
                            </div>
                            </a>
                            <div class="bg-dashboard">
                                    <a href="expiredleads.php">View All</a>
                                </div>  
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <a href="rejectedleads.php">
                            <div class="dashboard-details">
                                <div class="dashboard-content">
                                    <div class="d-flex">
                                        <div class="dashboard-img">
                                        <img src="../assets/admin/images/approval-service.svg"/>   
                                        </div>
                                        <div class="dashboard-txt ml-3">
                                            <h3>Fitness</h3>
                                            <p>4</p>
                                        </div>
                                    </div> 
                            </div>
                            </a>
                            <div class="bg-dashboard">
                                    <a href="rejectedleads.php">View All</a>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>




          
                <div class="col-lg-12 py-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dashboard-details">
                                <div class="section-heading top">
                                    <h1>New Enquiries</h1>
                                </div>
                                <div class="section-content2">
                                    <div class="section-content-body text-center">
                                        <table id="userdatatables" class="table table-bordered dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="serial-number">S.NO</th>
                                                    <th>Client Name</th>
                                                    <th class="addresswidth">From To</th>
                                                    <th class="addresswidth">To Address</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>01</td>                   
                                                    <td>Example</td>
                                                    <td>Lorem ipsum ipsum ipsum</td>
                                                    <td>Lorem ipsum ipsum ipsum</td> 
                                                 
                                                </tr>
                                                <tr>
                                                    <td>02</td>                   
                                                    <td>Example</td>
                                                    <td>Lorem ipsum ipsum ipsum</td>
                                                    <td>Lorem ipsum ipsum ipsum</td> 
                                                    
                                                </tr>
                                           </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-lg-6">
                            <div class="section-heading top">
                                <h1>Live Leads</h1>
                            </div>
                            <div class="section-content2">
                                <div class="section-content-body text-center">
                                    <table id="userdatatables" class="table table-bordered dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th class="serial-number">S.NO</th>
                                                <th>Client Name</th>
                                                <th class="addresswidth">From To</th>
                                                <th class="addresswidth">To Address</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>                   
                                                <td>Example</td>
                                                <td>Lorem ipsum ipsum ipsum</td>
                                                <td>Lorem ipsum ipsum ipsum</td> 
                                                
                                            </tr>
                                            <tr>
                                                <td>02</td>                   
                                                <td>Example</td>
                                                <td>Lorem ipsum ipsum ipsum</td>
                                                <td>Lorem ipsum ipsum ipsum</td> 
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="col-lg-12 py-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-heading top">
                                <h1>Rejected Leads <small> </small></h1>
                            </div>
                            <div class="section-content2">
                                <div class="section-content-body text-center">
                                    <table id="userdatatables" class="table table-bordered dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th class="serial-number">S.NO</th>
                                                <th>Client Name</th>
                                                <th class="addresswidth">From To</th>
                                                <th class="addresswidth">To Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>                   
                                                <td>Example</td>
                                                <td>Lorem ipsum ipsum ipsum</td>
                                                <td>Lorem ipsum ipsum ipsum</td> 
                                            </tr>
                                            <tr>
                                                <td>02</td>                   
                                                <td>Example</td>
                                                <td>Lorem ipsum ipsum ipsum</td>
                                                <td>Lorem ipsum ipsum ipsum</td> 
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-lg-6">
                            <div class="section-heading top">
                                <h1>Expired Leads</h1>
                            </div>
                           <div class="section-content2">
                                <div class="section-content-body text-center">
                                    <table id="userdatatables" class="table table-bordered dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th class="serial-number">S.NO</th>
                                                <th>Client Name</th>
                                                <th class="addresswidth">From To</th>
                                                <th class="addresswidth">To Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>                   
                                                <td>Example</td>
                                                <td>Lorem ipsum ipsum ipsum</td>
                                                <td>Lorem ipsum ipsum ipsum</td> 
                                                <
                                            </tr>
                                            <tr>
                                                <td>02</td>                   
                                                <td>Example</td>
                                                <td>Lorem ipsum ipsum ipsum</td>
                                                <td>Lorem ipsum ipsum ipsum</td> 
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

             

                <div class="col-lg-12 py-4">
          
                    <div class="section-heading top">
                        <h1>Approval Services <small></small></h1>
                    </div>
                  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-content2">
                                <div class="section-content-body text-center">
                                    <table id="userdatatables" class="table table-bordered dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>Client Name</th>
                                                <th>Product Name</th>
                                                <th>Address</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>    
                                                <td>Example</td>               
                                                <td>Lorem ipsum</td>
                                                <td>Lorem ipsum ipsum</td> 
                                                <td><span class="text-success">Paid</span></td>
                                                <td>Enabled</td>
                                            </tr>
                                       
                                            <tr>
                                                <td>06</td>    
                                                <td>Example</td>                 
                                                <td>Lorem ipsum</td>
                                                <td>Lorem ipsum ipsum</td> 
                                                <td><span class="color3">UnPaid</span></td>
                                                <td>Enabled</td>
                                            </tr>
                                            <tr>
                                                <td>07</td>    
                                                <td>Example</td>                 
                                                <td>Lorem ipsum</td>
                                                <td>Lorem ipsum ipsum</td> 
                                                <td><span class="text-success">Paid</span></td>
                                                <td>Enabled</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                
           
        </div>
    </section>


@endsection
