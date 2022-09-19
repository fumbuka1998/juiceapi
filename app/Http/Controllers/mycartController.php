<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Carts;
use App\Models\Products;
use App\Models\SMS;
use App\Models\Orders;
use App\Models\User;


class mycartController extends Controller
{
    public function createcart(Request $request, $id)
    {
        $myuser = Auth::user();

        $cart = new carts();

        $cart->$myuser['name'] = $request->name;
        $cart->$myuser['phone'] = $request->phone;
        $cart->$myuser['address'] = $request->address;



        $myprod = product::find($id);

        $cart->$myprod['producttitle'] = $request->title;
        $cart->$myprod['quantity'] = $request->quantity;
        $cart->$myprod['price'] = $request->price;
       

        $cart->save();

        return ('cart was added successfully');
    }

    public function destroyCart($id)
    {
        $cart= carts::find($id);

        $cart->delete();

        return ('cart was deleted successfully');
    }


    public function createProduct(Request $request)
    {

        $data = new products();

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->quantity=$request->quantity;

        $data->save();

        return ('product was added successfully');

    }

    public function readProduct()
    {
        $data =products::all();

        //$data = products::find($id);

        return ($data);

    }

    public function createSms(Request $request)
    {
        $data = new sms();

        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->message=$request->message;

        $data->save();

        return ('the message was sent successfully');
    }

    public function destroySMS($id)
    {
        $data=sms::find($id);

        $data->delete();

        return ('sms has been deleted successfully');
    }

    public function createOrder(Request $request, $id)
    {   
        $mycar = cart::find($id);

        $myorder = new orders();

        

        $myorder->name = $request->name;
        $myorder->phone = $request->phone;
        $myorder->address = $request->address;
        $myorder->productname = $request->productname;
        $myorder->quantity = $request->quantity;
        $myorder->price = $request->price;
        $myorder->status = $request->status;
       

       $result= $myorder->save();
       if($result)
       {
        return ('order has been created successfully');
       }
       else{
        return ('no order wa made by the poor customer');
       }

        
        
    }

}

?>