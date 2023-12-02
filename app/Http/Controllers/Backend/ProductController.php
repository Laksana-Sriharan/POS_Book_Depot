<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;

use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductImport;
use Storage;
use Illuminate\Support\Facades\File;



class ProductController extends Controller
{
    public function AllProduct(){

        $product = Product::latest()->get();
        return view('backend.product.all_product',compact('product'));
    
       } // End Method 

       public function AddProduct(){

        $category = Category::latest()->get();
        $supplier = Supplier::latest()->get();
        return view('backend.product.add_product',compact('category','supplier'));
       }// End Method 


       public function StoreProduct(Request $request){ 

        $pcode = IdGenerator::generate(['table' => 'products','field' => 'product_code','length' => 4, 'prefix' => 'PC' ]);

           
       
            $image = $request->file("product_image");
            $img = $request->image;
            if($image){
                    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    Image::make($image)->resize(300,300)->save('upload/product/'.$name_gen);
                    $save_url = 'upload/product/'.$name_gen;
            }
            else if($img) {
 
                $img = $request->image;
                $folderPath = "upload/product/";
                
                $image_parts = explode(";base64,", $img);
                $image_type_aux = explode("image/", $image_parts[0]);
                
                $image_base64 = base64_decode($image_parts[1]);
                $fileName = uniqid() . '.png';
                
                $file = $folderPath . $fileName;
                Storage::put($file, $image_base64);
               
                $sourcePath = storage_path('app/upload/product/'.$fileName);
                $destinationPath = public_path('upload/product/'.$fileName);
                
                $save_url = 'upload/product/'.$fileName;

                if (File::exists($sourcePath)) {
                    File::move($sourcePath, $destinationPath);
                } else {
                    return "Image not found in the storage folder";
                }

           



                
            
            }
        Product::insert([

            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'supplier_id' => $request->supplier_id,
            'product_code' => $pcode,
            'quantity' => $request->quantity,
            'product_store' => $request->product_store,
            'buying_date' => $request->buying_date,
            'author' => $request->author,
            'buying_price' => $request->buying_price,
            'selling_price' => $request->selling_price,
            'product_image' => $save_url,
            'created_at' => Carbon::now(), 

        ]);



         $notification = array(
            'message' => 'Product Inserted Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('all.product')->with($notification); 
    
    } // End Method 


    public function EditProduct($id){
        $product = Product::findOrFail($id);
        $category = Category::latest()->get();
        $supplier = Supplier::latest()->get();
        return view('backend.product.edit_product',compact('product','category','supplier'));

    } // End Method 



     public function UpdateProduct(Request $request){

        $product_id = $request->id;

        if ($request->file('product_image')) {

        $image = $request->file('product_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/product/'.$name_gen);
        $save_url = 'upload/product/'.$name_gen;

        Product::findOrFail($product_id)->update([

            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'supplier_id' => $request->supplier_id,
            'product_code' => $request->product_code,
            'quantity' => $request->quantity,
            'product_store' => $request->product_store,
            'buying_date' => $request->buying_date,
            'author' => $request->author,
            'buying_price' => $request->buying_price,
            'selling_price' => $request->selling_price,
            'product_image' => $save_url,
            'created_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'Product Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.product')->with($notification); 

        } else{

            Product::findOrFail($product_id)->update([

            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'supplier_id' => $request->supplier_id,
            'product_code' => $request->product_code,
            'quantity' => $request->quantity,
            'product_store' => $request->product_store,
            'buying_date' => $request->buying_date,
            'author' => $request->author,
            'buying_price' => $request->buying_price,
            'selling_price' => $request->selling_price, 
            'created_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'Product Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.product')->with($notification); 

        } // End else Condition  


    } // End Method 

    public function DeleteProduct($id){

            $product_img = Product::findOrFail($id);
            $img = $product_img->product_image;
            unlink($img);

            Product::findOrFail($id)->delete();

            $notification = array(
                'message' => 'Product Deleted Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification); 

        } // End Method 


    
        public function BarcodeProduct($id){

            $product = Product::findOrFail($id);
            return view('backend.product.barcode_product',compact('product'));
    
        }// End Method 

        public function ImportProduct(){

            return view('backend.product.import_product');
    
        }


        public function Export(){

            return Excel::download(new ProductExport,'products.xlsx');
    
        }// End Method 

        public function Import(Request $request){

            Excel::import(new ProductImport,$request->file('import_file'));

            $notification = array(
                'message' => 'Product Imported Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification); 

        }
        
}
