
<?php if ($preholiday) { ?>
	<p><?php echo $preholidayName; ?>: sesions resume $thatday</p>
<?php } ?>

<?php elseif ($preholiday) { ?>
	<p>pre holiday message <?php echo $preholidayName; ?>: sesions resume $thatday</p>
<?php } ?><!-- else for non-pre-holidays -->



		$preholidays = array(
			"0703" => "prefourth",                /* 2 */
			"0831" => "prelabor",                                          /* 5 */
			"0901" => "prelabor",                                                 /* 6 */
			"0902" => "prelabor",                                                        /* 7 */
			"1101" => "prehomecoming",                            /* 4 */
			"1109" => "preveterans",                                       /* 5 */
			"1110" => "preveterans",                                       /* 5 */
			"1111" => "preveterans",                                       /* 5 */
		  "1121" => "prethanksgiving",                 	/* 3 */
			"1224" => "prechristmas",      /* 1 */
			"1231" => "prenewyears"        /* 1 */
		);

		foreach ($preholidays as $key => $preholidayName) {
			if ($specialday == $key) {
				$preholiday = "preholiday";
				return $preholidayName;
			}
		}
