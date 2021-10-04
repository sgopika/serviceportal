<script>
    
    $( document ).ready(function() {
       $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });


     
    
    $('#livemodal').on('hidden.bs.modal', function(e) {
        
        $("#livemodal iframe").attr('src', $("#livemodal iframe").attr('src'));
         
        
      })



    $( "#sitemode" ).click(function() {
         var maincolor = $('#portal-color').attr('href');
         var maincolorclass = (maincolor.slice(maincolor.length - 8));
         if(maincolorclass == 'dark.css')
         {
            $( "#portal-color" ).attr("href", "assets/css/portal-light.css");
            $( "#portal-animate" ).attr("href", "assets/css/portal-animate-light.css");
         }
         else
         {
            $( "#portal-color" ).attr("href", "assets/css/portal-dark.css");
            $( "#portal-animate" ).attr("href", "assets/css/portal-animate-dark.css");
        }
    });

        $("#fontincrement").click(function() {
        $("div").children().each(function() {
          var size = parseInt($(this).css("font-size"));
          size = size + 1 + "px";
          $(this).css({
            'font-size': size
          });
        });
      });

         $("#fontdecrement").click(function() {
        $("div").children().each(function() {
          var size = parseInt($(this).css("font-size"));
          size = size - 1 + "px";
          $(this).css({
            'font-size': size
          });
        });
      });

        $("#fontreset").click(function() {
         location.reload();
      });


 
 
      $.ajax({
          url :"/setvalueshomepage",
          dataType:"json",
          success:function(data)
          { 
             //alert(data.servicecatcount);exit();
            $("#bilval").val(data.sessionbil);
            $("#logoimg").attr('src',"{{asset('Logo')}}/"+data.logo.file);
            $("#maintitle").html(data.title.title); 
             $("#subtitle").html(data.title.subtitle); 
            /* $("#sitecontrollabel").html(data.sitecontrollbl.title);  
             $("#shortalert").html(data.shortalert.content); */

             /*   Service       */


             $("#showingid").html('Showing '+data.servicecount+' out of '+data.totalservices+' services'); 

            /*  $('#categoryid').empty();
              $('#categoryid').append($('<option value="0"></option>').val('').html('All Category ('+data.categorycount+' )'));
              $.each(data.categories, function(index, element) {
                $('#categoryid').append(
                    $('<option></option>').val(element.id).html(element.title)
                );
            });*/
            var btnname='';
            $("#categoryshow").html('');
              $.each(data.categories, function (i) {
                if(data.sessionbil==1)
                  {
                     btnname='Services';
                  }
                  else
                  {
                    btnname='സേവനങ്ങൾ';
                  }
              // $("#categoryshow").append('<div  class="item categoryid"  id="'+data.categories[i].id+'"><div  class="count-box mt-5 mb-5 shadowbox">'+data.categories[i].iconclass+'<h3 class="counter">'+data.servicecatcount[data.categories[i].id]+' <span id="super">'+btnname+'</span></h3><p>'+data.categories[i].title+'</p></div></div>');
              // });

               var img = "{{asset('assets/img/servicecategory')}}/"+data.categories[i].imageurl;
              
              $("#categoryshow").append('<div  class="item categoryid" id="'+data.categories[i].id+'" data-toggle="#result"><div class="item img-item" ><a href="#0" aria-labelledby="person1"></a><img src="'+img+'" alt=""><div class="item__overlay"><h3 id="person1" aria-hidden="true" class="text-center">'+btnname+'</h3><div class="item__body"><p class="text-center">'+data.servicecatcount[data.categories[i].id]+'</p></div></div></div><div class="servicecaption"><h3 class="text-center">'+data.categories[i].iconclass+' '+data.categories[i].title+'</h3></div></div>');

              //$("#categoryshow").append('<div  class="item categoryid"  id="'+data.categories[i].id+'"><div  class="count-box mt-5 mb-5 shadowbox">'+data.categories[i].iconclass+'<h3 class="counter">'+data.servicecatcount[data.categories[i].id]+' <span id="super">'+btnname+'</span></h3><p>'+data.categories[i].title+'</p></div></div>');
              
              
              });



              $('.owl-carousel').owlCarousel({
                  loop:true,
                  nav:true,
                  dots: false,
                  margin:10,
                  autoWidth:false,
                  autoplayHoverPause:true,
                  
                  navText: ["<i class='fas fa-arrow-alt-circle-left fa-3x'></i>","<i class='fas fa-arrow-alt-circle-right fa-3x'></i>"],
                  responsive:{
                      0:{
                          items:2
                      },
                      600:{
                          items:4
                      },
                      1000:{
                          items:5
                      }
                  }
              })


            $('#departmentid').empty();
            $('#departmentid').append($('<option value="0"></option>').val('').html('All Departments ('+data.departmentcount+')'));
            $.each(data.departments, function(index, element) {
                $('#departmentid').append(
                    $('<option></option>').val(element.id).html(element.depttitle)
                );
            });
            $('#lifeeventid').empty();
            $('#lifeeventid').append($('<option value="0"></option>').val('').html('All Life Event Model ('+data.life_eventscount+')'));
            $.each(data.life_events, function(index, element) {
                $('#lifeeventid').append(
                    $('<option></option>').val(element.id).html(element.lifeeventtitle)
                );
            });


             $.each(data.services, function (i) {
              var btnnameone='';
              var btnnametwo='';
              if(data.sessionbil==1)
                  {
                     btnnameone='Apply Online';
                     btnnametwo='View Details';
                  }
                  else
                  {
                    btnnameone='അപേക്ഷിക്കുക';
                    btnnametwo='കൂടുതൽ വിവരങ്ങൾ';
                  }

              $("#servicedetview").append('<div class="col text-center"><div class="card h-100"><div class="card-body"><div class="service-icon ">'+data.services[i].iconclass+'</div><h6 class="card-title">'+data.services[i].categoryname+'</h6><a href="'+data.services[i].serviceurl+'" target="_blank"><p class="card-text">'+data.services[i].servicetitle+'</p></a><p class="deptname">'+data.services[i].departmentname +'</p></div><div class="card-footer "><a href="'+data.services[i].serviceurl+'" class="btn btn-sm deplink-button mt-1" target="_blank">'+btnnameone+'</a>&nbsp;<a class="btn btn-sm btn-primary deplink-button mt-1 viewdetails" data-bs-toggle="modal" data-bs-target="#servicemoredetails" id="'+data.services[i].id+'">'+btnnametwo+'</a></div></div></div>');



             // $("#servicedetview").append('<div class="col"><div class="card h-100"><div class="card-body"><h6 class="card-title">'+data.services[i].departmentname +'</h6>  <a href="'+data.services[i].serviceurl+'" target="_blank"><p class="card-text"> <i class="fas fa-user"></i> '+data.services[i].entitle+'</p></a></div><div class="card-footer "><a href="'+data.services[i].serviceurl+'" class="btn btn-primary deplink-button">View Details</a></div></div></div>');
       


             });

                        
 

                /*Footer Menu*/
                $.each( data.footermenus, function(i) {
                $("#footermenus").append('<li class="modalwind" id="'+data.footermenus[i].id+'"><a href="javascript:void(0)">'+data.footermenus[i].title+'</a></li>');
              
            });

             $.each( data.footerlinks, function(i) {
            
            $("#footerlinks").append('<li><a href="'+data.footerlinks[i].url+'" class="footer-text" target="_blank"><i class="'+data.footerlinks[i].iconclass+'"></i>&nbsp;'+data.footerlinks[i].title+'</a></li>');
            
            });


              //Site updated
            if(data.siteupdated!=null){
              $("#lastviewhead").append(data.siteupdated.titlevalues);
            }

            //Contact us 

            if(data.address){
              $('#contact_address').append(data.address.title)
              $('#contact_link').attr('href',data.address.maplinks)
              // console.log(data.address);
            }

             $("#touchhead").append(data.sitecontrollabels[14].title);
           $("#mobilehead").append(data.sitecontrollabels[15].title);
           $("#aboutgovthead").append(data.sitecontrollabels[16].title);
           $("#infmnhead").append(data.sitecontrollabels[17].title);
           $("#followusfooter").append(data.sitecontrollabels[8].title);
           $("#site_update_date").append(data.sitecontrollabels[20].title+' ');
            $("#app-store").append(data.sitecontrollabels[22].title);
           $("#google-play").append(data.sitecontrollabels[24].title); 
            $("#small-title1").append(data.sitecontrollabels[21].title); 
             $("#footer-title1").append(data.sitecontrollabels[28].title);  
            $("#footer-title2").append(data.sitecontrollabels[29].title);  
             $("#footer-title3").append(data.sitecontrollabels[27].title);
              $("#followusfooter").append(data.sitecontrollabels[8].title);


               $.each(data.socialmedia, function (i) {
              $("#footermedia1").append('<li><a href="'+data.socialmedia[i].url+'" data-toggle="tooltip" data-placement="top" title="'+data.socialmedia[i].tooltip+'" ><i class="'+data.socialmedia[i].iconclass+'"></i></a></li>');
            }); 

          if(data.footerlogo!=null){
            $.each( data.footerlogo, function(i) {
            
            $("#footerlogo").append('<div class="col-6 col-md-4 col-lg-6 text-start"><img  src="{{asset('Logo')}}/'+data.footerlogo[i].file+'" class="footer-logo img-fluid"></div>');
            
            });
          }
           $("#footerdiv1").html(data.footer.title);
            $("#footerdiv2").html(data.footer.subtitle);
            if(data.widget!=null){
              $.each(data.widget, function (i) {
                if(data.widget[i].menulinktypes_id==2){
                  $("#widgetrow").append('<div class="col-6 col-lg-2"><a href="'+data.widget[i].fileval+'" target="_blank"><div class="img-outer"><div style="background-image: url(./Widgetlink/'+data.widget[i].file+'");" class="img-border rounded-circle cs-img"></div><div class="img-content text-center mt-3"><h4 class="kg-vi-font font-poppins-normal">'+data.widget[i].title+'</h4><p class="font-roboto-normal kg-ii-font mx-3">'+data.widget[i].subtitle+'</p></div></div></a></div>');

                } else if(data.widget[i].menulinktypes_id==5){
                  $("#widgetrow").append('<div class="col-6 col-lg-2"><a href="'+data.widget[i].fileval+'" target="_blank"><div class="img-outer"><div style="background-image: url(./Widgetlink/'+data.widget[i].file+'");" class="img-border rounded-circle cs-img"></div><div class="img-content text-center mt-3"><h4 class="kg-vi-font font-poppins-normal">'+data.widget[i].title+'</h4><p class="font-roboto-normal kg-ii-font mx-3">'+data.widget[i].subtitle+'</p></div></div></a></div>');

                } else if(data.widget[i].menulinktypes_id==4){
                   $.ajax({
                   url :"/setvaluesencrypt/"+data.widget[i].fileval,
                   dataType:"json",
                   success:function(datas)
                   {
                      $("#widgetrow").append('<div class="col-6 col-lg-2"><a href="mainarticles/'+datas.encid+'" target="_blank"><div class="img-outer"><div style="background-image: url(./Widgetlink/'+data.widget[i].file+'");" class="img-border rounded-circle cs-img"></div><div class="img-content text-center mt-3"><h4 class="kg-vi-font font-poppins-normal">'+data.widget[i].title+'</h4><p class="font-roboto-normal kg-ii-font mx-3">'+data.widget[i].subtitle+'</p></div></div></a></div>');
                   }
                   });

                } else if(data.widget[i].menulinktypes_id==1){
                  $("#widgetrow").append('<div class="col-md-2 py-2"><a href="#'+data.widget[i].fileval+'" target="_blank"><div class="img-outer"><div style="background-image: url(./Widgetlink/'+data.widget[i].file+'");" class="img-border rounded-circle cs-img"></div><div class="img-content text-center mt-3"><h4 class="kg-vi-font font-poppins-normal">'+data.widget[i].title+'</h4><p class="font-roboto-normal kg-ii-font mx-3">'+data.widget[i].subtitle+'</p></div></div></a></div>');
                } else if(data.widget[i].menulinktypes_id==3){
                  $("#widgetrow").append('<div class="col-md-2 py-2"><a href="{{asset('Mainmenu')}}/'+data.widget[i].fileval+'" target="_blank"><div class="img-outer"><div style="background-image: url(./Widgetlink/'+data.widget[i].file+'");" class="img-border rounded-circle cs-img"></div><div class="img-content text-center mt-3"><h4 class="kg-vi-font font-poppins-normal">'+data.widget[i].title+'</h4><p class="font-roboto-normal kg-ii-font mx-3">'+data.widget[i].subtitle+'</p></div></div></a></div>');
                } else {

                }

                
               
              });
            }
                

            


          

              /*Footer*/

            
   





          }/*Success data end*/
          
      })
    
 /*Page load ajax end*/  

