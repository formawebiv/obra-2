class Footer extends HTMLElement {
    constructor() {
      super();
    }
  
    connectedCallback() {
        this.innerHTML = `
        <style>
        footer-component {
            position: absolute;
            bottom: 0;
            width: 100vw;
            background: #5A7E99;
            71A5DE
        }

            </style>


        <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3">
    <div class="col-md-4 d-flex align-items-center">
     
      <span class="text-white">© 2022 Servizo de Orientación Laboral</span>
    </div>

    <ul class="nav col-md-4 justify-content-between list-unstyled d-flex">
    <li class="ms-3"><a class="text-muted" href="https://sede.vigo.org/portal-empregado/#/gestionLogin"><img src="../assets/img/portal.png" width="35"></a></li>
    <li class="ms-3"><a class="text-muted" href="https://correo.vigo.org/#1"><img src="../assets/img/zimbra.png" width="50" ></a></li>
      <li class="ms-3"><a class="text-muted" href="https://hoxe.vigo.org/"><img src="../assets/img/conceemprego2.png" width="160"></a></li>
    </ul>
  </footer>
</div>
        `;
      }
    }
    
    customElements.define('footer-component', Footer);