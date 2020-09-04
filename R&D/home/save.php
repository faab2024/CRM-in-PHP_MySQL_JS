<?php
    // an array items to insert
    $array = array( 'dingo'       => 'A native dog',
            'wombat'      => 'A native marsupial',
            'platypus'    => 'A native monotreme',
            'koala'       => 'A native Phascolarctidae'
            );
    // begin the sql statement
    $sql = "INSERT INTO test_table (name, description ) VALUES ";
    // this is where the magic happens
    $it = new ArrayIterator( $array );
    // a new caching iterator gives us access to hasNext()
    $cit = new CachingIterator( $it );
    // loop over the array
    foreach ( $cit as $value )
    {
        // add to the query
        $sql .= "('".$cit->key()."','" .$cit->current()."')";
        // if there is another array member, add a comma
        if( $cit->hasNext() )
        {
            $sql .= ",";
        }
    }
    // now we can use a single database connection and query
    $conn = mysql_connect('localhost','bnsznyem_abfa', '!@#123qweasdzxc' );
    mysql_select_db( 'bnsznyem_rgu', $conn );
    mysql_query( $sql, $conn );
    ?> 