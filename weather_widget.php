<div id="m-booked-bl-simple-6171">
	<a href="//www.booked.net/weather/jakarta-18977" class="booked-wzs-160-110" style="background-color:#e85f15;">
		<div class="booked-wzs-160-data wrz-06">
			<div class="booked-wzs-160-right">
				<div class="booked-wzs-day-deck">
					<div class="booked-wzs-day-val">
						<div class="booked-wzs-day-number">
							<span class="plus">+</span>29
						</div>
						<div class="booked-wzs-day-dergee">
							<div class="booked-wzs-day-dergee-val">&deg;</div>
							<div class="booked-wzs-day-dergee-name">C</div>
						</div>
					</div>
					<div class="booked-wzs-day">
						<div class="booked-wzs-day-d">
							<span class="plus">+</span>29&deg;
						</div>
						<div class="booked-wzs-day-n">
							<span class="plus">+</span>28&deg;
						</div>
					</div>
				</div>
				<div class="booked-wzs-160-city">Jakarta</div>
				<div class="booked-wzs-160-date">Monday, 06</div>
			</div> </div> <div class="booked-wzs-center"> 
			<span class="booked-wzs-bottom-l">See 7-Day Forecast</span>
		</div>
	</a>
</div>

<script type="text/javascript">
	var css_file=document.createElement("link");
	css_file.setAttribute("rel","stylesheet");
	css_file.setAttribute("type","text/css");
	css_file.setAttribute("href",'//s.bookcdn.com/css/w/booked-wzs-widget-160.css?v=0.0.1');
	document.getElementsByTagName("head")[0].appendChild(css_file);
	function setWidgetData(data) { 
		if(typeof(data) != 'undefined' && data.results.length > 0) { 
			for(var i = 0; i < data.results.length; ++i) { 
				var objMainBlock = document.getElementById('m-booked-bl-simple-6171'); 
				if(objMainBlock !== null) {
					var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); 
					objMainBlock.innerHTML = data.results[i].html_code; 
					if(copyBlock !== null) 
						objMainBlock.appendChild(copyBlock); 
				} 
			}
		} else { 
			alert('data=undefined||data.results is empty'); 
		} 
	} 
</script> 

<script type="text/javascript" charset="UTF-8" 
	src="http://widgets.booked.net/weather/info?action=get_weather_info&ver=4&cityID=18977&type=1&scode=2&ltid=3458&domid=w209&cmetric=1&wlangID=1&color=e85f15&wwidth=250&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0">
</script>