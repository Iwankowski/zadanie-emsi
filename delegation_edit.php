<?php
require_once './database/controller.php';

$controller = new Controller();
$delegation = [];

if (isset($_GET['id'])) {
    $delegation_id = $_GET['id'];
    $delegation = $controller->fetchDelegation($delegation_id);
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
            <div id="lewy" class="sidebar border border-right col-md-3 p-0 bg-body-tertiary h-100 position-fixed">
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
                     <h1 class="fs-4">Delegacje</h1>
                  </div>

                  <form action="actions.php?id=<?php echo $delegation_id; ?>" method="POST">
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Imię i Nazwisko</label>
                            <input name="fullname" type="text" class="form-control" id="fullname" value="<?php echo $delegation['fullname'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="date_from" class="form-label">Data od</label>
                            <input name="date_from" type="date" class="form-control" id="date_from" value="<?php echo $delegation['date_from'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="date_to" class="form-label">Data do</label>
                            <input name="date_to" type="date" class="form-control" id="date_to" value="<?php echo $delegation['date_to'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="departure" class="form-label">Miejsce wyjazdu</label>
                            <input name="departure" type="text" class="form-control" id="departure" value="<?php echo $delegation['departure'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="arrival" class="form-label">Miejsce przyjazdu</label>
                            <input name="arrival" type="text" class="form-control" id="arrival" value="<?php echo $delegation['arrival'] ?>">
                        </div>

                        <button name="btn_edit_delegation" class="btn btn-dark mt-3" type="submit">Zapisz</button>
                    </form>
               </main>
            </div>
         </div>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   </body>
</html>
