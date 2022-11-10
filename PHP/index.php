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
    <br></br>
    <h1>Entries Finder</h1>
    <form class="row g-3">
      <div class="col-auto">
        <label for="formFile" class="form-label">Query Size</label>
        <input type="text" name="maxLoopSize" id="maxLoopSize" placeholder="10">
      </div>
      <div class="col-auto">
        <label for="formFile" class="form-label">Category</label>
        <input type="text" name="categoryFilter" id="categoryFilter" placeholder="Animals">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Search</button>
      </div>
    </form>

    <hr>
    </hr>

    <?php
    $i = 0;
    $maxLoopSize = $_GET['maxLoopSize'] - 1;
    $categoryFilter = $_GET['categoryFilter'];
    $url = 'https://api.publicapis.org/entries'; // path to your JSON file
    $data = file_get_contents($url); // put the contents of the file into a variable
    $characters = json_decode($data, true); // decode the JSON feed
    
    // echo '<table class="table-responsive table-striped">';
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
    
    // echo '</table>';
    
    ?>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">API</th>
          <th scope="col">Description</th>
          <th scope="col">Auth</th>
          <th scope="col">HTTPS (1 = Yes)</th>
          <th scope="col">Cors</th>
          <th scope="col">Link</th>
          <th scope="col">Category</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($characters['entries'] as $result): ?>
        <?php if ($result['Category'] == "$categoryFilter") { ?>
        <tr>
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
      </tbody>
    </table>

  </div>
</body>

</html>