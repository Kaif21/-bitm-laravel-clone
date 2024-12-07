<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    private static $customer,$image,$imageName,$directory,$imageUrl;
    public static function newCustomer($request){

        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'images/upload/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        self::$customer = new Customer();
        self::$customer->name = $request->name;
        self::$customer->email = $request->email;
        self::$customer->mobile = $request->mobile;
        self::$customer->address = $request->address;
        self::$customer->image = self::$imageUrl;
        self::$customer->save();

    }
    public static function updateCustomer($request,$id){
        self::$customer = Customer::find($id);
        if($request->file('image')){
            self::$image = $request->file('image');
            self::$imageName = self::$image->getClientOriginalName();
            self::$directory = 'images/upload/';
            self::$image->move(self::$directory,self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;
        }
        else{
            self::$customer->image = self::$customer->image;
        }
        self::$customer->name = $request->name;
        self::$customer->email = $request->email;
        self::$customer->mobile = $request->mobile;
        self::$customer->address = $request->address;
        self::$customer->image = self::$imageUrl;
        self::$customer->save();

    }
    public static function destroyCustomer($id){
        self::$customer = Customer::find($id);
        self::$customer->delete();

    }

}
