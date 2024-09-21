@extends('dashone.inc.master')


@section('title','Dashboard one || Dashboard Table')

@section('content')
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Responsive Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Responsive tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Lost And Found</h4>
                    <p class="card-description"> Data showing lost and found documents
                    </p>
                      <table id="example" class="table table-striped" style="width:100%">
                          <thead>
                              <tr>
                                <th>ID</th>
                                <th>Names</th>
                                <th>Document Type</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>ID Number</th>
                                <th>County</th>
                                <th>Location</th>
                                <th>Document Image</th>
                                <th>Action</th>
                              </tr>
                          </thead>

                          <tbody>
                                @foreach($lostDocuments as $document)
                                    <tr>
                                        <td>{{ $document->id }}</td>
                                        <td>{{ $document->first_name }} {{ $document->last_name }}</td>
                                        <td>{{ $document->doc_type }}</td>
                                        <td>{{ $document->gender }}</td>
                                        <td>{{ $document->status }}</td>
                                        <td>{{ $document->doc_no }}</td>
                                        <td>{{ $document->doc_county }}</td>
                                        <td>{{ $document->doc_location }}</td>
                                        <td>
                                            @if($document->doc_link)
                                                <img src="{{ asset('storage/' . $document->doc_link) }}" alt="Document Image" width="100">
                                            @else
                                                No image
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('lostdocument.show', $document->id) }}" class="btn btn-info" target="_blank">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                          

                          <tfoot>
                              <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>ID Number</th>
                                <th>County</th>
                                <th>Location</th>
                                <th>Document Image</th>
                                <th>Action</th>
                              </tr>
                          </tfoot>
                      </table>
                  </div>
                </div>
              </div>
             
              
              
             
             
            </div>
          </div>
@endsection