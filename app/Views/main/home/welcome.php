<div class = "container">
<div class = "centered row">
	<div class="tab col-3">
	  <button class="tablinks title-head" onclick="openCity(event, 'DairyLivestock')" id="defaultOpen" >Dairy Cattle</button>
	  <button class="tablinks title-head" onclick="openCity(event, 'BeefLivestock')">Beef Cattle</button>
	  <button class="tablinks title-head" onclick="openCity(event, 'Goat')" >Goats</button>	  
	  <button class="tablinks title-head" onclick="openCity(event, 'Sheep')">Sheep</button>
	  <button class="tablinks title-head" onclick="openCity(event, 'Donkey')">Donkeys</button>
	  <button class="tablinks title-head" onclick="openCity(event, 'Carmel')">Carmels</button>
	  <button class="tablinks title-head" onclick="openCity(event, 'Swine')">Swine</button>
	  <button class="tablinks title-head" onclick="openCity(event, 'Pet')">Pets</button>
	</div>
    <div class="tab col-9">
            <!-- The content on the home page goes here   -->
    </div>
				<script>
				function openCity(evt, cityName) {
				  var i, tabcontent, tablinks;
				  tabcontent = document.getElementsByClassName("tabcontent");
				  for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				  }
				  tablinks = document.getElementsByClassName("tablinks");
				  for (i = 0; i < tablinks.length; i++) {
					tablinks[i].className = tablinks[i].className.replace(" active", "");
				  }
				  document.getElementById(cityName).style.display = "block";
				  evt.currentTarget.className += " active";
				}
				// Get the element with id="defaultOpen" and click on it
				document.getElementById("defaultOpen").click();
				</script>			
	    </div>
			<!--  -->
</div>