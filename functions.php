<?php

$composer_autoload = __DIR__ . '/vendor/autoload.php';
if ( file_exists( $composer_autoload ) ) {
	require_once $composer_autoload;
	$timber = new Timber\Timber();
}

// Timber::$dirname = array( 'templates', 'views' );
Timber::$dirname = ['dist/templates'];

Timber::$autoescape = false;

class serveat extends Timber\Site {

	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'theme_supports' ) );
		add_filter( 'timber/context', array( $this, 'add_to_context' ) );
		add_filter( 'timber/twig', array( $this, 'add_to_twig' ) );
		add_action( 'init', array( $this, 'register_post_types' ) );
		add_action( 'init', array( $this, 'register_taxonomies' ) );
		parent::__construct();
	}

		/** This is where you can register custom post types. */
		public function register_post_types() {

			require get_template_directory() . '/homepost/custom-post-home.php';
			require get_template_directory() . '/solutionpost/custom-post-solution.php';

		}

        /** This is where you can register custom taxonomies. */
        public function register_taxonomies() {

        }
		
	/** This is where you add some context
	 *
	 * @param string $context context['this'] Being the Twig's {{ this }}.
	 */
	public function add_to_context( $context ) {
		$context['nav']  = new Timber\Menu();
		$context['site']  = $this;
		$custom_logo_url = wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' );
		$context['custom_logo_url'] = $custom_logo_url;
		return $context;
	}

	public function theme_supports() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
		add_theme_support( 'title-tag' );

		/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support( 'post-thumbnails' );

		/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/*
		* Enable support for Post Formats.
		*
		* See: https://codex.wordpress.org/Post_Formats
		*/
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'audio',
			)
		);

		add_theme_support( 'menus' );

		/*
		* logo custum
		*/
		add_theme_support('custom-logo',array(
			'flex-height' => true,
		));

		/** 
		 *  add class body
		*/
		add_filter( 'body_class', function( $classes ) {
			if ( is_page_template( 'page-merci.php' ) ) {
				$classes[] = 'page-thanks';
			} elseif ( is_page_template( 'page-solution.php' ) ) {
				$classes[] = 'page-solution';
			} elseif ( is_page_template( 'page-contact.php' ) ) {
				$classes[] = 'page-contact';
			} elseif ( is_page_template( 'page-demo.php' ) ) {
				$classes[] = 'page-demo';				
			} elseif ( is_front_page() ){
				$classes[] = 'page-home';	
			}	
		  return array_merge( $classes);
		});


		if ( is_page_template( 'page-merci.php' ) ) {
			// about.php is used
		} else {
			// about.php is not used
		}		
	}

	/** This is where you can add your own functions to twig.
	 *
	 * @param string $twig get extension.
	 */
	public function add_to_twig( $twig ) {
		$twig->addExtension( new Twig\Extension\StringLoaderExtension() );
		$twig->addFilter( new Twig\TwigFilter( 'myfoo', array( $this, 'myfoo' ) ) );
		return $twig;
	}
}
new serveat();
	/**
	 * Load Google Fonts from CDN.
	 */
	function google_fonts() {
		$google_fonts_url = 'https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&display=swap';
		?>
		
		<link rel="preconnect"
			href="https://fonts.gstatic.com"
			crossorigin />
	
		<link rel="preload"
			as="style"
			href="<?php echo $google_fonts_url; ?>" />

		<link rel="stylesheet"
		href="<?php echo $google_fonts_url; ?>" />	
	<?php 
	}
		add_action( 'wp_head', 'google_fonts', 3 );

	/*
	* load font awesome
	*/	
	function font_awesome() {
		wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
	}
	add_action( 'wp_enqueue_scripts', 'font_awesome');


	/*
	* style theme
	*/
	function serveat_style()  {
		wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . serveat_get_hash( 'styles.css' ) );
	}
	add_action( 'wp_enqueue_scripts', 'serveat_style' );

	
	/*
	* scripts theme
	*/
	function serveat_scripts()  {
		// wp_enqueue_script('vendors', get_template_directory_uri() . serveat_get_hash('vendors.js'), array(), '', true);
		wp_enqueue_script('app', get_template_directory_uri() . serveat_get_hash('app.js'), array(), '', true);
	}
	add_action( 'wp_footer', 'serveat_scripts' );


	/*
	* hash webpack 
	*/
	function serveat_get_hash( $file ) {

		$map = get_template_directory() . '/dist/manifest.json';
		static $hash = null;

		if ( null === $hash ) {
			$hash = file_exists( $map ) ? json_decode( file_get_contents( $map ), true ) : [];
		}

		if ( array_key_exists( $file, $hash ) ) {
			return '/dist/' . $hash[ $file ];
		}
		return $file;
	}


	/**
	 * clean wordpress
	 */
	// require get_template_directory() . '/cleaner.php';

	/**
	 * Removes some menus by page.
	 */
	function wpdocs_remove_menus() {
		remove_menu_page( 'edit.php' );                  
		remove_menu_page( 'edit-comments.php' );       
	}
	add_action( 'admin_menu', 'wpdocs_remove_menus' ); 

	

	/**
	 * add menu homePage
	 */	
	function menu_homePage(){
			add_menu_page(
				'Post Types',    
				'Home Page',          
				'edit_posts',           
				// 'javascript:void(0);',  
				'homepost/custom-post-home.php',
				'',                   
				'dashicons-food', 
				4
			);
	} 
	add_action( 'admin_menu', 'menu_homePage' );

	/**
	 * add menu solutionPage
	 */	
	function menu_solutionPage(){
		add_menu_page(
			'Post Types',    
			'Solution Page',          
			'edit_posts',           
			// 'javascript:void(0);',  
			'solutionpost/custom-post-solution.php',
			'',                   
			'dashicons-food', 
			4
		);
		// add_submenu_page(
		// 	'javascript:void(0);',
		// 	// 'solutionpost/custom-post-solution.php',
		// 	'Liste Serveat',
		// 	'Liste Serveat',
		// 	'edit_posts',
		// 	"edit.php?post_type=list-serveat"
		// );				
} 
add_action( 'admin_menu', 'menu_solutionPage' );	