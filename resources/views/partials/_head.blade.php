    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SPK.Design Blog | @yield('title')</title>
    <meta name="title" content="@yield('meta_title')">
    <meta name="description" content="@yield('meta_description')">
    <meta name="google-site-verification" content="GLKQDRiETzjpek1H26BHJq-CqILEA_T8Map9zBMJFAQ" />
    <meta name="msvalidate.01" content="5E13FF103B5744AF5D67F9A1FAC5ACBA" />
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-103580061-1', 'auto');
      ga('send', 'pageview');

    </script>
    <!-- change this title for each page -->

    <!-- Bootstrap --> 
    {{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rubik|Zilla+Slab" rel="stylesheet">  --}}
    {{ Html::style('css/app.css') }}

    @yield('stylesheets')