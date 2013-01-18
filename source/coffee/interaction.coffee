###
Coffee file for Geremy Good
###
#
$('document').ready ->
  ## constants
  navigation = $('nav')
  
  viewportHeight = $(window).height()
  ## console.log viewportHeight


  ## When you scroll
  $(window).scroll ->
    pixels = $(window).scrollTop()

    $('section').each ->
      $this = $(this)
      offset = $this.offset()
      height = $this.outerHeight()

      if pixels+(viewportHeight/2) > offset.top and pixels+(viewportHeight/2) < offset.top+height
        current = $this.index()
        $this.addClass 'active'
        $('nav ol li:nth-of-type('+current+')').addClass 'active'
        ## console.log current
        $('nav ol li:not(:nth-of-type('+current+'))').removeClass 'active'
        color = $('li.active a').css 'background-color'
        $('html').css
          'border-color' : color
      else
        $this.removeClass 'active' 

  $(document).bind 'keydown', (e) ->
    if e.keyCode is 38
      current = $('section.active').index()
      current = parseInt(current)
      $('nav ol li:nth-of-type('+(current-1)+') a').click()
    else if e.keyCode is 40
      current = $('section.active').index()
      current = parseInt(current)
      $('nav ol li:nth-of-type('+(current+1)+') a').click()
      
      

