<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
      <a class="navbar-brand" href="#">BootyBloggy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
              <li class="nav-item">
                  <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/home">AddEmployee</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ ($title === 'Employee') ? 'active' : '' }}" href="/employeedata">ViewEmployee</a>
              </li>
          </ul>
          <!-- Align Logout Button to the Right -->
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          <button class="btn btn-outline-light ms-auto" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Logout
          </button>
      </div>
  </div>
</nav>
