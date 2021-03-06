<style>

.dropdown:hover>.dropdown-menu {
  display: block;
}

</style>
<!-- Main Navbar -->
        <div class="row kg-p-spacing font-mulish-normal pt-3">
            <ul class="nav justify-content-end align-items-center">
                <li class="nav-item d-none d-sm-none d-lg-block">
                    <a class="nav-link text-grey font-mulish-normal skip-btn py-0" aria-current="page" href="#main-content">Skip to Main Content</a>
                </li>
                <input type="hidden" value="{{ $sessionbil }}">
                @if($sessionbil==1)
                <li class="nav-item">
                    <button class="nav-link lang-btn rounded-pill p-2 mx-1 kg-xv-font"  id="mal">മലയാളം</button>
                </li>
                @elseif($sessionbil==2)
                <li class="nav-item" >
                    <button class="nav-link lang-btn rounded-pill p-2 mx-1 kg-xv-font"  id="eng">English</button>
                </li>
                @endif
                <li class="nav-item">
                    <ul class="nav-link list-group py-0 list-group-horizontal font-size-btn kg-xv-font">
                        <li class="list-group-item"><a id="kg-decrease-font" class="btn disabled rounded-circle mx-1" aria-current="page" href="#">A-</a></li>
                        <li class="list-group-item"><a id="kg-default-font" class="btn rounded-circle active mx-1" aria-current="page" href="#">A</a></li>
                        <li class="list-group-item"><a id="kg-increase-font" class="btn rounded-circle mx-1" aria-current="page" href="#">A+</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <form class="nav-link d-flex py-0">
                        <input type="checkbox" class="checkbox" id="chk" />
                        <label class="label chkbox-label" for="chk">
                                <i class="fas fa-sun"></i>
                                <i class="fas fa-moon"></i>                    
                                <div class="ball"></div>
                            </label>
                    </form>
                </li>
            </ul>
        </div>

        <div class="row kg-p-spacing main-nav pb-4">
            <nav class="navbar navbar-expand-lg font-poppins-normal main-nav-menu p-0 pt-1">
                <div class="container-fluid p-0">
                    <a class="main-title navbar-brand me-auto me-lg-0" href="{{url('/')}}">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-6"><img src="" onerror="this.onerror=null;this.src='assets/img/onerror.gif';" class="light-img img-fluid" alt="logo_image" id="logoimg" title="" ></div>
                                    <div class="col-md-1" style=" color: #5e669e;" ><span class="eng_xxxxs" title="" id="maintitle"> </span><br/><span id="subtitle"></span></div>

                                </div>
                            </div>
                            
                        </div>
                    </a>
                    <a href="#" class="kg_search_btn search_icon d-lg-none"><i class="fa fa-search"></i></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#kg-main-nav" aria-controls="kg-main-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><img onerror="this.onerror=null;this.src='assets/img/onerror.gif';" src="{{ asset('assets/webplugins/svg/nav-toggle.svg') }}" alt="navbar toggle"/></span>
                        </button>
                    
                    <div class="collapse navbar-collapse text-right kg-iv-font" id="kg-main-nav">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center" id="mainmenus">
                            
                            
                        </ul>
                       
                    </div>
                </div>
            </nav>
        </div>
        <!-- Main Navbar End-->
    </header>
    <!-- Header End -->
<script>

    </script>
   