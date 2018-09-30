        <?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enrollment $enrollment
 */
?>
<div class="enrollments view large-9 medium-8 columns content">
    <h3><?= 'Matricula Nº '.h($enrollment->enrollments_id) ?></h3>
    <br>
    <table class="vertical-table table-striped">
        <tr>
            <th scope="row col-3"><?= __('Id de la Matricula') ?></th>
            <td class= "col-3"><?= $this->Number->format($enrollment->enrollments_id) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Id del estudiante') ?></th>
            <td class= "col-3"><?= $enrollment->has('student') ? $this->Html->link($enrollment->student->students_id, ['controller' => 'Students', 'action' => 'view', $enrollment->student->students_id]) : '' ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Nombre Del estudiante') ?></th>
            <td class= "col-3"><?= $enrollment->has('student') ? $enrollment->student->first_name.' '. $enrollment->student->last_name : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre del curso') ?></th>
            <td class= "col-3"><?= $enrollment->has('subject') ? $this->Html->link($enrollment->subject->title, ['controller' => 'Subjects', 'action' => 'view', $enrollment->subject->subjects_id]) : '' ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Nota') ?></th>
            <td class= "col-3"><?= $this->Number->format($enrollment->grade) ?></td>
        </tr>
    </table>
    <br>
    <?= $this->Html->link(__('Aceptar'),['action'=>'index'],['class'=>'btn btn-primary float-right'])?>
</div>
