function coverImage () {
	var form =  '<div id="content">'
			    +'<div class="frame"><img src="https://tinbandoc.com/wp-content/uploads/2016/05/anh-girl-xinh-gai-dep-zalo.jpg"></div>'
			    +'<div id="controls">'
			      +'<a href="#" id="rotate_left" title="Rotate left"><i class="fa fa-rotate-left"></i></a>'
			      +'<a href="#" id="zoom_out" title="Zoom out"><i class="fa fa-search-minus"></i></a>'
			      +'<a href="#" id="fit" title="Fit image"><i class="fa fa-arrows-alt"></i></a>'
			      +'<a href="#" id="zoom_in" title="Zoom in"><i class="fa fa-search-plus"></i></a>'
			      +'<a href="#" id="rotate_right" title="Rotate right"><i class="fa fa-rotate-right"></i></a>'
			    +'</div>'
			    +'<ul id="data">'
			      +'<div class="column">'
			        +'<li>x: <span id="x"></span></li>'
			        +'<li>y: <span id="y"></span></li>'
			      +'</div>'
			      +'<div class="column">'
			        +'<li>width:  <span id="w"></span></li>'
			        +'<li>height: <span id="h"></span></li>'
			      +'</div>'
			      +'<div class="column">'
			        +'<li>scale: <span id="scale"></span></li>'
			        +'<li>angle: <span id="angle"></span></li>'
			      +'</div>'
			    +'</ul>'
			+'</div>';
	$.jAlert({
		'title': 'Edit product',
		'content': form,
		'btns': [
			{ 'text': 'Save', 'theme': 'green', 'closeAlert': false, 'onClick': function(e){
					e.preventDefault();
     			}
     		}
     	],
     	'size': {'height': '80%', 'width': '80%'}
   });
}