
<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>

    <nav class="sidebar">
      <div class="sidebar-header ">
        <a href="#" class="sidebar-brand" style="margin-left:700px;">
          CHRIST&nbsp;THE&nbsp;LIVING<span>&nbsp;GOD&nbsp;FELLOWSHIP</span>
        </a>
      </div>
    </nav> 
    
    <div class="navbar-content">
        <ul class="navbar-nav">
           
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                    <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                        <div class="mb-3">
                            <img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80" alt="">
                        </div>
                        <div class="text-center">
                            <p class="tx-16 fw-bolder" style="text-transform: uppercase;"><?php echo $_SESSION['name'];?></p>
                            <p class="tx-12 text-muted" style="text-transform: uppercase;" id="accountID"><?php echo $_SESSION['accID'];?></p>
                        </div>
                    </div>


                    <ul class="list-unstyled p-1">
                        <li class="dropdown-item py-2">
                        <a href="logout" class="text-body ms-0">
                            <i class="me-2 icon-md" data-feather="log-out"></i>
                            <span>Log Out</span>
                        </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="lockScreen" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <form role="form" id="lockscreen-form" method="POST" autocomplete="nope" class="lockscreenForm"> 
      <div class="modal-body">
        <div class="text-center">
         <i class="mdi mdi-lock-outline" style="font-size:150px;"></i>
         <p>YOUR ACCOUNT IS LOCKED. ENTER YOUR PASSWORD</p>
        <div class="input-group mb-2">
            <div class="input-group-append">
                <span class="input-group-text" style="font-size:2em;"><i class="fa fa-key"></i></span>                    
            </div>
            <input type="password" class="form-control" name="passwordLock" id="passwordLock" autocomplete="off" required>

        </div>
        <p style="color:red; font-size:1.2em; display:none;" id="passwordError">Password is incorrect</p>
        </div>


      </div>
      <div class="modal-footer d-flex justify-content-center align-items-center">
        <div class="text-center d-flex justify-content-center align-items-center">
            <button type="submit" id="passwordLock"  class="btn btn-primary passwordLock ">Submit</button>
        </div>
 
      </div>
    </form>
    </div>
  </div>
</div>