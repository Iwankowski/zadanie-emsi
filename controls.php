
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
                     <h1 class="fs-4">Kontrolki HTML</h1>
                  </div>

                  <div class="container p-4">
                    <div class="border mb-4">
                    <div class="px-4 py-2 d-flex flex-row"> 
                    <div class="form-floating w-25 d-inline-flex">
                        <input type="text" class="form-control">
                        <label for="nip">NIP</label>
                    </div>
                        <div class="form-floating w-25 d-inline-flex">
                        <input type="number" class="form-control">
                        <label for="regon">REGON</label>
                    </div>
                    <div class="form-floating w-25 d-inline-flex">
                        <input type="text" class="form-control">
                        <label for="name">Nazwa</label>
                    </div>
                    <div class="form-floating mb-1 w-25 d-inline-flex">
                        <input type="date" class="form-control">
                        <label for="date">Data powstania</label>
                    </div>
                        </div>
                        <div class="px-4 d-flex flex-row"> 
                    <div class="form-floating w-25 d-inline-flex">
                        <input type="text" class="form-control">
                        <label for="street">Ulica</label>
                    </div>
                    <div class="form-floating mb-3 w-25 d-inline-flex">
                        <input type="text" class="form-control">
                        <label for="house_number">Numer domu</label>
                    </div>
                    <div class="form-floating mb-3 w-25 d-inline-flex">
                        <input type="text" class="form-control">
                        <label for="apartment_number">Numer Mieszkania</label>
                    </div>
                    </div>
                    <div class="form-floating mb-3 mx-auto w-50">
                        <textarea class="form-control"></textarea>
                        <label for="comments">Uwagi</label>
                    </div>
                </div>

                <div class="d-flex justify-content-evenly">
                <div class="border p-4 mb-4 w-25">
                <div class="form-floating mb-2 w-100">
                        <select class="form-select" id="floatingSelect">
                            <option value="1">Zielony</option>
                            <option value="2">Niebieski</option>
                            <option value="3">Szary</option>
                            <option value="4">Turkusowy</option>
                            <option value="5">Granatowy</option>
                            <option value="6">Czerwony</option>
                            <option value="7">Biały</option>
                         </select>
                    <label for="colorSelect">Kolory</label>
                </div>
                <div class="form-floating mb-2 w-100">
                        <select class="form-select" id="floatingSelect">
                            <option value="1">ZW</option>
                            <option value="2">NP</option>
                            <option value="3">0%</option>
                            <option value="4">3%</option>
                            <option value="5">8%</option>
                            <option value="6">23%</option>
                         </select>
                    <label for="vatSelect">VAT</label>
                </div>
                </div>

                <div class="border p-4 w-25">
                    <ol>
                        <li>Element 1</li>
                        <li>Element 2</li>
                        <li>Element 3</li>
                        <li>Element 4</li>
                        <li>Element 5</li>
                    </ol>
                </div>
               </div>
               </main>
            </div>
         </div>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   </body>
</html>
