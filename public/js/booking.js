const result = document.getElementById('result')
const serviceInput = document.getElementById('product_id')
const bedInput = document.getElementById('bed')
const bathInput = document.getElementById('bath')
const kitchenInput = document.getElementById('kitchen')
const livingInput = document.getElementById('living')
const otherInput = document.getElementById('other')
const hallwayInput = document.getElementById('hallway')
const flightOfStairsInput = document.getElementById('flight_of_stairs')
const extraOneInput = document.getElementById('extra_1')
const extraTwoInput = document.getElementById('extra_2')
const extraThreeInput = document.getElementById('extra_3')
const durationInput = document.getElementById('duration_minutes')
const totalPriceInput = document.getElementById('total_price')
const frequencyInput = document.getElementById('frequency')
// const ownEquipmentInput = document.getElementById('own_equipment')
const extrasFields = document.getElementById('extras')
const propertySizeInput = document.getElementById('property_size')
const deepCleanMultiplier = 2.3
const endOfTenancyMultiplier = 3

// Service type
serviceInput.addEventListener('change', event => {
  event.preventDefault()
  calculate()
  toggleExtras(serviceInput.value)
})

// Bedroom
bedInput.addEventListener('change', event => {
  event.preventDefault()
  calculate()
})

// Bathroom
bathInput.addEventListener('change', event => {
  event.preventDefault()
  calculate()
})

// Kitchen
kitchenInput.addEventListener('change', event => {
  event.preventDefault()
  calculate()
})

// Living Room
livingInput.addEventListener('change', event => {
  event.preventDefault()
  calculate()
})

// Other / Study Rooms
otherInput.addEventListener('change', event => {
  event.preventDefault()
  calculate()
})

// Hallways
hallwayInput.addEventListener('change', event => {
  event.preventDefault()
  calculate()
})

// Flight of Stairs
flightOfStairsInput.addEventListener('change', event => {
  event.preventDefault()
  calculate()
})

// Extras
extraOneInput.addEventListener('change', event => {
  event.preventDefault()
  extraOneInput.value == 0 ? extraOneInput.value = 1 : extraOneInput.value = 0
  calculate()
})
extraTwoInput.addEventListener('change', event => {
  event.preventDefault()
  extraTwoInput.value == 0 ? extraTwoInput.value = 1 : extraTwoInput.value = 0
  calculate()
})
extraThreeInput.addEventListener('change', event => {
  event.preventDefault()
  extraThreeInput.value == 0 ? extraThreeInput.value = 1 : extraThreeInput.value = 0
  calculate()
})
// ownEquipmentInput.addEventListener('change', event => {
//   event.preventDefault()
//   ownEquipmentInput.value == 0 ? ownEquipmentInput.value = 1 : ownEquipmentInput.value = 0
//   calculate()
// })

frequencyInput.addEventListener('change', event => {
  event.preventDefault()
  calculate()
})

propertySizeInput.addEventListener('change', event => {
  event.preventDefault()
  calculate()
})

// Toggle extra options, visible only for Standard cleaning
function toggleExtras(id){
  if(id === "1"){
    extrasFields.classList.remove('sr-only')
  } else {
    extrasFields.classList.add('sr-only')
  }
}


// Update the hours in the HTML element
function updateHours(hours, service,){
  console.log('minutes:', minutes)
  let minutes = 0
  if(oldDuration != 0) {
    minutes = oldDuration
  } else {
    minutes = hours * 60
  }
  durationInput.value = minutes
}

