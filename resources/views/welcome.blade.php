<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dyma_v_dome_net</title>

    <link href="/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/fuelux.min.css" rel="stylesheet" type="text/css">
    <link href="/css/app.css" rel="stylesheet">
    @if ( Config::get('app.debug') )
    <script type="text/javascript">
        document.write(
            '<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>'
        )
    </script>
    @endif

    <script src="/js/require.js"></script>
    <script>
        (function()
        {
            require.config(
            {
                config:
                {
                    moment:
                    {
                        noGlobal: true
                    }
                },
                paths:
                {
                    jquery: '/js/jquery.min',
                    bootstrap: '/js/bootstrap.min',
                    //fuelux: 'bower_components/fuelux/js', //Proper UMD/AMD to enable you to get just what you need (goes w/line 33)
                    fuelux: '/js/fuelux.min', //just grab it all (goes w/line 34)
                    moment: '/js/moment.min', // comment out if you dont want momentjs to be default
                    //underscore: 'bower_components/underscore/underscore'
                },
                shim:
                {
                    'bootstrap':
                    {
                        deps: ['jquery']
                    }
                }
            });
            //require(['fuelux/checkbox']); //get just what you need (goes w/line 26)
            require(['fuelux']); //just grab it all (goes w/line 27)
        })();
    </script>
</head>

<body class="fuelux">
    <main class="Main">
        <div class="Main__block">Item 1</div>
        <div class="Main__block">Item 2</div>
        <div class="Main__block">Item 3</div>
    </main>
</body>

</html>
