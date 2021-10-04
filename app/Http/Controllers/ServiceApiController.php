<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Servicedetail;
use DB;

class ServiceApiController extends Controller
{


	public function services_landing()
	{
		$letter='A';
		$categories=DB::table('servicecategories')->select('id', 'entitle', 'maltitle')->get();
		$departments=DB::table('departments')->select('id', 'entitle', 'maltitle')->get();
		$life_events=DB::table('lifeeventcategories')->select('id', 'entitle', 'maltitle')->get();
		$services=DB::table('servicedetails')
		->join('departments','servicedetails.departments_id','=','departments.id')	
		->select('servicedetails.id', 'servicedetails.entitle', 'servicedetails.maltitle','servicecategories_id as category_id','servicedetails.departments_id as department_id',
			'departments.entitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl')
		->where('servicedetails.entitle', 'LIKE', $letter.'%')
		->Orwhere('servicedetails.enkeywords', 'LIKE', $letter.'%')
		->Orwhere('servicedetails.enkeywords','LIKE','%,'.$letter.'%')
		->get();

		$totalservices=DB::table('servicedetails')->select('id', 'entitle', 'maltitle')->count();
		return response()->json(['categories'=>$categories,'departments'=>$departments,'life_events'=>$life_events,'services'=>$services,'totalservices'=>$totalservices,'success' => true], 200);
	}

	public function services(Request $request)
	{
		
		//return response()->json(['request'=>$request->all(),'success' => true], 200);

		$services=DB::table('servicedetails')
			
			->join('departments','servicedetails.departments_id','=','departments.id')	
			->select('servicedetails.id', 'servicedetails.entitle', 'servicedetails.maltitle','servicecategories_id as category_id','servicedetails.departments_id as department_id',
			'departments.entitle as departmentname','lifeeventcategories_id as life_event_id','serviceurl');


			if($request->has(['category_id','department_id','life_event_id','keyword']))

			{	


				if($request->category_id)
				{
					
					$services->where('servicecategories_id',$request->category_id);
					
				}
				 if($request->department_id)
				{
					
					$services->where('departments_id',$request->department_id);
					
					
				}
				if($request->life_event_id)
				{
					
					$services->where('lifeeventcategories_id',$request->life_event_id);
					
				}
				 if($request->keyword)
				{
					
					$services->where('servicedetails.entitle','like','%'.$request->keyword.'%');
					
				}

		}
				
		 else if($request->starts_with)
		{
			$services->where('servicedetails.entitle','like',$request->starts_with.'%');
			$services->Orwhere('enkeywords','like',$request->starts_with.'%');
			$services->Orwhere('enkeywords','like','%,'.$request->starts_with.'%');
			
		}
		$services=$services->get();
		
		
		return response()->json(['services'=>$services,'success' => true], 200);
	
	}
	

	
}
