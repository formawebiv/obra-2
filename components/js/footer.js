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


  <div class="container" id="foooter">
        <footer class="py-3">
        <div class=" justify-content-center text-center container">
      <span class="text-black ">© 2022 Servizo de Orientación Laboral</span>
    
        <hr>
        
          <ul class="nav   list-unstyled d-flex justify-content-center ">
        <li class="ms-3 mx-3"><a class="text-muted" href="https://sede.vigo.org/portal-empregado/#/gestionLogin"><img src="../../assets/img/portal.png" width="35"></a></li>
        <li class="ms-3 mx-3 "><a class="text-muted" href="https://correo.vigo.org/#1"><img src="../../assets/img/zimbra.png" width="40" ></a></li>
          <li class="ms-3 mx-4 "><a class="text-muted" href="https://hoxe.vigo.org/"><img src="../../assets/img/conceemprego2.png" width="160"></a></li>
        </ul>
        
        </div>
        </footer>
        <div>
     `
        ;
  }
}



customElements.define('footer-component', Footer);