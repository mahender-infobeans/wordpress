<?php
// create custom plugin settings menu
add_action('admin_menu', 'mapIntegrate');

function mapIntegrate() {

	//create new top-level menu
	add_menu_page('My Map Settings', 'Map Settings', 'administrator', __FILE__, 'mapSettings' , '/wp-content/themes/uitheme/assets/images/iconMap.ico' );

	//call register settings function
	add_action( 'admin_init', 'mapIntegration' );
}


function mapIntegration() {
	//register our settings
	register_setting( 'my-cool-plugin-settings-group', 'mapkey' );
	register_setting( 'my-cool-plugin-settings-group', 'autocompleteAPIKey' );
	register_setting( 'my-cool-plugin-settings-group', 'lat' );
	register_setting( 'my-cool-plugin-settings-group', 'langitude' );
}

function mapSettings() {
	?>

	<div class="wrap">
		<h1>Your Plugin Name</h1>

		<form method="post" action="options.php">
			<?php settings_fields( 'my-cool-plugin-settings-group' ); ?>
			<?php do_settings_sections( 'my-cool-plugin-settings-group' ); ?>
			<table class="form-table">
				<tr valign="top">
					<th scope="row">Map Key: </th>
					<td><input type="text" name="mapkey" value="<?php echo esc_attr( get_option('mapkey') ); ?>" /></td>
				</tr>

				
				<tr valign="top">
					<th scope="row">Latitude</th>
					<td><input type="text" id="latitude" name="lat" value="<?php echo esc_attr( get_option('lat') ); ?>" /></td>
				</tr>
				<tr valign="top">
					<th scope="row">Longitude</th>
					<td><input type="text" id="lang" name="langitude" value="<?php echo esc_attr( get_option('langitude') ); ?>" /></td>
				</tr>
				<tr valign="top">
					<th colspan="2">
						<h3>or Search on the map </h3>
					</th>
				</tr>
			</table>
			<!-- map integration start  -->


			<script>
				
				function initMap() {
					var lat1 = "<?php echo esc_attr( get_option('lat') ); ?>";
					var lang1 = "<?php echo esc_attr( get_option('langitude') ); ?>";
					if( lat1 != "" && !isNaN( parseInt( lat1 ) ) && lang1 != "" && !isNaN( parseInt( lang1 ) ) ){
						
						var mapcenter = {lat: parseFloat( lat1 ),lng: parseFloat( lang1 )};
					}else{

						var mapcenter = {lat: 18.5627560, lng: 73.9193570};
					}
					
					var map = new google.maps.Map(document.getElementById('map'), {
						center: mapcenter,
						zoom: 13
					});
					var card = document.getElementById('pac-card');
					var input = document.getElementById('pac-input');
        // var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
        	map: map,
        	anchorPoint: new google.maps.Point(0, -29),
        	position: mapcenter
        });

        autocomplete.addListener('place_changed', function() {
        	infowindow.close();
        	marker.setVisible(false);
        	var place = autocomplete.getPlace();

        	if (!place.geometry) {
        		
        		window.alert("No details available for input: '" + place.name + "'");
        		return;
        	}
          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
          	
          	document.getElementById("latitude").value = place.geometry.location.lat();
          	document.getElementById("lang").value = place.geometry.location.lng();
          	map.fitBounds(place.geometry.viewport);
          } else {
          	
          	document.getElementById("latitude").value = place.geometry.location.lat();
          	document.getElementById("lang").value = place.geometry.location.lng();

          	map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
        }
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);

        var address = '';
        if (place.address_components) {
        	address = [
        	(place.address_components[0] && place.address_components[0].short_name || ''),
        	(place.address_components[1] && place.address_components[1].short_name || ''),
        	(place.address_components[2] && place.address_components[2].short_name || '')
        	].join(' ');
        }

        infowindowContent.children['place-icon'].src = place.icon;
        infowindowContent.children['place-name'].textContent = place.name;
        infowindowContent.children['place-address'].textContent = address;
        infowindow.open(map, marker);
    });

        
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo (esc_attr( get_option('mapkey') )=='' ? 'AIzaSyARm2q-DED99814mNQxGyL_CwvmQ-vHxtI' : get_option('mapkey')); ?>&libraries=places&callback=initMap"
	async defer></script>


	<div class="pac-card" id="pac-card">
		<div>
			<div id="title">
				Contact Us Location:
			</div>

		</div>
		<div id="pac-container">
			<input id="pac-input" type="text"
			placeholder="Enter a location" name="autocompleteAPIKey" value="<?php echo esc_attr( get_option('autocompleteAPIKey') ); ?>">
		</div>
	</div>
	<div id="map"></div>
	<div id="infowindow-content">
		<img src="" width="16" height="16" id="place-icon">
		<span id="place-name"  class="title"></span><br>
		<span id="place-address"></span>
	</div>
	<!-- map integration ends here -->
	<?php submit_button(); ?>

</form>
</div>

<?php } ?>
<style type="text/css">
	#map {
		height: 350px;
		width: 75%;
	}
	/* Optional: Makes the sample page fill the window. */
	
	#description {
		font-family: Roboto;
		font-size: 15px;
		font-weight: 300;
	}

	#infowindow-content .title {
		font-weight: bold;
	}

	#infowindow-content {
		display: none;
	}

	#map #infowindow-content {
		display: inline;
	}

	.pac-card {
		margin: 10px 10px 0 0;
		border-radius: 2px 0 0 2px;
		box-sizing: border-box;
		-moz-box-sizing: border-box;
		outline: none;
		box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
		background-color: #fff;
		font-family: Roboto;
	}

	#pac-container {
		padding-bottom: 12px;
		margin-right: 12px;
	}

	.pac-controls {
		display: inline-block;
		padding: 5px 11px;
	}

	.pac-controls label {
		font-family: Roboto;
		font-size: 13px;
		font-weight: 300;
	}

	#pac-input {
		background-color: #fff;
		font-family: Roboto;
		font-size: 15px;
		font-weight: 300;
		margin-left: 12px;
		padding: 0 11px 0 13px;
		text-overflow: ellipsis;
		width: 400px;
	}

	#pac-input:focus {
		border-color: #4d90fe;
	}

	#title {
		color: #fff;
		background-color: #4d90fe;
		font-size: 25px;
		font-weight: 500;
		padding: 6px 12px;
	}
</style>