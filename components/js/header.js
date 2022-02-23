class Header extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = `
        <style>
        .tab:hover{
            text-decoration: underline;
        }

    
        </style>
        
       


        <header>
   
        <nav class="navbar navbar-expand-md navbar-dark mb-1 bg-primary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">

            <ul class="navbar-nav mr-auto tabs" style="justify-content: space-evenly;
            margin-left: 30%">
                <li class="nav-item tab">
                <a class="nav-link " aria-current="page" href="../../index.php">INICIO</a>
                </li>
                <li class="nav-item tab">
                <a class="nav-link " aria-current="page" href="#">CITAS</a>
                </li>
                <li class="nav-item tab">
                <a class="nav-link " aria-current="page" href="../../empresas/index.php">EMPRESAS</a>
                </li>
                <li class="nav-item tab">
                <a class="nav-link" aria-current="page" href="../../persoas/index.php">PERSOAS</a>
                </li>
                <li class="nav-item tab">
                <a class="nav-link " aria-current="page" href="../../login/logout.php">SAÍR</a>
                </li>
            </ul>
              <form class="d-flex me-1" style="margin-left: 200px;">
                <input class="form-control " type="search" placeholder="..." aria-label="Search">
                <button class="btn btn-outline-warning" style="color: black; background-color: #ffc300;" type="submit">Buscar</button>
              </form>
            </div>
          </div>
        </nav>
      </header>

        `;
    }
}



customElements.define('header-component', Header);