@extends('admin.layouts.main')
@section('content')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>About Testimonial</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">About Testimonial</li>
      </ol>
    </nav>
  </div><!-- End Page title -->
  <section class="section">
    <div class="row">


      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">About Testimonial</h5>
            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="{{route('testimonial.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="col-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title">
                @error('title')
                 <p class="text-danger"> {{$message}}</p>
                @enderror
              </div>
              <div class="col-6">
                <label for="message" class="form-label">Message</label>
                <input type="text" name="message" class="form-control" id="message">
                @error('message')
               <p class="text-danger"> {{$message}}</p>
              @enderror
              <div class="col-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name">
                @error('name')
               <p class="text-danger"> {{$message}}</p>
              @enderror
              </div>
              <div class="col-6">
                <label for="post" class="form-label">Post</label>
                <input type="text" name="post" class="form-control" id="post">
                @error('post')
               <p class="text-danger"> {{$message}}</p>
              @enderror
              </div>
                <div class="col-6 ">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form><!-- Vertical Form -->

          </div>
        </div>



      </div>
    </div>
  </section>

</main><!-- End #main -->


<script>
  function selectImage() {
    let x = document.querySelector('input[name=img_link]:checked').value;
    //var selectedOption = $("input:radio[name=filename]:checked").val()
    document.getElementById('sliderbox').value = x; // use .innerHTML if we want data on label
  }
</script>

@endsection