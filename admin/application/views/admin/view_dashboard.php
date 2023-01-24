<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
<script src="https://openlayers.org/en/v4.6.5/build/ol.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.4.4/proj4.js"></script>

<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">
			<!-- Page-Title -->
			<div class="row">
				<div class="col-sm-12">
					<h4 class="page-title">Dashboard</h4>
					<p class="text-muted page-title-alt">Welcome to Admin Pannel!</p>
				</div>
			</div>

			<div id="map" class="map" style="height: 768px;"></div>
		</div> <!-- container -->
	</div> <!-- content -->

	<script>

		function showMap() {
			var lat = Number("<?php echo $lat; ?>");
			var lng = Number("<?php echo $lng; ?>");
			var locations = <?php echo $locations; ?>

			var lamarin = ol.proj.fromLonLat([lng, lat]);
			var view = new ol.View({
				center: lamarin,
				zoom: 5 // 5
			});

			var vectorSource = new ol.source.Vector({});
			var places = [];
			
			for (var i = 0; i < locations.length; i++) {
				places.push([
					Number(locations[i].lng),
					Number(locations[i].lat),
					'https://openlayers.org/en/v4.6.5/examples/data/dot.png',
					'#4271ff'
				]);
			}
			places.push([
				Number(lng),
				Number(lat),
				'http://maps.google.com/mapfiles/ms/micons/red.png',
				'#ff59A8'
			]);

			var features = [];
			for (var i = 0; i < places.length; i++) {
				var iconFeature = new ol.Feature({
					geometry: new ol.geom.Point(ol.proj.transform([places[i][0], places[i][1]], 'EPSG:4326', 'EPSG:3857')),
				});

				var iconStyle = new ol.style.Style({
					image: new ol.style.Icon({
						anchor: [0.5, 0.5],
						anchorXUnits: 'fraction',
						anchorYUnits: 'fraction',
						src: places[i][2],
						color: places[i][3],
						crossOrigin: 'anonymous',
					})
				});
				iconFeature.setStyle(iconStyle);
				vectorSource.addFeature(iconFeature);
			}

			var vectorLayer = new ol.layer.Vector({
				source: vectorSource,
				updateWhileAnimating: true,
				updateWhileInteracting: true,
			});

			var map = new ol.Map({
				target: 'map',
				view: view,
				layers: [
					new ol.layer.Tile({
						preload: 3,
						source: new ol.source.OSM(),
					}),
					vectorLayer,
				],
				loadTilesWhileAnimating: true,
			});
		}

		showMap();
	</script>
</div>
