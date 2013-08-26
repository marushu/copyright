<?php
function my_copyright( $startyear ) {
	echo 'Copyright &copy; ';
	if( $startyear != date( 'Y', current_time( 'timestamp' ) ) ) {
		echo $startyear;
		echo ' - ';
	}
	echo date( 'Y', current_time( 'timestamp' ) );
	echo ' ' . get_bloginfo( 'name' );
	echo 'All Right Reserved.';
}

// my_copyright( year_num );