/*Service filter */
 //$('#categoryid').on('change ', function(e) {
  $(document).on("click", ".categoryid", function(event){  
        var catid = $(this).attr('id');  
        //$("div.id_100 select").val("val2");

        var deptid= $('#departmentid').val('');
        var lifeeventid= $('#lifeeventid').val('');
        var keyword= $('#keyword').val('');

            if(deptid>0){deptid=deptid;}else{deptid=0;}
            if(lifeeventid>0){lifeeventid=lifeeventid;}else{lifeeventid=0;} 
             if(keyword>0){keyword=keyword;}else{keyword=null;}    
             $.ajax({
              method:"post",
              dataType:"json",
                data: {catid:catid,deptid:deptid,lifeeventid:lifeeventid,keyword:keyword},
                url: '{{ route('getcategoryservice') }}',
                success: function (data) 
                { 

                    $("#servicedetview").html('');
                   //  $("#servicedetview").focus();
                    if(data.servicecount>0)
                    {
                      $(".alphabet").removeClass("bg-primary text-white rounded-full page-button alphabet").addClass('rounded-full page-button alphabet');
                      $('#'+data.starts_with).removeClass("bg-primary text-white rounded-full page-button alphabet").addClass('bg-primary text-white rounded-full page-button alphabet');
                      
                      //$("#selected").removeClass("count-box mt-5 mb-5 shadowbox").addClass('count-box mt-5 mb-5 shadowbox scactive');
                      
                      $("#showingid").html('Showing '+data.servicecount+' out of '+data.totalservices+' services'); 
                      $.each(data.services, function (i)
                      {
                        var btnnameone='';
              var btnnametwo='';
              if(data.sessionbil==1)
                  {
                     btnnameone='Apply Online';
                     btnnametwo='View Details';
                  }
                  else
                  {
                    btnnameone='അപേക്ഷിക്കുക';
                    btnnametwo='കൂടുതൽ വിവരങ്ങൾ';
                  }

              $("#servicedetview").append('<div class="col text-center"><div class="card h-100"><div class="card-body"><div class="service-icon ">'+data.services[i].iconclass+'</div><h6 class="card-title">'+data.services[i].categoryname+'</h6><a href="'+data.services[i].serviceurl+'" target="_blank"><p class="card-text">'+data.services[i].servicetitle+'</p></a><p class="deptname">'+data.services[i].departmentname +'</p></div><div class="card-footer "><a href="'+data.services[i].serviceurl+'" class="btn btn-sm deplink-button mt-1" target="_blank">'+btnnameone+'</a>&nbsp;<a class="btn btn-sm btn-primary deplink-button mt-1 viewdetails" data-bs-toggle="modal" data-bs-target="#servicemoredetails" id="'+data.services[i].id+'">'+btnnametwo+'</a></div></div></div>');
                      });
                    }
                    else
                    {
                      $("#showingid").html('Showing '+data.servicecount+' out of '+data.totalservices+' services'); 
                      $("#servicedetview").html('');
                      swal("Sorry!", "No Service Data Found", "warning");
                      $("#servicedetview").append('<div class="col-xl-12  text-center">No Service Data Found</div>');
                    }

                }
            });
          
     });


 /*department*/
 $('#departmentid').on('change ', function(e) {
        var deptid = $(this).val();
        var catid= $('#categoryid').val('');
        var lifeeventid= $('#lifeeventid').val('');
        var keyword= $('#keyword').val('');

            if(catid>0){catid=catid;}else{catid=0;}
            if(lifeeventid>0){lifeeventid=lifeeventid;}else{lifeeventid=0;} 
             if(keyword>0){keyword=keyword;}else{keyword=null;}    
             $.ajax({
              method:"post",
              dataType:"json",
                data: {catid:catid,deptid:deptid,lifeeventid:lifeeventid,keyword:keyword},
                url: '{{ route('getdeptservice') }}',
                success: function (data) 
                { 
                    $("#servicedetview").html('');
                    if(data.servicecount>0)
                    {
                      $(".alphabet").removeClass("bg-primary text-white rounded-full page-button alphabet").addClass('rounded-full page-button alphabet');
                      $('#'+data.starts_with).removeClass("bg-primary text-white rounded-full page-button alphabet").addClass('bg-primary text-white rounded-full page-button alphabet');
                      $("#showingid").html('Showing '+data.servicecount+' out of '+data.totalservices+' services'); 
                      $.each(data.services, function (i)
                      {
                         var btnnameone='';
              var btnnametwo='';
              if(data.sessionbil==1)
                  {
                     btnnameone='Apply Online';
                     btnnametwo='View Details';
                  }
                  else
                  {
                    btnnameone='അപേക്ഷിക്കുക';
                    btnnametwo='കൂടുതൽ വിവരങ്ങൾ';
                  }

              $("#servicedetview").append('<div class="col text-center"><div class="card h-100"><div class="card-body"><div class="service-icon ">'+data.services[i].iconclass+'</div><h6 class="card-title">'+data.services[i].categoryname+'</h6><a href="'+data.services[i].serviceurl+'" target="_blank"><p class="card-text">'+data.services[i].servicetitle+'</p></a><p class="deptname">'+data.services[i].departmentname +'</p></div><div class="card-footer "><a href="'+data.services[i].serviceurl+'" class="btn btn-sm deplink-button mt-1" target="_blank">'+btnnameone+'</a>&nbsp;<a class="btn btn-sm btn-primary deplink-button mt-1 viewdetails" data-bs-toggle="modal" data-bs-target="#servicemoredetails" id="'+data.services[i].id+'">'+btnnametwo+'</a></div></div></div>');
                      });
                    }
                    else
                    {
                      $("#showingid").html('Showing '+data.servicecount+' out of '+data.totalservices+' services'); 
                      $("#servicedetview").html('');
                      swal("Sorry!", "No Service Data Found", "warning");
                      $("#servicedetview").append('<div class="col-xl-12  text-center">No Service Data Found</div>');
                    }
                }
            });
          
     });

 /*Life event */
 $('#lifeeventid').on('change ', function(e) {
        var lifeeventid = $(this).val();
        var deptid= $('#departmentid').val('');
        var catid= $('#categoryid').val('');
        var keyword= $('#keyword').val('');

            if(deptid>0){deptid=deptid;}else{deptid=0;}
            if(catid>0){catid=catid;}else{catid=0;} 
             if(keyword>0){keyword=keyword;}else{keyword=null;}    
             $.ajax({
              method:"post",
              dataType:"json",
                data: {catid:catid,deptid:deptid,lifeeventid:lifeeventid,keyword:keyword},
                url: '{{ route('getlifeeventservice') }}',
                success: function (data) 
                { 
                  $("#servicedetview").html('');
                  if(data.servicecount>0)
                  {
                    $(".alphabet").removeClass("bg-primary text-white rounded-full page-button alphabet").addClass('rounded-full page-button alphabet');
                    $('#'+data.starts_with).removeClass("bg-primary text-white rounded-full page-button alphabet").addClass('bg-primary text-white rounded-full page-button alphabet');
                    $("#showingid").html('Showing '+data.servicecount+' out of '+data.totalservices+' services'); 
                    $.each(data.services, function (i)
                    {
                       var btnnameone='';
              var btnnametwo='';
              if(data.sessionbil==1)
                  {
                     btnnameone='Apply Online';
                     btnnametwo='View Details';
                  }
                  else
                  {
                    btnnameone='അപേക്ഷിക്കുക';
                    btnnametwo='കൂടുതൽ വിവരങ്ങൾ';
                  }

              $("#servicedetview").append('<div class="col text-center"><div class="card h-100"><div class="card-body"><div class="service-icon ">'+data.services[i].iconclass+'</div><h6 class="card-title">'+data.services[i].categoryname+'</h6><a href="'+data.services[i].serviceurl+'" target="_blank"><p class="card-text">'+data.services[i].servicetitle+'</p></a><p class="deptname">'+data.services[i].departmentname +'</p></div><div class="card-footer "><a href="'+data.services[i].serviceurl+'" class="btn btn-sm deplink-button mt-1" target="_blank">'+btnnameone+'</a>&nbsp;<a class="btn btn-sm btn-primary deplink-button mt-1 viewdetails" data-bs-toggle="modal" data-bs-target="#servicemoredetails" id="'+data.services[i].id+'">'+btnnametwo+'</a></div></div></div>');
                    });
                  }
                  else
                  {
                    $("#showingid").html('Showing '+data.servicecount+' out of '+data.totalservices+' services'); 
                    $("#servicedetview").html('');
                    swal("Sorry!", "No Service Data Found", "warning");
                    $("#servicedetview").append('<div class="col-xl-12  text-center">No Service Data Found</div>');
                  }
                }
                   
            });
          
     });

 /*Keyword*/

 $('#keyword').on('change ', function(e) {
        var keyword = $(this).val();
        var deptid= $('#departmentid').val('');
        var lifeeventid= $('#lifeeventid').val('');
        var catid= $('#categoryid').val('');

            if(deptid>0){deptid=deptid;}else{deptid=0;}
            if(catid>0){catid=catid;}else{catid=0;} 
             if(lifeeventid>0){lifeeventid=lifeeventid;}else{lifeeventid=0;}    
             $.ajax({
              method:"post",
              dataType:"json",
                data: {catid:catid,deptid:deptid,lifeeventid:lifeeventid,keyword:keyword},
                url: '{{ route('getkeywordservice') }}',
                success: function (data) 
                { 
                  $("#servicedetview").html('');
                  if(data.servicecount>0)
                  {
                    $(".alphabet").removeClass("bg-primary text-white rounded-full page-button alphabet").addClass('rounded-full page-button alphabet');
                    $('#'+data.starts_with).removeClass("bg-primary text-white rounded-full page-button alphabet").addClass('bg-primary text-white rounded-full page-button alphabet');
                    $("#showingid").html('Showing '+data.servicecount+' out of '+data.totalservices+' services'); 
                    $.each(data.services, function (i)
                    {
                      var btnnameone='';
              var btnnametwo='';
              if(data.sessionbil==1)
                  {
                     btnnameone='Apply Online';
                     btnnametwo='View Details';
                  }
                  else
                  {
                    btnnameone='അപേക്ഷിക്കുക';
                    btnnametwo='കൂടുതൽ വിവരങ്ങൾ';
                  }

              $("#servicedetview").append('<div class="col text-center"><div class="card h-100"><div class="card-body"><div class="service-icon ">'+data.services[i].iconclass+'</div><h6 class="card-title">'+data.services[i].categoryname+'</h6><a href="'+data.services[i].serviceurl+'" target="_blank"><p class="card-text">'+data.services[i].servicetitle+'</p></a><p class="deptname">'+data.services[i].departmentname +'</p></div><div class="card-footer "><a href="'+data.services[i].serviceurl+'" class="btn btn-sm deplink-button mt-1" target="_blank">'+btnnameone+'</a>&nbsp;<a class="btn btn-sm btn-primary deplink-button mt-1 viewdetails" data-bs-toggle="modal" data-bs-target="#servicemoredetails" id="'+data.services[i].id+'">'+btnnametwo+'</a></div></div></div>');
                    });
                  }
                  else
                  {
                    $("#showingid").html('Showing '+data.servicecount+' out of '+data.totalservices+' services'); 
                    $("#servicedetview").html('');
                    swal("Sorry!", "No Service Data Found", "warning");
                    $("#servicedetview").append('<div class="col-xl-12  text-center">No Service Data Found</div>');
                  }
                }
                   
            });
          
     });/*Alphabet click*/