function calculatePrice(service, bed, bath, kitchen, living, other, hallway, stairs, extra1, extra2, extra3, roundedHours) {
  let price = 0
  let propertySize = propertySizeInput.value
  // Prices
  let bedPrice = 10
  let bathPrice = 16
  let kitchenPrice = 10
  let livingPrice = 12
  let otherPrice = 10
  let hallwayPrice = 5
  let stairPrice = 5

  // Standard cleaning prices
  if(service == '1'){
    if(propertySize == '1'){
      price = bed * bedPrice + bath * bathPrice + kitchen * kitchenPrice + living * livingPrice + other * otherPrice
    } else if(propertySize == '3'){
      kitchenPrice = 20
      price = bed * bedPrice + bath * bathPrice + kitchen * kitchenPrice + living * livingPrice + other * otherPrice
    } else if(propertySize == '5'){
      kitchenPrice = 20
      price = bed * bedPrice + bath * bathPrice + kitchen * kitchenPrice + living * livingPrice + other * otherPrice + hallway * hallwayPrice + stairs * stairPrice
    }
    // 15% off while customer booking a weekly cleaning.
    if(frequencyInput.value == 'weekly'){
      price = price * 0.85
    }
  }

  //extras if selected adding the price
  if(extra1 == 1){
    if(propertySize == '1'){
      price += 15
    } else if(propertySize == '3'){
      price += 25
    } else if(propertySize == '5'){
      price += 40    }
  }
  // Fridge
  extra2 == 1 ? price += 20 : price
  extra3 == 1 ? price += bed * 3 : price

  // Deep cleaning service price
  if(service == '2'){
    if(propertySize == '1'){
      price = bed * bedPrice + bath * bathPrice + kitchen * kitchenPrice + living * livingPrice + other * otherPrice
    } else if(propertySize == '3'){
      kitchenPrice = 20
      price = bed * bedPrice + bath * bathPrice + kitchen * kitchenPrice + living * livingPrice + other * otherPrice + hallway * hallwayPrice + stairs * stairPrice
    } else if(propertySize == '5'){
      kitchenPrice = 20
      price = bed * bedPrice + bath * bathPrice + kitchen * kitchenPrice + living * livingPrice + other * otherPrice + hallway * hallwayPrice + stairs * stairPrice
    }
    // Final price calculation rounded
    price = price * deepCleanMultiplier
  }

  // EoT cleaning service price
  if(service == '4'){
    if(propertySize == '1'){
      price = bed * bedPrice + bath * bathPrice + kitchen * kitchenPrice + living * livingPrice + other * otherPrice
    } else if(propertySize == '3'){
      kitchenPrice = 20
      price = bed * bedPrice + bath * bathPrice + kitchen * kitchenPrice + living * livingPrice + other * otherPrice + hallway * hallwayPrice + stairs * stairPrice
    } else if(propertySize == '5'){
      kitchenPrice = 20
      price = bed * bedPrice + bath * bathPrice + kitchen * kitchenPrice + living * livingPrice + other * otherPrice + hallway * hallwayPrice + stairs * stairPrice
    }
    // Final price calculation rounded
    price = price * endOfTenancyMultiplier
  }

  // Final price calculation rounded
  if(price < 40){
    price = 40
  }
  console.log('price: ', price)
  result.innerHTML = Math.round(price)
  totalPriceInput.value = Math.round(price)
}



function calculate() {
  let service = serviceInput.value
  let bed = Number(bedInput.value)
  let bath = Number(bathInput.value)
  let kitchen = Number(kitchenInput.value)
  let living = Number(livingInput.value)
  let other = Number(otherInput.value)
  let hallway = Number(hallwayInput.value)
  let stairs = Number(flightOfStairsInput.value)
  let totalRooms = bed + bath + living + other
  let propertySize = Number(propertySizeInput.value)
  let extra1 = extraOneInput.value
  let extra2 = extraTwoInput.value
  let extra3 = extraThreeInput.value
  let window = 0

  if(service == '1'){
    if(propertySize < 4){
      hallway = 0
      stairs = 0
    }
  } else {
    if(propertySize < 3){
      hallway = 0
      stairs = 0
    }
  }

  // If deep cleaning service is selected, fixed 8 hours
  if(service == '2' || service == '4') {
    // Deep cleaning service, fixed 8 hours
    updateHours(8, service)
    calculatePrice(service, bed, bath, kitchen, living, other, hallway, stairs, extra1, extra2, extra3)
  } else {
    // Calculate time based on rooms and extras
    //Adding 0.5 hour after every room
    hours = (totalRooms * 0.5)

    //Adding 0.2 hours after every room
    if(extra1 == 1){
      let totalWindow = totalRooms + kitchen + hallway
      window = Math.round((totalRooms * 0.078) * 10) / 10
      console.log('Window time:', window)
      hours += window
    }
    //Kitchen (1st kitchen 0.5 hrs for 3 or less bed house any other +1 hrs)
    if(kitchen == 1){
      hours += 0.5
    } else if(kitchen > 1) {
      hours += kitchen - 1
    }
    // Adding extra 0.5 hrs to 4 bed or bigger property 1st kitchen
    if(propertySize >= 4 && kitchen != 0){
      hours += 0.5
    }

    //Hallways and Staircase
    if(hallway != 0){
      // Adding 15 min (0.25 hours) after each hallway when the property is 4 bed or bigger
      hours += (hallway * 0.25)
    }
    if(stairs != 0){
      // Adding 15 min (0.25 hours) after each staircase when the property is 4 bed or bigger
      hours += (stairs * 0.25)
    }
    //extras if selected adding 0.5 hours
    extra2 == 1 ? hours += 0.5 : hours
    extra3 == 1 ? hours += 0.5 : hours
    //Min 2 hours rule
    hours <= 2 ? hours = 2 : hours

    // Rounding up to the nearest 0.5
    var reminder = hours % 0.5
    var roundedHours = hours //- reminder
    console.log('hours: ', hours, '... rounded: ', roundedHours, '--- reminder: ', reminder)
    // reminder > 0 ? roundedHours += 0.5 : roundedHours
    console.log('roundedhours after reminder check: ', roundedHours)
    // Updating the HTML element with the calculated hours
    updateHours(roundedHours, service)
    calculatePrice(service, bed, bath, kitchen, living, other, hallway, stairs, extra1, extra2, extra3, roundedHours)
  }
}


