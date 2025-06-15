<div class="container-fluid position-relative nav-bar p-0">
  <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
      <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
          <a href="/" class="navbar-brand">
              <h1 class="m-0 text-primary"><span class="text-dark">E-SUROY SOCOR</span>RO</h1>
          </a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
              <div class="navbar-nav ml-auto py-0">
              <a href="/" class="nav-item nav-link <?php echo ($pageTitle === 'home') ? 'active' : ''; ?>">Home</a>
                <a href="/tourist-spots" class="nav-item nav-link <?php echo ($pageTitle === 'tourist-spots') ? 'active' : ''; ?>">Spots</a>
                <a href="/delicacies" class="nav-item nav-link <?php echo ($pageTitle === 'delicacies') ? 'active' : ''; ?>">Delicacies</a>
                <a href="/barangays" class="nav-item nav-link <?php echo ($pageTitle === 'barangays') ? 'active' : ''; ?>">Barangays</a>
              </div>
          </div>
      </nav>
  </div>
</div>