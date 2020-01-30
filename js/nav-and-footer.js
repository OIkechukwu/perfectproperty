const nav = document.getElementById('nav');
const footer = document.getElementById('footer');

//insert navigation bar
if (nav!=null){
    nav.innerHTML = `
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html"><img src="./css/imgs/Group 13.png" alt="Logo"> Perfectproperty</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

<<<<<<< HEAD
<div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
    <li class="nav-item active">
        <a class="nav-link" href="for_sale.html">For Sale</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="for_rent.html">For Rent</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="short_let.html">Short let</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Agents</a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn-action my-1 text-center my-md-0" href="post_property.html">Post a property <span class="highlight p-1"> FREE </span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn-action my-1 text-center my-md-0" href="login.php">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn-action my-1 text-center my-md-0" href="signUp.php">Sign Up</a>
    </li>
    </ul>
</div>
</nav>
`

footer.innerHTML = `
<div class="container py-5">
<div class="row">
    <h4 class=" col-md-12 text-center py-3" id="find_home_address">
        Find Your Next Home Address
    </h4>
    <div class="col-6 col-md-4 my-2">
        <h6 class="h6_tag offset-1">House For Sale</h6>
        <ul class="towns">
            <li class="li_tag"><a href="">Amakohia(56)</a></li>
            <li class="li_tag"><a href="">Irete(56)</a></li>
            <li class="li_tag"><a href="">Naze(56)</a></li>
            <li class="li_tag"><a href="">Okigwe(56)</a></li>
            <li class="li_tag"><a href="">Orji(56)</a></li>
            <li class="li_tag"><a href="">Orlu(56)</a></li>
        </ul>
    </div>
    <div class="col-6 col-md-4 my-2">
        <h6 class="h6_tag offset-1">House For Rent</h6>
        <ul>
            <li class="li_tag"><a href="">Amakohia(56)</a></li>
            <li class="li_tag"><a href="">Irete(56)</a></li>
            <li class="li_tag"><a href="">Naze(56)</a></li>
            <li class="li_tag"><a href="">Okigwe(56)</a></li>
            <li class="li_tag"><a href="">Orji(56)</a></li>
            <li class="li_tag"><a href="">Orlu(56)</a></li>
        </ul>
    </div>
    <div class="col-6 col-md-4 my-2">
        <h6 class="h6_tag offset-1">House To Let</h6>
        <ul>
            <li class="li_tag"><a href="">Avu(56)</a></li>
            <li class="li_tag"><a href="">Douglas(56)</a></li>
            <li class="li_tag"><a href="">Egbu(56)</a></li>
            <li class="li_tag"><a href="">Ikenegbu(56)</a></li>
            <li class="li_tag"><a href="">New Owerri(56)</a></li>
            <li class="li_tag"><a href="">World Bank(56)</a></li>
        </ul>
    </div>
    <div class="col-6 col-md-4 my-2">
        <h6 class="h6_tag offset-1">House For Sale</h6>
        <ul>
            <li class="li_tag"><a href="">Avu(56)</a></li>
            <li class="li_tag"><a href="">Douglas(56)</a></li>
            <li class="li_tag"><a href="">Egbu(56)</a></li>
            <li class="li_tag"><a href="">Ikenegbu(56)</a></li>
            <li class="li_tag"><a href="">New Owerri(56)</a></li>
            <li class="li_tag"><a href="">World Bank(56)</a></li>
        </ul>
    </div>
    <div class="col-6 col-md-4 my-2">
        <h6 class="h6_tag offset-1">House For Rent</h6>
        <ul>
            <li class="li_tag"><a href="">Avu(56)</a></li>
            <li class="li_tag"><a href="">Douglas(56)</a></li>
            <li class="li_tag"><a href="">Egbu(56)</a></li>
            <li class="li_tag"><a href="">Ikenegbu(56)</a></li>
            <li class="li_tag"><a href="">New Owerri(56)</a></li>
            <li class="li_tag"><a href="">World Bank(56)</a></li>
        </ul>
    </div>
    <div class="col-6 col-md-4 my-2">
        <h6 class="h6_tag offset-1">House To Let</h6>
        <ul class="ul">
            <li class="li_tag"><a href="" class="ul_a">Avu(56)</a></li>
            <li class="li_tag"><a href="">Douglas(56)</a></li>
            <li class="li_tag"><a href="">Egbu(56)</a></li>
            <li class="li_tag"><a href="">Ikenegbu(56)</a></li>
            <li class="li_tag"><a href="">New Owerri(35))</a></li>
            <li class="li_tag"><a href="">World Bank(56)</a></li>
        </ul>
    </div> 
</div>
</div>
<div class="container-fluid py-5" id="box4">
<div class="row">
    <h2 class="col-12 text-light text-center" id="agent">Perfect Property Agents</h2>
    <div class="col-6 col-md-3 d-flex align-items-center justify-content-center">
        <a href="" class="text-center py-2">
            <img src="css/imgs/X1-Vermont.png" class="img-fluid our_agents_logo">
        </a>
    </div>
    <div class="col-6 col-md-3 d-flex align-items-center justify-content-center">
        <a href="" class="text-center py-2">
            <img class="img-fluid our_agents_logo" src="css/imgs/fine&country.png">
        </a>
    </div>
    <div class="col-6 col-md-3 d-flex align-items-center justify-content-center">
        <a href="" class="text-center py-2">
            <img class="img-fluid our_agents_logo " src="css/imgs/download 1.png">
        </a>
    </div>
    <div class="col-6 col-md-3 d-flex align-items-center justify-content-center">
        <a href="" class="text-center py-2">
            <img class="img-fluid our_agents_logo" src="css/imgs/homes.jpg">
        </a>
    </div>
</div>
<div class="row">
    <div class="col-6 col-md-3 d-flex align-items-center justify-content-center">
        <a href="" class="text-center py-2">
            <img src="css/imgs/ei homes.png" class="img-fluid our_agents_logo">
        </a>
    </div>
    <div class="col-6 col-md-3 d-flex align-items-center justify-content-center">
        <a href="" class="text-center py-2">
            <img class="img-fluid our_agents_logo" src="css/imgs/true homes.jpg">
        </a>
    </div>
    <div class="col-6 col-md-3 d-flex align-items-center justify-content-center">
        <a href="" class="text-center py-2">
            <img class="img-fluid our_agents_logo" src="css/imgs/X1-OBrien.png">
        </a>
    </div>
    <div class="col-6 col-md-3 d-flex align-items-center justify-content-center">
        <a href="" class="text-center py-2">
            <img class="img-fluid our_agents_logo" src="css/imgs/agent2.png">
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <p class="text-light">Perfect property</p>
    </div>
    <div class="col-md-3 text-light">
        <p class="offset-1 pl-3 footer_headings">Properties</p>
        <ul>
            <li class="li_tag"><a href="" class="text-light">Properties for Sale</a></li>
            <li class="li_tag"><a href="" class="text-light">Properties for Rent</a></li>
            <li class="li_tag"><a href="" class="text-light">Estate Agent</a></li>
=======
    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="for_sale.html">For Sale</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="for_rent.html">For Rent</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="short_let.html">Short let</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="agents.html">Agents</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn-action my-1 text-center my-md-0" href="post_property.html">Post a property <span class="highlight p-1"> FREE </span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn-action my-1 text-center my-md-0" href="login.html">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn-action my-1 text-center my-md-0" href="signUp.html">Sign Up</a>
        </li>
>>>>>>> 62e008d3121fd91abfa9eafd00c15ea3c2bfa4a0
        </ul>
    </div>
    </nav>
    `
}

