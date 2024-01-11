<?php
require_once './database/controller.php';

$controller = new Controller();
$employees = $controller->fetchEmployees();

?>

<!DOCTYPE html>
<html lang="pl">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Zadanie zdalne e-MSI</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link href="./css/style.css" rel="stylesheet">
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
                     <h1 class="fs-4">Pracownicy</h1>
                  </div>

                  <div class="d-flex flex-row">
                  <div class="mx-4">
                     <input type="color" id="odd"/>
                     <label for="odd">Nieparzyste</label>
                  </div>
                  <div>
                     <input type="color" id="even"/>
                     <label for="even">Parzyste</label>
                  </div>
                  </div>
                  <hr>
                  <table class="table custom-table-striped">
                        <thead>
                           <tr>
                           <th scope="col">Lp.</th>
                           <th scope="col">Imię</th>
                           <th scope="col">Nazwisko</th>
                           <th scope="col">Stanowisko</th>
                           <th scope="col">Data zatrudnienia</th>
                           <th scope="col">Ilość dni urlopowych</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           foreach($employees as $employee) {
                              ?>
                              <tr>
                                 <td><?php echo $employee['id'] ?></td>
                                 <td><?php echo $employee['name'] ?></td>
                                 <td><?php echo $employee['lastname'] ?></td>
                                 <td><?php echo $employee['position'] ?></td>
                                 <td><?php echo $employee['employment_date'] ?></td>
                                 <td><?php echo $employee['vac_days'] ?></td>
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
   
         <script>

            loadColors();

            const oddElements = document.querySelectorAll("table.custom-table-striped>tbody>tr:nth-child(odd)>td, table.custom-table-striped>tbody>tr:nth-child(odd)>th")
            const evenElements = document.querySelectorAll("table.custom-table-striped>tbody>tr:nth-child(even)>td, table.custom-table-striped>tbody>tr:nth-child(even)>th")

            const oddPicker = document.getElementById("odd");
            oddPicker.addEventListener("input", (e) => {

               oddElements.forEach(item => {
                  item.style.backgroundColor = e.target.value;
               })

               localStorage.setItem("oddColor", e.target.value);

            })

            const evenPicker = document.getElementById("even");
            evenPicker.addEventListener("input", (e) => {

               evenElements.forEach(item => {
                  item.style.backgroundColor = e.target.value;
               })

               localStorage.setItem("evenColor", e.target.value);

            })

            function loadColors() {
               const evenColor = localStorage.getItem("evenColor");
               const oddColor = localStorage.getItem("oddColor");

               if (evenColor) {
                  const evenPicker = document.getElementById("even");
                  evenPicker.value = evenColor;

                  const evenElements = document.querySelectorAll("table.custom-table-striped>tbody>tr:nth-child(even)>td, table.custom-table-striped>tbody>tr:nth-child(even)>th");
                  evenElements.forEach(item => {
                     item.style.backgroundColor = evenColor;
                  })
               }

               if (oddColor) {
                  const oddPicker = document.getElementById("odd");
                  oddPicker.value = oddColor;

                  const oddElements = document.querySelectorAll("table.custom-table-striped>tbody>tr:nth-child(odd)>td, table.custom-table-striped>tbody>tr:nth-child(odd)>th");
                  oddElements.forEach(item => {
                     item.style.backgroundColor = oddColor;
                  })
               }
            }

         </script>
   </body>
</html>
