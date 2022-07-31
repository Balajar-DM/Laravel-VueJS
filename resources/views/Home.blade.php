<!DOCTYPE html>

<html lang="en">

<head>
    <title>Laravel & Vue JS</title>
</head>
    @include('Template.head')
<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">

        <!-- Navbar -->
        @include('Template.navbar')


        @include('Template.sidebar')

        <div class="content-wrapper">

            <div class="content">
                <router-view></router-view>
            </div>

        </div>

        @include('Template.footer')
    </div>

    @include('Template.script')
</body>

</html>
