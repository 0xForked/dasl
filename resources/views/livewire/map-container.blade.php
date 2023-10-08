<style> body {overflow: hidden;} </style>

<div class="relative h-screen" style="height: calc(100vh - 50px);">
   <div class="z-0 h-full" id="map"></div>

   <livewire:map-watershed-list :watersheds="$watersheds" />

   <livewire:map-description />

   <livewire:edit-watershed />
</div>

@once
<script>
    var centerCoords = null  // handling re-render error
    centerCoords = [1.403175, 124.761776];

    var map = null // handling re-render error
    map = L.map('map', { 
        zoomControl: false,
        minZoom: 8,
        maxBounds: [[0, 0], [10, 180]]
    }).setView(centerCoords, 8);
    
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: ''
    }).addTo(map);
        
    var watershedsData = null // handling re-render error
    watershedsData = @json($watersheds);
    watershedsData.forEach(function(watershed) {
        const marker = L.marker([watershed.latitude, watershed.longitude]).addTo(map);
        marker.bindPopup('Watershed: ' + watershed.name);
    });
</script>
@endonce