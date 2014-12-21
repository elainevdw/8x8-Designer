/*
  @todo:
  - import function
  - letters
  - a few standard shapes (star, happy face, heart, space invaders, cat)
  - shift up/down
  - shift diagonal
  - autogenerate scrolling
 */

/*
 *  Populate Grid
 */
$(document).ready(function(){
    for (i = 0; i < 8; i++) { 
        $('#grid').append('<div class="matrix-row"></div>');
    }
    for (i = 0; i < 8; i++) {
        $('.matrix-row').append('<div class="light off">0</div>');   
    }
    $('.matrix-row').each(function(){
        $(this).prepend('<div class="b">B</div>');  
        $(this).append('<div class="b">,</div>');  
    })
	$('.light').each(function(key,val){
		$(this).attr('data-cell',key);
	});
})

/*
 *  Grid Interactions
 */
$.fn.turn = function(onOff) { 
    if(onOff){
        var t;
        if (onOff == 'on') t = 1;
        if (onOff == 'off') t = 0;
        this.removeClass('on off').addClass(onOff).text(t); 
    }else{
        if(this.hasClass('on')) this.removeClass('on').addClass('off').text(0);
        else this.removeClass('off').addClass('on').text(1);
    }
}
$(document).ready(function(){    
    var selected = false;
    $('.light').on('mousedown',function(e){
         selected = true;   
    })
    $('.light').on('mouseup',function(e){
         selected = false;   
    })
    $('#grid').on('mouseleave',function(e){
         selected = false;  
    })
    $('.b').on('mouseenter',function(e){
         selected = false;  
    })
    
    $('.light').on('mouseenter mousedown',function(e){
        if(selected){
            $(this).turn();
        }
    })    
});

/*
 *  Controls
 */
$(document).ready(function(){
	var colors = {};
	$('.color').each(function(key,val){
		colors[key] = $(this).attr('class').substr(6);
	});
	console.log(colors);
	$('.color').on('click',function(){
		var color = $(this).attr('class').substr(6);
		$('.light').each(function(){
			var l = $(this);
			$.each(colors,function(key,val){
				l.removeClass(val);
			});
			l.addClass(color);
		});
		$('.color').each(function(){
			$(this).html('');
		})
		$(this).html('<span class="glyphicon glyphicon-star" aria-hidden="true"></span>');
	});
	
    $('#allOn').on('click',function(){
        $('.light').each(function(){
            $(this).turn('on');
        })
    })
    $('#allOff').on('click',function(){
        $('.light').each(function(){
            $(this).turn('off');
        })
    })
    $('#invert').on('click',function(){
        $('.light').each(function(){            
            $(this).turn();
        })
    })
    
    var currentText;
	var frameTitle;
	var frameRate;
    $('#exportFrame').on('click',function(){
        currentText = $('#export textarea').val();
		frameTitle = $('#frameTitle').val() == '' ? '' : "// "+$('#frameTitle').val()+"\n";
		frameRate = $('#frameRate').val() == '' ? '50' : $('#frameRate').val();
        $('#export textarea').val(currentText+frameTitle+$('.matrix-row').text()+frameRate+','+"\n\n");  
    })
    
    $('#shiftLeft').on('click',function(){
        $('.matrix-row').each(function(){
            var cache;
            var cachecache;
            for (i = 9; i > 0; i--) {
                var light = $(this).find('.light:nth-child('+i+')');
                if(i==9){ 
                    cache = light.hasClass('on') ? 'on' : 'off';
                    light.turn('off');
                }else{
                    cachecache = light.hasClass('on') ? 'on' : 'off';
                    light.turn(cache);
                    cache = cachecache;
                }                
            }
        })
    })    
    $('#shiftRight').on('click',function(){
        $('.matrix-row').each(function(){
            var cache;
            var cachecache;
            for (i = 1; i < 10; i++) {
                var light = $(this).find('.light:nth-child('+i+')');
                if(i==1){ 
                    cache = light.hasClass('on') ? 'on' : 'off';
                    light.turn('off');
                }else{
                    cachecache = light.hasClass('on') ? 'on' : 'off';
                    light.turn(cache);
                    cache = cachecache;
                }                
            }
        })
    })

})