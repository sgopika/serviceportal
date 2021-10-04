@extends('layouts.basefront')
@section('content')


<div class="row p-5 portallinks ">
  <div class="col-1 d-block d-none webportalinfoicon pt-3">
    <i class="fas fa-info-circle fa-3x"></i>
  </div>
  <div class="col-md-11 webportalinfo"  id="sitecontrollabel">
    
  </div> <!-- ./col12 -->
</div> <!-- ./row -->

<div class="row py-3 mt-3 px-5">
  <div class="col-12">
    <div class="alert alert-primary hvr-icon-bounce" role="alert">
      <p class="eng_xxxs" id="shortalert">  </p>
    </div> <!-- ./alert -->
  </div> <!-- ./col12 -->
  </div> <!-- ./row -->

  <div class="row px-5 py-3 ">
  <div class="col-md-8 ">
    <div class="card ">
    <div class="row no-gutters articlebg">
      <div class="col-md-4 text-center py-2">
        <img src="" alt="articleposter" class="articleposter" id="articleposter">
      </div> <!-- ./col4 -->
      <div class="col-md-8 py-2 animate-border-left">
        <div class="card-body">
          <h5 class="card-title" id="articletitle" > </h5>
          <p class="eng_xxxs" id="articlesubtitle"> </p>
          <p class="eng_ys" id="articleauthor">  </p>
          <p class="eng_xxxs" id="articlecontent"></p>
          <p class="card-text"><small class="text-muted" id="articleupdateddt"></small></p>
        </div> <!-- ./card-body -->
      </div><!-- ./col8 -->
      <div class="col-12 d-flex justify-content-end p-2">
       <a id="articlereadmorebtn" href="" class="btn btn-sm btn-flat primarydark maintext hvr-icon-forward"> 
        Read More&nbsp;<i class="fas fa-arrow-circle-right hvr-icon"></i></a>
        
      </div>  <!-- ./col8 -->

    </div> <!-- ./row -->
  </div> <!-- ./card -->
  </div> <!-- ./col12 -->
  <div class="col-md-4">
      <div class="card"> 
        <div class="card-header relatedheading text-center">
          <p class="eng_xxxs">  Browse Articles  </p>
        </div> <!-- ./card-header-->
        <div class="card-body">
          <div class="row" id="realtedarticlerow">
            
          </div> <!-- ./inner-row -->
        </div> <!-- ./card-body -->
      </div> <!-- ./card -->
  </div> <!-- ./col4 -->
</div> <!-- ./row -->

<div class="row px-5 mb-5 mt-5 justify-content-center" id="servicelinkdiv">
 
</div> <!-- ./row -->

<div class="row px-5 py-1 mt-3">
  <div class="col-md-6">
    <ul class="list-group eng_yxs sharpborder">
  <li class="list-group-item latestgotitle" aria-current="true"><i class="fas fa-file-pdf"></i>&nbsp;Latest Government Orders</li>
  <li class="list-group-item golistitem" id="latestgo_li">

  </li>
</ul>
  </div> <!-- ./col6 -->
  <div class="col-md-6">
    <ul class="list-group eng_yxs sharpborder">
  <li class="list-group-item whatsnewtitle arrow arrow-bottom" aria-current="true"><i class="fas fa-folder-open"></i>&nbsp;Whats' New</li>
  <li class="list-group-item whatsnewitem" id="whatisnew_li"> 
  </li>
</ul>
  </div> <!-- ./col6 -->
</div> <!-- ./row -->

<div class="row px-5 py-2 mt-5 ">
  <div class="col-md-12">
  <div class="card searchcard">
    <div class="card-header accessibledark maintext">
    <p class="eng_xxs"> <i class="fas fa-filter"></i>&nbsp; Looking for Government Orders? Search here ... </p>
    </div> <!-- ./card-header -->
