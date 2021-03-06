
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <!-- Main Quill library -->
    {{-- <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script> --}}

    <!-- Theme included stylesheets -->
    {{-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"> --}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/> --}}

    <link rel="stylesheet" href="{{asset('/front/css/style.css')}}">
    @yield('extra_css')
</head>


<body>
    <div class="container-fluid px-0">
        @include('front.layouts.header')

        <div class="flex-main-wrap">
            @include('front.layouts.sidebar')

            @yield('content')
            
        </div>
    </div>

    @yield('extra_div')




    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script> --}}

    <script src="https://cdn.tiny.cloud/1/oupmzosv0yjyq9lj8l18t9rm9f0ok6viyprjdj5hz9de53w4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script src="/path/to/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea#description'
        });
        tinymce.init({
            selector: 'textarea#summary'
        });
    </script>

    <script src="{{asset('/ckeditor/ckeditor.js')}}"></script>

    <script src="{{asset('/front/js/main.js')}}"></script>
    
    {{-- <script src="/front/js/editor-config.js"></script> --}}
    
    @include('sweetalert::alert')
    @yield('extra_js')
</body>

</html>