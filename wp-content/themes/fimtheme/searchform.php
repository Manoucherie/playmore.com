<?php
/**
* The search form template file
*/
?>
						<form action="<?php echo home_url('/') ?>" method="get">
							<div class="input-group mb-4">
								<input type="text" class="form-control" name="s" value="<?php the_search_query(); ?>" placeholder="votre recherche...">
								<div class="input-group-append">
								   <button class="btn btn-outline-secondary" type="submit">GO</button>
								</div>
							</div>
                        </form>
 