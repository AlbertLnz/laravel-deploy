<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    public function prueba(){
        return response(['message' => "bienvenido al controler con response()"], 200);
    }


    public function index(){
        return Restaurant::all();
    }

    public function showUserRestaurants($id){
        if(Auth::user()->id === intval($id)){
            $restaurants = Restaurant::where('user_id', intval($id))->get();
            $count_restaurants = $restaurants->count();
            return response(['number_of_restaurants' => $count_restaurants, 'restaurants' => $restaurants], 200);
        }else{
            return response(['error' => "Access denied!"], 403);
        }
    }

}
