@extends('admin.layouts.main')
@section('content')
  
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Manage Hero</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Manage Hero </li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Manage Hero</h5>
            <a class="btn btn-primary btn-sm " href="{{route('hero.create')}}" role="button">Add </a>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Sub title</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($heroes as $hero)
                  
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$hero->title}}</td>
                  <td>{{$hero->sub_title}}</td>
                  <td><img src="{{asset('uploads/'.$hero->img)}}" alt="" width="100" height="100"></td>
                  <td>
                    <a class="btn btn-primary btn-sm " href="{{route('hero.edit', $hero->id)}}" role="button">Edit </a>
                    <a class="btn btn-primary btn-sm " href="{{route('hero.show', $hero->id)}}" role="button">View </a>
                   <!-- Button trigger modal -->
                   <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 Delete
                   </button>
                   
                   <!-- Modal -->
                   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog        ">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Do you want to delete this data???
                        </div>
                        <div class="modal-footer">
                          <form action="{{route('hero.destroy', $hero->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('delete')
                            <button type="sbumit" class="btn btn-primary">Save changes</button>
                          </form>
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                   </div>
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