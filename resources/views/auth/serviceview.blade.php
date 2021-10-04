@extends('layouts.basefront')
@section('content')



<div class="bg-image-search p-5 text-center">
  <h1 class="mb-3 h2">Online Services</h1>
  <div class="row mb-5">

        <div class="col-md-3">

        </div>
        <div class="col-md-6">
        <label for="exampleDataList" class="form-label">Search for Services</label>
        <input class="form-control" list="datalistOptions" type="text" id="keyword" name="keyword" placeholder="Type to search...">
        <!-- <datalist id="datalistOptions">
        <option value="San Francisco">
        <option value="New York">
        <option value="Seattle">
        <option value="Los Angeles">
        <option value="Chicago">
        </datalist> -->
        </div>

    </div>

</div>
<!-- Slider -->
<div class="container-fluid ps-0 font-poppins-normal">
<div class="row p-2">
            <div id="kg-main-nav" class="col-12 d-flex justify-content-end">
                        
                        <li class="nav-item d-none d-lg-block">
                             
                                <a href="{{ route('login') }}" class="btn serviceloginbtn">Login</a>
                            </li>
                    </div>
        </div>

    <div class="container mt-5 pb-5">

      <div class="row mb-2">
        <div class="col-lg-3">
          <p class="showing-services-text" id="showingid"></p>
        </div>
        <div class="col-lg-3 text-center">
            <div class="custom-select" >
                <select class="form-control kg-xv-font" id="categoryid" name="categoryid">
                   
                </select>
            </div>
        </div>
        <div class="col-lg-3 text-center">
            <div class="custom-select" >
                <select class="form-control kg-xv-font" id="departmentid" name="departmentid">
                    
                </select>
            </div>
        </div>
        <div class="col-lg-3 text-center">
            <div class="custom-select" >
                <select class="form-control kg-xv-font" id="lifeeventid" name="lifeeventid">
                    
                </select>
            </div>
        </div>

      </div>
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
          <button class="bg-primary text-white  page-button kg-ii-font test" id="test">Test</button>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-4 g-4" id="servicedetview">
        <!-- content here -->

       
      </div>
    </div>


</div>
@endsection
