@extends('Agent.uploads.header')

@section('body')
<!-- Upload Area -->
<div class="container">
 <form action="{{url('/uploaddetail')}}" method="post" enctype="multipart/form-data">
     @csrf
    <div class="row" style="background: #fff; box-shadow: 2px 4px 10px rgba(0,0,0,0.25);padding: 25px; border-radius: 15px;"> 
      <div class="col-md-4">
        <div id="uploadArea" class="upload-area">
           <!-- Header -->
          <div class="upload-area__header">
            <h1 class="upload-area__title">Upload your file</h1>
            <p class="upload-area__paragraph">
              File should be an image
              <strong class="upload-area__tooltip">
                Like
                <span class="upload-area__tooltip-data"></span> <!-- Data Will be Comes From Js -->
              </strong>
            </p>
          </div>
          <!-- End Header -->

           <!-- Drop Zoon -->
          <label for="fileInput">
              <div id="dropZoon" class="upload-area__drop-zoon drop-zoon">
                <span class="drop-zoon__icon">
                  <i class='bx bxs-file-image'></i>
                </span>
                <p class="drop-zoon__paragraph">Drop your file here or Click to browse</p>
                <input type="file" id="fileInput" name="file[]" class="form-control"  accept="image/*">
              </div>
          </label>
          <!-- End Drop Zoon -->

         <!-- End File Details -->
        </div>
      </div>
        <div class="col-md-4">
            <div id="uploadArea" class="upload-area">
              <!-- Header -->
                  <div class="upload-area__header">
                    <h1 class="upload-area__title">Upload your file</h1>
                    <p class="upload-area__paragraph">
                      File should be an image
                      <strong class="upload-area__tooltip">
                        Like
                        <span class="upload-area__tooltip-data"></span> <!-- Data Will be Comes From Js -->
                      </strong>
                    </p>
                  </div>
                  <!-- End Header -->
    
    
                  <!-- Drop Zoon -->
                  <label for="fileInput1">
                      <div id="dropZoon" class="upload-area__drop-zoon drop-zoon">
                        <span class="drop-zoon__icon">
                          <i class='bx bxs-file-image'></i>
                        </span>
                        <p class="drop-zoon__paragraph">Drop your file here or Click to browse</p>
                        <input type="file" name="file[]" id="fileInput1" class="form-control"  accept="image/*">
                      </div>
                  </label>
      <!-- End Drop Zoon -->
    
    
      <!-- End File Details -->
            </div>
        </div>
        
        <div class="col-md-4">
            <div id="uploadArea" class="upload-area">
              <!-- Header -->
                  <div class="upload-area__header">
                    <h1 class="upload-area__title">Upload your file</h1>
                    <p class="upload-area__paragraph">
                      File should be an image
                      <strong class="upload-area__tooltip">
                        Like
                        <span class="upload-area__tooltip-data"></span> <!-- Data Will be Comes From Js -->
                      </strong>
                    </p>
                  </div>
                  <!-- End Header -->
    
    
                  <!-- Drop Zoon -->
                  <label for="fileInput2">
                      <div id="dropZoon" class="upload-area__drop-zoon drop-zoon">
                        <span class="drop-zoon__icon">
                          <i class='bx bxs-file-image'></i>
                        </span>
                        <p class="drop-zoon__paragraph">Drop your file here or Click to browse</p>
                        <input type="file" name="file[]" id="fileInput2" class="form-control"  accept="image/*">
                      </div>
                  </label>
      <!-- End Drop Zoon -->
    
    
      <!-- End File Details -->
            </div>
        </div>
    <div>
    <a href="#" class="float-left btn btn-primary" >Skip</a>
    <input type="submit" value="Submit" class="btn btn-success float-right" name="submit" style="float: right;" />
    </div>
    </div>
 </form>
</div>


@if($errors->any())
@if($errors->first()=='active')
{{$errors->messages()['id'][0]}}
@endif
@endif



<!-- End Upload Area -->
@endsection