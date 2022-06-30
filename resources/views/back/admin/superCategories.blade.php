@extends('back.parties.master')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Super category</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Data</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
         <div class="row mt-4">
           <div class="col-2">
          <button type="button" style="background:rgb(71, 16, 16)" class="btn text-white theme bi bi-plus" data-bs-toggle="modal" data-bs-target="#Addmodal">
         
          </button>
        </div>
        
        <div class="row col-4 mb-3">
          
          <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
        <div class="col-3">
          <div class="col-sm-10">
            <input type="text" class="form-control">
          </div>
        </div>
        </div>
          <!-- Table with stripped rows -->
          <table class="table ">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">operations</th>
                
              </tr>
            </thead>
            <tbody>
             @foreach($categories as $category)
              <tr>
                <th scope="row">{{$category->id}}</th>
                
                <td><img style="width:40%;height:60px;margin-left:0px;margin-right:0px" src="img/category/{{$category->image}}"></td>
                <td>{{$category->name}}</td>
                <td>
                    <!-- Edite centered Modal -->
                   
                    <div class="modal fade" id="verticalycentered{{$category->id}}" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <form action="{{ route('admin.category.update', $category->id) }}"
                                                     method="POST" enctype="multipart/form-data">
                                                   @csrf
                                                   @method('PATCH')>

                          <div class="modal-header">
                            <h5 class="modal-title">Edit Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title themefont" >Edit category</h5>
                  
                                <!-- General Form Elements -->
                                
                                  <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">name</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" value="{{$category->name}}" name="name">
                                    </div>
                                  </div>
                                  
                                 
                                 
                                  <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                    <input class="dropify" type="file"  value="{{$category->image}}" name="img"> 
                                   
                                      </div>
                                  </div>
                                 
                                  
                                  
                  
                               
                  
                              </div>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn  text-white " style="background: rgb(71, 16, 16);">Save changes</button>
                          </div>
                          
                           </form><!-- End General Form Elements -->
                          <h3 class="text-center" style="margin-top: 50px;">Laravel Multiple Image Upload Using DropzoneJS</h3><br>
    <form method="post" action="" enctype="multipart/form-data"
          class="dropzone" id="dropzone">
      
    </form>
                        </div>
                      </div>
                    </div><!-- End Edite centered Modal-->

                  <div class="row">
                  <div class="icon col-3">
                    <button type="button" class="btn  text-white bi bi-pen-fill" style="background:rgb(71, 16, 16)" data-bs-toggle="modal" data-bs-target="#verticalycentered{{$category->id}}">
                     
                     </button>
                 
                  
                </div>
                <div class="icon col-3">
                <form action="{{ route('admin.category.destroy', $category->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        @if ($category->is_active == 1)
                                                        <div class="icon col-3">
                  <button type="submit" class="btn text-white  ri-delete-bin-3-fill" style="background:red" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                     
                  </button>
                  
                  
                </div>
                                                            
                                                        @else
                                                        <div class=" col-3 icon">
                  <button type="submit" class="btn text-white ri-delete-bin-2-fill" style="background:green" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                     
                  </button>
                  
                  
                </div>
                                                        @endif
                                                    </form>
              
</div >
              
              </div></td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- End Table with stripped rows -->
<!-- Add centered Modal -->
                   
                    <div class="modal fade" id="Addmodal" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <!-- General Form Elements -->
                          <form action="{{ route('admin.category.store') }}"
                                                     method="POST" enctype="multipart/form-data">
                                                     @csrf
                                                 
                          <div class="modal-header">
                            <h5 class="modal-title">Add Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Add New Category</h5>
                  
                                
                                  <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">name</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="name">
                                    </div>
                                  </div>
                                  
                                 
                                  <div
                                            class="col-md-12 col-lg-6 mb-4 d-flex justify-content-center flex-column align-items-center">
                                            <label class="label image w-100 ">Image</label>
                                            
                                        </div>
                                     
<input class="dropify" type="file" name="img"> 

                                 
                                  
                                 
                  
                               
                  
                              </div>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn text-white " style="background:rgb(71, 16, 16)">Save changes</button>
                          </div>
                        </form><!-- End General Form Elements -->
                        </div>
                      </div>
                    </div><!-- End Edite centered Modal-->
        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->


  @endextends