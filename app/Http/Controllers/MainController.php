<?php

namespace App\Http\Controllers;
//namespace App\Helpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Functions;
use DB;
use Cart;
use Redirect;

//use Artisaninweb\SoapWrapper\SoapWrapper;
//use App\Soap\Request\GetConversionAmount;
//use App\Soap\Response\GetConversionAmountResponse;
use GuzzleHttp\Client;
class MainController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function detail($idnya){
        $cart= Cart::content()->count();
        $id = Functions::decode($idnya);
        $item =DB::table('items')
            ->where('items.id' ,'=',$id)
            ->first();
        $dimages = DB::table('itemimages')
            ->where('items_id','=',$id)
            ->get();
        $prices = DB::table('prices')
            ->join('units','units.id','=','prices.units_id')
            ->join('items','items.id','=','prices.items_id')
            ->where('items_id','=',$id)
            ->select('prices.id','unitname','images','prices','item_name')
            ->get();
//        return $prices;
        $items =DB::table('items')
            ->join('detailcategorys','detailcategorys.id','=','items.detailcategorys_id')
            ->join('categories','categories.id','=','detailcategorys.categories_id')
            ->join('brands','brands.id','=','items.brands_id')
            ->where('detailcategorys_id','=',$item->detailcategorys_id)
            ->where('items.id','!=',$item->id)
            ->get();

        return view('detail',compact('item','dimages','prices','items','cart'));
    }


    public function cart(Request $request){
        $cart= Cart::content();
//        return Cart::destroy();
        $count= Cart::content()->count();
        return view('cart',compact('cart','count'));

    }

    public function savecart(Request $request){
        $requestData = $request->all();
        $hitung=count($requestData['id']);
        $total="";
        for($i=0;$i<$hitung;$i++){
            if($requestData['qty'][$i] !=0){

                  Cart::add($requestData['id'][$i],$requestData['items'][$i]."_".$requestData['images'][$i],$requestData['qty'][$i], $requestData['price'][$i],['unitname'=>$requestData['unitname'][$i]]);
            }
            $total+=$requestData['qty'][$i];
            }
//         Cart::destroy();
//          return Cart::content();
        if (Cart::content()->count()<=0){
            return Redirect::back()->with('message','0');
        }
        else {
            return Redirect::back()->with('message', '1');
        }

// Cart::destroy();
//        return Cart::content()->count();
//  return Cart::content();
    }

 function updatecart(Request $request){
//        $data=$request->all();
        $id=$request->id;
        $value=$request->value;
        Cart::update($id, $value);
        return Cart::content();
     //return $request->value;
    }

  function demo(Request $request){

//      $client = new Client();
//
//      $res = $client->request('GET', 'https://api.cloudways.com/api/v1', [
//
//'headers' => [
//
//          'Accept' => 'application/json',
//
//          'Content-type' => 'application/json'
//
//      ]]);
          // $client = new Client();
//      $res = $client->request('GET', 'http://localhost:8080/SoapAuth/wsAuthImpl?wsdl', [
//          'auth' => ['surya', 'handoko'],
//          ['allow_redirects' => false]
//      ]);
      $client = new Client(array(
          'defaults' => array(
              'headers' => array(
                  'Authorization' => 'surya:handoko',
              ),
              'base_uri'=>'http://localhost:8080/SoapAuth/wsAuthImpl?wsdl'
          ),
      ));
//      echo $res->getStatusCode();
     //    $client = new Client([
//        'base_uri'=>'http://localhost:8080/SoapAuth/wsAuthImpl?wsdl',
//        'auth' => [
//            'surya',
//            'handoko'
//        ]
//    ]);
  }
}