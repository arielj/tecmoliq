document.addEventListener('DOMContentLoaded', function() {
  if (location.search.match(/lang=en/))
    document.body.classList.add('english');

  bindPumps();
  initMap();
})

function initMap() {
  this.mymap = L.map('map').setView([-34.71714803840951, -58.30205535624998], 14);
  this.startZoom = 9;

  L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
      subdomains: ['a','b','c']
  }).addTo(this.mymap)

  this.marker = L.marker([-34.71714803840951, -58.30205535624998]).addTo(this.mymap);

  this.mymap.flyTo(marker.getLatLng(), 14);
}


function bindPumps() {
  this.wrapper = document.getElementById('pumps');
  this.pumps = this.wrapper.querySelectorAll('.product');

  this.showPump = id => {
    this.pumps.forEach( el => {
      el.classList.remove('current');
    })

    document.getElementById(id).classList.add('current');
  }

  this.wrapper.querySelectorAll('.nav button').forEach( btn => {
    btn.addEventListener('click', e => {
      e.preventDefault();
      this.showPump(e.target.dataset.id);
    })
  })
}