<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use DB;
use App\Document;
use App\Documenttype;
use App\Story;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Spatie\Searchable\Search;
use Illuminate\Support\Facades\Validator;


class PortalController extends Controller
{
   public function mainlogin(Request $request)
   {

      //Session::flush();
   
      if (!Session::has('bilingual')) {
         Session::put('bilingual', 1);
      }
      $sessionbil = Session::get('bilingual');
    /*  $urldata=url()->full();  
     $split_url = explode('?string=', $urldata);
        //  dd($split_url[1]);
      $decryptdata =app('App\Http\Controllers\PortalController')->decryption($split_url[1], $AuthKey_secret1, $AESIV1);   
        dd($decryptdata);exit; */ 

       return view('auth.service', compact('sessionbil'));
   }

   public function home(Request $request)
   {

   $AuthKey_secret1 = "cOh1EFlUeOpM1iWrC084IV4vh3aC7Eu5";
   $ServiceId1 = "KL0001"; 
   $AESIV1 = "ThVtN46IrzBcQeui";              
   $TimeToLive1 = time();
   
      if (!Session::has('bilingual')) {
         Session::put('bilingual', 1);
      }
      $sessionbil = Session::get('bilingual');

      $urlstring=$request->string;



      
      $decrypteddata =app('App\Http\Controllers\PortalController')->decryption($urlstring, $AuthKey_secret1, $AESIV1);  
      $decrypted_data =json_decode($decrypteddata);
//dd($decrypted_data);
      $firstName     = $decrypted_data->firstName;
      $lastname      = $decrypted_data->lastName;
      $mobileno      = $decrypted_data->mobileNo;
      $email         = $decrypted_data->email;     
      $designation   = $decrypted_data->designation;
      $status        = $decrypted_data->status;
      $userid        = $decrypted_data->userId;
      $clientToken   = $decrypted_data->clientToken;
      $handShakingId = $decrypted_data->handShakingId;
      $serviceId     = $decrypted_data->serviceId;
      $address       = $decrypted_data->address;
      $userRole      = $decrypted_data->userRole;    
      $parichayid    = $decrypted_data->parichayId;
      $ip            = $decrypted_data->ip; 
      $ua            = $decrypted_data->ua;
      $parentToken   = $decrypted_data->parentToken;
      $loginId       = $decrypted_data->loginId;
      $verificationParameters  = $decrypted_data->verificationParameters;
      $browserid               = $decrypted_data->browserId;
      $serviceState            = $decrypted_data->serviceState;
      $userType                = $decrypted_data->userType;
      $dob                     = $decrypted_data->dob; 
      $gender                  = $decrypted_data->gender;
      

      $formdata=array('firstName'=>$firstName,
         'lastName'=>$lastname,
         'mobileNo'=>$mobileno,
         'email'=>$email, 
         'designation'=>$designation,
         'status'=>$status,
         'userid'=>$userid,
         'clientToken'=>$clientToken ,
         'handShakingId'=>$handShakingId,
         'serviceId'=>$serviceId,
         'address'=>$address, 
         'userRole'=>$userRole,
         'parichayid'=>$parichayid,
         'ip'=>$ip, 
         'ua'=>$ua, 
         'parentToken'=>$parentToken ,
         'loginId'=>$loginId ,
         'verificationParameters'=>$verificationParameters,
         'browserid'=>$browserid,
         'serviceState'=>$serviceState,
         'userType'=>$userType,
         'dob'=>$dob,
         'gender'=>$gender


                     );


      $query=DB::table('janparichayusers')->where('userid',$userid)->count(); 
      if($query==0)

      {


            $insertid=DB::table('janparichayusers')->insertGetId($formdata);
            // $query=DB::table('janparichayusers')->select('id','userid','firstName')->where('id',$insertid)->first(); 

         }

     
          Session::put('janparichayuserid', $userid);
          Session::put('janparichayusername', $firstName);
          Session::put('clientToken', $clientToken);
          Session::put('parentToken', $parentToken);
          Session::put('useragent', $ua);
          Session::put('browserid', $browserid);
          Session::put('parichayid', $parichayid);

          
       //dd($insertid);

       return view('auth.home', compact('sessionbil'));
   }

   /*public function login(Request $request)
   {
      if (!Session::has('bilingual')) {
         Session::put('bilingual', 1);
      }
      $sessionbil = Session::get('bilingual');
        
     

       return view('auth.login', compact('sessionbil'));
   }*/

