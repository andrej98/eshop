<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\File;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = Category::all()->count();
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'brand' => 'required',
            'color' => 'required',
            'category' => 'required|numeric|min:1|max:'.$categories,
        ]);

        $product = Product::create(['name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'brand' => $request->brand,
        'color' => $request->color,
        'category_id' => $request->category
        ]);
        return response()->json(['id' => $product->id]);
    }

    public function uploadImages(Request $request, Product $product){
        $file = $request->file('file');

        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $storage_500 = public_path('storage/productsimages/images500/');
        $storage_200 = public_path('storage/productsimages/images200/');
        $storage_150 = public_path('storage/productsimages/images150/');
        $storage_100 = public_path('storage/productsimages/images100/');

        $photo = \App\Image::create([
        'file' => $file->hashName(),
        'product_id' => $product->id
        ]);

        $image = Image::make($file->getRealPath());

        $image->resize(500, 500)->save($storage_500.$file->hashName(),85)
        ->resize(200, 200)->save($storage_200.$file->hashName(),85)
        ->resize(150, 150)->save($storage_150.$file->hashName(),85)
        ->resize(100, 100)->save($storage_100.$file->hashName(),85);
        $photo->save();
    }

    public function deleteImages(Product $product, Request $request){
        $storage_500 = public_path('storage/productsimages/images500/');
        $storage_200 = public_path('storage/productsimages/images200/');
        $storage_150 = public_path('storage/productsimages/images150/');
        $storage_100 = public_path('storage/productsimages/images100/');

        $images = $request->images;
        // return response()->json($images);

        foreach($images as $image) {
            if(File::exists($storage_500.$image)){
                File::delete($storage_500.$image);
            }
            if(File::exists($storage_200.$image)){
                File::delete($storage_200.$image);
            }
            if(File::exists($storage_150.$image)){
                File::delete($storage_150.$image);
            }
            if(File::exists($storage_100.$image)){
                File::delete($storage_100.$image);
            }
            \App\Image::where('file', $image)->delete();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product['images'] = $product->images;
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'brand' => 'required',
            'color' => 'required',
            // 'category' => 'required|numeric|min:1|max:'.$categories,
        ]);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->brand = $request->brand;
        $product->color = $request->color;

        $product->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $storage_500 = public_path('storage/productsimages/images500/');
        $storage_200 = public_path('storage/productsimages/images200/');
        $storage_150 = public_path('storage/productsimages/images150/');
        $storage_100 = public_path('storage/productsimages/images100/');

        $images = $product->images;
        foreach($images as $image) {
            if(File::exists($storage_500.$image->file)){
                File::delete($storage_500.$image->file);
            }
            if(File::exists($storage_200.$image->file)){
                File::delete($storage_200.$image->file);
            }
            if(File::exists($storage_150.$image->file)){
                File::delete($storage_150.$image->file);
            }
            if(File::exists($storage_100.$image->file)){
                File::delete($storage_100.$image->file);
            }
        }
        if(Product::exists($product)){
            $product->delete();
        }
        return response()->json(['status'=>'success','msg' => 'Product deleted successfully']);
    }

    public function list($page) {
        // get rowsPerPage from query parameters (after ?), if not set => 5
        $rowsPerPage = request('rowsPerPage', 5);

        // get sortBy from query parameters (after ?), if not set => name
        $sortBy = request('sortBy', 'name');

        // get descending from query parameters (after ?), if not set => false
        $descendingBool = request('descending', 'false');
        // convert descending true|false -> desc|asc
        $descending = $descendingBool === 'true' ? 'desc' : 'asc';

        // pagination
        // IFF rowsPerPage == 0, load ALL rows
        if ($rowsPerPage == 0) {
            // load all products from DB
            $products = DB::table('products')
                ->orderBy($sortBy, $descending)
                ->get();
        } else {
            $offset = ($page - 1) * $rowsPerPage;

            // load products from DB
            $products = DB::table('products')
                ->orderBy($sortBy, $descending)
                ->offset($offset)
                ->limit($rowsPerPage)
                ->get();
        }

        // total number of rows -> for quasar data table pagination
        $rowsNumber = DB::table('products')->count();

        return response()->json(['rows' => $products, 'rowsNumber' => $rowsNumber]);
    }
}
