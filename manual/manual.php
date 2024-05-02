<!<iframe 
    class="secured"
    style="width: 305px; height: 450px; border: none"
    src="./tail.php"
    title="secured" 
	frameborder="0" 
	allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
	allowfullscreen>
    <!</iframe>	
<?php
// php emulates a Vim text editor using webpage username input form
// pho emulates Vim script below using $handle,fopen,foreach,fwrite, and fclose.
// php handle opens folder named BLOB and creates file.
$handle = fopen("./en/manual.html", "a"); //open log use "a" to write and grow log no deletion or use "r+" writes 1 line to the log it also deletes log
// php interprets webpage input data $_POST as $variable => $value.
foreach($_POST as $variable => $value) { 
fwrite($handle, "<a href=" . "\"" . "./" . $value . ".html" . "\"" . ">" . $value ."</a></br></br>" . "\r\n");
$handle = fopen("./en/$value.html", "a");
fwrite($handle, "\n" . $value . "\r\n");
}
fclose($handle);
?>
<?php
// php confirms connection collects ip.
//$handle = $ip = $localIp = gethostbyname(gethostname());
// php handle opens file.
$handle = fopen("./manual.log", "a");
// php $foreach interprets user data from input form text and defines it as $_POST as $variable => $value.
foreach($_POST as $variable => $value) { 
fwrite($handle, "\n" . $value . "\r\n");
}
// php closes open file after edit.
fclose($handle);
?>
<?php
// php emulates a Vim text editor using webpage username input form
// pho emulates Vim script below using $handle,fopen,foreach,fwrite, and fclose.
// php handle opens folder named BLOB and creates file.
$handle = fopen("../index.html", "a"); //open log use "a" to write and grow log no deletion or use "r+" writes 1 line to the log it also deletes log
// php interprets webpage input data $_POST as $variable => $value.
foreach($_POST as $variable => $value) { 
fwrite($handle, "<img src=" . "\"" . "./" . "./bloom.jpg" . "\"" . ">" . $value ."</br>" . "\r\n");
}
fclose($handle);
?>
<?php
header_remove( 'X-Powered-By' );
header( 'Cache-control: none, no-cache, private, max-age=0' );
header( 'Pragma: no-cache' );
header( 'Content-Type-Options: nosniff' );
header( 'X-Content-Type-Options: nosniff' );
header( 'XSS-Protection: 1; mode=block' );
header( 'X-XSS-Protection: 1; mode=block' );
header( 'Vary: Accept-Encoding' );
header( 'viewport: width=device-width, initial-scale=1.0' );
header( 'Accept-Language: en-US,en;q=0.5' );
header( 'Connection: Keep-alive' );
header( 'Host: manual' );
header( 'description: manual' );
header( 'keywords: manual' );
header( 'Vary: Accept-Encoding' );
header( 'Expires: 0' );
header( 'Referrer-Policy:  no-referrer' );
?>
<!DOCTYPE html>
<!-- 
secured
 -->
<html lang="en">
	<head>
        <meta charset="utf-8">
					<meta http-equiv="Cache-Control" content="private, no-store, no-cache, must-revalidate, proxy-revalidate, max-age=0" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <link rel="icon" type="image/png" href="favicon.ico">
	    <title>manual</title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<link rel="shortcut icon" href="./files/favicon_white.ico" media="(prefers-color-scheme: dark)"/>
		<link rel="shortcut icon" href="./files/favicon.ico" media="(prefers-color-scheme: light)" />
		<link rel="stylesheet" type="text/css" href="./files/main.css">
 	    <!-- console sandbox -->
		<script type="module">
			import * as THREE from './build/three.module.js';
			window.THREE = THREE;
		</script>
</head>

<!<body="button" bgcolor="black" class="pagebutton" type="button" onclick="alert('Click next to confirm command.')">
<!<body bgcolor="black">
		<div id="panel">

			<div id="header">
				<h1><form action="./manual.php" method="post">	 
