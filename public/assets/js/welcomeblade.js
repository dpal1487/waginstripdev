// console.log("This is welcome js page");

/*****  Code by Himanshu Mehra Start  *****/
let city1 = "";
let city2 = "";
let select11 = "";
let select22 = "";
const myFunc = () => {
    let select2DepartureElem = document.getElementById("select2_departure").value;
    let select1 = document.getElementById("select2-select2_departure-container").innerHTML;
    let select2 = document.getElementById("select2-select2_arrival-container").innerHTML;
    let select2ArrivalElem = document.getElementById("select2_arrival").value;
    select11 = select1;
    select22 = select2;
    city1 = select2DepartureElem;
    city2 = select2ArrivalElem;
}


const swap = (id1, id2) => {
    myFunc();
    let a = `<option value=${city1}>${select11}</option>`;
    let b = `<option value=${city2}>${select22}</option>`;
    document.getElementById(id1).innerHTML = b;
    document.getElementById(id2).innerHTML = a;
}
/*****  Code by Himanshu Mehra End  *****/



// code by uddeshya 
// Getting last city name form set the value swap('select2_departure','select2_arrival')
setTimeout(() => {
    
    const date = document.getElementById('type1-start');
    let cookies = document.cookie.split(";");
    // console.table( cookies); 
    
    let departure = cookies.find((row) => row.startsWith(' departure')).split('=')[1];
    // console.table(departure); 
    // dateend.value = endDate;
    
    let arrival = cookies.find((row) => row.startsWith(' arrival')).split('=')[1];
    // console.table(arrival);
    
    let a = `<option value=${departure}>${departure}</option>`;
    let b = `<option value=${arrival}>${arrival}</option>`;
    
    // document.getElementById("select2_departure").innerHTML = b;
    // document.getElementById("select2_arrival").innerHTML = a;
     
}, 500);
// Set a Cookie
function setCookie(cName, cValue, expDays) {
        let date = new Date();
        date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = cName + "=" + cValue + ";" + expires + ";path=/";
}

const select2_departure = document.getElementById("select2_departure");
select2_departure.addEventListener("click", setCooki('select2_departure'));
select2_departure.addEventListener("change", setCooki('select2_departure'));


const select2_arrival = document.getElementById("select2_arrival");
select2_arrival.addEventListener("click", setCooki('select2_arrival'));
select2_arrival.addEventListener("change", setCooki('select2_arrival'));

function setCooki(id) {
    var activities = document.getElementById(id);
    var options = activities.querySelectorAll("option");
    var count = options.length;
    if(typeof(count) === "undefined" || count < 2){
        addActivityItem();
    }
    setCookie(activities.name, activities.value, 30);
    
    // console.table(activities.value);
    // console.table(activities.name);
}

function change() {
    if(activities.value == "addNew")
    {
        addActivityItem();
    }
    // console.table(activities.value);
    // console.table(activities);
}

function addActivityItem() {
    // ... Code to add item here
    //  myFunc();
    // console.table(activities.name);
    //  setCookie(cName, cValue, expDays)
    // console.table( cookies); 
}
























