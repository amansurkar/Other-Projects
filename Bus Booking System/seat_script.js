const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('count');
const price = document.getElementById('price');
const seatid = document.getElementById('seatid');

var seats_booked = [];


const movieSelect = document.getElementById('movie');
let ticketPrice = +movieSelect.value;

const populateUI = () => {
  var selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));

  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        seat.classList.add('selected');
      }
    });
  }

  const selectedMovieIndex = localStorage.getItem('selectedMovieIndex');
  const selectedMoviePrice = localStorage.getItem('selectedMoviePrice');

  if (selectedMovieIndex !== null) {
    movieSelect.selectedIndex = selectedMovieIndex;
  }

  if (selectedMoviePrice !== null) {
    count.innerText = selectedSeats.length;
    price.innerText = selectedSeats.length * +selectedMoviePrice;
  }
};

populateUI();

selectedMovie = (movieIndex, moviePrice) => {
  localStorage.setItem('selectedMovieIndex', movieIndex);
  localStorage.setItem('selectedMoviePrice', moviePrice);
};

const updateSelectedSeatsCount = () => {
  const selectedSeats = document.querySelectorAll('.row .selected');

  const seatsIndex = [...selectedSeats].map(seat => [...seats].indexOf(seat));

  localStorage.setItem('selectedSeats', JSON.stringify(seatsIndex));

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
  price.innerText = selectedSeatsCount * ticketPrice;
};

// Seat select event
container.addEventListener('click', e => {
  if (
    e.target.classList.contains('seat') &&
    !e.target.classList.contains('occupied')
  ) {
    e.target.classList.toggle('selected');

    updateSelectedSeatsCount();
  }
});

// Movie select event
movieSelect.addEventListener('change', e => {
  ticketPrice = +e.target.value;
  selectedMovie(e.target.selectedIndex, e.target.value);

  updateSelectedSeatsCount();
});


container.addEventListener('click', e => {
  if(e.target.classList.contains('seat') && !e.target.classList.contains('occupied'))
  { 
    updateSelectedSeatsid();
  }
}
);


const updateSelectedSeatsid = () => {
  const selectedSeats = document.querySelectorAll('.row .selected');

  const seatsIndex = [...selectedSeats].map(seat => [...seats].indexOf(seat));

  seatid.innerText = seatsIndex;

};

const savetodatabase = () =>
{
  $.ajax({ 
    type:"POST",
    url: "todatabase.php",
    data: {'finalstr' : finalstr, 'finalfare' : finalfare, 'moviestr' : moviestr}
  });
}


const finalseats =[];
const totfare = [];
const finalmovie = [];

const saveseats = () =>
{
  const selectedSeats1 = document.querySelectorAll('.row .selected');
  const seatsIndex1 = [...selectedSeats1].map(seat => [...seats].indexOf(seat));
  localStorage.setItem('selectedSeats1', JSON.stringify(seatsIndex1));
  const str = localStorage.getItem('selectedSeats1');


  const movieSelect = document.getElementById('movie');
  let ticketPrice = +movieSelect.value;

  const selectedSeatsCount = selectedSeats1.length;

  const fare = selectedSeatsCount* +ticketPrice;

  const movie = movieSelect.options[movieSelect.selectedIndex].text;

  finalmovie.push(movie);
  moviestr = finalmovie.toString();

  finalseats.push(str);
  finalstr = finalseats.toString();
  totfare.push(fare);
  finalfare = totfare.toString();
  savetodatabase();
  finalseats.pop(str);
  totfare.pop(fare);
  finalmovie.pop(moviestr);


  window.location='http://localhost/login/details.php';
};

