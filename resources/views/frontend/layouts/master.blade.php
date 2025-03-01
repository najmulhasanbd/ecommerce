<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Nest - Multipurpose eCommerce HTML Template</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/imgs/theme/favicon.svg" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/main.css?v=5.3" />
</head>

<body>
    <!-- Modal -->

    <!-- Quick view -->
    @include('frontend.layouts.modal')
    <!-- Header  -->

    @include('frontend.layouts.header')

    <!-- End Header  -->

    @include('frontend.layouts.mobile-nav')



    <!--End header-->

    <main class="main">
        @yield('content')
    </main>

    @include('frontend.layouts.footer')

    <!-- Vendor JS-->
    <script src="{{ asset('frontend') }}/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/slick.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/waypoints.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/wow.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/perfect-scrollbar.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/magnific-popup.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/select2.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/counterup.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/images-loaded.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/isotope.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/scrollup.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.vticker-min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.theia.sticky.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="{{ asset('frontend') }}/assets/js/main.js?v=5.3"></script>
    <script src="{{ asset('frontend') }}/assets/js/shop.js?v=5.3"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        //product modal
        function productView(id) {
            $.ajax({
                type: 'GET',
                url: '/product/view/model/' + id,
                dataType: 'json',
                success: function(data) {
                    console.log(data);

                    $('#pname').text(data.product.name);
                    $('#pimage').attr('src', data.product.thumbnail.startsWith('http') ? data.product
                        .thumbnail : '/storage/thumbnail/' + data.product.thumbnail);
                    $('#pbrand').text(data.product.brand.name);
                    $('#pcategory').text(data.product.category.name);
                    $('#pcode').text(data.product.code);
                    $('#pprice').text(data.product.selling_price);

                    $("#product_id").val(id);
                    $("#quantity").val(1);

                    if (data.product.discount_price == null) {
                        $('#pprice').text('');
                        $('#oldprice').text('');
                        $('#pprice').text(data.product.selling_price);
                    } else {
                        $('#pprice').text(data.product.discount_price);
                        $('#oldprice').text(data.product.selling_price);
                    }

                    if (data.product.quantity > 0) {
                        $('#avaliable').text('Available').show();
                        $('#stockOut').hide();
                    } else {
                        $('#avaliable').hide();
                        $('#stockOut').text('Stock Out').show();
                    }


                    /** ✅ Color Dropdown Fix */
                    let colorDropdown = $('select[name="color"]');
                    colorDropdown.empty();
                    colorDropdown.append('<option value="">-- Select Color --</option>'); // Default option

                    let filteredColors = Array.isArray(data.color) ?
                        data.color.map(color => color.replace(/["[\]]/g, '').trim()).filter(color => color !==
                            "") : [];

                    if (filteredColors.length > 0) { // যদি কালার থাকে
                        $('#colorArea').show(); // ✅ Show color area

                        $.each(filteredColors, function(key, value) {
                            colorDropdown.append('<option value="' + value + '">' + value +
                                '</option>');
                        });
                    } else {
                        $('#colorArea').hide();
                    }

                    /** ✅ Size Dropdown Fix */
                    let sizeDropdown = $('select[name="size"]');
                    sizeDropdown.empty();
                    sizeDropdown.append('<option value="">-- Select Size --</option>'); // Default option

                    let filteredSizes = Array.isArray(data.size) ?
                        data.size.map(size => size.replace(/["[\]]/g, '').trim()).filter(size => size !== "") :
                        [];

                    if (filteredSizes.length > 0) {
                        $('#sizeArea').show();

                        $.each(filteredSizes, function(key, value) {
                            sizeDropdown.append('<option value="' + value + '">' + value + '</option>');
                        });
                    } else {
                        $('#sizeArea').hide();
                    }

                },
                error: function(xhr, status, error) {
                    console.error("Error:", error);
                }
            });
        }

        //add to cart
        function addToCart() {
            var id = $('#product_id').val();
            var name = $('#pname').text().trim();
            var color = $('#color option:selected').val();
            var size = $('#size option:selected').val();
            var quantity = $('#quantity').val();

            $.ajax({
                url: "/cart/data/store/" + id,
                method: "POST",
                dataType: "json",
                data: {
                    name: name,
                    colors: color,
                    sizes: size,
                    quantity: quantity,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    miniCart();
                    // ✅ Close modal if needed
                    $('#closeModel').click();

                    // ✅ Toast notification
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 3000
                    });

                    if (response.success) {
                        Toast.fire({
                            icon: "success",
                            title: " Product has been added to cart successfully!"
                        });
                    } else if (response.error) {
                        Toast.fire({
                            icon: "error",
                            title: "❌ " + response.error
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error("❌ Error:", xhr.responseText);

                    Swal.fire({
                        icon: "error",
                        title: "Error!",
                        text: "কিছু সমস্যা হয়েছে, দয়া করে আবার চেষ্টা করুন।"
                    });
                }
            });


        }

        //add to cart details
        function addToCartDetails() {
            var id = $('#dproduct_id').val();
            var name = $('#dpname').text().trim();
            var color = $('#dcolor option:selected').val();
            var size = $('#dsize option:selected').val();
            var quantity = $('#dquantity').val();

            $.ajax({
                url: "/dcart/data/store/" + id,
                method: "POST",
                dataType: "json",
                data: {
                    name: name,
                    colors: color,
                    sizes: size,
                    quantity: quantity,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    miniCart();

                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 3000
                    });

                    if (response.success) {
                        Toast.fire({
                            icon: "success",
                            title: " Product has been added to cart successfully!"
                        });
                    } else if (response.error) {
                        Toast.fire({
                            icon: "error",
                            title: "❌ " + response.error
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error("❌ Error:", xhr.responseText);

                    Swal.fire({
                        icon: "error",
                        title: "Error!",
                        text: "কিছু সমস্যা হয়েছে, দয়া করে আবার চেষ্টা করুন।"
                    });
                }
            });


        }

        //mini cart
        function miniCart() {
            $.ajax({
                type: 'GET',
                url: '/product/mini/cart',
                dataType: 'json',
                success: function(response) {

                    $("#cartSubtotal").text(response.cartsTotal);
                    $('#cartQuantity').text(response.cartsQty);
                    var miniCart = "";
                    $.each(response.carts, function(key, value) {
                        miniCart += `
                    <ul>
                        <li>
                            <div class="shopping-cart-img">
                                <a href="#">
                                    <img alt="Nest" src="/storage/thumbnail/${value.attributes.image}" style="width:50px;" />
                                </a>
                            </div>
                            <div class="shopping-cart-title" style="margin:-50px 74px 14px;width:146px">
                                <h4><a href="#">${value.name}</a></h4>
                                <h4><span>${value.quantity} × </span>${value.price}</h4>
                            </div>
                            <div class="shopping-cart-delete" style="margin:-65px 1px 0px">
                                <a type="submit" id="${value.id}" onclick="miniCartRemove(this.id)"><i class="fi-rs-cross-small"></i></a>
                            </div>
                        </li>
                    </ul> <hr />
                `;
                    });
                    $('#miniCart').html(miniCart);
                }
            });
        }
        miniCart();

        //remove mini cart
        function miniCartRemove(id) {
            // alert(id);
            $.ajax({
                type: 'GET',
                url: 'minicart/product/remove/' + id,
                dataType: 'json',
                success: function(data) {
                    miniCart();

                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000
                    });

                    if (data.success) {
                        Toast.fire({
                            icon: "success",
                            title: "🛒 Product has been removed from cart!"
                        });
                    } else if (data.error) {
                        Toast.fire({
                            icon: "error",
                            title: "❌ " + data.error
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.log("Error:", error);
                }
            });
        }

        //add to wishlist
        function addToWishList(product_id) {
            $.ajax({
                type: "POST",
                url: "/add-to-wishlist/" + product_id,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") // ✅ CSRF টোকেন সংযুক্ত
                },
                success: function(response) {
                    console.log(response); // ✅ রেসপন্স JSON আসছে কিনা চেক করুন
                    if (response.success) {
                        Swal.fire({
                            icon: "success",
                            title: "🛒 Product Added to Wishlist!"
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "❌ " + response.error
                        });
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText); // ✅ Laravel error মেসেজ কনসোলে দেখুন
                    Swal.fire({
                        icon: "error",
                        title: "Something went wrong!",
                        text: xhr.responseText
                    });
                }
            });
        }

        //load wishlist
        function wishlist() {
            $.ajax({
                type: "GET",
                url: "/wishlist-product/", // সঠিক Route
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                success: function(response) {
                    $('#wishQty').text(response.wishQty);
                    let rows = "";
                    $.each(response.wishlist, function(key, value) {
                        rows += `
                    <tr class="pt-30">
                        <td class="image product-thumbnail pt-40">
                            <img src="/storage/thumbnail/${value.product.thumbnail}" alt="#" />
                        </td>
                        <td class="product-des product-name">
                            <h6><a class="product-name mb-10" href="shop-product-right.html">${value.product.name}</a></h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                        </td>
                        <td class="price" data-title="Price">
                            ${value.product.discount_price != null 
                                ? `<h3 class="text-brand">$${value.product.discount_price}</h3> 
                                                                                                        <h5 class="text-muted"><del>$${value.product.selling_price}</del></h5>` 
                                : `<h3 class="text-brand">$${value.product.selling_price}</h3>`
                            }
                        </td>
                        <td class="text-center detail-info" data-title="Stock">
                            ${value.product.quantity > 0 
                                ? `<span class="stock-status in-stock mb-0"> In Stock </span>` 
                                : `<span class="stock-status out-stock mb-0"> Stock Out</span>`
                            }
                        </td>
                        <td class="action text-center" data-title="Remove">
                            <a type="submit" id="${value.id}" onclick="wishlistRemove(this.id)" class="text-body"><i class="fi-rs-trash"></i></a>
                        </td>
                    </tr>`;
                    });
                    $("#wishlist").html(rows);

                    // Wishlist count update
                    $(".pro-count").text(response.wishQty);
                }
            });
        }
        wishlist();

        //remove withlist
        function wishlistRemove(product_id) {
            if (!product_id) {
                Swal.fire({
                    icon: "error",
                    title: "❌ Invalid Product ID!"
                });
                return;
            }

            $.ajax({
                type: "GET",
                url: "/remove-wishlist/" + encodeURIComponent(product_id), // ✅ ID ঠিকমতো পাঠানো হচ্ছে
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") // ✅ CSRF টোকেন সংযুক্ত
                },
                success: function(response) {
                    wishlist();
                    if (response.success) {
                        Swal.fire({
                            icon: "success",
                            title: "✅ Product Removed from Wishlist!"
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "❌ " + response.error
                        });
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                    Swal.fire({
                        icon: "error",
                        title: "Something went wrong!",
                        text: xhr.responseText
                    });
                }
            });
        }

        function cart() {
            $.ajax({
                type: 'GET',
                url: '/get-cart-product',
                dataType: 'json',
                success: function(response) {

                    var rows = "";
                    $.each(response.carts, function(key, value) {
                        rows += `
                        <tr class="pt-30">
                        <td class="image product-thumbnail pt-40">
                            <img src="/storage/thumbnail/${value.attributes.image}" alt="#">
                        </td>
                        <td class="product-des product-name">
                            <h6 class="mb-5">
                                <a class="product-name mb-10 text-heading" href="#">${value.name}</a>
                            </h6>
                        </td>
                        <td class="price" data-title="Price">
                            <h4 class="text-body">$${value.price}</h4>
                        </td>

                        <td class="text-center detail-info" data-title="Stock">
                            <div class="detail-extralink mr-15">
                                <div class="detail-qty border radius">
                                   <a type="submit" class="qty-down" id="${value.id}" onclick="cartDecrement(this.id)" >
                                        <i class="fi-rs-angle-small-down"></i>
                                    </a>
                                    <input type="text" name="quantity" class="qty-val" value="${value.quantity}" min="1">
                                 <a type="submit" class="qty-up" id="${value.id}" onclick="cartIncrement(this.id)"><i class="fi-rs-angle-small-up"></i></a>
                                </div>
                            </div>
                        </td>

                        <!-- ✅ Total Price Calculation -->
                        <td class="price" data-title="Total Price">
                            <h4 class="text-brand">$${(value.price * value.quantity).toFixed(2)}</h4>
                        </td>

                        <td class="action text-center" data-title="Remove">
                            <a type="submit" id="${value.id}" onclick="cartRemove(this.id)" class="text-body">
                                <i class="fi-rs-trash"></i>
                            </a>
                        </td>
                    </tr>
                `;
                    });
                    $('#cartPage').html(rows);
                }
            });
        }
        cart();

        //remove cart
        function cartRemove(id) {
            // alert(id);
            $.ajax({
                type: 'GET',
                url: 'cart/remove/' + id,
                dataType: 'json',
                success: function(data) {
                    cart();
                    miniCart();

                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000
                    });

                    if (data.success) {
                        Toast.fire({
                            icon: "success",
                            title: "🛒 Product has been removed from cart!"
                        });
                    } else if (data.error) {
                        Toast.fire({
                            icon: "error",
                            title: "❌ " + data.error
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.log("Error:", error);
                }
            });
        }

        //decrement
        function cartDecrement(id) {
            $.ajax({
                type: 'GET',
                url: 'cart-decrement/' + id,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        cart();
                        miniCart();

                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            icon: "success",
                            showConfirmButton: false,
                            timer: 3000
                        });

                        if (response.success) {
                            Toast.fire({
                                icon: "success",
                                title: " Product Decrement successfully!"
                            });
                        } else if (response.error) {
                            Toast.fire({
                                icon: "error",
                                title: "❌ " + response.error
                            });
                        }
                    } else {
                        alert(response.message);
                    }
                }
            });
        }

        //decrement
        function cartIncrement(id) {
            $.ajax({
                type: 'GET',
                url: 'cart-increment/' + id,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        cart();
                        miniCart();

                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            icon: "success",
                            showConfirmButton: false,
                            timer: 3000
                        });

                        if (response.success) {
                            Toast.fire({
                                icon: "success",
                                title: " Product Increment successfully!"
                            });
                        } else if (response.error) {
                            Toast.fire({
                                icon: "error",
                                title: "❌ " + response.error
                            });
                        }
                    } else {
                        alert(response.message);
                    }
                }
            });
        }
    </script>

</body>

</html>
