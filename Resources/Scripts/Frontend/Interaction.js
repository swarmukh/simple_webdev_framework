function $(item)
{
	switch(item.charAt(0))
	{
		case '#':return document.getElementById(item.substring(1));
		case '.':return document.getElementsByClassName(item.substring(1));
		case '@':return document.getElementsByName(item.substring(1));
		default :return document.getElementsByTagName(item);
	}
}

var tab =
{
	pane1: {previousTab: null, currentTab: null},
	pane2: {previousTab: null, currentTab: null}
}

function init()
{
	tab.pane1.currentTab = $("#pane1_tab1");
	tab.pane2.currentTab = $("#pane2_tab1");
}

function finalise()
{
	
}

function showTab(tabbed_pane, tab)
{
	t = $("#"+tab);
	
	if(tabbed_pane.currentTab == t)
		return;

	tabbed_pane.previousTab = tabbed_pane.currentTab;
	tabbed_pane.currentTab = t;
	
	setVisibility(tabbed_pane.previousTab, false);
	setVisibility(tabbed_pane.currentTab, true);
}

function setVisibility(item, visible)
{
	item.style.display = visible ? "block" : "none";
}

function toggleVisibility(item)
{
	$("#"+item).classList.toggle("w3-show");
}

/*function plotOnMap()
{
	var lat=123;lng=456;
	point=new google.maps.LatLng(lat,lng);
	var mapOptions={center: point, zoom: 15, scrollwheel: true, draggable: true};
	var map=new google.maps.Map($("#mapholder"),mapOptions);
	var marker=new google.maps.Marker({position: point, animation: google.maps.Animation.BOUNCE});
	marker.setMap(map);
}*/