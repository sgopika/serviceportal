@extends('layouts.base')
@section('content')

    <style>
        .servicewithin
        {
            padding: 3px 30px 3px 30px;
            background-color: #ddf0eb;
            color: black;
            border-radius: 10px 10px 10px 10px;
            -moz-border-radius: 10px 10px 10px 10px;
            -webkit-border-radius: 10px 10px 10px 10px;
            border: 0px solid #000000;
            margin-bottom: 10px;
        }
        .documentneeded
        {
            padding: 3px 30px 3px 30px;
            background-color: #F2E7C9;
            color: black;
            border-radius: 10px 10px 10px 10px;
            -moz-border-radius: 10px 10px 10px 10px;
            -webkit-border-radius: 10px 10px 10px 10px;
            border: 0px solid #000000;
            margin-bottom: 10px;
        }
        .equiry
        {
            padding: 5px 30px 5px 30px;
            background-color: #B5DEAD;
            color: black;
            border-radius: 10px 10px 10px 10px;
            -moz-border-radius: 10px 10px 10px 10px;
            -webkit-border-radius: 10px 10px 10px 10px;
            border: 0px solid #000000;
            margin-bottom: 10px;
            font-size: 1.1em;
        }
    </style>

    <!-- <div class="bg-image-search p-5 text-center">

      <div class="row mb-5 pt-4">
            <div class="col-md-3">

            </div>
           <div class="col-md-6">
                <label for="exampleDataList" class="form-label">Search for Services</label>
                <div class="input-group input-group-lg mb-3">
                    <input type="text" id="keyword" name="keyword" class="form-control search-control" placeholder="Type to search for services..." aria-label="Type to search for services..." aria-describedby="basic-addon2">
                    <span class="input-group-text search-btn" id="basic-addon2"  data-toggle="#0"><i class="fas fa-search"></i></span>
                </div>
            
        </div>
        </div>
    </div> -->


    <!-- <div id="myNav" class="overlay_curton">
        <div class="overlay-content">
            <div class="row">
                <div class="col-md-12">
                    <p class="curtontext">വകുപ്പ്‌ 1. മനുഷ്യരെല്ലാവരും തുല്യാവകാശങ്ങളോടും അന്തസ്സോടും സ്വാതന്ത്ര്യത്തോടുംകൂടി ജനിച്ചിട്ടുള്ളവരാണ്‌.<br> അന്യോന്യം ഭ്രാതൃഭാവത്തോടെ പെരുമാറുവാനാണ്‌ മനുഷ്യന്നു വിവേകബുദ്ധിയും മനസ്സാക്ഷിയും സിദ്ധമായിരിക്കുന്നത്‌.</p>
                    <br><br>
                    <button class="btn btn-info" onclick="closeNav()">Skip to main content</button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span> -->

    <!-- <script>
    document.getElementById("myNav").style.height = "100%";
    
    function openNav() {
        ocument.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
    document.getElementById("myNav").style.height = "0%";
    }
    </script> -->


 


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
                            <h6 class="card-title mb-3" id="sericecategory"></h6>
                             <h4 class="card-text  mb-3" id="servicetitle"></h4>
                        </div>
                        <div class="text-left">
                            
                            <p class="service-model-eng-text mb-2" id="servicemoredescription"> </p>
                        </div>
                        <div class="text-left">
                            <span class="servicewithin servicewithinid" id="servicewithin"></span>
                            <span class="servicewithin feespan" id="feespan"></span>
                        </div>
                        <div class="text-left" id="documentreqdiv">
                           
                        </div>

                        <div class="text-left" id="enquiryid">
                            <h5 class="mb-2 mt-2" id="enqhead"></h5>
                            <span class="equiry emailspan" id="emailspan"></span>
                            <span class="equiry mobilespan" id="mobilespan"></span>
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

      
        <div class="container  pb-5">

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
        


          <div class="row mb-2 justify-content-md-center">
            <div class="col-lg-4">
              <h4 class="showing-services-text" id="showingid"></h4>
            </div>
            <!-- <div class="col-lg-3 text-center">
                <div class="custom-select" >
                    <select class="form-control kg-xv-font" id="categoryid" name="categoryid">
                       
                    </select>
                </div>
            </div> -->
            
           <!--  <div class="col-lg-4 text-center">
                <div class="custom-select" >
                    <select class="form-control kg-xv-font" id="lifeeventid" name="lifeeventid">
                        
                    </select>
                </div>
            </div> -->
            <div class="col-lg-4 text-center">
                <!-- <div class="custom-select" >
                    <select class="form-control kg-xv-font" id="departmentid" name="departmentid">
                        
                    </select>
                </div> -->
            </div>
          </div>

           <!-- Button trigger modal -->
          
           
          <div class="row mt-4">
            <div class="col-md-12 text-center">
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
            <div class="row px-5 row-cols-1 row-cols-xl-5 g-4 mb-5 " id="servicedetview">
                <!-- content here -->
                
            </div>
        </div>
    </div>
@endsection


