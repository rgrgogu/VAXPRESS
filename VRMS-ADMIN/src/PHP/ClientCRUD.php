<?php
    include('./Sidebar.php');
    
    // GETTING THE CLIENT INFO AND THE LOCATIOn
    $query1 = "SELECT `client_id` as ID, `last_name`, `given_name`, `middle_name`
    FROM `client_info`";

    try {
        mysqli_select_db($conn, 'vrms_info');
        $_SESSION['checkSQL'] = mysqli_query($conn, $query1);     
    } catch (Exception $e) {
        echo $e;
    } 

    if(isset($_POST['searchBtn'])){
        $search = $_POST['searchInput'];

        $query1 = "SELECT `client_id` as ID, `last_name`, `given_name`, `middle_name`
        FROM `client_info` WHERE given_name LIKE '$search%' OR last_name LIKE '$search%' OR middle_name LIKE '$search%';";

        try {
            mysqli_select_db($conn, 'vrms_info');
            $_SESSION['checkSQL'] = mysqli_query($conn, $query1);
        } catch (Exception $e) {
            echo $e;
        }
    }
?>

<style>
    .modal-backdrop{
        width: 100% !important;
    }
</style>

<section>
    <div class="col pt-4" id="client_crud">
        <div class="row ms-2 me-1">
            <nav aria-label="breadcrumb" class="bg-danger rounded-3 p-3 mb-4 text-white justify-content-between">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item" aria-current="page">People Dashboard</li>
                </ol>
            </nav>
        </div>
        <div class="row ms-2 me-1 py-3" style="background-color: rgb(221, 221, 221)">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <h4 class="pt-2">Manage People</h4>
                <form class="d-flex" role="search" method="POST">
                    <input class="form-control me-2" name="searchInput" type="search" placeholder="Search Name">
                    <button class="btn" name="searchBtn" type="submit"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaRJREFUSEu1lF9OwkAQxr9N+i5HwLB9FhKWV/UGcALlBMoJxBNYTyCeQDiB8EpJrM9MI94A3pusGd2SUrt0+bdvm3b2N/PNNyNw4iNO/D4KAR/VaiXxvDsAbQB1k0QEYOglyXNjsVi6JvYPMPX9W6H1E4CK5ZGlFqLXms8HLpANgHn8xQSOAASKaMz3UMorAH0Al3wXWneacTwsg6wBRpYvzlwL0bVlGErJkAcASy9JzsvkWgMygSNFxNpbTyglV8WVPCoiBlrPGjCTMtLABYDrVBZblJHrHUCkiBpOgFBKzT8qIifruv6flWgfwEoR2dz2W9heEs1qtbYW4g3ARBGxu8p7kGnyUBF1HJvcU0SBE8DYdAHgjP2uiB6LAjOJfHtJUne2KT+WKZ2vYw30W0STzKCx/1NJSi260YM0WzPNXDZXUnRWPOFm2CKhddCM41ebTNuW3b0A2mY22A2f+m/ZBSxLZm54bQyacdwtgjh5vigwt7eskL0BDJ36/kBofZMmUFTJQQAXyMGAPCS/iY8CSCFs7fyaPxpgJ5tuG/1dv528gh9K2dAZZ2CPcwAAAABJRU5ErkJggg==" /></button>
                    <form class="d-flex" role="search">
                        <a href="./AddPerson.php" class="btn ms-4"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAS1JREFUSEvtk8FNAzEQRWckF0AJljI5A1J84ASpgFABJVBCkg4oASogHZCckNhICfeJ5BK4Z9GgkVhE1l7s3VVu8W29M//Jf/4gHPngkfXhBEg6HLVoY+1ZacxURCaqgIgLU5bzS+8/k4q1gihgTbQVgPNa7dIxj3sDCqIbAHhtEBo75mUbSPCCgmgGANMGkblj1v8HpyASvXDMgV5wsR4MJoL4EgOgyN1ot1v0AmhzbAYI8DFivoiBW71ABd6stcaYRwC41W9BfP7a72dX3vsKUIk2zaOyq/Mmdwb8zOABADRNf4+mR4ccpCjbovfh8AlF7hMxDJKUBfgvPRHgwT5kAQoiffp15hKtHHPdwmjr75BTQ6t3x5Yquju5sesNyLSmdVnnPcglnQBJp74BR651GXsM0VUAAAAASUVORK5CYII=" /></a>
                    </form>
                </form>
            </div>
            <div class="mt-3 pb-2 text-danger overflow-auto table-responsive text-nowrap" style="max-height: 450px; background-color: #eee">
                <table class="table table-striped">
                    <thead class="sticky-top bg-white">
                        <tr>
                            <th scope="col">Client ID</th>
                            <th scope="col">Given Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $checkQuery1 = $_SESSION['checkSQL'];
                            if (mysqli_num_rows($checkQuery1) > 0) {
                                while ($rows = mysqli_fetch_assoc($checkQuery1)) { 
                                    $client_id = $rows['ID'];
                        ?>
                                    <tr>
                                        <th scope="row"><?php echo $rows['ID'] ?></th>
                                        <td><?php echo $rows['given_name'] ?></td>
                                        <td><?php echo $rows['middle_name'] ?></td>
                                        <td><?php echo $rows['last_name'] ?></td>
                                        <td>
                                            <a href="./UpdatePerson.php?id=<?php echo $rows['ID']; ?>" class="btn btn-light"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAQZJREFUSEu9lDsOwjAMQG2pOxwhQ7PTgUqMnAQ4EUeg3IAjsCGVAfZ0yBF6gEhGQUQqJYmcfsicvGc7thFmPjgzH0YJain3NsBSqSoU6GCBhSPRyYIJ8RCSDBI8hFiaLNMAsHCRhyTJAgsvtG5rKVdIdHUSQjyXSr1L1j1Jgk9ZjoS4LZV6OgkhXnxwK2ILujUHgNZJbkKIjda2XN7DEvTgDtQaY4oYnJVBAG47x1vzpD+opayQaNd/xIVHM5gCHhRMBfcKIvDgtMb22U8X3fOcPDUfBPdm0BfE9gxnE0czGAtnzQEnyqQ/GAtMGrQpZKwuShGtm+aL+X9BSrScu6x1zQGF7rwAcm6JGdmj66MAAAAASUVORK5CYII=" /></a>
                                            <a href="../PHP DATABASE/ClientDeleteProfile.php?id=<?php echo $rows['ID']; ?>" class="btn btn-light"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAALlJREFUSEtjZKAxYKSx+QwELTilqprA+P//fGwO+c/ImGh2+/YCfI7Ea8EpVVUDxv//z+Mz4D8jo6HZ7dsXcKlBseC0isp/agSZ6Z07cHPpawE1XI9uBtY4IDeokIMGZtEIsADmbfRgwyZOVhCNWkAwFY0G0QgIIlIKQFIy2gMGBgZ5UgxnZGC4aHLnjgFRpekZZeUABkbGhv8MDPpEWvKQ8f//ApO7dzcQZQGRhhKljGClT5QpeBQBAEWTohlEA/ujAAAAAElFTkSuQmCC" /></a>
                                        </td>
                                    </tr>
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>