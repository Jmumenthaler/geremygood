
	//jQuery extension to fetch an rss feed and return it as json via YQL
	//created by dboz@airshp.com
	(function($) {
	  
		$.extend({
			feedToJson: function(options, callback) {
				if ($.isFunction(options)) {
				  callback = options;
				  options = null;
				}
				options = $.extend($.feedToJson.defaults,options);
				var url = options.yqlURL + options.yqlQS + "'" + encodeURIComponent(options.feed) + "'" + "&_nocache=" + options.cacheBuster;
				return $.getJSON(url, function(data){  
						//console.log(data.query.results);
						data = data.query.results;
						$.isFunction(callback) && callback(data); //allows the callback function to be the only option
						$.isFunction(options.success) && options.success(data);
					}); 
			}
		});
	  
	  //defaults
	  $.feedToJson.defaults = {
	  	yqlURL : 'http://query.yahooapis.com/v1/public/yql',  //yql 
	  	yqlQS : '?format=json&callback=?&q=select%20*%20from%20rss%20where%20url%3D',  //yql query string
	  	feed:'http://instagr.am/tags/tacos/feed/recent.rss', //instagram recent posts tagged 'tacos'
	  	cachebuster: Math.floor((new Date().getTime()) / 1200 / 1000), //yql caches feeds, so we change the feed url every 20min
	  	success:null //success callback 
	  }; 
	  
	})(jQuery);
	
	
	// Get Gimmie Bar Data
	$(document).ready(function($){
	
		var defaultUser = 'geremygood';
	
		function gimmebar(user){
      user = user || defaultUser;
			$.feedToJson({
				feed:'https://gimmebar.com/public/feed/user/'+user+'/collection/firehose',
				success: function(data){
					//console.log(data);
					var $holder = $('<div class="gimmebarFeed"></div>');
          if(data.item.length > 1) data = data.item;
          
          console.log(data[1].title);
          console.log(data[1].link);

          var loop=1;
          for (loop=1;loop<=10;loop++){
            //console.log(loop);
            //console.log( data[loop].title );
            console.log(data[loop]);
            if( typeof data[loop] !== 'undefined' ){
              var $thumb = '&nbsp;';//$('<img height="100" src="'+data[loop].thumbnail.url+'"/>');         
              var $desc = $('<li class="item" style="background-image:url('+data[loop].thumbnail.url+')" ><a target="_blank" href="'+data[loop].link+'">'+data[loop].title+'</a></li>');            
            }else{
              console.log('doesnt have thumbniail');
              var $desc = $('<li class="item" ><a target="_blank" href="https://gimmebar.com/loves/geremygood">GimmieBar</a></li>');
            };
            $('#gimmie .assets').append($desc);
          }

          

          
				}
			});
    }
      
    
    gimmebar('geremygood');
		
   
    
	});	

