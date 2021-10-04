<?php
$title = 'Government of Kerala';
include './header.php'; ?>

<style>
    .cardborder {
    border-color: #95b2d8;
    }
    .card:hover {
    -webkit-box-shadow: 0px 13px 48px -27px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 0px 13px 48px -27px rgba(0, 0, 0, 0.75);
    box-shadow: 0px 13px 48px -27px rgba(0, 0, 0, 0.75);
    }
    .rounded-full {
    border-radius: 9999px;
    
    }
    .page-button {
    background-color: rgba(0,0,0,0);
    border-color: rgba(0,0,0,0)!important;
    margin-left: 5px;
    width: 30px;
    margin-top: 3px;
    border-color: rgb(207, 221, 221);
    }
    .card-footer {
        padding: .5rem 1rem;
        background-color: rgba(0,0,0,0);
        border-top: 1px solid rgba(0,0,0,0);
        border-top-width: 1px;
        border-top-style: solid;
        border-top-color: rgba(0, 0, 0, 0);
        padding-bottom: 20px;
    }
    .deplink-button{
        background-color: rgba(219,234,254);
        border-radius: 63px 63px 63px 63px;
        -moz-border-radius: 63px 63px 63px 63px;
        -webkit-border-radius: 63px 63px 63px 63px;
    }
    .card{
        border-color: rgba(219,234,254);
        box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
        transition: .2s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.2s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
        
        cursor: pointer;
    }
    .card:hover{
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }
    .btn-service-find-select
    {
        background-color: #155C97;
        padding-left:30px;
        padding-right:30px;
        border-radius: 63px 63px 63px 63px;
        -moz-border-radius: 63px 63px 63px 63px;
        -webkit-border-radius: 63px 63px 63px 63px;
        border: 0px solid #000000;
        margin-top:10px;
        color:white;
    }
    .btn-service-find-select li{
        color:white !important;
    }
    .btn-service-find-select:hover
    {
        background-color: #155C97;
    }
    .btn-service-find:active
    {
        background-color: #155C97;
    }
    .filter-label
    {
        padding-top:8px;
        margin-right: 5px;
    }
    .showing-services-text {
        margin-top: 12px;
    }

    @media (max-width: 990px) {
        .showing-services-text {
            text-align: center !important;
        }
    }
    .bg-image-search
    {
        /* background-image: url('https://product.cdit.org/sites/keralagov/assets/img/slide-2.jpg'); */
        background:linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://product.cdit.org/sites/keralagov/assets/img/slide-2.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center; 
        background-size: cover; 
        color:white;
    }
</style>


<div class="bg-image-search p-5 text-center shadow-1-strong rounded mb-5"">
  <h1 class="mb-3 h2">Online Services</h1>
  <div class="row mb-5">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
        <label for="exampleDataList" class="form-label">Searh For Services</label>
        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
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


    <div class="container mt-5 pb-5">
      <div class="row mb-2">
        <div class="col-lg-3">
          <p class="showing-services-text">Showing 20 out of 341 services</p>
        </div>
        <div class="col-lg-3 text-center">
            <div class="custom-select" >
                <select class="form-control btn-service-find-select">
                    <option value="">All Departments (7)</option>
                    <option value="1">Audi</option>
                    <option value="2">BMW</option>
                    <option value="3">Citroen</option>
                    <option value="4">Ford</option>
                    <option value="5">Honda</option>
                    <option value="6">Jaguar</option>
                    <option value="7">Land Rover</option>
                    <option value="8">Mercedes</option>
                    <option value="9">Mini</option>
                    <option value="10">Nissan</option>
                    <option value="11">Toyota</option>
                    <option value="12">Volvo</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3 text-center">
            <div class="custom-select" >
                <select class="form-control btn-service-find-select">
                    <option value="">All Departments (7)</option>
                    <option value="1">Audi</option>
                    <option value="2">BMW</option>
                    <option value="3">Citroen</option>
                    <option value="4">Ford</option>
                    <option value="5">Honda</option>
                    <option value="6">Jaguar</option>
                    <option value="7">Land Rover</option>
                    <option value="8">Mercedes</option>
                    <option value="9">Mini</option>
                    <option value="10">Nissan</option>
                    <option value="11">Toyota</option>
                    <option value="12">Volvo</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3 text-center">
            <div class="custom-select" >
                <select class="form-control btn-service-find-select">
                    <option value="">All Departments (7)</option>
                    <option value="1">Audi</option>
                    <option value="2">BMW</option>
                    <option value="3">Citroen</option>
                    <option value="4">Ford</option>
                    <option value="5">Honda</option>
                    <option value="6">Jaguar</option>
                    <option value="7">Land Rover</option>
                    <option value="8">Mercedes</option>
                    <option value="9">Mini</option>
                    <option value="10">Nissan</option>
                    <option value="11">Toyota</option>
                    <option value="12">Volvo</option>
                </select>
            </div>
        </div>

      </div>
      <div class="row mt-4">
        <div class="col-md-12 mb-4 text-center">
          <div class="flex">
            <button class="bg-primary text-white rounded-full page-button">
              A</button
            ><button class="rounded-full page-button" id="A">B</button
            ><button class="rounded-full page-button" id="A">C</button
            ><button class="rounded-full page-button" id="A">D</button
            ><button class="rounded-full page-button" id="A">E</button
            ><button class="rounded-full page-button" id="A">F</button
            ><button class="rounded-full page-button" id="A">G</button
            ><button class="rounded-full page-button" id="A">H</button
            ><button class="rounded-full page-button" id="A">I</button
            ><button class="rounded-full page-button" id="A">J</button
            ><button class="rounded-full page-button" id="A">K</button
            ><button class="rounded-full page-button" id="A">L</button
            ><button class="rounded-full page-button" id="A">M</button
            ><button class="rounded-full page-button">N</button
            ><button class="rounded-full page-button">O</button
            ><button class="rounded-full page-button">P</button
            ><button class="rounded-full page-button">Q</button
            ><button class="rounded-full page-button">R</button
            ><button class="rounded-full page-button">S</button
            ><button class="rounded-full page-button">T</button
            ><button class="rounded-full page-button">U</button
            ><button class="rounded-full page-button">V</button
            ><button class="rounded-full page-button">W</button
            ><button class="rounded-full page-button">X</button
            ><button class="rounded-full page-button">Y</button
            ><button class="rounded-full page-button">Z</button>
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        
        <div class="col">
         <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-user"></i> Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              
            </div>
            <div class="card-footer">
              <a class=" btn deplink-button">Conserned Department</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-user"></i> Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              
            </div>
            <div class="card-footer">
              <a class="btn deplink-button">Conserned Department</a>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-user"></i> Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              
            </div>
            <div class="card-footer">
              <a class="btn deplink-button">Conserned Department</a>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-user"></i> Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              
            </div>
            <div class="card-footer">
              <a class="btn deplink-button">Conserned Department</a>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-user"></i> Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              
            </div>
            <div class="card-footer">
              <a class="btn deplink-button">Conserned Department</a>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-user"></i> Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              
            </div>
            <div class="card-footer">
              <a class="btn deplink-button">Conserned Department</a>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-user"></i> Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              
            </div>
            <div class="card-footer">
              <a class="btn deplink-button">Conserned Department</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-user"></i> Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              
            </div>
            <div class="card-footer">
              <a class="btn deplink-button">Conserned Department</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>


</div>
<?php include './footer.php'; ?>