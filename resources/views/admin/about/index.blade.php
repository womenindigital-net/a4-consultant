@extends("layouts.admin.master")
@section('page-title','ABOUT')
@push('page-css')
    
@endpush

@section('page-content')
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12">
          <div class="page-title-box">
            <div class="d-flex justify-content-between align-items-center text-muted">
              <h4 class="page-title float-left">
              <i class="ion-ios7-people"></i> Fromer Chairman</h4>
              <ol class="breadcrumb float-right">
                <li class="breadcrumb-item">
                  <a href="#" class="btn btn-dark">
                    <i class="fa fa-plus-circle"></i>
                    <span> Create Fromer Chairman</span>
                  </a>
                </li>
              </ol>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <!-- end row -->
      <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
              <table id="responsive-datatable" class="table dt-responsive nowrap table-striped" cellspacing="0" width="100%">
                  <thead>
                  <tr>
                      <th>#SL</th>
                      <th>Img</th>
                      <th>Name</th>
                      <th>Designation</th>
                      <th>Company</th>
                      <th>Time Period</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td class="d-flex">
                        <div class="avater">
                        </div>
                      </td>
                      <td>Hello</td>
                      <td>Hello</td>
                      <td>Hello</td>
                      <td>Hello</td>
                      <td>
                        <span class="badge"></span>
                      </td>
                      <td class="btn-group action-button">
                        <a href="#" class="btn btn-dark btn-sm">
                          <i class="fa fa-edit"></i>
                        </a>
                        <button type="button" onclick="deleteData"  class="btn btn-danger rounded-right btn-sm">
                          <i class="fa fa-trash-o"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
              </table>
            </div>
        </div>
    </div>
    <!-- end row -->
    </div> <!-- container -->
  </div>
  <!-- content -->
@endsection

@push('page-js')
    
@endpush