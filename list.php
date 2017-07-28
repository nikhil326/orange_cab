<?php
function getCollegeList($state,$dis)
{
	
	$url="http://api.data.gov.in/resource/30461d62-f67e-476d-8587-80a7eae062aa?format=json&api-key=fb9bf33b84f8336cdcdfca90993c0f3b&filters[state_name]=".$state."&filters[district_name]=".$dis."&fields=s_no_,university_name,college_name,college_type,state_name,district_name&limit=3766";
	$json =@file_get_contents($url);
    $data=  json_decode($json);
   
   if($data->status=="ok")
  {

   	print_r($data);
  }
  else
  {
             
    return false;
  }
} 

$result=getCollegeList("Maharashtra","Yavatmal");
?>