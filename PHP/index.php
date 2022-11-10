<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>


  <div class="container">
    <h1>Test</h1>

    <form name="form" action="" method="get">
      <input type="text" name="maxLoopSize" id="maxLoopSize">
      <input type="text" name="categoryFilter" id="categoryFilter">
      <input type="submit">
    </form>

    <?php
$i = 0;
$maxLoopSize = $_GET['maxLoopSize'] - 1;
$categoryFilter = $_GET['categoryFilter'];
$url = 'https://api.publicapis.org/entries'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data, true); // decode the JSON feed

echo '<table class="table-responsive table-striped">';
// foreach($characters['entries'] as $result){
// echo '<tr>';
// echo '<td>'.$result['API'].'</td>';
// echo '<td>'.$result['Description'].'</td>';
// echo '<td>'.$result['Auth'].'</td>';
// echo '<td>'.$result['HTTPS'].'</td>';
// echo '<td>'.$result['Cors'].'</td>';
// echo '<td>'.$result['Link'].'</td>';
// echo '<td>'.$result['Category'].'<td>';
// echo '</tr>';
// if(++$i > $maxLoopSize) break;
// }

echo '</table>';

?>
    <table class="table-responsive table-striped">
      <?php
foreach ($characters['entries'] as $result): ?>
      <?php if ($result['Category'] == "$categoryFilter") { ?>
      <td>
        <?php echo $result['API']; ?>
      </td>
      <td>
        <?php echo $result['Description']; ?>
      </td>
      <td>
        <?php echo $result['Auth']; ?>
      </td>
      <td>
        <?php echo $result['HTTPS']; ?>
      </td>
      <td>
        <?php echo $result['Cors']; ?>
      </td>
      <td>
        <?php echo $result['Link']; ?>
      </td>
      <td>
        <?php echo $result['Category']; ?>
      </td>
      </tr>
      <?php if (++$i > $maxLoopSize)
      break;
  } ?>
      <?php endforeach; ?>
    </table>

  </div>
</body>

</html>