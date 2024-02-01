@extends('admin.layouts.main')
@section('content')
  
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Manage About Features</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Manage About Features </li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Manage About Features</h5>
            <a class="btn btn-primary btn-sm " href="{{route('about-feature.create')}}" role="button">Add </a>
           
       
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <div style="z-index: 1 !important;">
                @include('notify::components.notify')
              </div>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Icon</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($aboutFeatures as $aboutFeature)
                  
             
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td><img src="{{asset('uploads/'.$aboutFeature->icon)}}" alt="" width="100" height="100"></td>
                  <td>{{$aboutFeature->title}}</td>
                  <td>{{$aboutFeature->description}}</td>
                  <td>
                    <a class="btn btn-outline-primary btn-sm text-dark" href="{{route('about-feature.edit', $aboutFeature->id)}}" role="button">Edit </a>
                    <a class="btn btn-outline-info btn-sm " href="{{route('about-feature.show', $aboutFeature->id)}}" role="button">View </a>
                   <!-- Button trigger modal -->
                   <button type="button" class="btn btn-sm btn-outline-danger text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                   Delete
                   </button>
                   
                   <!-- Modal -->
                   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog        ">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Do you want to delete this data??
                        </div>
                        <div class="modal-footer">
                          <form action="{{route('about-feature.destroy', $aboutFeature->id)}}"  method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('delete')
                            <button type="submit"  class="btn btn-outline-primary text-dark ">Save</button>
                          </form>
                          <button type="button" class="btn btn-outline-secondary text-dark" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                   </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div>
              {{$aboutFeatures->links()}}
            </div>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->


@endsection