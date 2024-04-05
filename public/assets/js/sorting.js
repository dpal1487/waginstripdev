// const rangeInput = document.querySelectorAll(".range-input input"),
// priceInput = document.querySelectorAll(".price-input input"),
// range = document.querySelector(".slider-again .progress");

// let priceGap = 1000;
// priceInput.forEach(input => {
//     input.addEventListener("input", e => {
//         let minPrice = parseInt(priceInput[0].value),
//             maxPrice = parseInt(priceInput[1].value);

//         if ((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max) {
//             if (e.target.className === "input-min") {
//                 rangeInput[0].value = minPrice;
//                 range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
//             } else {
//                 rangeInput[1].value = maxPrice;
//                 range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
//             }
//         }
//     });
// });
// rangeInput.forEach(input => {
//     input.addEventListener("input", e => {
//         let minVal = parseInt(rangeInput[0].value),
//             maxVal = parseInt(rangeInput[1].value);
//         if ((maxVal - minVal) < priceGap) {
//             if (e.target.className === "range-min") {
//                 rangeInput[0].value = maxVal - priceGap
//             } else {
//                 rangeInput[1].value = minVal + priceGap;
//             }
//         } else {
//             priceInput[0].value = minVal;
//             priceInput[1].value = maxVal;
//             range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
//             range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
//         }
//     });
// });

// /////////////////////////// Range fliter jquary //////////////////////////////////////////////

// jquery ui slider 

