
			  $holidayClosed = array(
		      "julyfourth"   => "0704",
		      "laborday"     => "0903",
		      "homecoming"   => "1102",
		      "veteransday"  => "1112",
		      "thanksgiving" => "1122",
		      "thanksgiving" => "1123",
		      "christmas"    => "1125"
		    );

				foreach ($holidayClosed as $key => $value) {

        if ($specialday == $value) {
          include("holiday/julyfourth.php");
          echo $value . "<br>";
        }

      }
