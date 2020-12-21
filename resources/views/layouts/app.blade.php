<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <script src="{{ mix('js/app.js') }}"></script>


        @livewireStyles

        <!-- Scripts -->

    </head>
    <body >

            {{-- @livewire('navigation-dropdown') --}}



{{ $slot }}


        </div>



        @livewireScripts
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <script>
            window.livewire.on('studentAdded',()=> {
                console.warn('modal1 hide started');


$('#addStudentModal').modal('hide');


            });
        </script>





    </body>
</html>
