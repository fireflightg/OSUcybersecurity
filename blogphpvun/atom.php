<?php
	// Atom feed support
	// (c) 2004 Javier Guti�rrez Chamorro (Guti), guti <at> ya <dot> com
	//
	// Simple PHP Version: 0.8.0
	// Atom Version:   0.8.0
	
	
	// Include Required Functions
	require('scripts/sb_functions.php');
	
	read_config();
	
	require('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'index' );
	
	// Output Page
	generate_atom( @$_GET['n'] );
?>
