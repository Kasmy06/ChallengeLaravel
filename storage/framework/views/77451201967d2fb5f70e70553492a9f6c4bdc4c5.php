


<?php $__env->startSection("contenu"); ?>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-4">Liste des étudiants inscrits</h6>
    <div class="mt-4">
        <div class="d-flex justify-content-end mb-4">
        <a href="#" class="btn btn-primary">Ajouter un nouveau étudiant</a>
        </div>
    <table class="table table-bordered table-hover ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">classe</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
          <a href="#" class="btn btn-info">Modifier</a>
          <a href="#" class="btn btn-danger">Supprimer</a>
      </td>
    </tr>
  </tbody>
</table>
    </div>
   
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studentcrudd\resources\views/etudiant.blade.php ENDPATH**/ ?>