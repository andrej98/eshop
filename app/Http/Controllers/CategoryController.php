<?php

namespace App\Http\Controllers;


use App\Product;


class CategoryController extends Controller
{

    public function show(){

        $products= Product::where('category_id','=',request('id'));

        $queries =[];

        if(request()->has('price0')) {
            if(request('price0')!=''){
                $products=$products->where('price','>',request('price0'));
                $queries['price0']=request('price0');
            }
        }

        if(request()->has('price1')) {
            if(request('price1')!=''){
                $products=$products->where('price','<',request('price1'));
                $queries['price1']=request('price1');
            }

        }

        if(request()->has('brand')) {

            $brands=request('brand');

            $products=$products->whereIn('brand', $brands);
            $queries['brand']=request('brand');
        }

        if(request()->has('color')) {

            $colors=request('color');

            $products=$products->whereIn('color', $colors);
            $queries['color']=request('color');

        }

        if(request()->has('order')){

            if(request('order')=='alp') $products= $products->orderBy('name', 'asc');
            else if(request('order')=='asc') $products= $products->orderBy('price', 'asc');
            else $products= $products->orderBy('price', 'desc');

            $queries['order']=request('order');
        }
        else  $products= $products->orderBy('name', 'asc');

        $products=$products->paginate(8)->appends($queries);
        return view('categories.category',compact('products',$products));
    }
}
