@extends('admin.layouts.main')
@section('content')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Hero</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Hero</li>
      </ol>
    </nav>
  </div><!-- End Page title -->
  <section class="section">
    <div class="row">


      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Hero</h5>
            <a class="btn btn-primary btn-sm " href="{{route('hero.create')}}" role="button">Add </a>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="#" enctype="multipart/form-data">
              @csrf
              <div class="col-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" readonly name="title" value="{{$heroes->title}}" class="form-control" id="title">
                @error('title')
                <p class="text-danger"> {{$message}}</p>
               @enderror
              </div>
              <div class="col-6">
                <label for="sub_title" class="form-label">Sub_Title</label>
                <input type="text" readonly name="sub_title" value="{{$heroes->sub_title}}" class="form-control" id="sub_title">
                @error('sub_title')
                <p class="text-danger"> {{$message}}</p>
               @enderror
              </div>
              <div class="col-6">
                <label for="img" class="form-label">Image</label>
                <img src="{{asset('uploads/'.$heroes->img)}}" width="100" height="100" alt="">
                @error('img')
                <p class="text-danger"> {{$message}}</p>
               @enderror
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