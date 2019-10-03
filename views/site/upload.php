<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>



<div class="clearfix">
<?php foreach ($images as $image): ?>

    <img class="picture" src="<?php echo $image->link; ?>" alt="">

<?php endforeach; ?>

</div>
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

        <?= $form->field($model, 'images[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

            <button>Submit</button>

        <?php ActiveForm::end() ?>

