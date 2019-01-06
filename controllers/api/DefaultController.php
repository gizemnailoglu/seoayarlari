<?php
namespace kouosl\seoayarlari\controllers\api;


/**
 * Default controller for the `seoayarlari` module
 */
class DefaultController extends \kouosl\base\controllers\api\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('_index');
    }
}
