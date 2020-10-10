@extends('layouts.admin')
@section('content')

<div class="mmt ">
  <div class="container-fluid">
     <!-- DATA TABLE -->
     <div class="card shadow mb-4 datatable-card" id="card">
        <div class="card-header py-3">
           <h3 class="mb-4 font-weight-bold ml-sm-1">Manage Customers</h3>
           <h4 class="badge-danger text-center" id="delete_msg"></h4>
           <form class="form-inline customer-form" name="form" action="/admin/manage-customer.php" method="POST">
              <label for="email">Customer Phone:</label>
              <div class="input-group ml-lg-2 ml-md-2 ml-sm-1 my-2 number-input">
                 <span class="input-group-addon"><i class="fa fa-user"></i></span>
                 <input id="put-mobile-no" type="number" class="form-control" name="phone" placeholder="कृपया मोबाइल नंबर भरें" onkeyup="getNumber(this.value)" autocomplete="off" required="true">
                 <ul class="get-number" id="get-number">
                 </ul>
              </div>
              <button type="submit" id="submit" name="submit" class="btn btn-primary ml-lg-3 ml-md-3 ml-sm-1 search-button">Search</button>
           </form>
        </div>
        <div class="card-body" id="card-body">
           <div class="table-responsive">
              <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                 <div class="row">
                    <div class="col-sm-12 col-md-6">
                       <div class="dataTables_length" id="dataTable_length">
                          <label>
                             Show 
                             <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                             </select>
                             entries
                          </label>
                       </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                       <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-sm-12">
                       <table class="table table-bordered text-center dataTable no-footer" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                          <thead>
                             <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 119px;" aria-sort="ascending" aria-label="Phone No: activate to sort column descending">Phone No</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 198px;" aria-label="Customer Name: activate to sort column ascending">Customer Name</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 110px;" aria-label="City: activate to sort column ascending">City</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 126px;" aria-label="State: activate to sort column ascending">State</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 150px;" aria-label="Address: activate to sort column ascending">Address</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 57px;" aria-label="Edit: activate to sort column ascending">Edit</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 86px;" aria-label="Delete: activate to sort column ascending">Delete</th>
                             </tr>
                          </thead>
                          <tbody id="table-body">
                             <!-- SEARCH CUSTOMER TABLE-->
                             <!-- ALL CUSTOMERS TABLE-->
                             <tr role="row" class="odd">
                                <td class="sorting_1">7055572245</td>
                                <td>Ankit Singh</td>
                                <td>dehradun 1</td>
                                <td>Uttarakhand</td>
                                <td>Dehradun</td>
                                <td><a href="edit-customer.php?data=3"><i class="fa fa-edit font-aw"></i></a></td>
                                <td><a href="delete.php?agree_id=3"><i class="fas fa-trash-alt"></i></a></td>
                             </tr>
                             <tr role="row" class="even">
                                <td class="sorting_1">7055572245</td>
                                <td>test</td>
                                <td>34534</td>
                                <td></td>
                                <td>test@test.com</td>
                                <td><a href="edit-customer.php?data=6"><i class="fa fa-edit font-aw"></i></a></td>
                                <td><a href="delete.php?agree_id=6"><i class="fas fa-trash-alt"></i></a></td>
                             </tr>
                             <tr role="row" class="odd">
                                <td class="sorting_1">7455890450</td>
                                <td>BISHAN </td>
                                <td>RISHIKESH </td>
                                <td>Uttarakhand</td>
                                <td>BHRAT </td>
                                <td><a href="edit-customer.php?data=5"><i class="fa fa-edit font-aw"></i></a></td>
                                <td><a href="delete.php?agree_id=5"><i class="fas fa-trash-alt"></i></a></td>
                             </tr>
                          </tbody>
                       </table>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-sm-12 col-md-5">
                       <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                       <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                          <ul class="pagination">
                             <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                             <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                             <li class="paginate_button page-item next disabled" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                          </ul>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- END DATA TABLE -->
  </div>
</div>

@endsection
