var __markers = [];
var __infoWindows = [];
var __map = null;
var __chart = null;
var __chart2 = null;
var __timeCounter = 60;
function getIcon(aqi,hidden){
	var icon_na = '/images/place_na.png';
	var icon_grey = '/images/place_grey.png';
	var icon_green = '/images/place_green.png';
	var icon_yellow = '/images/place_yellow.png';
	var icon_orange = '/images/place_orange.png';
	var icon_red = '/images/place_red.png';
	var icon_purple = '/images/place_purple.png';
	var icon_brown = '/images/place_brown.png';

	var icon_tech = '/images/place_tech.png';
	var icon = ""
	if(hidden == 1){
		return icon_tech;
	}


	if(aqi > 300)
		icon = icon_brown;
	else if(aqi > 200)
		icon = icon_purple;
	else if(aqi > 150)
		icon = icon_red;
	else if(aqi > 100)
		icon =  icon_orange;
	else if(aqi > 50)
		icon =  icon_yellow;
	else if(aqi > 0)
		icon =  icon_green;
	else{
		icon =  icon_na;
		return `<img src="${icon}"> <label class="aqiLabel">--</label>`
	}
	
	let result = `<img src="${icon}"> <label class="aqiLabel">${aqi}</label>`

	return result	
}
function initMap(zoom,lat,long) {

	__map = L.map('map',{
		//dragging:false,
		maxZoom: 13,
		minZoom: 10,
		
	}).setView([21.0278,105.8002], 12);
      var gl = L.mapboxGL({
		accessToken: 'not-needed',
		style: 'https://api.maptiler.com/maps/basic/style.json?key=zgSTvD5hP9juHxgp3nT7',
	  }).addTo(__map);
	  

	setInterval(()=>{

		var center = __map.getCenter()

		console.log(center)

		if(center.lat <= 16 || center.lat >= 24 || center.lng <= 95 || center.lng > 109){
			__map.setView([21.0278,105.8002], 12);
		}
	},2000)

	$.ajax({
		url : '/api/site',
		success: function(response){
			$.each(response, function(i) {
				var icon = L.divIcon({
					className: 'markerIcon',
					iconAnchor: [20,32],
					html: getIcon(response[i].aqi,response[i].hidden) ,
					iconSize:     [40, 32], // size of the icon
				});
				
				var htmlInfo = `
					<div class="sitePopup">
					<span class="address1">${response[i].name}</span> <br/>
					<span class="address2">Địa chỉ: ${response[i].address}</span> <br/> <br/>
					<table style="width:100%">
						<tr>
							<td/><span class="popupAQIText">AQI ${response[i].aqi}</span></td>
							<td/><span class="popupAQIText">${response[i].aqiText}</span></td>
						</tr>
						<tr>
							<td>
								<i class="fa fa-tint fa-2x" aria-hidden="true" style="float:left;margin-right:6px;"></i>
								<span style="font-size:18px">${response[i].temp} °C</span></td>
							<td>
								<i class="fa fa-thermometer-empty fa-2x" aria-hidden="true" style="float:left;margin-right:6px;"></i>
								<span style="font-size:18px;line-height:24px;">${response[i].humid} %</span>
							</td>
						</tr>
					</table>
					<br/>
					<a href="?site_id=${response[i].id}">Xem chi tiết</a>
					</div>
				`

				L.marker([response[i].latitude, response[i].longtitude],{icon: icon}).addTo(__map).bindPopup(htmlInfo)
			});
		}
	})
}
function zoomSiteChart(length = 60) {
	//__chart.zoomToIndexes(__chart.dataProvider.length - 1, __chart.dataProvider.length - 1);
}
function zoomIndicatorChart(length = 60) {
	//__chart2.zoomToIndexes(__chart2.dataProvider.length - 1, __chart2.dataProvider.length - 1);
}
function loadColors(channel_id){
	$.ajax({
		url : "/api/colors/"+channel_id,
		success:function(response){
			$('#warningLevel').html(response);
		}
	})
}
function updateAQIColor(){
	var value = parseInt($('#dailyAQISpan').attr('data-aqi'));
	$('#dailyAQISpan').css('color','#222');
	if(value > 300){
		$('#dailyAQISpan').css('background-color','#7E0023');
	}
	else if(value > 200){
		$('#dailyAQISpan').css('background-color','#8F3F97');
	}
	else if(value > 150){
		$('#dailyAQISpan').css('background-color','#FF0000');
	}
	else if(value > 100){
		$('#dailyAQISpan').css('background-color','#FF7E00');
	}
	else if(value > 50){
		$('#dailyAQISpan').css('background-color','#FFFF00');
	}
	else if(value >= 0){
		$('#dailyAQISpan').css('background-color','#00E400');
	}
	else{
		$('#dailyAQISpan').css('background-color','#efefef');
	}
}
function load(id){
	$('#loading').show();
	$.ajax({
		url : "/api/view/"+id,
		success:function(response){
			$('#loading').hide();
			$('#site-name').text(response.site.name);
			$('#site-details').html(response.siteDetail);
			$('#table-data').html(response.tableData);
			$('#table-weather').html(response.tableWeatherData);
			if(response.aqi >= 0){
				$('#aqi').html("AQI " + response.aqi);
				$('#aqi_time').html(response.aqi_time);
			}
			else
				$('#aqi').html("AQI <small>Không có số liệu</small>");
			$('#legend1').empty();
			$('#aqi').attr("data-aqi",response.aqi);
			$('#aqi_text').text(response.aqiText);

			updateAQIColor();
			if(__chart){
				__chart.removeLegend();
			}
			__chart = AmCharts.makeChart("chartdiv", {
				"type": "serial",
				"theme": "light",
				"marginRight": 40,
				"marginLeft": 50,
				"autoMarginOffset": 20,
				"mouseWheelZoomEnabled":true,
				"dataDateFormat": "YYYY-MM-DD JJ:NN:SS",
				"valueAxes": [{
						"id": "v1",
						"axisAlpha": 0,
						"position": "left",
						"ignoreAxisWidth":true
				}],
				"balloon": {
						"borderThickness": 1,
						"shadowAlpha": 0,
						"fontSize":11,
						"textAlign":"left",
				},
				"graphs": response.graphs,
				"chartCursor": {
						"pan": true,
						"valueLineEnabled": true,
						"valueLineBalloonEnabled": true,
						"cursorAlpha":1,
						"cursorColor":"#258cbb",
						"limitToGraph":"g1",
						"valueLineAlpha":0.2,
						"valueZoomable":true
				},
				"categoryField": "time",
				"categoryAxis": {
						"minPeriod": "mm",
						"parseDates": true,
						'format':'JJ:NN'
				},
				"legend": {
			    	"useGraphSettings": true,
			    	"rollOverColor":"#aaa",
			    	"maxColumns":4,
			    	"spacing":0,
			    	"verticalGap":4,
			    	"divId":"legend1",
			    	"marginLeft":0,
			    	"marginRight":0,
				},
				"dataProvider": response.data
			});
			__chart.addListener("rendered", zoomSiteChart);
			zoomSiteChart();

			loadIndicatorAqi(response.indicators);
		}
	})

	loadHourlyAQI('hourlyAQIChart',id);
	if($('#link-stats').length > 0){
		$('#link-stats').attr('href','/thong-ke-aqi?site_id='+id);
	}
}
function loadByIndicator(id){
	$.ajax({
			url : "/api/indicator/"+id,
			success:function(response){
				__chart2 = AmCharts.makeChart("chartdiv2", {
					"type": "serial",
					"theme": "light",
					"marginRight": 40,
					"marginLeft": 40,
					"autoMarginOffset": 20,
					"mouseWheelZoomEnabled":true,
					"valueAxes": [{
							"id": "v1",
							"axisAlpha": 0,
							"position": "left",
							"ignoreAxisWidth":true
					}],
					"balloon": {
							"borderThickness": 1,
							"shadowAlpha": 0
					},
					"graphs": response.graphs,
					"chartCursor": {
							"pan": true,
							"valueLineEnabled": true,
							"valueLineBalloonEnabled": true,
							"cursorAlpha":1,
							"cursorColor":"#258cbb",
							"limitToGraph":"g1",
							"valueLineAlpha":0.2,
							"valueZoomable":true
					},
					"categoryField": "time",
					"categoryAxis": {
							"minPeriod": "mm",
							"parseDates": true,
					},
					
					"dataProvider": response.data
				});

				__chart2.addListener("rendered", zoomIndicatorChart);

				zoomIndicatorChart();
			}
	})
}
function closeAllInfoWindows() {
	for (var i=0;i<__infoWindows.length;i++) {
		__infoWindows[i].close();
	}
}

