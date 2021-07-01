<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Card_details;
class CardController extends Controller
{
    public function create()

    {
    	return view('card_page.carddetail');
    }


   public function cardsave(Request $a)
   {
   	$data= new card_details;
    $data->name=$a->name;
    $data->email=$a->email;
    $data->description=$a->description;
    $data->contact=$a->contact;
    $data->address=$a->address;
    $data->save();

    if($data)
    {
    return redirect('cardpage')->with('message','Registered Successfully');
    
}
   } 


public function displaycard()
{
  $data= Card_details::all();
  return view('card_page.dashboard',compact('data'));
}


public function showcard($id)
{
  $data=Card_details::find($id);
  return view('card_page.showcard',compact('data'));
}


public function editcard($id)
{
  $data=Card_details::find($id);
  return view('card_page.editcarddet',compact('data'));
}


 public function updatecard(Request $a)
 {
   $data= card_details::find($a->id);
    $data->name=$a->name;
    $data->email=$a->email;
    $data->description=$a->description;
    $data->contact=$a->contact;
    $data->address=$a->address;
    $data->save();

    if($data)
    {
    return redirect('dashboard')->with('message','Updated Successfully');;
    
}
 }
 

 public function delcard($id)
    {
        
        $data = card_details::find($id);
        $delete = $data->delete();
         if($data)
            {
                return redirect('dashboard')->with('message','Deleted Successfully');
            }
    
    }

}
