<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show() {
        // $cart = Http::get('database/data/shoes.json');
        $cart = file_get_contents(base_path('database/data/shoes.json'));
        $datas = json_decode($cart, true);
        $data = $datas['shoes'];
        $collect = collect($data);
        // $name = $collect[0]['name'];
        // dd($collect);
        return view('index',compact('collect','cart'));

        // return response()->json($name);
        // return response()->json(['viewcart' => $viewcart], status :200);

        // return view('index',compact('datas'));
    }

    // public function addToCart($id) {
    //     // dd($id);
    //     // session()->flush();

    //     $cart = file_get_contents(base_path('database/data/shoes.json'));
    //     $datas = json_decode($cart, true);
    //     $data = $datas['shoes'];
    //     $item = collect($data)->where('id',$id);
    //     // $json = json_decode($item, true);
    //     // dd($json);
    //     foreach($item as $a) {
    //         $name =$a['name'];
    //         $price =$a['price'];
    //         $image =$a['image'];
    //     }
    //     // $name = $item[];
    //     // dd($name);
    //     $cart = array();
    //     $cart[$id] = [
    //         'name' => $name,
    //         'price' => $price,
    //         'quantity' => 1,
    //         'image' => $image
    //     ];
        // if(isset($cart[$id])) {
        //     $cart2 = array();
        //     $cart2[$id] = [
        //         'name' => $name,
        //         'price' => $price,
        //         'quantity' => 1,
        //         'image' => $image
        //     ];
        //     $merge = array_merge($cart[$id], $cart[$id]);
        // } else {

        // }
        // session()->put('cart',$cart);
        // return response()->json([
        //     'code' => 200,
        //     'message' => 'success'
        // ], status:200);
        // dd(session()->get('cart',$cart));

    //     $collect = collect($data);
    //     foreach( $data as $item ) {
    //         foreach ($item as $i) {
    //             if($i['id'] == $id) {
    //                 dd($i);
    //             }
    //             else dd('Không có id này');
    //         }

    //     }
        // $ItemId = $collect[$id]['id'];
        // dd($ItemId);
        // foreach($collect as $item) {
        //     $ItemId = [
        //         'name' => $item[$id]['name'],
        //         'price' => $item[$id]['price'],
        //         'quantity' => 1,
        //         'image' => $item[$id]['image'],
        //         'color' => $item[$id]['color'],
        //     ];
            // dd($datas);
        // }
        
        // $cart = session()->get( key: 'ItemId');
        // session()->push('cart',$cart);
        // return response()->json([
        //     'code' => 200,
        //     'ItemId' => [
        //         'name' => $collect[$id-1]['name'],
        //         'price' => $collect[$id-1]['price'],
        //         'quantity' => 1,
        //         'image' => $collect[$id-1]['image'],
        //         'color' => $collect[$id-1]['color'],
        //     ],
        // ], status:200);
        // return $cart;


    // }
}