$(document).ready( function(){
    
    
    
	
	// $('#price-range-submit').hide();

	// $("#min_price,#max_price").on('change', function () {

	//   $('#price-range-submit').show();

	//   var min_price_range = parseInt($("#min_price").val());

	//   var max_price_range = parseInt($("#max_price").val());

	//   if (min_price_range > max_price_range) {
	// 	$('#max_price').val(min_price_range);
	//   }

	//   $("#slider-range").slider({
	// 	values: [min_price_range, max_price_range]
	//   });
	  
	// });


	// $("#min_price,#max_price").on("paste keyup", function () {                                        

	//   $('#price-range-submit').show();

	//   var min_price_range = parseInt($("#min_price").val());

	//   var max_price_range = parseInt($("#max_price").val());
	  
	//   if(min_price_range == max_price_range){

	// 		max_price_range = min_price_range + 100;
			
	// 		$("#min_price").val(min_price_range);		
	// 		$("#max_price").val(max_price_range);
	//   }

	//   $("#slider-range").slider({
	// 	values: [min_price_range, max_price_range]
	//   });

	// });


    var minPrice = parseInt($('.product-card').first().text());
    var maxPrice = parseInt($('.product-card').first().text());
    $('.product-card').each(function() {
        var price = parseInt($(this).text());
        if (price < minPrice) minPrice = price;
        if (price > maxPrice) maxPrice = price;
    });
    $('#min_price').val(minPrice);
    $("#slider-range").slider({
        range: false,
        min: minPrice,
        max: maxPrice,
        value: minPrice,
        slide: function(event, ui) {
            $("#min_price").val(ui.value);
            filterAirlineHide(ui.value, maxPrice);
        }
    });

    function filterAirlineHide(minPrice, maxPrice) {
        $('.airline_hide').each(function() {
            var fare = parseInt($(this).find('.product-card').text());
            if (fare >= minPrice) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }

    filterAirlineHide(parseInt($('#min_price').val()), parseInt($('#max_price').val()));

    $('#min_price').on('input', function() {
        var minPrice = parseInt($('#min_price').val());
        if (minPrice > maxPrice) {
            var temp = minPrice;
            minPrice = maxPrice;
            maxPrice = temp;
            $('#min_price').val(minPrice);
        }
        $("#slider-range").slider("value", minPrice);
        filterAirlineHide(minPrice, maxPrice);
    });

//   var minPrice = parseInt($('.product-card').first().text());
//   var maxPrice = parseInt($('.product-card').first().text());
//   $('.product-card').each(function() {
//     var price = parseInt($(this).text());
//     if (price < minPrice) minPrice = price;
//     if (price > maxPrice) maxPrice = price;
//   });
//   $('#min_price').val(minPrice);
//   $('#max_price').val(maxPrice);
//   $("#slider-range").slider({
//     range: true,
//     min: minPrice,
//     max: maxPrice,
//     values: [minPrice, maxPrice],
//     slide: function(event, ui) {
//       $("#min_price").val(ui.values[0]);
//       $("#max_price").val(ui.values[1]);
//       filterAirlineHide(ui.values[0], ui.values[1]);
//     }
//   });


// function filterAirlineHide(minPrice, maxPrice) {
//   $('.airline_hide').each(function() {
//     var fare = parseInt($(this).find('.product-card').text());
//     if (fare >= minPrice && fare <= maxPrice) {
//       $(this).show();
//     } else {
//       $(this).hide();
//     }
//   });
// }
// filterAirlineHide(parseInt($('#min_price').val()), parseInt($('#max_price').val()));
// $('#min_price, #max_price').on('input', function() {
//   var minPrice = parseInt($('#min_price').val());
//   var maxPrice = parseInt($('#max_price').val());
//   if (minPrice > maxPrice) {
//     var temp = minPrice;
//     minPrice = maxPrice;
//     maxPrice = temp;
//     $('#min_price').val(minPrice);
//     $('#max_price').val(maxPrice);
//   }
//   $("#slider-range").slider("values", [minPrice, maxPrice]);
//   filterAirlineHide(minPrice, maxPrice);
// });

// 	$(function () {
// 	  $("#slider-range").slider({
// 		range: true,
// 		orientation: "horizontal",
// 		min: 3000,
// 		max: 70000,
// 		values: [0, 70000],
// 		step: 100,

// 		slide: function (event, ui) {
// 		  if (ui.values[0] == ui.values[1]) {
// 			  return false;
// 		  }
		  
// 		  $("#min_price").val(ui.values[0]);
// 		  $("#max_price").val(ui.values[1]);
// 		}
// 	  });

// 	  $("#min_price").val($("#slider-range").slider("values", 0));
// 	  $("#max_price").val($("#slider-range").slider("values", 1));

// 	});

// 	$("#slider-range,#price-range-submit").click(function () {

// 	  var min_price = $('#min_price').val();
// 	  var max_price = $('#max_price').val();
// 	  filterSystem(min_price, max_price);

// 	});
// 	function filterSystem(min_price, max_price) {
// 		$("#flightMainCard div.airline_hide").hide().filter(function () {
// 			var price1 = parseInt($(this).data("price1"), 10);
// 			return price1 >= min_price && price1 <= max_price;
// 		}).show();
// 	}

	// ////////////sort by price///////////////////
$(".form-control1").on("change", function () {
    var sortingMethod = $(this).val();

    if (sortingMethod == 'l2h') {
        sortProductsPriceAscending();
        
    } else if (sortingMethod == 'h2l') {
        sortProductsPriceDescending();
    } else if (sortingMethod == '0') {
        sortBynormal();
    }
});
setTimeout(() => {
  sortProductsPriceAscending();
}, 500);

function sortProductsPriceAscending() {
  var gridItems = $('.airline_hide');

  // Find the minimum price
  var maxPrice = 0; // Set initial value to infinity
  var minPrice = Infinity; // Set initial value to infinity
  gridItems.each(function() {
      var price = $(this).find('.product-card').data('price1');
      if (price < minPrice) {
          minPrice = price;
      }
      if (price > maxPrice) {
        maxPrice = price;
    }
  });

  // Sort the products by price
  gridItems.sort(function (a, b) {
      return $('.product-card', a).data("price1") - $('.product-card', b).data("price1");
  });

  $(".isotope-grid").append(gridItems);
  
  // Log the minimum price
  console.log("Minimum price: " + minPrice);
  document.getElementById("todayMinp").innerHTML = minPrice;
  document.getElementById("max_price").max = maxPrice;
  
}

// function sortProductsPriceAscending() {
//     var gridItems = $('.airline_hide');

//     gridItems.sort(function (a, b) {
//         // return $('.product-card', a).data("price1") - $('.product-card', b).data("price1");
//         return sortPrice =  $('.product-card', a).data("price1") - $('.product-card', b).data("price1");
//     });

//     $(".isotope-grid").append(gridItems);
// }

function sortProductsPriceDescending() {
    var gridItems = $('.airline_hide');

  

  // Sort the products by price
    gridItems.sort(function (a, b) {
        return $('.product-card', b).data("price1") - $('.product-card', a).data("price1");
        
    });

    $(".isotope-grid").append(gridItems);
}

function sortBynormal() {
    var gridItems = $('.airline_hide');

    gridItems.sort(function (a, b) {
        return $(a).index() - $(b).index();
    });

    $(".isotope-grid").append(gridItems);
}
});

// //////////////////timing code here Himanshu /////////////////////////
// let takeOffTimingElems = document.querySelectorAll(".take-off-timing");
// let landingElems = document.querySelectorAll(".takeoff");
// let takingOffElems = document.querySelectorAll(".airline_hide");

// let selectedButtonIndex = -1;

// takeOffTimingElems.forEach((takeOffTimingElem, index) => {
//   takeOffTimingElem.addEventListener("click", () => {
//     let minHour, maxHour;
//     if (selectedButtonIndex === index) { // Deselect if same button clicked again
//       selectedButtonIndex = -1;
//     } else {
//       selectedButtonIndex = index;
//       switch (index) {
//         case 0:
//           minHour = 0;
//           maxHour = 06;
//           break;
//         case 1:
//           minHour = 6;
//           maxHour = 12;
//           break;
//         case 2:
//           minHour = 12;
//           maxHour = 18;
//           break;
//         case 3:
//           minHour = 18;
//           maxHour = 24;
//           break;
        
//         default:
//           return;
//       }
//     }
//     takingOffElems.forEach((takingOffElem, i) => {
//       let hour = parseInt(takingOffElem.innerText.slice(0, 2));
//       if (selectedButtonIndex === -1 || (hour < minHour || hour >= maxHour)) {
//         takingOffElem.style.display = "none";
//         landingElems[i].style.display = "none";
//       } else {
//         takingOffElem.style.display = "block";
//         landingElems[i].style.display = "block";
//       }
//     });
//   });
// });



// let takeOffTimingElems = document.querySelectorAll(".take-off-timing");
// let landingElems = document.querySelectorAll(".landing");
// let takingOffElems = document.querySelectorAll(".takingoff");

// takeOffTimingElems.forEach((takeOffTimingElem, index) => {
//   takeOffTimingElem.addEventListener("click", () => {
//     let minHour, maxHour;
//     switch (index) {
//       case 0:
//         minHour = 0;
//         maxHour = 6;
//         break;
//       case 1:
//         minHour = 6;
//         maxHour = 12;
//         break;
//       case 2:
//         minHour = 12;
//         maxHour = 18;
//         break;
//       case 3:
//         minHour = 18;
//         maxHour = 24;
//         break;
//       default:
//         return;
//     }
//     takingOffElems.forEach((takingOffElem, i) => {
//       let hour = parseInt(takingOffElem.innerText.slice(0, 2));
//       if (index < 4 && (hour < minHour || hour >= maxHour)) {
//         takingOffElem.style.display = "none";
//       } else if (index >= 4 && (hour < minHour || hour >= maxHour)) {
//         landingElems[i].style.display = "none";
//       } else {
//         takingOffElem.style.display = "block";
//         landingElems[i].style.display = "block";
//       }
//     });
//   });
// });

// // Take Of Before 6AM
// let cardElem = document.querySelectorAll(".take-off-timing")[0];
// let takeoffElem = document.querySelectorAll(".takeoff");
// cardElem.addEventListener("click", () => {
// for(let i = 0; i < takeoffElem.length; i++){
//   let result = takeoffElem[i].innerText.slice(0,2);
//   result = Number.parseInt(result);
//   let takingoffElem = document.querySelectorAll(".airline_hide")[i];
//       if (result < 6) {
//         takingoffElem.style.display = "block";
//       } else {
//         takingoffElem.style.display = "none";
//       }
// }
// checkAll();
//     });



// // // Take Of 6AM - 12AM
// let cardElem2 = document.querySelectorAll(".take-off-timing")[1];
// let takeoffElem2 = document.querySelectorAll(".takeoff");
//  cardElem2.addEventListener("click", () => {
// for(let i = 0; i < takeoffElem2.length; i++){
//   let result = takeoffElem2[i].innerText.slice(0,2);
//   result = Number.parseInt(result);
//   let takingoffElem2 = document.querySelectorAll(".airline_hide")[i];
//       if (result >= 6 && result <= 11) {
//         takingoffElem2.style.display = "block";
//       } else {
//         takingoffElem2.style.display = "none";
//       }
// }
// checkAll();
// console.log("cardelem2");
//     });


// // // Take Of 12PM - 6PM
// let cardElem3 = document.querySelectorAll(".take-off-timing")[2];
// let takeoffElem3 = document.querySelectorAll(".takeoff");
//   cardElem3.addEventListener("click", () => {
// for(let i = 0; i < takeoffElem3.length; i++){
//   let result = takeoffElem3[i].innerText.slice(0,2);
//   result = Number.parseInt(result);
//   let takingoffElem3 = document.querySelectorAll(".airline_hide")[i];
//       if (result >= "12:00" && result <= "18:00") {
//         takingoffElem3.style.display = "block";
//       } else {
//         takingoffElem3.style.display = "none";
//       }
// }
// checkAll();
//     });


// // // Take Of After 6PM
// let cardElem4 = document.querySelectorAll(".take-off-timing")[3];
// let takeoffElem4 = document.querySelectorAll(".takeoff");
//   cardElem4.addEventListener("click", () => {
// for(let i = 0; i < takeoffElem4.length; i++){
//   let result = takeoffElem4[i].innerText.slice(0,2);
//   result = Number.parseInt(result);
//   let takingoffElem4 = document.querySelectorAll(".airline_hide")[i];
//       if (result > 18) {
//         takingoffElem4.style.display = "block";
//       } else {
//         takingoffElem4.style.display = "none";
//       }
// }
// checkAll();
//     });







// // // Landing Before 6AM
// let cardElem5 = document.querySelectorAll(".landing-timing")[0];
// let takeoffElem5 = document.querySelectorAll(".landing");
//   cardElem5.addEventListener("click", () => {
// for(let i = 0; i < takeoffElem5.length; i++){
//   let result = takeoffElem5[i].innerText.slice(0,2);
//   result = Number.parseInt(result);
//   let takingoffElem5 = document.querySelectorAll(".airline_hide")[i];
//       if (result < 6) {
//         takingoffElem5.style.display = "block";
//       } else {
//         takingoffElem5.style.display = "none";
//       }
// }
// checkAllAgain();
//     });


// // // Landing Of 6AM - 12AM
// let cardElem6 = document.querySelectorAll(".landing-timing")[1];
// let takeoffElem6 = document.querySelectorAll(".landing");
//   cardElem6.addEventListener("click", () => {
// for(let i = 0; i < takeoffElem6.length; i++){
//   let result = takeoffElem6[i].innerText.slice(0,2);
//   result = Number.parseInt(result);
//   let takingoffElem6 = document.querySelectorAll(".airline_hide")[i];
//       if (result >= 6 && result <= 11) {
//         takingoffElem6.style.display = "block";
//       } else {
//         takingoffElem6.style.display = "none";
//       }
// }
// checkAllAgain();
//     })


// // // Landing Of 12PM - 6PM
// let cardElem7 = document.querySelectorAll(".landing-timing")[2];
// let takeoffElem7 = document.querySelectorAll(".landing");
//   cardElem7.addEventListener("click", () => {
// for(let i = 0; i < takeoffElem7.length; i++){
//   let result = takeoffElem7[i].innerText.slice(0,2);
//   result = Number.parseInt(result);
//   let takingoffElem7 = document.querySelectorAll(".airline_hide")[i];
//       if (result >= "12:00" && result <= "18:00") {
//         takingoffElem7.style.display = "block";
//       } else {
//         takingoffElem7.style.display = "none";
//       }
// }
// checkAllAgain();
//     })



// // // Landing Of After 6PM
// let cardElem8 = document.querySelectorAll(".landing-timing")[3];
// let takeoffElem8 = document.querySelectorAll(".landing");
//   cardElem8.addEventListener("click", () => {
// for(let i = 0; i < takeoffElem8.length; i++){
//   let result = takeoffElem8[i].innerText.slice(0,2);
//   result = Number.parseInt(result);
//   let takingoffElem8 = document.querySelectorAll(".airline_hide")[i];
//       if (result > 18) {
//         takingoffElem8.style.display = "block";
//       } else {
//         takingoffElem8.style.display = "none";
//       }
// }
// checkAllAgain();
//     })
    

// function checkAll() {
//     let clicked = false;
//     let elem = document.querySelectorAll('.take-off-timing');
//     console.log(elem);
//     for (let i = 0; i < elem.length; i++) {
//         // console.log(elem[i]);
//         if (elem[i].click) {
//             clicked = true;
//             // console.log("checked")
//         } else {
//             // console.log("unchecked")
//         }
//     }

//     let anotherPriceElem = document.querySelectorAll(".airline_hide");
//     for (let i = 0; i < anotherPriceElem.length; i++) {
//         if (!clicked) {
//             anotherPriceElem[i].style.display = "block";
//         }
//     }
// }



// function checkAllAgain() {
//     let clicked2 = false;
//     let elem2 = document.querySelectorAll('.landing-timing');
//     for (let i = 0; i < elem2.length; i++) {
//         // console.log(elem[i]);
//         if (elem2[i].click) {
//             clicked2 = true;
//             // console.log("checked")
//         } else {
//             // console.log("unchecked")
//         }
//     }

//     let anotherPriceElem2 = document.querySelectorAll(".takingoff");
//     for (let i = 0; i < anotherPriceElem2.length; i++) {
//         if (!clicked2) {
//             anotherPriceElem2[i].style.display = "block";
//         }
//     }
// }


// ////////////////Sort by Time ////////////////////////////

// const buttons = document.querySelectorAll('.take-off-timing');
// const cardLists = document.querySelectorAll('.isotope-grid .airline_hide');
// const buttons2 = document.querySelectorAll('.landing-timing');
// const cardLists2 = document.querySelectorAll('.isotope-grid .airline_hide');

// buttons.forEach(button => {
//   button.addEventListener('click', () => {
//     // Toggle the active class on the button
//     button.classList.toggle('activetime');
//     showMatchingCardLists();
//   });
// });

// buttons2.forEach(button => {
//   button.addEventListener('click', () => {
//     // Toggle the active class on the button
//     button.classList.toggle('activetime');
//     showMatchingCardLists();
//   });
// });

// function showMatchingCardLists() {
//   // Find the active button and get its time range for takeoff and landing
//   const activeButton = document.querySelector('.take-off-timing.activetime');
//   const activeButton2 = document.querySelector('.landing-timing.activetime');
//   let timeRange;
//   let timeRange2;
//   if (activeButton) {
//     timeRange = activeButton.textContent.toLowerCase().trim();
//   }
//   if (activeButton2) {
//     timeRange2 = activeButton2.textContent.toLowerCase().trim();
//   }

//   // Filter the card-list elements based on the time range
//   cardLists.forEach(cardList => {
//     const time = cardList.querySelector('.takeoff').textContent.trim();
//     const time2 = cardList.querySelector('.landing').textContent.trim();
//     const isTakeOffInRange = !activeButton || isTimeInRange(time, timeRange);
//     const isLandingInRange = !activeButton2 || isTimeInRange(time2, timeRange2);
//     if (isTakeOffInRange && isLandingInRange) {
//       cardList.style.display = 'block';
//     } else {
//       cardList.style.display = 'none';
//     }
//   });
// }

// function isTimeInRange(time, timeRange) {
//   const hour = parseInt(time.split(':')[0]);
//   if (timeRange === 'before 6 am') {
//     return hour < 6;
//   } else if (timeRange === '6 am - 12 pm') {
//     return hour >= 6 && hour < 12;
//   } else if (timeRange === '12 pm - 6 pm') {
//     return hour >= 12 && hour < 18;
//   } else if (timeRange === 'after 6 pm') {
//     return hour >= 18;
//   } else {
//     return false;
//   }
// }




//         const buttons = document.querySelectorAll('.take-off-timing');
//         const cardLists = document.querySelectorAll('.isotope-grid .airline_hide');

//         buttons.forEach(button => {
//         button.addEventListener('click', () => {
//         // Get the time range specified by the button
//         const timeRange = button.textContent.toLowerCase().trim();

//         // Filter the card-list elements based on the time range
//         cardLists.forEach(cardList => {
//         const time = cardList.querySelector('.takeoff').textContent.trim();
//         if (isTimeInRange(time, timeRange)) {
//                 cardList.style.display = 'block';
//         } else {
//         cardList.style.display = 'none';
//       }
//     });

//     // Show all the card-list elements if the button is not active
//     if (!button.classList.contains('active-class')) {
//       cardLists.forEach(cardList => {
//         cardList.style.display = 'block';
//       });
//     }

//     // Toggle the active class on the button
//     button.classList.toggle('active-class');
//     button.toggle.style.backgroundColor = "blue";
//     button.toggle.style.color = "white";
//   });
// });

// function isTimeInRange(time, timeRange) {
//   const hour = parseInt(time.split(':')[0]);
//   if (timeRange === 'before 6 am') {
//     return hour < 6;
//   } else if (timeRange === '6 am - 12 pm') {
//     return hour >= 6 && hour < 12;
//   } else if (timeRange === '12 pm - 6 pm') {
//     return hour >= 12 && hour < 18;
//   } else if (timeRange === 'after 6 pm') {
//     return hour >= 18;
//   } else {
//     return false;
//   }
// }

//         const buttons2 = document.querySelectorAll('.landing-timing');
//         const cardLists2 = document.querySelectorAll('.isotope-grid .airline_hide');

//         buttons2.forEach(button => {
//         button.addEventListener('click', () => {
//         // Get the time range specified by the button
//         const timeRange = button.textContent.toLowerCase().trim();

//         // Filter the card-list elements based on the time range
//         cardLists2.forEach(cardList => {
//         const time = cardList.querySelector('.landing').textContent.trim();
//         if (isTimeInRange(time, timeRange)) {
//                 cardList.style.display = 'block';
//         } else {
//         cardList.style.display = 'none';
//       }
//     });

//     // Show all the card-list elements if the button is not active
//     if (!button.classList.contains('active-class')) {
//       cardLists2.forEach(cardList => {
//         cardList.style.display = 'block';
//       });
//     }

//     // Toggle the active class on the button
//     button.classList.toggle('active-class');
//   });
// });

// function isTimeInRange(time, timeRange) {
//   const hour = parseInt(time.split(':')[0]);
//   if (timeRange === 'before 6 am') {
//     return hour < 6;
//   } else if (timeRange === '6 am - 12 pm') {
//     return hour >= 6 && hour < 12;
//   } else if (timeRange === '12 pm - 6 pm') {
//     return hour >= 12 && hour < 18;
//   } else if (timeRange === 'after 6 pm') {
//     return hour >= 18;
//   } else {
//     return false;
//   }
// }

// ////////////////////////////////////////////////////////
// //////////////active or inactive btn////////////////////
// $('.take-off-timing').click(function() {
  		
//   if ($(this).hasClass("price-filter-active")) {
//       $(this).removeClass("price-filter-active");
//     } else {
//       $('.take-off-timing').removeClass("price-filter-active");
//       $(this).addClass("price-filter-active");
//     }
// });

// $('.landing-timing').click(function() {
    
//     if ($(this).hasClass("price-filter-active")) {
//       $(this).removeClass("price-filter-active");
//     } else {
//       $('.landing-timing').removeClass("price-filter-active");
//       $(this).addClass("price-filter-active");
//     }
//   });