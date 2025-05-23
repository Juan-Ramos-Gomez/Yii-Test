<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */

$this->title = 'YII2 CRUD Application';
?>
<div class="site-index">

    <h1>Create post</h1>

    <div class="body-content">
        <?php 
            $form = ActiveForm::begin()?>
        <div class ="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?php echo $form -> field($post, 'title'); ?>
                </div>
            </div>
        </div>
        <div class ="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?php echo $form -> field($post, 'description') -> textarea(['rows' => '6']); ?>
                </div>
            </div>
        </div>
        <div class ="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?php $items = ['e-commerce'=>'e-commerce', 'CMS' => 'CMS', 'MVC' => 'MVC']?>
                    <?php echo $form -> field($post, 'category') -> dropDownList($items, ['prompt' => 'Select']); ?>
                </div>
            </div>
        </div>
        <div class ="row">
            <div class="form-group">
                <div class="col-lg-6"> 
                    <div class="col-lg-3">
                        <?= Html::submitButton('Create Post', ['class' => 'btn btn-primary']);?>
                    </div>
                    <div class="col-lg-2">
                        <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
        <?php ActiveForm::end() ?>

    </div>
</div>
