document.addEventListener('click', function(e) {
                var map = document.querySelector('#map-wrap iframe')
                if(e.target.id === 'map-wrap') {
                    map.style.pointerEvents = 'all'
                } else {
                    map.style.pointerEvents = 'none'
                }
            })

  $('.multiple-items').slick({
  	infinite: true,
  	arrows: true,
  	draggable: true,
  	slidesToShow: 4,
  	slidesToScroll: 2,
  	responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2,
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	      }
	    }
    ]
   });
