<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enrollment $enrollment
 */
?>
<style type="text/css">
    /** Clase de css hecha por mi para ponerle margen a los botones(espacio entre ellos).
    Nota: Si utilizan este tipo de clases en toda la apliación o la usan bastante entonces es convenente crear su propio archivo css y agregarlo en el layout
    */
    .btn-space {
    margin-right: 3px;
    margin-leftt: 3px;
    }
</style>
<div class="enrollments form large-9 medium-8 columns content">
    <?= $this->Form->create($enrollment,['novalidate']) ?>
    <fieldset>
        <legend><?= __('Modificar matrícula') ?></legend>
        <?php echo $this->Form->control('grade',['label'=>['text'=>'Nota'],
                                               'templates' => [
                                                        'inputContainer' => '<div class="row col-xs-4 col-sm-4 col-md-4 col-lg-4">{{content}}</div><br>',
                                                        'inputContainerError' => '<div class="row {{type}} error col-xs-4 col-sm-4 col-md-4 col-lg-4"> {{content}} {{error}}</div>'
                                                              ],
                                                'type'=>'text'  
                                              ]);
            echo $this->Form->control('student_id', ['options' => $students,
                                                    'label'=>['text'=>'Id del estudiante'],
                                                    'templates' => [
                                                        'inputContainer' => '<div class="row col-xs-4 col-sm-4 col-md-4 col-lg-4">{{content}}</div><br>',
                                                        'inputContainerError' => '<div class="row {{type}} error col-xs-4 col-sm-4 col-md-4 col-lg-4"> {{content}} {{error}}</div>'
                                                                    ]  
                                                    ]);


            echo $this->Form->control('subject_id', ['options' => $subjects,
                                                    'label'=>['text'=>'Nombre del curso'],
                                                     'templates' => [
                                                        'inputContainer' => '<div class="row col-xs-4 col-sm-4 col-md-4 col-lg-4">{{content}}</div><br>',
                                                        'inputContainerError' => '<div class="row {{type}} error col-xs-4 col-sm-4 col-md-4 col-lg-4"> {{content}} {{error}}</div>'
                                                                    ]   
                                                    ]);
        ?>
    </fieldset>
    <?= $this->Html->link(__('Cancelar'),['action'=>'index'],['class'=>'btn btn-primary float-right btn-space']) ?>
    <?= $this->Form->button(__('Aceptar'),['class'=>'btn btn-primary float-right btn-space']) ?>
    <?= $this->Form->end() ?>
</div>
