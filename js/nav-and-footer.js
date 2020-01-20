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