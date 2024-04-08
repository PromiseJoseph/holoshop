<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Http\Helpers\cartHelper;
use Error;
use Illuminate\Support\Facades\Cookie;
use App\Http\Helpers\responseHelper;


class cartController extends  Controller
{
    /**
     * Display a listing of the resource.
     *    
     */
    private function getUnregUser() : Array
    {
        $request = \request();

        $user = json_decode($request->cookie('cart_items','[]'),true);
        return $user;

    }

    public function respondErorr()
    {
        return response()->json(
            [
                'error ' => responseHelper::throwMessage('requestError')
         ],403);
    }
    
    public function apiIndex( $id)
    {
      
        
    if ($id){
      
        $userId = $id;
      
        $authUser = self::verifyuser($userId);

        if($authUser == true){
            $cartItems = User::find($userId)->Cart;

            $product= Cart::where('user_id',$userId)->get();

            $productCount = $product->count();
        
            if($productCount){

                return response()->json(
                    [
                        'cartItems'=>$cartItems,
                    //  'productItems'=>$productItems,
                     'count' => $productCount,
                     ],200);
            
                }
                
                return $this->respondErorr();
        }
         // unregistered users

        elseif($authUser == false){
            
         $cookieArr= self::getUnregUser();
            
            if($cookieArr){
                return response()->json([
                    'cookieArr' => $cookieArr,
                ],200);
            }
             return response()->json([
               'count'=>0,
            ],200);

            // return self::respondErorr();
        } //end of unregistered user

                        
    }// end of authenticated user
    
   
}

// cart page setup
    public function index()
    {
       unset($cartItems);
        
     if ( $user = Auth::user()){
      
       $userId = $user->id;
      
        $cartItems = User::find($userId)->Cart;

        $cartProduct= Cart::where('user_id',$userId)->get();
     
        $product = Product::where('id',$cartProduct);
        
        // $productItems = Product::find($cartProduct);

            $productCount = $cartProduct->count();
            
            $totalPrice= 0;
        foreach($cartItems as $cartItem){
          $totalPrice +=  $cartItem->product_price * $cartItem->quantity;
        }
           
           return view('cart.index',compact('cartItems',
                    //  'productItems'=>$productItems,
                     'productCount','totalPrice'
            ));

    }
    
    // unregistered users
   $cookieArr= self::getUnregUser();
    
        $cartItems= $cookieArr;

   
    return view('cart.index',compact('cartItems'));
      
   
  


}
    /**
     * Store a newly created resource in storage.
     */
    public function cartStore(Request $request, $product)
    {
     
        $quantity = $request->post('quantity',1);
        //needed to change quantity to integer from string
        $quantity= intval($quantity);
       
        $userid = $request->post('userid');
        $productName = $request->post('product_name');
        
        $productPrice =intval( $request->post('product_price'));
        
        if($userid != null ){
            $cartItem = Cart::Where([
               'user_id' =>$userid,
              'product_id' => $product
             ])->first();
        
             //checks if users already added same product to cart already
           if($cartItem) {
                    $cartItem->quantity +=$quantity;
                    $cartItem->update();
                    return response([ 
                            'status'=>'sucess'
                    ],200);
                }
                // runs if  user is adding a particular product for the first time
                else{
                    // $productdata = Product::where('id',$product);
                     $data = [
                        'user_id' => $userid,
                        'product_id' => $product,
                        'product_name' =>$productName,
                        'product_price'=> $productPrice,
                        'quantity' => $quantity
                    ];
                   Cart::create($data);
                  
                        return response([ 
                            'status' => "success"
                        ],200);
                }
        
                
         } else{
            /** 
             *  get current cookie cart_items if there's no key
             * it returns empty array with the new key
            */
            $cartItems = json_decode($request->cookie('cart_items','[]'),true);
            $productFound =false;
            //looping through the cartItems if we have any product same as the current product
            foreach($cartItems as $item){
                if($item['product_id'] ===  $product){
                    $item['quantity']+= $quantity;
                    $productFound = true;
                    break;
                }
            }
            if(!$productFound){
                $cartItems[] = [
                    'user_id' =>null,
                    'product_id' => $product,
                    'product_name' => $productName,
                    'product_price'=> $productPrice,
                    'quantity' => $quantity,
                    'price' =>$product,
                ];
                            
                //creating an array $cartItmes in a cookie as cart_items
                
                //  $cookie= Cookie::make('cartItems', json_encode($cartItems),60*24*30);
                //  dd(Cookie::has('cartItems'));
                //  return response(['count' => cartHelper::getCountFromItems($cartItems), 'msg'=> 'successfully added'],200);
                 
            }

        //    
        }

    }

    private function verifyuser($userid){
       $userid = User::find($userid);
       
        if($userid){
            return true;
        }
        else{
            return false;
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
