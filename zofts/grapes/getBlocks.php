<?php
/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use rmrevin\yii\fontawesome\FA;
use zetsoft\models\page\PageAction;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\helpers\ZVarDumper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;


/** @var ZView $this */
$this->init();
$this->type = WebItem::type['ajax'];
$action->icon =false;


$get = $this->httpGet('param');
$param = str_replace('/', '\\', $get);
$param = str_replace('zetsoft', '', $param) . '.php';

echo "<!--TEMPLATEBEGIN-->
<div class='widgetsWrap' widget='$get'>
";

echo $this->requireAjaxFilePreg(Root . $param);

echo "
      </div>
      <!--TEMPLATEEND-->
      <!--\$this->require_block(Root . '$param');-->
";