<input type="text" name="username" class="usernameInput" style="height: 50px;" style="text-align:left;" type="text" maxlength="14" autocomplete="false" autocorrect="off" autocapitalize="off" spellcheck="true" placeholder="search word creates page" />
</form></h1>

				<div id="sections">
				
				
				
			
					<span class="selected"><a href="./en/manual.html">search results</a></span>
					
				</div>

				
				
				<div id="expandButton">
				
				
				
				</div>
				
			</div>

			<div id="panelScrim"></div>

			
			
			<div id="contentWrapper">
				<div id="inputWrapper">
					<input placeholder="" type="text" id="filterInput" autocorrect="on" autocapitalize="off" spellcheck="true" />
					<div id="clearSearchButton"></div>
					<select id="language">
						<option value="en">en</option>
						<option value="fr">fr</option>
						<option value="ru">ru</option>
						<option value="ko">한국어</option>
						<option value="zh">中文</option>
						<option value="ja">日本語</option>
					</select>
				</div>
				<br/>
					<iframe 
    style="width: 420px; height: 0px; border: none"     
	frameborder="0" 
	allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
	allowfullscreen>
    </iframe>	
				<div id="content">
				
				</div>
			</div>

		</div>
	

		<iframe name="viewer"
         src="./en/manual.html"
		>
		</iframe>
	

		<script>

		const panel = document.querySelector( '#panel' );
		const content = document.querySelector( '#content' );
		const expandButton = document.querySelector( '#expandButton' );
		const clearSearchButton = document.querySelector( '#clearSearchButton' );
		const panelScrim = document.querySelector( '#panelScrim' );
		const filterInput = document.querySelector( '#filterInput' );
		let iframe = document.querySelector( 'iframe' );

		const pageProperties = {};
		const titles = {};
		const categoryElements = [];

		let navigation;

		init();

		async function init() {

			const list = await ( await fetch( './manual.json' ) ).json();

			const hash = window.location.hash.substring( 1 );

			// Localization

			let language = 'en';

			const hashLanguage = /^(.*?)\//.exec( hash );

			if ( hashLanguage ) {

				language = hashLanguage[ 1 ];

			}

			const languageSelect = document.querySelector( '#language' );
			languageSelect.value = language;
			languageSelect.addEventListener( 'change', function () {

				setLanguage( this.value );

			} );

			function setLanguage( value ) {

				language = value;

				createNavigation( list, language );
				updateFilter();
				autoChangeUrlLanguage( language );

			}

			// Functionality for hamburger button (on small devices)

			expandButton.onclick = function ( event ) {

				event.preventDefault();
				panel.classList.toggle( 'open' );

			};

			panelScrim.onclick = function ( event ) {

				event.preventDefault();
				panel.classList.toggle( 'open' );

			};


			// Functionality for search/filter input field

			filterInput.onfocus = function () {

				panel.classList.add( 'searchFocused' );

			};

			filterInput.onblur = function () {

				if ( filterInput.value === '' ) {

					panel.classList.remove( 'searchFocused' );

				}

			};

			filterInput.oninput = function () {

				updateFilter();

			};

			clearSearchButton.onclick = function () {

				filterInput.value = '';
				updateFilter();
				filterInput.focus();

			};

			// Activate content and title change on browser navigation

			window.onpopstate = function () {

				updateNavigation();
				createNewIframe();

			};

			// Create the navigation panel and configure the iframe

			createNavigation( list, language );
			createNewIframe();

			// Handle search query

			filterInput.value = extractQuery();

			if ( filterInput.value !== '' ) {

				panel.classList.add( 'searchFocused' );

				updateFilter();

			}

		}

		// Navigation Panel

		function createLink( pageName, pageURL ) {

			const link = document.createElement( 'a' );
			const url = new URL( pageURL, window.location.href );
			url.pathname += '.html';
			link.href = url.href;
			link.textContent = pageName;
			link.setAttribute( 'target', 'viewer' );
			link.addEventListener( 'click', function ( event ) {

				if ( event.button !== 0 || event.ctrlKey || event.altKey || event.metaKey ) return;

				window.location.hash = pageURL;
				panel.classList.remove( 'open' );

				updateNavigation();

			} );

			return link;

		}

		function createNavigation( list, language ) {

			if ( navigation !== undefined ) {

				content.removeChild( navigation );

			}

			// Create the navigation panel using data from list.js

			navigation = document.createElement( 'div' );
			content.appendChild( navigation );

			if ( language === 'ar' ) {

				navigation.style.direction = 'rtl';

			}

			const categories = list[ language ];
			const selectedPage = window.location.hash.substring( 1 ).replace( /\.html$/, '' );

			for ( const category in categories ) {

				// Create categories

				const pages = categories[ category ];

				const categoryContainer = document.createElement( 'div' );
				navigation.appendChild( categoryContainer );

				const categoryHead = document.createElement( 'h3' );
				categoryHead.textContent = category;
				categoryContainer.appendChild( categoryHead );

				const categoryContent = document.createElement( 'ul' );
				categoryContainer.appendChild( categoryContent );

				for ( const pageName in pages ) {

					// Create page links

					const pageURL = pages[ pageName ];

					// Localisation

					const listElement = document.createElement( 'li' );
					categoryContent.appendChild( listElement );

					const linkElement = createLink( pageName, pageURL );
					listElement.appendChild( linkElement );

					// select current page

					if ( pageURL === selectedPage ) {

						linkElement.classList.add( 'selected' );

					}

					// Gather the main properties for the current subpage

					pageProperties[ pageName ] = {
						category: category,
						pageURL: pageURL,
						linkElement: linkElement
					};

					// Gather the document titles (used for easy access on browser navigation)

					titles[ pageURL ] = pageName;

				}

				// Gather the category elements for easy access on filtering

				categoryElements.push( categoryContent );

			}

		}

		function updateNavigation() {

			const selectedPage = window.location.hash.substring( 1 ).replace( /\.html$/, '' );

			content.querySelectorAll( 'a' ).forEach( function ( item ) {

				if ( item.href.includes( selectedPage ) ) {

					item.classList.add( 'selected' );

				} else {

					item.classList.remove( 'selected' );

				}

			} );

		}

		// Auto change language url. If a reader open a document in English, when they click "zh", the document they read will auto change into Chinese version

		function autoChangeUrlLanguage( language ) {

			const hash = location.hash;
			if ( hash === '' ) return;
			const docLink = hash.slice( hash.indexOf( '/' ) );
			location.href = '#' + language + docLink;

		}

		// Filtering

		function extractQuery() {

			const search = window.location.search;

			if ( search.indexOf( '?q=' ) !== - 1 ) {

				return decodeURI( search.slice( 3 ) );

			}

			return '';

		}

		function updateFilter() {

			let v = filterInput.value.trim();
			v = v.replace( /\s+/gi, ' ' ); // replace multiple whitespaces with a single one

			if ( v !== '' ) {

				window.history.replaceState( {}, '', '?q=' + v + window.location.hash );

			} else {

				window.history.replaceState( {}, '', window.location.pathname + window.location.hash );

			}

			//

			const regExp = new RegExp( filterInput.value, 'gi' );

			for ( let pageName in pageProperties ) {

				const linkElement = pageProperties[ pageName ].linkElement;
				const categoryClassList = linkElement.parentElement.classList;
				const filterResults = pageName.match( regExp );

				if ( filterResults !== null && filterResults.length > 0 ) {

					pageName = pageName.replaceAll( regExp, '<b>$&</b>' );

					categoryClassList.remove( 'hidden' );
					linkElement.innerHTML = pageName;

				} else {

					// Hide all non-matching page names

					categoryClassList.add( 'hidden' );

				}

			}

			displayFilteredPanel();

		}

		function displayFilteredPanel() {

			// Show/hide categories depending on their content
			// First check if at least one page in this category is not hidden

			categoryElements.forEach( function ( category ) {

				const pages = category.children;
				const pagesLength = pages.length;
				const sectionClassList = category.parentElement.classList;

				let hideCategory = true;

				for ( let i = 0; i < pagesLength; i ++ ) {

					const pageClassList = pages[ i ].classList;

					if ( ! pageClassList.contains( 'hidden' ) ) {

						hideCategory = false;

					}

				}

				// If and only if all page names are hidden, hide the whole category

				if ( hideCategory ) {

					sectionClassList.add( 'hidden' );

				} else {

					sectionClassList.remove( 'hidden' );

				}

			} );

		}

		// Routing

		function setUrl( href ) { // eslint-disable-line no-undef

			// yea I know this is hacky.
			const re = /^(\/(?:manual\/|docs\/#?))(.*?)$/;
			const url = new URL( href );

			if ( url.origin === window.location.origin ) {

				const hrefNoOrigin = url.href.slice( url.origin.length );
				const m = re.exec( hrefNoOrigin );
				const [ , base, path ] = m;
				if ( base.includes( 'manual' ) ) {

 					const newHash = `#${ path.replace( '.html', '' ) }`;
					// Only create new iframe if we're actually changing pages.
					// We could just be going to an anchor on the same page.
					const newPrefix = newHash.split( '#' )[ 1 ];
					const oldPrefix = window.location.hash.split( '#' )[ 1 ];

					if ( newPrefix === oldPrefix ) {

						const newUrl = new URL( window.location.href );
						newUrl.hash = newHash;
						window.history.pushState( {}, '', newUrl.href );

					} else {

						window.location.hash = newHash;
						updateNavigation();
						createNewIframe();

					}

					return;

				}

			}

			window.location.href = href;

		}

		function setTitle( title ) { // eslint-disable-line no-undef

			document.title = `${title} - three.js manual`;

		}

		function createNewIframe() {

			// Change the content displayed in the iframe
			// First separate the member part of the fragment (if existing)

			const hash = window.location.hash.substring( 1 );
			const splitHash = decomposePageName( hash, '.', '#' );

			// Creating a new Iframe instead of assigning a new src is
			// a cross-browser solution to allow normal browser navigation;
			// - only assigning a new src would result in two history states each time.

			// Note: iframe.contentWindow.location.replace(hash) should work, too,
			// but it doesn't work in Edge with links from the subpages!

			const oldIframe = iframe;
			iframe = oldIframe.cloneNode();

			if ( hash ) {

				// We can have 2 hashes. One for the main page, one for the page it's referencing
				// In other words
				//	 #en/somePage#someSectionOfPage
				const subHash = splitHash[ 0 ].indexOf( '#' );
				let src;
				if ( subHash >= 0 ) {

					const beforeSubHash = splitHash[ 0 ].slice( 0, subHash );
					const afterSubHash = splitHash[ 0 ].slice( subHash );
					src = `${beforeSubHash}.html${afterSubHash}${splitHash[ 1 ]}`;
		
				} else {

					src = splitHash[ 0 ] + '.html' + splitHash[ 1 ];
		
				}

				iframe.src = src; // lgtm[js/client-side-unvalidated-url-redirection]
				iframe.style.display = 'unset';

			} else {

				iframe.src = '';
				iframe.style.display = 'none';

			}

			document.body.replaceChild( iframe, oldIframe );

		}

		function decomposePageName( pageName, oldDelimiter, newDelimiter ) {

			// Helper function for separating the member (if existing) from the pageName
			// For example: 'Geometry.morphTarget' can be converted to
			// ['Geometry', '.morphTarget'] or ['Geometry', '#morphTarget']
			// Note: According RFC 3986 no '#' allowed inside of an URL fragment!

			let parts = [];

			const dotIndex = pageName.indexOf( oldDelimiter );

			if ( dotIndex !== - 1 ) {

				parts = pageName.split( oldDelimiter );
				parts[ 1 ] = newDelimiter + parts[ 1 ];

			} else {

				parts[ 0 ] = pageName;
				parts[ 1 ] = '';

			}

			return parts;

		}

		//

		console.log( [
			'    __     __',
			' __/ __\\  / __\\__   ____   _____   _____',
			'/ __/  /\\/ /  /___\\/ ____\\/ _____\\/ _____\\',
			'\\/_   __/ /   _   / /  __/ / __  / / __  /_   __   _____',
			'/ /  / / /  / /  / /  / / /  ___/ /  ___/\\ _\\/ __\\/ _____\\',
			'\\/__/  \\/__/\\/__/\\/__/  \\/_____/\\/_____/\\/__/ /  / /  ___/',
			'                                         / __/  /  \\__  \\',
			'                                         \\/____/\\/_____/'
		].join( '\n' ) );

		</script>
	

	</body>
</html>