function loadHourlyAQI(chartDiv,id){
	if($('#'+chartDiv).length == 0) return;
	
	$.ajax({
		url : "/api/hourlyaqi/"+id,
		success:function(response){
			var chart = AmCharts.makeChart(chartDiv, {
				  "type": "serial",
				  "theme": "light",
				  "marginRight": 10,
				  "dataProvider": response,
				  "startDuration": 1,
				  "graphs": [{
				    "balloonText": "<b>[[time]]:00 - </b> AQI [[value]]",
				    "fillColorsField": "color",
				    "fillAlphas": 0.9,
				    "lineAlpha": 0.2,
				    "type": "column",
				    "valueField": "value"
				  }],
				  "chartCursor": {
				    "categoryBalloonEnabled": false,
				    "cursorAlpha": 0,
				    "zoomable": false
				  },
				  "categoryField": "short_label",
				  "categoryAxis": {
				    "gridPosition": "start",
				    "labelRotation": 25,
				  },
				});

		}
	})
}

function loadIndicatorAqi(indicators){
	if(indicators.NO2){
		$('#indicatorAqiNO2').closest('.aqiContainer').show();
		buildChart('indicatorAqiNO2',indicators.NO2,'NO2');
	}
	else
		$('#indicatorAqiNO2').closest('.aqiContainer').hide();
	
	if(indicators.SO2){
		$('#indicatorAqiSO2').closest('.aqiContainer').show();
		buildChart('indicatorAqiSO2',indicators.SO2,'SO2');
	}
	else
		$('#indicatorAqiSO2').closest('.aqiContainer').hide();

	if(indicators.CO){
		$('#indicatorAqiCO').closest('.aqiContainer').show();
		buildChart('indicatorAqiCO',indicators.CO,'CO');
	}
	else
		$('#indicatorAqiCO').closest('.aqiContainer').hide();

	if(indicators.PM10){
		$('#indicatorAqiPM10').closest('.aqiContainer').show();
		buildChart('indicatorAqiPM10',indicators.PM10,'PM10');
	}
	else
		$('#indicatorAqiPM10').closest('.aqiContainer').hide();

	if(indicators.PM25){
		$('#indicatorAqiPM2.5').closest('.aqiContainer').show();
		buildChart('indicatorAqiPM2.5',indicators.PM25,'PM2.5');
	}
	else
		$('#indicatorAqiPM2.5').closest('.aqiContainer').hide();

	if(indicators.O3){
		$('#indicatorAqiO3').closest('.aqiContainer').show();
		buildChart('indicatorAqiO3',indicators.O3,'O3');
	}
	else
		$('#indicatorAqiO3').closest('.aqiContainer').hide();
}
function buildChart(div,data,indicator){
	console.log(indicator)
    var chart = AmCharts.makeChart(div, {
              "type": "serial",
              "theme": "light",
              "marginRight": 10,
              "dataProvider": data,
              "startDuration": 1,
              "gridThickness":0,
              "graphs": [{
                "balloonText": "<b>[[time]] - </b> AQI [[value]]",
                "fillColorsField": "color",
                "fillAlphas": 0.9,
                //"lineAlpha": 0.2,
                "type": "column",
                "valueField": "value"
              }],
              "chartCursor": {
                "categoryBalloonEnabled": false,
                "cursorAlpha": 0,
                "zoomable": false
              },
              /*"valueAxes":{
                "gridThickness":0
              },*/
              "categoryField": "time",
			  "categoryAxis": {
					"minPeriod": "mmhh",
					"parseDates": true,
					'format':'JJ:NN'
				},
            });
}