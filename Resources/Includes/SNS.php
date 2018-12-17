<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="<?php echo(PROJECT_NAME); ?>" />
		<meta itemprop="description" content="<?php echo(PROJECT_DESCRIPTION); ?>" />
		<meta itemprop="image" content="<?php echo(SITE_URL); ?>/img/title.png" />
		<link rel="publisher" href="https://plus.google.com/GOOGLE_PLUS_PAGE_LINK" />

		<!-- Twitter Card data -->
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@TWITTER_SITE_HANDLE" />
		<meta name="twitter:title" content="<?php echo(PROJECT_NAME); ?>" />
		<meta name="twitter:description" content="<?php echo(PROJECT_DESCRIPTION); ?>" />
		<meta name="twitter:url" content="<?php echo(SITE_URL); ?>" />
		<meta name="twitter:creator" content="@TWITTER_AUTHOR_HANDLE" />
		<!-- Twitter summary card with large image must be at least 280x150px -->
		<meta name="twitter:image:src" content="<?php echo(SITE_URL); ?>/img/title.png" />

		<!-- Open Graph data -->
		<meta property="og:title" content="<?php echo(PROJECT_NAME); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo(SITE_URL); ?>/" />
		<meta property="og:image" content="<?php echo(SITE_URL); ?>/img/title.png" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image:alt" content="<?php echo(PROJECT_CATCHPHRASE); ?>" />
		<meta property="og:description" content="<?php echo(PROJECT_DESCRIPTION); ?>" />
		<meta property="og:locale" content="en_IN" />
		<meta property="og:locale:alternate" content="en_GB" />
		<meta property="og:locale:alternate" content="en_US" />
		<meta property="og:site_name" content="<?php echo(PROJECT_NAME); ?>" />
		<meta property="article:section" content="Recreation" />
		<meta property="article:tag" content="Recreation" />

		<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Organization",
			"name": "<?php echo(PROJECT_NAME); ?>",
			"@id": "<?php echo(SITE_URL); ?>",
			"url": "<?php echo(SITE_URL); ?>",
			"logo": "<?php echo(SITE_URL); ?>/img/logo.png",
			"sameAs": [
				"http://www.facebook.com/FACEBOOK_PAGE_LINK",
				"http://www.instagram.com/INSTAGRAM_PAGE_LINK",
				"http://www.twitter.com/TWITTER_PAGE_LINK",
				"http://plus.google.com/GOOGLE_PLUS_PAGE_LINK"
			],
			"telephone": "<?php echo(PROJECT_CONTACT_PHONE); ?>",
			/*"contactPoint": [
				{
					"@type": "ContactPoint",
					"telephone": "<?php echo(PROJECT_CONTACT_PHONE); ?>",
					"contactType": "customer service"
				}
			],*/
			"address": {
				"@type": "PostalAddress",
				"streetAddress": "MY_BUSINESS_LOCATION",
				"addressLocality": "MY_STREET, MY_AREA",
				"addressRegion": "MY_CITY",
				"postalCode": "MY_PIN",
				"addressCountry": "MY_COUNTRY"
			}
		}
		</script>
