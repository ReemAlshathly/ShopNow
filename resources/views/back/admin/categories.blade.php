@extends('back.parties.master')
<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="themefont" style="color: rgb(71, 16, 16);">Sub category</h1>
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
             <div class="row mt-4 mb-4">
               <div class="col-2">
              <button type="button" class="btn theme text-white bi bi-plus" style="font-size: 1.5vw;" data-bs-toggle="modal" data-bs-target="#Addmodal">
             
              </button>
            </div>
            
            
            <div class="col-6">
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Search">
              </div>
            </div>
            </div>
              <!-- Table with stripped rows -->
              <table class="table ">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category</th>
                    <th scope="col">Name</th>
                    <th scope="col">operations</th>
                    
                  </tr>
                </thead>
                <tbody>
                 
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>
                        <!-- Edite centered Modal -->
                       
                        <div class="modal fade" id="verticalycentered" tabindex="-1">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <form>

                              <div class="modal-header">
                                <h5 class="modal-title">Edit Category</h5>
                                <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title themefont">General Form Elements</h5>
                      
                                    <!-- General Form Elements -->
                                    
                                      <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">name</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                        </div>
                                      </div>
                                      
                                     
                                     
                                      <div class="row mb-3">
                                        <label for="inputNumber" class="col-sm-4 col-form-label ">Category</label>
                                        <div class="col-sm-8">
                                          
                                              <select class="col-sm-6 form-select " aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select>
                                            
                                        </div>
                                      </div>
                                     
                                      
                                      
                      
                                   
                      
                                  </div>
                                </div>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn theme text-white">Save changes</button>
                              </div>
                               </form><!-- End General Form Elements -->
                            </div>
                          </div>
                        </div><!-- End Edite centered Modal-->

                      <div class="row">
                      <div class="icon col-3">
                        <button type="button" class="btn  bi bi-pen-fill theme text-white" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                         
                         </button>
                     
                      
                    </div>
                    <div class=" col-3 icon">
                      <button type="button" class="btn theme text-white ri-delete-bin-2-fill" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                         
                      </button>
                      
                      
                    </div>
                    
                    <div class="icon col-3">
                      <button type="button" class="btn theme text-white ri-delete-bin-3-fill" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                         
                      </button>
                      
                      
                    </div>
                  </div></td>
                    
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
<!-- Add centered Modal -->
                       
                        <div class="modal fade" id="Addmodal" tabindex="-1">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <!-- General Form Elements -->
                              <form action="{{ route('admin.category.store' ) }}"
                                                     method="POST" enctype="multipart/form-data">
                                                     @csrf
                                                   @method('PATCH')
                              <div class="modal-header">
                                <h5 class="modal-title">Add Category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title themefont">Add New Category</h5>
                      
                                    
                                      <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">name</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" name="name">
                                        </div>
                                      </div>
                                      
                                     
                                     
                                      <div class="row mb-3">
                                        <label for="inputNumber" class="col-sm-4 col-form-label ">Category</label>
                                        <div class="col-sm-8">
                                          
                                              <select class="col-sm-6 form-select " aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select>
                                            
                                        </div>
                                      </div>
                                     
                                      
                                     
                      
                                   
                      
                                  </div>
                                </div>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn theme text-white">Save changes</button>
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