   public function setbilingualval(Request $request)
   {

      if ($request->ajax()) {
         Session::forget('bilingual');
         Session::put('bilingual', 1);

         return response()->json(['success' => 'successfully set']);
      }
   }

   public function setbilingualvalmal(Request $request)
   {

      if ($request->ajax()) {
         Session::forget('bilingual');
         Session::put('bilingual', 2);



         return response()->json(['success' => 'successfully set']);
      }
   }

   public function modalpop(Request $request, $id)
   {

      if ($request->ajax()) {
         $sessionbil = Session::get('bilingual');

         if ($sessionbil == 1) {
            $getcontent = DB::table('footermenus')->where('id', $id)->select('id', 'file', 'alt', 'entitle as title', 'encontent as content')->first();
         } else {
            $getcontent = DB::table('footermenus')->where('id', $id)->select('id', 'file', 'alt', 'maltitle as title', 'malcontent as content')->first();
         }


         return response()->json(['resultdata' => $getcontent,'sessionbil'=> $sessionbil]);
      }
   }
   public function modalserviceview(Request $request, $id)
   {

      if ($request->ajax()) {
         $sessionbil = Session::get('bilingual');   

         if ($sessionbil == 1) {
           $services=DB::table('servicedetails')
      ->join('departments','servicedetails.departments_id','=','departments.id') 
       ->join('servicecategories','servicedetails.servicecategories_id','=','servicecategories.id')
      ->select('servicedetails.id', 'servicedetails.service_eng_short_desc as servicetitle','servicedetails.service_eng_desc as desc','servicedetails.service_days_limit_eng as daylimit', 'servicecategories.entitle as categoryname', 'servicecategories.iconclass','servicecategories_id as category_id','servicedetails.departments_id as department_id',
         'departments.entitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl','doc_req','doc_name','fee_req','fees','departments.dep_emailid','departments.dep_mobile')
      ->where('servicedetails.id', '=', $id)
      ->first();

         $docid=explode(',',$services->doc_name);
         
     
      
       
            $supportdocument=DB::table('supportingdocuments')->select('id','entitle as docname')->whereIn('id',$docid)->get();
         
        

          $sitecontrollbldoc = DB::table('sitecontrollabels')->where('status', 1)->where('id', 33)->select('entitle as title')->first();
           $sitecontrollblenq = DB::table('sitecontrollabels')->where('status', 1)->where('id', 34)->select('entitle as title')->first();

         } else {
             $services=DB::table('servicedetails')
      ->join('departments','servicedetails.departments_id','=','departments.id') 
       ->join('servicecategories','servicedetails.servicecategories_id','=','servicecategories.id')
      ->select('servicedetails.id', 'servicedetails.service_mal_short_desc as servicetitle','servicedetails.service_mal_desc as desc','servicedetails.service_days_limit_mal as daylimit','servicecategories.maltitle as categoryname', 'servicecategories.iconclass','servicecategories_id as category_id','servicedetails.departments_id as department_id',
         'departments.maltitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl','doc_req','doc_name','fee_req','fees','departments.dep_emailid','departments.dep_mobile')
        ->where('servicedetails.id', '=', $id)
      ->first();

          $docid=explode(',',$services->doc_name);

        
         $supportdocument=DB::table('supportingdocuments')->select('id','maltitle as docname')->whereIn('id',$docid)->get();
         
        

          $sitecontrollbldoc = DB::table('sitecontrollabels')->where('status', 1)->where('id', 33)->select('maltitle as title')->first();
           $sitecontrollblenq = DB::table('sitecontrollabels')->where('status', 1)->where('id', 34)->select('maltitle as title')->first();
         }

//dd($services);
         return response()->json(['servicedata' => $services,'sessionbil'=> $sessionbil,'supportdocument'=>$supportdocument,'sitecontrollbldoc'=>$sitecontrollbldoc,'sitecontrollblenq'=>$sitecontrollblenq]);
      }
   }


