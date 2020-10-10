<div class="sticky-top">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="sidebar-header">
         <img src="../assets/admin/images/bookmyremovalists.png" />   

      </div>
        <button type="button" id="sidebarCollapse" class="sidebartooglebtn">
            <i class="fas fa-align-left"></i>
            <span></span>
        </button>

        <div class="navbar-collapse justify-content-end" id="navbarSupportedContent">
          <div class="search-section">
            <form>
              <div class="d-flex">
                <label for="search">Search By:</label>
                <select class="selecttype">
                  <option value="" selected>Select Anyone</option>
                  <option value="customers">Customers</option>
                  <option value="movers">Movers</option>
                </select>
                <select class="selecttype">
                  <option value="" selected>Select Anyone</option>
                  <option value="user-id">User Id</option>
                  <option value="email">Email</option>
                  <option value="name">Name</option>
                </select>
                <div class="inputsearch d-flex">
                  <input type="search" class="form-control" name="search" placeholder="Click here to search">
                  <button type="submit" class="submitbtn1"><i class="fa fa-search mr-1"></i>Search</button>
                </div>
              </div>
            </form>
          </div>
            <ul class="nav navbar-nav ml-4">
                <li class="nav-item">
                  <div class="dropdown">
                    <a class="dropdown-toggle mx-1" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                      Example <i class="fas fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="edit-user.php"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a>
                      <a class="dropdown-item" href="login.php"><i class='fas fa-sign-out-alt'></i> Sign Out</a>
                    </div>
                  </div>
                </li>
            </ul>
        </div>
    </div>
  </nav>
</div>