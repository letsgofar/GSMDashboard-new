@extends('layout/masterdashboard')

@section('container')

<div class="main-panel">        
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">List Kupon Perubahan</h4>
                  
                  <div class="dropdown">
                      <span>show &nbsp;</span>
                    <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      10
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                      <a class="dropdown-item" href="#">25</a>
                      <a class="dropdown-item" href="#">50</a>
                      <a class="dropdown-item" href="#">100</a>
                    </div>
                        <span>&nbsp;entries</span>
                  </div>
                  
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Kode Kupon
                          </th>
                          <th>
                            Nama Kupon
                          </th>
                          <th>
                            Kuota Kupon
                          </th>
                          <th>
                            Kuota Digunakan
                          </th>
                          <th>
                            Expired
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            ...
                          </td>
                          <td>
                            ...
                          </td>
                          <td>
                            ...
                          </td>
                          <td>
                            ...
                          </td>
                          <td>
                            ...
                          </td>
                          <td>
                            <button type="button" class="btn btn-info btn-sm"></button>
                            <button type="button" class="btn btn-warning btn-sm"></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="template-demo float-right mt-3">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Previous</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Next</button>
                    </div>
                </div>
              </div>
            </div>
          </div>
    </div>

@endsection