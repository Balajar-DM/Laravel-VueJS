<!DOCTYPE html>

<html lang="en">

<head>
    <title>Laravel & Vue JS</title>
</head>
    @include('Template.head')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')


        @include('Template.sidebar')

        <div class="content-wrapper" id="app">

            <div class="content">
                <div class="container-fluid">
                    <example-component></example-component>
                </div>
            </div>

        </div>

        @include('Template.footer')
    </div>

    @include('Template.script')
</body>

</html>