   public function setvalueshomepage(Request $request)
   {

      if ($request->ajax()) {
         if (!Session::has('bilingual')) {
            Session::put('bilingual', 1);
         }
         $sessionbil = Session::get('bilingual');


         /*site updated on*/
              $siteupdated = DB::table('sitesettings')->where('entitle', 'Last Updated')->where('status', 1)->select(DB::raw('DATE_FORMAT(titlevalues, " %d-%b-%Y %T") as titlevalues'))->first();

         if ($sessionbil == 1) {

            $logo = DB::table('logos')->where('logotype', 1)->where('status', 1)->select('file')->first();
            $title = DB::table('titles')->where('status', 1)->select('entitle as title', 'ensubtitle as subtitle')->first();
            $sitecontrollbl = DB::table('sitecontrollabels')->where('status', 1)->select('entitle as title')->first();
            $shortalert = DB::table('shortalerts')->where('entitle', 'frontpage')->where('status', 1)->select('encontent as content')->first();

           
            /*Footermenu*/


           $footermenus = DB::table('footermenus')->where('status', 1)->select('id', 'file', 'alt', 'entitle as title', 'encontent as content')->get();
                $footerlinks = DB::table('footerlinks')->where('status', 1)->select('id', 'url', 'entitle as title', 'entooltip as tooltip', 'iconclass')->get();
                
                $footer = DB::table('footers')->where('status', 1)->select('id', 'entitle as title', 'ensubtitle as subtitle', 'iconclass')->orderBy('id', 'asc')->first();
                
               
                $footerlogo =  DB::table('logos')->where('status', 1)->where('logotype', 2)->select('file', 'url', 'entooltip as tooltip')->get();





           /*Service details loading */

      $letter='A';
     $servicecatcount[]='';
      $categories=DB::table('servicecategories')->select('id', 'entitle as title','iconclass','imageurl')->where('status',1)->get();
      foreach($categories as $categoriesdata)
      {
         $servicecatcount[$categoriesdata->id]=DB::table('servicedetails')->where('servicecategories_id',$categoriesdata->id)->count();
      }

      $categorycount=DB::table('servicecategories')->select('id', 'entitle', 'maltitle')->where('status',1)->count();

      $departments=DB::table('departments')->select('id', 'entitle as depttitle')->where('status',1)->orderBy('entitle', 'asc')->get();
       $departmentcount=DB::table('departments')->select('id', 'entitle', 'maltitle')->where('status',1)->count();

       $life_events=DB::table('lifeeventcategories')->select('id', 'entitle as lifeeventtitle')->where('status',1)->get();
        $life_eventscount=DB::table('lifeeventcategories')->select('id', 'entitle', 'maltitle')->where('status',1)->count();

        $services=DB::table('servicedetails')
      ->join('departments','servicedetails.departments_id','=','departments.id') 
       ->join('servicecategories','servicedetails.servicecategories_id','=','servicecategories.id')
      ->select('servicedetails.id', 'servicedetails.service_eng_short_desc as servicetitle', 'servicecategories.entitle as categoryname', 'servicecategories.iconclass','servicecategories_id as category_id','servicedetails.departments_id as department_id',
         'departments.entitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl')
      ->where('servicedetails.entitle', 'LIKE', $letter.'%')
      ->Orwhere('servicedetails.enkeywords', 'LIKE', $letter.'%')
      ->Orwhere('servicedetails.enkeywords','LIKE','%,'.$letter.'%')
      ->get();

      $servicecount=DB::table('servicedetails')
      ->join('departments','servicedetails.departments_id','=','departments.id') 
      ->select('servicedetails.id', 'servicedetails.entitle', 'servicedetails.maltitle','servicecategories_id as category_id','servicedetails.departments_id as department_id',
         'departments.entitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl')
      ->where('servicedetails.entitle', 'LIKE', $letter.'%')
      ->Orwhere('servicedetails.enkeywords', 'LIKE', $letter.'%')
      ->Orwhere('servicedetails.enkeywords','LIKE','%,'.$letter.'%')
      ->count();

       $totalservices=DB::table('servicedetails')->select('id', 'entitle', 'maltitle')->count();



            /*Service details loading */


            /*Site control label*/

             $sitecontrollabels = DB::table('sitecontrollabels')->where('status', 1)->select('entitle as title')->orderBy('id', 'asc')->get();

             /*site updated on*/
              $siteupdated = DB::table('sitesettings')->where('entitle', 'Last Updated')->where('status', 1)->select(DB::raw('DATE_FORMAT(titlevalues, " %d-%b-%Y %T") as titlevalues'))->first();

              /*Address*/

                $address = DB::table('componentarticles')->where('status', 1)->where('components_id', 12)->select('encontent as content', 'entitle as title', 'maplinks')->first();

                /*Follow us*/

                 $socialmedia = DB::table('socialmedia')->where('status', 1)->select('url', 'iconclass', 'entitle as title', 'entooltip as tooltip')->get();

         } else {


            $logo = DB::table('logos')->where('logotype', 1)->where('status', 1)->select('file')->first();
            $title = DB::table('titles')->where('status', 1)->select('maltitle as title', 'malsubtitle as subtitle')->first();
            $sitecontrollbl = DB::table('sitecontrollabels')->where('status', 1)->select('maltitle as title')->first();
            $shortalert = DB::table('shortalerts')->where('entitle', 'frontpage')->where('status', 1)->select('malcontent as content')->first();

            

            /*Footermenu*/

         $footermenus = DB::table('footermenus')->where('status', 1)->select('id', 'file', 'alt', 'maltitle as title', 'malcontent as content')->get();
         $footerlinks = DB::table('footerlinks')->where('status', 1)->select('id', 'url', 'maltitle as title', 'maltooltip as tooltip', 'iconclass')->get();     
         $footer = DB::table('footers')->where('status', 1)->select('id', 'maltitle as title', 'malsubtitle as subtitle', 'iconclass')->orderBy('id', 'asc')->first();               
         $footerlogo =  DB::table('logos')->where('status', 1)->where('logotype', 2)->select('file', 'url', 'maltooltip as tooltip')->get();
              


             /*Service details loading */

      $letter='A';
       $servicecatcount[]='';
      $categories=DB::table('servicecategories')->select('id','maltitle as title','iconclass','imageurl')->where('status',1)->get();
      foreach($categories as $categoriesdata)
      {
         $servicecatcount[$categoriesdata->id]=DB::table('servicedetails')->where('servicecategories_id',$categoriesdata->id)->count();
      }
      $categorycount=DB::table('servicecategories')->select('id', 'entitle', 'maltitle')->where('status',1)->count();

      $departments=DB::table('departments')->select('id', 'maltitle as depttitle')->where('status',1)->orderBy('maltitle', 'asc')->get();
       $departmentcount=DB::table('departments')->select('id', 'entitle', 'maltitle')->where('status',1)->count();

       $life_events=DB::table('lifeeventcategories')->select('id', 'maltitle as lifeeventtitle')->where('status',1)->get();
        $life_eventscount=DB::table('lifeeventcategories')->select('id', 'entitle', 'maltitle')->where('status',1)->count();

        $services=DB::table('servicedetails')
      ->join('departments','servicedetails.departments_id','=','departments.id') 
       ->join('servicecategories','servicedetails.servicecategories_id','=','servicecategories.id')
      ->select('servicedetails.id', 'servicedetails.service_mal_short_desc  as servicetitle','servicecategories.maltitle as categoryname', 'servicecategories.iconclass','servicecategories_id as category_id','servicedetails.departments_id as department_id',
         'departments.maltitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl')
      ->where('servicedetails.entitle', 'LIKE', $letter.'%')
      ->Orwhere('servicedetails.enkeywords', 'LIKE', $letter.'%')
      ->Orwhere('servicedetails.enkeywords','LIKE','%,'.$letter.'%')
      ->get();

      $servicecount=DB::table('servicedetails')
      ->join('departments','servicedetails.departments_id','=','departments.id') 
      ->select('servicedetails.id', 'servicedetails.entitle', 'servicedetails.maltitle','servicecategories_id as category_id','servicedetails.departments_id as department_id',
         'departments.maltitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl')
      ->where('servicedetails.entitle', 'LIKE', $letter.'%')
      ->Orwhere('servicedetails.enkeywords', 'LIKE', $letter.'%')
      ->Orwhere('servicedetails.enkeywords','LIKE','%,'.$letter.'%')
      ->count();

       $totalservices=DB::table('servicedetails')->select('id', 'entitle', 'maltitle')->count();



            /*Service details loading */

            /*Site control label*/

             $sitecontrollabels = DB::table('sitecontrollabels')->where('status', 1)->select('maltitle as title')->orderBy('id', 'asc')->get();

             /*Address*/
              $address = DB::table('componentarticles')->where('status', 1)->where('components_id', 12)->select('malcontent as content', 'maltitle as title', 'maplinks')->first();

              /*Follow us*/

              $socialmedia = DB::table('socialmedia')->where('status', 1)->select('url', 'iconclass', 'maltitle as title', 'maltooltip as tooltip')->get();


         }
       // dd($services);
         return response()->json(['logo' => $logo, 'title' => $title,'footermenus' => $footermenus, 'footerlinks' => $footerlinks, 'footerlogo' => $footerlogo,'footer' => $footer,'categories'=> $categories,'categorycount'=> $categorycount,'departments'=> $departments,'departmentcount'=> $departmentcount,'services'=> $services,'servicecount'=> $servicecount,'totalservices'=> $totalservices,'life_events'=> $life_events,'life_eventscount'=> $life_eventscount,'servicecatcount'=>$servicecatcount,'sessionbil'=> $sessionbil,'siteupdated'=>$siteupdated,'sitecontrollabels'=>$sitecontrollabels,'address'=>$address,'socialmedia'=>$socialmedia]);
      }
   }

  