// Checking availability
const bookingDateInput = document.getElementById('booking_date')
const startTimeSelect = document.getElementById('start_at_times')

async function fetchAvailability() {
  console.log('fetchAvailability fired', {
    date: bookingDateInput?.value,
    duration: durationInput?.value,
    product: serviceInput?.value
  })
  const date = bookingDateInput.value
  const duration = durationInput.value
  const product = serviceInput.value

  if (!date || !duration || !product) return

  // startTimeSelect.innerHTML = '<option>Loading...</option>'
  startTimeSelect.disabled = true

  const response = await fetch(
  `/availability?date=${date}&duration_minutes=${duration}&product_id=${product}`,
  {
    headers: {
      'Accept': 'application/json'
    }
  }
)

  const slots = await response.json()

  startTimeSelect.innerHTML = ''

  // Sliceing datetime for time only like "07:00"
  oldTimeOnly = oldTime.slice(11, 16)

  if (slots.length === 0) {
    // startTimeSelect.innerHTML += '<option disabled>No availability</option>'
  } else {

    slots.forEach(time => {
      if(oldTimeOnly){
        const isSelected = oldTimeOnly && oldTimeOnly === time;
        startTimeSelect.innerHTML += `
          <p data-time="${time}"
            class="time-slot w-15 border rounded-md border-slate-300 mx-auto px-2 py-1 cursor-pointer
            ${isSelected ? 'bg-slate-700 text-white' : ''}
            hover:bg-slate-500 text-black">
            ${time}
          </p>`;
      } else {
        startTimeSelect.innerHTML += `
          <p data-time="${time}"
             class="time-slot w-15 border rounded-md border-slate-300 mx-auto px-2 py-1 cursor-pointer bg-slate-700 hover:bg-slate-500 text-white">
             ${time}
          </p>`;
      }
    })
  }

  startTimeSelect.disabled = false
}


// Listening for changes and refresh availability
bookingDateInput.addEventListener('change', fetchAvailability)
serviceInput.addEventListener('change', fetchAvailability)

// after duration changes
function updateHours(hours) {
  let minutes = hours * 60
  durationInput.value = minutes
  fetchAvailability()
}

// Listen when user selecting the time
const startAtInput = document.getElementById('start_at');

startTimeSelect.addEventListener('click', function (e) {

  const slot = e.target.closest('.time-slot');
  if (!slot) return;

  const selectedTime = slot.dataset.time;
  const selectedDate = bookingDateInput.value;

  // Set hidden input value
  startAtInput.value = `${selectedDate} ${selectedTime}:00`;

  console.log('Selected time:', selectedTime);

  // Optional: visual selected state
  document.querySelectorAll('.time-slot').forEach(el =>
    el.classList.remove('bg-slate-700', 'text-white')
  );

  slot.classList.add('bg-slate-700', 'text-white');
});


// Auto trigger availability on reload
document.addEventListener('DOMContentLoaded', function () {

    const dateInput = document.getElementById('booking_date');

    if (dateInput.value) {
        fetchAvailability.call(dateInput);
    }
});
