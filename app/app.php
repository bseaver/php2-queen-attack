<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Queen.php';


    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(
        new Silex\Provider\TwigServiceProvider(),
        array('twig.path' => __DIR__.'/../views')
    );

    $app->get('/', function() use ($app) {
        $queens_coords = '';
        if (array_key_exists('queens_coords', $_GET)) {
            $queens_coords = $_GET['queens_coords'];
        }
        $queens_coords = preg_replace('/\s+/', '', $queens_coords);
        $queens_xy = str_split($queens_coords);

        $targets_coords = '';
        if (array_key_exists('targets_coords', $_GET)) {
            $targets_coords = $_GET['targets_coords'];
        }

        $targets_coords = preg_replace('/\s+/', '', $targets_coords);
        $targets_xy = str_split($targets_coords);

        if (count($queens_xy) != 2 || count($targets_xy) != 2) {
            $message = "Please enter a single letter and number to specify coordinates";
        } else {
            $myQueen = new Queen;
            $myQueen->setCoordinates($queens_xy);
            if ($myQueen->canAttack($targets_xy)) {
                $message = "The Queen can attack the Rook";
            } else {
                $message = "The Queen cannot attack the Rook";
            }
        }
        // https://en.wikipedia.org/wiki/Chess_symbols_in_Unicode
        $black_queen = '&#9819;';
        $white_rook = '&#9814;';
        $rows = array(8,7,6,5,4,3,2,1);
        $cols = array('a','b','c','d','e','f','g','h');

        return $app['twig']->render(
            'chess_board.html.twig',
            array('rows' => $rows,
                'cols' => $cols,
                'queen' => $black_queen,
                'rook' => $white_rook,
                'queens_coords' => $queens_coords,
                'targets_coords' => $targets_coords,
                'message' => $message
            )
        );
    });

    return $app;
?>
