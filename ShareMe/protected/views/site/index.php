<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
</br>
<div class="row">
    <?php
    if(!Yii::app()->user->isGuest){
        echo "<h2>User Info</h2>";
        echo "<b>Name: </b>" . Yii::app()->user->name;
        echo "</br><b>Email: </b>" . Yii::app()->user->email;
        echo "</br><b>User Type: </b>" . Yii::app()->user->user_type;
        if(Yii::app()->user->isClient){
            $under_whom = User::model()->find(array('condition' => "id='".Yii::app()->user->boss."'"));
            if(!is_null($under_whom)) echo "</br><b>Under Agent: </b>" . $under_whom->name;
        }

    }
    else{
        echo "<b>Log in now to share what you want to share.";
        echo "</br>Don't have an account yet? Ask admin to create account.</b>";
    }


    ?>
</div>
</br>
<h2>About, Rules</i></h2>

<b>Go to 'About' page to know about the page and rules-regulations.</b>