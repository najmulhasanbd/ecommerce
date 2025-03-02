<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\Brandcontroller;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\AttributeValueController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\ShippingAreaController;

Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('admin.register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])
        ->name('admin.login');

    Route::post('login', [LoginController::class, 'store']);
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    //admin dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::post('logout', [LoginController::class, 'destroy'])
        ->name('admin.logout');

    //banner controller
    Route::prefix('banner')->controller(BannerController::class)->name('banner.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');

        Route::get('active/{id}', 'active')->name('active');
        Route::get('inactive/{id}', 'inactive')->name('inactive');
    });
    //category controller
    Route::prefix('category')->controller(CategoryController::class)->name('category.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');

        Route::get('active/{id}', 'active')->name('active');
        Route::get('inactive/{id}', 'inactive')->name('inactive');
    });

    //subcategory controller
    Route::prefix('subcategory')->controller(SubCategoryController::class)->name('subcategory.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');

        Route::get('active/{id}', 'active')->name('active');
        Route::get('inactive/{id}', 'inactive')->name('inactive');
    });


    //brand controller
    Route::prefix('brand')->controller(Brandcontroller::class)->name('brand.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');

        Route::get('active/{id}', 'active')->name('active');
        Route::get('inactive/{id}', 'inactive')->name('inactive');
    });

    //supplier controller
    Route::prefix('supplier')->controller(SupplierController::class)->name('supplier.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');
    });

     //shipping controller
     Route::prefix('division')->controller(ShippingAreaController::class)->name('division.')->group(function () {
        Route::get('/', 'divisionindex')->name('index');
        Route::get('/create', 'divisioncreate')->name('create');
        Route::post('/store', 'divisionstore')->name('store');
        Route::get('/edit/{id}', 'divisionedit')->name('edit');
        Route::put('/update/{id}', 'divisionupdate')->name('update');
        Route::get('/delete/{id}', 'divisiondestroy')->name('delete');
    });

     //shipping controller
     Route::prefix('district')->controller(ShippingAreaController::class)->name('district.')->group(function () {
        Route::get('/', 'districtindex')->name('index');
        Route::get('/create', 'districtcreate')->name('create');
        Route::post('/store', 'districtstore')->name('store');
        Route::get('/edit/{id}', 'districtedit')->name('edit');
        Route::put('/update/{id}', 'districtupdate')->name('update');
        Route::get('/delete/{id}', 'districtdestroy')->name('delete');
    });

     //shipping controller
     Route::prefix('state')->controller(ShippingAreaController::class)->name('state.')->group(function () {
        Route::get('/', 'stateindex')->name('index');
        Route::get('/create', 'statecreate')->name('create');
        Route::post('/store', 'statestore')->name('store');
        Route::get('/edit/{id}', 'stateedit')->name('edit');
        Route::put('/update/{id}', 'stateupdate')->name('update');
        Route::get('/delete/{id}', 'statedestroy')->name('delete');
    });

    //unit controller
    Route::prefix('unit')->controller(UnitController::class)->name('unit.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');

        Route::get('active/{id}', 'active')->name('active');
        Route::get('inactive/{id}', 'inactive')->name('inactive');
    });

    //coupon controller
    Route::prefix('coupon')->controller(CouponController::class)->name('coupon.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');

        Route::get('active/{id}', 'active')->name('active');
        Route::get('inactive/{id}', 'inactive')->name('inactive');
    });

    //attribute controller
    Route::prefix('attribute')->controller(AttributeController::class)->name('attribute.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');
    });

    //attribute value controller
    Route::prefix('attribute-value')->controller(AttributeValueController::class)->name('attribute-value.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create/{id}', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::put('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');


        Route::get('active/{id}', 'active')->name('active');
        Route::get('inactive/{id}', 'inactive')->name('inactive');
    });
    Route::get('subcategory/ajax/{category_id}', [SubCategoryController::class, 'subcategoryajax']);

    //product controller
    Route::prefix('product')->controller(ProductController::class)->name('product.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');

        Route::get('active/{id}', 'active')->name('active');
        Route::get('inactive/{id}', 'inactive')->name('inactive');

        Route::get('featured/{id}', 'featured')->name('featured');
        Route::get('infeatured/{id}', 'infeatured')->name('infeatured');

        Route::get('hot_deals/{id}', 'hot_deals')->name('hot_deals');
        Route::get('inhot_deals/{id}', 'inhot_deals')->name('inhot_deals');

        Route::get('special_offer/{id}', 'special_offer')->name('special_offer');
        Route::get('inspecial_offer/{id}', 'inspecial_offer')->name('inspecial_offer');

        Route::get('special_deals/{id}', 'special_deals')->name('special_deals');
        Route::get('inspecial_deals/{id}', 'inspecial_deals')->name('inspecial_deals');
    });

    //subscriber controller
    Route::prefix('subscriber')->controller(SubscriberController::class)->name('subscriber.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/delete/{id}', 'destroy')->name('delete');
    });












    //setting controller
    Route::prefix('setting')->controller(SettingController::class)->name('setting.')->group(function () {

        //setting
        Route::get('/website', 'website')->name('website');
        Route::post('/website/{id}', 'websiteUpdate')->name('website.update');

        //seo setting
        Route::get('seo', 'seo')->name('seo');
        Route::post('seo/{id}', 'seoUpdate')->name('seo.update');

        //smtp setting
        Route::get('smtp', 'smtp')->name('smtp');
        Route::post('smtp/{id}', 'smtpUpdate')->name('smtp.update');

        //shipping setting
        Route::get('shipping', 'shipping')->name('shipping');
        Route::get('shipping/create', 'shippingcreate')->name('shipping.create');
        Route::post('shipping/store', 'shippingstore')->name('shipping.store');
        Route::get('shipping/edit/{id}', 'shippingedit')->name('shipping.edit');
        Route::post('shipping/update/{id}', 'shippingupdate')->name('shipping.update');
        Route::get('shipping/destroy/{id}', 'shippingdestroy')->name('shipping.destroy');

        //page setting
        Route::get('page', 'page')->name('page');
        Route::get('page/create', 'create')->name('page.create');
        Route::post('page/store', 'store')->name('page.store');
        Route::get('page/edit/{id}', 'edit')->name('page.edit');
        Route::post('page/update/{id}', 'pageupdate')->name('page.update');
        Route::get('page/destroy/{id}', 'destroy')->name('page.destroy');
    });
});
