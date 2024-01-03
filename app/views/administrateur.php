<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container m-5">
        <h1>Users</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>email</th>
                    <th>titre</th>
                    <th>edit role</th>
                </tr>
            </thead>
            <script>
            </script>
            <?php
            include("UserModel.php");
            $row1 = new UserModel();
            $r =  $row1->getUers();
            $s =  $row1->getRoles();




            foreach ($r as $row) {
                echo
                "
      <tr>
      <td>$row->nom</td>
      <td>$row->prenom</td>
      <td>$row->email</td>
      <td>$row->titre</td>
      <td>
    

      <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" 
      onclick=\"setId($row->id)\"   data-bs-target=\"#exampleModal\">Edit</button>

    <button class='btn btn-danger btn-sm' href=\"update.php?id=$row->id&idRole=3\" 
    onClick=\"return confirm('Are you sure you want to delete?')\">Delete</button>
          </td>
    
      </tr>";
            }
            ?>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <?php foreach ($s as $ro) {
                                echo " <button   class='btn btn-danger btn-sm' value='$ro->titre'   onclick=\"setIdRole($ro->id)\" > $ro->titre </button> <br>";
                            }
                            ?>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a id='link' class="btn btn-danger btn-sm" href="update.php?id=1&idRole=2" ;>change the role</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>


    <script>
        function setId(id) {
            var link = document.getElementById('link');
            var href = link.getAttribute('href');
            if (link) {
                var updatedHref = href.replace(/id=\d+/, 'id=' + id);
                link.setAttribute('href', updatedHref);
            }
        }

        function setIdRole(id) {
            var linki = document.getElementById('link');
            var hrefi = link.getAttribute('href');
            if (linki) {
                var updatedHref = hrefi.replace(/idRole=\d+/, 'idRole=' + id);
                link.setAttribute('href', updatedHref);
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>