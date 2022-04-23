<?php 
namespace App\Http\Controllers;
use App\Http\Requests\ProductCreateRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use Str;
class ProductController extends Controller
{
   public function index()
   {
        $cats =  Category::orderBy('name', 'ASC')->get();
       $data = Product::search()->paginate(20);
       return view('admin.product.index', compact('data','cats'));
   }

   /**
    * Lưu dữ liệu từ form submit lên vào DB
    */
   public function store(ProductCreateRequest $req)
   {
       $data = $req->all('name','price','sale_price','category_id','status');
       // upload ảnh
       $file_name = $req->upload->getClientOriginalName();
       $parthInfo = pathinfo($file_name);
       $ext = $parthInfo['extension'];
       $base_name = $parthInfo['filename'];
       $final_name = Str::slug($base_name).'-'.time().'.'.$ext;
       $check_upload = $req->upload->move(public_path('uploads/'), $final_name);
       if ($check_upload) {
         $data['image'] = $final_name;
       }

      if (Product::create($data)) {
          return redirect()->route('product.index')->with('yes','Thêm mới thành công');
      }

      return redirect()->back()->with('no','Thêm mới thành công');
   }
    /**
    * Form nhập dữ liệu để submit
    */
   public function create()
   {
       $cats =  Category::orderBy('name', 'ASC')->get();
       return view('admin.product.create', compact('cats'));
   }

   public function edit(Product $product)
   {
        $cats =  Category::orderBy('name', 'ASC')->get();
        return view('admin.product.edit',compact('cats','product'));
   }

   public function update(Request $req, Product $product) 
   {
        $data = $req->all('name','price','sale_price','category_id','status');
        if ($req->has('upload')) {
            $file_name = $req->upload->getClientOriginalName();
            $parthInfo = pathinfo($file_name);
            $ext = $parthInfo['extension'];
            $base_name = $parthInfo['filename'];
            $final_name = Str::slug($base_name).'-'.time().'.'.$ext;
            $check_upload = $req->upload->move(public_path('uploads/'), $final_name);
            if ($check_upload) {
              $data['image'] = $final_name;
            }
        }

        $product->update($data);
        return redirect()->route('product.index')->with('yes','Cập nhật thành công');
   }
}