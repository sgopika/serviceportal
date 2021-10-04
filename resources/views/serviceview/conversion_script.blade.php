<style>
.fntlabel{
    font-weight: 300;
    font-weight: strong;
}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #3e2457;
}
a {
    color: rgb(0, 0, 0);
    text-decoration: none;
    background-color: transparent;
}
a:hover {
    color:  #a03064;
    text-decoration:underline;
}
.savbtn{
    background-color: #22269e;
    float: left;
}
.restbtn{
        float: right;
}
.has-error{
    border-color: red;
}
.topspace{
    margin-top:5px;
}
.calcdiv{
    width:200px;
    height:200px;
    background-color: rgb(255, 255, 255);
}
</style>
<script>
function onlyNumberKey(evt) {
         
         // Only ASCII character in that range allowed
         var ASCIICode = (evt.which) ? evt.which : evt.keyCode
         if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
             return false;
         return true;
     }
     $('#edist_reg_num').on('change',function(){
         var charRegExp = /^[0-9 '.-]+$/;
         var edist_reg_num=$('#edist_reg_num').val();
         if(edist_reg_num.length<3){
             $('#edist_reg_num').addClass('has-error');
             $('#edist_reg_num').focus();
             $('#applctntabval').val('span_edist_reg_num~Enter alteast three Numbers~edist_reg_num');
             $('#span_edist_reg_num').html('');
             $('#span_edist_reg_num').css("color","red");
             $('#span_edist_reg_num').html('Enter alteast three Numbers');
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else if (edist_reg_num.search(charRegExp) != 0) {
             $('#edist_reg_num').addClass('has-error');
             $('#edist_reg_num').val('');
             $('#edist_reg_num').focus();
             $('#span_edist_reg_num').html('');
             $('#span_edist_reg_num').css("color","red");
             $('#applctntabval').val('span_edist_reg_num~Invalid Characters . Digits only~edist_reg_num');
             $('#span_edist_reg_num').html('Invalid Characters . Digits only');
             // swal('Info', 'Invalid Characters . Alphabets only', 'info');
             $('#loader').hide();
         } else {
             $('#applctntabval').val("0");
             $('#span_edist_reg_num').html('');
             $('#edist_reg_num').removeClass('has-error');
             edist_reg_num = edist_reg_num;
         }
     });
     $('#cert_type').on('change',function(){
         var charRegExp = /^[0-9]+$/;
         var cert_type=$('#cert_type').val();
         if (cert_type.search(charRegExp) != 0) {
             $('#cert_type').addClass('has-error');
             $('#cert_type').val('');
             $('#cert_type').focus();
             $('#span_cert_type').html('');
             $('#span_cert_type').css("color","red");
             $('#applctntabval').val('span_cert_type~Invalid Characters . Alphabets only~cert_type');
             $('#span_cert_type').html("Invalid Characters . Alphabets only");
             // swal('Info', "Invalid Characters . Alphabets only", 'info');
             $('#loader').hide();
         } else {
             $('#span_cert_type').html('');
             $('#applctntabval').val("0");
             $('#span_cert_type').removeClass('has-error');
             cert_type =  cert_type;
         }
     });
     $('#cert_purpos').on('change',function(){
         var charRegExp = /^[0-9]+$/;
         var cert_purpos=$('#cert_purpos').val();
         if (cert_purpos.search(charRegExp) != 0) {
             $('#cert_purpos').addClass('has-error');
             $('#cert_purpos').val('');
             $('#cert_purpos').focus();
             $('#span_cert_purpos').html('');
             $('#span_cert_purpos').css("color","red");
             $('#applctntabval').val('span_cert_purpos~Please seect Valid option~cert_purpos');
             $('#span_cert_purpos').html("Please seect Valid option");
             // swal('Info', "Please seect Valid option", 'info');
             $('#loader').hide();
         } else {
             $('#span_cert_purpos').html('');
             $('#applctntabval').val("0");
             $('#cert_purpos').removeClass('has-error');
             cert_purpos = cert_purpos;
         }
     });
     
     $('#to_be_prod_befor').on('change',function(){
         var charRegExp = /^[a-zA-Z '.-]+$/;
         var to_be_prod_befor=$('#to_be_prod_befor').val();
         if(to_be_prod_befor.length<3){
             $('#to_be_prod_befor').addClass('has-error');
             $('#to_be_prod_befor').focus();
             $('#applctntabval').val('span_to_be_prodcd~Enter alteast three Characters~to_be_prod_befor');
             $('#span_to_be_prodcd').html('');
             $('#span_to_be_prodcd').css("color","red");
             $('#span_to_be_prodcd').html('Enter alteast three Characters');
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else if (to_be_prod_befor.search(charRegExp) != 0) {
             $('#to_be_prod_befor').addClass('has-error');
             $('#to_be_prod_befor').val('');
             $('#to_be_prod_befor').focus();
             $('#span_to_be_prodcd').html('');
             $('#span_to_be_prodcd').css("color","red");
             $('#applctntabval').val('span_to_be_prodcd~Invalid Characters . Alphabets only~to_be_prod_befor');
             $('#span_to_be_prodcd').html('Invalid Characters . Alphabets only');
             // swal('Info', 'Invalid Characters . Alphabets only', 'info');
             $('#loader').hide();
         } else {
             $('#applctntabval').val("0");
             $('#span_to_be_prodcd').html('');
             $('#to_be_prod_befor').removeClass('has-error');
             to_be_prod_befor = to_be_prod_befor;
         }
     });
     
     $('#religionOld').on('change',function(){
         var charRegExp = /^[0-9]{1,4}$/;
         var religionOld=$('#religionOld').val();
          if (religionOld.search(charRegExp) != 0) {
             $('#religionOld').addClass('has-error');
             $('#religionOld').val('');
             $('#religionOld').focus();
             $('#span_religionOld').html('');
             $('#span_religionOld').css("color","red");
             $('#applctntabval').val('span_religionOld~Please select a valid option~religionOld');
             $('#span_religionOld').html("Please select a valid option");
             // swal('Info', "Please select a valid option", 'info');
             $('#loader').hide();
         } else {
             $('#span_religionOld').html('');
             $('#applctntabval').val("0");
             $('#religionOld').removeClass('has-error');
             religionOld = religionOld;
         }
     });
     
     $('#Catgry_bfre').on('change',function(){
         var charRegExp = /^[0-9]{1,4}$/;
         var Catgry_bfre=$('#Catgry_bfre').val();
         if (Catgry_bfre.search(charRegExp) != 0) {
             $('#Catgry_bfre').addClass('has-error');
             $('#Catgry_bfre').val('');
             $('#Catgry_bfre').focus();
             $('#span_Catgry_bfre').html('');
             $('#span_Catgry_bfre').css("color","red");
             $('#applctntabval').val('span_Catgry_bfre~Please select a valid option~Catgry_bfre');
             $('#span_Catgry_bfre').html("Please select a valid option");
             // swal('Info', "Please select a valid option", 'info');
             $('#loader').hide();
         } else {
             $('#span_Catgry_bfre').html('');
             $('#applctntabval').val("0");
             $('#Catgry_bfre').removeClass('has-error');
             Catgry_bfre = Catgry_bfre;
         }
     });
     
     $('#Caste_bfre').on('change',function(){
         var charRegExp = /^[0-9]{1,4}$/;
         var Caste_bfre=$('#Caste_bfre').val();
         if (Caste_bfre.search(charRegExp) != 0) {
             $('#Caste_bfre').addClass('has-error');
             $('#Caste_bfre').val('');
             $('#Caste_bfre').focus();
             $('#span_Caste_bfre').html('');
             $('#span_Caste_bfre').css("color","red");
             $('#applctntabval').val('span_Caste_bfre~Please select a valid option~Caste_bfre');
             $('#span_Caste_bfre').html("Please select a valid option");
             // swal('Info', "Please select a valid option", 'info');
             $('#loader').hide();
         } else {
             $('#span_Caste_bfre').html('');
             $('#applctntabval').val("0");
             $('#Caste_bfre').removeClass('has-error');
             Caste_bfre = Caste_bfre;
         }
     });
     
     $('#name_befor').on('change',function(){
         var charRegExp = /^[a-zA-Z '.-]+$/;
         var name_befor=$('#name_befor').val();
         if(name_befor.length<3){
             $('#name_befor').addClass('has-error');
             $('#name_befor').focus();
             $('#applctntabval').val('span_name_befor~Enter alteast three Characters~name_befor');
             $('#span_name_befor').html('');
             $('#span_name_befor').css("color","red");
             $('#span_name_befor').html('Enter alteast three Characters');
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else if (name_befor.search(charRegExp) != 0) {
             $('#name_befor').addClass('has-error');
             $('#name_befor').val('');
             $('#name_befor').focus();
             $('#span_name_befor').html('');
             $('#span_name_befor').css("color","red");
             $('#applctntabval').val('span_name_befor~Invalid Characters . Alphabets only~name_befor');
             $('#span_name_befor').html('Invalid Characters . Alphabets only');
             // swal('Info', 'Invalid Characters . Alphabets only', 'info');
             $('#loader').hide();
         } else {
             $('#applctntabval').val("0");
             $('#span_name_befor').html('');
             $('#name_befor').removeClass('has-error');
             name_befor = name_befor;
         }
     });
     
     $('#cast_certif_issued_by').on('change',function(){
         var charRegExp = /^[a-zA-Z '.-]+$/;
         var cast_certif_issued_by=$('#cast_certif_issued_by').val();
         if (cast_certif_issued_by.search(charRegExp) != 0) {
             $('#cast_certif_issued_by').addClass('has-error');
             $('#cast_certif_issued_by').val('');
             $('#cast_certif_issued_by').focus();
             $('#span_cast_certif_issued_by').html('');
             $('#span_cast_certif_issued_by').css("color","red");
             $('#applctntabval').val('span_cast_certif_issued_by~Invalid Characters . Alphabets only~cast_certif_issued_by');
             $('#span_cast_certif_issued_by').html('Invalid Characters . Alphabets only');
             // swal('Info', 'Invalid Characters . Alphabets only', 'info');
             $('#loader').hide();
         } else {
             $('#applctntabval').val("0");
             $('#span_cast_certif_issued_by').html('');
             $('#cast_certif_issued_by').removeClass('has-error');
             cast_certif_issued_by = cast_certif_issued_by;
         }
     });
     
     $('#date_caste_cert').on('change',function(){
         
         var date_caste_cert = $('#date_caste_cert').val(); 
     //     alert(date_caste_cert);  
         var charRegExp = /^\d{4}-\d{2}-\d{2}$/;
         if(date_caste_cert.length==''||date_caste_cert.length==0){
             Er_flag=1;
             $('#date_caste_cert').addClass('has-error');
             $('#date_caste_cert').focus();
             $('#span_date_caste_cert').html('');
             $('#applctntabval').val('span_date_caste_cert~Please enter fDate of Certificate isseued~date_caste_cert');
             $('#span_date_caste_cert').css("color","red");
             $('#span_date_caste_cert').html('Please enter Date ofhh Certificate isseued');
             $('#date_caste_cert').val('');        
             $('#loader').hide();
         }else{
             $('#date_caste_cert').removeClass('has-error');
             $('#span_date_caste_cert').html('');
             $('#applctntabval').val("0");
         }
         if (religous_authority.search(charRegExp) != 0) {
             $('#date_caste_cert').addClass('has-error');
             $('#date_caste_cert').val('');
             $('#date_caste_cert').focus();
             $('#span_date_caste_cert').html('');
             $('#span_date_caste_cert').css("color","red");
             $('#applctntabval').val('span_date_caste_cert~Invalid dateformat~date_caste_cert');
             $('#span_date_caste_cert').html("Invalid dateformat");
             // swal('Info', "Invalid Characters . Alphabets only", 'info');
             $('#loader').hide();
         } else {
             $('#span_date_caste_cert').html('');
             $('#applctntabval').val("0");
             $('#date_caste_cert').removeClass('has-error');
             date_caste_cert = date_caste_cert;
         }
     });
     
     $('#religous_authority').on('change',function(){
         var charRegExp = /^[a-zA-Z '.-]+$/;
         var religous_authority=$('#religous_authority').val();
        if (religous_authority.search(charRegExp) != 0) {
             $('#religous_authority').addClass('has-error');
             $('#religous_authority').val('');
             $('#religous_authority').focus();
             $('#span_religous_authority').html('');
             $('#span_religous_authority').css("color","red");
             $('#applctntabval').val('span_religous_authority~Invalid Characters . Alphabets only~religous_authority');
             $('#span_religous_authority').html("Invalid Characters . Alphabets only");
             // swal('Info', "Invalid Characters . Alphabets only", 'info');
             $('#loader').hide();
         } else {
             $('#span_religous_authority').html('');
             $('#applctntabval').val("0");
             $('#religous_authority').removeClass('has-error');
             religous_authority = religous_authority;
         }
     });
     
     $('#Applcnt_name').on('change',function(){
         var charRegExp = /^[a-zA-Z '.-]+$/;
         var Applcnt_name=$('#Applcnt_name').val();
         if(Applcnt_name.length<3){
             $('#Applcnt_name').addClass('has-error');
             $('#Applcnt_name').focus();
             $('#span_Applcnt_name').html('');
             $('#span_Applcnt_name').css("color","red");
             $('#applctntabval').val('span_to_be_prodcd~Enter alteast three Characters~Applcnt_name');
             $('#span_Applcnt_name').html("Enter alteast three Characters");
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else if (Applcnt_name.search(charRegExp) != 0) {
             $('#Applcnt_name').addClass('has-error');
             $('#Applcnt_name').val('');
             $('#Applcnt_name').focus();
             $('#span_Applcnt_name').html('');
             $('#span_Applcnt_name').css("color","red");
             $('#applctntabval').val('span_Applcnt_name~Invalid Characters . Alphabets only~Applcnt_name');
             $('#span_Applcnt_name').html("Invalid Characters . Alphabets only");
             // swal('Info', "Invalid Characters . Alphabets only", 'info');
             $('#loader').hide();
         } else {
             $('#span_Applcnt_name').html('');
             $('#applctntabval').val("0");
             $('#Applcnt_name').removeClass('has-error');
             Applcnt_name = Applcnt_name;
         }
     });
     
     $('#cert_reltn').on('change',function(){
         var charRegExp = /^[0-9]+$/;
         var cert_reltn=$('#cert_reltn').val();
         if (cert_reltn.search(charRegExp) != 0) {
             $('#cert_reltn').addClass('has-error');
             $('#cert_reltn').val('');
             $('#cert_reltn').focus();
             $('#span_cert_reltn').html('');
             $('#span_cert_reltn').css("color","red");
             $('#applctntabval').val('span_cert_reltn~Invalid Characters . Alphabets only~cert_reltn');
             $('#span_cert_reltn').html("Invalid Characters . Alphabets only");
             // swal('Info', "Invalid Characters . Alphabets only", 'info');
             $('#loader').hide();
         } else {
             $('#span_cert_reltn').html('');
             $('#applctntabval').val("0");
             $('#cert_reltn').removeClass('has-error');
             cert_reltn = cert_reltn;
         }
     });
     
     $('#file_ration').on('change',function(){    
         var type=this.files[0].type;
         if ((type=="")||(type=="application/pdf")||(type =='application/vnd.pdf')||(type =='application/PDF')||(type =='application/VND.PDF'))
          {
             var size = this.files[0].size;
             $('#span_file_ration').html('');
             if (size > 1048576)// checks the file more than 1 MB
             {
                 $('#filetabval').val('span_file_ration~File size must be less than 1 MB~file_ration');
                 $('#span_file_ration').html('');
                 $('#span_file_ration').css("color","red");
                 $('#span_file_ration').html('File size must be less than 1 MB'); 
                 $('#file_ration').focus();   
                 //         
               
               
             } else {
                 $('#filetabval').val("0");
                 $('#span_file_ration').html('');
                
                
             }
             $('#filetabval').val("0");
              
          } else {
             $('#filetabval').val('span_file_ration~File must be a pdf~file_ration');
             $('#span_file_ration').html('');
             $('#span_file_ration').css("color","red");
             $('#span_file_ration').html('File must be a pdf'); 
             $('#file_ration').focus();
              
          }  
     
     });
     
     $('#file_school_certfct').on('change',function(){    
         var type=this.files[0].type;
         if ((type=="")||(type=="application/pdf")||(type =='application/vnd.pdf')||(type =='application/PDF')||(type =='application/VND.PDF'))
          {
             var size = this.files[0].size;
             $('#span_file_school_certfct').html('');
             if (size > 1048576)// checks the file more than 1 MB
             {
                 $('#filetabval').val('span_file_school_certfct~File size must be less than 1 MB~file_school_certfct');
                 $('#span_file_school_certfct').html('');
                 $('#span_file_school_certfct').css("color","red");
                 $('#span_file_school_certfct').html('File size must be less than 1 MB'); 
                 $('#file_school_certfct').focus();   
                 //         
               
               
             } else {
                 $('#filetabval').val("0");
                 $('#span_file_school_certfct').html('');
                
                
             }
             $('#filetabval').val("0");
              
          } else {
             $('#filetabval').val('span_file_school_certfct~File must be a pdf~file_school_certfct');
             $('#span_file_school_certfct').html('');
             $('#span_file_school_certfct').css("color","red");
             $('#span_file_school_certfct').html('File must be a pdf'); 
             $('#file_school_certfct').focus();
              
          }  
     
     });
     
     $('#file_affidavit').on('change',function(){    
         var type=this.files[0].type;
         if ((type=="")||(type=="application/pdf")||(type =='application/vnd.pdf')||(type =='application/PDF')||(type =='application/VND.PDF'))
          {
             var size = this.files[0].size;
             $('#span_file_affidavit').html('');
             if (size > 1048576)// checks the file more than 1 MB
             {
                 $('#filetabval').val('span_file_affidavit~File size must be less than 1 MB~file_affidavit');            
                 $('#span_file_affidavit').html('');
                 $('#span_file_affidavit').css("color","red");
                 $('#span_file_affidavit').html('File size must be less than 1 MB'); 
                 $('#file_affidavit').focus();   
                 //         
               
               
             } else {
                 $('#filetabval').val("0");
                 $('#span_file_affidavit').html('');
                
                
             }
             $('#filetabval').val("0");
              
          } else {
             $('#filetabval').val('span_file_affidavit~File must be a pdf~file_affidavit');
             $('#span_file_affidavit').html('');
             $('#span_file_affidavit').css("color","red");
             $('#span_file_affidavit').html('File must be a pdf'); 
             $('#file_affidavit').focus();
              
          }  
     
     });
     
     $('#file_cover_cert').on('change',function(){    
         var type=this.files[0].type;
         if ((type=="")||(type=="application/pdf")||(type =='application/vnd.pdf')||(type =='application/PDF')||(type =='application/VND.PDF'))
          {
             var size = this.files[0].size;
             $('#span_file_cover_cert').html('');
             if (size > 1048576)// checks the file more than 1 MB
             {
                 $('#filetabval').val('span_file_cover_cert~File size must be less than 1 MB~file_cover_cert');
                 $('#span_file_cover_cert').html('');
                 $('#span_file_cover_cert').css("color","red");
                 $('#span_file_cover_cert').html('File size must be less than 1 MB'); 
                 $('#file_cover_cert').focus();   
                 //         
               
               
             } else {
                 $('#filetabval').val("0");
                 $('#span_file_cover_cert').html('');
                
                
             }
             $('#filetabval').val("0");
              
          } else {
             $('#filetabval').val('span_file_cover_cert~File must be a pdf~file_cover_cert');       
             $('#span_file_cover_cert').html('');
             $('#span_file_cover_cert').css("color","red");
             $('#span_file_cover_cert').html('File must be a pdf'); 
             $('#file_cover_cert').focus();
              
          }  
     
     });
     
     $('#remarks_ration').on('change',function(){
         var charRegExp = /^[a-zA-Z '.-]+$/;
         var remarks_ration=$('#remarks_ration').val();
         if(remarks_ration.length<3){
             $('#remarks_ration').addClass('has-error');
             $('#remarks_ration').focus();
             $('#span_remarks_ration').html('');
             $('#span_remarks_ration').css("color","red");
             $('#filetabval').val('span_remarks_ration~Enter alteast three Characters~remarks_ration');
             $('#span_remarks_ration').html("Enter alteast three Characters");
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else if (remarks_ration.search(charRegExp) != 0) {
             $('#remarks_ration').addClass('has-error');
             $('#remarks_ration').val('');
             $('#remarks_ration').focus();
             $('#span_remarks_ration').html('');
             $('#span_remarks_ration').css("color","red");
             $('#filetabval').val('span_remarks_ration~Invalid Characters . Alphabets only~remarks_ration');
             $('#span_remarks_ration').html("Invalid Characters . Alphabets only");
             // swal('Info', "Invalid Characters . Alphabets only", 'info');
             $('#loader').hide();
         } else {
             $('#filetabval').val("0");
             $('#span_remarks_ration').html('');
             $('#remarks_ration').removeClass('has-error');
             remarks_ration = remarks_ration;
         }
     });
     
     $('#doc_ref_no_ration').on('change',function(){
         var charRegExp = /^[a-zA-Z '.-]+$/;
         var doc_ref_no_ration=$('#doc_ref_no_ration').val();
         if(doc_ref_no_ration.length<3){
             $('#doc_ref_no_ration').addClass('has-error');
             $('#doc_ref_no_ration').focus();
             $('#span_doc_ref_no_ration').html('');
             $('#span_doc_ref_no_ration').css("color","red");
             $('#filetabval').val('span_doc_ref_no_ration~Enter alteast three Characters~doc_ref_no_ration');
             $('#span_doc_ref_no_ration').html("Enter alteast three Characters.");
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else if (doc_ref_no_ration.search(charRegExp) != 0) {
             $('#doc_ref_no_ration').addClass('has-error');
             $('#doc_ref_no_ration').val('');
             $('#doc_ref_no_ration').focus();
             $('#span_doc_ref_no_ration').html('');
             $('#span_doc_ref_no_ration').css("color","red");
             $('#filetabval').val('span_doc_ref_no_ration~Invalid Characters . Alphabets only~doc_ref_no_ration');
             $('#span_doc_ref_no_ration').html("Invalid Characters . Alphabets only");
             // swal('Info', "Invalid Characters . Alphabets only", 'info');
             $('#loader').hide();
         } else {
             $('#filetabval').val("0");
             $('#span_doc_ref_no_ration').html('');
             $('#doc_ref_no_ration').removeClass('has-error');
             doc_ref_no_ration = doc_ref_no_ration;
         }
     });
     
     $('#remarks_school_certfct').on('change',function(){
         var charRegExp = /^[a-zA-Z '.-]+$/;
         var remarks_school_certfct=$('#remarks_school_certfct').val();
         if(remarks_school_certfct.length<3){
             $('#remarks_school_certfct').addClass('has-error');
             $('#remarks_school_certfct').focus();
             $('#span_remarks_school_certfct').html('');
             $('#span_remarks_school_certfct').css("color","red");
             $('#filetabval').val('span_remarks_school_certfct~Enter alteast three Characters~remarks_school_certfct');
             $('#span_remarks_school_certfct').html("Enter alteast three Characters.");
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else if (remarks_school_certfct.search(charRegExp) != 0) {
             $('#remarks_school_certfct').addClass('has-error');
             $('#remarks_school_certfct').val('');
             $('#remarks_school_certfct').focus();
             $('#span_remarks_school_certfct').html('');
             $('#span_remarks_school_certfct').css("color","red");
             $('#filetabval').val('span_remarks_school_certfct~Invalid Characters . Alphabets only~remarks_school_certfct');
             $('#span_remarks_school_certfct').html("Invalid Characters . Alphabets only");
             // swal('Info', "Invalid Characters . Alphabets only", 'info');
             $('#loader').hide();
         } else {
             $('#filetabval').val("0");
             $('#span_remarks_school_certfct').html('');
             $('#remarks_school_certfct').removeClass('has-error');
             remarks_school_certfct = remarks_school_certfct;
         }
     });
     
     $('#doc_ref_no_school_certfct').on('change',function(){
         var charRegExp = /^[a-zA-Z '.-]+$/;
         var doc_ref_no_school_certfct=$('#doc_ref_no_school_certfct').val();
         if(doc_ref_no_school_certfct.length<3){
             $('#doc_ref_no_school_certfct').addClass('has-error');
             $('#doc_ref_no_school_certfct').focus();
             $('#span_doc_ref_no_school_certfct').html('');
             $('#span_doc_ref_no_school_certfct').css("color","red");
             $('#filetabval').val('span_doc_ref_no_school_certfct~Enter alteast three Characters~remarks_school_certfct');
             $('#span_doc_ref_no_school_certfct').html("Enter alteast three Characters");
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else if (doc_ref_no_school_certfct.search(charRegExp) != 0) {
             $('#doc_ref_no_school_certfct').addClass('has-error');
             $('#doc_ref_no_school_certfct').val('');
             $('#doc_ref_no_school_certfct').focus();
             $('#span_doc_ref_no_school_certfct').html('');
             $('#span_doc_ref_no_school_certfct').css("color","red");
             $('#filetabval').val('span_doc_ref_no_school_certfct~Invalid Characters . Alphabets only~remarks_school_certfct');
             $('#span_doc_ref_no_school_certfct').html("Invalid Characters . Alphabets only");
             // swal('Info', "Invalid Characters . Alphabets only", 'info');
             $('#loader').hide();
         } else {
             $('#filetabval').val("0");
             $('#span_doc_ref_no_school_certfct').html('');
             $('#doc_ref_no_school_certfct').removeClass('has-error');
             doc_ref_no_school_certfct = doc_ref_no_school_certfct;
         }
     });
     
     $('#remarks_Affidavit').on('change',function(){
         var charRegExp = /^[a-zA-Z '.-]+$/;
         var remarks_Affidavit=$('#remarks_Affidavit').val();
         if(remarks_Affidavit.length<3){
             $('#remarks_Affidavit').addClass('has-error');
             $('#remarks_Affidavit').focus();
             $('#span_remarks_Affidavit').html('');
             $('#span_remarks_Affidavit').css("color","red");
             $('#filetabval').val('span_remarks_Affidavit~Enter alteast three Characters~remarks_Affidavit');
             $('#span_remarks_Affidavit').html("Enter alteast three Characters");
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else if (remarks_Affidavit.search(charRegExp) != 0) {
             $('#remarks_Affidavit').addClass('has-error');
             $('#remarks_Affidavit').val('');
             $('#remarks_Affidavit').focus();
             $('#span_remarks_Affidavit').html('');
             $('#span_remarks_Affidavit').css("color","red");
             $('#filetabval').val('span_remarks_Affidavit~Invalid Characters . Alphabets only~remarks_Affidavit');
             $('#span_remarks_Affidavit').html("Invalid Characters . Alphabets only");
             // swal('Info', "Invalid Characters . Alphabets only", 'info');
             $('#loader').hide();
         } else {
             $('#filetabval').val("0");
             $('#span_remarks_Affidavit').html('');
             $('#remarks_Affidavit').removeClass('has-error');
             remarks_Affidavit = remarks_Affidavit;
         }
     });
     
     $('#doc_ref_no_Affidavit').on('change',function(){
         var charRegExp = /^[a-zA-Z '.-]+$/;
         var doc_ref_no_Affidavit=$('#doc_ref_no_Affidavit').val();
         if(doc_ref_no_Affidavit.length<3){
             $('#doc_ref_no_Affidavit').addClass('has-error');
             $('#doc_ref_no_Affidavit').focus();
             $('#span_doc_ref_no_Affidavit').html('');
             $('#span_doc_ref_no_Affidavit').css("color","red");
             $('#filetabval').val('span_doc_ref_no_Affidavit~Enter alteast three Characters~doc_ref_no_Affidavit');
             $('#span_doc_ref_no_Affidavit').html("Enter alteast three Characters");
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else if (doc_ref_no_Affidavit.search(charRegExp) != 0) {
             $('#doc_ref_no_Affidavit').addClass('has-error');
             $('#doc_ref_no_Affidavit').val('');
             $('#doc_ref_no_Affidavit').focus();
             $('#span_doc_ref_no_Affidavit').html('');
             $('#span_doc_ref_no_Affidavit').css("color","red");
             $('#span_doc_ref_no_Affidavit').html("Invalid Characters . Alphabets only");
             $('#filetabval').val('span_doc_ref_no_Affidavit~Invalid Characters . Alphabets only~doc_ref_no_Affidavit');
     
             // swal('Info', "Invalid Characters . Alphabets only", 'info');
             $('#loader').hide();
         } else {
             $('#filetabval').val("0");
             $('#span_doc_ref_no_Affidavit').html('');
             $('#doc_ref_no_Affidavit').removeClass('has-error');
             doc_ref_no_Affidavit = doc_ref_no_Affidavit;
         }
     });
     
     $('#remarks_cover_cert').on('change',function(){
         var charRegExp = /^[a-zA-Z '.-]+$/;
         var remarks_cover_cert=$('#remarks_cover_cert').val();
         if(remarks_cover_cert.length<3){
             $('#remarks_cover_cert').addClass('has-error');
             $('#remarks_cover_cert').focus();
             $('#span_remarks_cover_cert').html('');
             $('#span_remarks_cover_cert').css("color","red");
             $('#filetabval').val('span_remarks_cover_cert~Enter alteast three Characters~remarks_cover_cert');
             $('#span_remarks_cover_cert').html("Enter alteast three Characters.");
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else if (remarks_cover_cert.search(charRegExp) != 0) {
             $('#remarks_cover_cert').addClass('has-error');
             $('#remarks_cover_cert').val('');
             $('#remarks_cover_cert').focus();
             $('#span_remarks_cover_cert').html('');
             $('#span_remarks_cover_cert').css("color","red");
             $('#filetabval').val('span_remarks_cover_cert~Invalid Characters . Alphabets only~remarks_cover_cert');
     
             $('#span_remarks_cover_cert').html("Invalid Characters . Alphabets only");
             // swal('Info', "Invalid Characters . Alphabets only", 'info');
             $('#loader').hide();
         } else {
             $('#filetabval').val("0");
             $('#span_remarks_cover_cert').html('');
             $('#remarks_cover_cert').removeClass('has-error');
             remarks_cover_cert = remarks_cover_cert;
         }
     });
     
     $('#doc_ref_no_cover_cert').on('change',function(){
         var charRegExp = /^[a-zA-Z '.-]+$/;
         var doc_ref_no_cover_cert=$('#doc_ref_no_cover_cert').val();
         if(doc_ref_no_cover_cert.length<3){
             $('#doc_ref_no_cover_cert').addClass('has-error');
             $('#doc_ref_no_cover_cert').focus();
             $('#span_doc_ref_no_cover_cert').html('');
             $('#span_doc_ref_no_cover_cert').css("color","red");
             $('#filetabval').val('span_doc_ref_no_cover_cert~Enter alteast three Characters~doc_ref_no_cover_cert');
             $('#span_doc_ref_no_cover_cert').html("Enter alteast three Characters.");
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else if (doc_ref_no_cover_cert.search(charRegExp) != 0) {
             $('#doc_ref_no_cover_cert').addClass('has-error');
             $('#doc_ref_no_cover_cert').val('');
             $('#doc_ref_no_cover_cert').focus();
             $('#span_doc_ref_no_cover_cert').html('');
             $('#span_doc_ref_no_cover_cert').css("color","red");
             $('#filetabval').val('span_doc_ref_no_cover_cert~Invalid Characters . Alphabets only~doc_ref_no_cover_cert');
             $('#span_doc_ref_no_cover_cert').html("Invalid Characters . Alphabets only");
             // swal('Info', "Invalid Characters . Alphabets only", 'info');
             $('#loader').hide();
         } else {
             $('#filetabval').val("0");
             $('#span_doc_ref_no_cover_cert').html('');
             $('#doc_ref_no_cover_cert').removeClass('has-error');
             doc_ref_no_cover_cert = doc_ref_no_cover_cert;
         }
     });
     
     
     function validate_form(){
         var applctntabval=$('#applctntabval').val();
         var edist_reg_num=$('#edist_reg_num').val();
         var to_be_prod_befor=$('#to_be_prod_befor').val();
     
         var religionOld=$('#religionOld').val();
         var Catgry_bfre=$('#Catgry_bfre').val();
         var Caste_bfre=$('#Caste_bfre').val();
         var name_befor=$('#name_befor').val();
         var cast_certif_issued_by=$('#cast_certif_issued_by').val();
         var date_caste_cert=$('#date_caste_cert').val();
         var religous_authority=$('#religous_authority').val();
     
         var Applcnt_name=$('#Applcnt_name').val();
         var Er_flag=0;
         var ErMsg='';
         var cert_type=$('#cert_type').val();
         var cert_purpos=$('#cert_purpos').val();
         var cert_reltn=$('#cert_reltn').val();
         // alert("gg"+cert_type+"hh"+cert_purpos+"kk"+cert_reltn);
         if(edist_reg_num.length<3){
             Er_flag=1;
             $('#edist_reg_num').addClass('has-error');
             $('#edist_reg_num').focus();
             $('#span_edist_reg_num').html('');
             $('#applctntabval').val('span_edist_reg_num~Enter alteast three Numbers~edist_reg_num');
             $('#span_edist_reg_num').css("color","red");
             $('#span_edist_reg_num').html('Enter alteast three Numbers');
             $('#edist_reg_num').val('');        
             $('#loader').hide();
         }else{
             $('#span_edist_reg_num').html('');
             $('#edist_reg_num').removeClass('has-error');
             $('#applctntabval').val("0");
         }
         if((cert_type==0)||(cert_type=='')||(cert_type==null)){
             Er_flag=1;
             $('#cert_type').addClass('has-error');
             $('#cert_type').focus();
             $('#span_cert_type').html('');
             $('#applctntabval').val('span_cert_type~Please enter certificate type~cert_type');
             $('#span_cert_type').css("color","red");
             $('#span_cert_type').html('Please enter certificate type');
             $('#cert_type').val('');        
             $('#loader').hide();
         }else{
             $('#span_cert_type').html('');
             $('#cert_type').removeClass('has-error');
             $('#applctntabval').val("0");
         }
         if((cert_purpos==0)||(cert_purpos=='')||(cert_purpos==null)){
             Er_flag=1;
             $('#cert_purpos').addClass('has-error');
             $('#cert_purpos').focus();
             $('#span_cert_purpos').html('');
             $('#applctntabval').val('span_cert_purpos~Please enter certificate purpose~cert_purpos');
             $('#span_cert_purpos').css("color","red");
             $('#span_cert_purpos').html('Please enter certificate purpose');
             $('#cert_purpos').val('');        
             $('#loader').hide();
         }else{
             $('#span_cert_purpos').html('');
             $('#cert_purpos').removeClass('has-error');
             $('#applctntabval').val("0");
         }
         if(to_be_prod_befor.length<3){
             Er_flag=1;
             $('#to_be_prod_befor').addClass('has-error');
             $('#to_be_prod_befor').focus();
             $('#span_to_be_prodcd').html('');
             $('#applctntabval').val('span_to_be_prodcd~Enter alteast three Characters~to_be_prod_befor');
             $('#span_to_be_prodcd').css("color","red");
             $('#span_to_be_prodcd').html('Invalid Characters . Alphabets only');
             $('#to_be_prod_befor').val('');        
             $('#loader').hide();
         }else{
             $('#span_to_be_prodcd').html('');
             $('#to_be_prod_befor').removeClass('has-error');
             $('#applctntabval').val("0");
         }
         if((religionOld==0)||(religionOld=='')||(religionOld==null)){
             Er_flag=1;
             $('#religionOld').addClass('has-error');
             $('#religionOld').focus();
             $('#span_religionOld').html('');
             $('#applctntabval').val('span_religionOld~Please enter Religion before conversion~religionOld');
             $('#span_religionOld').css("color","red");
             $('#span_religionOld').html('Please enter Religion before conversion');
             $('#religionOld').val('');        
             $('#loader').hide();
         }else{
             $('#religionOld').removeClass('has-error');
             $('#span_religionOld').html('');
             $('#applctntabval').val("0");
         }
         if((Catgry_bfre==0)||(Catgry_bfre=='')||(Catgry_bfre==null)){
             Er_flag=1;
             $('#Catgry_bfre').addClass('has-error');
             $('#Catgry_bfre').focus();
             $('#span_Catgry_bfre').html('');
             $('#applctntabval').val('span_Catgry_bfre~Please enter Category before conversion~Catgry_bfre');
             $('#span_Catgry_bfre').css("color","red");
             $('#span_Catgry_bfre').html('Please enter Category before conversion');
             $('#Catgry_bfre').val('');        
             $('#loader').hide();
         }else{
             $('#Catgry_bfre').removeClass('has-error');
             $('#span_Catgry_bfre').html('');
             $('#applctntabval').val("0");
         }
         if((Caste_bfre==0)||(Caste_bfre=='')||(Caste_bfre==null)){
             Er_flag=1;
             $('#Caste_bfre').addClass('has-error');
             $('#Caste_bfre').focus();
             $('#span_Caste_bfre').html('');
             $('#applctntabval').val('span_Caste_bfre~Please enter Caste before conversion~Caste_bfre');
             $('#span_Caste_bfre').css("color","red");
             $('#span_Caste_bfre').html('Please enter Caste before conversion');
             $('#Caste_bfre').val('');        
             $('#loader').hide();
         }else{
             $('#Caste_bfre').removeClass('has-error');
             $('#span_Caste_bfre').html('');
             $('#applctntabval').val("0");
         }
         if((name_befor==0)||(name_befor=='')||(name_befor==null)){
             Er_flag=1;
             $('#name_befor').addClass('has-error');
             $('#name_befor').focus();
             $('#span_name_befor').html('');
             $('#applctntabval').val('span_name_befor~Please enter Name before conversion~name_befor');
             $('#span_name_befor').css("color","red");
             $('#span_name_befor').html('Please enter Name before conversion');
             $('#name_befor').val('');        
             $('#loader').hide();
         }else{
             $('#name_befor').removeClass('has-error');
             $('#span_name_befor').html('');
             $('#applctntabval').val("0");
         }
     
         if((cast_certif_issued_by==0)||(cast_certif_issued_by=='')||(cast_certif_issued_by==null)){
             Er_flag=1;
             $('#cast_certif_issued_by').addClass('has-error');
             $('#cast_certif_issued_by').focus();
             $('#span_cast_certif_issued_by').html('');
             $('#applctntabval').val('span_cast_certif_issued_by~Please enter Certificate No(issued by the religious authority)~cast_certif_issued_by');
             $('#span_cast_certif_issued_by').css("color","red");
             $('#span_cast_certif_issued_by').html('Please enter Certificate No(issued by the religious authority)');
             $('#cast_certif_issued_by').val('');        
             $('#loader').hide();
         }else{
             $('#cast_certif_issued_by').removeClass('has-error');
             $('#span_cast_certif_issued_by').html('');
             $('#applctntabval').val("0");
         }
     // alert(date_caste_cert+date_caste_cert.length);
         if(date_caste_cert.length==''||date_caste_cert.length==0){
             Er_flag=1;
             $('#date_caste_cert').addClass('has-error');
             $('#date_caste_cert').focus();
             $('#span_date_caste_cert').html('');
             $('#applctntabval').val('span_date_caste_cert~Please enter fDate of Certificate isseued~date_caste_cert');
             $('#span_date_caste_cert').css("color","red");
             $('#span_date_caste_cert').html('Please enter Date ofhh Certificate isseued');
             $('#date_caste_cert').val('');        
             $('#loader').hide();
         }else{
             $('#date_caste_cert').removeClass('has-error');
             $('#span_date_caste_cert').html('');
             $('#applctntabval').val("0");
         }
     
         if((religous_authority==0)||(religous_authority=='')||(religous_authority==null)){
             Er_flag=1;
             $('#religous_authority').addClass('has-error');
             $('#religous_authority').focus();
             $('#span_religous_authority').html('');
             $('#applctntabval').val('span_religous_authority~Please enter Religious Authority~religous_authority');
             $('#span_religous_authority').css("color","red");
             $('#span_religous_authority').html('Please enter Religious Authority');
             $('#religous_authority').val('');        
             $('#loader').hide();
         }else{
             $('#religous_authority').removeClass('has-error');
             $('#span_religous_authority').html('');
             $('#applctntabval').val("0");
         }
     
     
         if(Applcnt_name.length<3){
             $('#Applcnt_name').addClass('has-error');
             Er_flag=1;
             $('#Applcnt_name').focus();
             $('#applctntabval').val('span_Applcnt_name~Enter alteast three Characters~Applcnt_name');
             $('#span_Applcnt_name').html('');
             $('#span_Applcnt_name').css("color","red");
             $('#span_Applcnt_name').html("Enter alteast three Characters");
             
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else{
             $('#Applcnt_name').removeClass('has-error');
             $('#span_Applcnt_name').html('');
             $('#applctntabval').val("0");
         }
         if((cert_reltn==0)||(cert_reltn=='')||(cert_reltn==null)){
             Er_flag=1;
             $('#cert_reltn').addClass('has-error');
             $('#cert_reltn').focus();
             $('#span_cert_reltn').html('');
             $('#applctntabval').val('span_cert_reltn~Please enter Relation~cert_reltn');
             $('#span_cert_reltn').css("color","red");
             $('#span_cert_reltn').html('Please enter Relation');
             $('#cert_reltn').val('');        
             $('#loader').hide();
         }else{
             $('#cert_reltn').removeClass('has-error');
             $('#span_cert_reltn').html('');
             $('#applctntabval').val("0");
         }
         if(applctntabval==0){
             Er_flag==0;
             ErMsg=applctntabval.split('~');
             $('#'+ErMsg[0]).html('');
             $('#'+ErMsg[2]).removeClass('has-error');
             }else{
                 Er_flag==1
                 ErMsg=applctntabval.split('~');
                 $('#'+ErMsg[0]).html('');
                 $('#'+ErMsg[0]).html(ErMsg[1]);
             
             }
         
         
         
     }
     
     
     function reset_form(form_id){
         location.reload();
         // $('#span_edist_reg_num').html('');
         // $('#span_to_be_prodcd').html('');
         // $('#span_Applcnt_name').html('');
         // $('#span_cert_type').html('');
         // $('#span_cert_purpos').html('');
         // $('#span_cert_reltn').html('');
         // $('.has-error').removeClass('has-error');    
         // $('#'+form_id).trigger("reset");
     }
     
     $( document ).ready(function() {
         var tabval= $('#attchment_tab').val();
         $('#attach').removeClass('active');
         $('#pills-profile-tab').removeClass('active');
         $('#pills-profile-tab').removeClass('show');
         // $('#date_caste_cert').datepicker();
     });
     $('#attach').on('click',function(){
         var tabval= $('#attchment_tab').val();
         if(tabval==0){   
             $('#attach').removeClass('active');
             $('#pills-profile-tab').removeClass('active');
             $('#pills-profile-tab').removeClass('show');
            
           
         }else{
             $('#attach').addClass('active');
             $('#pills-profile-tab').addClass('active');
             $('#pills-profile-tab').addClass('show');
             $('#appform').removeClass('active');
             $('#pills-home-tab').removeClass('active');
             $('#pills-home-tab').removeClass('show');
            
         }
     });
     
     // $('input[name^="fileupload"]').each(function () {
     //     $(this).rules('add', {
     //         required: true,
     //         accept: "image/jpeg, image/pjpeg"
     //     })
     // });
     
     
     function reset_form_attach(){
         location.reload();
     }
     function validate_form_attach(){
         var remarks_ration = $('#remarks_ration').val();
         var doc_ref_no_ration = $('#doc_ref_no_ration').val();
         var remarks_school_certfct = $('#remarks_school_certfct').val();
         var doc_ref_no_school_certfct = $('#doc_ref_no_school_certfct').val();
         var remarks_Affidavit = $('#remarks_Affidavit').val();
         var doc_ref_no_Affidavit = $('#doc_ref_no_Affidavit').val();
         var remarks_cover_cert = $('#remarks_cover_cert').val();
         var doc_ref_no_cover_cert = $('#doc_ref_no_cover_cert').val();
         var remarks_ration=$('#remarks_ration').val();
     
         if(document.getElementById("file_ration").files.length == 0 ){
             $('#filetabval').val('span_file_ration~Please Upload pdf copy of Ration card~filetabval');
             $('#span_file_ration').html('');
             $('#span_file_ration').css("color","red");
             $('#span_file_ration').html('Please Upload pdf copy of Ration card'); 
             $('#file_ration').focus();
         }
         if(document.getElementById("file_school_certfct").files.length == 0 ){
             $('#filetabval').val('span_file_school_certfct~Please Upload pdf copy of School Certificate~file_school_certfct');
             $('#span_file_school_certfct').html('');
             $('#span_file_school_certfct').css("color","red");
             $('#span_file_school_certfct').html('Please Upload pdf copy of School Certificate'); 
             $('#file_school_certfct').focus();
         }
         if(document.getElementById("file_affidavit").files.length == 0 ){
             $('#filetabval').val('span_file_affidavit~Please Upload pdf copy of Affidavit~file_affidavit');
             $('#span_file_affidavit').html('');
             $('#span_file_affidavit').css("color","red");
             $('#span_file_affidavit').html('Please Upload pdf copy of Affidavit'); 
             $('#file_affidavit').focus();
         }
         if(document.getElementById("file_cover_cert").files.length == 0 ){
             $('#filetabval').val('span_file_cover_cert~Please Upload pdf copy of Conversion Certificate from Concerned Authority~file_cover_cert');
             $('#span_file_cover_cert').html('');
             $('#span_file_cover_cert').css("color","red");
             $('#span_file_cover_cert').html('Please Upload pdf copy of Conversion Certificate from Concerned Authority'); 
             $('#file_cover_cert').focus();
         }
         
         var filetabval=  $('#filetabval').val();
         var Erms='';
         
     
         if(remarks_ration.length<3){
             $('#remarks_ration').addClass('has-error');
             $('#remarks_ration').focus();
             $('#span_remarks_ration').html('');
             $('#span_remarks_ration').css("color","red");
             $('#filetabval').val('span_remarks~Enter alteast three Characters~remarks_ration');
             $('#span_remarks_ration').html("Enter alteast three Characters");
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else{
             $('#span_remarks_ration').html('');
             $('#filetabval').val("0");
         }
         var doc_ref_no_ration=$('#doc_ref_no_ration').val();
         if(doc_ref_no_ration.length<3){
             $('#doc_ref_no_ration').addClass('has-error');
             $('#doc_ref_no_ration').focus();
             $('#filetabval').val('span_doc_ref_no_ration~Enter alteast three Characters~doc_ref_no_ration');
             $('#span_doc_ref_no_ration').html('');
             $('#span_doc_ref_no_ration').css("color","red");
             $('#span_doc_ref_no_ration').html("Enter alteast three Characters.");
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else{
             $('#span_doc_ref_no_ration').html('');
             $('#filetabval').val("0");
         }
         var remarks_school_certfct=$('#remarks_school_certfct').val();
         if(remarks_school_certfct.length<3){
             $('#remarks_school_certfct').addClass('has-error');
             $('#remarks_school_certfct').focus();
             $('#span_remarks_school_certfct').html('');
             $('#filetabval').val('span_remarks_school_certfct~Enter alteast three Characters~remarks_school_certfct');
     
             $('#span_remarks_school_certfct').css("color","red");
             $('#span_remarks_school_certfct').html("Enter alteast three Characters.");
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else{
             $('#span_remarks_school_certfct').html('');
             $('#filetabval').val("0");
         }
         var doc_ref_no_school_certfct=$('#doc_ref_no_school_certfct').val();
         if(doc_ref_no_school_certfct.length<3){
             $('#doc_ref_no_school_certfct').addClass('has-error');
             $('#doc_ref_no_school_certfct').focus();
             $('#span_doc_ref_no_school_certfct').html('');
             $('#filetabval').val('pan_doc_ref_no_school_certfct~Enter alteast three Characters~doc_ref_no_school_certfct');
     
             $('#span_doc_ref_no_school_certfct').css("color","red");
             $('#span_doc_ref_no_school_certfct').html("Enter alteast three Characters");
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else{
             $('#span_doc_ref_no_school_certfct').html('');
             $('#filetabval').val("0");
         }
         var remarks_Affidavit=$('#remarks_Affidavit').val();
         if(remarks_Affidavit.length<3){
             $('#remarks_Affidavit').addClass('has-error');
             $('#remarks_Affidavit').focus();
             $('#filetabval').val('span_remarks_Affidavit~Enter alteast three Characters~remarks_Affidavit');
     
             $('#span_remarks_Affidavit').html('');
             $('#span_remarks_Affidavit').css("color","red");
             $('#span_remarks_Affidavit').html("Enter alteast three Characters");
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else{
             $('#span_remarks_Affidavit').html('');
             $('#filetabval').val("0");
         }
         var doc_ref_no_Affidavit=$('#doc_ref_no_Affidavit').val();
         if(doc_ref_no_Affidavit.length<3){
             $('#doc_ref_no_Affidavit').addClass('has-error');
             $('#doc_ref_no_Affidavit').focus();
             $('#span_doc_ref_no_Affidavit').html('');
             $('#filetabval').val('span_doc_ref_no_Affidavit~Enter alteast three Characters~doc_ref_no_Affidavit');
     
             $('#span_doc_ref_no_Affidavit').css("color","red");
             $('#span_doc_ref_no_Affidavit').html("Enter alteast three Characters");
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else{
             $('#span_doc_ref_no_Affidavit').html('');
             $('#filetabval').val("0");
         }
         var remarks_cover_cert=$('#remarks_cover_cert').val();
         if(remarks_cover_cert.length<3){
             $('#remarks_cover_cert').addClass('has-error');
             $('#remarks_cover_cert').focus();
             $('#span_remarks_cover_cert').html('');
             $('#span_remarks_cover_cert').css("color","red");
             $('#span_remarks_cover_cert').html("Enter alteast three Characters.");
             $('#filetabval').val('span_remarks_cover_cert~Enter alteast three Characters~remarks_cover_cert');
     
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }else{
             $('#span_remarks_cover_cert').html('');
             $('#filetabval').val("0");
         }
         var doc_ref_no_cover_cert=$('#doc_ref_no_cover_cert').val();
         if(doc_ref_no_cover_cert.length<3){
             $('#doc_ref_no_cover_cert').addClass('has-error');
             $('#doc_ref_no_cover_cert').focus();
             $('#span_doc_ref_no_cover_cert').html('');
             $('#span_doc_ref_no_cover_cert').css("color","red");
             $('#span_doc_ref_no_cover_cert').html("Enter alteast three Characters.");
             $('#filetabval').val('span_doc_ref_no_cover_cert~Enter alteast three Characters~doc_ref_no_cover_cert');
     
             // swal('Info', "Enter alteast three Characters.", 'info');
             $('#loader').hide();
         }
         else{
             $('#span_doc_ref_no_cover_cert').html('');
             $('#filetabval').val("0");
         }
         var filetabval=$('#filetabval').val();
         if(filetabval==0){
             // console.log(filetabval);
             Erms=filetabval.split('~');
             $('#'+Erms[0]).html('');
             $('#'+Erms[2]).removeClass('has-error');
             swal("Info","success","info");
         }else{
                 Erms=filetabval.split('~');
                 $('#'+Erms[0]).html('');
                 $('#'+Erms[0]).html(Erms[1]);
             
             }
         
     }
</script>
<script src="assets/js/sweetalertjs.js"></script>