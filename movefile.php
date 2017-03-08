<?PHP
	$bool = move_uploaded_file("/Users/bjhl/Sites/tmp/default_avatar.png", "/Users/bjhl/Sites/tmp/test.png");
        if($bool)
        {
            echo "su";
        }
        else
        {
            echo "fa";
        }
?>
