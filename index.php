<?php
namespace {


    use Hawk\Svg\Circle;
    use Hawk\Svg\Complex\Container;
    use Hawk\Svg\Complex\CCurves;
    use Hawk\Svg\Complex\QCurves;
    use Hawk\Svg\Complex\SCurves;
    use Hawk\Svg\Complex\Moveto;
    use Hawk\Svg\Complex\Point;
    use Hawk\Svg\Complex\TCurves;
    use Hawk\Svg\Ellipse;
    use Hawk\Svg\Path;
    use Hawk\Svg\Polygon;
    use Hawk\Svg\Polyline;
    use Hawk\Svg\Rect;
    use Hawk\Svg\Line;
    use Hawk\Svg\Svg;
    use Hawk\Svg\Text;

    require_once './vendor/autoload.php';


    $svg = new Svg(1000, 1000);
    $svg->addContent(new Rect(0, 0, 100, 100, 'graph-rect'));
    $svg->addContent(new Rect(300, 300, 100, 100, 'graph-rect', 10));
    $svg->addContent(new Rect(100, 0, 100, 100));
    $svg->addContent(new Ellipse(500, 500, 200, 100));
    $svg->addContent(new Circle(200, 200, 50, 'graph-circle'));
    $svg->addContent(new Line(10, 10, 200, 200, 'graph-line'));
    $svg->addContent(new Polyline(
        new Container(
            new Point(50, 375),
            new Point(150, 375),
            new Point(150, 325),
            new Point(250, 325)
        ), 'graph-polyline'
    ));
    $svg->addContent(new Polygon(new Container(
        new Point(850, 75),
        new Point(958, 137.5),
        new Point(958, 262.5),
        new Point(850, 325),
        new Point(742, 262.6),
        new Point(742, 137.5)
    ), 'graph-polyline'));

    $svg->addContent(new Text('Hello', 500, 20, 'graph-text'));


    $svg->addContent(new Path(new Container(
        new Moveto(100, 200),
        new CCurves(100, 100, 250, 100, 250, 200),
        new SCurves(400, 300, 400, 200)
    ), 'graph-path'));
    $svg->addContent(new Path(new Container(
        new Moveto(200, 300),
        new QCurves(400, 50, 600, 300),
        new TCurves(1000, 300)
    ), 'graph-path'));


    $out = $svg->render();





    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
    <?php echo '<pre>', htmlentities($out), '</pre><br />' . $out; ?>

    </body>
    </html>
<?php
}