<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Orders;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\UserVerify;
use App\Models\SellerProductData;
use App\Models\Category; // Import the Category model at the top of your controller
use App\Models\Neworder;
use App\Models\Verifedaccount;




use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

use App\Notifications\NewOrderNotification;
use Illuminate\Support\Facades\Notification;
use App\Http\Controllers\Backdoor;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/category/{category}', [Backdoor::class, 'showProducts'])->name('category.products');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('index', Backdoor::class);

    Route::get('/dashboard', function () {
        $id = Auth::id();
        $checkUser = Verifedaccount::where('usersid', $id)->first(); 
        $products = Product::all(); // Fetch products
        $categories = Category::all();
        return view('dashboard', compact('checkUser', 'products','categories'));
      
    })->name('dashboard');

    Route::get('upgrade', function() {
        $id = Auth::id();
        $checkUser = Verifedaccount::where('usersid', $id)->first(); 
    
        // Check if user is verified, if yes, redirect them to the dashboard
        if ($checkUser) {
            return view('dashboard');
        } else {
            // If user is not verified, show the store
            return view('components.upgrade');
        }
        // If user is not logged in or some other condition, show the upgrade component
        return route('/dashboard');
    })->name('upgrade');
    

   
    Route::get('info/{id}', [Backdoor::class, 'info'])->name('info');
    
    Route::get('sell', [Backdoor::class, 'confser'])->name('sell');
    
    Route::get('post', [Backdoor::class, 'post'])->name('post');
    
    Route::get('orders', [Backdoor::class, 'orders'])->name('orders');
    Route::delete('orders/{id}', [Backdoor::class, 'deleteOrder'])->name('orders.delete');
    
    
    Route::post('store_seller_product_data', [Backdoor::class, 'storeSellerProductData'])->name('store_seller_product_data');
    
    Route::get('viewBuyersOrders', [Backdoor::class, 'viewBuyersOrders'])->name('viewBuyersOrders');
    
  
    
    Route::post('/update-order-status/{id}', [Backdoor::class, 'updateOrderStatus'])->name('update-order-status');
    
    Route::post('/new-order/{productid}/{product_value}', [Backdoor::class, 'newOrder'])->name('new-order');
    
    Route::post('/createneworder', [Backdoor::class, 'storeOrder'])->name('createneworder');
    
    Route::get('/success', [Backdoor::class, 'success'])->name('success');
    Route::get('/viewBuyersOrders2', [Backdoor::class, 'viewBuyersOrders2'])->name('viewBuyersOrders2');
    
    
    Route::get('/myproducts', [Backdoor::class, 'myproducts'])->name('myproducts');
    Route::get('/new-products', [Backdoor::class, 'newProducts']);
    Route::get('profile', [Backdoor::class, 'profile'])->name('profile');
 
    Route::get('create', [Backdoor::class, 'acct'])->name('create');
    Route::post('createpro', [Backdoor::class, 'createpro'])->name('createpro');
    
    Route::post('createorder', [Backdoor::class, 'createorder'])->name('createorder');
    
    Route::get('createpro', [Backdoor::class, 'post'])->name('createpro');
    
    Route::post('create', [Backdoor::class, 'verifyAccount'])->name('create');
    
});

