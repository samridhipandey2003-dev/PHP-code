<?php

require_once __DIR__.'/query-builder/Query.php';
require_once __DIR__.'/functions.php';

$request_type = handle_request();

$params = explode('/',$_SERVER['REQUEST_URL']);
$resource = @$params[count(@$params)-2];
$id = @$params[count(@$params)-1];

switch($request_type):
case 'GET':
process_get($id);
break;
case 'POST':
    process_post();
    break;
case 'PUT':
    process_put($id);
    break;
case 'PATCH':
    process_patch();
    break;
case 'DELETE':
    process_delete($id);
    break;
default:
    die('Invalid Request');
	break;
endswitch;

function process_get($id=''){
	global $resource;
	$query = new Query();
	if($id==''){
		$records  =  $query->select('*')->table($records)->allRecords();
	}
	if($id){
		$records = $query->select('*')->table($records)->where('id',$id)->first();
	}
if($records==false){
	$responce = array(
	    'code'=>201,
		'status'=>false,
		'massage'=>'Records not found for '.$resource,
		'data'=>[],
	);
}else{
	$responce = array(
	    'code'=>200,
		'status'=>true,
		'massage'=>'Records found ',
		'data'=>$records,
	);
}

header("Content-Type:application/json");
http_response_code(200);
echo json_encode($responce,JSON_PRETTY_PRINT);
exit();
}

function process_post(){
	global $resource;
	$formdata = $_REQUEST;
	if(isset($formdata)){
		$query = new Query();
		try{
			if($query->insert($resource,$formdata)){
				$id = $query->getId();
					$responce = array(
	                    'code'=>200,
		                'status'=>true,
		                'massage'=>'Records Inserted Successfully.',
		                'error'=>false,
		                'data'=>[
		                'id' => $id
		             ],
               	);
			}else{
				throw new Exception;
			}
		}catch(Exception $e){
			$responce = array(
			     'code'=>201,
		         'status'=>false,
		         'massage'=>'Records Inserted Successfully.',
		         'error'=>$e->getMessage(),
		         'data'=>[],
			);
		}	
		 header("Content-Type:applocation/json");
		 http_response_code(200);
		 echo json_encode($responce,JSON_PRETTY_PRINT);
		 exit();	
	}

function process_patch(){
	
	
}
function process_delete($id){
	//method :post formdata _method = DELETE
	global $resource;
	$query= new Query();
	
	try{
		if($query->delete($resource)->where('id',$id)->commit())
		{
			$responce = array(
			     'code'=>200,
		         'status'=>true,
		         'massage'=>'Records Deleted Successfully.',
		         'error'=>false,
		         'data'=>[],
			);
		}else{
			throw new Exception();	
		}		
	}
	catch(Exception $e){
		
	        $responce = array(
			     'code'=>201,
		         'status'=>false,
		         'massage'=>'Records not Inserted Successfully.',
		         'error'=>$e->getMessage(),
		         'data'=>[],
			);
	}
	
		 header("Content-Type:applocation/json");
		 http_response_code(200);
		 echo json_encode($responce,JSON_PRETTY_PRINT);
		 exit();	
}

}






