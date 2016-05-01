<?php

if (isset ($_POST ['favorite'])) {
  $_SESSION['favorite'] = $_POST['jNumber'];
}

else {

  $query = "SELECT * FROM player WHERE category = '$category'";
  $result = mysqli_query($db, $query);

  if (!$result) {
    die ("SELECT error:" . mysqli_error($db));
  }

  $numrows = mysqli_num_rows($result);
  for($i = 0; $i < $numrows; $i++) {
    $row = mysqli_fetch_assoc($result);

    print "<div id='player'>";

      $image = $row['image'];
      print "<img class='player_profile' src='$image' width='400' height='225'>";

      $jNumber = $row['jNumber'];
      $fname = $row['fName'];
      $lname = $row['lName'];
      $name = "$fname $lname";

      print "<h2 id='player_title'>$name</h2>";

      print "</div>";

      print "<h2 id='player_summary'>2015 Summary</h2>";

      $summary = $row['summary'];
      print "<p>$summary</p>";

      $query2 = "select $cols from $table where jNumber = '$jNumber'";
      $result2 = mysqli_query($db, $query2);

      if (!$result2) {
        die ("SELECT error:" . mysqli_error($db));
      }

      $numrows2 = mysqli_num_rows($result2);

      print "<legend>2015 Statistics</legend>";

      for($j = 0; $j < $numrows2; $j++) {
        $row2 = mysqli_fetch_assoc($result2);
        print "<table class='player_stats'>";
          print "<tbody>";
          print "<tr class='stat_cats'>";
          foreach($row2 as $key => $value) {
              print "<th>$key</th>";
            }
            print "</tr>";
            print "<tr>";
            foreach($row2 as $key => $value) {
              print "<td>$value</td>";
            }
            print "</tr></tbody></table>";
          }

          print "<form class='favForm' action='' method='post'>";
          print "<input type='submit' value='Favorite Player' class='button' id='favPlayer' name='favorite'/>";
          print "<input type='hidden' value='jNumber' name='$jNumber'/>";
          print "</form>";

    }
}
?>
