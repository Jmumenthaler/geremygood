###
Coffee file for Geremy Good
###
#
$('document').ready ->
  ## constants
  navigation = $('nav')
  
  viewportHeight = $(window).height()
  ## console.log viewportHeight

  ## Don't play favorites with your friends and plugs
  $("#friends ul li").shuffle()
  $("#organizations ul li").shuffle()

  ## When you click navigation, scroll to section.
  $("nav ol a").click (e) ->
    e.preventDefault()
    destination = $(this).attr("href")
    destinationTop = $(destination).offset()
    $("html, body").animate scrollTop: destinationTop.top

  ## When you scroll, highlight relevant section
  $(window).scroll ->
    pixels = $(window).scrollTop()

    $('section, article').each ->
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
  
  ## Allow keys to navigate site
  $(document).bind 'keydown', (e) ->
    if e.keyCode is 38
      current = $('section.active, article.active').index()
      current = parseInt(current)
      $('nav ol li:nth-of-type('+(current-1)+') a').click()
    else if e.keyCode is 40
      current = $('section.active, article.active').index()
      current = parseInt(current)
      $('nav ol li:nth-of-type('+(current+1)+') a').click()
      
      



# Shuffle Function
(($) ->
  $.fn.shuffle = ->
    allElems = @get()
    getRandom = (max) ->
      Math.floor Math.random() * max

    shuffled = $.map(allElems, ->
      random = getRandom(allElems.length)
      randEl = $(allElems[random]).clone(true)[0]
      allElems.splice random, 1
      randEl
    )
    @each (i) ->
      $(this).replaceWith $(shuffled[i])

    $ shuffled
) jQuery

