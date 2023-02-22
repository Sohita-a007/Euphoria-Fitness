

$(document).ready(function () {
  $("#btnUncheckAll").click(function () {
    $("input[type=checkbox]").each(function (index, checkbox) {
      if (index != 0) {
        checkbox.checked = false;
       
      }
    });
  });
});

$(document).ready(function(){
  $(".mbl-ham").click(function(){
    $(".menu").toggleClass("mbl-menu-active");
  });
});




const testimonialsContainer = document.querySelector('.testimonials-container');
const testimonial = testimonialsContainer.querySelector('.testimonial');
const logo = testimonialsContainer.querySelector('.logo');
const username = testimonialsContainer.querySelector('.username');
const role = testimonialsContainer.querySelector('.role');

const testimonials = [
    {
        "name": "Miyah Myles",
        "position": "Marketing",
        "photo": "https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=707b9c33066bf8808c934c8ab394dff6",
    "text": "Nepal is a stunning country with breathtaking natural beauty and rich cultural heritage. From the majestic Himalayas to the lush forests, and from vibrant cities to peaceful rural areas, Nepal has something to offer for everyone. Whether you are an adventure lover or seeking spiritual enlightenment, Nepal is an ideal destination for an unforgettable holiday experience."
    },
    {
        "name": "June Cha",
        "position": "Software Engineer",
        "photo": "https://randomuser.me/api/portraits/women/44.jpg",
    "text": "Nepal is a stunning country with breathtaking natural beauty and rich cultural heritage. From the majestic Himalayas to the lush forests, and from vibrant cities to peaceful rural areas, Nepal has something to offer for everyone. Whether you are an adventure lover or seeking spiritual enlightenment, Nepal is an ideal destination for an unforgettable holiday experience."
    },
    {
        "name": "Iida Niskanen",
        "position": "Data Entry",
        "photo": "https://randomuser.me/api/portraits/women/68.jpg",
    "text": "Nepal is a stunning country with breathtaking natural beauty and rich cultural heritage. From the majestic Himalayas to the lush forests, and from vibrant cities to peaceful rural areas, Nepal has something to offer for everyone. Whether you are an adventure lover or seeking spiritual enlightenment, Nepal is an ideal destination for an unforgettable holiday experience."
    },
    {
        "name": "Renee Sims",
        "position": "Receptionist",
        "photo": "https://randomuser.me/api/portraits/women/65.jpg",
    "text": "Nepal is a stunning country with breathtaking natural beauty and rich cultural heritage. From the majestic Himalayas to the lush forests, and from vibrant cities to peaceful rural areas, Nepal has something to offer for everyone. Whether you are an adventure lover or seeking spiritual enlightenment, Nepal is an ideal destination for an unforgettable holiday experience."
    },
    {
        "name": "Jonathan Nunfiez",
        "position": "Graphic Designer",
        "photo": "https://randomuser.me/api/portraits/men/43.jpg",
    "text": "Nepal is a stunning country with breathtaking natural beauty and rich cultural heritage. From the majestic Himalayas to the lush forests, and from vibrant cities to peaceful rural areas, Nepal has something to offer for everyone. Whether you are an adventure lover or seeking spiritual enlightenment, Nepal is an ideal destination for an unforgettable holiday experience."
    },
    {
        "name": "Sasha Ho",
        "position": "Accountant",
        "photo": "https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?h=350&auto=compress&cs=tinysrgb",
    "text": "Nepal is a stunning country with breathtaking natural beauty and rich cultural heritage. From the majestic Himalayas to the lush forests, and from vibrant cities to peaceful rural areas, Nepal has something to offer for everyone. Whether you are an adventure lover or seeking spiritual enlightenment, Nepal is an ideal destination for an unforgettable holiday experience."
    },
    {
        "name": "Veeti Seppanen",
        "position": "Director",
        "photo": "https://randomuser.me/api/portraits/men/97.jpg",
    "text": "Nepal is a stunning country with breathtaking natural beauty and rich cultural heritage. From the majestic Himalayas to the lush forests, and from vibrant cities to peaceful rural areas, Nepal has something to offer for everyone. Whether you are an adventure lover or seeking spiritual enlightenment, Nepal is an ideal destination for an unforgettable holiday experience."
    }
];
let idx = 1;


function updateTestimonial() {
  let { name, position, photo, text } = testimonials[idx];
  
  testimonial.innerHTML = text;
  logo.src  = photo;
  username.innerHTML = name;
  role.innerHTML = position;
  
  idx++;
  if(idx > testimonials.length -1 ) {
    idx = 0;
  }
}

setInterval(updateTestimonial, 10000);




const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);


const name = document.getElementById('name');
const email = document.getElementById('email');
const message = document.getElementById('message');
const contactForm = document.getElementById('contact-form');
const errorElement = document.getElementById('error');
const successMsg = document.getElementById('success-msg');
const submitBtn = document.getElementById('submit');
  
const validate = (e) => {
  e.preventDefault();
 
  if (name.value.length < 3) {
    errorElement.innerHTML = 'Your name should be at least 3 characters long.';
    return false;
  } 
  
  if (!(email.value.includes('.') && (email.value.includes('@')))) {
    errorElement.innerHTML = 'Please enter a valid email address.';
    return false;
  } 

  if (!emailIsValid(email.value)) {
    errorElement.innerHTML = 'Please enter a valid email address.';
    return false;
  }

  if (message.value.length < 15) {
    errorElement.innerHTML = 'Please write a longer message.';
    return false;
  }

  errorElement.innerHTML = '';
  successMsg.innerHTML = 'Thank you! I will get back to you as soon as possible.'; 

  e.preventDefault();
  setTimeout(function () {
    successMsg.innerHTML = '';
    document.getElementById('contact-form').reset();
  }, 6000);

  return true;

}

const emailIsValid = email => {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

submitBtn.addEventListener('click', validate);




const toggleForm = () => {
  const container = document.querySelector('.container');
  container.classList.toggle('active');
};