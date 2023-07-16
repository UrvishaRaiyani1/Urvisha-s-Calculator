<!DOCTYPE html>
<html>
<body>

          <?php
          class Car {
            // Properties
            public $name;
            public $color;
            
            // Methods
            function set_name($name) {
              $this->name = $name;
            }
            function get_name() {
              return $this->name;
            }
            
            function set_color($color) {
              $this->color = $color;
            }
            function get_color() {
              return $this->color;
            }
          }
          $audi = new Car();
          $audi->set_name('Audi');
          $audi->set_color('Black');

          echo $audi->get_name();
          echo "<br>";
          echo $audi->get_color();
          ?>
</body>
</html>