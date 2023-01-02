<php?
 namespace App\Http\Controllers;

 use App\Models\Product;
 use Illuminate\Http\Request;

 class CartController extend Controller
 {
    public function index(Request $request)
    {
        $total=0;
        $productsInCart=[];
        $productSession=$request->session()->get('products');
        if($productSession)
        {
            $productsInCart=Products::findMany(array_keys($productSession));
            $total=Product::sumPricesByQuantity($productsInCart,$productSession);
        }
        $viewData = [];
        $viewData["title"] = "Cart - Online Store";
        $viewData["subtitle"] = "Shopping Cart";
        $viewData["total"] = $total;
        $viewData["products"] = $productsInCart;
        return view('cart.index')->with("viewData", $viewData);

    }

    public funtion add(Request $request, $id)
    {
        $products=$request->session()->get('products');
        $products['id']=$request->input('quantity');
        $request->session()->put('products',$products);
        return redirect()->route('cart.index');
    }
 }


?>