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

        //mini cart
        function miniCart() {
            $.ajax({
                type: 'GET',
                url: '/product/mini/cart',
                dataType: 'json',
                success: function(response) {

                    $("#cartSubtotal").text(response.cartsTotal);
                    $('#cartQty').text(response.cartsQty);
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

        //remove cart
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
    </script>

</body>

</html>
