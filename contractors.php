<?php
require_once './database/controller.php';

$controller = new Controller();
$contractors = $controller->fetchContractors();

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
                     <h1 class="fs-4">Kontrahenci</h1>
                     <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#myModal">
                     <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 489 589"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                         Dodaj Kontrahenta</button>
                  </div>

                        <div class="modal" id="myModal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM208 288h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H144c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z"/></svg>
                                          Dodawanie Kontrahenta</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form>
                                        <div class="mb-3">
                                            <label for="nip" class="form-label">NIP<span style="color: #ff0000;"> *</span></label>
                                            <input type="text" class="form-control" id="nipInput">
                                        </div>
                                        <div class="mb-3">
                                            <label for="regon" class="form-label">REGON<span style="color: #ff0000;"> *</span></label>
                                            <input type="text" class="form-control" id="regonInput">
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nazwa<span style="color: #ff0000;"> *</span></label>
                                            <input type="text" class="form-control" id="nameInput">
                                        </div>
                                        <div class="mb-3">
                                            <label for="vat" class="form-label">Płatnik VAT<span style="color: #ff0000;"> *</span></label><br>
                                            <input type="checkbox" id="vatInput">
                                        </div>
                                        <div class="mb-3">
                                            <label for="street" class="form-label">Ulica<span style="color: #ff0000;"> *</span></label>
                                            <input type="text" class="form-control" id="streetInput">
                                        </div>
                                        <div class="mb-3">
                                            <label for="houseNumber" class="form-label">Numer domu<span style="color: #ff0000;"> *</span></label>
                                            <input type="text" class="form-control" id="houseNumberInput">
                                        </div>
                                        <div class="mb-3">
                                            <label for="apartmentNumber" class="form-label">Numer Mieszkania</label>
                                            <input type="text" class="form-control" id="apartmentNumberInput">
                                        </div>
                                        <div id="formInfo" class="form-text"><span style="color: #ff0000;">*</span> - Pola wymagane.</div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                                    <button type="button" class="btn btn-primary">Zapisz</button>
                                </div>
                                </div>
                            </div>
                            </div>

                  <table class="table table-striped">
                        <thead>
                           <tr>
                           <th scope="col">Lp.</th>
                           <th scope="col">NIP</th>
                           <th scope="col">REGON</th>
                           <th scope="col">NAZWA</th>
                           <th scope="col">CZY PŁATNIK VAT?</th>
                           <th scope="col">ULICA</th>
                           <th scope="col">NUMER DOMU</th>
                           <th scope="col">NUMER MIESZKANIA</th>
                           <th scope="col">Akcje</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           foreach($contractors as $contractor) {
                              ?>
                              <tr class="<?=$contractor['id']?>">
                                 <td><?php echo $contractor['id'] ?></td>
                                 <td><?php echo $contractor['nip'] ?></td>
                                 <td><?php echo $contractor['regon'] ?></td>
                                 <td><?php echo $contractor['name'] ?></td>
                                 <td><?php echo $contractor['vat_payer'] ?></td>
                                 <td><?php echo $contractor['street'] ?></td>
                                 <td><?php echo $contractor['house_number'] ?></td>
                                 <td><?php echo $contractor['apartment_number'] ?></td>
                                 <td><button type="button" class="btn btn-outline-primary">
                                 <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
                                 </button></td>
                                 <td><button type="button" class="btn btn-outline-primary">
                                 <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                                 </button></td>
                              </tr>
                              <?php
                           }
                           ?>
                           
                           
                        </tbody>
                     </table>
               </main>
            </div>
         </div>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   </body>
</html>
