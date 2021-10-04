@extends('layouts.base')
@section('content')


        <div class="container-fluid  logedmain p-2">
            <div class="row">
                <div class="col-md-12 text-center">
                <ul id="loginsuccess">
                    <li id="li_icon"> <i class="lni lni-handshake handicon side-icon"></i>  Hi {{ Session::get('janparichayusername') }} You have successfully logged in. </li>
                </ul>
                </div>
            </div>
        </div>


    <!-- Modal -->
   <div id="servicemodelarea">
        <div class="modal fade " id="servicemoredetails" tabindex="-1" aria-labelledby="servicemoredetails" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deptname"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <div class="model-service-icon" id="icondiv">
                              
                            </div>
                            <h6 class="card-title mb-3" id="sericecategory">Farmers</h6>
                            <a  id="servicetitlelink">
                            <p class="card-text round-class bg-blue model-info-text mb-3" id="servicetitle">
                            </p>
                            </a>
                            <p class="service-model-eng-text mb-2" id="servicemoredescription"> </p>
                        </div>
                        <div class="text-left">
                            <!-- <button class="btn btn-warning btn-primary ml-5 btn-sm" id="servicefee">Fee: Rs.500/-</button> -->
                            <button type="button" class="btn btn-sm bg-success deplink-button position-relative"  id="servicewithin">
                           
                            </button>

                        </div>
                    </div>
                    <div class="modal-footer" id="servicemodelapplyonline">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


   
    

    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
    
    <section id="counts" class="counts">
      <div class="container-fluid pt-5 px-5">
            <div class="owl-carousel " id="categoryshow">
            </div>
      </div>
    </section>
    

	<div class="container-fluid ps-0 font-poppins-normal mt-5">

        <a id="0"></a>

        <div class="container mt-5 pb-5">
            <div class="row">
                <div class="col">
                    <h4 class="showing-services-text" id="showingid"></h4>
                </div>
                <div class="col-md-auto">
                
                </div>
                <div class="col col-lg-4">
                    <div class="custom-select" >
                        <select class="form-control kg-xv-font" id="departmentid" name="departmentid">
                            
                        </select>
                    </div>
                </div>
            </div>

           <!-- Button trigger modal -->
          

          <div class="row mt-4">
            <div class="col-md-12 mb-4 text-center">
              <div class="flex">
                  <button class="bg-primary text-white rounded-full page-button kg-ii-font alphabet" id="A">A</button>
                  <button class="rounded-full page-button alphabet" id="B">B</button>
                  <button class="rounded-full page-button alphabet" id="C">C</button>
                  <button class="rounded-full page-button alphabet" id="D">D</button>
                  <button class="rounded-full page-button alphabet" id="E">E</button>
                  <button class="rounded-full page-button alphabet" id="F">F</button>
                  <button class="rounded-full page-button alphabet" id="G">G</button>
                  <button class="rounded-full page-button alphabet" id="H">H</button>
                  <button class="rounded-full page-button alphabet" id="I">I</button>
                  <button class="rounded-full page-button alphabet" id="J">J</button>
                  <button class="rounded-full page-button alphabet" id="K">K</button>
                  <button class="rounded-full page-button alphabet" id="L">L</button>
                  <button class="rounded-full page-button alphabet" id="M">M</button>
                  <button class="rounded-full page-button alphabet" id="N">N</button>
                  <button class="rounded-full page-button alphabet" id="O">O</button>
                  <button class="rounded-full page-button alphabet" id="P">P</button>
                  <button class="rounded-full page-button alphabet" id="Q">Q</button>
                  <button class="rounded-full page-button alphabet" id="R">R</button>
                  <button class="rounded-full page-button alphabet" id="S">S</button>
                  <button class="rounded-full page-button alphabet" id="T">T</button>
                  <button class="rounded-full page-button alphabet" id="U">U</button>
                  <button class="rounded-full page-button alphabet" id="V">V</button>
                  <button class="rounded-full page-button alphabet" id="W">W</button>
                  <button class="rounded-full page-button alphabet" id="X">X</button>
                  <button class="rounded-full page-button alphabet" id="Y">Y</button>
                  <button class="rounded-full page-button alphabet" id="Z">Z</button>
              </div>
              <!-- <button class="bg-primary text-white  page-button kg-ii-font test" id="test">Test</button> -->
            </div>
          </div>
        </div>

        <div class="container-fluid px-5">
            <div class="row mb-5 d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="search"> <i class="fa fa-search"></i> <input type="text" id="keyword" class="form-control" placeholder="Type to search for services"> <a class="btn btn-primary" id="basic-addon2">Search</a> </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row px-5 row-cols-1 row-cols-xl-5 g-4 mb-5 justify-content-md-center" id="servicedetview">
                <!-- content here -->
                
            </div>
        </div>
    </div>
@endsection


