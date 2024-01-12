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
          .table>:not(caption)>*>* {
            border-bottom-width: 0;
            }
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
                              <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="controls.php">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                              Różne Kontrolki HTML
                              </a>
                           </li>
                           <hr>
                           <li class="nav-item">
                              <a class="nav-link d-flex align-items-center gap-2" href="employees.php">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                              Tabela Pracowników
                              </a>
                           </li>
                           <hr>
                           <li class="nav-item">
                              <a class="nav-link d-flex align-items-center gap-2" href="vatinvoices.php">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/><path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"/></svg>
                              Tabela Faktur VAT
                              </a>
                           </li>
                           <hr>
                           <li class="nav-item">
                              <a class="nav-link d-flex align-items-center gap-2" href="delegation.php">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                              Tabela Delegacji BD
                              </a>
                           </li>
                           <hr>
                           <li class="nav-item">
                              <a class="nav-link d-flex align-items-center gap-2" href="contractors.php">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                               Dane Kontrahentów
                              </a>
                           </li>
                           <hr>
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
                                <form action="actions.php" method="POST">
                                <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nip" class="form-label">NIP<span style="color: #ff0000;"> *</span></label>
                                            <input name="nip" type="text" class="form-control" id="nipInput">
                                        </div>
                                        <div class="mb-3">
                                            <label for="regon" class="form-label">REGON<span style="color: #ff0000;"> *</span></label>
                                            <input name="regon" type="text" class="form-control" id="regonInput">
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nazwa<span style="color: #ff0000;"> *</span></label>
                                            <input name="name" type="text" class="form-control" id="nameInput">
                                        </div>
                                        <div class="mb-3">
                                            <label for="vat_payer" class="form-label">Płatnik VAT<span style="color: #ff0000;"> *</span></label><br>
                                            <input name="vat_payer" type="checkbox" id="vatInput">
                                        </div>
                                        <div class="mb-3">
                                            <label for="street" class="form-label">Ulica<span style="color: #ff0000;"> *</span></label>
                                            <input name="street" type="text" class="form-control" id="streetInput">
                                        </div>
                                        <div class="mb-3">
                                            <label for="houseNumber" class="form-label">Numer domu<span style="color: #ff0000;"> *</span></label>
                                            <input name="house_number" class="form-control" id="houseNumberInput">
                                        </div>
                                        <div class="mb-3">
                                            <label for="apartmentNumber" class="form-label">Numer Mieszkania</label>
                                            <input name="apartment_number" class="form-control" id="apartmentNumberInput">
                                        </div>
                                        <div id="formInfo" class="form-text"><span style="color: #ff0000;">*</span> - Pola wymagane.</div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                                    <button name="btn_create_contractor" type="submit" class="btn btn-primary">Zapisz</button>
                                </div>
                                </form>

                                </div>
                            </div>
                            </div>


                            

                  <?php
                     if(isset($_GET['edited'])){
                     ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                           Pomyślnie edytowano
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                  <?php
                     } else if (isset($_GET['deleted'])){
                  ?>

                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Pomyślnie usunięto
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>

                  <?php
                     } else if (isset($_GET['created'])){
                        ?>
      
                           <div class="alert alert-success alert-dismissible fade show" role="alert">
                           Pomyślnie zapisano
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
      
                        <?php
                           }
                           ?>


                 


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
                           $index = 0;
                           foreach($contractors as $contractor) {
                              if (!$contractor['deleted']) {

                              ?>
                              <tr>
                                 <td><?php echo ++$index ?></td>
                                 <td><?php echo $contractor['nip'] ?></td>
                                 <td><?php echo $contractor['regon'] ?></td>
                                 <td><?php echo $contractor['name'] ?></td>
                                 <td><?php echo $contractor['vat_payer'] ? "tak" : "nie" ?></td>
                                 <td><?php echo $contractor['street'] ?></td>
                                 <td><?php echo $contractor['house_number'] ?></td>
                                 <td><?php echo $contractor['apartment_number'] ?></td>
                                 <td class="d-flex mb-0">

                                    <a href="contractors_edit.php?id=<?php echo $contractor['id'] ?>" class="btn btn-dark btn-sm me-2 d-flex align-items-center justify-content-center">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>
                                    </a>
                                    <form action="actions.php?id=<?php echo $contractor['id'] ?>" method="POST">
                                       <input type="hidden" name="contractor_delete" hidden>
                                       <button class="btn btn-sm btn-danger d-flex align-items-center justify-content-center" type="submit">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                       </button>
                                    </form>
                                 </td>
                              </tr>
                              <?php
                              }
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
