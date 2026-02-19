const result = document.getElementById('result')
const serviceInput = document.getElementById('product_id')
const bedInput = document.getElementById('bed')
const bathInput = document.getElementById('bath')
const kitchenInput = document.getElementById('kitchen')
const livingInput = document.getElementById('living')
const otherInput = document.getElementById('other')
const extraOneInput = document.getElementById('extra_1')
const extraTwoInput = document.getElementById('extra_2')
const extraThreeInput = document.getElementById('extra_3')
const durationInput = document.getElementById('duration_minutes')
const totalPriceInput = document.getElementById('total_price')
const ownEquipmentInput = document.getElementById('own_equipment')

// Service type
serviceInput.addEventListener('change', event => {
  event.preventDefault()
  calculate()
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

// Other Rooms
otherInput.addEventListener('change', event => {
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
ownEquipmentInput.addEventListener('change', event => {
  event.preventDefault()
  ownEquipmentInput.value == 0 ? ownEquipmentInput.value = 1 : ownEquipmentInput.value = 0
  calculate()
})

// Update the hours in the HTML element
function updateHours(hours, service,){
  // if(service == "2") {
  //   result.innerHTML = hours
  // } else {
  //   result.innerHTML = hours + " hours"
  // }
  console.log('minutes:', minutes)
  let minutes = 0
  if(oldDuration != 0) {
    minutes = oldDuration
  } else {
    minutes = hours * 60
  }
  durationInput.value = minutes
}

function calculatePrice(service, bed, bath, kitchen, living, other, extra1, extra2, extra3, roundedHours) {
  let price = 60
  let total = bed + bath + other
  let standardTotal = bed + bath + kitchen + living + other
  let rate = 20

  // Base price based on service type
  if(service == '2') {
    // Deep cleaning service
    // First kitchen and living included after additional charges adding
    if (living > 1) {
      price += (living -1) * 30
    }
    if (kitchen > 1){
      price += (kitchen - 1) * 40
    }
    // Counting the total price
    price += total * 30  
    result.innerHTML = price
    totalPriceInput.value = price

  } else if(service == '8') {
    price = 0
    if(bed <= 1){
      price += roundedHours * rate
    } else if(bed == 2){
      price += Math.round((roundedHours * rate) * 1.1)
      // if (price < 55){ price = 55} 
    } else if(bed == 3){
      price += Math.round((roundedHours * rate) * 1.25)
      // if(price < 75){ price = 75}
    } else if(bed == 4){
      price += Math.round((roundedHours * rate) * 1.29)
      // if(price < 90){ price = 90}
    } else if(bed >= 5){
      price += Math.round((roundedHours * rate) * 1.33)
      // if(price < 120){ price = 120}
    }
    result.innerHTML = price
    totalPriceInput.value = price
  }

  console.log('price: £', price)  
}



function calculate() {
  let service = serviceInput.value
  let bed = Number(bedInput.value)
  let bath = Number(bathInput.value)
  let kitchen = Number(kitchenInput.value)
  let living = Number(livingInput.value)
  let other = Number(otherInput.value)
  let totalRooms = bed + bath + living + other
  let extra1 = extraOneInput.value
  let extra2 = extraTwoInput.value
  let extra3 = extraThreeInput.value
  let window = 0



  // If deep cleaning service is selected, fixed 8 hours
  if(service == '2') {
    // Deep cleaning service, fixed 8 hours
    updateHours(8, service)
    calculatePrice(service, bed, bath, kitchen, living, other, extra1, extra2, extra3)
  } else {
    // Calculate time based on rooms and extras
    //Adding 0.5 hour after every room
    hours = (totalRooms * 0.5) + 0.5
    //Adding 0.2 hours after every room
    if(extra1 == 1){
      window = Math.round((totalRooms * 0.2) * 10) / 10
      hours += window
    }
    //Kitchen (1st included any other +1 hrs)
    if(kitchen > 1) {
      hours += kitchen - 1
    }
    //extras if selected adding 0.5 hours
    extra2 == 1 ? hours += 0.5 : hours
    extra3 == 1 ? hours += 0.5 : hours
    //Min 2 hours rule
    hours <= 2 ? hours = 2 : hours

    // Rounding up to the nearest 0.5
    var reminder = hours % 0.5
    var roundedHours = hours - reminder
    reminder > 0 ? roundedHours += 0.5 : roundedHours 

    // Updating the HTML element with the calculated hours
    updateHours(roundedHours, service)
    calculatePrice(service, bed, bath, kitchen, living, other, extra1, extra2, extra3, roundedHours)
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

  console.log('old time:', oldTime)
  oldTimeOnly = oldTime.slice(11, 16)
  console.log(oldTimeOnly)

  if (slots.length === 0) {
    // startTimeSelect.innerHTML += '<option disabled>No availability</option>'
  } else {
    slots.forEach(time => {
      // startTimeSelect.innerHTML += `<option value="${time}">${time}</option>`
      // startTimeSelect.innerHTML += `<p data-time="${time}" class="time-slot w-15 border rounded-md border-slate-300 mx-auto px-2 py-1 cursor-pointer bg-slate-700 hover:bg-slate-500 text-white">${time}</p>`
      const isSelected = oldTimeOnly && oldTimeOnly === time;
      startTimeSelect.innerHTML += `
        <p data-time="${time}" 
           class="time-slot w-15 border rounded-md border-slate-300 mx-auto px-2 py-1 cursor-pointer 
           ${isSelected ? 'bg-green-600' : 'bg-slate-700'} 
           hover:bg-slate-500 text-white">
           ${time}
        </p>`;
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