$(document).on("click", ".alphabet", function(event){
    var deptid= $('#departmentid').val('');
        var lifeeventid= $('#lifeeventid').val('');
        var catid= $('#categoryid').val('');
    var starts_with = $(this).attr('id');  
      $.ajax({
         method:"post",
         dataType:"json",
        data: {starts_with:starts_with},
        url: '{{ route('alphabetsearch') }}',
        success:function(data)
        { 
                    
          $("#servicedetview").html('');
            if(data.servicecount>0)
            {
              $(".alphabet").removeClass("bg-primary text-white rounded-full page-button alphabet").addClass('rounded-full page-button alphabet');
              $('#'+data.starts_with).removeClass("bg-primary text-white rounded-full page-button alphabet").addClass('bg-primary text-white rounded-full page-button alphabet');
              $("#showingid").html('Showing '+data.servicecount+' out of '+data.totalservices+' services'); 
              $.each(data.services, function (i)
              {
                 var btnnameone='';
              var btnnametwo='';
              if(data.sessionbil==1)
                  {
                     btnnameone='Apply Online';
                     btnnametwo='View Details';
                  }
                  else
                  {
                    btnnameone='അപേക്ഷിക്കുക';
                    btnnametwo='കൂടുതൽ വിവരങ്ങൾ';
                  }

              $("#servicedetview").append('<div class="col text-center"><div class="card h-100"><div class="card-body"><div class="service-icon ">'+data.services[i].iconclass+'</div><h6 class="card-title">'+data.services[i].categoryname+'</h6><a href="'+data.services[i].serviceurl+'" target="_blank"><p class="card-text">'+data.services[i].servicetitle+'</p></a><p class="deptname">'+data.services[i].departmentname +'</p></div><div class="card-footer "><a href="'+data.services[i].serviceurl+'" class="btn btn-sm deplink-button mt-1" target="_blank">'+btnnameone+'</a>&nbsp;<a class="btn btn-sm btn-primary deplink-button mt-1 viewdetails" data-bs-toggle="modal" data-bs-target="#servicemoredetails" id="'+data.services[i].id+'">'+btnnametwo+'</a></div></div></div>');
              });
            }
            else
            {
              $(".alphabet").removeClass("bg-primary text-white rounded-full page-button alphabet").addClass('rounded-full page-button alphabet');
              $('#'+data.starts_with).removeClass("bg-primary text-white rounded-full page-button alphabet").addClass('bg-primary text-white rounded-full page-button alphabet');
              $("#showingid").html('Showing '+data.servicecount+' out of '+data.totalservices+' services'); 
              $("#servicedetview").html('');
              swal("Sorry!", "No Service Data Found", "warning");
              $("#servicedetview").append('<div class="col-xl-12  text-center">No Service Data Found</div>');
            }
          }
            // error : function(data) 
            // {
            //     $("#servicedetview").html('');
            //     $("#servicedetview").append('<div class="col-md-12 btn-warning text-center">No Data Found</div>');
            // }
      });
    
  });


