<?php

namespace App\Imports;
use ModelHelper;
use App\Models\Location;

use App\Models\Store;

use App\Models\Country;
use App\Models\Property;

use PhpOffice\PhpSpreadsheet\Shared\Date;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Str;


class PropertyCouponImport implements ToCollection,WithCalculatedFormulas
{


    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
   
    public function collection(Collection $rows)
    {
    	//dd(ItemHistory::where("item_id",1)->get());
    	//dd(Item::find(1));
       	foreach($rows as $key=>$row){
	        if($key==0){
	            continue;
	        }

	        $data=[];
	   		
	        if($row[0]==""){continue;}else{$data['name']=$row[0];}
	        if($row[1]!=""){
	        	$data['description']=$row[1];
	        }
	       

	        if($row[2]!=""){
	        	$data['badge_text']=$row[2];
	        }
	       

	        if($row[3]!=""){
	        	$data['product_type']=strtolower($row[3]);
	        }
	       

	        if($row[4]!=""){
	        	$data['coupon_code']=$row[4];
	        }
	       

	        // if($row[5]!=""){
	        // 	$country=Country::where("title",$row[5])->first();
	        // 	if($country)
	        // 	$data['country_id']=$country->id;
	        // }
	       

	        if($row[6]!=""){
	        	$country=Store::where("title",$row[6])->first();
	        	if($country)
	        	$data['store_id']=$country->id;
	        }

	        if($row[7]!=""){
	        	$country=Location::where("name",$row[7])->first();
	        	if($country)
	        	$data['location_id']=$country->id;
	        }

	        if($row[8]!=""){
	        	$data['affiliate_url']=$row[8];
	        }

	        if($row[9]!=""){
	        	$data['end_date']=date('Y-m-d',strtotime($row[9]));
	        }
	        if($row[10]!=""){
	        	$data['ordering']=$row[10];
	        }else{
	        	$data['ordering']=9999;
	        }
	        if($row[11]!=""){
	            if($row[11]=="yes"){
	        	    $data['exclusive']="true";
	            }else{
	                 $data['exclusive']="false";
	            }
	        }else{
	            $data['exclusive']="false";
	        }
	        if($row[12]!=""){
	        	$data['no_of_use']=$row[12];
	        }
	        $data['seo_url']=Str::of($data['name'])->slug('-')->value;
            $res=Property::where("seo_url",$data['seo_url'])->first();
            if($res){
                $data['seo_url']=$data['seo_url'].'-'.uniqid();
            }


		 	$data['meta_keywords']=$data['name'];
			
	        
	        $data['meta_description']=$data['name'];
	        
	        
	        $data['meta_title']=$data['name'];
	        
	       
	       	Property::create($data);

	      
        }
     
    }


   
}
