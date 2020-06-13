<HTML>
<HEAD>
    <TITLE>PHP Test</TITLE>
    <?PHP
    class Shape {
        var $x;
        var $y;

        // constructor
        function Shape($initx, $inity) {
            $this->moveTo($initx, $inity);
        }

        // accessors for x & y coordinates
        function getX() {
            return $this->x;
        }
        function getY() {
            return $this->y;
        }
        function setX($newx) {
            $this->x = $newx;
        }
        function setY($newy) {
            $this->y = $newy;
        }

        // modify the shape coordinates
        function moveTo($newx, $newy) {
            $this->setX($newx);
            $this->setY($newy);
        }
        function rMoveTo($deltax, $deltay) {
            $this->moveTo(($this->getX() + $deltax), ($this->getY() + $deltay));
        }

        // abstract method to override
        function draw() {
        }
    }

    class Rectangle extends Shape {
        var $width;
        var $height;

        // constructor
        function Rectangle($initx, $inity, $initwidth, $initheight) {
            $this->Shape($initx, $inity);
            $this->setWidth($initwidth);
            $this->setHeight($initheight);
        }

        // accessors for width & height attributes
        function getWidth() {
            return $this->width;
        }
        function getHeight() {
            return $this->height;
        }
        function setWidth($newwidth) {
            $this->width = $newwidth;
        }
        function setHeight($newheight) {
            $this->height = $newheight;
        }

        // draw the rectangle
        function draw() {
            echo "Drawing a Rectangle at:(" . $this->getX() . "," . $this->getY() .
                "), width " . $this->getWidth() . ", height " . $this->getHeight() . "<BR>";
        }
    }

    class Circle extends Shape {
        var $radius;

        // constructor
        function Circle($initx, $inity, $initradius) {
            $this->Shape($initx, $inity);
            $this->setRadius($initradius);
        }

        // accessors for radius attribute
        function getRadius() {
            return $this->radius;
        }
        function setRadius($newradius) {
            $this->radius = $newradius;
        }

        // draw the circle
        function draw() {
            echo "Drawing a Circle at:(" . $this->getX() . "," . $this->getY() .
                "), radius " . $this->getRadius() ."<BR>";
        }
    }

    ?>
</HEAD>
<BODY>
<?PHP

// set up an array with some shape instances
$scribble = array(new Rectangle(10, 20, 5, 6), new Circle(15, 25, 8));

// iterate through the shapes
for ($i = 0; $i < 2; $i++) {
    $scribble[$i]->draw();
    $scribble[$i]->rMoveTo(100, 100);
    $scribble[$i]->draw();
}

// access a rectangle specific function
$arectangle = new Rectangle(0, 0, 15, 15);
$arectangle->setWidth(30);
$arectangle->draw();

?>
</BODY>
</HTML>