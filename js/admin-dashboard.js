let agentsCount = document.getElementById('agents');
let landsCount = document.getElementById('lands');
let propertiesCount = document.getElementById('properties');

const url = new Routes;

let agentUrl = `${url.api_origin}${url.getAgent}`;

let propertyUrl = `${url.api_origin}${url.getProperty}`;

let landUrl = `${url.api_origin}${url.getLand}`;


//fetch agents
const fetchAgent = async ()=>{
    try{
        let response = await fetch(agentUrl, {
            headers: {
                Accept: "application/json",
                "Content-Type": "application/json"
            }
        });
        let data = await response.json();
        let {agent} = data;
        console.log(agent)
        //insert the agents into the DOM
    if (data.status) {
        agent.forEach(agent =>{
            let {
                image
            } = agent;
            })

            agentsCount.innerHTML = agent.length;
        } else {
            agentsCount.innerHTML = 0;
        }
    } catch (err){
        console.log(err);
    }
}
fetchAgent();

//fetch properties
const fetchProperty = async ()=>{
    try{
        let response = await fetch(propertyUrl, {
            headers: {
                Accept: "application/json",
                "Content-Type": "application/json"
            }
        });
        let data = await response.json();
        let {property} = data;
        console.log(property)
        //insert the properties into the DOM
    if (data.status) {
        property.forEach(property =>{
            let {title, 
                purpose,
                price,
                details,
                image,
                agent_id,
                location
            } = property;
            })

            propertiesCount.innerHTML = property.length;
        } else {
            propertiesCount.innerHTML = 0;
        }
    } catch (err){
        console.log(err);
    }
}
fetchProperty();

//fetch lands

const fetchLand = async ()=>{
    try{
        let response = await fetch(landUrl, {
            headers: {
                Accept: "application/json",
                "Content-Type": "application/json"
            }
        });
        let data = await response.json();
        let {land} = data;
        console.log(land)
        //insert the lands into the DOM
        if (data.status) {
    land.forEach(land =>{
        let {title, 
            purpose,
            price,
            details,
            image,
            agent_id,
            location
        } = land;

        })
        landsCount.innerHTML = land.length;
    } else {
        landsCount.innerHTML = 0;
    }
    } catch (err){
        console.log(err);
    } 
}  
fetchLand();
