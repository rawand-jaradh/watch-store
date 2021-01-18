<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\User;
use Session;
class CarController extends Controller
{
   public function products(){
       $products=Product::all();
       return view('/services',compact('products'));
   }

   
public function addtocart(Request $request,$id){
    $product=Product::find($id);
    $oldCart=Session::has('cart')? Session::get('cart'): null;
    $cart=new Cart($oldCart);
    $cart->add($product,$product->id);
    $request->session()->put('cart',$cart);
   
    return redirect('/products');
}
public function shoppingcart(){
if(!Session::has('cart')){
 return view('/shoppingcart');
}
$oldCart =Session::get('cart');
$cart=new Cart($oldCart);
return view ('/shoppingcart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
}

   public function checkout(){
    if(!Session::has('cart')){
      return view('/shoppingcart');
  }
  $oldCart =Session::get('cart');
  $cart=new Cart($oldCart);
  $total=$cart->totalPrice;
  return view('/checkout',compact('total'));
  }
  

 
  public function register(){
    return view('register');
   }
   public function login(){
     
               
     return view('/login');
     
   }
   public function logout(){
     auth()->logout();
     return redirect('/home');
   }
   public function storeregister(Request $request){
    $this->validate($request,[
        'name'=> 'required',
        'email'=> 'required',
        'password'=> 'required',
       
    ]);
     $user=new User;
     $user->name=$request->name;
     $user->email=$request->email;
     $user->password=$request->password;
     $user->save();
     auth()->login($user);
    return redirect('/home');
    
    }
    public function storelogin(){
     auth()->attempt(request(['email','password']));
     return redirect('/home');
    }
  }

  
  
 

 
