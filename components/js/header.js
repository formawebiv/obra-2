class Header extends HTMLElement {
    constructor() {
      super();
    }
  
    connectedCallback() {
        this.innerHTML = `
        <header>
        <div class="px-3 py-2 bg-white text-black">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="/" class="d-flex align-items-center my-0 my-lg-0 me-lg-auto text-black text-decoration-none">
              <img class="logo" src="../assets/img/logo.png"/></a>
    
              <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                  <a href="#" class="nav-link text-secondary">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg>
                    Home
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-black">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"></use></svg>
                    Inicio
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-black">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"></use></svg>
                    Carrito
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-black">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"></use></svg>
                    Productos
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-black">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"></use></svg>
                    Ofertas
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>
        `;
      }
    }
    
    customElements.define('header-component', Header);