$(document).on("click", ".test", function(event){
    
    var starts_with = $(this).attr('id');  
      $.ajax({
         method:"get",
         dataType:"json",
        data: {starts_with:starts_with},
        url: '{{ route('janparichaylogin') }}',
        success:function(data)
        { 
                    
                setTimeout(function(){
                window.location.href=data.urls;
                },1000);
            },
            error : function(data) 
            {
                
            }
      });
    
  });
 


 $(document).on("click", ".viewdetails", function(event){
   
    var id = $(this).attr('id');  
      $.ajax({
       url :"/modalserviceview/"+id,
       dataType:"json",
       success:function(data)
        { 
                 
          $("#deptname").text(data.servicedata.departmentname);
          $("#sericecategory").text(data.servicedata.categoryname);
          $("#icondiv").html(data.servicedata.iconclass); 
          $("#servicetitle").html(data.servicedata.servicetitle);
          $('#servicemoredescription').html(data.servicedata.desc); 


          if(data.servicedata.daylimit!=null)
            {
               $('.servicewithinid').show();
                $('#servicewithin').html(data.servicedata.daylimit);
            }else{
               $('.servicewithinid').hide();
            }
              
            if(data.servicedata.fees!=null)
            {   $('.feespan').show();
                $('#feespan').append(data.servicedata.fees);
            }else{
              $('.feespan').hide();
            }
          
            $('#enqhead').html(data.sitecontrollblenq.title);


          $('#servicemodelapplyonline').html('<a href="'+data.servicedata.serviceurl+'" class="btn btn-sm bg-danger deplink-button mt-1" target="_blank">Apply Online</a><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>');
            $("#documentreqdiv").html('');
            if(data.supportdocument.length > 0)
            {
              
              
                $("#documentreqdiv").append(' <h6 class="mb-2 mt-2">'+data.sitecontrollbldoc.title+'</h6>');
               $.each( data.supportdocument, function(i) {
                $("#documentreqdiv").append('<span class="documentneeded">'+data.supportdocument[i].docname+'</span>&nbsp;&nbsp;');
               });

            }
            else
            {
              $("#documentreqdiv").empty();
            }

            if(data.servicedata.dep_emailid!=null && data.servicedata.dep_mobile!=null)
            {
              $("#enqhead").show();
            $("#enquiryid").append('<h5 class="mb-2 mt-2" id="enqhead"></h5>');

          }else{
            $("#enqhead").hide();
            $(".emailspan").hide();
            $(".mobilespan").hide();

          }

          if(data.servicedata.dep_emailid!=null)
            {
              $(".emailspan").show();
            $("#emailspan").append('<i class="lni lni-envelope"></i>&nbsp;&nbsp;'+data.servicedata.dep_emailid);

          }else{
              $(".emailspan").hide();
          }

          if(data.servicedata.dep_mobile!=null)
          {
              $(".mobilespan").show();
            $("#mobilespan").append('<i class="lni lni-phone-set"></i>&nbsp;&nbsp;Phone:'+data.servicedata.dep_mobile);

          }
          else{
              $(".mobilespan").hide();
          }
           
          $('#servicemoredetails').modal('show');
        }
      })
    
  });

 
  $( ".close1" ).click(function() {
      $('#transactionmodal').modal('hide');
        
  });


