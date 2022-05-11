let stateCheckBox = document.querySelectorAll('.state')
var state= [];
stateCheckBox.forEach((checkbox) => { 
  checkbox.addEventListener('change', (event) => {
    if (event.target.checked) {
      state.push(event.target.value)
      console.log(state);
      document.cookie = "state="+state;
    }
  })
})

let cityCheckBox = document.querySelectorAll('.city')
var city= [];
cityCheckBox.forEach((checkbox) => { 
  checkbox.addEventListener('change', (event) => {
    if (event.target.checked) {
      city.push(event.target.value)
      console.log(city);

    }
  })
})

let studyCheckBox = document.querySelectorAll('.studymode')
var study= [];
studyCheckBox.forEach((checkbox) => { 
  checkbox.addEventListener('change', (event) => {
    if (event.target.checked) {
        study.push(event.target.value)
        console.log(study);

    }
  })
})

let institutetypeCheckBox = document.querySelectorAll('.institutetype')
var type= [];
institutetypeCheckBox.forEach((checkbox) => { 
  checkbox.addEventListener('change', (event) => {
    if (event.target.checked) {
        type.push(event.target.value)
        console.log(type);

    }
  })
})