    public function getcategoryservice(Request $request)
   {

      if ($request->ajax()) {
         request()->validate([
            'catid'        =>  'required',
            'deptid'       =>  'sometimes|nullable',
            'lifeeventid'  =>  'sometimes|nullable',
            'keyword'  =>  'sometimes|nullable'
         ]);


          $sessionbil = Session::get('bilingual');

         if ($sessionbil == 1) {
        $services=DB::table('servicedetails')
         
        ->join('departments','servicedetails.departments_id','=','departments.id') 
       ->join('servicecategories','servicedetails.servicecategories_id','=','servicecategories.id')
      ->select('servicedetails.id', 'servicedetails.service_eng_short_desc  as servicetitle','servicecategories.entitle as categoryname', 'servicecategories.iconclass','servicecategories_id as category_id','servicedetails.departments_id as department_id',
         'departments.entitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl');

   }
      else
      {
          $services=DB::table('servicedetails')
         
        ->join('departments','servicedetails.departments_id','=','departments.id') 
       ->join('servicecategories','servicedetails.servicecategories_id','=','servicecategories.id')
      ->select('servicedetails.id', 'servicedetails.service_mal_short_desc  as servicetitle','servicecategories.maltitle as categoryname', 'servicecategories.iconclass','servicecategories_id as category_id','servicedetails.departments_id as department_id',
         'departments.maltitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl');

      }


           if($request->has(['catid','deptid','lifeeventid','keyword']))

         {  


            if($request->catid)
            {
               
               $services->where('servicecategories_id',$request->catid);
               
            }
             if($request->deptid)
            {
               
               $services->where('departments_id',$request->deptid);
               
               
            }
            if($request->lifeeventid)
            {
               
               $services->where('lifeeventcategories_id',$request->lifeeventid);
               
            }
             if($request->keyword)
            {
               
               $services->where('servicedetails.entitle','like','%'.$request->keyword.'%');
               
            }

      }
            
         /* else if($request->starts_with)
         {
            $services->where('servicedetails.entitle','like',$request->starts_with.'%');
            $services->Orwhere('enkeywords','like',$request->starts_with.'%');
            $services->Orwhere('enkeywords','like','%,'.$request->starts_with.'%');
            
         }*/
         $services=$services->get();
         $servicecount=$services->count();
         $totalservices=DB::table('servicedetails')->select('id', 'entitle', 'maltitle')->count();
         if($servicecount>0)
         {
            return response()->json(['services'=>$services,'servicecount'=>$servicecount,'totalservices'=>$totalservices,'sessionbil'=> $sessionbil,'success' => true], 200);
         }
         else
         { 
            return response()->json(['services'=>$services,'servicecount'=>$servicecount,'totalservices'=>$totalservices,'starts_with'=>$request->starts_with,'sessionbil'=> $sessionbil,'success' => true], 200);
         }
      }
   }
   public function getdeptservice(Request $request)
   {

      if ($request->ajax()) {
         request()->validate([
            'catid'        =>  'sometimes|nullable',
            'deptid'       =>  'required',
            'lifeeventid'  =>  'sometimes|nullable',
            'keyword'  =>  'sometimes|nullable'
         ]);

        $sessionbil = Session::get('bilingual');

         if ($sessionbil == 1) {
        $services=DB::table('servicedetails')
         
        ->join('departments','servicedetails.departments_id','=','departments.id') 
       ->join('servicecategories','servicedetails.servicecategories_id','=','servicecategories.id')
      ->select('servicedetails.id', 'servicedetails.service_eng_short_desc  as servicetitle','servicecategories.entitle as categoryname', 'servicecategories.iconclass','servicecategories_id as category_id','servicedetails.departments_id as department_id',
         'departments.entitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl');

   }
      else
      {
          $services=DB::table('servicedetails')
         
        ->join('departments','servicedetails.departments_id','=','departments.id') 
       ->join('servicecategories','servicedetails.servicecategories_id','=','servicecategories.id')
      ->select('servicedetails.id', 'servicedetails.service_mal_short_desc  as servicetitle','servicecategories.maltitle as categoryname', 'servicecategories.iconclass','servicecategories_id as category_id','servicedetails.departments_id as department_id',
         'departments.maltitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl');

      }


         if($request->has(['catid','deptid','lifeeventid','keyword']))

         {  


            if($request->catid)
            {
               
               $services->where('servicecategories_id',$request->catid);
               
            }
             if($request->deptid)
            {
               
               $services->where('departments_id',$request->deptid);
               
               
            }
            if($request->lifeeventid)
            {
               
               $services->where('lifeeventcategories_id',$request->lifeeventid);
               
            }
             if($request->keyword)
            {
               
               $services->where('servicedetails.entitle','like','%'.$request->keyword.'%');
               
            }

      }
            
      /* else if($request->starts_with)
      {
         $services->where('servicedetails.entitle','like',$request->starts_with.'%');
         $services->Orwhere('enkeywords','like',$request->starts_with.'%');
         $services->Orwhere('enkeywords','like','%,'.$request->starts_with.'%');
         
      }*/
     $services=$services->get();
      $servicecount=$services->count();

       $totalservices=DB::table('servicedetails')->select('id', 'entitle', 'maltitle')->count();
         if($servicecount>0)
      {

       
         return response()->json(['services'=>$services,'servicecount'=>$servicecount,'totalservices'=>$totalservices,'sessionbil'=> $sessionbil,'success' => true], 200);

      }
      else
         { 
            return response()->json(['services'=>$services,'servicecount'=>$servicecount,'totalservices'=>$totalservices,'starts_with'=>$request->starts_with,'sessionbil'=> $sessionbil,'success' => true], 200);
         }
      }
   }
   public function getlifeeventservice(Request $request)
   {

      if ($request->ajax()) {
         request()->validate([
            'catid'        =>  'sometimes|nullable',
            'deptid'       =>  'sometimes|nullable',
            'lifeeventid'  =>  'required',
            'keyword'  =>  'sometimes|nullable'
         ]);

         $sessionbil = Session::get('bilingual');

         if ($sessionbil == 1) {
        $services=DB::table('servicedetails')
         
        ->join('departments','servicedetails.departments_id','=','departments.id') 
       ->join('servicecategories','servicedetails.servicecategories_id','=','servicecategories.id')
      ->select('servicedetails.id', 'servicedetails.service_eng_short_desc  as servicetitle','servicecategories.entitle as categoryname', 'servicecategories.iconclass','servicecategories_id as category_id','servicedetails.departments_id as department_id',
         'departments.entitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl');
   }

      else
      {
          $services=DB::table('servicedetails')
         
        ->join('departments','servicedetails.departments_id','=','departments.id') 
       ->join('servicecategories','servicedetails.servicecategories_id','=','servicecategories.id')
      ->select('servicedetails.id', 'servicedetails.service_mal_short_desc  as servicetitle','servicecategories.maltitle as categoryname', 'servicecategories.iconclass','servicecategories_id as category_id','servicedetails.departments_id as department_id',
         'departments.maltitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl');

      }

        
         if($request->has(['catid','deptid','lifeeventid','keyword']))

         {  


            if($request->catid)
            {
               
               $services->where('servicecategories_id',$request->catid);
               
            }
             if($request->deptid)
            {
               
               $services->where('departments_id',$request->deptid);
               
               
            }
            if($request->lifeeventid)
            {
               
               $services->where('lifeeventcategories_id',$request->lifeeventid);
               
            }
             if($request->keyword)
            {
               
               $services->where('servicedetails.entitle','like','%'.$request->keyword.'%');
               
            }

      }
            
      /* else if($request->starts_with)
      {
         $services->where('servicedetails.entitle','like',$request->starts_with.'%');
         $services->Orwhere('enkeywords','like',$request->starts_with.'%');
         $services->Orwhere('enkeywords','like','%,'.$request->starts_with.'%');
         
      }*/
      $services=$services->get();
      $servicecount=$services->count();

       $totalservices=DB::table('servicedetails')->select('id', 'entitle', 'maltitle')->count();
         if($servicecount>0)
      {

       
         return response()->json(['services'=>$services,'servicecount'=>$servicecount,'totalservices'=>$totalservices,'sessionbil'=> $sessionbil,'success' => true], 200);

      }
      else
         { 
            return response()->json(['services'=>$services,'servicecount'=>$servicecount,'totalservices'=>$totalservices,'starts_with'=>$request->starts_with,'sessionbil'=> $sessionbil,'success' => true], 200);
         }
      }
   }


public function getkeywordservice(Request $request)
   {

      if ($request->ajax()) {
         request()->validate([
            'catid'        =>  'sometimes|nullable',
            'deptid'       =>  'sometimes|nullable',
            'lifeeventid'  =>  'sometimes|nullable',
            'keyword'  =>  'required'
         ]);

         $sessionbil = Session::get('bilingual');

         if ($sessionbil == 1) {
        $services=DB::table('servicedetails')
         
        ->join('departments','servicedetails.departments_id','=','departments.id') 
       ->join('servicecategories','servicedetails.servicecategories_id','=','servicecategories.id')
      ->select('servicedetails.id', 'servicedetails.service_eng_short_desc  as servicetitle','servicecategories.entitle as categoryname', 'servicecategories.iconclass','servicecategories_id as category_id','servicedetails.departments_id as department_id',
         'departments.entitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl');

}
      else
      {
          $services=DB::table('servicedetails')
         
        ->join('departments','servicedetails.departments_id','=','departments.id') 
       ->join('servicecategories','servicedetails.servicecategories_id','=','servicecategories.id')
      ->select('servicedetails.id', 'servicedetails.service_mal_short_desc  as servicetitle','servicecategories.maltitle as categoryname', 'servicecategories.iconclass','servicecategories_id as category_id','servicedetails.departments_id as department_id',
         'departments.maltitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl');

      }

        
         if($request->has(['catid','deptid','lifeeventid','keyword']))

         {  


            if($request->catid)
            {
               
               $services->where('servicecategories_id',$request->catid);
               
            }
             if($request->deptid)
            {
               
               $services->where('departments_id',$request->deptid);
               
               
            }
            if($request->lifeeventid)
            {
               
               $services->where('lifeeventcategories_id',$request->lifeeventid);
               
            }
             if($request->keyword)
            {
               
               $services->where('servicedetails.entitle','like','%'.$request->keyword.'%');
               
            }

      }
            
      /* else if($request->starts_with)
      {
         $services->where('servicedetails.entitle','like',$request->starts_with.'%');
         $services->Orwhere('enkeywords','like',$request->starts_with.'%');
         $services->Orwhere('enkeywords','like','%,'.$request->starts_with.'%');
         
      }*/
      $services=$services->get();
      $servicecount=$services->count();
      $totalservices=DB::table('servicedetails')->select('id', 'entitle', 'maltitle')->count();
      if($servicecount>0)
      {

       
         return response()->json(['services'=>$services,'servicecount'=>$servicecount,'totalservices'=>$totalservices,'sessionbil'=> $sessionbil,'success' => true], 200);

      }
      else
         { 
            return response()->json(['services'=>$services,'servicecount'=>$servicecount,'totalservices'=>$totalservices,'starts_with'=>$request->starts_with,'sessionbil'=> $sessionbil,'success' => true], 200);
         }
   }
   

   }



