<nav class="navbar navbar-expand-lg " style="background-color: rgb(39, 233, 213)">
    <div class="container-fluid">
      <h1 class="navbar-brand" href="/home" style="color: black ; font-size: 30px ; text-align: center ;" >Amazing E-grocery</h1>
      <h1></h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
      </div>
      </div>
    </div>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a href="/home" class="nav-link" style="color: black; font-weight : bold"><i class="bi bi-box-arrow-in-right"></i>Logout</a>
        </li>
    </ul>
</nav>
 <div class="navbar">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/sucess" style="color: black ; font-weight : bold">Home</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/cart/{{Auth::user()->id}}" style="color:black ; font-weight : bold">Cart</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/profile" style="color:black ; font-weight : bold">Profile</a>
                  </li>
                </li>
            </ul>
          </div>
        </div>
      </nav>
</div>
</html>

<style>
       .bookstore1{
            justify-content: center;
            align-items: center;
            background-color: rgb(39, 233, 213);
            border-style: solid;
            border-color: rgb(39, 233, 213);
            border-width: 10px;
        }
        .bookstore1 h1{
            justify-content: center;
            align-items: center;
            text-align: center;
            font-family:monospace;
        }
        .navbar{
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .nav-item{
            background-color: rgb(255, 251, 0);
        }
</style>
