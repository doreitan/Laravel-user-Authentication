<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class controller1 extends Controller
{
    public function index()
	{
		$hakoteret="זהו דף הבית";
		return view ("pages.index")->with("hakoteret", $hakoteret);
		
	}
	
	public function about()
	{
		return view ("pages.about");
		
		
	}
	
	public function services()
	{
		$my_Array=array(
						"hakoteret"=> "להלן השירותים המוצעים",
						"hapritim"=>
							["parit1","parit2","parit3"]
		               );
	
		
		return view ("pages.services")->with($my_Array);
		
		
	}
	
	public function contact()
	{
		return view ("pages.contact");
		
		
	}	
	
	
}
