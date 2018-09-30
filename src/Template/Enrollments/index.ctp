<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enrollment[]|\Cake\Collection\CollectionInterface $enrollments
 */
?>

<div class="enrollments index large-9 medium-8 main">
    <h3><?= __('Matricula') ?></h3>
    <?= $this->Html->link('Nueva matrícula',['action'=>'add'],['class'=>'btn btn-info float-right'])?>
    <br>
    <br>
    <table class="table table-striped" id="Enrollments-grid" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">Id de matricula</th>
                <th scope="col">Nota </th>
                <th scope="col">Id del estudiante</th>
                <th scope="col">Nombre del curso</th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enrollments as $enrollment): ?>
            <tr>
                <td><?= $this->Number->format($enrollment->enrollments_id) ?></td>
                <td><?= $this->Number->format($enrollment->grade) ?></td>
                <td><?= $enrollment->has('student') ? $this->Html->link($enrollment->student->students_id, ['controller' => 'Students', 'action' => 'view', $enrollment->student->students_id]) : '' ?></td>
                <td><?= $enrollment->has('subject') ? $this->Html->link($enrollment->subject->title, ['controller' => 'Subjects', 'action' => 'view', $enrollment->subject->subjects_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('<span class="typcn typcn-document"></span>'), ['action' => 'view', $enrollment->enrollments_id],['escape'=>false,'style'=>'font-size:22px;']) ?>
                    <?= $this->Html->link(__('<span class="typcn typcn-pen"></span>'), ['action' => 'edit', $enrollment->enrollments_id],['escape'=>false,'style'=>'font-size:22px;']) ?>
                    <?= $this->Form->postLink(__('<span class="typcn typcn-trash"></span>'), ['action' => 'delete', $enrollment->enrollments_id], ['confirm' => __('Por favor confirme si desea eliminar la matrícula nº {0}', $enrollment->enrollments_id),'style'=>'font-size:22px;','escape'=>false]) ?>
                </td>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script type="text/javascript">
    $(document).ready( function () {
        $('#Enrollments-grid').DataTable(
          {
            /** Configuración del DataTable para cambiar el idioma, se puede personalisar aun más **/
            "language": {
                "lengthMenu": "Mostrar _MENU_ filas por página",
                "zeroRecords": "Sin resultados",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Sin datos disponibles",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "sSearch": "Buscar:",
                "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    }
            }
          }
        );
    } );
</script>