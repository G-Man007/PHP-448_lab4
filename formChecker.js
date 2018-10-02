function isPositive(str) {
  let num = Math.floor(Number(str))
  return (String(num) === str) && (num >= 0)
}


document.querySelector('form').addEventListener('submit', event => {
  let name = document.querySelector('input[name="name"]').value
  let password = document.querySelector('input[name="password"]').value
  let product1 = document.querySelector('input[name="product1"]').value
  let product2 = document.querySelector('input[name="product2"]').value
  let product3 = document.querySelector('input[name="product3"]').value
  let product4 = document.querySelector('input[name="product4"]').value
  let product5 = document.querySelector('input[name="product5"]').value

  // Username Check
  if(!(/\S+@\S+\.\S+/.test(name))) {
    alert("Please insert a valid email")
    event.preventDefault()
  }

  // Password Check
  else if(!password || 0 === password.length) {
    alert("Please insert a valid password.\nPasswords must be at least 1 character.")
    event.preventDefault()
  }

  // Non-Negative Values
  else if(!isPositive(product1) || !isPositive(product2) || !isPositive(product3) || !isPositive(product4) || !isPositive(product5) ) {
    alert("All product quantities must be equal to or greater than 0.")
    event.preventDefault()
  }

  else if(product1==0 && product2==0 && product3==0 && product4==0 && product5==0 ) {
    alert("Please buy at least one product to submit.")
    event.preventDefault()
  }
})

  // Resets Page
document.querySelector(".reset-button").addEventListener('click', reset => {
  location.reload()
})
