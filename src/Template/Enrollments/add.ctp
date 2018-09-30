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
        <legend><?= __('Nueva matricula') ?></legend>
        <!--  El segundo parametro es un array que contiene configuraciones visuales
            del input. Estas configuraciones van dentro de un array y se subdividen en
            label, templates y options. A su vez, label y templates contienen su propio
            array con su determinada confiuración.

            Configuración del template:
            esto corresponde a la plantilla que crea el FormHelper de CakePHP. Esta plantilla dice qué y cómo se va a generar en html. Para este ejemplo, loq ue hice fue ajustar el tamaño del div que contiene el label(el texto) y el input( el cuadro donde se ingresan los datos). Además noten que hay una plantilla llamada "inputContainerError", esta plantilla se usa cuando el controlador se da cuenta de que existe un error en los datos cuando el modelo validó los mismos.-->
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
    <!-- Aquí sucede algo curioso que tienen que tomar en cuenta. Como se mandan hacia la derecha los botones con la clase "float-right entonces entonces el orden de programación de dichos botones importa. De ahí viene que "Cancelar" este antes que aceptar-->
    
    <?= $this->Html->link(__('Cancelar'),['action'=>'index'],['class'=>'btn btn-primary float-right btn-space']) ?>
    <?= $this->Form->button(__('Aceptar'),['class'=>'btn btn-primary float-right btn-space']) ?>
    <?= $this->Form->end() ?>
</div>
