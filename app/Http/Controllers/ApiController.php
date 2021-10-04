<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


use Auth;
use Session;
use DB;


	class ApiController extends Controller
	{
	    /**
	     * Create a new controller instance.
	     *
	     * @return void
	     */
	    
	    

	  public function gettravelerdetails(){
	    	ini_set('max_execution_time', 3600);


	   		$importdate = date('d/m/Y',strtotime("-1 days")); //exit();
	    	// $chkdate = date('d-m-Y',strtotime("-1 days"));
	    	$apikey = 'bb7a54a4-184c-4eb8-8edc-154294105bac';
	        //return response()->json(['result' => $importdate,  200]);
	        // Initialize cURL
	    	$ch = curl_init();

	    	

	    	$values = array(
	    		
	    		'auth_key' => $apikey

	    	);
			// Set URL on which you want to post the Form and/or data
	    	curl_setopt($ch, CURLOPT_URL,'http://ejagratha.kerala.nic.in/api/service.php');
			// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			// 	'auth_key: ' . $apikey,
			// 	'Content-Type: text/xml'
			// 	));


			// Data+Files to be posted
	    	curl_setopt($ch, CURLOPT_POSTFIELDS, $values);
			// curl_setopt($ch, CURLOPT_POSTFIELDS,
	  //                  "xmlRequest=" . $input_xml);

			// Pass TRUE or 1 if you want to wait for and catch the response against the request made
	    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			// For Debug mode; shows up any error encountered during the operation
	    	curl_setopt($ch, CURLOPT_VERBOSE, 1);


			// Execute the request
	    	$response = json_decode(curl_exec($ch), true);


	    	if($response['status'] == 'SUCCESS'){

	    		$expatniccnt = Expatriate::where('arrivaldate',$response['result'][0]['checkpostcrossdate'])->where('entrystatus',0)->count();
	    		 //dd($expatniccnt);
	    		$i=0;
	    		if($expatniccnt == 0){	

	    			foreach($response['result'] as $fetchres){
	    				$i++;
	    				$fetchedarrivaldate = $fetchres['checkpostcrossdate'];
	    			
	    				$quarantinetype = $fetchres['quarantinetype'];
	    				if($quarantinetype=='Home'){
	    					$quarantinestatus = 'HQ';
	    				} elseif($quarantinetype=='Institutional'){
	    					$quarantinestatus = 'IQ';
	    				} else {
	    					$quarantinestatus = $quarantinetype;
	    				}

	    				$age = (int)$fetchres['age'];

	    				$expatnic = array(
	    					'arrivaldate' => $fetchedarrivaldate,
	    					'arrivalisodate'=>date('Y-m-d',strtotime($fetchedarrivaldate)),
	    					'originatingcountry' => '',
	    					'originatingstate' => $fetchres['originatingstate'], 
	    					'originatingdistrict' => $fetchres['originatingdistrict'],
	    					'fromaddress' => $fetchres['fromaddress'],  
	    					'arrivalpoint' => $fetchres['checkpost'], 
	    					'name' => $fetchres['name'],
	    					'gender' => $fetchres['gender'],
	    					'dateofbirth' => $fetchres['dateofbirth'], 
	    					'age' => $age,
	    					'addressinkerala' => $fetchres['addressinkerala'],  
	    					'mobile' => $fetchres['mobile'],
	    					'covidcarecentre' => $fetchres['covidcarecentre'],
	    					'district' => ucfirst(strtolower($fetchres['destinationdistrict'])), 
	    					'lsg' => ucfirst(strtolower($fetchres['localbodyname'])),
	    					'localbodytype' => $fetchres['type'],
	    					'redzonedistrict' => $fetchres['redzonedistrict'], 
	    					'quarantinestatus' => $quarantinestatus,
	    					'referenceid' => $fetchres['referenceid'],
	    					'importeddate' => date('Y-m-d'),
	    					'entrystatus' => 0,
	    					'flag' => 'norka'
	    				);

	    				DB::collection('expatriates')->insert($expatnic);
		            	// return response()->json(['message' =>'Details Added Successfully!!!',  200]); ///date mismatch
		            // } else {
		            	// return response()->json(['message' =>'Already Exists!!!',  200]); //same date already exists
		            // }




			}return response()->json(['message' =>'Details Added Successfully'. $i.'-'.$importdate,  200]); ///date mismatch

		}else{
			return response()->json(['message' =>'Data already fetched'.'-'.$importdate,  200]); ///date mismatch
		}

	}

}

public function getexpatniclist($startdate,$enddate)
{   
		ini_set('memory_limit','256M');
      //$expatniclist = Expatriatenic::where('arrivaldate',$date)->get();
       $expatniclist = Expatriatenic::whereBetween('arrivaldate', array($startdate, $enddate))->get();
       //print_r($expatniclist); exit;
      $expatarray = array();
      foreach($expatniclist as $expatniclists)
      {
          
          $expatarray[] = array( 'name' => $expatniclists->name, 'district' => $expatniclists->district,'lsg' => $expatniclists->lsg);
      } //activitylist foreach
      	
      	print_r($expatarray);exit;
      return response()->json(['expats' => $expatarray, 200]);
      
}


public function pushdataall(Request $request)
{   

	if($request->_token != '25b1d40e9db2db80ab3eb59ec7e2bbda'){
    		$error['message'] = 'Invalid Token';
    		$error['status']= false;
    		return json_encode($error);
    	}


		ini_set('memory_limit', '-1');
    	error_reporting(0);
	      
	    $frmdt = Carbon::today()->subDays(28)->format('Y-m-d');
	    $todt  = Carbon::today()->format('Y-m-d');

	    // $alldata = Expatriate::where('arrivalisodate', $date)->get();
	    $expatniccnt = Expatriate::where('arrivalisodate','>=',$frmdt)
                    ->where('arrivalisodate','<=',$todt)
                    ->where('quarantinestatus','HQ')
	    			->get();
       $expatarray = array();
      foreach($expatniccnt as $expatniclists)
      {
          
          $expatarray[] = array( 'name' => $expatniclists->name, 'mobile' => $expatniclists->mobile);
      }

      $data['userdata'] = $expatarray;
		// $error['status']= true;
		$data['status'] = true;

		return json_encode($data);
      
}





}