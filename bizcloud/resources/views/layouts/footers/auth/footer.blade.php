  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-2">
    <div class="container">
      
      @if (!auth()->user() || \Request::is('static-sign-up')) 
        <div class="row">
          <div class="col-10 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Desarrollado con el ❤️ por 
              <a style="color: #252f40;" href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">César Zavala López</a>
              &
              <a style="color: #252f40;" href="https://www.updivision.com" class="font-weight-bold ml-1" target="_blank">Humberto Erubiel Ortega Lujano</a>.
            </p>
          </div>
        </div>
      @endif
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
