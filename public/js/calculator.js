// Declare buttons and elements
const result = document.getElementById('result');
const minValue = 0
const maxValue = 5
const minHours = 2

//Bedrooms
const bedMinusButton = document.getElementById('bed-minus')
const bedPlusButton = document.getElementById('bed-plus')
const bedField = document.getElementById('bed-field')
//Bathrooms
const bathMinusButton = document.getElementById('bath-minus')
const bathPlusButton = document.getElementById('bath-plus')
const bathField = document.getElementById('bath-field')
//Living areas
const livingMinusButton = document.getElementById('living-minus')
const livingPlusButton = document.getElementById('living-plus')
const livingField = document.getElementById('living-field')
//Other rooms
const otherMinusButton = document.getElementById('otherroom-minus')
const otherPlusButton = document.getElementById('otherroom-plus')
const otherField = document.getElementById('otherroom-field')
//Extras
const extraOne = document.getElementById('extra-1')
const extraTwo = document.getElementById('extra-2')
const extraThree = document.getElementById('extra-3')

// Bedrooms
bedMinusButton.addEventListener('click', event => {
  event.preventDefault()
  const currentBedValue = Number(bedField.innerHTML) || 0
  if(currentBedValue <= minValue){
    currentBedValue = 0
  }
  bedField.innerHTML = currentBedValue - 1
  calculate()
})

bedPlusButton.addEventListener('click', event => {
  event.preventDefault()
  const currentBedValue = Number(bedField.innerHTML) || 0
  bedField.innerHTML = currentBedValue + 1
  calculate()
})

// Bathrooms
bathMinusButton.addEventListener('click', event => {
  event.preventDefault()
  const currentBathValue = Number(bathField.innerHTML) || 0
  if(currentBathValue <= minValue){
    currentBathValue = 0
  }
  bathField.innerHTML = currentBathValue - 1
  calculate()
})

bathPlusButton.addEventListener('click', event => {
  event.preventDefault()
  const currentBathValue = Number(bathField.innerHTML) || 0
  bathField.innerHTML = currentBathValue + 1
  calculate()
})

// Living areas
livingMinusButton.addEventListener('click', event => {
  event.preventDefault()
  const currentLivingValue = Number(livingField.innerHTML) || 0
  if(currentLivingValue <= minValue){
    currentLivingValue = 0
  }
  livingField.innerHTML = currentLivingValue - 1
  calculate()
})

livingPlusButton.addEventListener('click', event => {
  event.preventDefault()
  const currentLivingValue = Number(livingField.innerHTML) || 0
  livingField.innerHTML = currentLivingValue + 1
  calculate()
})

// Other rooms
otherMinusButton.addEventListener('click', event => {
  event.preventDefault()
  const currentOtherValue = Number(otherField.innerHTML) || 0
  if(currentOtherValue <= minValue){
    currentOtherValue = 0
  }
  otherField.innerHTML = currentOtherValue - 1
  calculate()
})

otherPlusButton.addEventListener('click', event => {
  event.preventDefault()
  const currentOtherValue = Number(otherField.innerHTML) || 0
  otherField.innerHTML = currentOtherValue + 1
  calculate()
})
// Extras
extraOne.addEventListener('click', event => {
  extraOne.value == 0 ? extraOne.value = 1 : extraOne.value = 0
  calculate()
})

extraTwo.addEventListener('click', event => {
  extraTwo.value == 0 ? extraTwo.value = 1 : extraTwo.value = 0
  calculate()
})

extraThree.addEventListener('click', event => {
  extraThree.value == 0 ? extraThree.value = 1 : extraThree.value = 0
  calculate()
})

function updateHours(hours){
  result.innerHTML = hours
}

function calculate() {
  let bed = Number(bedField.innerHTML)
  let bath = Number(bathField.innerHTML)
  let living = Number(livingField.innerHTML)
  let other = Number(otherField.innerHTML)
  let totalRooms = bed + bath + living + other
  let extra1 = extraOne.value
  let extra2 = extraTwo.value
  let extra3 = extraThree.value
  let window = 0

  //Calculations
  //Adding 0.5 hour after every room
  hours = totalRooms * 0.5 + 0.5
  //Adding 0.2 hours after every room
  if(extra1 == 1){
    window = Math.round((totalRooms * 0.2) * 10) / 10
    hours += window
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

  console.log(roundedHours)
  console.log('hours', hours)
  updateHours(roundedHours)
}