   public function alphabetsearch(Request $request)
   {

      if ($request->ajax()) {
         request()->validate([
              'starts_with'  =>  'required'
         ]);

         $sessionbil = Session::get('bilingual');

         if ($sessionbil == 1) {
        $services=DB::table('servicedetails')
         
         ->join('departments','servicedetails.departments_id','=','departments.id') 
         ->join('servicecategories','servicedetails.servicecategories_id','=','servicecategories.id')
         ->select('servicedetails.id', 'servicedetails.service_eng_short_desc  as servicetitle','servicecategories.entitle as categoryname', 'servicecategories.iconclass','servicecategories_id as category_id','servicedetails.departments_id as department_id',
         'departments.entitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl');
   }

      else
      {
          $services=DB::table('servicedetails')
         
        ->join('departments','servicedetails.departments_id','=','departments.id') 
       ->join('servicecategories','servicedetails.servicecategories_id','=','servicecategories.id')
      ->select('servicedetails.id', 'servicedetails.service_mal_short_desc  as servicetitle','servicecategories.maltitle as categoryname', 'servicecategories.iconclass','servicecategories_id as category_id','servicedetails.departments_id as department_id',
         'departments.maltitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl');

      }
         $services->where('servicedetails.entitle','like',$request->starts_with.'%');
         $services->Orwhere('enkeywords','like',$request->starts_with.'%');
         $services->Orwhere('enkeywords','like','%,'.$request->starts_with.'%');
         
      
      $services=$services->get();
      $servicecount=$services->count();
      $totalservices=DB::table('servicedetails')->select('id', 'entitle', 'maltitle')->count();
      if($servicecount>0)
      {
         return response()->json(['services'=>$services,'servicecount'=>$servicecount,'totalservices'=>$totalservices,'starts_with'=>$request->starts_with,'sessionbil'=> $sessionbil,'success' => true], 200);
      }
      else
      { 
         return response()->json(['services'=>$services,'servicecount'=>$servicecount,'totalservices'=>$totalservices,'starts_with'=>$request->starts_with,'sessionbil'=> $sessionbil,'success' => true], 200);
         // return response()->json(['success' => false], 422);
      }
   }
   

   }
  


