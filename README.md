# PageTotal
Component for count total of column in GridView

How to use:
    
    <?php
    echo GridView::widget([
        'tableOptions' => ['class' => 'table table-striped table-bordered table-condensed table-responsive'],
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showFooter'=>TRUE,
        'footerRowOptions'=>['style'=>'font-weight:bold;'],
        'columns' => [
            [
                'attribute' =>'sum',
                'footer'=> \app\components\PageTotal::pageTotal($dataProvider->models,'sum'),
            ],
            [
                'attribute' =>'fact',
                'value' => 'fact',
                'footer'=> \app\components\PageTotal::pageTotal($dataProvider->models,'fact'),
            ],
        ],
    ]); 
    ?>
