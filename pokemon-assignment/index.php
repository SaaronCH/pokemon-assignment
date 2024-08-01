<?php
$json=file_get_contents("./data.json");
$datus=json_decode($json,true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokemon!</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-dark">
  <div class="container">
    <div class="mt-4 mb-5 d-flex justify-content-between align-items-center">
    <div>
      <button class="btn btn-primary">
        <i class="fa-brands fa-square-pied-piper"></i>Pokemon</button>
    </div>  
    <h1 class="text-white">Get your Pokemon!</h1>
      

      <div>
        <button class="btn btn-primary">
          <i class="fa fa-sign-in"></i> Login</button>
      </div>
    </div>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Species</th>
          <th scope="col">Description</th>
          <th scope="col">Weight</th>
          <th scope="col">Height</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach($datus as $elements): ?>
            <tr>
            <h5 class="text-white">
              <td><img src="<?php echo $elements ["image"] ["thumbnail"]?>"></td>
              <td><?php echo $elements["name"] ["english"]?></td>
              <td><?php echo strtoupper ($elements["species"])?></td>
              <td><?php echo $elements["description"]?></td>
              <td><i class="fa-solid fa-weight-scale"></i><?php echo $elements["profile"] ["weight"]?></td>
              <td><i class="fa-solid fa-ruler-vertical"></i><?php echo $elements["profile"] ["height"]?></td>
              <td>
              <button class="btn btn-primary">
              <?php echo $elements["profile"] ["action"]?>
              <i class="fa-regular fa-thumbs-up"></i>Collect </button>              
            </td>
            </h5>

            </tr>

          <?php endforeach; ?>
            
      </tbody>
    </table>
    <div>
        <button class="btn btn-primary">
        <i class="fa-solid fa-door-open"></i>  Exit</button>
      </div>

  </div>
  <!-- DNT MAKE ANY CHANGES ON THE CODE BELOW -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>