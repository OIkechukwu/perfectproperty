const url = new Routes;

let propertyRentUrl = `${url.api_origin}${url.getPropertyRent}`;

let landRentUrl = `${url.api_origin}${url.getLandRent}`;

let propertyContainer = document.querySelector('.property__container');
propertyContainer.innerHTML = "";

//fetch properties for Rent
const fetchPropertyRent = async ()=>{
    try{
        let response = await fetch(propertyRentUrl, {
            headers: {
                Accept: "application/json",
                "Content-Type": "application/json"
            }
        });
        let data = await response.json();
        console.log(data.property)
        console.log('hi')

        //insert the properties for Rent into the DOM
    if (data.status) {
        data.property.forEach(element =>{
            let {title, 
                purpose,
                price,
                details,
                image,
                agent_id,
                location
            } = element;

            propertyContainer.innerHTML += `
                <div class="row property">
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <img src="${image}" alt="${title}" class="img-fluid">
                    </div>
                    <div class="col-md-8 property-description">
                        <div>Price : <span id="price">${price}</span></div>
                        <div class="description">${details}</div>
                        <div class="location">${location}</div>
                        <div class="row justify-content-end px-2">
                            <span class="social"><a href="#"><i class="fab fa-facebook-messenger"></i></a></span>
                            <span class="social"><a href="#"><i class="fa fa-envelope"></i></a></span>
                            <span class="social"><a href="#"><i class="fa fa-phone-alt"></i></a></span>
                        </div>
                    </div>
                </div>
            `;

            // console.log(propertyContainer)
            })
        } else {
            propertyContainer.innerHTML += `No Property found!`;
        }
    } catch (err){
        console.log(err);
    }
}
    
fetchPropertyRent();

//fetch land for Rent

const fetchLandRent = async ()=>{
    try{
        let response = await fetch(landRentUrl, {
            headers: {
                Accept: "application/json",
                "Content-Type": "application/json"
            }
        });
        let data = await response.json();
        console.log(data.land)
        console.log('hi')

        //insert the properties for Rent into the DOM
        if (data.status) {
    data.land.forEach(element =>{
        let {title, 
            purpose,
            price,
            details,
            image,
            agent_id,
            location
        } = element;

        propertyContainer.innerHTML += `
            <div class="row property">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="${image}" alt="${title}" class="img-fluid">
                </div>
                <div class="col-md-8 property-description">
                    <div>Price : <span id="price">${price}</span></div>
                    <div class="description">${details}</div>
                    <div class="location">${location}</div>
                    <div class="row justify-content-end px-2">
                        <span class="social"><a href="#"><i class="fab fa-facebook-messenger"></i></a></span>
                        <span class="social"><a href="#"><i class="fa fa-envelope"></i></a></span>
                        <span class="social"><a href="#"><i class="fa fa-phone-alt"></i></a></span>
                    </div>
                </div>
            </div>
        `;
        })
    } else {
        propertyContainer.innerHTML += `No Land found!`;
    }
        } catch (err){
            console.log(err);
            console.log('hey')
        } 
}
    
fetchLandRent();
