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

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

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
                        $('#colorArea').hide(); // ✅ No color, so hide
                    }

                    /** ✅ Size Dropdown Fix */
                    let sizeDropdown = $('select[name="size"]');
                    sizeDropdown.empty();
                    sizeDropdown.append('<option value="">-- Select Size --</option>'); // Default option

                    let filteredSizes = Array.isArray(data.size) ?
                        data.size.map(size => size.replace(/["[\]]/g, '').trim()).filter(size => size !== "") :
                        [];

                    if (filteredSizes.length > 0) { // যদি সাইজ থাকে
                        $('#sizeArea').show(); // ✅ Show size area

                        $.each(filteredSizes, function(key, value) {
                            sizeDropdown.append('<option value="' + value + '">' + value + '</option>');
                        });
                    } else {
                        $('#sizeArea').hide(); // ✅ No size, so hide
                    }

                },
                error: function(xhr, status, error) {
                    console.error("Error:", error);
                }
            });
        }
    </script>

</body>

</html>
