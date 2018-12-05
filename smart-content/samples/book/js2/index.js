/*
 * Copyright MIT © <2012, 2013> <Francesco Trillini>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated 
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation 
 * the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and 
 * to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR 
 * PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE 
 * FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, 
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

;$(function($) {

    var tool, settings, canvas, canvasDoubleLayer, context, contextDoubleLayer, tempCanvas, tempContext, erase, mouse = { x: 0, y: 0, lastX: 0, lastY: 0 }, lines = [], particles = [], dirtyRegions = [], FPS = 60, release = true, eraser = ctrl = draw = drag = false;
  	
    /*
     * Default settings.
     */
   
    $.fn.settings = {
        
            mode: 'simplePen' || 'smoothPen' || 'dashed' || 'squirt' || 'spray' || 'colorful',
            backgroundColor: 'rgb(255, 255, 255)' || 'rgb(255, 255, 255, 1.0)',
            color: 'rgb(0, 0, 0)' || 'rgb(0, 0, 0, 1.0)',
            particlesAlpha: 0.10 || 0.05,
	    freeParticles: false,
	    	backgroundTransparent: false,
			shadow: false,
            opacity: 1.0,
            size: 20
        
    };
	
    /*
     * Paint app.
     */
    
    $.fn.paint = function(options) {
    		
            tool = $.extend({}, $.fn.settings, options);
		  	
            var body = $('body').get(0);
            
	    canvas = document.createElement('canvas');
		tempCanvas = document.createElement('canvas');
	    canvasDoubleLayer = document.createElement('canvas');
		
            body.setAttribute('oncontextmenu', 'return false');
            
            $('body').css('background-color', tool.backgroundColor);
        
            canvas.setAttribute('id', 'canvas');     
            canvas.setAttribute('width', window.innerWidth);
            canvas.setAttribute('height', window.innerHeight);
	    canvas.setAttribute('style', 'position: absolute; top: 0px; bottom: 0px; left: 0px; right: 0px; z-index: -2px;');
		
			/* 
			 * Temp canvas for smoothPen.
			 */
		
			tempCanvas.setAttribute('id', 'tempCanvas');     
            tempCanvas.setAttribute('width', window.innerWidth);
            tempCanvas.setAttribute('height', window.innerHeight);
	    tempCanvas.setAttribute('style', 'position: absolute; top: 0px; bottom: 0px; left: 0px; right: 0px; z-index: -1px;');
		
	    /*
	     * Need to add a second canvas layer upon the first.
	     * The basic idea, was to simulate a pencil sharpener animation while user is using (tool.mode -> 'pen').
	     */
			
	    canvasDoubleLayer.setAttribute('id', 'canvasDoubleLayer');     
            canvasDoubleLayer.setAttribute('width', window.innerWidth);
            canvasDoubleLayer.setAttribute('height', window.innerHeight);
	    canvasDoubleLayer.setAttribute('style', 'position: absolute; top: 0px; bottom: 0px; left: 0px; right: 0px; z-index: 0px; cursor: crosshair;');
		
		body.appendChild(tempCanvas);
            body.appendChild(canvas);
	    body.appendChild(canvasDoubleLayer);
            
	    // Browser supports canvas?
            if(!!(canvas.getContext && canvas.getContext('2d'))) {
				
	            context = canvas.getContext('2d');
				tempContext = tempCanvas.getContext('2d');
		    contextDoubleLayer = canvasDoubleLayer.getContext('2d');
                                                                                               
                    (/Android|iPod|iPhone|iPad|IEMobile|BlackBarry/img).test(navigator.userAgent) ? $.addTouchListeners() : $.addMouseListeners();
				
	 	    if(!tool.freeParticles)
			
			    tool.mode === 'simplePen' || tool.mode === 'smoothPen' ? $.drawParticles(null, null) : null;
					
		    else
				
			    tool.mode === 'simplePen' || tool.mode === 'smoothPen' ? $.pencilSharpener() : null;
                  
            }      
               
            else {
            
                    $.error('Canvas is not supported by your browser :('); 
                
                    return;
                    
            }      
            
    };
	
    /*
     * Draw up the particles, onto the double canvas layer.
      * NB: This method will be called every time mousemove event fire.
     */
	
    $.drawFreeParticles = function(x, y) {
		
	for(var particle = 0, totalParticles = 3; particle < totalParticles; particle++) {
		
		particles.push({ 
			
			x: x, 
			y: y, 
			vx: (1 + (Math.random() * -2)), 
			vy: 2, 
			radius: 2
				
		});
		
		dirtyRegions.push({
		
			x: x,
			y: y
		
		});
		
	}
	
    };
	
    /*
     * Draw up the particles, onto the double canvas layer.
     * NB: This method will be called once (on window.onload).
     */
	
    $.drawParticles = function(x, y) {
	
	for(var particle = 0, totalParticles = 10; particle < totalParticles; particle++)
		
		particles.push({ 
			
			x: x, 
			y: y, 
			vx: (1 + (Math.random() * -2)), 
			vy: 2, 
			radius: 2
				
		});
		
	for(var dirty = 0, totalDirtyRegions = particles.length; dirty < totalDirtyRegions; dirty++) 
	
		dirtyRegions.push({
		
			x: x,
			y: y
		
		});
		
		if(release) {
		
			release = false;
			
			$.pencilSharpener();
			
		}
	
    };
	
    /*
     * Pencil sharpener's animation.
     */
	
    $.pencilSharpener = function() {
	             
	if(draw) {
	
		if(release) {
			
			release = false;
			
			$.drawParticles(mouse.x, mouse.y);
			
		}
			
		// Logic
		$.clear(); 
		$.updateParticles();
		$.renderParticles();
	
	}
		
	requestAnimFrame(function() {
		
		$.pencilSharpener();
		
	});
	
    };
	
	/*
	 * Clear only dirty regions.
	 */
	
	$.clear = function() {
		
		$.each(dirtyRegions, function(index, dirty) {
				
			/*
			 * So we need to clear only the dirty region.
			 * The main formula for circle is: (x - radius, y - radius, radius * 2, radius * 2);
			 * However, for little improvements, I rebased it to mine.
			 */
				
			var x, y, width, height;
			
			// Original particles radius was 2
			width = (2 * particles[index].radius) + 4;
			height = width;
				
			x = dirty.x - (width / 2);
			y = dirty.y - (height / 2);
				
			contextDoubleLayer.clearRect(Math.floor(x), Math.floor(y), Math.ceil(width), Math.ceil(height));
		
		});
	
	};
	
    /*
     * So, here we're goin' to update the particles.
     */
	
    $.updateParticles = function() {
	
        // No fixed loop. Every time the for loop checks the particles.length
        for(var index = 0; index < particles.length; index++) {
			
           var particle = particles[index];
           
           particle.x += particle.vx;
		   particle.y += particle.vy;
			
	       if(!tool.freeParticles)
		
	           // Out of radius? Then stop to draw, and reset the particle's values to default
		  particle.radius = Math.max(particle.radius - 0.10, 0.0) === 0.0 ? draw = false : particle.radius -= 0.10;
				
	        else {
			
	            particle.radius = Math.max(particle.radius - 0.10, 0.0);
				
		    if(particle.radius <= 0.0) {
					
		        // Delete particle from array
		        particles.splice(index, 1);
		        dirtyRegions.splice(index, 1);
				
		    }
				
	       } 
			
	 }
	
    };
    
    /*
     * Render the particles, n' keep track of dirty regions.
     */
    
    $.renderParticles = function() {
    
    	$.each(particles, function(index, particle) {
			
			// We wanna just simulate a pencil sharpener
			contextDoubleLayer.save();
			contextDoubleLayer.beginPath();
			contextDoubleLayer.globalAlpha = tool.particlesAlpha;
			contextDoubleLayer.fillStyle = tool.color;
			contextDoubleLayer.translate(particle.x, particle.y);
			contextDoubleLayer.rotate(index * particles.length * (Math.PI / 180));
			contextDoubleLayer.arc(0, 0, particle.radius, 0, 2 * Math.PI);
			contextDoubleLayer.fill();
			contextDoubleLayer.restore();
			
			dirtyRegions[index].x = particle.x;
			dirtyRegions[index].y = particle.y;
				
		});
    
    };
    
    /*
     * Save the drawing to base64.
     */
    
    $.toBase64 = function() {
				
		if(!tool.backgroundTransparent) {
			
			var bgCanvas = document.createElement('canvas');
			var bgContext = bgCanvas.getContext('2d');
		
			bgCanvas.width = window.innerWidth;
			bgCanvas.height = window.innerHeight;
			
			// So basically, we need to create a background, and to push in the drawing
			bgContext.fillStyle = $('body').css('background-color');
			bgContext.fillRect(0, 0, bgCanvas.width, bgCanvas.height);
			bgContext.drawImage(canvas, 0, 0);	
					
			// Back to base64		
			var base64URL = bgCanvas.toDataURL('image/png;base64');
				
			window.open(base64URL);
			
		}
		
		else {
			
			// Back to base64
			var base64URL = tempCanvas.toDataURL('image/png;base64');
				
			window.open(base64URL);
		
		}
    
    };
 	
    /*
     * Mouse listeners.
     */
	
    $.addMouseListeners = function() {
    
            $('#canvasDoubleLayer').on('mousedown', function(event) {
      
		event.preventDefault();
	  
                $.onMouseDown(event);
        
            });
        
            $('#canvasDoubleLayer').on('mousemove', function(event) {
        
		event.preventDefault();
		
                $.onMouseMove(event);
        
            });    

	    $('#canvasDoubleLayer').on('mouseup', function(event) {
        
		event.preventDefault();
		
				// Save the current state
				tempContext.drawImage(canvas, 0, 0);
		
				context.clearRect(0, 0, canvas.width, canvas.height);
		
				lines = [];
				
                drag = false;
        
            });  		
			
	     $(document).on('keydown', function(event) {
       
		event.preventDefault();
			   
                // Ctrl
                event.which === 17 ? ctrl = true : null;
			
                // Ctrl+s	
 		if(event.which === 83 && ctrl) {

			$.toBase64();
	
		} 
        
            }); 		
            
        /*
         * On window resize canvas is destroyed. 
         * Any solutions? Yep, we need a temp double buffer.
         */
		
	    $(window).on('resize', function() {
		
	        var copyCanvas = document.createElement('canvas');
			var copyTempCanvas = document.createElement('canvas');
	        var copyCanvasDoubleLayer = document.createElement('canvas');
	        
	        var copyContext = copyCanvas.getContext('2d');
			var copyTempContext = copyTempCanvas.getContext('2d');
	        var copyContextDoubleLayer = copyCanvas.getContext('2d');
	        
	        copyCanvas.width = window.innerWidth;
	        copyCanvas.height = window.innerHeight;
	        
			copyTempCanvas.width = window.innerWidth;
			copyTempCanvas.height = window.innerHeight;
			
	        copyCanvasDoubleLayer.width = window.innerWidth;
	        copyCanvasDoubleLayer.height = window.innerHeight;
	        
	        // Save the current state
	        copyContext.drawImage(canvas, 0, 0);
			copyTempContext.drawImage(tempCanvas, 0, 0);
	        copyContextDoubleLayer.drawImage(canvasDoubleLayer, 0, 0);
	        
	        // Erase data
	        canvas.width = copyCanvas.width;
	        canvas.height = copyCanvas.height;
	        
			tempCanvas.width = window.innerWidth;
			tempCanvas.height = window.innerHeight;
			
	        canvasDoubleLayer.width = copyCanvasDoubleLayer.width;
	        canvasDoubleLayer.height = copyCanvasDoubleLayer.height;
	        
	        // Restore original state with its data
	        context.drawImage(copyCanvas, 0, 0);
			tempContext.drawImage(copyTempCanvas, 0, 0);
	        contextDoubleLayer.drawImage(copyCanvasDoubleLayer, 0, 0);
			
			lines = [];
		
	    });
    
    };
	
    /*
     * Touch listeners.
     * NB: jQuery doesn't support touches events. So we need to get back to the classic JavaScript polyfill.
     */
	
    $.addTouchListeners = function() {
    
           var surface = document.querySelector('#canvasDoubleLayer');

           surface.addEventListener('touchstart', function(event) {
				
		event.preventDefault();
				
                $.onTouchStart(event);
        
           }, false);
        
           surface.addEventListener('touchmove', function(event) {
        
		event.preventDefault();
		
                $.onTouchMove(event);
        
           }, false);     

	   surface.addEventListener('touchend', function(event) {
		
		event.preventDefault();
				
				// Save the current state
				tempContext.drawImage(canvas, 0, 0);
		
				context.clearRect(0, 0, canvas.width, canvas.height);
		
				lines = [];
		
                drag = false;
        
           }, false);  
    
    };
	
    /*
     * Mouse down event.
     */
	
    $.onMouseDown = function(event) {
        
            drag = true;
      
            erase = event.button === 2 || eraser;
                  
	    mouse.x = event.pageX - canvas.offsetLeft;
	    mouse.y = event.pageY - canvas.offsetTop;
				  
            if(tool.mode === 'simplePen') {
           
                context.beginPath();
                context.moveTo(mouse.x - 0.1, mouse.y - 0.1);
            
            }
           
            $.paintTo(mouse.x, mouse.y);        
        
    };
    
    /*
     * Mouse move event.
     */
	
    $.onMouseMove = function(event) {
        
            if(drag) {
         
                drag = true;
   
                $.paintTo(event.pageX, event.pageY); 
            
            }
        
    };
    
    /*
     * Touch start event.
     */
	
    $.onTouchStart = function(event) {
			
	    // Ensure that there are at least two fingers
	    if(event.touches.length > 1) {
				
		context.clearRect(0, 0, canvas.width, canvas.height);
		tempContext.clearRect(0, 0, canvas.width, canvas.height);
				
		return;
			
	    }
		
            drag = true;      
                  
	    var touch = mouse;  
			 
	    touch.x = event.touches[0].pageX - canvas.offsetLeft;
	    touch.y = event.touches[0].pageY - canvas.offsetTop;		  
				 
            if(tool.mode === 'simplePen') {
            
                context.beginPath();
                context.moveTo(touch.x - 0.1, touch.y - 0.1);
            
            }
              
            $.paintTo(touch.x, touch.y);        
        
    };
        
    /*
     * Touch move event.
     */	
		
    $.onTouchMove = function(event) {
        
            if(drag) {
         
                drag = true;
               
                $.paintTo(event.touches[0].pageX, event.touches[0].pageY); 
            
            }
        
    };
	
    /*
     * Here we're goin' to draw up onto canvas.
     */
	
    $.paintTo = function(pageX, pageY) {
       
            var color = erase ? $('* html body').css('background-color') || $('body').get(0).style.backgroundColor || 'rgba(255, 255, 255, 1.0)' : tool.color;
	 	
	    // Let's track the mouse position for the particles
	    if((tool.mode === 'simplePen' || tool.mode === 'smoothPen') && !tool.freeParticles && !draw && !erase) {
				
		     // So the particle is out of radius...let's restore the particle's values itself, and...
	              $.each(particles, function(index, particle) {
				
		          particle.x = pageX;
	                  particle.y = pageY + index;
					
			  particle.radius = 2;
			
			  dirtyRegions[index].x = particle.x;
			  dirtyRegions[index].y = particle.y;
						
		      });
			
		      // ...let's restart to draw
		      draw = true;
			
	    }
		
	    else if((tool.mode === 'simplePen' || tool.mode === 'smoothPen') && tool.freeParticles && !erase) {
		
		    // Always draw particles. CPU is angry with me! LOL
		    draw = true;
		
		    $.drawFreeParticles(pageX, pageY);
		
	    }
		
	    switch(tool.mode) {
		
	        case 'simplePen':
			
		    context.strokeStyle = color;
		    context.lineWidth = tool.size;
		    context.lineCap = 'round';
		    context.lineJoin = 'round';
		    context.lineTo(pageX, pageY);
		    context.stroke(); 
            
		    break;
			
		case 'smoothPen':
			
			lines.push({
			
				x: pageX,
				y: pageY
			
			});
			
			/*
			
				mouse.lastX = mouse.x;
				mouse.lastY = mouse.y;
			
				mouse.x = pageX;
				mouse.y = pageY;
			
				// Bézier curve control point
				var cpx = (mouse.x - mouse.lastX) + mouse.lastX;
				var cpy = (mouse.y - mouse.lastY) + mouse.lastY;
			
				context.save();
				context.beginPath();
				context.fillStyle = color;
				context.strokeStyle = color;
				context.lineWidth = erase ? tool.size * 2 : tool.size;
				context.strokeWidth = erase ? tool.size * 2 : tool.size;
				
				if(tool.shadow) {
				
					context.shadowColor = color;
					context.shadowBlur = erase ? tool.size * 2 : tool.size;
					context.shadowOffsetX = 0;
					context.shadowOffsetY = 0;
				
				}	
				
				context.lineCap = 'round';
				context.lineJoin = 'round';
				context.moveTo(mouse.lastX - 0.1, mouse.lastY - 0.1);
				context.quadraticCurveTo(cpx, cpy, mouse.x, mouse.y);
				context.fill();
				context.stroke(); 
				context.closePath();
				context.restore();
			
			*/
			
			context.clearRect(0, 0, canvas.width, canvas.height);
			
			context.save();
			context.beginPath();
			context.strokeStyle = color;
			context.lineWidth = erase ? tool.size * 2 : tool.size;
			context.lineCap = 'round';
			context.lineJoin = 'round';
			context.moveTo(lines[0].x, lines[0].y);
			
      // At beginning start drawing the head of the curve
			if(lines.length < 4) {
				
				context.fillStyle = color;
				context.arc(lines[0].x, lines[0].y, context.lineWidth / 2, 0, Math.PI * 2);
				context.fill();
			
				return;
				
			}    
          
			if(tool.shadow) {
				
				context.shadowColor = color;
				context.shadowBlur = erase ? tool.size * 2 : tool.size;
				context.shadowOffsetX = 0;
				context.shadowOffsetY = 0;
				
			}	
			
			// Draw through N points
			for(var N = 1; N < lines.length - 2; N++) {
			
				var xc = (lines[N].x + lines[N + 1].x) / 2;
				var yc = (lines[N].y + lines[N + 1].y) / 2;
			
				context.quadraticCurveTo(lines[N].x, lines[N].y, xc, yc);
				
			}
			
			context.stroke();
			context.restore();
		
			break;
        
	        case 'dashed': 
        
		    context.beginPath();
		    context.fillStyle = color;
		    context.arc(pageX, pageY, tool.size, 0, Math.PI * 2);
		    context.fill();
		    context.closePath();   
                   
		    break;

	        case 'squirt':

		    context.save();
		    context.beginPath();
		    context.globalCompositeOperation = 'source-over'; 
		    context.globalAlpha = erase ? 1.0 : tool.opacity;
		    context.fillStyle = color;
		    context.arc(pageX + 10, pageY, erase ? tool.size * 2 : (Math.floor(Math.random() * (tool.size * 2)) + (Math.random() * tool.size / 2)), 0, Math.PI * 2);
		    context.fill();
		    context.closePath();  
		    context.restore();
		    context.save();
		    context.beginPath();
		    context.globalCompositeOperation = 'source-over';
		    context.globalAlpha = Math.random();
		    context.fillStyle = color;
		    context.arc(pageX + tool.size * 4 + Math.random() * -(tool.size * 8), pageY + tool.size * 4 + Math.random() * -(tool.size * 8), Math.floor(Math.random() * 4), 0, Math.PI * 2);
		    context.fill();
		    context.closePath();
		    context.restore(); 
                   
		    break;
			
		case 'colorful':
			
			context.save();
		    context.beginPath();
		    context.globalCompositeOperation = !!erase ? 'source-over' : 'lighter';
		    context.globalAlpha = !!erase ? 1.0 : 0.2;
		    context.fillStyle = !!erase ? color : 'rgb' + '(' + Math.floor(Math.random() * 255) + ', ' + Math.floor(Math.random() * 255) + ', ' + Math.floor(Math.random() * 255) + ')';
		    context.arc(pageX + 10, pageY, erase ? tool.size * 2 : (Math.floor(Math.random() * (tool.size * 2)) + (Math.random() * tool.size / 2)), 0, Math.PI * 2);
		    context.fill();
		    context.closePath();
			context.restore();	
				
		    break;
			
		case 'spray':
			
			for(var spray = 0, len = tool.size; spray < len; spray++) {
				
				var angle = Math.random() * Math.PI * 2;
				var radius = Math.random() * tool.size;
	
				context.save();
				context.beginPath();
				context.fillStyle = color;
				context.arc(pageX + Math.cos(angle) * radius, pageY + Math.sin(angle) * radius, erase ? tool.size : 0.5 + Math.floor(Math.random() * 0.5), 0, Math.PI * 2);
				context.fill();
				context.closePath();
				context.restore(); 
			
			}
	
			break;
		 
	    }
        
    };    
    
    /*
     * Public API.
     */
    
    var API = {
    
    	mode: function(value) {
    	
    		tool.mode = value;
    		
    	},
    	
    	backgroundColor: function(value) {
    	
    		$('body').css('background-color', value);
    		    	
    	},
    	
    	color: function(value) {
    	
    		tool.color = value;
    		
    	},
    	
    	alpha: function(value) {
    	
    		tool.particlesAlpha = value;
    		
    	},
    	
    	freeParticles: function(value) {

			particles = [];
			dirtyRegions = [];
				
			if(!tool.freeParticles) {
			
				tool.freeParticles = draw = true;
				
				draw = true;
				
			}
				
			else {
			
			 	release = true;
			 	
			 	tool.freeParticles = draw = false;
			 	
			 }
			
    	},
    	
    	backgroundTransparent: function(value) {
    	
    		tool.backgroundTransparent ? tool.backgroundTransparent = false : tool.backgroundTransparent = true;
    		
    	},
		
		shadow: function(value) {
		
			tool.shadow ? tool.shadow = false : tool.shadow = true;
			
		},
    	
    	eraser: function(value) {
    		
    		eraser ? eraser = false : eraser = true;
    		
    		if('ontouchstart' in window)
    		
    			erase = eraser;
    		
    	},
    	
    	transparent: function(value) {
    	
    		tool.opacity = value;
    		
    	},
    	
    	size: function(value) {
    	
    		tool.size = value;
    		
    	},
    	
    	clear: function() {
			
    		context.clearRect(0, 0, canvas.width, canvas.height);
			tempContext.clearRect(0, 0, canvas.width, canvas.height);
    		
    	},
    	
    	save: function() {
    	
    		$.toBase64();
    		
    	}
    
    };
    
    $.fn.changeValue = function(method) {

		// Init
		if(API[method]) {

			return API[method].apply(this, Array.prototype.slice.call(arguments, 1));

		} 

		else if(typeof method === 'object' || !method ) {

			return API.init.apply(this, arguments);
    
		} 

		else {
      
			$.error('Method ' + method + ' does not found.');

		}    

	};    
	
    /*
     * Request new frame by Paul Irish.
     * 60 FPS.
     */
	
    window.requestAnimFrame = (function() {
	 
	return          window.requestAnimationFrame       || 
			window.webkitRequestAnimationFrame || 
			window.mozRequestAnimationFrame    || 
			window.oRequestAnimationFrame      || 
			window.msRequestAnimationFrame     || 
			  
			function(callback) {
			  
				window.setTimeout(callback, 1000 / FPS);
				
			};
			  
    })();

    $(document).ready(function() {
			
				$(this).paint({
				
					mode: 'smoothPen',
					backgroundColor: '#143c75',
					color: 'rgb(255, 255, 255)',
					backgroundTransparent: false,
					freeParticles: false,
					size: 20
				
				});	
			
				var PaintApp = function() {
			
  					this.mode = 'smoothPen';
  					this.bgColor = '#143c75';
  					this.color = '#FFFFFF';
  					this.particlesAlpha = 0.10;
  					this.freeParticles = 'false';
  					this.bgTransparent = 'false';
					this.shadow = 'false';
  					this.eraser = 'disabled';
  					this.opacity = 1.0;
  					this.size = 7;
  					
  					this.tips = function() {
  					
  						alert('1) Right click to enable the eraser.\n' +
  						'2) For touch devices, use double tap to erase.\n' +
  						'3) For saving, press ctrl+s.');
  					
  					};
  					
  					this.clear = function() { 
  						  						  					
  						$(this).changeValue('clear');
  					
  					};
  					
  					this.save = function() { 
  						  						  					
  						$(this).changeValue('save');
  					
  					};
   				
				};

				window.onload = function() {
			
  					var paint = new PaintApp();
  			
  					var GUI = new dat.GUI();
  					  				
  					var mode = GUI.add(paint, 'mode', ['simplePen', 'smoothPen', 'dashed', 'squirt', 'spray', 'colorful']);
  					var background = GUI.addFolder('background');
  					var backgroundColor = background.addColor(paint, 'bgColor');
  					var color = GUI.addColor(paint, 'color');
  					var particlesAlpha = GUI.add(paint, 'particlesAlpha', 0.05, 0.5);
  					var freeParticles = GUI.add(paint, 'freeParticles', ['false', 'true']);
  					var backgroundTransparent = background.add(paint, 'bgTransparent', ['false', 'true']);
					var shadow = GUI.add(paint, 'shadow', ['false', 'true']);
  					var eraser = GUI.add(paint, 'eraser', ['disabled', 'enabled']);
  					var opacity = GUI.add(paint, 'opacity', 0.1, 1.0);
  					var size = GUI.add(paint, 'size', 1, 100);
  					
  					GUI.add(paint, 'tips');
  					GUI.add(paint, 'clear');
  					GUI.add(paint, 'save');

					background.open();
					  			
  					mode.onChange(function(value) {

  						$(this).changeValue('mode', value);
				
  					});
  
  					backgroundColor.onChange(function(value) {

  						$(this).changeValue('backgroundColor', value);
				
  					});
  
  					color.onChange(function(value) {

  						$(this).changeValue('color', value);
			
  					});
  					
  					particlesAlpha.onChange(function(value) {

  						$(this).changeValue('alpha', value);
			
  					});
  					
  					freeParticles.onChange(function(value) {

  						$(this).changeValue('freeParticles', value);
			
  					});
  					
  					backgroundTransparent.onChange(function(value) {

  						$(this).changeValue('backgroundTransparent', value);
			
  					});
					
					shadow.onChange(function(value) {

  						$(this).changeValue('shadow', value);
			
  					});
  					
  					eraser.onChange(function(value) {

  						$(this).changeValue('eraser', value);
			
  					});
  					
  					opacity.onChange(function(value) {

  						$(this).changeValue('transparent', value);
			
  					});
  					
  					size.onChange(function(value) {

  						$(this).changeValue('size', value);
		
  					});
  
  				}
			
			});    
    
})(jQuery);