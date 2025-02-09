<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Meta data -->
      <meta charset="UTF-8">
      <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
      <meta content="" name="description">
      <meta content="Firoz Ansari 8789701916" name="author">
      <meta name="keywords" content=""/>
      <!-- Title -->
      <title>@yield('title', 'ADMIN PORTAL')</title>
      <!--Favicon -->
      <link rel="icon" href="{{asset('admin/assets/img/fav.png') }}" type="image/x-icon"/>
      <!--Bootstrap.min css-->
      <link rel="stylesheet" href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
      <!-- Color-skins css -->
      <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('admin/assets/colors/color-skins/color.css') }}" />
      <!--Style css-->
      <link rel="stylesheet" href="{{asset('admin/assets/css/style.css') }}">
      <!--Icons css-->
      <link rel="stylesheet" href="{{asset('admin/assets/css/icons.css') }}">
      <!-- P-Scrollbar css-->
      <link rel="stylesheet" href="{{asset('admin/assets/plugins/p-scroll/p-scroll.css') }}">
      <!--Sidemenu css-->
      <link rel="stylesheet" href="{{asset('admin/assets/plugins/sidemenu/sidemenu-1/sidemenu-1.css') }}">
      <!-- Sidemenu-responsive-tabs  css -->
      <link href="{{asset('admin/assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css') }}" rel="stylesheet">
      <!-- Siderbar css-->
      <link href="{{asset('admin/assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">
      <!-- jvectormap CSS -->
      <link href="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- ck editor -->
      <!-- <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> -->
      
    <link href="{{asset('DataTables/datatables.min.css') }}" rel="stylesheet">
    <!-- Include Quill Styles -->
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">

    <!-- Include Quill Script -->
    <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>


    <!-- Custom Script Start-->
    <script>
    function showPreview(event){
        if(event.target.files.length > 0){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("img-preview");
        preview.src = src;
        }
        }
    </script>
    <!-- Custom Script End-->
    @yield('css')
    </head>
    @include('admin.layout.header')
    @include('admin.layout.side')
    @yield('content')
    @include('admin.layout.footer')
      <!--app closed-->
      <!-- Back to top -->
      <a href="#top" id="back-to-top" ><i class="fa fa-long-arrow-up"></i></a>
      <!--Jquery.min js-->
      <script src="{{asset('admin/assets/js/jquery.min.js') }}"></script>
      <!--popper js-->
      <script src="{{asset('admin/assets/js/popper.js') }}"></script>
      <!--Bootstrap.min js-->
      <script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
      <!--Tooltip js-->
      <script src="{{asset('admin/assets/js/tooltip.js') }}"></script>
      <!--Sidemenu js-->
      <script src="{{asset('admin/assets/plugins/sidemenu/sidemenu-1/sidemenu-1.js') }}"></script>
      <!-- Sidemenu-responsive-tabs  js -->
      <script src="{{asset('admin/assets/plugins/sidemenu-responsive-tabs/js/sidemenu-responsive-tabs.js') }}"></script>
      <!-- Sidebar js-->
      <script src="{{asset('admin/assets/plugins/sidebar/sidebar.js') }}"></script>
      <!--P-Scrollbar js-->

      <!--Dashboard js-->
      <!--Showmore js-->
      <script src="{{asset('admin/assets/js/jquery.showmore.js') }}"></script>
      <!--Scripts js-->
      <script src="{{asset('admin/assets/js/scripts1.js') }}"></script>

	
	 <script src="{{asset('DataTables/datatables.min.js') }}"></script>


   </body>
    <script src="https://connectwithfiroz.github.io/ftoast-message-box/ftoast.js"></script>
<script>
	function fTenDigit(e, customLen = 10){
        var numbers = /^[0-9]+$/;
        if(e.value[e.value.length - 1].match(numbers)){
            console.log('true')
            if(e.value.length > customLen)
			e.value = e.value.substr(0, customLen);
        }else{
            e.value = e.value.substr(0, e.value.length-1);
        }

	}

    $(() => {
        ele = $(`.auto-select`);
        eleVal = ele.attr("data-value");
        $(`option[value='${eleVal}']`).attr("selected", true);
    });

</script>
<!-- For notification start -->
<script>
    @if(Session::has('message'))
        @php
            $type = Session::get('alert-type');
            $message = Session::get('message');
        @endphp
        ftoast('warning', 'Warning', {{$message}},5)
        @switch($type)
            @case('alert')
                ftoast('alert', 'Alert', {{$message}},5);
                @break
            @case('success')
                ftoast('success', 'Success', {{$message}},5)
                @break
            @default
                ftoast('warning', 'Warning', {{$message}},5)
        @endswitch

    @endif
</script>
   @yield('custom-script')
</html>
