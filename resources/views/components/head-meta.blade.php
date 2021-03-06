<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#ffad1f">

<meta property="og:title" content="{{ $seo['title'] ?? 'Yiddishe Kop Blog' }}">
<meta name="Description" content="{{ $seo['description'] ?? 'Articles about programming and software development.' }}">
<meta property="og:description"
  content="{{ $seo['description'] ?? 'Articles about programming and software development.' }}">
<meta property="og:image" content="{{ $seo['image'] ?? 'https://blog.yiddishe-kop.com/assets/images/cover.jpg' }}">
<meta property="og:url" content="https://blog.yiddishe-kop.com/">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seo['title'] ?? 'Yiddishe Kop Blog' }}">
<meta name="twitter:description"
  content="{{ $seo['description'] ?? 'Articles about programming and software development.' }}">
<meta name="twitter:image" content="{{ $seo['image'] ?? 'https://blog.yiddishe-kop.com/assets/images/cover.jpg' }}">

<link href="{{ mix('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
@stack('head')

@include('feed::links')

<script defer src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js" crossorigin="anonymous"></script>
<script>
  window.onload = function() { // runs the script when the page is loading
    	  twemoji.parse(document, { // parses the elements inside of #feed
  	    folder: 'svg', // sets it to render svgs
  	    ext: '.svg',
  	    callback: function(iconId, options) {
          	switch (iconId) { // ignores the copyright, registered trademark, and trademark symbols
              	  case 'a9':      // © copyright
              	  case 'ae':      // ® registered trademark
              	  case '2122':    // ™ trademark
                    return false;
                  }
                  return ''.concat(options.base, options.size, '/', iconId, options.ext); // actually renders the emoji
  	    }
  	  });
  	};
</script>
