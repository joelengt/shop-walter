/**
 * Comun encabezado
 */
var matched, browser;

jQuery.uaMatch = function( ua ) {
    ua = ua.toLowerCase();

    var match = /(chrome)[ \/]([\w.]+)/.exec( ua ) ||
        /(webkit)[ \/]([\w.]+)/.exec( ua ) ||
        /(opera)(?:.*version|)[ \/]([\w.]+)/.exec( ua ) ||
        /(msie) ([\w.]+)/.exec( ua ) ||
        ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec( ua ) ||
        [];

    return {
        browser: match[ 1 ] || "",
        version: match[ 2 ] || "0"
    };
};

matched = jQuery.uaMatch( navigator.userAgent );
browser = {};

if ( matched.browser ) {
    browser[ matched.browser ] = true;
    browser.version = matched.version;
}

// Chrome is Webkit, but Webkit is also Safari.
if ( browser.chrome ) {
    browser.webkit = true;
} else if ( browser.webkit ) {
    browser.safari = true;
}

jQuery.browser = browser;
$(document).ready(function(){
   $('.bxslider').bxSlider({
            captions: true,
            slideWidth: 200,
            minSlides: 1,
            maxSlides: 5,
            slideMargin: 10
        });
        //tooltip must load after so cloned slides also display it
        $('.lshowcase-tooltip').tooltip();
	$('#mainSearch button').mouseover(function(e) {
		$(this).css('backgroundPosition', 'bottom right');
		$('#mainSearch input').css('backgroundPosition', 'bottom left');
	});
	$('#mainSearch button').mouseout(function(e) {
		$(this).css('backgroundPosition', 'top right');
		$('#mainSearch input').css('backgroundPosition', 'top left');
	});
	$('#mainNav li a').mouseover(function(e){
		$(this).toggleClass('mainBtn_selected');
	});
	$('#mainNav li a').mouseout(function(e){
		$(this).toggleClass('mainBtn_selected');
	});
	$('#countrySelect').customStyle();
	$('.customStyleSelectBoxInner').css("width","auto");
	$('#countrySelect').change(function()
	{
		$('.customStyleSelectBoxInner').css("width","auto");
		window.location.href = $('#countrySelect').val();
	});
	
	$('#search_query').attr('rel',$('#search_query').val());
	$('#search_query').focus(function(){
		if (this.value == $('#search_query').attr('rel'))
		{
			this.value = '';
		}
	});
	$('#search_query').blur(function(){
		if (this.value == '')
		{
			this.value = $('#search_query').attr('rel');
		}
	});
	$('#mainSearch').blur(function(){
		if ($('#search_query').val() != $('#search_query').attr('rel'))
		{
			$('#search_query').val($('#search_query').attr('rel'));
		}
	});
	$('#mainSearch').submit(function(){
		if ($('#search_query').val() == '' || $('#search_query').val() == $('#search_query').attr('rel'))
		{
			return false;
		}
	});
	jQuery("#search_query")
	 .autocomplete($("#search_query").attr('src'), jQuery.extend({}, {
      dataType: 'json',
      width: 230,
      selectFirst: false,
      parse: function(data) {
        var parsed = [];
        for (key in data) {
          parsed[parsed.length] = { data: [ data[key][1], key ], value: data[key][1], result: data[key][0], url: data[key][2] };
        }
        return parsed;
      },
      selectCurrent: function(selected) {
    	  if (selected.url != null)
		  {
              alert(selected.attr("class"));
  			  window.location.href = selected.href;
		  }
    	  return false;
		}
    }, { }))
    .result(function(event, data) {
    });
});
