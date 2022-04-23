<?php 
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller {

    public function home() {
        $category = Category::paginate(2);
        $product_sale = Product::sale();
        $product_new = Product::new(8);
        // dd($product_new);
        return view('site.home', compact('category','product_sale','product_new'));
    }

    public function about() {
        return view('site.about');
    }
    public function blogs() {
        return view('site.blogs');
    }

    public function contact() {
        return view('site.blogs');
    }

    public function category(Category $category)
    {
        $products  = $category->products()->paginate(12);
        return view('site.category', compact('category','products'));
    }

    public function product(Product $product)
    {
        $products  = $product->cat->products()->limit(2)->get();
        return view('site.product', compact('product','products'));
    }

}
?>