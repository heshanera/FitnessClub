(function($) {
	
	'use strict';
	
	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
		any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};

	
	$(document).ready(function(e) {
		
		// global
		var Modernizr = window.Modernizr;
		
		// support for CSS Transitions & transforms
		var support = Modernizr.csstransitions && Modernizr.csstransforms;
		var support3d = Modernizr.csstransforms3d;
		// transition end event name and transform name
		// transition end event name
		var transEndEventNames = {
								'WebkitTransition' : 'webkitTransitionEnd',
								'MozTransition' : 'transitionend',
								'OTransition' : 'oTransitionEnd',
								'msTransition' : 'MSTransitionEnd',
								'transition' : 'transitionend'
							},
		transformNames = {
						'WebkitTransform' : '-webkit-transform',
						'MozTransform' : '-moz-transform',
						'OTransform' : '-o-transform',
						'msTransform' : '-ms-transform',
						'transform' : 'transform'
					};
					
		if( support ) {
			this.transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ] + '.PMMain';
			this.transformName = transformNames[ Modernizr.prefixed( 'transform' ) ];
			//console.log('this.transformName = ' + this.transformName);
		}

		runParallax();
		
		
	/* ==========================================================================
	   Remove sf-menu class for mobile displays to prevent meanmenu conflict
	   ========================================================================== */
		if( $(window).width() < 1200 ){
			$('.pm-nav').removeClass('sf-menu');
		}
		
	/* ==========================================================================
	   Initialize Twitterfetch
	   ========================================================================== */
	   if( typeof twitterFetcher != 'undefined'  ){
		   //Update the '330034190164819968' with your Twitter widget ID number. Instructions can be found here -> http://www.dezzain.com/tutorials/easy-twitter-feeds-with-javascript/
		   
		   
		   
		   var twitterConfig = {
			  "id": '330034190164819968',
			  "domId": 'pm-twitter-news',
			  "maxTweets": 3,
			  "enableLinks": false,
			  "showUser": false,
			  "showTime": false,
			  "dateFunction": '',
			  "showRetweet": true,
			  "customCallback": handleTweets,
			  "showInteraction": true,
			};
						
			twitterFetcher.fetch(twitterConfig);
		   
	   }
	   
	   function handleTweets(tweets){
				
			//console.log('twitterFetcher active');
			
			var x = tweets.length;
			var n = 0;
			var element = document.getElementById('pm-twitter-news');
			var html = '<ul>';
			while(n < x) {
			  html += '<li><div class="tweet_container">' + tweets[n] + '</div></li>';
			  n++;
			}
			html += '</ul>';
			element.innerHTML = html;
		}
	
		
		
		
		
	/* ==========================================================================
	   Initialize animations
	   ========================================================================== */
		animateMilestones();
		animateProgressBars();
		//animatePieCharts();
		//setDimensionsPieCharts();
		
		
	/* ==========================================================================
	   Initialize WOW plugin for element animations
	   ========================================================================== */
		if( $(window).width() > 991 ){
			new WOW().init();
		}
		
		
	/* ==========================================================================
	   animateMilestones
	   ========================================================================== */
	
		function animateMilestones() {
	
			$(".milestone:in-viewport").each(function() {
				
				var $t = $(this);
				var	n = $t.find(".milestone-value").attr("data-stop");
				var	r = parseInt($t.find(".milestone-value").attr("data-speed"));
					
				if (!$t.hasClass("already-animated")) {
					$t.addClass("already-animated");
					$({
						countNum: $t.find(".milestone-value").text()
					}).animate({
						countNum: n
					}, {
						duration: r,
						easing: "linear",
						step: function() {
							$t.find(".milestone-value").text(Math.floor(this.countNum));
						},
						complete: function() {
							$t.find(".milestone-value").text(this.countNum);
						}
					});
				}
				
			});
	
		}
		
	/* ==========================================================================
	   animateProgressBars
	   ========================================================================== */
	
		function animateProgressBars() {
				
			$(".pm-progress-bar .pm-progress-bar-outer:in-viewport").each(function() {
				
				var $t = $(this),
				progressID = $t.attr('id'),
				numID = progressID.substr(progressID.lastIndexOf("-") + 1),
				targetDesc = '#pm-progress-bar-desc-' + numID,
				$target = $(targetDesc).find('span'),
				$diamond = $(targetDesc).find('.pm-progress-bar-diamond'),
				dataWidth = $t.attr("data-width");
								
				
				if (!$t.hasClass("already-animated")) {
					
					$t.addClass("already-animated");
					$t.animate({
						width: dataWidth + "%"
					}, 2000);
					$target.animate({
						"left" : dataWidth + "%",
						"opacity" : 1
					}, 2000);
					$diamond.animate({
						"left" : dataWidth + "%",
						"opacity" : 1
					}, 2000);
					
				}
				
			});
	
		}
		
		
		
	/* ==========================================================================
	   Store item thumbs
	   ========================================================================== */
	   if( $(".pm-woocomm-item-thumbs").length > 0 ){
			
			$(".pm-woocomm-item-thumbs").children().each(function(index, element) {
				
				 var $this = $(element),
				 span = $this.find('span'),
				 icon = $this.find('i');
				 
				 $this.hover(function(e) {
					 
					 span.css({
						'height' : 150 
					 });
					 
					 icon.css({
						'opacity' : 1 
					 });
					 
				 }, function(e) {
					 
					 span.css({
						'height' : 0 
					 });
					 
					 icon.css({
						'opacity' : 0 
					 });
					 
				 });
				
			});
			
	   }
		
	/* ==========================================================================
	   Store post item
	   ========================================================================== */
	   if( $(".pm-store-item-container").length > 0 ){
			
			$(".pm-store-item-container").each(function(index, element) {
				
				 var $this = $(element),
				 expandBtn = $this.find('.pm-store-item-diamond-btn'),
				 diamondShadow = $this.find('.pm-store-item-diamond-shadow'),
				 diamond = $this.find('.pm-store-item-diamond'),
				 closeBtn = $this.find('.pm-store-item-close-btn'),
				 info = $this.find('.pm-store-item-add-to-cart-container');
				 
				 expandBtn.click(function(e) {
					 
					 e.preventDefault();
					 
					 expandBtn.css({
						'opacity' : 0
					 });
					 
					 diamondShadow.css({
						'opacity' : 0
					 });
					 
					 diamond.css({
						'opacity' : 0
					 });
					 
					 info.css({
						'opacity' : 1,
						'bottom' : 0
					 });
					 
				 });
				 
				 closeBtn.click(function(e) {
					 
					 e.preventDefault();
					 
					 expandBtn.css({
						'opacity' : 1
					 });
					 
					 diamondShadow.css({
						'opacity' : 1
					 });
					 
					 diamond.css({
						'opacity' : 1
					 });
					 
					 info.css({
						'opacity' : 0,
						'bottom' : -250
					 });
					 
				 });
				
			});
			   
	   }
		
	/* ==========================================================================
	   Schedule post item
	   ========================================================================== */
	   if( $(".pm-schedule-post-container").length > 0 ){
			
			$(".pm-schedule-post-container").each(function(index, element) {
				
				 var $this = $(element),
				 expandBtn = $this.find('.pm-schedule-post-expand-btn'),
				 info = $this.find('.pm-schedule-post-info'),
				 excerpt = $this.find('.excerpt'),
				 viewBtn = $this.find('.schedule-btn'),
				 isActive = false;
				 
				 expandBtn.click(function(e) {
					 
					 e.preventDefault();
					 
					 if(!isActive){
						 
						 isActive = true;
						 
						 expandBtn.removeClass('fa fa-chevron-up').addClass('fa fa-close');
						 
						 info.css({
							'top' : 0	 
						 });
						 
						 excerpt.css({
							'opacity' : 1	 
						 });
						 
						 viewBtn.css({
							'opacity' : 1	 
						 });
						 
					 } else {
						 
						 isActive = false;
						 
						 expandBtn.removeClass('fa fa-close').addClass('fa fa-chevron-up');
						 
						 info.css({
							'top' : 160	 
						 });
						 
						 excerpt.css({
							'opacity' : 0	 
						 });
						 
						 viewBtn.css({
							'opacity' : 0	 
						 });
						 
					 }
					 
					 
				 });
				
			});
			   
	   }
		
	/* ==========================================================================
	   Gallery post item
	   ========================================================================== */
	   if( $(".pm-gallery-post-container").length > 0 ){
			
			$(".pm-gallery-post-container").each(function(index, element) {
				
				var $this = $(element),
				expandBtn = $this.find('.pm-expand-gallery-post'),
				title = $this.find('.pm-gallery-post-title-container'),
				likeShadow = $this.find('.pm-gallery-post-like-diamond-shadow'),
				likeDiamond = $this.find('.pm-gallery-post-like-diamond'),
				likeBtn = $this.find('.pm-gallery-post-like-btn'),
				likeCounter = $this.find('.pm-gallery-post-like-counter'),
				details = $this.find('.pm-gallery-post-details'),
				closeBtn = $this.find('.pm-gallery-post-close');
				
				expandBtn.click(function(e) {
					
					e.preventDefault();
										
					title.css({
						'left' : -200	
					});
					
					likeShadow.css({
						'opacity' : 0
					});
					
					likeDiamond.css({
						'opacity' : 0
					});
					
					likeBtn.css({
						'opacity' : 0
					});
					
					likeCounter.css({
						'opacity' : 0
					});
					
					details.css({
						'opacity' : 1
					});
					
				});
				
				closeBtn.click(function(e) {
											
					e.preventDefault();
				
					title.css({
						'left' : 0	
					});
					
					likeShadow.css({
						'opacity' : 1
					});
					
					likeDiamond.css({
						'opacity' : 1
					});
					
					likeBtn.css({
						'opacity' : 1
					});
					
					likeCounter.css({
						'opacity' : 1
					});
					
					details.css({
						'opacity' : 0
					});
					
				});				
				
			});
			
	   }
		
	/* ==========================================================================
	   Class post item
	   ========================================================================== */
	   if( $(".pm-class-post").length > 0 ){
			
			$(".pm-class-post").each(function(index, element) {
				
				var $this = $(element),
				btn = $this.find('.pm-class-post-details-btn'),
				container = $this.find('.pm-class-post-details-container'),
				divider = $this.find('.pm-class-post-divider'),
				excerpt = $this.find('.excerpt'),
				readMore = $this.find('.pm-square-btn'),
				isActive = false;
				
				btn.click(function(e) {
					
					e.preventDefault();
					
					if(!isActive){
						
						isActive = true;
						
						btn.removeClass('fa fa-chevron-up').addClass('fa fa-chevron-down');
						
						container.css({
							'top' : 0	
						});
						
						divider.css({
							'width' : 90	
						});
						
						excerpt.css({
							'opacity' : 1	
						});
						
						readMore.css({
							'opacity' : 1	
						});
						
					} else {
						
						isActive = false;
						
						btn.removeClass('fa fa-chevron-down').addClass('fa fa-chevron-up');
					
						container.css({
							'top' : 260	
						});
						
						divider.css({
							'width' : 0	
						});
						
						excerpt.css({
							'opacity' : 0		
						});
						
						readMore.css({
							'opacity' : 0		
						});
					
					}
					
				});
				
			});
			
	   }
		
	/* ==========================================================================
	   Staff profile item
	   ========================================================================== */
	   if( $(".pm-staff-profile-item-container").length > 0 ){
			  
			$(".pm-staff-profile-item-container").each(function(index, element) {
                
				var $this = $(element);
				
				var profileBtn = $this.find('.pm-staff-profile-item-details-btn'),
				profileDetails = $this.find('.pm-staff-profile-item-details'),
				excerpt = $this.find('.pm-staff-profile-item-excerpt'),
				divider = $this.find('.pm-staff-profile-item-details-divider'),
				viewProfile = $this.find('.pm-staff-profile-item-view-profile'),
				isActive = false;
				
				profileBtn.click(function(e) {
					
					e.preventDefault();
					
					if(!isActive){
						
						isActive = true;
						
						profileDetails.css({
							'top' : 0	
						});
						
						excerpt.css({
							'opacity' : 1	
						});
						
						divider.css({
							'opacity' : 1,
							'width' : 100
						});
						
						viewProfile.css({
							'opacity' : 1,
						});
						
						profileBtn.removeClass('fa fa-chevron-up').addClass('fa fa-chevron-down');
						
					} else {
						
						isActive = false;
						
						profileDetails.css({
							'top' : 260	
						});
						
						excerpt.css({
							'opacity' : 0	
						});
						
						divider.css({
							'opacity' : 0,
							'width' : 0
						});
						
						viewProfile.css({
							'opacity' : 0,
						});
						
						profileBtn.removeClass('fa fa-chevron-down').addClass('fa fa-chevron-up');
							
					}
                    
					
                });
				
            });
			   
	   }
		
		
	/* ==========================================================================
	   Testimonials carousel (homepage)
	   ========================================================================== */
	   if( $("#pm-testimonials-carousel").length > 0 ){
			  
			$("#pm-testimonials-carousel").PMTestimonials({
				speed : 500,
				slideShow : true,
				slideShowSpeed : 7000,
				controlNav : false,
				arrows : true	
			});
			   
	   }
		
	/* ==========================================================================
	   Brand carousel (homepage)
	   ========================================================================== */
	   if( $("#pm-brands-carousel").length > 0 ){
		   
		    var owl = $("#pm-brands-carousel");
			var isPlaying = false;
		   
		    owl.owlCarousel({
				
				items : 4, //10 items above 1000px browser width
				itemsDesktop : [5000,4],
				itemsDesktopSmall : [991,2],
				itemsTablet: [767,2],
				itemsTabletSmall: [720,1],
				itemsMobile : [320,1],
				
				//Pagination
				pagination : false,
				paginationNumbers: false,
				
		   });
		   
		    // Custom Navigation Events
			$(".pm-owl-next").click(function(){
				owl.trigger('owl.next');
			})
			$(".pm-owl-prev").click(function(){
				owl.trigger('owl.prev');
			})
			
			//Uncomment this to Autoplay the carousel on page load
			/*owl.trigger('owl.play',3000);
			$("#pm-owl-play").removeClass('fa fa-play').addClass('fa fa-stop');
			isPlaying = true;*/
				
			$("#pm-owl-play").click(function(){
				
				if(!isPlaying){
					isPlaying = true;
					$(this).removeClass('fa fa-play').addClass('fa fa-stop');
					owl.trigger('owl.play',3000); //owl.play event accept autoPlay speed as second parameter
				} else {
					isPlaying = false;
					$(this).removeClass('fa fa-stop').addClass('fa fa-play');
					owl.trigger('owl.stop');
				}
				
				
			});
			
			//Hover interaction
			
			
			$('.pm-brand-item').hover(function(e) {
				
				var span = $(this).find('span'),
				aTag = $(this).find('a');
								
				span.css({
					'height' : 70	
				});
				
				aTag.css({
					'bottom' : 20	
				});
				
			}, function(e) {
				
				var span = $(this).find('span'),
				aTag = $(this).find('a');
				
				span.css({
					'height' : 0	
				});
				
				aTag.css({
					'bottom' : -30	
				});
				
			});
				
		   
	   }
		
	/* ==========================================================================
	   Flexslider (homepage)
	   ========================================================================== */
	   if( $("#pm-flexslider-home").length > 0 ){
		   
		   $("#pm-flexslider-home").flexslider({
				animation:"slide", 
				controlNav: false, 
				directionNav: true, 
				animationLoop: true, 
				slideshow: false, 
				arrows: true, 
				touch: false, 
				prevText : "", 
				nextText : "",
				start : function() {
					$('.flex-direction-nav').find('li').eq(0).append('<div class="flex-prev-shadow" />');
					$('.flex-direction-nav').find('li').eq(1).append('<div class="flex-next-shadow" />');
				},
			});
		   
	   }
		
	/* ==========================================================================
	   PrettyPhoto activation
	   ========================================================================== */
	  if( $("a[data-rel^='prettyPhoto']").length > 0 ){
		  							
			$("a[data-rel^='prettyPhoto']").prettyPhoto({
				animation_speed: 'normal', /* fast/slow/normal */
				slideshow: 5000, /* false OR interval time in ms */
				autoplay_slideshow: false, /* true/false */
				opacity: 0.80, /* Value between 0 and 1 */
				show_title: true, /* true/false */
				//allow_resize: true, /* Resize the photos bigger than viewport. true/false */
				//default_width: 640,
				//default_height: 480,
				counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
				theme: 'dark_square', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
				horizontal_padding: 20, /* The padding on each side of the picture */
				hideflash: true, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
				wmode: 'opaque', /* Set the flash wmode attribute */
				autoplay: true, /* Automatically start videos: True/False */
				modal: false, /* If set to true, only the close button will close the window */
				deeplinking: true, /* Allow prettyPhoto to update the url to enable deeplinking. */
				overlay_gallery: true, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
				keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
				changepicturecallback: function(){}, /* Called everytime an item is shown/changed */
				
			});
			
		}	
	   
	/* ==========================================================================
	   MeanMenu (mobile menu)
	   ========================================================================== */
	    $('#pm-main-navigation').meanmenu({
			/*meanMenuContainer: '#pm-mobile-menu-container',*/
			meanScreenWidth : 	"1200",
			meanRevealPositionDistance: "0",
			meanShowChildren: true,
			meanExpandableChildren: true,
			meanExpand: "+",
			meanMenuCloseSize: "18px"
		});
		
	/* ==========================================================================
	   Testimonials widget
	   ========================================================================== */
	   if( $('.pm-testimonials-widget-quotes').length > 0 ){
		   
		    $('.pm-testimonials-widget-quotes').PMTestimonials({
				speed : 450,
				slideShow : true,
				slideShowSpeed : 6000,
				controlNav : false,
				arrows : true
			});
		   
	   }
		
	/* ==========================================================================
	   Homepage slider
	   ========================================================================== */
		if($('#pm-slider').length > 0){
						
			$('#pm-slider').PMSlider({
				speed : 700,
				easing : 'ease',
				loop : true,
				controlNav : true, //false = no bullets / true = bullets
				controlNavThumbs : true,
				animation : 'slide',
				fullScreen : false,
				slideshow : true,
				slideshowSpeed : 7000,
				pauseOnHover : true,
				arrows : true,
				fixedHeight : true,
				fixedHeightValue : 945,
				touch : true,
				progressBar : false
			});
			
		}
		
	/* ==========================================================================
	   Detect page scrolls on buttons
	   ========================================================================== */
		if( $('.pm-page-scroll').length > 0 ){
			
			$('.pm-page-scroll').click(function(e){
								
				e.preventDefault();
				var $this = $(e.target);
				var sectionID = $this.attr('href');
				
				
				$('html, body').animate({
					scrollTop: $(sectionID).offset().top - 80
				}, 1000);
				
			});
			
		}
		
	
		
	/* ==========================================================================
	   Datepicker
	   ========================================================================== */
	   if($("#datepicker").length > 0){
		   $("#datepicker").datepicker();
	   }
	   
		
	/* ==========================================================================
	   Isotope menu expander (mobile only)
	   ========================================================================== */
	   if($('.pm-isotope-filter-system-expand').length > 0){
		   
		   var totalHeight = 0;
		   
		   $('.pm-isotope-filter-system-expand').click(function(e) {
			   
			   var $this = $(this),
			   $parentUL = $this.parent('ul');
			   			   
			   //get the height of the total li elements
			   $parentUL.children('li').each(function(index, element) {
					totalHeight += $(this).height() + 5;
			   });
			   			   
			   if( !$parentUL.hasClass('expanded') ){
				   
				    //expand the menu
					$parentUL.addClass('expanded');
				   				  
				    $parentUL.css({
					  "height" : totalHeight	  
				    });
					
					$this.find('i').removeClass('fa-angle-down').addClass('fa-close');
				   
			   } else {
				
					//close the menu
					$parentUL.removeClass('expanded');
				   				  
				    $parentUL.css({
					  "height" : 94
				    });
					
					$this.find('i').removeClass('fa-close').addClass('fa-angle-down');
									   
			   }
			   
			   //reset totalheight
			   totalHeight = 0;
			   
		   });
		   
		   
		   $('.pm-isotope-filter-system').children().each(function(i,e) {
						
				if(i > 0){
					
					//add click functionality
					$(e).find('a').click(function(e) {
						
						e.preventDefault();
																	
						
											
						
						if( $(window).width() < 991 ){
							//Capture parent li index for list reordering
							var listItem = $(this).closest('li');
							var listItemIndex = $(this).closest('li').index();
							console.log( "Index: " +  listItemIndex );
							
							//$('.pm-isotope-filter-system').insertAfter(listItem, $('.pm-isotope-filter-system').find("li").index(0));
							
							$('.pm-isotope-filter-system').find("li").eq(0).after(listItem);
						}
											
					});
					
				}
							
				
			});
		   
		   
	   }//end of if
		
		
	/* ==========================================================================
	   Language Selector drop down
	   ========================================================================== */
		if($('.pm-dropdown.pm-language-selector-menu').length > 0){
			$('.pm-dropdown.pm-language-selector-menu').on('mouseover', methods.dropDownMenu).on('mouseleave', methods.dropDownMenu);
		}
		
	/* ==========================================================================
	   Filter system drop down
	   ========================================================================== */
		if($('.pm-dropdown.pm-filter-system').length > 0){
			$('.pm-dropdown.pm-filter-system').on('mouseover', methods.dropDownMenu).on('mouseleave', methods.dropDownMenu);
		}
		

		
	/* ==========================================================================
	   Main menu interaction
	   ========================================================================== */
		if( $('.pm-nav').length > 0 ){
						
			if( $(window).width() > 1200 ){
				
				//superfish activation
				$('.pm-nav').superfish({
					delay: 0,
					animation: {opacity:'show',height:'show'},
					speed: 300,
					dropShadows: false,
				});
				
			}
			
			$('.sf-sub-indicator').html('<i class="fa fa-angle-down"></i>');
			
			$('.sf-menu ul .sf-sub-indicator').html('<i class="fa fa-angle-right"></i>');
						
		};	
		
	/* ==========================================================================
	   Checkout expandable forms
	   ========================================================================== */
		if ($('#pm-returning-customer-form-trigger').length > 0){
			
			var $returningFormExpanded = false;
			
			$('#pm-returning-customer-form-trigger').on('click', function(e) {
				
				e.preventDefault();
				
				if( !$returningFormExpanded ) {
					$returningFormExpanded = true;
					$('#pm-returning-customer-form').fadeIn(700);
					
				} else {
					$returningFormExpanded = false;
					$('#pm-returning-customer-form').fadeOut(300);
				}
				
			});
			
		}
		
		if ($('#pm-promotional-code-form-trigger').length > 0){
			
			var $promotionFormExpanded = false;
			
			$('#pm-promotional-code-form-trigger').on('click', function(e) {
				
				e.preventDefault();
				
				if( !$promotionFormExpanded ) {
					$promotionFormExpanded = true;
					$('#pm-promotional-code-form').fadeIn(700);
					
				} else {
					$promotionFormExpanded = false;
					$('#pm-promotional-code-form').fadeOut(300);
				}
				
			});
			
		}

				
	/* ==========================================================================
	   isTouchDevice - return true if it is a touch device
	   ========================================================================== */
	
		function isTouchDevice() {
			return !!('ontouchstart' in window) || ( !! ('onmsgesturechange' in window) && !! window.navigator.maxTouchPoints);
		}
				
		
		//dont load parallax on mobile devices
		function runParallax() {
			
			//enforce check to make sure we are not on a mobile device
			if( !isMobile.any()){
							
				//stellar parallax
				$.stellar({
				  horizontalOffset: 0,
				  verticalOffset: 0,
				  horizontalScrolling: false,
				});
				
				$('.pm-parallax-panel').stellar();
								
			}
			
		}//end of function
		
	/* ==========================================================================
	   Checkout form - Account password activation
	   ========================================================================== */
	   
	   if( $('#pm-create-account-checkbox').length > 0){
			  			
			$('#pm-create-account-checkbox').change(function(e) {
				
				if( $('#pm-create-account-checkbox').is(':checked') ){
					
					$('#pm-checkout-password-field').fadeIn(500);
					
				} else {
					$('#pm-checkout-password-field').fadeOut(500);	
				}
				
			});
			   
	   }
	   
	   
	 /* ==========================================================================
	   Accordion and Tabs
	   ========================================================================== */
	   
	    $('#accordion').collapse({
		  toggle: false
		})
	    $('#accordion2').collapse({
		  toggle: false
		})
	   
		if($('.panel-title').length > 0){
			
			var $prevItem = null;
			var $currItem = null;
			
			$('.pm-accordion-link').click(function(e) {
				
				var $this = $(this);
				
				if($prevItem == null){
					$prevItem = $this;
					$currItem = $this;
				} else {
					$prevItem = $currItem;
					$currItem = $this;
				}				
				
				
				if( $currItem.attr('href') != $prevItem.attr('href') ) {
										
					//toggle previous item
					if( $prevItem.parent().find('i').hasClass('fa fa-minus') ){
						$prevItem.parent().find('i').removeClass('fa fa-minus').addClass('fa fa-plus');
					}
					
					$currItem.parent().find('i').removeClass('fa fa-plus').addClass('fa fa-minus');
					
				} else if($currItem.attr('href') == $prevItem.attr('href')) {
										
					//else toggle same item
					if( $currItem.parent().find('i').hasClass('fa fa-minus') ){
						$currItem.parent().find('i').removeClass('fa fa-minus').addClass('fa fa-plus');
					} else {
						$currItem.parent().find('i').removeClass('fa fa-plus').addClass('fa fa-minus');
					}
						
				} else {
					
					//console.log('toggle current item');
					$currItem.parent().find('i').removeClass('fa fa-plus').addClass('fa fa-minus');
					
				}
				
				
			});

			
		}

		
	/* ==========================================================================
	   When the window is scrolled, do
	   ========================================================================== */
		$(window).scroll(function () {
			
			animateMilestones();
			animateProgressBars();
			
			//toggle fixed nav
			if( $(window).width() > 991 ){
				
				if ($(this).scrollTop() > 47) {
					
					$('header').addClass('fixed');
									
				} else {
					
					$('header').removeClass('fixed');
										
				}
			
			}
						
		});
		
	/* ==========================================================================
	   Detect page scrolls on buttons
	   ========================================================================== */
		if( $('.pm-page-scroll').length > 0 ){
			
			$('.pm-page-scroll').click(function(e){
								
				e.preventDefault();
				var $this = $(e.target);
				var sectionID = $this.attr('href');
				
				
				$('html, body').animate({
					scrollTop: $(sectionID).offset().top - 80
				}, 1000);
				
			});
			
		}

	
	/* ==========================================================================
	   Back to top button
	   ========================================================================== */
		$('#pm-back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
		
	/* ==========================================================================
	   Accordion menu
	   ========================================================================== */
		if($('#accordionMenu').length > 0){
			$('#accordionMenu').collapse({
				toggle: false,
				parent: false,
			});
		}
		
		
	/* ==========================================================================
	   Tab menu
	   ========================================================================== */
		if($('.pm-nav-tabs').length > 0){
			//actiavte first tab of tab menu
			$('.pm-nav-tabs a:first').tab('show');
			$('.pm-nav-tabs li:first-child').addClass('active');
		}

	/* ==========================================================================
	   Parallax check
	   ========================================================================== */
		var $window = $(window);
		var $windowsize = 0;
		
		function checkWidth() {
			$windowsize = $window.width();
			if ($windowsize < 980) {
				//if the window is less than 980px, destroy parallax...
				$.stellar('destroy');
			} else {
				runParallax();	
			}
		}
		
		// Execute on load
		checkWidth();
		// Bind event listener
		$(window).resize(checkWidth);

		
	/* ==========================================================================
	   Window resize call
	   ========================================================================== */
		$(window).resize(function(e) {
			methods.windowResize();
		});

		
	/* ==========================================================================
	   Search button
	   ========================================================================== */
		if( $('#pm-search-btn').length > 0 ){
						
			var $searchBtn = $('#pm-search-btn');
			
			$searchBtn.click(function(e) {
				
				//Close any exisiting expandable menus first
				methods.hideHours();
				methods.hideAddress();
				methods.hideSearch();
				
				//CALL METHODS FUNCTION
				methods.displaySearch();
								
				$('#pm-search-exit').click(function(e) {
					methods.hideSearch();
				});
											
				e.preventDefault();
			
			});
			
		}
		
	/* ==========================================================================
	   Address button
	   ========================================================================== */
		if( $('#pm-location-btn').length > 0 ){
						
			var $locationBtn = $('#pm-location-btn');
			
			$locationBtn.click(function(e) {
				
				//Close any exisiting expandable menus first
				methods.hideHours();
				methods.hideAddress();
				methods.hideSearch();
				
				//CALL METHODS FUNCTION
				methods.displayAddress();
								
				$('#pm-address-exit').click(function(e) {
					methods.hideAddress();
				});
											
				e.preventDefault();
			
			});
			
		}
		
	/* ==========================================================================
	   Hours button
	   ========================================================================== */
		if( $('#pm-hours-btn').length > 0 ){
						
			var $hoursBtn = $('#pm-hours-btn');
			
			$hoursBtn.click(function(e) {
				
				//Close any exisiting expandable menus first
				methods.hideHours();
				methods.hideAddress();
				methods.hideSearch();
				
				//CALL METHODS FUNCTION
				methods.displayHours();
								
				$('#pm-hours-exit').click(function(e) {
					methods.hideHours();
				});
											
				e.preventDefault();
			
			});
			
		}
		
	/* ==========================================================================
	   Tooltips
	   ========================================================================== */
		if( $('.pm_tip').length > 0 ){
			$('.pm_tip').PMToolTip();
		}
		if( $('.pm_tip_static_bottom').length > 0 ){
			$('.pm_tip_static_bottom').PMToolTip({
				floatType : 'staticBottom'
			});
		}
		if( $('.pm_tip_static_top').length > 0 ){
			$('.pm_tip_static_top').PMToolTip({
				floatType : 'staticTop'
			});
		}
		
	/* ==========================================================================
	   TinyNav
	   ========================================================================== 
		$("#pm-footer-nav").tinyNav();
		$("#pm-members-nav").tinyNav(); */
		
			
	}); //end of document ready

	
	/* ==========================================================================
	   Options
	   ========================================================================== */
		var options = {
			dropDownSpeed : 100,
			slideUpSpeed : 200,
			slideDownTabSpeed: 50,
			changeTabSpeed: 200,
		}
	
	/* ==========================================================================
	   Methods
	   ========================================================================== */
		var methods = {
	
			displaySearch : function(e) {
							
				var searchContainer = $("#pm-search-container");
				
				searchContainer.css({
					'height' : 50,
					'paddingTop' : 10,
					'borderBottom' : '1px solid #333' 
				});
				
			},
			
			hideSearch : function(e) {
				
				var searchContainer = $("#pm-search-container");
				
				searchContainer.css({
					'height' : 0,
					'paddingTop' : 0,
					'borderBottom' : '0px solid #f6d600' 
				});
				
			},
			
			displayAddress : function(e) {
							
				var addressContainer = $("#pm-address-container");
				
				addressContainer.css({
					'height' : 260,
					'borderBottom' : '1px solid #333' 
				});
				
			},
			
			hideAddress : function(e) {
				
				var addressContainer = $("#pm-address-container");
				
				addressContainer.css({
					'height' : 0,
					'borderBottom' : '0px solid #f6d600' 
				});
				
			},
			
			displayHours : function(e) {
							
				var hoursContainer = $("#pm-hours-container");
				
				var container = hoursContainer.find('.container');
				
				
				hoursContainer.css({
					'height' : container.height() + 30,
					'padding' : '15px 0',
					'borderBottom' : '1px solid #333' 
				});
				
			},
			
			hideHours : function(e) {
				
				var hoursContainer = $("#pm-hours-container");
				
				hoursContainer.css({
					'height' : 0,
					'padding' : '0',
					'borderBottom' : '0px solid #f6d600' 
				});
				
			},

			
			dropDownMenu : function(e){  
					
				var body = $(this).find('> :last-child');
				var head = $(this).find('> :first-child');
				
				if (e.type == 'mouseover'){
					body.fadeIn(options.dropDownSpeed);
				} else {
					body.fadeOut(options.dropDownSpeed);
				}
				
			},
			
					
			windowResize : function() {
				//resize calls
				
				if( $(window).width() < 1200 ){
					
					$('.pm-nav').removeClass('sf-menu');
					
				} else {
					$('.pm-nav').addClass('sf-menu');	
				}
				
			},
			
		};
		
	
	
})(jQuery);

