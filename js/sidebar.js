const sidebar = document.getElementById('sidebar');

//insert side bar

if (sidebar != null) {
    sidebar.innerHTML = `
    <div class="container my-3 d-none d-md-block" id='sidebar__container'>
    <div class="row">
        <h4 class=" col-md-12 text-center py-3" id="find_home_address">
            Find Your Next Home Address
        </h4>
        <div class="col-md-12 my-2">
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
        <div class="col-md-12 my-2">
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
        <div class="col-md-12 my-2">
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
        <div class="col-md-12 my-2">
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
        <div class="col-md-12 my-2">
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
        <div class="col-md-12 my-2">
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
    `
}

const sidebarContainer = document.getElementById('sidebar__container');
sidebarContainer.style.backgroundColor = '#e2e0e0';
sidebarContainer.style.borderRadius = '5px';

    