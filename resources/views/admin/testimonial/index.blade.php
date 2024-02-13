@extends('admin.layouts.main')
@section('content')
  
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Manage Testimonials</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Manage Testimonials </li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Manage Testimonials</h5>
            <a class="btn btn-primary btn-sm " href="{{route('testimonial.create')}}" role="button">Add </a>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Message</th>
                  <th>Name</th>
                  <th>Post</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($testimonials as $testimonial)
                  
             
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$testimonial->title}}</td>
                  <td>{{$testimonial->message}}</td>
                  <td>{{$testimonial->name}}</td>
                  <td>{{$testimonial->post}}</td>
                  <td>
                    <a class="btn btn-primary btn-sm " href="#" role="button">Edit </a>
                    <a class="btn btn-info btn-sm " href="#" role="button">View </a>
                    <a class="btn btn-danger btn-sm " href="#" role="button"> Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->


@endsection