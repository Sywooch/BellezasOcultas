<?php
use yii\helpers\Html;
if ($buttonStyle != 'mini') {
?>
<button class="btn btn-default command-btn-pad dropdown-toggle <?= ($buttonStyle=='large'?'btn-lg':'')?>" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
<span class="glyphicon glyphicon-cloud-download"></span>&nbsp;
<?= ($buttonStyle=='large'?Yii::t('frontend','Choose your calendar'):Yii::t('frontend','Calendar'));?>
&nbsp;<span class="caret"></span>
</button>
    <?php
  } else {
    ?>
    <button class="btn btn-default btn-xs dropdown-toggle grid-download-button"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <span class="glyphicon glyphicon-cloud-download"></span>
    </button>
    <?php
  }
 ?>
<ul class="dropdown-menu <?= ($buttonStyle=='large'?'pull-left':'pull-right')?>" aria-labelledby="dropdownMenu2">
  <li>
<?php
  echo Html::a(Yii::t('frontend', 'Apple Calendar'), ['download', 'id' => $meeting_id,'actor_id'=>Yii::$app->user->getId(),'calendar'=>'apple'], ['class' => 'command-btn-pad']);
?>
  </li>
  <li>
  <?php
  echo Html::a(Yii::t('frontend', 'Google Calendar'), ['download', 'id' => $meeting_id,'actor_id'=>Yii::$app->user->getId(),'calendar'=>'google'], ['class' => 'command-btn-pad','target'=>'_blank']);
  ?>
  </li>
  <li>
  <?php
  echo Html::a(Yii::t('frontend', 'Microsoft Outlook'), ['download', 'id' => $meeting_id,'actor_id'=>Yii::$app->user->getId(),'calendar'=>'outlook'], ['class' => 'command-btn-pad']);
  ?>
  <?php
  echo Html::a(Yii::t('frontend', 'Yahoo Calendar'), ['download', 'id' => $meeting_id,'actor_id'=>Yii::$app->user->getId(),'calendar'=>'yahoo'], ['class' => 'command-btn-pad','target'=>'_blank']);
  ?>
  </li>
</ul>
