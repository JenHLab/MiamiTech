<!DOCTYPE html>
<html>
    <head>
        <title>Breathe_MIA</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


       

        @yield('link')

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                
                
            }

            .container {
                text-align: left;
                display: table-cell;
                vertical-align: left;
            }

            .content {
                text-align: left;
                display: inline-block;
            }

            .title {
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">

                @yield('content')

                </div>
                @yield('footer')
            </div>
        </div>

    </body>
</html>