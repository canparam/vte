$(function() {
	'use strict';
	
	// Leftlet Maps
	var map = L.map('leafletBasic').setView([51.505, -0.09], 13);
	L.tileLayer('../../../../%7bs%7d.tile.openstreetmap.org/%7bz%7d/%7bx%7d/%7by%7d.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	
	// With Popup
	var map = L.map('leafletPopup').setView([40.7128, -74.0060], 13); // New coordinates for the map view
L.tileLayer('../../../../%7bs%7d.tile.openstreetmap.org/%7bz%7d/%7bx%7d/%7by%7d.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
L.marker([40.7128, -74.0060]).addTo(map) // New coordinates for the marker
    .bindPopup('Welcome to Our Store!')
    .openPopup();

	
	// With Circle
	var map = L.map('leafletCircle').setView([51.505, -0.09], 13);
L.tileLayer('../../../../%7bs%7d.tile.openstreetmap.org/%7bz%7d/%7bx%7d/%7by%7d.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
L.circle([51.51, -0.1], {  // New location coordinates
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 500
}).addTo(map);

	
});