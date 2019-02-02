<?php if (in_category('product')) {
  include (TEMPLATEPATH . '/single_product.php');
}
elseif (in_category('project')) {
  include (TEMPLATEPATH . '/single_project.php');
}
elseif (in_category('video')) {
  include (TEMPLATEPATH . '/single_video.php');
}
elseif (in_category('idea')) {
  include (TEMPLATEPATH . '/single_idea.php');
}
  else {include (TEMPLATEPATH . '/single_default.php'); 
}