/*Validation */  










 

     

/*Document ready */
 });

 /*$(document).on("click", "#eng", function(event){  
      $.ajax({
       url :"/setbilingualval",
       dataType:"json",
       success:function(data)
        { 
               window.location.reload();   
          
        }
      })
    
    });
  
    $(document).on("click", "#mal", function(event){      
      $.ajax({
       url :"/setbilingualvalmal",
       dataType:"json",
       success:function(data)
        { 
             window.location.reload();    
          
        }
      })
    
    });*/

    $(document).on("change", ".lang", function(event){  

   if($(this).val() == 0){
      $.ajax({
       url :"/setbilingualval",
       dataType:"json",
       success:function(data)
        { 
               window.location.reload();   
          
        }
      })
   }else{
      $.ajax({
       url :"/setbilingualvalmal",
       dataType:"json",
       success:function(data)
        { 
             window.location.reload();    
          
        }
      })
   }
    
  
  });


    $(document).ready(function () {

$(document).on("click", ".modalwind", function(event){
   
    var id = $(this).attr('id');  
      $.ajax({
       url :"/modalpop/"+id,
       dataType:"json",
       success:function(data)
        { 
             console.log(data);     
          $('#contentdiv').html(data.resultdata.content);
          $('.modal-title').text(data.resultdata.title);
          $('#transactionmodal').modal('show');
        }
      })
    
  });

  $( ".close1" ).click(function() {
      $('#transactionmodal').modal('hide');   
  });
});
 
</script>