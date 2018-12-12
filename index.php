<!DOCTYPE html>
<html lang="es_mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Principal</title>
    <?php include('styles.php'); ?>
</head>
<body>
        <div class="container-extended">
            <div class="row">
                <div class="col s12">
                <table class="responsive-table highlight">
        <thead>
          <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Item Name</th>
              <th>Item Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
                </div>
            </div>
        </div>


    <?php include('scripts.php'); ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        M.AutoInit();
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, options);
    });
    </script>
</body>
</html>