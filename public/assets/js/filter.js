// console.log("This is filter page by uddeshya ");


//  code by uddeshya

{ /* <div><input type="checkbox" class="form-check-input" value=""> Karol bagh</div> */ } { /* <div><input type="checkbox" class="form-check-input" name="city" value=""> Karol bagh</div> */ }

let citystags = document.getElementsByClassName('City');
let citys = [];
let allcitys = [];
setTimeout(() => {
    var arrayindex = 0
    for (var i = 0; i < citystags.length; i++) {
        let city = citystags[i].innerHTML;
        allcitys[i] = city
            // let city = citystags[i].innerHTML.replace(/\s+/g, '_');
        if (citys.includes(city)) {} else {
            citys[arrayindex] = city
            arrayindex++
        }
    }
    var Locality = document.getElementById('Locality');
    if(Locality != undefined){
        
    Locality.innerHTML = " ";
    }
    for (let i = 0; i < citys.length; i++) {
        let para = document.createElement("div");
        // <input type="checkbox" name="checkbox" />
        para.innerHTML = '<input type="checkbox" class="form-check-input citybox" name="city" value="' + citys[i] + '">' + citys[i];
        Locality.appendChild(para);
    }
}, 200)
setTimeout(() => {
    var checkboxes = document.querySelectorAll("input[type=checkbox][name=city]");
    let selectedCity = [];

    // Use Array.forEach to add an event listener to each checkbox.
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            selectedCity = Array.from(checkboxes).filter(i => i.checked).map(i => i.value);
            for (let j = 0; j < allcitys.length; j++) {
                let city = allcitys[j];
                let boxid = document.getElementById(idlist[j]);
                if (!(selectedCity.includes(city))) {
                    boxid.classList.add('hide')
                } else {
                    for (let z = 0; z < idlist.length; z++) {
                        if (allcitys[j] + j == idlist[z]) {
                            let boxid = document.getElementById(idlist[z])
                            boxid.classList.remove('hide')
                        }
                    }
                }
                if ((selectedCity.length === 0) || (selectedCity.length === citys.length)) {
                    for (let j = 0; j < allcitys.length; j++) {
                        let boxid = document.getElementById(idlist[j])
                        boxid.classList.remove('hide')

                    }
                }
            }
        })
    })
}, 500)