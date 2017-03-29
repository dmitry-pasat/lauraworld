<!DOCTYPE html>
<html>
<head>
  @include('includes._head')
</head>

@yield('current_page')

<body>

   @include('includes._header')

   @include('includes._messages')

   @yield('content')

   @include('includes._footer')

   @include('includes._javascript')

   @yield('scripts')

</body>
</html>
