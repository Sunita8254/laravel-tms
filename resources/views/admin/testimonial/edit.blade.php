@extends('admin.layouts.main')
@section('content')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>About Testimonials</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">About Testimonials</li>
      </ol>
    </nav>
  </div><!-- End Page title -->
  <section class="section">
    <div class="row">


      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">About Features</h5>
            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="{{route('about-feature.update', $aboutFeatures->id)}}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="col-6">
                <label for="icon" class="form-label">Icon</label> <br>
                <img src="{{asset('uploads/'.$aboutFeatures->icon)}}" alt="" width="100" height="100">
                <input type="file" name="icon" class="form-control" id="icon" value="{{$aboutFeatures->icon}}">
                @error('icon')
                 <p class="text-danger"> {{$message}}</p>
                @enderror
              </div>
              <div class="col-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{$aboutFeatures->title}}">
                @error('title')
               <p class="text-danger"> {{$message}}</p>
              @enderror
              </div>
              <div class="col-6">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="description" value="{{$aboutFeatures->description}}">
                @error('description')
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