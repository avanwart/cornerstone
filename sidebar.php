					<div id="sidebar1" class="sidebar well clearfix" role="complementary">
						<div class="inner pale">

							<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

								<?php dynamic_sidebar( 'sidebar1' ); ?>

							<?php else : ?>

								<!-- This content shows up if there are no widgets defined in the backend. -->

								<div class="alert alert-danger">
									<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
								</div>

							<?php endif; ?>
					</div>
				</div>