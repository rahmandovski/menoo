<?php 
/* /opt/lampp/htdocs/menoo/themes/tastyigniter-orange/_pages/local/reviews.blade.php */
class Pagic5fc27d89d7560937588453_ad30b327af2b23bf59d06135a30e8d2eClass extends \Main\Template\Code\PageCode
{

public function onStart() {
    if (!setting('allow_reviews')) {
        flash()->error(lang('igniter.local::default.review.alert_review_disabled'))->now();

        return Redirect::to($controller->pageUrl($localReview->property('redirectPage')));
    }
}

}