   public function janparichaylogin(Request $request)
   {

   $AuthKey_secret1 = "cOh1EFlUeOpM1iWrC084IV4vh3aC7Eu5";
   $ServiceId1 = "KL0001"; 
   $AESIV1 = "ThVtN46IrzBcQeui";              
   $TimeToLive1 = time();
   
   
   /*HMAC Code START*/
    $hmacString1 = "JanParichay".$TimeToLive1."https://janparichay.pp.nic.in/v1/api/login".$ServiceId1;               
   $hash_hmac1 = hash_hmac('sha512', $hmacString1, $AuthKey_secret1, true); 
    $ClientSignature1 =urlencode(base64_encode($hash_hmac1));   
   /*HMAC Code END*/
   $data_php_sess_id1 = bin2hex(openssl_random_pseudo_bytes(5));
   $EncryptedClientSessionId1= app('App\Http\Controllers\PortalController')->encryption('1234567899', $AuthKey_secret1, $AESIV1);//Encryption START
                    $urls = "https://janparichay.pp.nic.in/v1/api/login?sid=".$ServiceId1."&tid=".$TimeToLive1."&cs=".$ClientSignature1."&string=".$EncryptedClientSessionId1;
   
    //return response()->json(['urls'=>$urls,'success' => true], 200);
      return redirect($urls);


   }


function encryption($data, $key, $iv)  
 {
            define('AES_256_CBC', 'aes-256-cbc');      
            $encrypted = openssl_encrypt($data, AES_256_CBC, $key, 0, $iv);    
            return $encrypted;
}
function decryption($data, $key, $iv)
{
            define('AES_256_CBC', 'aes-256-cbc');  
            $encrypted = $data . ':' . $iv;
            $parts = explode(':', $encrypted);
            $decrypted = openssl_decrypt($parts[0], AES_256_CBC, $key, 0, $parts[1]);
            return $decrypted;
}




public function logout(Request $request)
    {
         
      $AuthKey_secret1 = "cOh1EFlUeOpM1iWrC084IV4vh3aC7Eu5";
      $ServiceId = "KL0001"; 
      $AESIV1 = "ThVtN46IrzBcQeui";              
      $TimeToLive = time();
      
   $ClientToken = Session::get('clientToken'); 
   $ParentToken  = Session::get('parentToken');
   $UserAgent  = Session::get('useragent');
   $BrowserId  = Session::get('browserid');
   $ParichayId  = Session::get('parichayid');
   $hmacString="JanParichay".$TimeToLive."https://janparichay.pp.nic.in/v1/salt/api/client/logout".$ClientToken.$ParentToken.$UserAgent.$BrowserId.$ServiceId.$ParichayId;
   $hash_hmac = hash_hmac('sha512',$hmacString, $AuthKey_secret1, true);
   $ClientSignature =urlencode(base64_encode($hash_hmac)); 
   $url = 'https://janparichay.pp.nic.in/v1/salt/api/client/logout?cid='.$ClientToken.'&sid='.$ServiceId.'&pt='.$ParentToken.'&ua='.$UserAgent.'&brwId='.$BrowserId.'&pid='.$ParichayId.'&tid='.$TimeToLive.'&cs='.$ClientSignature;
      //header("location:$url");  

      Session::flush(); 
       
        return redirect($url);
    }

   
   /*controller close*/
}
