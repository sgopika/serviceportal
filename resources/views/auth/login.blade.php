@extends('layouts.base')
@section('content')
<style>
    
</style>
    <div class="bg-image-search p-5 text-center">
      <h1 class="mb-3 h2 text-white">Online Services</h1>
      <div class="row mb-5">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <label for="exampleDataList" class="form-label">Search for Services</label>
                <div class="input-group input-group-lg mb-3">
                    <input type="text" class="form-control search-control" placeholder="Type to search for services..." aria-label="Type to search for services..." aria-describedby="basic-addon2">
                    <span class="input-group-text search-btn" id="basic-addon2"><i class="fas fa-search"></i></span>
                </div>

                <!-- <label for="exampleDataList" class="form-label">Search for Services</label>
                <input class="form-control form-control-lg" list="datalistOptions" type="text" id="keyword" name="keyword" placeholder="Type to search for services..."> -->
            
        </div>
        </div>
    </div>
    <!-- Slider -->

        <div class="container-fluid  logedmain p-2">
            <div class="row">
                <div class="col-md-12 text-center">
                <ul id="loginsuccess">
                    <li id="li_icon"> <i class="lni lni-handshake handicon side-icon"></i>  Hi user You have successfully logged in. </li>
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
                            <a href="http://comtax.kerala.gov.in/web/iCOMITRAX/loginRPS.jsp/" target="_blank" id="servicetitlelink">
                            <p class="card-text round-class bg-blue model-info-text mb-3" id="servicetitle">
                            </p>
                            </a>
                            <p class="service-model-eng-text mb-2" id="servicemoredescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <p class="service-model-mal-text mb-2">വകുപ്പ്. ജാതി, മതം, നിറം, ഭാഷ, സ്ത്രീപുരുഷഭേദം, രാഷ്ട്രീയാഭിപ്രായം സ്വത്ത്, കുലം എന്നിവയെ കണക്കാക്കാതെ ഈ പ്രഖ്യാപനത്തില്‍ പറയുന്ന അവകാശങ്ങള്‍ക്കും സ്വാതന്ത്ര്യത്തിനും സര്‍വ്വജനങ്ങളും അര്‍ഹരാണ്. </p>
                        </div>
                        <div class="text-left text-center">
                            <button class="btn btn-warning btn-primary ml-5 btn-sm" id="servicefee">Fee: Rs.500/-</button>
                            <button type="button" class="btn deplink-button btn-sm position-relative">
                            Service with in
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success" id="servicewithin">
                                10 Days
                                <span class="visually-hidden">Service with in days</span>
                            </span>
                            </button>

                            {{-- <p>Test<span id="super">test sup</span></p>

                            <button type="button" class="btn  btn-sm position-relative">
                                Service with in
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success" id="servicewithin">
                                    10 Days
                                    <span class="visually-hidden">Service with in days</span>
                                </span>
                                </button> --}}

                        </div>
                    </div>
                    <div class="modal-footer">
                        <a type="button" class="btn deplink-button" id="servicemodelapplyonline">Apply Online</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
      <div class="container pt-3 pb-3">

            <!-- <div class="owl-carousel " id="categoryshow">
            </div> -->

            <div class="owl-carousel " id="categoryshow">
                <!-- <div  class="item categoryid">
                    <div class="item img-item">
                        <a href="#0" aria-labelledby="person1"></a>
                        <img src="{{asset('assets/img/New Project (1).jpg')}}" alt=''>
                        <div class="item__overlay">
                        <h3 id="person1" aria-hidden="true" class="text-center">Total Services</h3>
                        <div class="item__body">
                            <br><br>
                            <p class="text-center">20</p>
                        </div>
                        </div>
                    </div>
                    <div class="servicecaption">
                        <h3 class="text-center">Farmers</h3>
                    </div>
                </div> -->
            </div>

      </div>
    </section>
    

	<div class="container-fluid ps-0 font-poppins-normal mt-5">


        <div class="container mt-5 pb-5">
          <div class="row mb-2">
            <div class="col-lg-4">
              <p class="showing-services-text" id="showingid"></p>
            </div>
            <!-- <div class="col-lg-3 text-center">
                <div class="custom-select" >
                    <select class="form-control kg-xv-font" id="categoryid" name="categoryid">
                       
                    </select>
                </div>
            </div> -->
            <div class="col-lg-4 text-center">
                <div class="custom-select" >
                    <select class="form-control kg-xv-font" id="departmentid" name="departmentid">
                        
                    </select>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="custom-select" >
                    <select class="form-control kg-xv-font" id="lifeeventid" name="lifeeventid">
                        
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
        
        <div class="container-fluid">
            <div class="row px-5 row-cols-1 row-cols-xl-5 g-4 mb-5 justify-content-md-center" id="servicedetview">
                <!-- content here -->
                
            </div>
        </div>
    </div>
@endsection


