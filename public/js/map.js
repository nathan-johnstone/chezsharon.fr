import {LeafletMap, TileLayer, Marker} from 'leaflet';

const map = new LeafletMap('map').setView([42.82147495690546, 2.0209987202000677], 13);

new TileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

const marker = new Marker([42.82147495690546, 2.0209987202000677]).addTo(map);

marker.bindPopup('<h4>Tabac Presse Loto - Chez Sharon</h4><p>16 Grand Rue 11340 ESPEZEL</p><a href="https://www.google.com/maps/dir//Tabac+Presse+Loto+-+Chez+Sharon,+16+Rue+Grand+Rue,+11340+Espezel/@42.8220034,1.9516563,13" target="_blank">Itinéraire</a>').openPopup();
