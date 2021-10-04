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
$('#edist_reg_num').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var edist_reg_num=$('#edist_reg_num').val();
    if(edist_reg_num.length<3){
        $('#edist_reg_num').addClass('has-error');
        $('#edist_reg_num').focus();
        $('#applctntabval').val('span_edist_reg_num~Enter alteast three Characters~edist_reg_num');
        $('#span_edist_reg_num').html('');
        $('#span_edist_reg_num').css("color","red");
        $('#span_edist_reg_num').html('Enter alteast three Characters');
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (edist_reg_num.search(charRegExp) != 0) {
        $('#edist_reg_num').addClass('has-error');
        $('#edist_reg_num').val('');
        $('#edist_reg_num').focus();
        $('#span_edist_reg_num').html('');
        $('#span_edist_reg_num').css("color","red");
        $('#applctntabval').val('span_edist_reg_num~Invalid Characters . Alphabets only~edist_reg_num');
        $('#span_edist_reg_num').html('Invalid Characters . Alphabets only');
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
        $('#cert_type').removeClass('has-error');
        cert_type = cert_type;
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
        $('#applctntabval').val('span_cert_purpos~Invalid Characters . Alphabets only~cert_purpos');
        $('#span_cert_purpos').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
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

$('#file_eid').on('change',function(){    
    var type=this.files[0].type;
    if ((type=="")||(type=="application/pdf")||(type =='application/vnd.pdf')||(type =='application/PDF')||(type =='application/VND.PDF'))
     {
        var size = this.files[0].size;
        $('#span_file_eid').html('');
        if (size > 1048576)// checks the file more than 1 MB
        {
            $('#filetabval').val('span_file_eid~File size must be less than 1 MB~file_eid');
            $('#span_file_eid').html('');
            $('#span_file_eid').css("color","red");
            $('#span_file_eid').html('File size must be less than 1 MB'); 
            $('#file_eid').focus();   
            //         
          
          
        } else {
            $('#filetabval').val("0");
            $('#span_file_eid').html('');
           
           
        }
        $('#filetabval').val("0");
         
     } else {
        $('#filetabval').val('span_file_eid~File must be a pdf~file_eid');
        $('#span_file_eid').html('');
        $('#span_file_eid').css("color","red");
        $('#span_file_eid').html('File must be a pdf'); 
        $('#file_eid').focus();
         
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

$('#aadhr_file').on('change',function(){    
    var type=this.files[0].type;
    if ((type=="")||(type=="application/pdf")||(type =='application/vnd.pdf')||(type =='application/PDF')||(type =='application/VND.PDF'))
     {
        var size = this.files[0].size;
        $('#span_aadhr_file').html('');
        if (size > 1048576)// checks the file more than 1 MB
        {
            $('#filetabval').val('span_aadhr_file~File size must be less than 1 MB~aadhr_file');
            $('#span_aadhr_file').html('');
            $('#span_aadhr_file').css("color","red");
            $('#span_aadhr_file').html('File size must be less than 1 MB'); 
            $('#aadhr_file').focus();   
            //         
          
          
        } else {
            $('#filetabval').val("0");
            $('#span_aadhr_file').html('');
           
           
        }
        $('#filetabval').val("0");
         
     } else {
        $('#filetabval').val('span_aadhr_file~File must be a pdf~aadhr_file');       
        $('#span_aadhr_file').html('');
        $('#span_aadhr_file').css("color","red");
        $('#span_aadhr_file').html('File must be a pdf'); 
        $('#aadhr_file').focus();
         
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

$('#remarks_eid').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var remarks_eid=$('#remarks_eid').val();
    if(remarks_eid.length<3){
        $('#remarks_eid').addClass('has-error');
        $('#remarks_eid').focus();
        $('#span_remarks_eid').html('');
        $('#span_remarks_eid').css("color","red");
        $('#filetabval').val('span_remarks_eid~Enter alteast three Characters~remarks_eid');
        $('#span_remarks_eid').html("Enter alteast three Characters.");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (remarks_eid.search(charRegExp) != 0) {
        $('#remarks_eid').addClass('has-error');
        $('#remarks_eid').val('');
        $('#remarks_eid').focus();
        $('#span_remarks_eid').html('');
        $('#span_remarks_eid').css("color","red");
        $('#filetabval').val('span_remarks_eid~Invalid Characters . Alphabets only~remarks_eid');
        $('#span_remarks_eid').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#filetabval').val("0");
        $('#span_remarks_eid').html('');
        $('#remarks_eid').removeClass('has-error');
        remarks_eid = remarks_eid;
    }
});

$('#doc_ref_no_eid').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var doc_ref_no_eid=$('#doc_ref_no_eid').val();
    if(doc_ref_no_eid.length<3){
        $('#doc_ref_no_eid').addClass('has-error');
        $('#doc_ref_no_eid').focus();
        $('#span_doc_ref_no_eid').html('');
        $('#span_doc_ref_no_eid').css("color","red");
        $('#filetabval').val('span_doc_ref_no_eid~Enter alteast three Characters~remarks_eid');
        $('#span_doc_ref_no_eid').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (doc_ref_no_eid.search(charRegExp) != 0) {
        $('#doc_ref_no_eid').addClass('has-error');
        $('#doc_ref_no_eid').val('');
        $('#doc_ref_no_eid').focus();
        $('#span_doc_ref_no_eid').html('');
        $('#span_doc_ref_no_eid').css("color","red");
        $('#filetabval').val('span_doc_ref_no_eid~Invalid Characters . Alphabets only~remarks_eid');
        $('#span_doc_ref_no_eid').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#filetabval').val("0");
        $('#span_doc_ref_no_eid').html('');
        $('#doc_ref_no_eid').removeClass('has-error');
        doc_ref_no_eid = doc_ref_no_eid;
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

$('#remarks_aadhr').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var remarks_aadhr=$('#remarks_aadhr').val();
    if(remarks_aadhr.length<3){
        $('#remarks_aadhr').addClass('has-error');
        $('#remarks_aadhr').focus();
        $('#span_remarks_aadhr').html('');
        $('#span_remarks_aadhr').css("color","red");
        $('#filetabval').val('span_remarks_aadhr~Enter alteast three Characters~remarks_aadhr');
        $('#span_remarks_aadhr').html("Enter alteast three Characters.");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (remarks_aadhr.search(charRegExp) != 0) {
        $('#remarks_aadhr').addClass('has-error');
        $('#remarks_aadhr').val('');
        $('#remarks_aadhr').focus();
        $('#span_remarks_aadhr').html('');
        $('#span_remarks_aadhr').css("color","red");
        $('#filetabval').val('span_remarks_aadhr~Invalid Characters . Alphabets only~remarks_aadhr');

        $('#span_remarks_aadhr').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#filetabval').val("0");
        $('#span_remarks_aadhr').html('');
        $('#remarks_aadhr').removeClass('has-error');
        remarks_aadhr = remarks_aadhr;
    }
});

$('#doc_ref_no_aadhr').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var doc_ref_no_aadhr=$('#doc_ref_no_aadhr').val();
    if(doc_ref_no_aadhr.length<3){
        $('#doc_ref_no_aadhr').addClass('has-error');
        $('#doc_ref_no_aadhr').focus();
        $('#span_doc_ref_no_aadhr').html('');
        $('#span_doc_ref_no_aadhr').css("color","red");
        $('#filetabval').val('span_doc_ref_no_aadhr~Enter alteast three Characters~doc_ref_no_aadhr');
        $('#span_doc_ref_no_aadhr').html("Enter alteast three Characters.");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (doc_ref_no_aadhr.search(charRegExp) != 0) {
        $('#doc_ref_no_aadhr').addClass('has-error');
        $('#doc_ref_no_aadhr').val('');
        $('#doc_ref_no_aadhr').focus();
        $('#span_doc_ref_no_aadhr').html('');
        $('#span_doc_ref_no_aadhr').css("color","red");
        $('#filetabval').val('span_doc_ref_no_aadhr~Invalid Characters . Alphabets only~doc_ref_no_aadhr');
        $('#span_doc_ref_no_aadhr').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#filetabval').val("0");
        $('#span_doc_ref_no_aadhr').html('');
        $('#doc_ref_no_aadhr').removeClass('has-error');
        doc_ref_no_aadhr = doc_ref_no_aadhr;
    }
});
function validate_form(){
    var applctntabval=$('#applctntabval').val();
    var edist_reg_num=$('#edist_reg_num').val();
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var to_be_prod_befor=$('#to_be_prod_befor').val();
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
        $('#applctntabval').val('span_edist_reg_num~Enter alteast three Characters~edist_reg_num');
        $('#span_edist_reg_num').css("color","red");
        $('#span_edist_reg_num').html('Invalid Characters . Alphabets only');
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
}
function reset_form_attach(){
    location.reload();
}

$( document ).ready(function() {
    var tabval= $('#attchment_tab').val();
    $('#attach').removeClass('active');
    $('#pills-profile-tab').removeClass('active');
    $('#pills-profile-tab').removeClass('show');
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
    $('#remarks_ration').val('');
    $('#doc_ref_no_ration').val('');
    $('#remarks_eid').val('');
    $('#doc_ref_no_eid').val('');
    $('#remarks_Affidavit').val('');
    $('#doc_ref_no_Affidavit').val('');
    $('#remarks_aadhr').val('');
    $('#doc_ref_no_aadhr').val('');
}
function validate_form_attach(){
    var remarks_ration = $('#remarks_ration').val();
    var doc_ref_no_ration = $('#doc_ref_no_ration').val();
    var remarks_eid = $('#remarks_eid').val();
    var doc_ref_no_eid = $('#doc_ref_no_eid').val();
    var remarks_Affidavit = $('#remarks_Affidavit').val();
    var doc_ref_no_Affidavit = $('#doc_ref_no_Affidavit').val();
    var remarks_aadhr = $('#remarks_aadhr').val();
    var doc_ref_no_aadhr = $('#doc_ref_no_aadhr').val();
    var remarks_ration=$('#remarks_ration').val();

    if(document.getElementById("file_ration").files.length == 0 ){
        $('#filetabval').val('span_file_ration~Please Upload pdf copy of Ration card~filetabval');
        $('#span_file_ration').html('');
        $('#span_file_ration').css("color","red");
        $('#span_file_ration').html('Please Upload pdf copy of Ration card'); 
        $('#file_ration').focus();
    }
    if(document.getElementById("file_eid").files.length == 0 ){
        $('#filetabval').val('span_file_eid~Please Upload pdf copy of Election id card~file_eid');
        $('#span_file_eid').html('');
        $('#span_file_eid').css("color","red");
        $('#span_file_eid').html('Please Upload pdf copy of Election id card'); 
        $('#file_eid').focus();
    }
    if(document.getElementById("file_affidavit").files.length == 0 ){
        $('#filetabval').val('span_file_affidavit~Please Upload pdf copy of Affidavit~file_affidavit');
        $('#span_file_affidavit').html('');
        $('#span_file_affidavit').css("color","red");
        $('#span_file_affidavit').html('Please Upload pdf copy of Affidavit'); 
        $('#file_affidavit').focus();
    }
    if(document.getElementById("aadhr_file").files.length == 0 ){
        $('#filetabval').val('span_aadhr_file~Please Upload pdf copy of Aadhar~aadhr_file');
        $('#span_aadhr_file').html('');
        $('#span_aadhr_file').css("color","red");
        $('#span_aadhr_file').html('Please Upload pdf copy of Aadhar'); 
        $('#aadhr_file').focus();
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
    var remarks_eid=$('#remarks_eid').val();
    if(remarks_eid.length<3){
        $('#remarks_eid').addClass('has-error');
        $('#remarks_eid').focus();
        $('#span_remarks_eid').html('');
        $('#filetabval').val('span_remarks_eid~Enter alteast three Characters~remarks_eid');

        $('#span_remarks_eid').css("color","red");
        $('#span_remarks_eid').html("Enter alteast three Characters.");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#span_remarks_eid').html('');
        $('#filetabval').val("0");
    }
    var doc_ref_no_eid=$('#doc_ref_no_eid').val();
    if(doc_ref_no_eid.length<3){
        $('#doc_ref_no_eid').addClass('has-error');
        $('#doc_ref_no_eid').focus();
        $('#span_doc_ref_no_eid').html('');
        $('#filetabval').val('pan_doc_ref_no_eid~Enter alteast three Characters~doc_ref_no_eid');

        $('#span_doc_ref_no_eid').css("color","red");
        $('#span_doc_ref_no_eid').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#span_doc_ref_no_eid').html('');
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
    var remarks_aadhr=$('#remarks_aadhr').val();
    if(remarks_aadhr.length<3){
        $('#remarks_aadhr').addClass('has-error');
        $('#remarks_aadhr').focus();
        $('#span_remarks_aadhr').html('');
        $('#span_remarks_aadhr').css("color","red");
        $('#span_remarks_aadhr').html("Enter alteast three Characters.");
        $('#filetabval').val('span_remarks_aadhr~Enter alteast three Characters~remarks_aadhr');

        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#span_remarks_aadhr').html('');
        $('#filetabval').val("0");
    }
    var doc_ref_no_aadhr=$('#doc_ref_no_aadhr').val();
    if(doc_ref_no_aadhr.length<3){
        $('#doc_ref_no_aadhr').addClass('has-error');
        $('#doc_ref_no_aadhr').focus();
        $('#span_doc_ref_no_aadhr').html('');
        $('#span_doc_ref_no_aadhr').css("color","red");
        $('#span_doc_ref_no_aadhr').html("Enter alteast three Characters.");
        $('#filetabval').val('span_doc_ref_no_aadhr~Enter alteast three Characters~doc_ref_no_aadhr');

        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }
    else{
        $('#span_doc_ref_no_aadhr').html('');
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
