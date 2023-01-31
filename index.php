<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Dogs table</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <h3>Таблица истинности PHP</h3>
    <table>
      <tr>
        <th>A</th>
        <th>B</th>
        <th>!A</th>
        <th>A || B</th>
        <th>A && B</th>
        <th>A xor B</th>
      </tr>
      <tr>
      <?php $a1 = 0; ?>
      <?php $b1 = 0; ?>
        <td><?php echo $a1 ?></td>
        <td><?php echo $b1 ?></td>
        <td>
          <?php 
        $c1 = !$a1;
        var_export($c1);
        ?>
        </td>
        <td>
          <?php 
        $d1 = $a1 || $b1;
        var_export($d1);
        ?>
        </td>
        <td>
          <?php 
        $e1 = $a1 && $b1;
        var_export($e1);
        ?>
        </td>
        <td>
          <?php 
        $f1 = $a1 xor $b1;
        var_export($f1);
        ?>
        </td>
      </tr>
      <tr>
      <?php $a2 = 0; ?>
      <?php $b2 = 1; ?>
      <td><?php echo $a2 ?></td>
        <td><?php echo $b2 ?></td>
        <td> 
          <?php 
        $c2 = !$a2;
        var_export($c2);
        ?>
        </td>
        <td>
          <?php 
        $d2 = $a2 || $b2;
        var_export($d2);
        ?>
        </td>
        <td>
          <?php 
        $e2 = $a2 && $b2;
        var_export($e2);
        ?>
        </td>
        <td>
          <?php 
        $f2 = $a2 xor $b2;
        var_export($f2);
        ?>
        </td>
      </tr>
      <tr>
      <?php $a3 = 1; ?>
      <?php $b3 = 0; ?>
      <td><?php echo $a3 ?></td>
        <td><?php echo $b3 ?></td>
        <td> 
          <?php 
        $c3 = !$a3;
        var_export($c3);
        ?>
        </td>
        <td>
          <?php 
        $d3 = $a3 || $b3;
        var_export($d3);
        ?>
        </td>
        <td>
          <?php 
        $e3 = $a3 && $b3;
        var_export($e3);
        ?>
        </td>
        <td>
          <?php 
        $f3 = $a3 xor $b3;
        var_export($f3);
        ?>
        </td>
      </tr>
      <tr>
      <?php $a4 = 1; ?>
      <?php $b4 = 1; ?>
      <td><?php echo $a4 ?></td>
        <td><?php echo $b4 ?></td>
        <td> 
          <?php 
        $c4 = !$a4;
        var_export($c4);
        ?>
        </td>
        <td>
          <?php 
        $d4 = $a4 || $b4;
        var_export($d4);
        ?>
        </td>
        <td>
          <?php 
        $e4 = $a4 && $b4;
        var_export($e4);
        ?>
        </td>
        <td>
          <?php 
        $f4 = $a4 xor $b4;
        var_export($f4);
        ?>
        </td>
      </tr>
    </table>
    <h3>Гибкое сравнение в PHP</h3>
    <table>
      <tr>
        <th></th>
        <th>true</th>
        <th>false</th>
        <th>1</th>
        <th>0</th>
        <th>-1</th>
        <th>"1"</th>
        <th>null</th>
        <th>"php"</th>
    </tr>
    <tr>
        <th>
          <?php
          $one = true;
          var_export($one);
          ?>
          </th>
        <td>
          <?php
          $a1 = $one == true;
          var_export($a1);
          ?>
        </td>
        <td>
        <?php
          $b1 = $one == false;
          var_export($b1);
          ?>
        </td>
        <td>
        <?php
          $c1 = $one == 1;
          var_export($c1);
          ?>
        </td>
        <td><?php
          $d1 = $one == 0;
          var_export($d1);
          ?></td>
        <td><?php
          $e1 = $one == -1;
          var_export($e1);
          ?></td>
        <td>
        <?php
          $f1 = $one == "1";
          var_export($f1);
          ?>
        </td>
        <td><?php
          $g1 = $one == null;
          var_export($g1);
          ?></td>
        <td>
        <?php
          $h1 = $one == "php";
          var_export($h1);
          ?>
        </td>
    </tr>
    <tr>
    <th>
          <?php
          $two = false;
          var_export($two);
          ?>
          </th>
        <td>
          <?php
          $a2 = $two == true;
          var_export($a2);
          ?>
        </td>
        <td>
        <?php
          $b2 = $two == false;
          var_export($b2);
          ?>
        </td>
        <td>
        <?php
          $c2 = $two == 1;
          var_export($c2);
          ?>
        </td>
        <td><?php
          $d2 = $two == 0;
          var_export($d2);
          ?></td>
        <td><?php
          $e2 = $two == -1;
          var_export($e2);
          ?></td>
        <td>
        <?php
          $f2 = $two == "1";
          var_export($f2);
          ?>
        </td>
        <td><?php
          $g2 = $two == null;
          var_export($g2);
          ?></td>
        <td>
        <?php
          $h2 = $two == "php";
          var_export($h2);
          ?>
        </td>
    </tr>
    <tr>
    <th>
          <?php
          $three = 1;
          var_export($three);
          ?>
          </th>
        <td>
          <?php
          $a3 = $three == true;
          var_export($a3);
          ?>
        </td>
        <td>
        <?php
          $b3 = $three == false;
          var_export($b3);
          ?>
        </td>
        <td>
        <?php
          $c3 = $three == 1;
          var_export($c3);
          ?>
        </td>
        <td><?php
          $d3 = $three == 0;
          var_export($d3);
          ?></td>
        <td><?php
          $e3 = $three == -1;
          var_export($e3);
          ?></td>
        <td>
        <?php
          $f3 = $three == "1";
          var_export($f3);
          ?>
        </td>
        <td><?php
          $g3 = $three == null;
          var_export($g3);
          ?></td>
        <td>
        <?php
          $h3 = $three == "php";
          var_export($h3);
          ?>
        </td>
    </tr>
    <tr>
    <th>
          <?php
          $four = 0;
          var_export($four);
          ?>
          </th>
        <td>
          <?php
          $a4 = $four == true;
          var_export($a4);
          ?>
        </td>
        <td>
        <?php
          $b4 = $four == false;
          var_export($b4);
          ?>
        </td>
        <td>
        <?php
          $c4 = $four == 1;
          var_export($c4);
          ?>
        </td>
        <td><?php
          $d4 = $four == 0;
          var_export($d4);
          ?></td>
        <td><?php
          $e4 = $four == -1;
          var_export($e4);
          ?></td>
        <td>
        <?php
          $f4 = $four == "1";
          var_export($f4);
          ?>
        </td>
        <td><?php
          $g4 = $four == null;
          var_export($g4);
          ?></td>
        <td>
        <?php
          $h4 = $four == "php";
          var_export($h4);
          ?>
        </td>
    </tr>
    <tr>
        <th>
          <?php
          $five = -1;
          var_export($five);
          ?>
        </th>
        <td>
          <?php
          $a5 = $five == true;
          var_export($a5);
          ?>
        </td>
        <td>
        <?php
          $b5 = $five == false;
          var_export($b5);
          ?>
        </td>
        <td>
        <?php
          $c5 = $five == 1;
          var_export($c5);
          ?>
        </td>
        <td><?php
          $d5 = $five == 0;
          var_export($d5);
          ?></td>
        <td><?php
          $e5 = $five == -1;
          var_export($e5);
          ?></td>
        <td>
        <?php
          $f5 = $five == "1";
          var_export($f5);
          ?>
        </td>
        <td><?php
          $g5 = $five == null;
          var_export($g5);
          ?></td>
        <td>
        <?php
          $h5 = $five == "php";
          var_export($h5);
          ?>
        </td>
    </tr>
    <tr>
    <th>
          <?php
          $six = "1";
          var_export($six);
          ?>
        </th>
        <td>
          <?php
          $a6 = $six == true;
          var_export($a6);
          ?>
        </td>
        <td>
        <?php
          $b6 = $six == false;
          var_export($b6);
          ?>
        </td>
        <td>
        <?php
          $c6 = $six == 1;
          var_export($c6);
          ?>
        </td>
        <td><?php
          $d6 = $six == 0;
          var_export($d6);
          ?></td>
        <td><?php
          $e6 = $six == -1;
          var_export($e6);
          ?></td>
        <td>
        <?php
          $f6 = $six == "1";
          var_export($f6);
          ?>
        </td>
        <td><?php
          $g6 = $six == null;
          var_export($g6);
          ?></td>
        <td>
        <?php
          $h6 = $six == "php";
          var_export($h6);
          ?>
        </td>
    </tr>
    <tr>
    <th>
          <?php
          $seven = null;
          var_export($seven);
          ?>
        </th>
        <td>
          <?php
          $a7 = $seven == true;
          var_export($a7);
          ?>
        </td>
        <td>
        <?php
          $b7 = $seven == false;
          var_export($b7);
          ?>
        </td>
        <td>
        <?php
          $c7 = $seven == 1;
          var_export($c7);
          ?>
        </td>
        <td><?php
          $d7 = $seven == 0;
          var_export($d7);
          ?></td>
        <td><?php
          $e7 = $seven == -1;
          var_export($e7);
          ?></td>
        <td>
        <?php
          $f7 = $seven == "1";
          var_export($f7);
          ?>
        </td>
        <td><?php
          $g7 = $seven == null;
          var_export($g7);
          ?></td>
        <td>
        <?php
          $h7 = $seven == "php";
          var_export($h7);
          ?>
        </td>
    </tr>
    <tr>
    <th>
          <?php
          $eight = "php";
          var_export($eight);
          ?>
        </th>
        <td>
          <?php
          $a8 = $eight == true;
          var_export($a8);
          ?>
        </td>
        <td>
        <?php
          $b8 = $eight == false;
          var_export($b8);
          ?>
        </td>
        <td>
        <?php
          $c8 = $eight == 1;
          var_export($c8);
          ?>
        </td>
        <td><?php
          $d8 = $eight == 0;
          var_export($d8);
          ?></td>
        <td><?php
          $e8 = $eight == -1;
          var_export($e8);
          ?></td>
        <td>
        <?php
          $f8 = $eight == "1";
          var_export($f8);
          ?>
        </td>
        <td><?php
          $g8 = $eight == null;
          var_export($g8);
          ?></td>
        <td>
        <?php
          $h8 = $eight == "php";
          var_export($h8);
          ?>
        </td>
    </tr>
    </table>
    <h3>Жёсткое сравнение в PHP</h3>
    <table>
      <tr>
        <th></th>
        <th>true</th>
        <th>false</th>
        <th>1</th>
        <th>0</th>
        <th>-1</th>
        <th>"1"</th>
        <th>null</th>
        <th>"php"</th>
    </tr>
    <tr>
        <th>
          <?php
          $one = true;
          var_export($one);
          ?>
          </th>
        <td>
          <?php
          $a1 = $one === true;
          var_export($a1);
          ?>
        </td>
        <td>
        <?php
          $b1 = $one === false;
          var_export($b1);
          ?>
        </td>
        <td>
        <?php
          $c1 = $one === 1;
          var_export($c1);
          ?>
        </td>
        <td><?php
          $d1 = $one === 0;
          var_export($d1);
          ?></td>
        <td><?php
          $e1 = $one === -1;
          var_export($e1);
          ?></td>
        <td>
        <?php
          $f1 = $one === "1";
          var_export($f1);
          ?>
        </td>
        <td><?php
          $g1 = $one === null;
          var_export($g1);
          ?></td>
        <td>
        <?php
          $h1 = $one === "php";
          var_export($h1);
          ?>
        </td>
    </tr>
    <tr>
    <th>
          <?php
          $two = false;
          var_export($two);
          ?>
          </th>
        <td>
          <?php
          $a2 = $two === true;
          var_export($a2);
          ?>
        </td>
        <td>
        <?php
          $b2 = $two === false;
          var_export($b2);
          ?>
        </td>
        <td>
        <?php
          $c2 = $two === 1;
          var_export($c2);
          ?>
        </td>
        <td><?php
          $d2 = $two === 0;
          var_export($d2);
          ?></td>
        <td><?php
          $e2 = $two === -1;
          var_export($e2);
          ?></td>
        <td>
        <?php
          $f2 = $two === "1";
          var_export($f2);
          ?>
        </td>
        <td><?php
          $g2 = $two === null;
          var_export($g2);
          ?></td>
        <td>
        <?php
          $h2 = $two === "php";
          var_export($h2);
          ?>
        </td>
    </tr>
    <tr>
    <th>
          <?php
          $three = 1;
          var_export($three);
          ?>
          </th>
        <td>
          <?php
          $a3 = $three === true;
          var_export($a3);
          ?>
        </td>
        <td>
        <?php
          $b3 = $three === false;
          var_export($b3);
          ?>
        </td>
        <td>
        <?php
          $c3 = $three === 1;
          var_export($c3);
          ?>
        </td>
        <td><?php
          $d3 = $three === 0;
          var_export($d3);
          ?></td>
        <td><?php
          $e3 = $three === -1;
          var_export($e3);
          ?></td>
        <td>
        <?php
          $f3 = $three === "1";
          var_export($f3);
          ?>
        </td>
        <td><?php
          $g3 = $three === null;
          var_export($g3);
          ?></td>
        <td>
        <?php
          $h3 = $three === "php";
          var_export($h3);
          ?>
        </td>
    </tr>
    <tr>
    <th>
          <?php
          $four = 0;
          var_export($four);
          ?>
          </th>
        <td>
          <?php
          $a4 = $four === true;
          var_export($a4);
          ?>
        </td>
        <td>
        <?php
          $b4 = $four === false;
          var_export($b4);
          ?>
        </td>
        <td>
        <?php
          $c4 = $four === 1;
          var_export($c4);
          ?>
        </td>
        <td><?php
          $d4 = $four === 0;
          var_export($d4);
          ?></td>
        <td><?php
          $e4 = $four === -1;
          var_export($e4);
          ?></td>
        <td>
        <?php
          $f4 = $four === "1";
          var_export($f4);
          ?>
        </td>
        <td><?php
          $g4 = $four === null;
          var_export($g4);
          ?></td>
        <td>
        <?php
          $h4 = $four === "php";
          var_export($h4);
          ?>
        </td>
    </tr>
    <tr>
        <th>
          <?php
          $five = -1;
          var_export($five);
          ?>
        </th>
        <td>
          <?php
          $a5 = $five === true;
          var_export($a5);
          ?>
        </td>
        <td>
        <?php
          $b5 = $five === false;
          var_export($b5);
          ?>
        </td>
        <td>
        <?php
          $c5 = $five === 1;
          var_export($c5);
          ?>
        </td>
        <td><?php
          $d5 = $five === 0;
          var_export($d5);
          ?></td>
        <td><?php
          $e5 = $five === -1;
          var_export($e5);
          ?></td>
        <td>
        <?php
          $f5 = $five === "1";
          var_export($f5);
          ?>
        </td>
        <td><?php
          $g5 = $five === null;
          var_export($g5);
          ?></td>
        <td>
        <?php
          $h5 = $five === "php";
          var_export($h5);
          ?>
        </td>
    </tr>
    <tr>
    <th>
          <?php
          $six = "1";
          var_export($six);
          ?>
        </th>
        <td>
          <?php
          $a6 = $six === true;
          var_export($a6);
          ?>
        </td>
        <td>
        <?php
          $b6 = $six === false;
          var_export($b6);
          ?>
        </td>
        <td>
        <?php
          $c6 = $six === 1;
          var_export($c6);
          ?>
        </td>
        <td><?php
          $d6 = $six === 0;
          var_export($d6);
          ?></td>
        <td><?php
          $e6 = $six === -1;
          var_export($e6);
          ?></td>
        <td>
        <?php
          $f6 = $six === "1";
          var_export($f6);
          ?>
        </td>
        <td><?php
          $g6 = $six === null;
          var_export($g6);
          ?></td>
        <td>
        <?php
          $h6 = $six === "php";
          var_export($h6);
          ?>
        </td>
    </tr>
    <tr>
    <th>
          <?php
          $seven = null;
          var_export($seven);
          ?>
        </th>
        <td>
          <?php
          $a7 = $seven === true;
          var_export($a7);
          ?>
        </td>
        <td>
        <?php
          $b7 = $seven === false;
          var_export($b7);
          ?>
        </td>
        <td>
        <?php
          $c7 = $seven === 1;
          var_export($c7);
          ?>
        </td>
        <td><?php
          $d7 = $seven === 0;
          var_export($d7);
          ?></td>
        <td><?php
          $e7 = $seven === -1;
          var_export($e7);
          ?></td>
        <td>
        <?php
          $f7 = $seven === "1";
          var_export($f7);
          ?>
        </td>
        <td><?php
          $g7 = $seven === null;
          var_export($g7);
          ?></td>
        <td>
        <?php
          $h7 = $seven === "php";
          var_export($h7);
          ?>
        </td>
    </tr>
    <tr>
    <th>
          <?php
          $eight = "php";
          var_export($eight);
          ?>
        </th>
        <td>
          <?php
          $a8 = $eight === true;
          var_export($a8);
          ?>
        </td>
        <td>
        <?php
          $b8 = $eight === false;
          var_export($b8);
          ?>
        </td>
        <td>
        <?php
          $c8 = $eight === 1;
          var_export($c8);
          ?>
        </td>
        <td><?php
          $d8 = $eight === 0;
          var_export($d8);
          ?></td>
        <td><?php
          $e8 = $eight === -1;
          var_export($e8);
          ?></td>
        <td>
        <?php
          $f8 = $eight === "1";
          var_export($f8);
          ?>
        </td>
        <td><?php
          $g8 = $eight === null;
          var_export($g8);
          ?></td>
        <td>
        <?php
          $h8 = $eight === "php";
          var_export($h8);
          ?>
        </td>
    </tr>
    </table>
  </body>
</html>