<form id="ajaxmodalform" method="post">
    <div class="card-body articlebg">
      <div class="row listborders py-2 ">
        <div class="col-md-3">
          <p class="eng_xxxs"> Secretariat Department</p>
        </div> <!-- ./col6 -->
        <div class="col-md-3">
          <select class="form-control form-control-sm" id="departments_id" name="departments_id">
              <option value="">Secretariat Department</option>
        </select>
        </div> <!-- ./col6 -->
        <div class="col-md-3">
          <p class="eng_xxxs"> Field Department</p>
        </div> <!-- ./col6 -->
        <div class="col-md-3">
          <select class="form-control form-control-sm" id="fielddepartments_id" name="fielddepartments_id">
              <option value="">Field Department</option>
        </select>
        </div> <!-- ./col6 -->
      </div> <!-- ./inner-row -->
      <div class="row listborders  py-2">
        <div class="col-md-3">
          <p class="eng_xxxs"> From Date </p>
        </div> <!-- ./col6 -->
        <div class="col-md-3">
           <input data-inputmask-alias="date" data-inputmask-inputformat="dd/mm/yyyy" im-insert="false"  id="fromdate" name="fromdate" min="10" maxlength="10" value="{{ Carbon\Carbon::now()->format('d/m/Y') }}" />
         
        </div> <!-- ./col6 -->

        <div class="col-md-3  py-2">
          <p class="eng_xxxs"> To Date </p>
        </div> <!-- ./col6 -->
        <div class="col-md-3">
           <input data-inputmask-alias="date" data-inputmask-inputformat="dd/mm/yyyy" im-insert="false" placeholder="dd/mm/yyyy" id="todate" name="todate" min="10" maxlength="10" value="{{ Carbon\Carbon::now()->format('d/m/Y') }}"/>
          
        </div> <!-- ./col6 -->
      </div> <!-- ./inner-row -->
      <div class="row listborders  py-2">
        <div class="col-md-3">
          <p class="eng_xxxs"> G.O. Number </p>
        </div> <!-- ./col6 -->
        <div class="col-md-3">
          <input type="text" class="form-control form-control-sm" id="gonumber" name="gonumber" aria-describedby="emailHelp" placeholder="E.g. 36/2021/ITD">
           <p id="gonumbererror" style="display:none; color:#FF0000;" >Only A -Z a-z ,numbers / () .  are allowed.</p>
        </div> <!-- ./col6 -->

        <div class="col-md-3">
          <p class="eng_xxxs"> Keywords</p>
        </div> <!-- ./col6 -->
        <div class="col-md-3">
          <input type="text" class="form-control form-control-sm" id="keywords" name="keywords" aria-describedby="emailHelp" >
            <p id="keywordserror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters are allowed.</p>
        </div> <!-- ./col6 -->
      </div> <!-- ./inner-row -->
      <div class="row   py-2">
        <div class="col-12 pt-2 d-flex justify-content-end">
          <button class="btn btn-sm btn-flat primarydark maintext"> <span class="eng_xxxs"> <i class="fab fa-searchengin"></i>&nbsp;Search Government Orders </span> </button>
        </div> <!-- ./col12 -->
      </div> <!-- ./inner-row -->
    </div> <!-- ./card-body -->
</form>
</div> <!-- ./card -->
  </div> <!-- ./col12 -->


</div> <!-- ./row -->
<div id="searchresult" style="display:none;">
  <div class="row px-5 py-2 mt-5">
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-sm table-bordered table-striped table-hover" id="tablegosarch">
         <thead><tr><th>Department</th><th>Title</th><th>Date </th><th>File</th></tr></thead>
         <tbody id="tbodyviewdet"> 
         
          </tbody>
        </table>        
      </div> <!-- ./table-responsive -->
    </div> <!-- ./col12 -->
  </div> <!-- ./row -->
  </div> <!-- ./searchresult -->

<div class="row px-5 py-2 mt-5">
  <div class="col-12">
    <div class="card quicklinkdiv">
      <div class="card-header relatedheading text-center">
        <p class="eng_ys">Browse Documents</p>
      </div> <!-- ./card-header -->
      <div class="card-body">
        <div class="row justify-content-center" id="browserdiv">
        </div> <!-- ./row -->
      </div> <!-- ./card-body -->
    </div> <!-- ./card -->
  </div> <!-- ./col12 -->
</div> <!-- ./row -->

<div class="row px-5 py-2 mt-5">
  <div class="col-md-12">
  <div class="card categorycard">
    <div class="card-header categorycardtitle">
    <p class="eng_xxs"><i class="fas fa-layer-group"></i>&nbsp; Browse all categories </p>
    </div> <!-- ./card-header -->
    <div class="card-body">
      <div class="row " id="browsealldiv">
       
      </div> <!-- ./inner-row -->
    </div> <!-- ./card-body -->

</div> <!-- ./card -->
  </div> <!-- ./col12 -->
</div> <!-- ./row -->

<div class="modal"  tabindex="-1" role="dialog"  id="transactionmodal">
  <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content modalevenrow">
            <div class="modal-header modalevenrow">
                <h4 class="modal-title text-primary"><i class="fas fa-users-cog"></i>&nbsp;&nbsp;Custom Ajax Title </h4>
                <button type="button" class="close1" data-dismiss="modal">&times;</button>
            </div> <!-- ./modal-header -->
            <span id="formresults"></span>
            <form id="ajaxmodalform" method="post" class="form-horizontal">
            <div class="modal-body modalevenrow text-dark">
                <div class="row p-2 modaloffrow">
                    <div class="col-12 d-flex justify-content-center" id="contentdiv"> 

                    </div> <!-- ./col6 -->
                </div> <!-- ./row1 -->
                
                
            </div> <!-- ./modal-body -->
            <div class="modal-footer modaloffrow">
                
            </div> <!-- ./modal-footer -->
            </form> <!-- ./form -->
        </div> <!-- ./modal-content -->
    </div> <!-- ./modal-dialog -->
</div> <!-- ./transaction_modal -->


</div> <!-- ./container-->

@endsection
