<?php
require_once './database/controller.php';

$controller = new Controller();
$contractor = [];

if (isset($_GET['id'])) {
    $contracor_id = $_GET['id'];
    $contractor = $controller->fetchContractor($contracor_id);
}

?>

<!DOCTYPE html>
<html lang="pl">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Zadanie zdalne e-MSI</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link href="./css/style.css" rel="stylesheet">
      <style>
         

      </style>
   </head>
   <body>
      <body>
         <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
            <a class="navbar-brand col-md-3 col-lg-3 me-0 px-3 fs-6 text-white" href="index.php">Zadanie zdalne e-MSI</a>
            <ul class="navbar-nav flex-row d-md-none">
               <li class="nav-item text-nowrap">
                  <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
                     <svg class="bi">
                        <use xlink:href="#search"/>
                     </svg>
                  </button>
               </li>
               <li class="nav-item text-nowrap">
                  <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                     <svg class="bi">
                        <use xlink:href="#list"/>
                     </svg>
                  </button>
               </li>
            </ul>
            <div id="navbarSearch" class="navbar-search w-100 collapse">
               <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
            </div>
         </header>
         <div class="container-fluid">
            <div class="row">
               <div id="lewy" class="sidebar border border-right col-md-3 p-0 bg-body-tertiary">
                  <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                     <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                     </div>
                     <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                        <ul class="nav flex-column">
                           <li class="nav-item">
                              <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">
                              Różne Kontrolki HTML
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link d-flex align-items-center gap-2" href="employees.php">
                              Tabela Pracowników
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link d-flex align-items-center gap-2" href="vatinvoices.php">
                              Tabela Faktur VAT
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link d-flex align-items-center gap-2" href="delegation.php">
                              Tabela Delegacji BD
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link d-flex align-items-center gap-2" href="contractors.php">
                              Dane Kontrahentów
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>

               
                <main id="prawy" class="col-md-9 ms-sm-auto px-md-3">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="fs-4">Edytuj Kontrahenta</h1>
                    </div>
                    <form action="actions.php?id=<?php echo $contracor_id; ?>" method="POST">
                        <div class="mb-3">
                            <label for="nip" class="form-label">NIP<span style="color: #ff0000;"> *</span></label>
                            <input name="nip" type="text" class="form-control" id="nip" value="<?php echo $contractor['nip'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="regon" class="form-label">REGON<span style="color: #ff0000;"> *</span></label>
                            <input name="regon" type="text" class="form-control" id="regonInput" value="<?php echo $contractor['regon'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nazwa<span style="color: #ff0000;"> *</span></label>
                            <input name="name" type="text" class="form-control" id="nameInput" value="<?php echo $contractor['name'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="vat" class="form-label">Płatnik VAT<span style="color: #ff0000;"> *</span></label><br>
                            <input name="vat" type="checkbox" id="vatInput" <?php echo ($contractor['vat_payer'] ? "checked=checked" : "") ?>>
                        </div>
                        <div class="mb-3">
                            <label for="street" class="form-label">Ulica<span style="color: #ff0000;"> *</span></label>
                            <input name="street" type="text" class="form-control" id="streetInput" value="<?php echo $contractor['street'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="houseNumber" class="form-label">Numer domu<span style="color: #ff0000;"> *</span></label>
                            <input name="house_number" type="text" class="form-control" id="houseNumberInput" value="<?php echo $contractor['house_number'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="apartmentNumber" class="form-label">Numer Mieszkania</label>
                            <input name="apartment_number" type="text" class="form-control" id="apartmentNumberInput" value="<?php echo $contractor['apartment_number'] ?>">
                        </div>
                        <div id="formInfo" class="form-text"><span style="color: #ff0000;">*</span> - Pola wymagane.</div>

                        <button name="btn_edit_contractor" class="btn btn-dark mt-3" type="submit">Zapisz</button>
                    </form>
               </main>
            </div>
         </div>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   </body>
</html>
