@extends('layout.user')

@section('contents')
<style>
    .background-overlay {
        background-image: url('https://mir-s3-cdn-cf.behance.net/project_modules/fs/7bd6b431540463.565526b7855bf.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: -1;
    }

    .background-overlay::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }
</style>

<div class="background-overlay"></div>

<div class="content-container">
    <form action="{{ route('reportCrime') }}" method="post">
        @csrf
        <div class="flex justify-center items-center">
            <div class="w-full lg:w-[50%] h-auto bg-[#f04646] p-8 mb-32">
                <h1 class="font-bold text-xl text-red-700 mt-1 mb-5 text-center">Create a Report</h1>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-7 mb-8">
                    <div class="lg:col-span-1">
                        <div class="mb-6">
                            <label for="report_by" class="block text-sm font-bold leading-6 text-blue-600">Alerter
                                Name</label>
                            <input type="text" name="report_by" id="report_by" autocomplete="given-name"
                                value="{{ auth()->user()->username }}"
                                class="block w-full rounded-md border border-gray-300 bg-blue-100 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6 mt-2"
                                readonly>
                        </div>
                        <div class="mb-6">
                            <label for="crime_type" class="block text-sm font-bold leading-6 text-blue-600">Alert
                                Type</label>
                            <select name="crime_type" id="crime_type"
                                class="block w-full rounded-md border border-gray-300 bg-blue-100 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6 mt-2">
                                <option disabled selected>Crime</option>
                                <option value="Cyber Fraud">Cyber Fraud</option>
                                <option value="Identity Theft">Identity Theft</option>
                                <option value="Vandalism">Vandalism</option>
                                <option value="Shoplifting">Shoplifting</option>
                                <option value="Embezzlement">Embezzlement</option>
                                <option value="Drug Possession">Drug Possession</option>
                                <option value="Drunk Driving">Drunk Driving</option>
                                <option value="Domestic Violence">Domestic Violence</option>
                                <option value="Robbery">Robbery</option>
                                <option value="Art Theft">Art Theft</option>
                                <option value="other">Other (Specify)</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="date" class="block text-sm font-bold leading-6 text-blue-600">Report
                                Date</label>
                            <input type="date" name="date" id="date"
                                class="block w-full rounded-md border border-gray-300 bg-blue-100 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6 mt-2">
                        </div>
                        <div class="mb-6">
                            <label for="description"
                                class="block text-sm font-bold leading-6 text-blue-600">Description</label>
                            <textarea name="description" id="description" autocomplete="given-name"
                                class="block w-full rounded-md border border-gray-300 bg-blue-100 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6 mt-2"></textarea>
                        </div>
                    </div>
                    <div class="lg:col-span-1">
                        <div class="mb-6">
                            <label for="address" class="block text-sm font-bold leading-6 text-blue-600">Incident
                                Location</label>
                            <select name="address" id="address"
                                class="block w-full rounded-md border border-gray-300 bg-blue-100 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6 mt-2 mb-2">
                                <option disabled selected>Select Location</option>
                                <option value="Phnom Penh">Phnom Penh</option>
                                <option value="Banteay Meanchey">Banteay Meanchey</option>
                                <option value="Battambang">Battambang</option>
                                <option value="Kampong Cham">Kampong Cham</option>
                                <option value="Kampong Chhnang">Kampong Chhnang</option>
                                <option value="Kampong Speu">Kampong Speu</option>
                                <option value="Kampong Thom">Kampong Thom</option>
                                <option value="Kampot">Kampot</option>
                                <option value="Kandal">Kandal</option>
                                <option value="Kep">Kep</option>
                                <option value="Koh Kong">Koh Kong</option>
                                <option value="Kratié">Kratié</option>
                                <option value="Mondulkiri">Mondulkiri</option>
                                <option value="Oddar Meanchey">Oddar Meanchey</option>
                                <option value="Pailin">Pailin</option>
                                <option value="Preah Sihanouk">Preah Sihanouk</option>
                                <option value="Preah Vihear">Preah Vihear</option>
                                <option value="Prey Veng">Prey Veng</option>
                                <option value="Pursat">Pursat</option>
                                <option value="Ratanakiri">Ratanakiri</option>
                                <option value="Siem Reap">Siem Reap</option>
                                <option value="Stung Treng">Stung Treng</option>
                                <option value="Svay Rieng">Svay Rieng</option>
                                <option value="Takéo">Takéo</option>
                                <option value="Tboung Khmum">Tboung Khmum</option>
                            </select>
                            <div id="reportMap" style="height: 300px;"></div>
                            <div class="grid grid-cols-2 gap-x-4 mt-2">
                                <div>
                                    <label for="latitude"
                                        class="block text-sm font-bold leading-6 text-white">Latitude</label>
                                    <input type="number" step="any" name="latitude" id="latitude"
                                        class="block w-full rounded-md border border-gray-300 bg-blue-100 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6 mt-1"
                                        readonly>
                                </div>
                                <div>
                                    <label for="longitude"
                                        class="block text-sm font-bold leading-6 text-white">Longitude</label>
                                    <input type="number" step="any" name="longitude" id="longitude"
                                        class="block w-full rounded-md border border-gray-300 bg-blue-100 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6 mt-1"
                                        readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"
    integrity="sha512-m0RXrECa1JDw+jWVTZDxjMY1C8zTAyoq3AApdLZ5JwzRsW5LdU9bhPwR3+eHTEvtiRimH73b3Ib1/7GxpMjv4Q=="
    crossorigin=""></script>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const map = L.map('reportMap').setView([12.5657, 104.991], 7); // Centered on Cambodia

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        let marker;

        map.on('click', function (e) {
            const lat = e.latlng.lat.toFixed(6); // Increase precision
            const lng = e.latlng.lng.toFixed(6); // Increase precision

            if (marker) {
                marker.setLatLng(e.latlng);
            } else {
                marker = L.marker(e.latlng).addTo(map);
            }

            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lng;
            console.log(`Lat: ${lat}, Lng: ${lng}`);
        });

        const locationSelect = document.getElementById('address');

        locationSelect.addEventListener('change', function () {
            let lat, lng;

            switch (this.value) {
                case 'Phnom Penh':
                    lat = 11.5564;
                    lng = 104.9282;
                    break;
                case 'Banteay Meanchey':
                    lat = 13.8300;
                    lng = 102.9886;
                    break;
                case 'Battambang':
                    lat = 13.0957;
                    lng = 103.2022;
                    break;
                case 'Kampong Cham':
                    lat = 12.0;
                    lng = 105.46;
                    break;
                case 'Kampong Chhnang':
                    lat = 12.25;
                    lng = 104.66;
                    break;
                case 'Kampong Speu':
                    lat = 11.45;
                    lng = 104.52;
                    break;
                case 'Kampong Thom':
                    lat = 12.71;
                    lng = 104.89;
                    break;
                case 'Kampot':
                    lat = 10.61;
                    lng = 104.18;
                    break;
                case 'Kandal':
                    lat = 11.33;
                    lng = 105.0;
                    break;
                case 'Kep':
                    lat = 10.48;
                    lng = 104.32;
                    break;
                case 'Koh Kong':
                    lat = 11.61;
                    lng = 103.00;
                    break;
                case 'Kratié':
                    lat = 12.5;
                    lng = 106.0;
                    break;
                case 'Mondulkiri':
                    lat = 12.49;
                    lng = 107.2;
                    break;
                case 'Oddar Meanchey':
                    lat = 14.16;
                    lng = 103.67;
                    break;
                case 'Pailin':
                    lat = 12.9;
                    lng = 102.62;
                    break;
                case 'Preah Sihanouk':
                    lat = 10.63;
                    lng = 103.5;
                    break;
                case 'Preah Vihear':
                    lat = 13.78;
                    lng = 104.98;
                    break;
                case 'Prey Veng':
                    lat = 11.49;
                    lng = 105.32;
                    break;
                case 'Pursat':
                    lat = 12.54;
                    lng = 103.92;
                    break;
                case 'Ratanakiri':
                    lat = 13.75;
                    lng = 106.99;
                    break;
                case 'Siem Reap':
                    lat = 13.36;
                    lng = 103.85;
                    break;
                case 'Stung Treng':
                    lat = 13.57;
                    lng = 105.97;
                    break;
                case 'Svay Rieng':
                    lat = 11.08;
                    lng = 105.8;
                    break;
                case 'Takéo':
                    lat = 10.99;
                    lng = 104.79;
                    break;
                case 'Tboung Khmum':
                    lat = 12.12;
                    lng = 105.40;
                    break;
                default:
                    lat = 12.5657;
                    lng = 104.991;
            }

            map.setView([lat, lng], 12);
            if (marker) {
                marker.setLatLng([lat, lng]);
            } else {
                marker = L.marker([lat, lng]).addTo(map);
            }
            document.getElementById('latitude').value = lat.toFixed(6);
            document.getElementById('longitude').value = lng.toFixed(6);
            console.log(`Location selected: ${this.value}, Lat: ${lat}, Lng: ${lng}`);
        });
    });
</script>
@endsection