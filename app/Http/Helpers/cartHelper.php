<?php
namespace  App\Http\Helpers;
use App\Http\Controllers\cartController;
use App\Models\Cart;


/** */
class cartHelper{

    public static function getCartItemsCount(): int 
    {
        $request = \request();
        $user = $request->user();

        // cartitem =>  cart model
        if($user) {
            return Cart::where('user_id',$user->id)->sum('quantity');
        }
        //if worked out using cookie else change 
        else{
            $cartItems= self::getCookiesCartItem();
            return array_reduce(
                $cartItems, fn($carry,$item) => $carry + $item['quantity'],
                0
            );
        }

    }
    public static function getCartItems(){
            $request = \request();
            $user = $request->user();

            if ($user) {
                return Cart::where('user_id',$user->id)->get()->map(
                   fn($item) => ['product_id' => $item->product_id,'quantity' =>$item->quantity] 
                );
            } else{
                return self::getCookiesCartItem();
            }

    }

    public static function getCookiesCartItem(){
        $request = \request();
        return json_decode($request->cookie('cart_item','[]',true));

    }

    public static function getCountFromItems($cartItems){
            return array_reduce(
                $cartItems,
                fn($carry,$item ) => $carry + $item['quantity'],
                0
            );
    }
    public static function moveCartItemsToDb(){
        $request = \request();
        $cartItems = self::getCookiesCartItem(); 
        $dbCrtItms = Cart::where('user_id', $request->user()->id)->get()->keyBy('product_id');

        $newCartItems =[];
            // check if product_id already present in the cart and execute code 
        foreach ($cartItems as $cartItem){
            if(isset($dbCrtItms[$cartItem['product_id']])){
                continue;
            }
            $newCartItems[]= [
                'user_id' => $request->user()->id,
                'product_d' => $cartItem['product_id'],
                'quantity'  => $cartItem['quantity'],
            ];
            //executes if code product_id not in db

            if(!empty($newCartItems)) {
                Cart::insert(
                    $newCartItems
                );
            }

        }
        
    }
}

