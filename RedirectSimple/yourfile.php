<?php

			function get_redirect_target($destination)
			{

				$headers = get_headers($destination, 1);
				return $headers['Location'];
			}

								//If form submitted empty
			if (!isset($_POST['submit']))
			{

					$url=array();
	
					echo "no value entered";
			}
			else
			{
										//Retrieve established url array.

					$url=($_POST['url']);

										//Convert user input string into an array.

					$added=explode(' ',$_POST['added']);

										//Add to the established array.

				
					foreach ($added as $value) 
					{
						echo($value);
						echo(" => ");
						echo(get_resource_target($value));
						echo("\n");
					}
			}

			?>	
				

 


