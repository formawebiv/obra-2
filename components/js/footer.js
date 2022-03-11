class Footer extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    this.innerHTML = `
        
<style>
#foooter{
  margin-top: min(35px, 10%);
  position:relative;
}
</style>
<div class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
<a href="/" class="d-flex mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
  <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
  <span class="text-black mt-2">&copy; 2022 Servizo de Orientación Laboral</span>
</a>
<ul class="nav col-md-4 d-flex justify-content-end list-unstyled">
  <li class="ms-3">
    <a class="text-muted" href="https://sede.vigo.org/portal-empregado/#/gestionLogin"><img class="bi" height="32" alt="Portal do Empregado" src="../assets/img/portal.png"></a>
  </li>
  <li class="ms-3">
    <a class="text-muted" href="https://correo.vigo.org/zimbra/"><img class="bi" height="32" alt="Zimbra" src="../assets/img/zimbra.png"></a>
  </li>
  <li class="ms-3">
    <a class="text-muted" href="https://hoxe.vigo.org/"><img class="bi" height="32" alt="Páxina do Concello de Vigo" src="../assets/img/conceemprego2.png"></a>
  </li>
</ul>
</div>
     `
        ;
  }
}



customElements.define('footer-component', Footer);