//insert footer
if (footer != null) {
    footer.innerHTML = `
    <div class="container-fluid py-5" id="box4">
    <div class="row">
        <div class="col-md-3">
            <p class="text-light">Perfect property</p>
        </div>
        <div class="col-md-3 text-light">
            <p class="footer_headings">Properties</p>
            <ul>
                <li class="li_tag"><a href="" class="text-light">Properties for Sale</a></li>
                <li class="li_tag"><a href="" class="text-light">Properties for Rent</a></li>
                <li class="li_tag"><a href="" class="text-light">Estate Agent</a></li>
            </ul>
        </div>
        <div class="col-md-3 text-light">
            <p class="footer_headings">Perfect property nigeria</p>
            <ul>
                <li class="li_tag"><a href="" class="text-light">About Us</a></li>
                <li class="li_tag"><a href="" class="text-light">Contact Us</a></li>
                <li class="li_tag"><a href="" class="text-light">Terms & Privacy</a></li>
            </ul>
        </div>
        <div class="col-md-3 text-light">
            <p class="footer_headings">Services</p>
            <ul>
                <li class="li_tag"><a href="" class="text-light">Advertisement</a></li>
            </ul>
        </div>
        <!-- <div class="col-md-12" id="footer_line1"></div>
        <div class="col-md-12" id="footer_line2"></div> -->
    </div>
    <div class="row">
        <div class="col-md-12 text-light text-center py-2">
            <span >&copy</span>
            <span id="team">2019 Designed By Team 4</span>
        </div>
    </div>
    </div>
    `
}

let navItem = document.getElementsByClassName('nav-item');
console.log(navItem);